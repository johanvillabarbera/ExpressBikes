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

/* Master/MenuBgTemplate.html.twig */
class __TwigTemplate_db2f8e09091325c9ba353592e6cc83c11ce90831e8ad4eed7309c729e8ab400c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'fullBody' => [$this, 'block_fullBody'],
            'navbar' => [$this, 'block_navbar'],
            'messages' => [$this, 'block_messages'],
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "Master/MenuBgTemplate.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <body class=\"bg-light\">
    ";
        // line 24
        $this->displayBlock('navbar', $context, $blocks);
        // line 27
        echo "    <div class=\"pt-3\">
        ";
        // line 28
        $this->displayBlock('messages', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('bodyHeaderOptions', $context, $blocks);
        // line 34
        echo "    </div>
    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "JsFooter"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
            echo "        ";
            $this->loadTemplate((($__internal_compile_0 = $context["item"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["path"] ?? null) : null), "Master/MenuBgTemplate.html.twig", 39)->display($context);
            // line 40
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "BodyEnd"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 42
            echo "        ";
            $this->loadTemplate((($__internal_compile_1 = $context["item"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["path"] ?? null) : null), "Master/MenuBgTemplate.html.twig", 42)->display($context);
            // line 43
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 44);
        echo "
    <br/>
    <br/>
    <br/>
    <!-- execution time: ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getFunction('executionTime')->getCallable()(), "html", null, true);
        echo " s -->
    </body>
";
    }

    // line 24
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "        ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
    }

    // line 28
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "            ";
        $this->displayParentBlock("messages", $context, $blocks);
        echo "
        ";
    }

    // line 31
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "            ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
        ";
    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "        ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/MenuBgTemplate.html.twig";
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
        return array (  194 => 36,  190 => 35,  183 => 32,  179 => 31,  172 => 29,  168 => 28,  161 => 25,  157 => 24,  150 => 48,  142 => 44,  128 => 43,  125 => 42,  107 => 41,  93 => 40,  90 => 39,  72 => 38,  70 => 35,  67 => 34,  64 => 31,  62 => 28,  59 => 27,  57 => 24,  54 => 23,  50 => 22,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/MenuBgTemplate.html.twig", "/var/www/html/Dinamic/View/Master/MenuBgTemplate.html.twig");
    }
}
