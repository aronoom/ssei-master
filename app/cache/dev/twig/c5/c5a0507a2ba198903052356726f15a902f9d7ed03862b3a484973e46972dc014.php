<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4fccd35a1625b2a1afb1c370a00155311017f34d52cf668c2c57d07fd28ac8f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4830f321f3bf505d9b7ae60ba3ae72fcca5d10e02ae29217b6acdd07a5a0a5cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4830f321f3bf505d9b7ae60ba3ae72fcca5d10e02ae29217b6acdd07a5a0a5cf->enter($__internal_4830f321f3bf505d9b7ae60ba3ae72fcca5d10e02ae29217b6acdd07a5a0a5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4830f321f3bf505d9b7ae60ba3ae72fcca5d10e02ae29217b6acdd07a5a0a5cf->leave($__internal_4830f321f3bf505d9b7ae60ba3ae72fcca5d10e02ae29217b6acdd07a5a0a5cf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3cbcdac4e005069a28532c5718e9d4e1e119c4b3c367c29bb688791478b36050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cbcdac4e005069a28532c5718e9d4e1e119c4b3c367c29bb688791478b36050->enter($__internal_3cbcdac4e005069a28532c5718e9d4e1e119c4b3c367c29bb688791478b36050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3cbcdac4e005069a28532c5718e9d4e1e119c4b3c367c29bb688791478b36050->leave($__internal_3cbcdac4e005069a28532c5718e9d4e1e119c4b3c367c29bb688791478b36050_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
