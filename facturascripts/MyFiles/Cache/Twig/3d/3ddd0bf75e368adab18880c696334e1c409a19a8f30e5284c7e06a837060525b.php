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

/* Master/ListView.html.twig */
class __TwigTemplate_bfab1a6a52b86641d3710ef1acb6eef1547b7a5a3478a26e56250500d3a29e83 extends Template
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
        // line 20
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        $context["formName"] = ("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 21));
        // line 22
        echo "
<script>
    var listViewDeleteCancel = \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
        echo "\";
    var listViewDeleteConfirm = \"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("confirm"), "html", null, true);
        echo "\";
    var listViewDeleteMessage = \"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("are-you-sure"), "html", null, true);
        echo "\";
    var listViewDeleteTitle = \"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("confirm-delete"), "html", null, true);
        echo "\";
</script>

<form id=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
        echo "\" method=\"post\" onsubmit=\"animateSpinner('add')\">
    ";
        // line 31
        echo $this->env->getFunction('formToken')->getCallable()();
        echo "
    <input type=\"hidden\" name=\"action\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 33), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"loadfilter\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 34), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"offset\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "offset", [], "any", false, false, false, 35), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"order\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 36), "html", null, true);
        echo "\"/>
    <div class=\"";
        // line 37
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 37), "card", [], "any", false, false, false, 37)) ? ("card shadow") : (""));
        echo "\">
        <div class=\"";
        // line 38
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 38), "card", [], "any", false, false, false, 38)) ? ("container-fluid pt-3") : ("container-fluid"));
        echo "\">
            <div class=\"form-row\">
                ";
        // line 41
        echo "                <div class=\"col-md-auto mb-2\">
                    ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 42), "btnNew", [], "any", false, false, false, 42)) {
            // line 43
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 43), "modalInsert", [], "any", false, false, false, 43)) {
                // line 44
                echo "                            <button type=\"button\" class=\"btn btn-success\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
                echo "\"
                                    data-toggle=\"modal\" data-target=\"#modal";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 45), "modalInsert", [], "any", false, false, false, 45), "html", null, true);
                echo "\">
                                <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                                ";
                // line 47
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 47), "card", [], "any", false, false, false, 47), false))) {
                    // line 48
                    echo "                                    <span class=\"d-none d-xl-inline-block\">";
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 50
                echo "                            </button>
                        ";
            } else {
                // line 52
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "btnNewUrl", [], "method", false, false, false, 52)), "html", null, true);
                echo "\" class=\"btn btn-success\"
                               title=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
                echo "\"><i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                                ";
                // line 54
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 54), "card", [], "any", false, false, false, 54), false))) {
                    // line 55
                    echo "                                    <span class=\"d-none d-xl-inline-block\">";
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 57
                echo "                            </a>
                        ";
            }
            // line 59
            echo "                    ";
        }
        // line 60
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 60), "btnDelete", [], "any", false, false, false, 60)) {
            // line 61
            echo "                        <button type=\"button\" class=\"btn btn-danger\"
                                onclick=\"listViewDelete('";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 62), "html", null, true);
            echo "');\"
                                title=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
            echo "\">
                            <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                        </button>
                    ";
        }
        // line 67
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 67), "btnPrint", [], "any", false, false, false, 67)) {
            // line 68
            echo "                        <div class=\"btn-group\">
                            ";
            // line 69
            echo twig_call_macro($macros["_self"], "macro_printButton", [($context["fsc"] ?? null), ($context["currentView"] ?? null)], 69, $context, $this->getSourceContext());
            echo "
                        </div>
                    ";
        }
        // line 72
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 72), "clickable", [], "any", false, false, false, 72)) {
            // line 73
            echo "                        <button type=\"button\" class=\"btn btn-light\"
                                onclick=\"listViewOpenTab('";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 74), "html", null, true);
            echo "');\"
                                title=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("open-tab"), "html", null, true);
            echo "\">
                            <i class=\"fas fa-external-link-alt fa-fw\" aria-hidden=\"true\"></i>
                        </button>
                    ";
        }
        // line 79
        echo "                    ";
        // line 80
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["actions"], "method", false, false, false, 80), "render", [true, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 80)], "method", false, false, false, 80);
        echo "
                    ";
        // line 82
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["statistics"], "method", false, false, false, 82), "render", [($context["fsc"] ?? null)], "method", false, false, false, 82);
        echo "
                </div>
                <div class=\"col-sm mb-2\">
                    ";
        // line 86
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_searchControl", [($context["currentView"] ?? null)], 86, $context, $this->getSourceContext());
        echo "
                </div>
                <div class=\"col-sm-auto text-right mb-2\">
                    ";
        // line 90
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_filterButton", [($context["currentView"] ?? null), ($context["fsc"] ?? null)], 90, $context, $this->getSourceContext());
        echo "
                    ";
        // line 92
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_sortButton", [($context["currentView"] ?? null)], 92, $context, $this->getSourceContext());
        echo "
                    ";
        // line 94
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_colorsButton", [($context["currentView"] ?? null)], 94, $context, $this->getSourceContext());
        echo "
                </div>
            </div>
            ";
        // line 98
        echo "            ";
        $context["divFiltersStyle"] = ((twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 98)) ? ("") : ("display: none;"));
        // line 99
        echo "            <div id=\"form";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 99), "html", null, true);
        echo "Filters\" class=\"form-row align-items-center border-bottom mb-3\"
                 style=\"";
        // line 100
        echo twig_escape_filter($this->env, ($context["divFiltersStyle"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "filters", [], "any", false, false, false, 101));
        foreach ($context['_seq'] as $context["filterName"] => $context["filter"]) {
            // line 102
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, $context["filter"], "render", [], "method", false, false, false, 102);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['filterName'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "            </div>
            ";
        // line 106
        echo "            <div class=\"row\">
                ";
        // line 107
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["header"], "method", false, false, false, 107), "render", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 107), "listViewSetAction", ($context["fsc"] ?? null)], "method", false, false, false, 107);
        echo "
            </div>
        </div>
        ";
        // line 111
        echo "        ";
        $context["pages"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 111);
        // line 112
        echo "        ";
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["pages"] ?? null)), 4))) {
            // line 113
            echo "            <div class=\"text-center pb-2\">
                <div class=\"btn-group\">
                    ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 115));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 116
                echo "                        ";
                $context["btnClass"] = ((twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 116)) ? ("btn btn-outline-dark active") : ("btn btn-outline-dark"));
                // line 117
                echo "                        <button type=\"button\" class=\"";
                echo twig_escape_filter($this->env, ($context["btnClass"] ?? null), "html", null, true);
                echo "\"
                                onclick=\"listViewSetOffset('";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 118), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 118), "html", null, true);
                echo "');\">
                            ";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 119), "html", null, true);
                echo "
                        </button>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                </div>
            </div>
        ";
        }
        // line 125
        echo "        ";
        // line 126
        echo "        <div class=\"table-responsive\">
            ";
        // line 127
        $context["tableClass"] = (((0 === twig_compare($this->env->getFunction('settings')->getCallable()("default", "tablesize"), "small"))) ? ("table-sm") : (""));
        // line 128
        echo "            <table class=\"table table-hover mb-0 ";
        echo twig_escape_filter($this->env, ($context["tableClass"] ?? null), "html", null, true);
        echo "\">
                <thead>
                <tr>
                    ";
        // line 131
        if (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 131)), 0)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 131), "checkBoxes", [], "any", false, false, false, 131) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 131), "clickable", [], "any", false, false, false, 131)))) {
            // line 132
            echo "                        <th width=\"50\" class=\"text-center\">
                            ";
            // line 133
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 133), "checkBoxes", [], "any", false, false, false, 133)) {
                // line 134
                echo "                                <div class=\"form-check form-check-inline m-0 toggle-ext-link\">
                                    <input class=\"form-check-input listActionCB\" type=\"checkbox\"
                                           onclick=\"listViewCheckboxes('";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 136), "html", null, true);
                echo "');\"/>
                                </div>
                            ";
            }
            // line 139
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 139), "clickable", [], "any", false, false, false, 139)) {
                // line 140
                echo "                                <i class=\"fas fa-external-link-alt toggle-ext-link d-none\"
                                   title=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("open-tab"), "html", null, true);
                echo "\"></i>
                            ";
            }
            // line 143
            echo "                        </th>
                    ";
        }
        // line 145
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 145));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 146
            echo "                        ";
            echo twig_get_attribute($this->env, $this->source, $context["column"], "tableHeader", [($context["currentView"] ?? null)], "method", false, false, false, 146);
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                </tr>
                </thead>
                <tbody>
                ";
        // line 151
        $context["rowStatus"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["status"], "method", false, false, false, 151);
        // line 152
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 152));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 153
            echo "                    ";
            $context["trClass"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 153), "clickable", [], "any", false, false, false, 153)) ? (("clickableListRow " . twig_get_attribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trClass", [$context["model"]], "method", false, false, false, 153))) : (twig_get_attribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trClass", [$context["model"]], "method", false, false, false, 153)));
            // line 154
            echo "                    ";
            $context["trTitle"] = twig_get_attribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trTitle", [$context["model"]], "method", false, false, false, 154);
            // line 155
            echo "                    <tr class=\"";
            echo twig_escape_filter($this->env, ($context["trClass"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["trTitle"] ?? null), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(twig_get_attribute($this->env, $this->source, $context["model"], "url", [], "method", false, false, false, 155)), "html", null, true);
            echo "\">
                        ";
            // line 156
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 156), "checkBoxes", [], "any", false, false, false, 156) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 156), "clickable", [], "any", false, false, false, 156))) {
                // line 157
                echo "                            <td class=\"cancelClickable p-0 text-center align-middle\">
                                ";
                // line 158
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 158), "checkBoxes", [], "any", false, false, false, 158)) {
                    // line 159
                    echo "                                    <div class=\"form-check form-check-inline m-0 toggle-ext-link\">
                                        <input class=\"form-check-input listAction\" type=\"checkbox\" name=\"code[]\"
                                               value=\"";
                    // line 161
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 161), "html", null, true);
                    echo "\"/>
                                    </div>
                                ";
                }
                // line 164
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 164), "clickable", [], "any", false, false, false, 164)) {
                    // line 165
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(twig_get_attribute($this->env, $this->source, $context["model"], "url", [], "method", false, false, false, 165)), "html", null, true);
                    echo "\" target=\"_blank\" class=\"toggle-ext-link d-none\"
                                       onauxclick=\"\$(this).addClass('text-dark');\" title=\"";
                    // line 166
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("open-tab"), "html", null, true);
                    echo "\">
                                        <i class=\"fas fa-external-link-alt\"></i>
                                    </a>
                                ";
                }
                // line 170
                echo "                            </td>
                        ";
            }
            // line 172
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 172));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 173
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["column"], "tableCell", [$context["model"]], "method", false, false, false, 173);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 177
            echo "                    <tr class=\"table-warning\">
                        <td colspan=\"";
            // line 178
            echo twig_escape_filter($this->env, (1 + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 178))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("no-data"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "                </tbody>
            </table>
        </div>
        ";
        // line 185
        echo "        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 185))) {
            // line 186
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-sm table-hover mt-4 mb-0\">
                    <thead>
                    <tr>
                        <th></th>
                        ";
            // line 191
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 191));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 192
                echo "                            <th class=\"text-right text-capitalize\">";
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 192)), "html", null, true);
                echo "</th>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class=\"text-right\">";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("page-total-amount"), "html", null, true);
            echo "</td>
                        ";
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 199));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 200
                echo "                            <td class=\"text-right\">";
                echo twig_escape_filter($this->env, $this->env->getFunction('number')->getCallable()(twig_get_attribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 200)), "html", null, true);
                echo "</td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "                    </tr>
                    <tr>
                        <td class=\"text-right\">";
            // line 204
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("total-amount"), "html", null, true);
            echo "</td>
                        ";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 205));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 206
                echo "                            <td class=\"text-right\">";
                echo twig_escape_filter($this->env, $this->env->getFunction('number')->getCallable()(twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 206)), "html", null, true);
                echo "</td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            echo "                    </tr>
                    </tbody>
                </table>
            </div>
        ";
        }
        // line 213
        echo "        ";
        // line 214
        echo "        ";
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["pages"] ?? null)), 0))) {
            // line 215
            echo "            <div class=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 215), "card", [], "any", false, false, false, 215)) ? ("card-footer text-center") : ("pt-3 text-center"));
            echo "\">
                <div class=\"btn-group\">
                    ";
            // line 217
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 217));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 218
                echo "                        ";
                $context["btnClass"] = ((twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 218)) ? ("btn btn-outline-dark active") : ("btn btn-outline-dark"));
                // line 219
                echo "                        <button type=\"button\" class=\"";
                echo twig_escape_filter($this->env, ($context["btnClass"] ?? null), "html", null, true);
                echo "\"
                                onclick=\"listViewSetOffset('";
                // line 220
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 220), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 220), "html", null, true);
                echo "');\">
                            ";
                // line 221
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 221), "html", null, true);
                echo "
                        </button>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "                </div>
            </div>
        ";
        }
        // line 227
        echo "    </div>
    <br/>
    ";
        // line 230
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 232
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["footer"], "method", false, false, false, 232), "render", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 232), "listViewSetAction", ($context["fsc"] ?? null)], "method", false, false, false, 232);
        echo "
        </div>
    </div>
    ";
        // line 236
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 236)) {
            // line 237
            echo "        ";
            echo twig_call_macro($macros["_self"], "macro_filterSaveModal", [($context["currentView"] ?? null)], 237, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 239
        echo "</form>

";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 242));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 243
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 243), twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 243)], "method", false, false, false, 243);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "
";
        // line 297
        echo "
";
        // line 335
        echo "
";
        // line 356
        echo "
";
        // line 383
        echo "
";
        // line 399
        echo "
";
    }

    // line 247
    public function macro_filterButton($__currentView__ = null, $__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 248
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "filters", [], "any", false, false, false, 248))) {
                // line 249
                echo "        ";
                $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 249);
                // line 250
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 250)) {
                    // line 251
                    echo "            ";
                    // line 252
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 252), "html", null, true);
                    echo "?activetab=";
                    echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                    echo "\" class=\"btn btn-light\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("all"), "html", null, true);
                    echo "\">
                <i class=\"fas fa-filter fa-fw\"></i> ";
                    // line 253
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("all"), "html", null, true);
                    echo "
            </a>
        ";
                } else {
                    // line 256
                    echo "            <button type=\"button\" class=\"btn btn-light\" onclick=\"listViewShowFilters('";
                    echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                    echo "');\">
                <i class=\"fas fa-filter fa-fw\"></i> ";
                    // line 257
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("filters"), "html", null, true);
                    echo "
            </button>
            ";
                    // line 259
                    if ((twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 259) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 259), "saveFilters", [], "any", false, false, false, 259))) {
                        // line 260
                        echo "                ";
                        // line 261
                        echo "                <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\"
                        data-target=\"#savefilter";
                        // line 262
                        echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("save-filter"), "html", null, true);
                        echo "\">
                    <i class=\"fas fa-save fa-fw\"></i> ";
                        // line 263
                        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
                        echo "
                </button>
            ";
                    }
                    // line 266
                    echo "        ";
                }
                // line 267
                echo "        ";
                $context["saveFilters"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilters", [], "any", false, false, false, 267);
                // line 268
                echo "        ";
                if ( !twig_test_empty(($context["saveFilters"] ?? null))) {
                    // line 269
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["saveFilters"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["pageFilter"]) {
                        // line 270
                        echo "                ";
                        $context["icon"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["pageFilter"], "nick", [], "any", false, false, false, 270))) ? ("fa-users") : ("fa-user"));
                        // line 271
                        echo "                ";
                        $context["filterDesc"] = (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 271)), 10))) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 271), 0, 10) . "...")) : (twig_get_attribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 271)));
                        // line 272
                        echo "                ";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 272), twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 272)))) {
                            // line 273
                            echo "                    <div class=\"btn-group\">
                        ";
                            // line 275
                            echo "                        <button title=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 275), "html", null, true);
                            echo "\" class=\"btn btn-light active\"
                                onclick=\"listViewSetLoadFilter('";
                            // line 276
                            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                            echo "', '";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 276), "html", null, true);
                            echo "');\">
                            <i class=\"fas fa-filter fa-fw\"></i> ";
                            // line 277
                            echo twig_escape_filter($this->env, ($context["filterDesc"] ?? null), "html", null, true);
                            echo "
                        </button>
                        ";
                            // line 280
                            echo "                        <button type=\"button\" class=\"btn btn-light text-danger\"
                                title=\"";
                            // line 281
                            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("remove-filter"), "html", null, true);
                            echo "\"
                                onclick=\"listViewSetAction('";
                            // line 282
                            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                            echo "', 'delete-filter');\">
                            <i class=\"fas fa-trash-alt fa-fw\"></i>
                        </button>
                    </div>
                ";
                        } else {
                            // line 287
                            echo "                    ";
                            // line 288
                            echo "                    <button title=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 288), "html", null, true);
                            echo "\" class=\"btn btn-light\"
                            onclick=\"listViewSetLoadFilter('";
                            // line 289
                            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                            echo "', '";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 289), "html", null, true);
                            echo "');\">
                        <i class=\"fas fa-filter fa-fw\"></i> ";
                            // line 290
                            echo twig_escape_filter($this->env, ($context["filterDesc"] ?? null), "html", null, true);
                            echo "
                    </button>
                ";
                        }
                        // line 293
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageFilter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 294
                    echo "        ";
                }
                // line 295
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 298
    public function macro_filterSaveModal($__currentView__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 299
            echo "    ";
            $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 299);
            // line 300
            echo "    <div class=\"modal\" id=\"savefilter";
            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">
                        <i class=\"fas fa-filter fa-fw\"></i> ";
            // line 305
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("save-filter"), "html", null, true);
            echo "
                    </h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"form-group\">
                                <label>";
            // line 315
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("description"), "html", null, true);
            echo "</label>
                                <input type=\"text\" name=\"filter-description\" class=\"form-control noEnterKey\"
                                       autofocus=\"\"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                        ";
            // line 324
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
            echo "
                    </button>
                    <button type=\"button\" class=\"btn btn-primary\"
                            onclick=\"listViewSetAction('";
            // line 327
            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
            echo "', 'save-filter');\">
                        ";
            // line 328
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("accept"), "html", null, true);
            echo "
                    </button>
                </div>
            </div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 336
    public function macro_colorsButton($__currentView__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 337
            echo "    ";
            $context["legend"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["status"], "method", false, false, false, 337), "legend", [], "method", false, false, false, 337);
            // line 338
            echo "    ";
            if (($context["legend"] ?? null)) {
                // line 339
                echo "        ";
                $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 339);
                // line 340
                echo "        <div class=\"btn-group\">
            <div class=\"dropdown\">
                <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                        aria-expanded=\"false\">
                    <i class=\"fas fa-fill-drip fa-fw\" aria-hidden=\"true\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-right pb-0\">
                    <h6 class=\"dropdown-header\">
                        ";
                // line 348
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("colors"), "html", null, true);
                echo "
                    </h6>
                    ";
                // line 350
                echo ($context["legend"] ?? null);
                echo "
                </div>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 357
    public function macro_printButton($__fsc__ = null, $__currentView__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "currentView" => $__currentView__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 358
            echo "    <div class=\"dropdown\">
        <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                aria-expanded=\"false\">
            <i class=\"fas fa-print fa-fw\" aria-hidden=\"true\"></i>
        </button>
        <div class=\"dropdown-menu\">
            ";
            // line 364
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 364), "options", [], "method", false, false, false, 364));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 365
                echo "                <a href=\"#\" class=\"dropdown-item\"
                   onclick=\"listViewPrintAction('";
                // line 366
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 366), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "');\">
                    <i class=\"";
                // line 367
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "icon", [], "any", false, false, false, 367), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    ";
                // line 368
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()(twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 368)), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 371
            echo "            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 371), "tools", [], "any", false, false, false, 371))) {
                // line 372
                echo "                <div class=\"dropdown-divider\"></div>
                ";
                // line 373
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 373), "tools", [], "method", false, false, false, 373));
                foreach ($context['_seq'] as $context["key"] => $context["tool"]) {
                    // line 374
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(twig_get_attribute($this->env, $this->source, $context["tool"], "link", [], "any", false, false, false, 374)), "html", null, true);
                    echo "\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 375
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "icon", [], "any", false, false, false, 375), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 376
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()(twig_get_attribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 376)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['tool'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 379
                echo "            ";
            }
            // line 380
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 384
    public function macro_searchControl($__currentView__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 385
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "searchFields", [], "any", false, false, false, 385))) {
                // line 386
                echo "        <div class=\"form-group\">
            <div class=\"input-group\">
                <input class=\"form-control\" type=\"text\" name=\"query\" value=\"";
                // line 388
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "query", [], "any", false, false, false, 388), "html", null, true);
                echo "\" autocomplete=\"off\"
                       placeholder=\"";
                // line 389
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("search"), "html", null, true);
                echo "\"/>
                <span class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                    </button>
                </span>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 400
    public function macro_sortButton($__currentView__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 401
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 401))) {
                // line 402
                echo "        <div class=\"btn-group\">
            <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                    aria-expanded=\"true\">
                ";
                // line 405
                $context["icon"] = (((0 === twig_compare((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 405)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 405)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["type"] ?? null) : null), "ASC"))) ? ("fas fa-sort-amount-up") : ("fas fa-sort-amount-down"));
                // line 406
                echo "                <i class=\"";
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-lg-inline\">";
                // line 407
                echo twig_escape_filter($this->env, (($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 407)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 407)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["label"] ?? null) : null), "html", null, true);
                echo "</span>
                <span class=\"caret\"></span>
            </button>
            <div class=\"dropdown-menu dropdown-menu-right\">
                ";
                // line 411
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 411));
                foreach ($context['_seq'] as $context["key"] => $context["orderby"]) {
                    // line 412
                    echo "                    ";
                    $context["activeClass"] = (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 412), $context["key"]))) ? (" active") : (""));
                    // line 413
                    echo "                    ";
                    $context["icon"] = (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["orderby"], "type", [], "any", false, false, false, 413), "ASC"))) ? ("fa-solid fa-angles-up") : ("fa-solid fa-angles-down"));
                    // line 414
                    echo "                    <a class=\"dropdown-item";
                    echo twig_escape_filter($this->env, ($context["activeClass"] ?? null), "html", null, true);
                    echo "\" href=\"#\"
                       onclick=\"listViewSetOrder('";
                    // line 415
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 415), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "');\">
                        <i class=\"";
                    // line 416
                    echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderby"], "label", [], "any", false, false, false, 416), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['orderby'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 419
                echo "            </div>
        </div>
    ";
            }

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
        return "Master/ListView.html.twig";
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
        return array (  1147 => 419,  1136 => 416,  1130 => 415,  1125 => 414,  1122 => 413,  1119 => 412,  1115 => 411,  1108 => 407,  1103 => 406,  1101 => 405,  1096 => 402,  1093 => 401,  1080 => 400,  1061 => 389,  1057 => 388,  1053 => 386,  1050 => 385,  1037 => 384,  1026 => 380,  1023 => 379,  1014 => 376,  1010 => 375,  1005 => 374,  1001 => 373,  998 => 372,  995 => 371,  986 => 368,  982 => 367,  976 => 366,  973 => 365,  969 => 364,  961 => 358,  947 => 357,  932 => 350,  927 => 348,  917 => 340,  914 => 339,  911 => 338,  908 => 337,  895 => 336,  879 => 328,  875 => 327,  869 => 324,  857 => 315,  844 => 305,  835 => 300,  832 => 299,  819 => 298,  809 => 295,  806 => 294,  800 => 293,  794 => 290,  788 => 289,  783 => 288,  781 => 287,  773 => 282,  769 => 281,  766 => 280,  761 => 277,  755 => 276,  750 => 275,  747 => 273,  744 => 272,  741 => 271,  738 => 270,  733 => 269,  730 => 268,  727 => 267,  724 => 266,  718 => 263,  712 => 262,  709 => 261,  707 => 260,  705 => 259,  700 => 257,  695 => 256,  689 => 253,  680 => 252,  678 => 251,  675 => 250,  672 => 249,  669 => 248,  655 => 247,  650 => 399,  647 => 383,  644 => 356,  641 => 335,  638 => 297,  635 => 245,  626 => 243,  622 => 242,  618 => 239,  612 => 237,  609 => 236,  603 => 232,  599 => 230,  595 => 227,  590 => 224,  581 => 221,  575 => 220,  570 => 219,  567 => 218,  563 => 217,  557 => 215,  554 => 214,  552 => 213,  545 => 208,  536 => 206,  532 => 205,  528 => 204,  524 => 202,  515 => 200,  511 => 199,  507 => 198,  501 => 194,  492 => 192,  488 => 191,  481 => 186,  478 => 185,  473 => 181,  462 => 178,  459 => 177,  453 => 175,  444 => 173,  439 => 172,  435 => 170,  428 => 166,  423 => 165,  420 => 164,  414 => 161,  410 => 159,  408 => 158,  405 => 157,  403 => 156,  394 => 155,  391 => 154,  388 => 153,  382 => 152,  380 => 151,  375 => 148,  366 => 146,  361 => 145,  357 => 143,  352 => 141,  349 => 140,  346 => 139,  340 => 136,  336 => 134,  334 => 133,  331 => 132,  329 => 131,  322 => 128,  320 => 127,  317 => 126,  315 => 125,  310 => 122,  301 => 119,  295 => 118,  290 => 117,  287 => 116,  283 => 115,  279 => 113,  276 => 112,  273 => 111,  267 => 107,  264 => 106,  261 => 104,  252 => 102,  248 => 101,  244 => 100,  239 => 99,  236 => 98,  229 => 94,  224 => 92,  219 => 90,  212 => 86,  205 => 82,  200 => 80,  198 => 79,  191 => 75,  187 => 74,  184 => 73,  181 => 72,  175 => 69,  172 => 68,  169 => 67,  162 => 63,  158 => 62,  155 => 61,  152 => 60,  149 => 59,  145 => 57,  139 => 55,  137 => 54,  133 => 53,  128 => 52,  124 => 50,  118 => 48,  116 => 47,  111 => 45,  106 => 44,  103 => 43,  101 => 42,  98 => 41,  93 => 38,  89 => 37,  85 => 36,  81 => 35,  77 => 34,  73 => 33,  68 => 31,  64 => 30,  58 => 27,  54 => 26,  50 => 25,  46 => 24,  42 => 22,  40 => 21,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/ListView.html.twig", "/var/www/html/Dinamic/View/Master/ListView.html.twig");
    }
}
