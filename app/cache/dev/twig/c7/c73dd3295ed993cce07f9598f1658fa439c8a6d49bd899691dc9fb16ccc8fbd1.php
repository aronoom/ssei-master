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
        $__internal_87e0ca6ade2bd868ae861946d3a0ff8fd2ea85e20af0aa74f8356be8f61bce74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e0ca6ade2bd868ae861946d3a0ff8fd2ea85e20af0aa74f8356be8f61bce74->enter($__internal_87e0ca6ade2bd868ae861946d3a0ff8fd2ea85e20af0aa74f8356be8f61bce74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87e0ca6ade2bd868ae861946d3a0ff8fd2ea85e20af0aa74f8356be8f61bce74->leave($__internal_87e0ca6ade2bd868ae861946d3a0ff8fd2ea85e20af0aa74f8356be8f61bce74_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d504652b2772e73af860d9c4617bbfffa26eb847141874e3911593785d315e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d504652b2772e73af860d9c4617bbfffa26eb847141874e3911593785d315e55->enter($__internal_d504652b2772e73af860d9c4617bbfffa26eb847141874e3911593785d315e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Location |";
        
        $__internal_d504652b2772e73af860d9c4617bbfffa26eb847141874e3911593785d315e55->leave($__internal_d504652b2772e73af860d9c4617bbfffa26eb847141874e3911593785d315e55_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4557e094686fd2e3e0c9e62d45f04261e00d24f13b8181cb3f8cc0bedcda7373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4557e094686fd2e3e0c9e62d45f04261e00d24f13b8181cb3f8cc0bedcda7373->enter($__internal_4557e094686fd2e3e0c9e62d45f04261e00d24f13b8181cb3f8cc0bedcda7373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_4557e094686fd2e3e0c9e62d45f04261e00d24f13b8181cb3f8cc0bedcda7373->leave($__internal_4557e094686fd2e3e0c9e62d45f04261e00d24f13b8181cb3f8cc0bedcda7373_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_131cf300008163db46788be6d973bc798a086f3b50ca18ea39afada9c89cd419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_131cf300008163db46788be6d973bc798a086f3b50ca18ea39afada9c89cd419->enter($__internal_131cf300008163db46788be6d973bc798a086f3b50ca18ea39afada9c89cd419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_131cf300008163db46788be6d973bc798a086f3b50ca18ea39afada9c89cd419->leave($__internal_131cf300008163db46788be6d973bc798a086f3b50ca18ea39afada9c89cd419_prof);

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
{% endblock %}", "ZoneBundle::layout.html.twig", "/opt/lampp/htdocs/ssei/src/ZoneBundle/Resources/views/layout.html.twig");
    }
}
