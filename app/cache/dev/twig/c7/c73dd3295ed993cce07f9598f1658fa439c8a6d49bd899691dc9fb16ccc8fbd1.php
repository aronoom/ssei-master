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
        $__internal_e51f0e6f881efcd4a189a9254bc2f43faf6b4df873446755e0006901575c4aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51f0e6f881efcd4a189a9254bc2f43faf6b4df873446755e0006901575c4aef->enter($__internal_e51f0e6f881efcd4a189a9254bc2f43faf6b4df873446755e0006901575c4aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e51f0e6f881efcd4a189a9254bc2f43faf6b4df873446755e0006901575c4aef->leave($__internal_e51f0e6f881efcd4a189a9254bc2f43faf6b4df873446755e0006901575c4aef_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9164dc88bc840763437cde02de234083ebebf8fc620cdfdcc3ecd10d864e863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9164dc88bc840763437cde02de234083ebebf8fc620cdfdcc3ecd10d864e863->enter($__internal_e9164dc88bc840763437cde02de234083ebebf8fc620cdfdcc3ecd10d864e863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Location |";
        
        $__internal_e9164dc88bc840763437cde02de234083ebebf8fc620cdfdcc3ecd10d864e863->leave($__internal_e9164dc88bc840763437cde02de234083ebebf8fc620cdfdcc3ecd10d864e863_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9f086859d4d721fdd4a9dbfe70ca7ba85c9fec06304f30aea7ec36f31693608a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f086859d4d721fdd4a9dbfe70ca7ba85c9fec06304f30aea7ec36f31693608a->enter($__internal_9f086859d4d721fdd4a9dbfe70ca7ba85c9fec06304f30aea7ec36f31693608a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_9f086859d4d721fdd4a9dbfe70ca7ba85c9fec06304f30aea7ec36f31693608a->leave($__internal_9f086859d4d721fdd4a9dbfe70ca7ba85c9fec06304f30aea7ec36f31693608a_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4cf2e105a71d426e3c53ef522e7cf776fa289ac9f7a034f101ae3888db502e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf2e105a71d426e3c53ef522e7cf776fa289ac9f7a034f101ae3888db502e5b->enter($__internal_4cf2e105a71d426e3c53ef522e7cf776fa289ac9f7a034f101ae3888db502e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_4cf2e105a71d426e3c53ef522e7cf776fa289ac9f7a034f101ae3888db502e5b->leave($__internal_4cf2e105a71d426e3c53ef522e7cf776fa289ac9f7a034f101ae3888db502e5b_prof);

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
