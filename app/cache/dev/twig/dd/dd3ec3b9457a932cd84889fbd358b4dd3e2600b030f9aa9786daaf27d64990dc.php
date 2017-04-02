<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_6c6c6accf51b5e1438d3be68cb121902ffa7271db9a90d16d3c77d8c126f0a8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_8899d5e834f081a68e71639f2c2f79a69019dd77efcdda3b1da31ff6a90b9ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8899d5e834f081a68e71639f2c2f79a69019dd77efcdda3b1da31ff6a90b9ead->enter($__internal_8899d5e834f081a68e71639f2c2f79a69019dd77efcdda3b1da31ff6a90b9ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8899d5e834f081a68e71639f2c2f79a69019dd77efcdda3b1da31ff6a90b9ead->leave($__internal_8899d5e834f081a68e71639f2c2f79a69019dd77efcdda3b1da31ff6a90b9ead_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_669acae32d3d1f6ce498ff52f945980557ad793d1842d7ca60d3e2d315b74d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669acae32d3d1f6ce498ff52f945980557ad793d1842d7ca60d3e2d315b74d62->enter($__internal_669acae32d3d1f6ce498ff52f945980557ad793d1842d7ca60d3e2d315b74d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_669acae32d3d1f6ce498ff52f945980557ad793d1842d7ca60d3e2d315b74d62->leave($__internal_669acae32d3d1f6ce498ff52f945980557ad793d1842d7ca60d3e2d315b74d62_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/edit.html.twig");
    }
}
