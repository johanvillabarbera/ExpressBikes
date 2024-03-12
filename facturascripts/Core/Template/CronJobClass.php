<?php
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2024 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace FacturaScripts\Core\Template;

use Exception;
use FacturaScripts\Core\DataSrc\Users;
use FacturaScripts\Core\Tools;
use FacturaScripts\Dinamic\Lib\Email\NewMail;
use FacturaScripts\Dinamic\Model\LogMessage;

abstract class CronJobClass
{
    const JOB_NAME = 'cron';

    abstract public static function run(): void;

    /** @var string */
    private static $echo = '';

    protected static function echo(string $text): void
    {
        echo $text;
        ob_flush();

        self::$echo .= $text;
    }

    protected static function getEcho(): string
    {
        return self::$echo;
    }

    protected static function text(string $text): void
    {
        self::$echo .= $text;
    }

    protected static function saveEcho(): void
    {
        if (empty(self::$echo)) {
            return;
        }

        // el texto está limitado a 3000 caracteres, así que debemos guardar un registro por cada 3000
        $max = 3000;
        while (strlen(self::$echo) > $max) {
            $log = new LogMessage();
            $log->channel = static::JOB_NAME;
            $log->level = 'info';
            $log->message = substr(self::$echo, 0, $max);
            $log->save();

            self::$echo = substr(self::$echo, $max);
        }
    }

    protected static function sendToAdmins(string $subject, string $body): void
    {
        foreach (Users::all() as $user) {
            if (false === $user->admin) {
                continue;
            }

            try {
                NewMail::create()
                    ->to($user->email, $user->nick)
                    ->subject($subject)
                    ->body(
                        '<p>Hola ' . $user->nick . ",<br><br>" . nl2br($body)
                        . '</p><br/><br/><p>Atentamente,<br/>el cron de FacturaSctipts</p>'
                    )
                    ->send();
            } catch (Exception $ex) {
                Tools::log(static::JOB_NAME)->error($ex->getCode() . ' - ' . $ex->getMessage());
            }
        }
    }
}
