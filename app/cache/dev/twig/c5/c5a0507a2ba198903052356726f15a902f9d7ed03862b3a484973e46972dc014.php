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
        $__internal_65d7ab4d23012d36f55682f40013b6378494290917550a59abcb2460f7dd3f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d7ab4d23012d36f55682f40013b6378494290917550a59abcb2460f7dd3f6a->enter($__internal_65d7ab4d23012d36f55682f40013b6378494290917550a59abcb2460f7dd3f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_65d7ab4d23012d36f55682f40013b6378494290917550a59abcb2460f7dd3f6a->leave($__internal_65d7ab4d23012d36f55682f40013b6378494290917550a59abcb2460f7dd3f6a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e14ffd80a81e1b4f3ca45488c8dca6c210e5ed5fc6e9f2bf34e59c51b9208dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e14ffd80a81e1b4f3ca45488c8dca6c210e5ed5fc6e9f2bf34e59c51b9208dc->enter($__internal_4e14ffd80a81e1b4f3ca45488c8dca6c210e5ed5fc6e9f2bf34e59c51b9208dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4e14ffd80a81e1b4f3ca45488c8dca6c210e5ed5fc6e9f2bf34e59c51b9208dc->leave($__internal_4e14ffd80a81e1b4f3ca45488c8dca6c210e5ed5fc6e9f2bf34e59c51b9208dc_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/opt/lampp/htdocs/ssei-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
