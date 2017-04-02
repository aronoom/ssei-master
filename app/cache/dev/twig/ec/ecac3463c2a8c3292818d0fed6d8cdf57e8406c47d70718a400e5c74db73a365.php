<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b1aa9d3af901220e5ded15c496842d7c1727907572a15e49ea20f598e7d21012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91901ae75a67d6a7cb2dd3e52fdc0d4b153831a6501086c696d82f313caf0f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91901ae75a67d6a7cb2dd3e52fdc0d4b153831a6501086c696d82f313caf0f7c->enter($__internal_91901ae75a67d6a7cb2dd3e52fdc0d4b153831a6501086c696d82f313caf0f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91901ae75a67d6a7cb2dd3e52fdc0d4b153831a6501086c696d82f313caf0f7c->leave($__internal_91901ae75a67d6a7cb2dd3e52fdc0d4b153831a6501086c696d82f313caf0f7c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b95df990e9bcaf408d792dac96f19dbdeb21acf54605ae1a10f6a3575e6d273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b95df990e9bcaf408d792dac96f19dbdeb21acf54605ae1a10f6a3575e6d273->enter($__internal_1b95df990e9bcaf408d792dac96f19dbdeb21acf54605ae1a10f6a3575e6d273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_1b95df990e9bcaf408d792dac96f19dbdeb21acf54605ae1a10f6a3575e6d273->leave($__internal_1b95df990e9bcaf408d792dac96f19dbdeb21acf54605ae1a10f6a3575e6d273_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/opt/lampp/htdocs/ssei-master/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
