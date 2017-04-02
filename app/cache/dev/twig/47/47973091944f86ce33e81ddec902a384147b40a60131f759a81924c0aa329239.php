<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d3a081a0b355597835b5013b511e3056a733c86fe77d640a193133c3f95d2b06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_997c47bb27dabe9329693543d33c9b45f6f3b907742d4fc270cf828ea1b3db15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997c47bb27dabe9329693543d33c9b45f6f3b907742d4fc270cf828ea1b3db15->enter($__internal_997c47bb27dabe9329693543d33c9b45f6f3b907742d4fc270cf828ea1b3db15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_997c47bb27dabe9329693543d33c9b45f6f3b907742d4fc270cf828ea1b3db15->leave($__internal_997c47bb27dabe9329693543d33c9b45f6f3b907742d4fc270cf828ea1b3db15_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa70fca16aa3d8e89c00ed56303406d703c757eb32e509af9cc1cc83a0dbd50a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa70fca16aa3d8e89c00ed56303406d703c757eb32e509af9cc1cc83a0dbd50a->enter($__internal_fa70fca16aa3d8e89c00ed56303406d703c757eb32e509af9cc1cc83a0dbd50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Profile ";
        
        $__internal_fa70fca16aa3d8e89c00ed56303406d703c757eb32e509af9cc1cc83a0dbd50a->leave($__internal_fa70fca16aa3d8e89c00ed56303406d703c757eb32e509af9cc1cc83a0dbd50a_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_eb8e5457b333101be2e37163b76ce80aa63d1999906d7b6db605c6a3e3d0b1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8e5457b333101be2e37163b76ce80aa63d1999906d7b6db605c6a3e3d0b1f8->enter($__internal_eb8e5457b333101be2e37163b76ce80aa63d1999906d7b6db605c6a3e3d0b1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Bienvenue dans l'espace profil</h3>
            </div>
        </div>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Profil d'utilisateur</h2>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    ";
        // line 19
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 19)->display($context);
        // line 20
        echo "                </div>
            </div>
        </div>
    </div>
          
";
        
        $__internal_eb8e5457b333101be2e37163b76ce80aa63d1999906d7b6db605c6a3e3d0b1f8->leave($__internal_eb8e5457b333101be2e37163b76ce80aa63d1999906d7b6db605c6a3e3d0b1f8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  70 => 19,  54 => 5,  48 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}

{% block title %}{{parent()}} Profile {% endblock %}
{% block content %}
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Bienvenue dans l'espace profil</h3>
            </div>
        </div>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Profil d'utilisateur</h2>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    {% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
                </div>
            </div>
        </div>
    </div>
          
{% endblock %}

", "FOSUserBundle:Profile:show.html.twig", "/opt/lampp/htdocs/ssei-master/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
