<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_06ef76c28bbfc640519c3cbc716ce638348c884c67edd8f49c64556a1ec364b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle::layout.html.twig", 1);
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
        $__internal_4d8cd1c393387a90d50a43edfd5f7ddcb02de19bd715b186f0ffe20ed7817a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8cd1c393387a90d50a43edfd5f7ddcb02de19bd715b186f0ffe20ed7817a62->enter($__internal_4d8cd1c393387a90d50a43edfd5f7ddcb02de19bd715b186f0ffe20ed7817a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d8cd1c393387a90d50a43edfd5f7ddcb02de19bd715b186f0ffe20ed7817a62->leave($__internal_4d8cd1c393387a90d50a43edfd5f7ddcb02de19bd715b186f0ffe20ed7817a62_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba9d8fc10509e80277f902d2fc2e07e85e4259ad18157d071a23cfcf4a0f681e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba9d8fc10509e80277f902d2fc2e07e85e4259ad18157d071a23cfcf4a0f681e->enter($__internal_ba9d8fc10509e80277f902d2fc2e07e85e4259ad18157d071a23cfcf4a0f681e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_ba9d8fc10509e80277f902d2fc2e07e85e4259ad18157d071a23cfcf4a0f681e->leave($__internal_ba9d8fc10509e80277f902d2fc2e07e85e4259ad18157d071a23cfcf4a0f681e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d8d5a309bb7512f2907a9ba32dd073d1e84bc294e5afcc0ea2f033407f3910f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d5a309bb7512f2907a9ba32dd073d1e84bc294e5afcc0ea2f033407f3910f7->enter($__internal_d8d5a309bb7512f2907a9ba32dd073d1e84bc294e5afcc0ea2f033407f3910f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_d8d5a309bb7512f2907a9ba32dd073d1e84bc294e5afcc0ea2f033407f3910f7->leave($__internal_d8d5a309bb7512f2907a9ba32dd073d1e84bc294e5afcc0ea2f033407f3910f7_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fd96ec60165ca4b5e39645852f9b6d120c274beb7c18d9bb19bbce0143ea9143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd96ec60165ca4b5e39645852f9b6d120c274beb7c18d9bb19bbce0143ea9143->enter($__internal_fd96ec60165ca4b5e39645852f9b6d120c274beb7c18d9bb19bbce0143ea9143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_fd96ec60165ca4b5e39645852f9b6d120c274beb7c18d9bb19bbce0143ea9143->leave($__internal_fd96ec60165ca4b5e39645852f9b6d120c274beb7c18d9bb19bbce0143ea9143_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
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
{% endblock %}", "UserBundle::layout.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/UserBundle/Resources/views/layout.html.twig");
    }
}
