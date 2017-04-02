<?php

/* ProjetBundle::layout.html.twig */
class __TwigTemplate_fbaabada14839e66f6867d7080b998511f1aa7a6b0fed43338752ac56c7ae641 extends Twig_Template
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
        $__internal_a43a644f78a0a72c7289211e412f06d408a4d942c59ed8902e16cd36d7fff379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43a644f78a0a72c7289211e412f06d408a4d942c59ed8902e16cd36d7fff379->enter($__internal_a43a644f78a0a72c7289211e412f06d408a4d942c59ed8902e16cd36d7fff379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a43a644f78a0a72c7289211e412f06d408a4d942c59ed8902e16cd36d7fff379->leave($__internal_a43a644f78a0a72c7289211e412f06d408a4d942c59ed8902e16cd36d7fff379_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_06a6cd0949cf5b1bf0dfe475a46f3b9d405e84f7ecc941c3c45bd0caeb86c714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a6cd0949cf5b1bf0dfe475a46f3b9d405e84f7ecc941c3c45bd0caeb86c714->enter($__internal_06a6cd0949cf5b1bf0dfe475a46f3b9d405e84f7ecc941c3c45bd0caeb86c714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet |";
        
        $__internal_06a6cd0949cf5b1bf0dfe475a46f3b9d405e84f7ecc941c3c45bd0caeb86c714->leave($__internal_06a6cd0949cf5b1bf0dfe475a46f3b9d405e84f7ecc941c3c45bd0caeb86c714_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_86c4a4a61011f068147d2cce07637de8388f5c3ab9ac6bf07695de31e2201119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c4a4a61011f068147d2cce07637de8388f5c3ab9ac6bf07695de31e2201119->enter($__internal_86c4a4a61011f068147d2cce07637de8388f5c3ab9ac6bf07695de31e2201119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_86c4a4a61011f068147d2cce07637de8388f5c3ab9ac6bf07695de31e2201119->leave($__internal_86c4a4a61011f068147d2cce07637de8388f5c3ab9ac6bf07695de31e2201119_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11a73ea714e22367f2ceed38cbcf6ca42876f36e57309a0dd31054bc094813e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a73ea714e22367f2ceed38cbcf6ca42876f36e57309a0dd31054bc094813e1->enter($__internal_11a73ea714e22367f2ceed38cbcf6ca42876f36e57309a0dd31054bc094813e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_11a73ea714e22367f2ceed38cbcf6ca42876f36e57309a0dd31054bc094813e1->leave($__internal_11a73ea714e22367f2ceed38cbcf6ca42876f36e57309a0dd31054bc094813e1_prof);

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
