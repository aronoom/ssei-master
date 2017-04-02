<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_f8e8e4e3910e2eb09755f4fb77304295bcd88be065d1806d36bc3497afab4a45 extends Twig_Template
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
        $__internal_89fd0aa3515fddd19fd8f7f14b3612f8ae1c036128b4a97ca7cdb540e16b219c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fd0aa3515fddd19fd8f7f14b3612f8ae1c036128b4a97ca7cdb540e16b219c->enter($__internal_89fd0aa3515fddd19fd8f7f14b3612f8ae1c036128b4a97ca7cdb540e16b219c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89fd0aa3515fddd19fd8f7f14b3612f8ae1c036128b4a97ca7cdb540e16b219c->leave($__internal_89fd0aa3515fddd19fd8f7f14b3612f8ae1c036128b4a97ca7cdb540e16b219c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_441f602cbeb6538b68611e0087c10f50793d2923f158f9812b7ee736d1b14d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441f602cbeb6538b68611e0087c10f50793d2923f158f9812b7ee736d1b14d16->enter($__internal_441f602cbeb6538b68611e0087c10f50793d2923f158f9812b7ee736d1b14d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Profile ";
        
        $__internal_441f602cbeb6538b68611e0087c10f50793d2923f158f9812b7ee736d1b14d16->leave($__internal_441f602cbeb6538b68611e0087c10f50793d2923f158f9812b7ee736d1b14d16_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_d1855a5ead267f525b6e471eb604e3505a9310d2930d0735c830b57df2cc358c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1855a5ead267f525b6e471eb604e3505a9310d2930d0735c830b57df2cc358c->enter($__internal_d1855a5ead267f525b6e471eb604e3505a9310d2930d0735c830b57df2cc358c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_d1855a5ead267f525b6e471eb604e3505a9310d2930d0735c830b57df2cc358c->leave($__internal_d1855a5ead267f525b6e471eb604e3505a9310d2930d0735c830b57df2cc358c_prof);

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
