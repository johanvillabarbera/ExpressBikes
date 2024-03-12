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

/* Master/MicroTemplate.html.twig */
class __TwigTemplate_d657d363210664f4d554275f13680ebd1250f646def8efada2c3dfa5e73f0dd4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'icons' => [$this, 'block_icons'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
            'fullBody' => [$this, 'block_fullBody'],
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\" xml:lang=\"";
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\" >
    <head>
        ";
        // line 24
        $this->displayBlock('meta', $context, $blocks);
        // line 32
        echo "        ";
        $this->displayBlock('icons', $context, $blocks);
        // line 36
        echo "        ";
        $this->displayBlock('css', $context, $blocks);
        // line 40
        echo "        ";
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", ["css"], "method", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 42
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $context["css"], "html", null, true);
            echo "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "        ";
        // line 50
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", ["js"], "method", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 51
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $context["js"], "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        ";
        if (($context["debugBarRender"] ?? null)) {
            // line 54
            echo "            ";
            echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "renderHead", [], "method", false, false, false, 54);
            echo "
        ";
        }
        // line 56
        echo "    </head>
    ";
        // line 57
        $this->displayBlock('fullBody', $context, $blocks);
        // line 75
        echo "</html>";
    }

    // line 24
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
            <title>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 26), "html", null, true);
        echo "</title>
            <meta name=\"description\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("meta-description"), "html", null, true);
        echo "\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
            <meta name=\"generator\" content=\"FacturaScripts\" />
            <meta name=\"robots\" content=\"noindex\" />
        ";
    }

    // line 32
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "            <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/favicon.ico"), "html", null, true);
        echo "\" />
            <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/apple-icon-180x180.png"), "html", null, true);
        echo "\" />
        ";
    }

    // line 36
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/@fortawesome/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\"/>
        ";
    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/@fortawesome/fontawesome-free/js/all.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 57
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "        <body>
            ";
        // line 59
        $this->displayBlock('messages', $context, $blocks);
        // line 67
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "            ";
        if (($context["debugBarRender"] ?? null)) {
            // line 70
            echo "                ";
            echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 70);
            echo "
            ";
        }
        // line 72
        echo "            <!-- execution time: ";
        echo twig_escape_filter($this->env, $this->env->getFunction('executionTime')->getCallable()(), "html", null, true);
        echo " s -->
        </body>
    ";
    }

    // line 59
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                ";
        $this->loadTemplate("Macro/Toasts.html.twig", "Master/MicroTemplate.html.twig", 60)->display($context);
        // line 61
        echo "                ";
        $macros["__internal_parse_0"] = $this->loadTemplate("Macro/Utils.html.twig", "Master/MicroTemplate.html.twig", 61)->unwrap();
        // line 62
        echo "                ";
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["error", "critical"], "danger"], 62, $context, $this->getSourceContext());
        echo "
                ";
        // line 63
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["warning"], "warning"], 63, $context, $this->getSourceContext());
        echo "
                ";
        // line 64
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["notice"], "success"], 64, $context, $this->getSourceContext());
        echo "
                ";
        // line 65
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["info"], "info"], 65, $context, $this->getSourceContext());
        echo "
            ";
    }

    // line 67
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/MicroTemplate.html.twig";
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
        return array (  246 => 68,  242 => 67,  236 => 65,  232 => 64,  228 => 63,  223 => 62,  220 => 61,  217 => 60,  213 => 59,  205 => 72,  199 => 70,  196 => 69,  193 => 67,  191 => 59,  188 => 58,  184 => 57,  178 => 47,  174 => 46,  169 => 45,  165 => 44,  159 => 38,  154 => 37,  150 => 36,  144 => 34,  139 => 33,  135 => 32,  126 => 27,  122 => 26,  119 => 25,  115 => 24,  111 => 75,  109 => 57,  106 => 56,  100 => 54,  97 => 53,  88 => 51,  83 => 50,  81 => 49,  78 => 44,  69 => 42,  64 => 41,  62 => 40,  59 => 36,  56 => 32,  54 => 24,  47 => 22,  44 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/MicroTemplate.html.twig", "/var/www/html/Dinamic/View/Master/MicroTemplate.html.twig");
    }
}
