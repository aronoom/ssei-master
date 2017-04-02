<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_afac42027dc617f4362ef534bdfa28777f57173c96ffafb6d61ddeb18825b748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_2af0c2e54990dd6e9f150a6070cee63dbbc409f801dac7ddc7db6f4c05c703ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af0c2e54990dd6e9f150a6070cee63dbbc409f801dac7ddc7db6f4c05c703ab->enter($__internal_2af0c2e54990dd6e9f150a6070cee63dbbc409f801dac7ddc7db6f4c05c703ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2af0c2e54990dd6e9f150a6070cee63dbbc409f801dac7ddc7db6f4c05c703ab->leave($__internal_2af0c2e54990dd6e9f150a6070cee63dbbc409f801dac7ddc7db6f4c05c703ab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_21310cf71c8e88c6e116f6a8c2bb14d3555656e0c43e02ce3c0943f18e375c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21310cf71c8e88c6e116f6a8c2bb14d3555656e0c43e02ce3c0943f18e375c97->enter($__internal_21310cf71c8e88c6e116f6a8c2bb14d3555656e0c43e02ce3c0943f18e375c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_21310cf71c8e88c6e116f6a8c2bb14d3555656e0c43e02ce3c0943f18e375c97->leave($__internal_21310cf71c8e88c6e116f6a8c2bb14d3555656e0c43e02ce3c0943f18e375c97_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77c40b025a5757001994b548dc890f31e6374c04bbe31d3d5cd6b6aa73bf0570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c40b025a5757001994b548dc890f31e6374c04bbe31d3d5cd6b6aa73bf0570->enter($__internal_77c40b025a5757001994b548dc890f31e6374c04bbe31d3d5cd6b6aa73bf0570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_77c40b025a5757001994b548dc890f31e6374c04bbe31d3d5cd6b6aa73bf0570->leave($__internal_77c40b025a5757001994b548dc890f31e6374c04bbe31d3d5cd6b6aa73bf0570_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7fbbed6ac38967d6cf92018241dcac424c5970a8acb2440f57afc1ad2c52740c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbbed6ac38967d6cf92018241dcac424c5970a8acb2440f57afc1ad2c52740c->enter($__internal_7fbbed6ac38967d6cf92018241dcac424c5970a8acb2440f57afc1ad2c52740c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7fbbed6ac38967d6cf92018241dcac424c5970a8acb2440f57afc1ad2c52740c->leave($__internal_7fbbed6ac38967d6cf92018241dcac424c5970a8acb2440f57afc1ad2c52740c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
