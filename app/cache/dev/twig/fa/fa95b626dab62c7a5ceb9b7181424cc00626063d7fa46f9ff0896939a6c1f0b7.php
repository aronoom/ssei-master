<?php

/* ProjetBundle::layout.html.twig */
class __TwigTemplate_c7f0c601a2fba3a16dd058d89842adec098a769e2ffa234ee3b8c55e5e9d6c3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProjetBundle::layout.html.twig", 1);
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
        $__internal_12d2c77208d8945f2cd2329ac2a913ce522a39ac754b7fe92b4aeeefe7e35b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d2c77208d8945f2cd2329ac2a913ce522a39ac754b7fe92b4aeeefe7e35b9c->enter($__internal_12d2c77208d8945f2cd2329ac2a913ce522a39ac754b7fe92b4aeeefe7e35b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12d2c77208d8945f2cd2329ac2a913ce522a39ac754b7fe92b4aeeefe7e35b9c->leave($__internal_12d2c77208d8945f2cd2329ac2a913ce522a39ac754b7fe92b4aeeefe7e35b9c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_229a13dfba83341df213842cdd148cee647d41e4a5782e6d98d0689ef9802762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229a13dfba83341df213842cdd148cee647d41e4a5782e6d98d0689ef9802762->enter($__internal_229a13dfba83341df213842cdd148cee647d41e4a5782e6d98d0689ef9802762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet |";
        
        $__internal_229a13dfba83341df213842cdd148cee647d41e4a5782e6d98d0689ef9802762->leave($__internal_229a13dfba83341df213842cdd148cee647d41e4a5782e6d98d0689ef9802762_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4689c1377b3274682edf871412190980d548bfc47c66c7c3eab490b013f1b5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4689c1377b3274682edf871412190980d548bfc47c66c7c3eab490b013f1b5de->enter($__internal_4689c1377b3274682edf871412190980d548bfc47c66c7c3eab490b013f1b5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_4689c1377b3274682edf871412190980d548bfc47c66c7c3eab490b013f1b5de->leave($__internal_4689c1377b3274682edf871412190980d548bfc47c66c7c3eab490b013f1b5de_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_80bca167170d59d8aa304eb4dacd0ce5e4f018a385e680b2b5abf4f10c3b80b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80bca167170d59d8aa304eb4dacd0ce5e4f018a385e680b2b5abf4f10c3b80b3->enter($__internal_80bca167170d59d8aa304eb4dacd0ce5e4f018a385e680b2b5abf4f10c3b80b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_80bca167170d59d8aa304eb4dacd0ce5e4f018a385e680b2b5abf4f10c3b80b3->leave($__internal_80bca167170d59d8aa304eb4dacd0ce5e4f018a385e680b2b5abf4f10c3b80b3_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle::layout.html.twig";
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
{% block title %}Projet |{% endblock %}
{% block content %}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "ProjetBundle::layout.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/layout.html.twig");
    }
}
