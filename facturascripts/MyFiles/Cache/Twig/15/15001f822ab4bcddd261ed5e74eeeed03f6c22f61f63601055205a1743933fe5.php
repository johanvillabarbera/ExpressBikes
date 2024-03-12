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

/* Master/EditListViewInLine.html.twig */
class __TwigTemplate_069eadacb5e2c0f9fb60e4f9b255e0ebe675a23a901cd4df5d5ec812cc0ead89 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        echo "
<script>
    var editListViewDeleteCancel = \"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
        echo "\";
    var editListViewDeleteConfirm = \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("confirm"), "html", null, true);
        echo "\";
    var editListViewDeleteMessage = \"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("are-you-sure"), "html", null, true);
        echo "\";
    var editListViewDeleteTitle = \"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("confirm-delete"), "html", null, true);
        echo "\";
</script>

<div class=\"";
        // line 29
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 29), "card", [], "any", false, false, false, 29)) ? ("") : ("container-fluid"));
        echo "\">
    ";
        // line 31
        echo "    <div class=\"row\">
        ";
        // line 32
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["header"], "method", false, false, false, 32);
        // line 33
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 33), "", ($context["fsc"] ?? null)], "method", false, false, false, 33);
        echo "
    </div>

    ";
        // line 37
        echo "    <div>
        ";
        // line 38
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["statistics"], "method", false, false, false, 38);
        // line 39
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [($context["fsc"] ?? null)], "method", false, false, false, 39);
        echo "
    </div>

    ";
        // line 43
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 43), "btnNew", [], "any", false, false, false, 43)) {
            // line 44
            echo "        ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 44)) . "New");
            // line 45
            echo "        <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" onsubmit=\"animateSpinner('add')\">
            ";
            // line 46
            echo $this->env->getFunction('formToken')->getCallable()();
            echo "
            <input type=\"hidden\" name=\"action\" value=\"insert\"/>
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 48), "html", null, true);
            echo "\"/>
            <div class=\"card border-success shadow mb-2\">
                <div class=\"card-body p-2\">
                    <button class=\"btn btn-spin-action btn-sm btn-outline-success\" type=\"button\" data-toggle=\"collapse\" data-target=\"#";
            // line 51
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "Collapse\" aria-expanded=\"false\">
                        <i class=\"fas fa-plus-square fa-fw\" aria-hidden=\"true\"></i>
                        ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("add"), "html", null, true);
            echo "
                    </button>
                    &nbsp;
                    ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "title", [], "any", false, false, false, 56), "html", null, true);
            echo "
                </div>
                <div class=\"collapse\" id=\"";
            // line 58
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "Collapse\">
                    <div class=\"card-body border-top\">
                        <div class=\"form-row align-items-end\">
                            <div class=\"col\">
                                ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 62));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 63
                echo "                                    ";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 63)], "method", false, false, false, 63);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                            </div>
                            <div class=\"col-sm-2 text-right\">
                                <button class=\"btn btn-spin-action btn-sm btn-success\" type=\"submit\">
                                    <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
            echo "</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
        }
        // line 78
        echo "
    ";
        // line 80
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 80));
        foreach ($context['_seq'] as $context["counter"] => $context["model"]) {
            // line 81
            echo "        ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 81)) . $context["counter"]);
            // line 82
            echo "        <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" onsubmit=\"animateSpinner('add')\">
            ";
            // line 83
            echo $this->env->getFunction('formToken')->getCallable()();
            echo "
            <input type=\"hidden\" name=\"action\" value=\"edit\"/>
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 85), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"code\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 86), "html", null, true);
            echo "\"/>
            <div class=\"card shadow mb-2\"";
            // line 87
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "selected", [], "any", false, false, false, 87), twig_get_attribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 87)))) {
                echo " id=\"EditListViewSelected\"";
            }
            echo ">
                <div class=\"form-row align-items-end\">
                    <div class=\"col pt-2\">
                        ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 91
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [$context["model"]], "method", false, false, false, 91);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                    </div>
                    <div class=\"col-sm-2 text-right pb-2 pr-3\">
                        ";
            // line 95
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 95), "btnDelete", [], "any", false, false, false, 95)) {
                // line 96
                echo "                            <button type=\"button\" class=\"btn btn-spin-action btn-sm btn-danger\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
                echo "\"
                                    onclick=\"editListViewDelete('";
                // line 97
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 97) . $context["counter"]), "html", null, true);
                echo "');\">
                                <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
            }
            // line 101
            echo "                        ";
            // line 102
            echo "                        ";
            $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["actions"], "method", false, false, false, 102);
            // line 103
            echo "                        ";
            echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [false, (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 103) . $context["counter"])], "method", false, false, false, 103);
            echo "
                        ";
            // line 104
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 104), "btnUndo", [], "any", false, false, false, 104)) {
                // line 105
                echo "                            <button class=\"btn btn-spin-action btn-sm btn-secondary\" type=\"reset\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("undo"), "html", null, true);
                echo "\">
                                <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
            }
            // line 109
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 109), "btnSave", [], "any", false, false, false, 109)) {
                // line 110
                echo "                            <button class=\"btn btn-spin-action btn-sm btn-primary\" type=\"submit\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
                echo "\">
                                <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
            }
            // line 114
            echo "                    </div>
                </div>
            </div>
        </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['counter'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "
    ";
        // line 121
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 121)), 0))) {
            // line 122
            echo "        ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 122)) . "Offset");
            // line 123
            echo "        <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\" onsubmit=\"animateSpinner('add')\">
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 124), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"offset\" value=\"";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "offset", [], "any", false, false, false, 125), "html", null, true);
            echo "\"/>
            <div class=\"text-center pt-3\">
                <div class=\"btn-group\">
                    ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 128));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 129
                echo "                        ";
                $context["btnClass"] = ((twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 129)) ? ("btn btn-outline-dark active") : ("btn btn-outline-dark"));
                // line 130
                echo "                        <button type=\"button\" class=\"btn-spin-action ";
                echo twig_escape_filter($this->env, ($context["btnClass"] ?? null), "html", null, true);
                echo "\" onclick=\"editListViewSetOffset('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 130), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 130), "html", null, true);
                echo "');\">
                            ";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 131), "html", null, true);
                echo "
                        </button>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                </div>
            </div>
        </form>
    ";
        }
        // line 138
        echo "
    ";
        // line 140
        echo "    <div class=\"row\">
        ";
        // line 141
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["footer"], "method", false, false, false, 141);
        // line 142
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 142), "", ($context["fsc"] ?? null)], "method", false, false, false, 142);
        echo "
    </div>
</div>

";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 147));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 148
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 148), twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 148)], "method", false, false, false, 148);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/EditListViewInLine.html.twig";
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
        return array (  349 => 148,  345 => 147,  337 => 142,  335 => 141,  332 => 140,  329 => 138,  323 => 134,  314 => 131,  305 => 130,  302 => 129,  298 => 128,  292 => 125,  288 => 124,  283 => 123,  280 => 122,  277 => 121,  274 => 119,  264 => 114,  256 => 110,  253 => 109,  245 => 105,  243 => 104,  238 => 103,  235 => 102,  233 => 101,  226 => 97,  221 => 96,  219 => 95,  215 => 93,  206 => 91,  202 => 90,  194 => 87,  190 => 86,  186 => 85,  181 => 83,  176 => 82,  173 => 81,  168 => 80,  165 => 78,  153 => 69,  147 => 65,  138 => 63,  134 => 62,  127 => 58,  122 => 56,  116 => 53,  111 => 51,  105 => 48,  100 => 46,  95 => 45,  92 => 44,  89 => 43,  82 => 39,  80 => 38,  77 => 37,  70 => 33,  68 => 32,  65 => 31,  61 => 29,  55 => 26,  51 => 25,  47 => 24,  43 => 23,  39 => 21,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/EditListViewInLine.html.twig", "/var/www/html/Dinamic/View/Master/EditListViewInLine.html.twig");
    }
}
