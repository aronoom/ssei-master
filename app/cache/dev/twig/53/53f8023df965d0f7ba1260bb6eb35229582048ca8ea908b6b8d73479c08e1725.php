<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_afac42027dc617f4362ef534bdfa28777f57173c96ffafb6d61ddeb18825b748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_ff5b17079d59956eb661da2bd4ce0b48d634c93e8b41d1402cb1f361c5732dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5b17079d59956eb661da2bd4ce0b48d634c93e8b41d1402cb1f361c5732dfb->enter($__internal_ff5b17079d59956eb661da2bd4ce0b48d634c93e8b41d1402cb1f361c5732dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff5b17079d59956eb661da2bd4ce0b48d634c93e8b41d1402cb1f361c5732dfb->leave($__internal_ff5b17079d59956eb661da2bd4ce0b48d634c93e8b41d1402cb1f361c5732dfb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c082e3720d63d876c970a70490bba5218b5b85ff56fa8a7c8efb3185f9ef02e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c082e3720d63d876c970a70490bba5218b5b85ff56fa8a7c8efb3185f9ef02e3->enter($__internal_c082e3720d63d876c970a70490bba5218b5b85ff56fa8a7c8efb3185f9ef02e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c082e3720d63d876c970a70490bba5218b5b85ff56fa8a7c8efb3185f9ef02e3->leave($__internal_c082e3720d63d876c970a70490bba5218b5b85ff56fa8a7c8efb3185f9ef02e3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_403edae993f1378137ac0fe0d1fb0614fc9485cc1c742958bfa2e57e938c1f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403edae993f1378137ac0fe0d1fb0614fc9485cc1c742958bfa2e57e938c1f3f->enter($__internal_403edae993f1378137ac0fe0d1fb0614fc9485cc1c742958bfa2e57e938c1f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_403edae993f1378137ac0fe0d1fb0614fc9485cc1c742958bfa2e57e938c1f3f->leave($__internal_403edae993f1378137ac0fe0d1fb0614fc9485cc1c742958bfa2e57e938c1f3f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b1e578aa19a4a73aa80c1c3129939b2cc8b097cf52f2ee9a1f2909086aae4161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e578aa19a4a73aa80c1c3129939b2cc8b097cf52f2ee9a1f2909086aae4161->enter($__internal_b1e578aa19a4a73aa80c1c3129939b2cc8b097cf52f2ee9a1f2909086aae4161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b1e578aa19a4a73aa80c1c3129939b2cc8b097cf52f2ee9a1f2909086aae4161->leave($__internal_b1e578aa19a4a73aa80c1c3129939b2cc8b097cf52f2ee9a1f2909086aae4161_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
