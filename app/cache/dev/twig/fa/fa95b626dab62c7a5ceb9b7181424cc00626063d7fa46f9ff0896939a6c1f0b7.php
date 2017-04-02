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
        $__internal_c6d779226c8c56ed4795b43c2f96b9476a6a6ab73848e65747d48d24205b9d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d779226c8c56ed4795b43c2f96b9476a6a6ab73848e65747d48d24205b9d8a->enter($__internal_c6d779226c8c56ed4795b43c2f96b9476a6a6ab73848e65747d48d24205b9d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6d779226c8c56ed4795b43c2f96b9476a6a6ab73848e65747d48d24205b9d8a->leave($__internal_c6d779226c8c56ed4795b43c2f96b9476a6a6ab73848e65747d48d24205b9d8a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_aeffb9ee12f2760b7d1a57fe249adfeae9dcd856b68facb164eda9fba36b571e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeffb9ee12f2760b7d1a57fe249adfeae9dcd856b68facb164eda9fba36b571e->enter($__internal_aeffb9ee12f2760b7d1a57fe249adfeae9dcd856b68facb164eda9fba36b571e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet |";
        
        $__internal_aeffb9ee12f2760b7d1a57fe249adfeae9dcd856b68facb164eda9fba36b571e->leave($__internal_aeffb9ee12f2760b7d1a57fe249adfeae9dcd856b68facb164eda9fba36b571e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_348a2374f849a511149c4c91107290ec1bc319d290d0a136d60ea608604df19f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348a2374f849a511149c4c91107290ec1bc319d290d0a136d60ea608604df19f->enter($__internal_348a2374f849a511149c4c91107290ec1bc319d290d0a136d60ea608604df19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_348a2374f849a511149c4c91107290ec1bc319d290d0a136d60ea608604df19f->leave($__internal_348a2374f849a511149c4c91107290ec1bc319d290d0a136d60ea608604df19f_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_60f01294449bd69d0006a6dd425cf14038302a05bc8e95cabd33b016e9fedfaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f01294449bd69d0006a6dd425cf14038302a05bc8e95cabd33b016e9fedfaf->enter($__internal_60f01294449bd69d0006a6dd425cf14038302a05bc8e95cabd33b016e9fedfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_60f01294449bd69d0006a6dd425cf14038302a05bc8e95cabd33b016e9fedfaf->leave($__internal_60f01294449bd69d0006a6dd425cf14038302a05bc8e95cabd33b016e9fedfaf_prof);

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
{% endblock %}", "ProjetBundle::layout.html.twig", "/opt/lampp/htdocs/ssei-master/src/ProjetBundle/Resources/views/layout.html.twig");
    }
}
