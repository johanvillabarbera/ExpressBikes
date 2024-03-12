<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Login/Login.html.twig */
class __TwigTemplate_db378630ab5021c7593f38b0517422ee70cca347978abf9f9e857c07805afcec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Login/Login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-6\">
                <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("login"), "html", null, true);
        echo "\" method=\"post\" class=\"form\">
                    ";
        // line 9
        echo $this->env->getFunction('formToken')->getCallable()();
        echo "
                    <input type=\"hidden\" name=\"action\" value=\"login\">
                    <div class=\"card mt-4\">
                        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("login"), "html", null, true);
        echo "\">
                            ";
        // line 13
        $context["idfile"] = $this->env->getFunction('settings')->getCallable()("default", "idloginimage", 0);
        // line 14
        echo "                            ";
        echo twig_call_macro($macros["_self"], "macro_loadLogo", [($context["idfile"] ?? null)], 14, $context, $this->getSourceContext());
        echo "
                        </a>
                        <div class=\"card-body\">
                            <p class=\"card-text text-center\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("login-text"), "html", null, true);
        echo "</p>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                                        </span>
                                    </span>
                                    <input type=\"text\" name=\"fsNick\" class=\"form-control\" maxlength=\"50\"
                                           placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("user"), "html", null, true);
        echo "\" required autocomplete=\"off\"
                                           autofocus/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                                        </span>
                                    </span>
                                    <input type=\"password\" name=\"fsPassword\" class=\"form-control\" maxlength=\"50\"
                                           placeholder=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("password"), "html", null, true);
        echo "\" required autocomplete=\"off\"/>
                                </div>
                                <a href=\"#\" class=\"btn btn-block btn-link\" data-toggle=\"modal\"
                                   data-target=\"#newPasswordModal\">
                                    ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("i-forgot-password"), "html", null, true);
        echo "
                                </a>
                            </div>
                            <button type=\"submit\" class=\"btn btn-block btn-primary mb-4\">
                                ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("login"), "html", null, true);
        echo "
                            </button>
                        </div>
                        <div class=\"card-footer text-center\">
                            <p>
                                FacturaScripts es un software libre de contabilidad, facturación y CRM.
                                No dude en consultar la web oficial o las cuentas de facebook, twitter o youtube.
                            </p>
                            <a href=\"https://facturascripts.com\" rel=\"nofollow\" class=\"btn btn-secondary\">
                                <i class=\"fas fa-question-circle mr-1\"></i> facturascripts.com
                            </a>
                            <a href=\"https://www.facebook.com/facturascripts/\" rel=\"nofollow\" class=\"btn btn-primary\"
                               title=\"facebook\"> <i class=\"fab fa-facebook\"></i>
                            </a>
                            <a href=\"https://twitter.com/facturascripts\" rel=\"nofollow\" class=\"btn btn-info\"
                               title=\"twitter\"> <i class=\"fab fa-twitter\"></i>
                            </a>
                            <a href=\"https://www.youtube.com/channel/UCtsptMQYpW2wJZkvak6NYng\" rel=\"nofollow\"
                               class=\"btn btn-danger\" title=\"youtube\"> <i class=\"fab fa-youtube\"></i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <form action=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("login"), "html", null, true);
        echo "\" method=\"post\" class=\"form\">
        ";
        // line 73
        echo $this->env->getFunction('formToken')->getCallable()();
        echo "
        <input type=\"hidden\" name=\"action\" value=\"change-password\">
        <div class=\"modal fade\" id=\"newPasswordModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-user-lock mr-2\"></i> ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("new-password"), "html", null, true);
        echo "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <a href=\"https://facturascripts.com/publicaciones/he-olvidado-mi-contrasena\" rel=\"nofollow\"
                           target=\"_blank\" class=\"btn btn-block btn-link mb-3\">
                            ";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("need-help-password"), "html", null, true);
        echo "
                        </a>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"text\" name=\"fsNewUserPasswd\" class=\"form-control\" maxlength=\"50\"
                                       placeholder=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("user"), "html", null, true);
        echo "\" required autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"password\" name=\"fsNewPasswd\" class=\"form-control\" maxlength=\"50\"
                                       placeholder=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("new-password"), "html", null, true);
        echo "\" required autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-eye fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"password\" name=\"fsNewPasswd2\" class=\"form-control\" maxlength=\"50\"
                                       placeholder=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("repeat-new-password"), "html", null, true);
        echo "\"
                                       required autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("database"), "html", null, true);
        echo "
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-database fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"password\" name=\"fsDbPasswd\" class=\"form-control\"
                                       placeholder=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("db-password"), "html", null, true);
        echo "\" autocomplete=\"off\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    // line 147
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <style>
        body {
            background-color: #333A40;
        }
    </style>
";
    }

    // line 156
    public function macro_loadLogo($__idfile__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "idfile" => $__idfile__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 157
            echo "    ";
            $context["url"] = "Dinamic/Assets/Images/horizontal-logo.png";
            // line 158
            echo "    ";
            if ((1 === twig_compare(($context["idfile"] ?? null), 0))) {
                // line 159
                echo "        ";
                $context["attached"] = $this->env->getFunction('attachedFile')->getCallable()(($context["idfile"] ?? null));
                // line 160
                echo "        ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["attached"] ?? null), "filename", [], "any", false, false, false, 160))) {
                    // line 161
                    echo "            ";
                    $context["url"] = twig_get_attribute($this->env, $this->source, ($context["attached"] ?? null), "url", ["download-permanent"], "method", false, false, false, 161);
                    // line 162
                    echo "        ";
                }
                // line 163
                echo "    ";
            }
            // line 164
            echo "    <img class=\"card-img-top\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(($context["url"] ?? null)), "html", null, true);
            echo "\" alt=\"FacturaScripts\"/>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Login/Login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  308 => 164,  305 => 163,  302 => 162,  299 => 161,  296 => 160,  293 => 159,  290 => 158,  287 => 157,  274 => 156,  262 => 148,  258 => 147,  247 => 139,  239 => 134,  228 => 126,  220 => 121,  206 => 110,  192 => 99,  179 => 89,  167 => 80,  157 => 73,  153 => 72,  124 => 46,  117 => 42,  110 => 38,  95 => 26,  83 => 17,  76 => 14,  74 => 13,  70 => 12,  64 => 9,  60 => 8,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Login/Login.html.twig", "/var/www/html/Dinamic/View/Login/Login.html.twig");
    }
}
