<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_be988ca5939a9ad7c1dc7c2a528d8df8eaebb58454171cfeb115638328c8c7ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_ef0fea4ddd0e40937fe26cb6068be7c4af30784d05e93921b4c2219ad2d888e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0fea4ddd0e40937fe26cb6068be7c4af30784d05e93921b4c2219ad2d888e4->enter($__internal_ef0fea4ddd0e40937fe26cb6068be7c4af30784d05e93921b4c2219ad2d888e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef0fea4ddd0e40937fe26cb6068be7c4af30784d05e93921b4c2219ad2d888e4->leave($__internal_ef0fea4ddd0e40937fe26cb6068be7c4af30784d05e93921b4c2219ad2d888e4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d64e5ff3934fe56cd8840809835a6b45598422a3bb162300bc55a7bb0737ddd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64e5ff3934fe56cd8840809835a6b45598422a3bb162300bc55a7bb0737ddd6->enter($__internal_d64e5ff3934fe56cd8840809835a6b45598422a3bb162300bc55a7bb0737ddd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_d64e5ff3934fe56cd8840809835a6b45598422a3bb162300bc55a7bb0737ddd6->leave($__internal_d64e5ff3934fe56cd8840809835a6b45598422a3bb162300bc55a7bb0737ddd6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_98f503afd8213f947583ea1786194b63691fb0255dcd7ac82cdde5abbf17ee17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f503afd8213f947583ea1786194b63691fb0255dcd7ac82cdde5abbf17ee17->enter($__internal_98f503afd8213f947583ea1786194b63691fb0255dcd7ac82cdde5abbf17ee17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_98f503afd8213f947583ea1786194b63691fb0255dcd7ac82cdde5abbf17ee17->leave($__internal_98f503afd8213f947583ea1786194b63691fb0255dcd7ac82cdde5abbf17ee17_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be7bc94124c1ffbdf4c168e8fc051bf8487eb1c02c94bf21e3cb2575f7dc68b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7bc94124c1ffbdf4c168e8fc051bf8487eb1c02c94bf21e3cb2575f7dc68b3->enter($__internal_be7bc94124c1ffbdf4c168e8fc051bf8487eb1c02c94bf21e3cb2575f7dc68b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_be7bc94124c1ffbdf4c168e8fc051bf8487eb1c02c94bf21e3cb2575f7dc68b3->leave($__internal_be7bc94124c1ffbdf4c168e8fc051bf8487eb1c02c94bf21e3cb2575f7dc68b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
{% block title %}Administration|{% endblock %}
{% block content %}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "FOSUserBundle::layout.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/UserBundle/Resources/views/layout.html.twig");
    }
}
