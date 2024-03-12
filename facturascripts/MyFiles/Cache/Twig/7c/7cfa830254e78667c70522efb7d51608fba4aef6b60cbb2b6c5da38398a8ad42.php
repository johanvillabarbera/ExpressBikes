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

/* Wizard-2.html.twig */
class __TwigTemplate_eee22c97cfb3a30f72f98eb32a2d9082e9eb7578ad5a8bebc333915bc6ccd242 extends Template
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
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Wizard-2.html.twig", 20);
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
        $macros["forms"] = $this->loadTemplate("Macro/Forms.html.twig", "Wizard-2.html.twig", 37)->unwrap();
        // line 38
        echo "    ";
        $context["codimpuesto"] = $this->env->getFunction('settings')->getCallable()("default", "codimpuesto");
        // line 39
        echo "    ";
        $context["codretencion"] = $this->env->getFunction('settings')->getCallable()("default", "codretencion");
        // line 40
        echo "
    <div class=\"container\" style=\"margin-top: -100px;\">
        <form action=\"#\" method=\"post\" class=\"form\" id=\"formWizard\">
            ";
        // line 43
        echo $this->env->getFunction('formToken')->getCallable()();
        echo "
            <input type=\"hidden\" name=\"action\" value=\"step2\"/>
            <div class=\"card shadow mb-5\">
                <div class=\"card-body\">
                    <h1 class=\"h3\">
                        <i class=\"fas fa-magic\" aria-hidden=\"true\"></i> ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("wizard"), "html", null, true);
        echo "
                        <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 49), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\"
                           title=\"";
        // line 50
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
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 59
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["regimeniva", "regimeniva", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 59), "regimeniva", [], "any", false, false, false, 59), twig_get_attribute($this->env, $this->source,         // line 60
($context["fsc"] ?? null), "getRegimenIva", [], "method", false, false, false, 60), $this->env->getFunction('trans')->getCallable()("vat-regime")], 59, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 65
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codimpuesto", "codimpuesto", ($context["codimpuesto"] ?? null), twig_get_attribute($this->env, $this->source,         // line 66
($context["fsc"] ?? null), "getSelectValues", ["Impuesto", true], "method", false, false, false, 66), $this->env->getFunction('trans')->getCallable()("default-tax")], 65, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                <label class=\"mb-1\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("cost-price-policy"), "html", null, true);
        echo "</label>
                                <select name=\"costpricepolicy\" class=\"form-control\">
                                    <option value=\"\">------</option>
                                    <option value=\"last-price\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("last-purchase-price"), "html", null, true);
        echo "</option>
                                    <option value=\"average-price\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("average-purchase-price"), "html", null, true);
        echo "</option>
                                    <option value=\"actual-price\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("actual-cost-price"), "html", null, true);
        echo "</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col-sm-auto\">
                            <div class=\"form-group form-check pr-3\">
                                <input type=\"checkbox\" name=\"defaultplan\" value=\"1\" id=\"checkboxPlan\"
                                       class=\"form-check-input\" checked/>
                                <label for=\"checkboxPlan\">";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("load-def-acc-plan"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                        <div class=\"col-sm-auto\">
                            <div class=\"form-group form-check pr-3\">
                                ";
        // line 91
        if ($this->env->getFunction('settings')->getCallable()("default", "ventasinstock")) {
            // line 92
            echo "                                    <input type=\"checkbox\" name=\"ventasinstock\" value=\"1\" id=\"cbNoStock\"
                                           class=\"form-check-input\" checked/>
                                ";
        } else {
            // line 95
            echo "                                    <input type=\"checkbox\" name=\"ventasinstock\" value=\"1\" id=\"cbNoStock\"
                                           class=\"form-check-input\"/>
                                ";
        }
        // line 98
        echo "                                <label for=\"cbNoStock\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("allow-sale-without-stock-n"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                        <div class=\"col-sm-auto\">
                            <div class=\"form-group form-check\">
                                ";
        // line 103
        if ($this->env->getFunction('settings')->getCallable()("default", "updatesupplierprices")) {
            // line 104
            echo "                                    <input type=\"checkbox\" name=\"updatesupplierprices\" value=\"1\"
                                           id=\"cbUpdateSupplierPrices\" class=\"form-check-input\" checked/>
                                ";
        } else {
            // line 107
            echo "                                    <input type=\"checkbox\" name=\"updatesupplierprices\" value=\"1\"
                                           id=\"cbUpdateSupplierPrices\" class=\"form-check-input\"/>
                                ";
        }
        // line 110
        echo "                                <label for=\"cbUpdateSupplierPrices\">";
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("update-supplier-prices"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card-footer text-right\">
                    <button type=\"submit\" class=\"btn btn-primary\" id=\"btnWizard\">
                        ";
        // line 117
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

    // line 126
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/CSS/custom.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 131
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/pace-js/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 134
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
        return "Wizard-2.html.twig";
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
        return array (  258 => 134,  254 => 133,  249 => 132,  245 => 131,  239 => 128,  234 => 127,  230 => 126,  218 => 117,  207 => 110,  202 => 107,  197 => 104,  195 => 103,  186 => 98,  181 => 95,  176 => 92,  174 => 91,  166 => 86,  153 => 76,  149 => 75,  145 => 74,  139 => 71,  131 => 66,  130 => 65,  122 => 60,  121 => 59,  113 => 54,  106 => 50,  102 => 49,  98 => 48,  90 => 43,  85 => 40,  82 => 39,  79 => 38,  77 => 37,  74 => 36,  70 => 35,  58 => 26,  53 => 23,  49 => 22,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Wizard-2.html.twig", "/var/www/html/Dinamic/View/Wizard-2.html.twig");
    }
}
