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
        $__internal_e0031f192b4a4852d99842684082b7e04950bc627f0a3389be07fb3d28b4f150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0031f192b4a4852d99842684082b7e04950bc627f0a3389be07fb3d28b4f150->enter($__internal_e0031f192b4a4852d99842684082b7e04950bc627f0a3389be07fb3d28b4f150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0031f192b4a4852d99842684082b7e04950bc627f0a3389be07fb3d28b4f150->leave($__internal_e0031f192b4a4852d99842684082b7e04950bc627f0a3389be07fb3d28b4f150_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b3aef6b40a9560c0b9a8f56aa43993177c500194ff898d6f55f5180d2abe476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3aef6b40a9560c0b9a8f56aa43993177c500194ff898d6f55f5180d2abe476->enter($__internal_6b3aef6b40a9560c0b9a8f56aa43993177c500194ff898d6f55f5180d2abe476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_6b3aef6b40a9560c0b9a8f56aa43993177c500194ff898d6f55f5180d2abe476->leave($__internal_6b3aef6b40a9560c0b9a8f56aa43993177c500194ff898d6f55f5180d2abe476_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
