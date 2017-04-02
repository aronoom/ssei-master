<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_88505605efd66ddce8e8f03093e5f3b5a3189b309d277fa9d1fb9e7baa516ded extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67c12317d2963168383d5c9b97c199f66976dd596e2a97c401fecad258b8faa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c12317d2963168383d5c9b97c199f66976dd596e2a97c401fecad258b8faa8->enter($__internal_67c12317d2963168383d5c9b97c199f66976dd596e2a97c401fecad258b8faa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67c12317d2963168383d5c9b97c199f66976dd596e2a97c401fecad258b8faa8->leave($__internal_67c12317d2963168383d5c9b97c199f66976dd596e2a97c401fecad258b8faa8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_041040dc9aa50a63a772a4e38866b5092f55e5d77830a61718afb490470c0e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041040dc9aa50a63a772a4e38866b5092f55e5d77830a61718afb490470c0e97->enter($__internal_041040dc9aa50a63a772a4e38866b5092f55e5d77830a61718afb490470c0e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_041040dc9aa50a63a772a4e38866b5092f55e5d77830a61718afb490470c0e97->leave($__internal_041040dc9aa50a63a772a4e38866b5092f55e5d77830a61718afb490470c0e97_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ec76f14c2b626d9c3ac794995336b1352a994bb081739d5d4bf2d98356da4725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec76f14c2b626d9c3ac794995336b1352a994bb081739d5d4bf2d98356da4725->enter($__internal_ec76f14c2b626d9c3ac794995336b1352a994bb081739d5d4bf2d98356da4725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ec76f14c2b626d9c3ac794995336b1352a994bb081739d5d4bf2d98356da4725->leave($__internal_ec76f14c2b626d9c3ac794995336b1352a994bb081739d5d4bf2d98356da4725_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc36e7dd50bfba442fa4e5d38bd80a5cfd547698c5a574e8c73a6c8b5b41c42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc36e7dd50bfba442fa4e5d38bd80a5cfd547698c5a574e8c73a6c8b5b41c42e->enter($__internal_cc36e7dd50bfba442fa4e5d38bd80a5cfd547698c5a574e8c73a6c8b5b41c42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cc36e7dd50bfba442fa4e5d38bd80a5cfd547698c5a574e8c73a6c8b5b41c42e->leave($__internal_cc36e7dd50bfba442fa4e5d38bd80a5cfd547698c5a574e8c73a6c8b5b41c42e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
