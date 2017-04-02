<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_14f2b6364f05972d94908097e663f6dead90b0a281f0d6ce8704d4c7d4889b53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fea17a4fe08cac338d512af1c7e93e21e3929235be93a8220a9ab7ea73bfbf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fea17a4fe08cac338d512af1c7e93e21e3929235be93a8220a9ab7ea73bfbf3->enter($__internal_2fea17a4fe08cac338d512af1c7e93e21e3929235be93a8220a9ab7ea73bfbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fea17a4fe08cac338d512af1c7e93e21e3929235be93a8220a9ab7ea73bfbf3->leave($__internal_2fea17a4fe08cac338d512af1c7e93e21e3929235be93a8220a9ab7ea73bfbf3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3d3945046019b8525de5c99fc7ad6dbef91cc763dba2bdde63a67c544e65e7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3945046019b8525de5c99fc7ad6dbef91cc763dba2bdde63a67c544e65e7ef->enter($__internal_3d3945046019b8525de5c99fc7ad6dbef91cc763dba2bdde63a67c544e65e7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3d3945046019b8525de5c99fc7ad6dbef91cc763dba2bdde63a67c544e65e7ef->leave($__internal_3d3945046019b8525de5c99fc7ad6dbef91cc763dba2bdde63a67c544e65e7ef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_83b4c2181444c5d94d065b6d8f23aad3861479dd832aa3205019aca574b606cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b4c2181444c5d94d065b6d8f23aad3861479dd832aa3205019aca574b606cd->enter($__internal_83b4c2181444c5d94d065b6d8f23aad3861479dd832aa3205019aca574b606cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_83b4c2181444c5d94d065b6d8f23aad3861479dd832aa3205019aca574b606cd->leave($__internal_83b4c2181444c5d94d065b6d8f23aad3861479dd832aa3205019aca574b606cd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba84455b919901561d55c70a23b95c285937dc76735c42c104b2116d42d34617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba84455b919901561d55c70a23b95c285937dc76735c42c104b2116d42d34617->enter($__internal_ba84455b919901561d55c70a23b95c285937dc76735c42c104b2116d42d34617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ba84455b919901561d55c70a23b95c285937dc76735c42c104b2116d42d34617->leave($__internal_ba84455b919901561d55c70a23b95c285937dc76735c42c104b2116d42d34617_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
