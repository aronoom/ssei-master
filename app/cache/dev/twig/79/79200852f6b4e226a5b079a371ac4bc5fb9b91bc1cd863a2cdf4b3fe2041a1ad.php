<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_46d3c444e6f1d0aac9af620c03d6536df699212296d1c7a29d5f79a6ad5d981a extends Twig_Template
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
        $__internal_12746686581ecf10b6e190a71c1d1410e29cb205fc38f8687e03a235b1e9fa63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12746686581ecf10b6e190a71c1d1410e29cb205fc38f8687e03a235b1e9fa63->enter($__internal_12746686581ecf10b6e190a71c1d1410e29cb205fc38f8687e03a235b1e9fa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_12746686581ecf10b6e190a71c1d1410e29cb205fc38f8687e03a235b1e9fa63->leave($__internal_12746686581ecf10b6e190a71c1d1410e29cb205fc38f8687e03a235b1e9fa63_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e88243a18ad95e336a82317c5efa997e1bdbaf54bc947bb51fc320b7bd86a7aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88243a18ad95e336a82317c5efa997e1bdbaf54bc947bb51fc320b7bd86a7aa->enter($__internal_e88243a18ad95e336a82317c5efa997e1bdbaf54bc947bb51fc320b7bd86a7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e88243a18ad95e336a82317c5efa997e1bdbaf54bc947bb51fc320b7bd86a7aa->leave($__internal_e88243a18ad95e336a82317c5efa997e1bdbaf54bc947bb51fc320b7bd86a7aa_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4729c040a370c7c6b1745544f7c46c1af006c228840db691e923ca5e937fd94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4729c040a370c7c6b1745544f7c46c1af006c228840db691e923ca5e937fd94d->enter($__internal_4729c040a370c7c6b1745544f7c46c1af006c228840db691e923ca5e937fd94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4729c040a370c7c6b1745544f7c46c1af006c228840db691e923ca5e937fd94d->leave($__internal_4729c040a370c7c6b1745544f7c46c1af006c228840db691e923ca5e937fd94d_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cf07c3ea8124f95a4f484fc70198e54470968a74843ccbbdb35e3a71e427504d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf07c3ea8124f95a4f484fc70198e54470968a74843ccbbdb35e3a71e427504d->enter($__internal_cf07c3ea8124f95a4f484fc70198e54470968a74843ccbbdb35e3a71e427504d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cf07c3ea8124f95a4f484fc70198e54470968a74843ccbbdb35e3a71e427504d->leave($__internal_cf07c3ea8124f95a4f484fc70198e54470968a74843ccbbdb35e3a71e427504d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
