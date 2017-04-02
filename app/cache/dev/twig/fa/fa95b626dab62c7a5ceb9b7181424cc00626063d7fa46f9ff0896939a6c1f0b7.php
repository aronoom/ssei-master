<?php

/* ProjetBundle::layout.html.twig */
class __TwigTemplate_c7f0c601a2fba3a16dd058d89842adec098a769e2ffa234ee3b8c55e5e9d6c3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProjetBundle::layout.html.twig", 1);
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
        $__internal_ae2e4ad2cdf77a5c5690b040793d8942abf78207ce5ebfd342536e8d46bca530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2e4ad2cdf77a5c5690b040793d8942abf78207ce5ebfd342536e8d46bca530->enter($__internal_ae2e4ad2cdf77a5c5690b040793d8942abf78207ce5ebfd342536e8d46bca530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae2e4ad2cdf77a5c5690b040793d8942abf78207ce5ebfd342536e8d46bca530->leave($__internal_ae2e4ad2cdf77a5c5690b040793d8942abf78207ce5ebfd342536e8d46bca530_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d94235c65152327d386dcce0f0ebd5d98c969fb81ffd5252a13314bf2ae344e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d94235c65152327d386dcce0f0ebd5d98c969fb81ffd5252a13314bf2ae344e->enter($__internal_0d94235c65152327d386dcce0f0ebd5d98c969fb81ffd5252a13314bf2ae344e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet |";
        
        $__internal_0d94235c65152327d386dcce0f0ebd5d98c969fb81ffd5252a13314bf2ae344e->leave($__internal_0d94235c65152327d386dcce0f0ebd5d98c969fb81ffd5252a13314bf2ae344e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_701a89a7989f5da7445f4c9fff744113d4e53160bb46fe7775273d9ee846f161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701a89a7989f5da7445f4c9fff744113d4e53160bb46fe7775273d9ee846f161->enter($__internal_701a89a7989f5da7445f4c9fff744113d4e53160bb46fe7775273d9ee846f161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_701a89a7989f5da7445f4c9fff744113d4e53160bb46fe7775273d9ee846f161->leave($__internal_701a89a7989f5da7445f4c9fff744113d4e53160bb46fe7775273d9ee846f161_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_80e7069fc60e4cfe41aebf4e6be16f2d744273be0932cb62ce4411efc09359e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e7069fc60e4cfe41aebf4e6be16f2d744273be0932cb62ce4411efc09359e8->enter($__internal_80e7069fc60e4cfe41aebf4e6be16f2d744273be0932cb62ce4411efc09359e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_80e7069fc60e4cfe41aebf4e6be16f2d744273be0932cb62ce4411efc09359e8->leave($__internal_80e7069fc60e4cfe41aebf4e6be16f2d744273be0932cb62ce4411efc09359e8_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle::layout.html.twig";
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
{% block title %}Projet |{% endblock %}
{% block content %}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "ProjetBundle::layout.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/layout.html.twig");
    }
}
