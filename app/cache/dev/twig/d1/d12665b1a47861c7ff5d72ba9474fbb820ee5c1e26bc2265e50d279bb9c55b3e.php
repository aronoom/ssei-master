<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6d7c7fcf972b2ab757f7519b92ada0c81ad841c7daa1b5a27ffa2ecf2ba898de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9016fc658053f98bbc7a61ac9f04382a373a8e491c6b834f5a2e2001e1d2877d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9016fc658053f98bbc7a61ac9f04382a373a8e491c6b834f5a2e2001e1d2877d->enter($__internal_9016fc658053f98bbc7a61ac9f04382a373a8e491c6b834f5a2e2001e1d2877d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9016fc658053f98bbc7a61ac9f04382a373a8e491c6b834f5a2e2001e1d2877d->leave($__internal_9016fc658053f98bbc7a61ac9f04382a373a8e491c6b834f5a2e2001e1d2877d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8507ea2abe9bbf7e46893e7d1e141ea4496eab00250a606e2df8cc608c5f7795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8507ea2abe9bbf7e46893e7d1e141ea4496eab00250a606e2df8cc608c5f7795->enter($__internal_8507ea2abe9bbf7e46893e7d1e141ea4496eab00250a606e2df8cc608c5f7795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8507ea2abe9bbf7e46893e7d1e141ea4496eab00250a606e2df8cc608c5f7795->leave($__internal_8507ea2abe9bbf7e46893e7d1e141ea4496eab00250a606e2df8cc608c5f7795_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce31f51fe405c886a5ccc2aea3537ad3dbc6e304151ecf07b6c96862559cfc1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce31f51fe405c886a5ccc2aea3537ad3dbc6e304151ecf07b6c96862559cfc1b->enter($__internal_ce31f51fe405c886a5ccc2aea3537ad3dbc6e304151ecf07b6c96862559cfc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ce31f51fe405c886a5ccc2aea3537ad3dbc6e304151ecf07b6c96862559cfc1b->leave($__internal_ce31f51fe405c886a5ccc2aea3537ad3dbc6e304151ecf07b6c96862559cfc1b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/opt/lampp/htdocs/ssei-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
