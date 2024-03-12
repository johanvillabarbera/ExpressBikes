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

/* AdminPlugins.html.twig */
class __TwigTemplate_5b1a58343046acc5c97be90ab6114b018141602497fcbd7f931c9e3d3c83162c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "AdminPlugins.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
    <div class=\"container-fluid mb-2\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-secondary\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 28), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("refresh"), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 31
        if ((0 === twig_compare((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 31)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 31), "homepage", [], "any", false, false, false, 31)))) {
            // line 32
            echo "                        <a class=\"btn btn-sm btn-secondary active\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 32), "html", null, true);
            echo "?defaultPage=FALSE\"
                           title=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("marked-as-homepage"), "html", null, true);
            echo "\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        } else {
            // line 37
            echo "                        <a class=\"btn btn-sm btn-secondary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 37), "html", null, true);
            echo "?defaultPage=TRUE\"
                           title=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("mark-as-homepage"), "html", null, true);
            echo "\">
                            <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 42
        echo "                </div>
                ";
        // line 43
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 44
            echo "                    <button class=\"btn btn-spin-action btn-sm btn-success\" type=\"button\" data-toggle=\"modal\"
                            data-target=\"#modalAddPlugin\">
                        <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("add"), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 50
        echo "                <div class=\"btn-group\">
                    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 51), "html", null, true);
        echo "?action=rebuild&multireqtoken=";
        echo $this->env->getFunction('formToken')->getCallable()(false);
        echo "\"
                       onclick=\"animateSpinner('add')\"
                       class=\"btn btn-spin-action btn-sm btn-warning\">
                        <i class=\"fas fa-hammer fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("rebuild"), "html", null, true);
        echo "</span>
                    </a>
                </div>
            </div>
            <div class=\"col-sm text-right\">
                <h1 class=\"h3\">
                    ";
        // line 61
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getFunction('trans')->getCallable()((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 61)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["title"] ?? null) : null))), "html", null, true);
        echo "
                    <i class=\"";
        // line 62
        echo twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 62)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["icon"] ?? null) : null), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"installedPluginsTab\" data-toggle=\"tab\" href=\"#installed\" role=\"tab\">
                <i class=\"fas fa-box-open fa-fw\" aria-hidden=\"true\"></i> ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("installed-plugins"), "html", null, true);
        echo "
                ";
        // line 71
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "pluginList", [], "any", false, false, false, 71)), 0))) {
            // line 72
            echo "                    <span class=\"badge badge-secondary\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "pluginList", [], "any", false, false, false, 72)), "html", null, true);
            echo "</span>
                ";
        }
        // line 74
        echo "            </a>
        </li>
        ";
        // line 76
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 77
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"allPluginsTab\" data-toggle=\"tab\" href=\"#all\" role=\"tab\">
                    <i class=\"fas fa-boxes fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("more-plugins"), "html", null, true);
            echo "</span>
                    ";
            // line 81
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "remotePluginList", [], "any", false, false, false, 81)), 0))) {
                // line 82
                echo "                        <span class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "remotePluginList", [], "any", false, false, false, 82)), "html", null, true);
                echo "</span>
                    ";
            }
            // line 84
            echo "                </a>
            </li>
        ";
        }
        // line 87
        echo "    </ul>
";
    }

    // line 90
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"installed\" role=\"tabpanel\">
            ";
        // line 94
        echo twig_call_macro($macros["_self"], "macro_showInstalledPlugins", [($context["fsc"] ?? null)], 94, $context, $this->getSourceContext());
        echo "
        </div>
        ";
        // line 96
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 97
            echo "            <div class=\"tab-pane fade\" id=\"all\" role=\"tabpanel\">
                ";
            // line 98
            echo twig_call_macro($macros["_self"], "macro_showAllPlugins", [($context["fsc"] ?? null)], 98, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 101
        echo "    </div>

    ";
        // line 104
        echo "    ";
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 105
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 105), "html", null, true);
            echo "\" name=\"upload-plugins\" method=\"post\" class=\"form\" enctype=\"multipart/form-data\"
              onsubmit=\"animateSpinner('add')\">
            ";
            // line 107
            echo $this->env->getFunction('formToken')->getCallable()();
            echo "
            <input type=\"hidden\" name=\"action\" value=\"upload\"/>
            <div class=\"modal fade\" id=\"modalAddPlugin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("add-new-plugin"), "html", null, true);
            echo "</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                    aria-label=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("close"), "html", null, true);
            echo "\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        ";
            // line 119
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 119), 99))) {
                // line 120
                echo "                            <div class=\"alert alert-warning mb-0\">
                                ";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("help-server-accepts-filesize", ["%size%" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 121)]), "html", null, true);
                echo "
                            </div>
                        ";
            }
            // line 124
            echo "                        <div class=\"modal-body\">
                            <div class=\"form-group\">
                                ";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("select-plugin-zip-file"), "html", null, true);
            echo "
                                <input type=\"file\" name=\"plugin[]\" multiple=\"\" accept=\"application/zip\" required/>
                                ";
            // line 128
            if ((0 <= twig_compare(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 128), 99))) {
                // line 129
                echo "                                    <small class=\"form-text text-muted\">
                                        ";
                // line 130
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("help-server-accepts-filesize", ["%size%" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 130)]), "html", null, true);
                echo "
                                    </small>
                                ";
            }
            // line 133
            echo "                            </div>
                            <div class=\"text-right mt-5\">
                                <button type=\"button\" class=\"btn btn-spin-action btn-secondary\"
                                        data-dismiss=\"modal\">";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
            echo "</button>
                                <button type=\"submit\"
                                        class=\"btn btn-spin-action btn-primary\">";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("continue"), "html", null, true);
            echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
        }
    }

    // line 148
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 150
        if ( !twig_constant("FS_DISABLE_RM_PLUGINS")) {
            // line 151
            echo "        <script>
            function deletePlugin(pluginName) {
                bootbox.confirm({
                    title: \"";
            // line 154
            echo $this->env->getFunction('trans')->getCallable()("confirm-delete");
            echo "\",
                    message: \"";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("are-you-sure"), "html", null, true);
            echo "\",
                    closeButton: false,
                    buttons: {
                        cancel: {
                            label: \"<i class='fas fa-times'></i> ";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
            echo "\"
                        },
                        confirm: {
                            label: \"<i class='fas fa-check'></i> ";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
            echo "\",
                            className: 'btn-danger'
                        }
                    },
                    callback: function (result) {
                        if (result) {
                            animateSpinner('add');
                            window.location = \"";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 169), "html", null, true);
            echo "?action=remove\" + \"\\u0026\" + \"plugin=\" + pluginName
                                + \"\\u0026\" + \"multireqtoken=";
            // line 170
            echo $this->env->getFunction('formToken')->getCallable()(false);
            echo "\";
                        }
                    }
                });
            }

            \$(document).ready(function () {
                searchList('#querySearchPlugin', '#all-plugins .card', '.card-title');
                searchList('#querySearchInstalledPlugins', '#installed-plugins .item-plugin', '.plugin-name');
            });

            function searchList(querySelectorInput, querySelectorItem, querySelectorPluginName) {
                \$(querySelectorInput).on('keyup', function (e) {
                    const query = this.value.toLowerCase().trim();
                    \$(querySelectorItem).each(function (index, value) {
                        \$(value).toggle(\$(querySelectorPluginName, value).text().toLowerCase().trim().includes(query));
                    });
                });
            }
        </script>
    ";
        }
    }

    // line 193
    public function macro_healthStatus($__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 194
            echo "    ";
            if ((-1 === twig_compare(($context["value"] ?? null), 1))) {
                // line 195
                echo "        <i class=\"fas fa-heart-broken\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((-1 === twig_compare(            // line 200
($context["value"] ?? null), 2))) {
                // line 201
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((-1 === twig_compare(            // line 206
($context["value"] ?? null), 3))) {
                // line 207
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((-1 === twig_compare(            // line 212
($context["value"] ?? null), 4))) {
                // line 213
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((-1 === twig_compare(            // line 218
($context["value"] ?? null), 5))) {
                // line 219
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } else {
                // line 225
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 233
    public function macro_showAllPlugins($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 234
            echo "    <div class=\"p-2\">
        <input type=\"text\" class=\"form-control shadow-sm\" id=\"querySearchPlugin\" placeholder=\"";
            // line 235
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("search"), "html", null, true);
            echo "\"/>
    </div>
    <div class=\"card-columns pl-2 pr-2\" id=\"all-plugins\">
        ";
            // line 238
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "remotePluginList", [], "any", false, false, false, 238));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 239
                echo "            ";
                $context["extraClass"] = (((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 239), 2))) ? ("border-success") : ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 239), 0))) ? ("border-danger") : ("border-warning"))));
                // line 240
                echo "            <div class=\"card ";
                echo twig_escape_filter($this->env, ($context["extraClass"] ?? null), "html", null, true);
                echo " shadow-sm\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "idplugin", [], "any", false, false, false, 240), "html", null, true);
                echo "\">
                <div class=\"card-body p-2\">
                    <h5 class=\"card-title\">";
                // line 242
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 242), "html", null, true);
                echo " v";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 242), "html", null, true);
                echo "</h5>
                    <p class=\"card-text\">";
                // line 243
                echo twig_nl2br(twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 243), 0, 300), "html", null, true));
                echo "</p>
                </div>
                <div class=\"card-footer p-2\">
                    ";
                // line 246
                $context["extraBtnClass"] = (((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 246), 2))) ? ("btn-outline-success") : ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 246), 0))) ? ("btn-outline-danger") : ("btn-outline-warning"))));
                // line 247
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "url", [], "any", false, false, false, 247), "html", null, true);
                echo "\" class=\"btn ";
                echo twig_escape_filter($this->env, ($context["extraBtnClass"] ?? null), "html", null, true);
                echo "\"
                       target=\"_blank\">";
                // line 248
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("add"), "html", null, true);
                echo "</a>
                    <span class=\"ml-2 text-danger\" title=\"";
                // line 249
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("health"), "html", null, true);
                echo "\">
                        ";
                // line 250
                echo twig_call_macro($macros["_self"], "macro_healthStatus", [twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 250)], 250, $context, $this->getSourceContext());
                echo "
                    </span>
                </div>
            </div>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 255
                echo "            <div class=\"text-center bg-warning rounded\">
                <h2>";
                // line 256
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("no-data"), "html", null, true);
                echo "</h2>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 262
    public function macro_showInstalledPlugins($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 263
            echo "    <div class=\"p-2\">
        <input type=\"text\" class=\"form-control\" id=\"querySearchInstalledPlugins\" placeholder=\"";
            // line 264
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("search"), "html", null, true);
            echo "\"/>
    </div>
    <div class=\"table-responsive\" id=\"installed-plugins\">
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th>";
            // line 270
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("name"), "html", null, true);
            echo "</th>
                <th class=\"text-right\">";
            // line 271
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("version"), "html", null, true);
            echo "</th>
                <th>";
            // line 272
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("description"), "html", null, true);
            echo "</th>
                <th class=\"text-right pr-3\">";
            // line 273
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("actions"), "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "pluginList", [], "any", false, false, false, 277));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 278
                echo "                ";
                $context["trClass"] = "table-danger";
                // line 279
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 279)) {
                    // line 280
                    echo "                    ";
                    $context["trClass"] = "table-success";
                    // line 281
                    echo "                ";
                } elseif (twig_get_attribute($this->env, $this->source, $context["plugin"], "compatible", [], "any", false, false, false, 281)) {
                    // line 282
                    echo "                    ";
                    $context["trClass"] = "";
                    // line 283
                    echo "                ";
                }
                // line 284
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, ($context["trClass"] ?? null), "html", null, true);
                echo " item-plugin\">
                    <td class=\"plugin-name\">";
                // line 285
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 285), "html", null, true);
                echo "</td>
                    <td class=\"text-right\">
                        ";
                // line 287
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 287), 0))) {
                    // line 288
                    echo "                            <span class=\"text-danger\">v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 288), "html", null, true);
                    echo "</span>
                        ";
                } elseif ((-1 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 289
$context["plugin"], "version", [], "any", false, false, false, 289), 1))) {
                    // line 290
                    echo "                            <span class=\"text-warning\">v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 290), "html", null, true);
                    echo "</span>
                        ";
                } else {
                    // line 292
                    echo "                            v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 292), "html", null, true);
                    echo "
                        ";
                }
                // line 294
                echo "                    </td>
                    <td>
                        ";
                // line 296
                echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 296), "html", null, true));
                echo "
                        ";
                // line 297
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "forja", ["url", ""], "method", false, false, false, 297)) {
                    // line 298
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "forja", ["url", ""], "method", false, false, false, 298), "html", null, true);
                    echo "\" target=\"_blank\" class=\"ml-2\">
                                ";
                    // line 299
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("more"), "html", null, true);
                    echo " <i class=\"fas fa-external-link-alt\"></i>
                            </a>
                        ";
                }
                // line 302
                echo "                        <br/>
                        ";
                // line 303
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["plugin"], "require", [], "any", false, false, false, 303));
                foreach ($context['_seq'] as $context["_key"] => $context["requiredPluginName"]) {
                    // line 304
                    echo "                            <div class=\"badge badge-secondary\">
                                ";
                    // line 305
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("plugin-needed", ["%pluginName%" => $context["requiredPluginName"]]), "html", null, true);
                    echo "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requiredPluginName'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 308
                echo "                    </td>
                    <td class=\"text-right text-nowrap\">
                        ";
                // line 310
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "hasUpdate", [], "method", false, false, false, 310)) {
                    // line 311
                    echo "                            <a href=\"Updater\" class=\"btn btn-spin-action btn-sm btn-info mr-1\"
                               title=\"";
                    // line 312
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("updater"), "html", null, true);
                    echo "\">
                                <i class=\"fas fa-cloud-download-alt\" aria-hidden=\"true\"></i>
                            </a>
                        ";
                }
                // line 316
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 316)) {
                    // line 317
                    echo "                            <a class=\"btn btn-sm btn-secondary btn-spin-action\" onclick=\"animateSpinner('add');\"
                               href=\"";
                    // line 318
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 318), "html", null, true);
                    echo "?action=disable&amp;plugin=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 318), "html", null, true);
                    echo "&amp;multireqtoken=";
                    echo $this->env->getFunction('formToken')->getCallable()(false);
                    echo "\">
                                <i class=\"fas fa-times\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">";
                    // line 320
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("disable"), "html", null, true);
                    echo "</span>
                            </a>
                            <br/>
                            <small>";
                    // line 323
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("plugin-order", ["%num%" => twig_get_attribute($this->env, $this->source, $context["plugin"], "order", [], "any", false, false, false, 323)]), "html", null, true);
                    echo "</small>
                        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 324
$context["plugin"], "compatible", [], "any", false, false, false, 324)) {
                    // line 325
                    echo "                            ";
                    if ( !twig_constant("FS_DISABLE_RM_PLUGINS")) {
                        // line 326
                        echo "                                <a class=\"btn btn-sm btn-danger mr-1 btn-spin-action\" href=\"#\"
                                   title=\"";
                        // line 327
                        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
                        echo "\" onclick=\"deletePlugin('";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 327), "html", null, true);
                        echo "');\">
                                    <i class=\"fas fa-trash-alt\" aria-hidden=\"true\"></i>
                                </a>
                            ";
                    }
                    // line 331
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["plugin"], "hasUpdate", [], "method", false, false, false, 331)) {
                        // line 332
                        echo "                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-sm btn-warning dropdown-toggle\"
                                            data-toggle=\"dropdown\" aria-expanded=\"false\">
                                        ";
                        // line 335
                        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("enable"), "html", null, true);
                        echo "
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"Updater\">
                                            <i class=\"fas fa-cloud-download-alt fa-fw mr-1\"
                                               aria-hidden=\"true\"></i> ";
                        // line 340
                        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("update"), "html", null, true);
                        echo "
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\"
                                           href=\"";
                        // line 344
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 344), "html", null, true);
                        echo "?action=enable&amp;plugin=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 344), "html", null, true);
                        echo "&amp;multireqtoken=";
                        echo $this->env->getFunction('formToken')->getCallable()(false);
                        echo "\">
                                            <i class=\"fas fa-check fa-fw mr-1\"
                                               aria-hidden=\"true\"></i> ";
                        // line 346
                        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("enable"), "html", null, true);
                        echo "
                                        </a>
                                    </div>
                                </div>
                            ";
                    } else {
                        // line 351
                        echo "                                <a class=\"btn btn-sm btn-success btn-spin-action\" onclick=\"animateSpinner('add');\"
                                   href=\"";
                        // line 352
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 352), "html", null, true);
                        echo "?action=enable&amp;plugin=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 352), "html", null, true);
                        echo "&amp;multireqtoken=";
                        echo $this->env->getFunction('formToken')->getCallable()(false);
                        echo "\">
                                    <i class=\"fas fa-check\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                        // line 354
                        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("enable"), "html", null, true);
                        echo "</span>
                                </a>
                            ";
                    }
                    // line 357
                    echo "                        ";
                } else {
                    // line 358
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "compatibilityDescription", [], "method", false, false, false, 358), "html", null, true);
                    echo "
                        ";
                }
                // line 360
                echo "                    </td>
                </tr>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 363
                echo "                <tr class=\"table-warning\">
                    <td colspan=\"4\"><b>";
                // line 364
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("no-data"), "html", null, true);
                echo "</b></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 367
            echo "            </tbody>
        </table>
    </div>
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
        return "AdminPlugins.html.twig";
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
        return array (  837 => 367,  828 => 364,  825 => 363,  818 => 360,  812 => 358,  809 => 357,  803 => 354,  794 => 352,  791 => 351,  783 => 346,  774 => 344,  767 => 340,  759 => 335,  754 => 332,  751 => 331,  742 => 327,  739 => 326,  736 => 325,  734 => 324,  730 => 323,  724 => 320,  715 => 318,  712 => 317,  709 => 316,  702 => 312,  699 => 311,  697 => 310,  693 => 308,  684 => 305,  681 => 304,  677 => 303,  674 => 302,  668 => 299,  663 => 298,  661 => 297,  657 => 296,  653 => 294,  647 => 292,  641 => 290,  639 => 289,  634 => 288,  632 => 287,  627 => 285,  622 => 284,  619 => 283,  616 => 282,  613 => 281,  610 => 280,  607 => 279,  604 => 278,  599 => 277,  592 => 273,  588 => 272,  584 => 271,  580 => 270,  571 => 264,  568 => 263,  555 => 262,  545 => 259,  536 => 256,  533 => 255,  523 => 250,  519 => 249,  515 => 248,  508 => 247,  506 => 246,  500 => 243,  494 => 242,  486 => 240,  483 => 239,  478 => 238,  472 => 235,  469 => 234,  456 => 233,  441 => 225,  433 => 219,  431 => 218,  424 => 213,  422 => 212,  415 => 207,  413 => 206,  406 => 201,  404 => 200,  397 => 195,  394 => 194,  381 => 193,  355 => 170,  351 => 169,  341 => 162,  335 => 159,  328 => 155,  324 => 154,  319 => 151,  317 => 150,  312 => 149,  308 => 148,  295 => 138,  290 => 136,  285 => 133,  279 => 130,  276 => 129,  274 => 128,  269 => 126,  265 => 124,  259 => 121,  256 => 120,  254 => 119,  247 => 115,  242 => 113,  233 => 107,  227 => 105,  224 => 104,  220 => 101,  214 => 98,  211 => 97,  209 => 96,  204 => 94,  197 => 91,  193 => 90,  188 => 87,  183 => 84,  177 => 82,  175 => 81,  171 => 80,  166 => 77,  164 => 76,  160 => 74,  154 => 72,  152 => 71,  148 => 70,  137 => 62,  133 => 61,  124 => 55,  115 => 51,  112 => 50,  106 => 47,  101 => 44,  99 => 43,  96 => 42,  89 => 38,  84 => 37,  77 => 33,  72 => 32,  70 => 31,  62 => 28,  53 => 23,  49 => 22,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "AdminPlugins.html.twig", "/var/www/html/Dinamic/View/AdminPlugins.html.twig");
    }
}
