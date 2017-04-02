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
        $__internal_a708e1a3c1c1e049a90f1eb50ae8f96ccfcdb512036124abcaf907cfc8c62468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a708e1a3c1c1e049a90f1eb50ae8f96ccfcdb512036124abcaf907cfc8c62468->enter($__internal_a708e1a3c1c1e049a90f1eb50ae8f96ccfcdb512036124abcaf907cfc8c62468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a708e1a3c1c1e049a90f1eb50ae8f96ccfcdb512036124abcaf907cfc8c62468->leave($__internal_a708e1a3c1c1e049a90f1eb50ae8f96ccfcdb512036124abcaf907cfc8c62468_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_269c86f86c335d1c9ebb6bca01eb76c31651448bb76234dadf7cf08b9dc8660a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269c86f86c335d1c9ebb6bca01eb76c31651448bb76234dadf7cf08b9dc8660a->enter($__internal_269c86f86c335d1c9ebb6bca01eb76c31651448bb76234dadf7cf08b9dc8660a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_269c86f86c335d1c9ebb6bca01eb76c31651448bb76234dadf7cf08b9dc8660a->leave($__internal_269c86f86c335d1c9ebb6bca01eb76c31651448bb76234dadf7cf08b9dc8660a_prof);

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
