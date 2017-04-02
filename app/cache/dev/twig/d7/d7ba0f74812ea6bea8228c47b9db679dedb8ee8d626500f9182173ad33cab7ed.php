<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_e2a08e97af30b6e2de62ecf65bdf7253a73e37a2db565b50c2e28ac396fa9cd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efebfeed92d4c81ba322f73645a5d9b988e38f68a5f7ede8e6b6365c3e66200a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efebfeed92d4c81ba322f73645a5d9b988e38f68a5f7ede8e6b6365c3e66200a->enter($__internal_efebfeed92d4c81ba322f73645a5d9b988e38f68a5f7ede8e6b6365c3e66200a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_efebfeed92d4c81ba322f73645a5d9b988e38f68a5f7ede8e6b6365c3e66200a->leave($__internal_efebfeed92d4c81ba322f73645a5d9b988e38f68a5f7ede8e6b6365c3e66200a_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bb22ee7e4f0409b0691af2707e22145bc5f787db353a4095e27dfcdd1d013556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb22ee7e4f0409b0691af2707e22145bc5f787db353a4095e27dfcdd1d013556->enter($__internal_bb22ee7e4f0409b0691af2707e22145bc5f787db353a4095e27dfcdd1d013556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bb22ee7e4f0409b0691af2707e22145bc5f787db353a4095e27dfcdd1d013556->leave($__internal_bb22ee7e4f0409b0691af2707e22145bc5f787db353a4095e27dfcdd1d013556_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ae6a2e4a2f751cdf14fb9f9d9d1847ce4c797474794250f703ce46fa43ec88d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6a2e4a2f751cdf14fb9f9d9d1847ce4c797474794250f703ce46fa43ec88d0->enter($__internal_ae6a2e4a2f751cdf14fb9f9d9d1847ce4c797474794250f703ce46fa43ec88d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ae6a2e4a2f751cdf14fb9f9d9d1847ce4c797474794250f703ce46fa43ec88d0->leave($__internal_ae6a2e4a2f751cdf14fb9f9d9d1847ce4c797474794250f703ce46fa43ec88d0_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3f4ebfa83f56b7e77b7fdc20f2359499ec4581615b5eafcc370d399cf1dd52e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4ebfa83f56b7e77b7fdc20f2359499ec4581615b5eafcc370d399cf1dd52e4->enter($__internal_3f4ebfa83f56b7e77b7fdc20f2359499ec4581615b5eafcc370d399cf1dd52e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3f4ebfa83f56b7e77b7fdc20f2359499ec4581615b5eafcc370d399cf1dd52e4->leave($__internal_3f4ebfa83f56b7e77b7fdc20f2359499ec4581615b5eafcc370d399cf1dd52e4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
