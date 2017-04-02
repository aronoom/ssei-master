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
        $__internal_0f90830edd20f54da79a307d52220c53d4c6d3bccf42d8d49befbec88c439c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f90830edd20f54da79a307d52220c53d4c6d3bccf42d8d49befbec88c439c2b->enter($__internal_0f90830edd20f54da79a307d52220c53d4c6d3bccf42d8d49befbec88c439c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f90830edd20f54da79a307d52220c53d4c6d3bccf42d8d49befbec88c439c2b->leave($__internal_0f90830edd20f54da79a307d52220c53d4c6d3bccf42d8d49befbec88c439c2b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4501c0b09b4b5a5b0be02f7a0c7d79d094d31550b4d626434b2707ccffffb73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4501c0b09b4b5a5b0be02f7a0c7d79d094d31550b4d626434b2707ccffffb73->enter($__internal_b4501c0b09b4b5a5b0be02f7a0c7d79d094d31550b4d626434b2707ccffffb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_b4501c0b09b4b5a5b0be02f7a0c7d79d094d31550b4d626434b2707ccffffb73->leave($__internal_b4501c0b09b4b5a5b0be02f7a0c7d79d094d31550b4d626434b2707ccffffb73_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_96c16ca825263be2ae1ce426b5fdcd167f331b5afebc8d12a807f1d712f1b9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c16ca825263be2ae1ce426b5fdcd167f331b5afebc8d12a807f1d712f1b9f0->enter($__internal_96c16ca825263be2ae1ce426b5fdcd167f331b5afebc8d12a807f1d712f1b9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_96c16ca825263be2ae1ce426b5fdcd167f331b5afebc8d12a807f1d712f1b9f0->leave($__internal_96c16ca825263be2ae1ce426b5fdcd167f331b5afebc8d12a807f1d712f1b9f0_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_551b293af911378ea6915ab2c9ce855ad88f7b9af233075ea5856567f1ea5c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551b293af911378ea6915ab2c9ce855ad88f7b9af233075ea5856567f1ea5c84->enter($__internal_551b293af911378ea6915ab2c9ce855ad88f7b9af233075ea5856567f1ea5c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_551b293af911378ea6915ab2c9ce855ad88f7b9af233075ea5856567f1ea5c84->leave($__internal_551b293af911378ea6915ab2c9ce855ad88f7b9af233075ea5856567f1ea5c84_prof);

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
