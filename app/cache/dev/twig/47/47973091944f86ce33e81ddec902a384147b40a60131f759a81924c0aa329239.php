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
        $__internal_220b9424b31e6f15957f0032561375a8cd2c286593bd25d6f93965b0e147cea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220b9424b31e6f15957f0032561375a8cd2c286593bd25d6f93965b0e147cea0->enter($__internal_220b9424b31e6f15957f0032561375a8cd2c286593bd25d6f93965b0e147cea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_220b9424b31e6f15957f0032561375a8cd2c286593bd25d6f93965b0e147cea0->leave($__internal_220b9424b31e6f15957f0032561375a8cd2c286593bd25d6f93965b0e147cea0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_996b7a96cf37cd0ede2735601c7a58c426d825d9cac07b0e05fca9776bbd79c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996b7a96cf37cd0ede2735601c7a58c426d825d9cac07b0e05fca9776bbd79c2->enter($__internal_996b7a96cf37cd0ede2735601c7a58c426d825d9cac07b0e05fca9776bbd79c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Profile ";
        
        $__internal_996b7a96cf37cd0ede2735601c7a58c426d825d9cac07b0e05fca9776bbd79c2->leave($__internal_996b7a96cf37cd0ede2735601c7a58c426d825d9cac07b0e05fca9776bbd79c2_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_894a4d83336d96662cc0e945e2a6aaf9701bde0e67f71953aef65ad9cc17ebf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894a4d83336d96662cc0e945e2a6aaf9701bde0e67f71953aef65ad9cc17ebf5->enter($__internal_894a4d83336d96662cc0e945e2a6aaf9701bde0e67f71953aef65ad9cc17ebf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_894a4d83336d96662cc0e945e2a6aaf9701bde0e67f71953aef65ad9cc17ebf5->leave($__internal_894a4d83336d96662cc0e945e2a6aaf9701bde0e67f71953aef65ad9cc17ebf5_prof);

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

", "FOSUserBundle:Profile:show.html.twig", "/opt/lampp/htdocs/ssei/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
