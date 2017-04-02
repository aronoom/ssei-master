<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_be988ca5939a9ad7c1dc7c2a528d8df8eaebb58454171cfeb115638328c8c7ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad3b51fc07ec22598054f2121aae54b7855b595305e361f8c65e6c2d181fef9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3b51fc07ec22598054f2121aae54b7855b595305e361f8c65e6c2d181fef9e->enter($__internal_ad3b51fc07ec22598054f2121aae54b7855b595305e361f8c65e6c2d181fef9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad3b51fc07ec22598054f2121aae54b7855b595305e361f8c65e6c2d181fef9e->leave($__internal_ad3b51fc07ec22598054f2121aae54b7855b595305e361f8c65e6c2d181fef9e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_63369ad814feec3fd9a6739f7c9e7552eaa710998174705eb99c19c7844391d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63369ad814feec3fd9a6739f7c9e7552eaa710998174705eb99c19c7844391d4->enter($__internal_63369ad814feec3fd9a6739f7c9e7552eaa710998174705eb99c19c7844391d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_63369ad814feec3fd9a6739f7c9e7552eaa710998174705eb99c19c7844391d4->leave($__internal_63369ad814feec3fd9a6739f7c9e7552eaa710998174705eb99c19c7844391d4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f167c075e87081ef02174f3be40aee95a8063165c842b5c877f61895366ecff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f167c075e87081ef02174f3be40aee95a8063165c842b5c877f61895366ecff1->enter($__internal_f167c075e87081ef02174f3be40aee95a8063165c842b5c877f61895366ecff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_f167c075e87081ef02174f3be40aee95a8063165c842b5c877f61895366ecff1->leave($__internal_f167c075e87081ef02174f3be40aee95a8063165c842b5c877f61895366ecff1_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1cf8bccf0d68d432d37f3e2c8584bb6b7834f7eb17486bfeff5d07cfe655096f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf8bccf0d68d432d37f3e2c8584bb6b7834f7eb17486bfeff5d07cfe655096f->enter($__internal_1cf8bccf0d68d432d37f3e2c8584bb6b7834f7eb17486bfeff5d07cfe655096f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_1cf8bccf0d68d432d37f3e2c8584bb6b7834f7eb17486bfeff5d07cfe655096f->leave($__internal_1cf8bccf0d68d432d37f3e2c8584bb6b7834f7eb17486bfeff5d07cfe655096f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  62 => 6,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block title %}Administration|{% endblock %}
{% block content %}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "FOSUserBundle::layout.html.twig", "/opt/lampp/htdocs/ssei-master/src/Proc/UserBundle/Resources/views/layout.html.twig");
    }
}
