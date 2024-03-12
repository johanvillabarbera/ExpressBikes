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

/* Tab/ProductoImagen.html.twig */
class __TwigTemplate_308aee0c3bc93ed49db834a9a1d383a5e936fd5741015a24d5245c1cfe851ac5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        $context["firstView"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 22));
        // line 23
        $context["product"] = twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 23);
        // line 24
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 24);
        // line 25
        echo "
<div class=\"container-fluid\">
    ";
        // line 28
        echo "    <div class=\"row\">
        <div class=\"col\">
            <form id=\"";
        // line 30
        echo twig_escape_filter($this->env, (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 30)) . "0"), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "method", false, false, false, 30), "html", null, true);
        echo "\" method=\"post\"
                  enctype=\"multipart/form-data\" onsubmit=\"animateSpinner('add')\">
                ";
        // line 32
        echo $this->env->getFunction('formToken')->getCallable()();
        echo "
                <input type=\"hidden\" name=\"action\" value=\"add-image\"/>
                <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 34), "html", null, true);
        echo "\"/>
                <input type=\"hidden\" name=\"idproducto\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "primaryColumnValue", [], "method", false, false, false, 35), "html", null, true);
        echo "\">
                <div class=\"card border-success shadow mb-3\">
                    <div class=\"card-body p-3\">
                        <div class=\"form-row\">
                            <div class=\"col-sm-2\">
                                ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("variant"), "html", null, true);
        echo "
                                <select name=\"referencia\" class=\"form-control mb-2\">
                                    <option value=\"\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("all-variants"), "html", null, true);
        echo "</option>
                                    <option value=\"\">------</option>
                                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getVariants", [], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
            // line 45
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variant"], "referencia", [], "any", false, false, false, 45), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variant"], "referencia", [], "any", false, false, false, 45), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                                </select>
                            </div>
                            <div class=\"col\">
                                ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("images"), "html", null, true);
        echo "
                                <input type=\"file\" name=\"newfiles[]\" class=\"form-control-file\" multiple=\"\"
                                       accept=\"image/png, image/jpeg, image/gif\" required/>
                                <p class=\"text-muted mb-2\">
                                    ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("help-server-accepts-filesize", ["%size%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 54), "getMaxFileUpload", [], "method", false, false, false, 54)]), "html", null, true);
        echo "
                                </p>
                            </div>
                            <div class=\"col-auto\">
                                <br/>
                                <button type=\"submit\" class=\"btn btn-success mb-2\">
                                    <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("add"), "html", null, true);
        echo "
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    ";
        // line 70
        echo "    <div class=\"form-row row-cols-1 row-cols-md-5\">
        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 71));
        foreach ($context['_seq'] as $context["counter"] => $context["image"]) {
            // line 72
            echo "            <div class=\"col mb-4\">
                ";
            // line 73
            $context["border"] = ((twig_get_attribute($this->env, $this->source, $context["image"], "referencia", [], "any", false, false, false, 73)) ? ("") : ("border-primary"));
            // line 74
            echo "                <div class=\"card ";
            echo twig_escape_filter($this->env, ($context["border"] ?? null), "html", null, true);
            echo " shadow\">
                    <img src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(twig_get_attribute($this->env, $this->source, $context["image"], "url", ["download"], "method", false, false, false, 75)), "html", null, true);
            echo "\" class=\"card-img-top\"
                         alt=\"";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "referencia", [], "any", false, false, false, 76), "html", null, true);
            echo "\" loading=\"lazy\">
                    <div lang=\"card-body\"></div>
                    <div class=\"card-footer\">
                        ";
            // line 79
            $context["formName"] = (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 79) . ($context["counter"] + 1));
            // line 80
            echo "                        <form id=\"";
            echo twig_escape_filter($this->env, ("form" . ($context["formName"] ?? null)), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "method", false, false, false, 80), "html", null, true);
            echo "\" method=\"post\"
                              enctype=\"multipart/form-data\" onsubmit=\"animateSpinner('add')\">
                            ";
            // line 82
            echo $this->env->getFunction('formToken')->getCallable()();
            echo "
                            <input type=\"hidden\" name=\"action\" value=\"\"/>
                            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 84), "html", null, true);
            echo "\"/>
                            <input type=\"hidden\" name=\"idproducto\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "idproducto", [], "any", false, false, false, 85), "html", null, true);
            echo "\"/>
                            <input type=\"hidden\" name=\"idimage\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 86), "html", null, true);
            echo "\"/>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col text-muted\">
                                    ";
            // line 89
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["image"], "referencia", [], "any", false, false, false, 89)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "referencia", [], "any", false, false, false, 89)) : ($this->env->getFunction('trans')->getCallable()("all-variants"))), "html", null, true);
            echo "
                                </div>
                                <div class=\"col-auto\">
                                    ";
            // line 92
            echo twig_call_macro($macros["_self"], "macro_buttonDelete", [($context["formName"] ?? null)], 92, $context, $this->getSourceContext());
            echo "
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['counter'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "    </div>
</div>

";
    }

    // line 103
    public function macro_buttonDelete($__formName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "formName" => $__formName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 104
            echo "    ";
            $context["label"] = $this->env->getFunction('trans')->getCallable()("delete-file");
            // line 105
            echo "    ";
            $context["text"] = $this->env->getFunction('trans')->getCallable()("are-you-sure");
            // line 106
            echo "    ";
            $context["cancel"] = $this->env->getFunction('trans')->getCallable()("cancel");
            // line 107
            echo "    ";
            $context["confirm"] = $this->env->getFunction('trans')->getCallable()("confirm");
            // line 108
            echo "    <button type=\"button\" class=\"btn btn-sm btn-outline-danger p-1\"
            onclick=\"confirmAction('";
            // line 109
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "','delete-image','";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, ($context["cancel"] ?? null), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, ($context["confirm"] ?? null), "html", null, true);
            echo "');\">
        <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
    </button>
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
        return "Tab/ProductoImagen.html.twig";
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
        return array (  245 => 109,  242 => 108,  239 => 107,  236 => 106,  233 => 105,  230 => 104,  217 => 103,  210 => 100,  196 => 92,  190 => 89,  184 => 86,  180 => 85,  176 => 84,  171 => 82,  163 => 80,  161 => 79,  155 => 76,  151 => 75,  146 => 74,  144 => 73,  141 => 72,  137 => 71,  134 => 70,  122 => 60,  113 => 54,  106 => 50,  101 => 47,  90 => 45,  86 => 44,  81 => 42,  76 => 40,  68 => 35,  64 => 34,  59 => 32,  52 => 30,  48 => 28,  44 => 25,  42 => 24,  40 => 23,  38 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "Tab/ProductoImagen.html.twig", "/var/www/html/Dinamic/View/Tab/ProductoImagen.html.twig");
    }
}
