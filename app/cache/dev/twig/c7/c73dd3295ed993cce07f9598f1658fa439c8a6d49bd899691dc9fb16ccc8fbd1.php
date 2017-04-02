<?php

/* ZoneBundle::layout.html.twig */
class __TwigTemplate_21c49c23449d2957ed1934b02641d9ca9221caaa33721005a4877684b6ba1d5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ZoneBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58358321103caa4e3c6d5d33defd792f67a1fcd18e039222b2eda9465026e950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58358321103caa4e3c6d5d33defd792f67a1fcd18e039222b2eda9465026e950->enter($__internal_58358321103caa4e3c6d5d33defd792f67a1fcd18e039222b2eda9465026e950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58358321103caa4e3c6d5d33defd792f67a1fcd18e039222b2eda9465026e950->leave($__internal_58358321103caa4e3c6d5d33defd792f67a1fcd18e039222b2eda9465026e950_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d0a973f5928edf02f8c43891b78c66faf72efcfd75a9aa70766a8afc6a95845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0a973f5928edf02f8c43891b78c66faf72efcfd75a9aa70766a8afc6a95845->enter($__internal_2d0a973f5928edf02f8c43891b78c66faf72efcfd75a9aa70766a8afc6a95845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Location |";
        
        $__internal_2d0a973f5928edf02f8c43891b78c66faf72efcfd75a9aa70766a8afc6a95845->leave($__internal_2d0a973f5928edf02f8c43891b78c66faf72efcfd75a9aa70766a8afc6a95845_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f80abd94c0023bbc29f5d4b8ef47072b338e634e2283ee1ad5db90f5b18062ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80abd94c0023bbc29f5d4b8ef47072b338e634e2283ee1ad5db90f5b18062ec->enter($__internal_f80abd94c0023bbc29f5d4b8ef47072b338e634e2283ee1ad5db90f5b18062ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_f80abd94c0023bbc29f5d4b8ef47072b338e634e2283ee1ad5db90f5b18062ec->leave($__internal_f80abd94c0023bbc29f5d4b8ef47072b338e634e2283ee1ad5db90f5b18062ec_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca107eace1b7541122a38eb2eadabf48f8bab579b37de5bd67de94c6a64e0ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca107eace1b7541122a38eb2eadabf48f8bab579b37de5bd67de94c6a64e0ce4->enter($__internal_ca107eace1b7541122a38eb2eadabf48f8bab579b37de5bd67de94c6a64e0ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_ca107eace1b7541122a38eb2eadabf48f8bab579b37de5bd67de94c6a64e0ce4->leave($__internal_ca107eace1b7541122a38eb2eadabf48f8bab579b37de5bd67de94c6a64e0ce4_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  62 => 6,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block title %}Location |{% endblock %}
{% block content %}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "ZoneBundle::layout.html.twig", "/opt/lampp/htdocs/ssei-master/src/ZoneBundle/Resources/views/layout.html.twig");
    }
}
