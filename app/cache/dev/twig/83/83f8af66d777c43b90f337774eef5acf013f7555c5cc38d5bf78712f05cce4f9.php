<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8a0377d85b645c2782d05ea4a6940e31fd5cddc4a323ad6b1eae508d3c8bc1d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f68b31b07995be1169bf528304199041b6a00a7287aa61b6db98998a629bafdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68b31b07995be1169bf528304199041b6a00a7287aa61b6db98998a629bafdc->enter($__internal_f68b31b07995be1169bf528304199041b6a00a7287aa61b6db98998a629bafdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f68b31b07995be1169bf528304199041b6a00a7287aa61b6db98998a629bafdc->leave($__internal_f68b31b07995be1169bf528304199041b6a00a7287aa61b6db98998a629bafdc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f2d71198c0e8e7b5dd8a148d0751c7be29fc61673fe055c04c8aba4234a5f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2d71198c0e8e7b5dd8a148d0751c7be29fc61673fe055c04c8aba4234a5f18->enter($__internal_5f2d71198c0e8e7b5dd8a148d0751c7be29fc61673fe055c04c8aba4234a5f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5f2d71198c0e8e7b5dd8a148d0751c7be29fc61673fe055c04c8aba4234a5f18->leave($__internal_5f2d71198c0e8e7b5dd8a148d0751c7be29fc61673fe055c04c8aba4234a5f18_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_258d282edac9fffdb80f60ba780b4950770e3400eb2b83ccce58c965fc301fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258d282edac9fffdb80f60ba780b4950770e3400eb2b83ccce58c965fc301fb5->enter($__internal_258d282edac9fffdb80f60ba780b4950770e3400eb2b83ccce58c965fc301fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_258d282edac9fffdb80f60ba780b4950770e3400eb2b83ccce58c965fc301fb5->leave($__internal_258d282edac9fffdb80f60ba780b4950770e3400eb2b83ccce58c965fc301fb5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_96484053501babf6674789ba2dcc5279acf77786b47a9a6ebeff86582bf63ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96484053501babf6674789ba2dcc5279acf77786b47a9a6ebeff86582bf63ec0->enter($__internal_96484053501babf6674789ba2dcc5279acf77786b47a9a6ebeff86582bf63ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_96484053501babf6674789ba2dcc5279acf77786b47a9a6ebeff86582bf63ec0->leave($__internal_96484053501babf6674789ba2dcc5279acf77786b47a9a6ebeff86582bf63ec0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
