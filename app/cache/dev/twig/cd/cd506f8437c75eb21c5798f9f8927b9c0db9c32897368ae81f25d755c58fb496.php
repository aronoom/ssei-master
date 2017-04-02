<?php

/* ZoneBundle:Default:index.html.twig */
class __TwigTemplate_30a3c2e9f620a336f0574d7f00eb305efae321a7eba81996fa2b990f957dab63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b82bad92386c3e67ab5d99fa8b2adfee3e9b46039df1bb0b8fa6157f98220d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b82bad92386c3e67ab5d99fa8b2adfee3e9b46039df1bb0b8fa6157f98220d6->enter($__internal_7b82bad92386c3e67ab5d99fa8b2adfee3e9b46039df1bb0b8fa6157f98220d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle:Default:index.html.twig"));

        // line 1
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_region");
        echo "\">Liste region</a>";
        
        $__internal_7b82bad92386c3e67ab5d99fa8b2adfee3e9b46039df1bb0b8fa6157f98220d6->leave($__internal_7b82bad92386c3e67ab5d99fa8b2adfee3e9b46039df1bb0b8fa6157f98220d6_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ path('zone_region') }}\">Liste region</a>", "ZoneBundle:Default:index.html.twig", "/opt/lampp/htdocs/ssei/src/ZoneBundle/Resources/views/Default/index.html.twig");
    }
}
