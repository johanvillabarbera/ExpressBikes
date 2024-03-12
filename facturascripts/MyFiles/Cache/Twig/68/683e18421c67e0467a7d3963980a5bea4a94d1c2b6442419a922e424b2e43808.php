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

/* Wizard.html.twig */
class __TwigTemplate_93021332baef2ddb45164d447bce335e70f21a347694c260c473a8d560ae7d90 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Wizard.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"bg-primary pt-5 pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">";
        // line 26
        $this->displayParentBlock("messages", $context, $blocks);
        echo "</div>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
    </div>
";
    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "    <!-- Macros Template Imports -->
    ";
        // line 37
        $macros["forms"] = $this->loadTemplate("Macro/Forms.html.twig", "Wizard.html.twig", 37)->unwrap();
        // line 38
        echo "    ";
        $context["ciudad"] = ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 38)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 38), "ciudad", [], "any", false, false, false, 38)) : (""));
        // line 39
        echo "    ";
        $context["codpais"] = ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 39)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 39), "codpais", [], "any", false, false, false, 39)) : ($this->env->getFunction('settings')->getCallable()("default", "codpais", "ESP")));
        // line 40
        echo "    ";
        $context["provincia"] = ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 40)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 40), "provincia", [], "any", false, false, false, 40)) : (""));
        // line 41
        echo "
    <div class=\"container\" style=\"margin-top: -100px;\">
        <form method=\"post\" class=\"form\" id=\"formWizard\">
            ";
        // line 44
        echo $this->env->getFunction('formToken')->getCallable()();
        echo "
            <input type=\"hidden\" name=\"action\" value=\"step1\"/>
            <div class=\"card shadow mb-5\">
                <div class=\"card-body\">
                    <h1 class=\"h3\">
                        <i class=\"fas fa-magic\" aria-hidden=\"true\"></i> ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("wizard"), "html", null, true);
        echo "
                        <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 50), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("refresh"), "html", null, true);
        echo "\">
                            <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                        </a>
                    </h1>
                    <p>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("wizard-p"), "html", null, true);
        echo "</p>
                    <hr/>
                    <div class=\"form-row\">
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                ";
        // line 59
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["empresa", "empresa", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 59), "nombre", [], "any", false, false, false, 59), "text", $this->env->getFunction('trans')->getCallable()("company-name"), "", ["autofocus" => "", "maxlength" => "100", "required" => ""]], 59, $context, $this->getSourceContext());
        // line 60
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                <label class=\"mb-1\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("type"), "html", null, true);
        echo "</label>
                                <select name=\"personafisica\" class=\"form-control\">
                                    ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 67), "personafisica", [], "any", false, false, false, 67)) {
            // line 68
            echo "                                        <option value=\"1\" selected>";
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("is-person"), "html", null, true);
            echo "</option>
                                        <option value=\"0\">";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("company"), "html", null, true);
            echo "</option>
                                    ";
        } else {
            // line 71
            echo "                                        <option value=\"1\">";
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("is-person"), "html", null, true);
            echo "</option>
                                        <option value=\"0\" selected>";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("company"), "html", null, true);
            echo "</option>
                                    ";
        }
        // line 74
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                ";
        // line 79
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["tipoidfiscal", "tipoidfiscal", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 79), "tipoidfiscal", [], "any", false, false, false, 79), twig_get_attribute($this->env, $this->source,         // line 80
($context["fsc"] ?? null), "getSelectValues", ["IdentificadorFiscal", true], "method", false, false, false, 80), $this->env->getFunction('trans')->getCallable()("fiscal-id")], 79, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                ";
        // line 85
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["cifnif", "cifnif", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 85), "cifnif", [], "any", false, false, false, 85), "text", $this->env->getFunction('trans')->getCallable()("fiscal-number"), "", ["maxlength" => "30"]], 85, $context, $this->getSourceContext());
        // line 86
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                ";
        // line 91
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["direccion", "direccion", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 91), "direccion", [], "any", false, false, false, 91), "text", $this->env->getFunction('trans')->getCallable()("address"), "fas fa-map-marked", ["maxlength" => "100"]], 91, $context, $this->getSourceContext());
        // line 92
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                ";
        // line 97
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["apartado", "apartado", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 97), "apartado", [], "any", false, false, false, 97), "text", $this->env->getFunction('trans')->getCallable()("post-office-box"), null, ["maxlength" => "10", "placeholder" => $this->env->getFunction('trans')->getCallable()("optional")]], 97, $context, $this->getSourceContext());
        // line 98
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                ";
        // line 103
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["codpostal", "codpostal", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 103), "codpostal", [], "any", false, false, false, 103), "text", $this->env->getFunction('trans')->getCallable()("zip-code"), null, ["maxlength" => "10"]], 103, $context, $this->getSourceContext());
        // line 104
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 109
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["ciudad", "ciudad", ($context["ciudad"] ?? null), "text", $this->env->getFunction('trans')->getCallable()("city"), "", ["maxlength" => "100"]], 109, $context, $this->getSourceContext());
        // line 110
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 115
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["provincia", "provincia", ($context["provincia"] ?? null), "text", $this->env->getFunction('trans')->getCallable()("province"), "", ["maxlength" => "100"]], 115, $context, $this->getSourceContext());
        // line 116
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 121
        if (twig_constant_is_defined("FS_INITIAL_CODPAIS")) {
            // line 122
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codpais", "codpais", ($context["codpais"] ?? null), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getSelectValues", ["Pais"], "method", false, false, false, 122), $this->env->getFunction('trans')->getCallable()("country"), "fas fa-globe-americas", ["disabled" => ""]], 122, $context, $this->getSourceContext());
            // line 123
            echo "
                                ";
        } else {
            // line 125
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codpais", "codpais", ($context["codpais"] ?? null), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getSelectValues", ["Pais"], "method", false, false, false, 125), $this->env->getFunction('trans')->getCallable()("country"), "fas fa-globe-americas"], 125, $context, $this->getSourceContext());
            // line 126
            echo "
                                ";
        }
        // line 128
        echo "                            </div>
                        </div>
                        ";
        // line 130
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 130), "email", [], "any", false, false, false, 130)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 130), "email", [], "any", false, false, false, 130)))) {
            // line 131
            echo "                            <div class=\"col-sm-4\">
                                <div class=\"form-group\">
                                    ";
            // line 133
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["email", "email", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 133), "email", [], "any", false, false, false, 133), "email", $this->env->getFunction('trans')->getCallable()("email"), "fas fa-envelope", ["required" => "", "class" => "form-control"]], 133, $context, $this->getSourceContext());
            // line 134
            echo "
                                </div>
                            </div>
                        ";
        }
        // line 138
        echo "                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 140
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["telefono1", "telefono1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 140), "telefono1", [], "any", false, false, false, 140), "text", $this->env->getFunction('trans')->getCallable()("phone"), "fas fa-phone", ["maxlength" => "30"]], 140, $context, $this->getSourceContext());
        // line 141
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 146
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["telefono2", "telefono2", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 146), "telefono2", [], "any", false, false, false, 146), "text", $this->env->getFunction('trans')->getCallable()("phone2"), "fas fa-mobile-alt", ["maxlength" => "30"]], 146, $context, $this->getSourceContext());
        // line 147
        echo "
                            </div>
                        </div>
                    </div>
                    ";
        // line 151
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 151), "verifyPassword", ["admin"], "method", false, false, false, 151)) {
            // line 152
            echo "                        <div class=\"form-row\">
                            <div class=\"col mt-3\">
                                <h3 class=\"h4 text-info\">
                                    <i class=\"fas fa-key\" aria-hidden=\"true\"></i>
                                    ";
            // line 156
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("you-should-change-passwd"), "html", null, true);
            echo "
                                </h3>
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"col-sm-4\">
                                ";
            // line 162
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["user", "user", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 162), "nick", [], "any", false, false, false, 162), "text", $this->env->getFunction('trans')->getCallable()("user"), "fas fa-user", ["readonly" => ""]], 162, $context, $this->getSourceContext());
            echo "
                            </div>
                            <div class=\"col-sm-4\">
                                <div class=\"form-group\">
                                    ";
            // line 166
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["password", "password", "", "password", $this->env->getFunction('trans')->getCallable()("new-password"), "fas fa-key", ["class" => "form-control", "placeholder" => $this->env->getFunction('trans')->getCallable()("optional")]], 166, $context, $this->getSourceContext());
            // line 167
            echo "
                                </div>
                            </div>
                            <div class=\"col-sm-4\">
                                <div class=\"form-group\">
                                    ";
            // line 172
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["repassword", "repassword", "", "password", $this->env->getFunction('trans')->getCallable()("repeat-new-password"), "fas fa-key", ["class" => "form-control", "placeholder" => $this->env->getFunction('trans')->getCallable()("optional")]], 172, $context, $this->getSourceContext());
            // line 173
            echo "
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 178
        echo "                </div>
                <div class=\"card-footer text-right\">
                    <button type=\"submit\" class=\"btn btn-primary\" id=\"btnWizard\">
                        ";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("continue"), "html", null, true);
        echo "
                    </button>
                </div>
            </div>
        </form>
        <br/>
    </div>
";
    }

    // line 190
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 191
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/CSS/custom.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 195
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 196
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/pace-js/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/JS/Custom.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            \$(\"#formWizard\").submit(function () {
                \$(\"#btnWizard\").prop('disabled', true);
                \$(\"#btnWizard\").html('<i class=\"fas fa-circle-notch fa-spin\"></i>');
            });
        });
    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Wizard.html.twig";
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
        return array (  370 => 198,  366 => 197,  361 => 196,  357 => 195,  351 => 192,  346 => 191,  342 => 190,  330 => 181,  325 => 178,  318 => 173,  316 => 172,  309 => 167,  307 => 166,  300 => 162,  291 => 156,  285 => 152,  283 => 151,  277 => 147,  275 => 146,  268 => 141,  266 => 140,  262 => 138,  256 => 134,  254 => 133,  250 => 131,  248 => 130,  244 => 128,  240 => 126,  237 => 125,  233 => 123,  230 => 122,  228 => 121,  221 => 116,  219 => 115,  212 => 110,  210 => 109,  203 => 104,  201 => 103,  194 => 98,  192 => 97,  185 => 92,  183 => 91,  176 => 86,  174 => 85,  166 => 80,  165 => 79,  158 => 74,  153 => 72,  148 => 71,  143 => 69,  138 => 68,  136 => 67,  131 => 65,  124 => 60,  122 => 59,  114 => 54,  105 => 50,  101 => 49,  93 => 44,  88 => 41,  85 => 40,  82 => 39,  79 => 38,  77 => 37,  74 => 36,  70 => 35,  58 => 26,  53 => 23,  49 => 22,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Wizard.html.twig", "/var/www/html/Dinamic/View/Wizard.html.twig");
    }
}
