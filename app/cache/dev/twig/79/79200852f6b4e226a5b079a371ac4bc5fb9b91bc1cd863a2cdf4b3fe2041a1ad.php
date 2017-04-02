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
        $__internal_6050ddb32e3fe975ae732d1157d0369f3b2596cb2bbda8aeaf48569c0265f5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6050ddb32e3fe975ae732d1157d0369f3b2596cb2bbda8aeaf48569c0265f5e7->enter($__internal_6050ddb32e3fe975ae732d1157d0369f3b2596cb2bbda8aeaf48569c0265f5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6050ddb32e3fe975ae732d1157d0369f3b2596cb2bbda8aeaf48569c0265f5e7->leave($__internal_6050ddb32e3fe975ae732d1157d0369f3b2596cb2bbda8aeaf48569c0265f5e7_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a4afd6c2a1c37418a793e3bfd3b9f04a70c4f17e7bf6b552808629e75753971b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4afd6c2a1c37418a793e3bfd3b9f04a70c4f17e7bf6b552808629e75753971b->enter($__internal_a4afd6c2a1c37418a793e3bfd3b9f04a70c4f17e7bf6b552808629e75753971b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a4afd6c2a1c37418a793e3bfd3b9f04a70c4f17e7bf6b552808629e75753971b->leave($__internal_a4afd6c2a1c37418a793e3bfd3b9f04a70c4f17e7bf6b552808629e75753971b_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_77ba87e2f0024d750bf063568f1dd96ba7e0333318085d66e8c9c2716a8cf0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ba87e2f0024d750bf063568f1dd96ba7e0333318085d66e8c9c2716a8cf0d1->enter($__internal_77ba87e2f0024d750bf063568f1dd96ba7e0333318085d66e8c9c2716a8cf0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_77ba87e2f0024d750bf063568f1dd96ba7e0333318085d66e8c9c2716a8cf0d1->leave($__internal_77ba87e2f0024d750bf063568f1dd96ba7e0333318085d66e8c9c2716a8cf0d1_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6dd6f9192ae3203258871d7f5ee4f5b2aeb3bc79153c18e65a4b579a8b86c93d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd6f9192ae3203258871d7f5ee4f5b2aeb3bc79153c18e65a4b579a8b86c93d->enter($__internal_6dd6f9192ae3203258871d7f5ee4f5b2aeb3bc79153c18e65a4b579a8b86c93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6dd6f9192ae3203258871d7f5ee4f5b2aeb3bc79153c18e65a4b579a8b86c93d->leave($__internal_6dd6f9192ae3203258871d7f5ee4f5b2aeb3bc79153c18e65a4b579a8b86c93d_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "/opt/lampp/htdocs/ssei-master/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
