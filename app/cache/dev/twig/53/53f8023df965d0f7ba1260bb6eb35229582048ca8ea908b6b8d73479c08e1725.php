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
        $__internal_c86409530db8bfedebc2469d560fd5de8f04f9060374319b8c7588cc97e15e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86409530db8bfedebc2469d560fd5de8f04f9060374319b8c7588cc97e15e68->enter($__internal_c86409530db8bfedebc2469d560fd5de8f04f9060374319b8c7588cc97e15e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c86409530db8bfedebc2469d560fd5de8f04f9060374319b8c7588cc97e15e68->leave($__internal_c86409530db8bfedebc2469d560fd5de8f04f9060374319b8c7588cc97e15e68_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7c0fc551a5ade104cbbb07b4212e80f6620218914e2b09598a6d180767b01b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0fc551a5ade104cbbb07b4212e80f6620218914e2b09598a6d180767b01b24->enter($__internal_7c0fc551a5ade104cbbb07b4212e80f6620218914e2b09598a6d180767b01b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7c0fc551a5ade104cbbb07b4212e80f6620218914e2b09598a6d180767b01b24->leave($__internal_7c0fc551a5ade104cbbb07b4212e80f6620218914e2b09598a6d180767b01b24_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd7639b8866e569db8b4495f6946978216e167b93c0dfebae6fe0078c2c2d33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7639b8866e569db8b4495f6946978216e167b93c0dfebae6fe0078c2c2d33c->enter($__internal_fd7639b8866e569db8b4495f6946978216e167b93c0dfebae6fe0078c2c2d33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fd7639b8866e569db8b4495f6946978216e167b93c0dfebae6fe0078c2c2d33c->leave($__internal_fd7639b8866e569db8b4495f6946978216e167b93c0dfebae6fe0078c2c2d33c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e76c00cc18b0cc6b3944cd4c20c320d1c440a49133e5fe2c1584f24d17491d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e76c00cc18b0cc6b3944cd4c20c320d1c440a49133e5fe2c1584f24d17491d40->enter($__internal_e76c00cc18b0cc6b3944cd4c20c320d1c440a49133e5fe2c1584f24d17491d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e76c00cc18b0cc6b3944cd4c20c320d1c440a49133e5fe2c1584f24d17491d40->leave($__internal_e76c00cc18b0cc6b3944cd4c20c320d1c440a49133e5fe2c1584f24d17491d40_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/opt/lampp/htdocs/ssei-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
