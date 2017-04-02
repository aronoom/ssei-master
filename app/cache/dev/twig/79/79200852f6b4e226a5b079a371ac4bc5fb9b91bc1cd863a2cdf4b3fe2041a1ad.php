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
        $__internal_d6a54d10ab4e0e453cc0e89c35ce88ca508d9c22d90eae691c4efcb97c373af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a54d10ab4e0e453cc0e89c35ce88ca508d9c22d90eae691c4efcb97c373af9->enter($__internal_d6a54d10ab4e0e453cc0e89c35ce88ca508d9c22d90eae691c4efcb97c373af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d6a54d10ab4e0e453cc0e89c35ce88ca508d9c22d90eae691c4efcb97c373af9->leave($__internal_d6a54d10ab4e0e453cc0e89c35ce88ca508d9c22d90eae691c4efcb97c373af9_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3699df6b63d6e7ee7a18c65386fff6d04f6006e50c79cbe46de642e6727a9984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3699df6b63d6e7ee7a18c65386fff6d04f6006e50c79cbe46de642e6727a9984->enter($__internal_3699df6b63d6e7ee7a18c65386fff6d04f6006e50c79cbe46de642e6727a9984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3699df6b63d6e7ee7a18c65386fff6d04f6006e50c79cbe46de642e6727a9984->leave($__internal_3699df6b63d6e7ee7a18c65386fff6d04f6006e50c79cbe46de642e6727a9984_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5874155e6a27ed57eaa5d8dc3d94695cf0c48902e04156269f10be77c2eda9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5874155e6a27ed57eaa5d8dc3d94695cf0c48902e04156269f10be77c2eda9e8->enter($__internal_5874155e6a27ed57eaa5d8dc3d94695cf0c48902e04156269f10be77c2eda9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5874155e6a27ed57eaa5d8dc3d94695cf0c48902e04156269f10be77c2eda9e8->leave($__internal_5874155e6a27ed57eaa5d8dc3d94695cf0c48902e04156269f10be77c2eda9e8_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_60b379b625c8c5e87b75f1d70b499ab390947fc4fb89fcea2b377e694809704d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b379b625c8c5e87b75f1d70b499ab390947fc4fb89fcea2b377e694809704d->enter($__internal_60b379b625c8c5e87b75f1d70b499ab390947fc4fb89fcea2b377e694809704d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_60b379b625c8c5e87b75f1d70b499ab390947fc4fb89fcea2b377e694809704d->leave($__internal_60b379b625c8c5e87b75f1d70b499ab390947fc4fb89fcea2b377e694809704d_prof);

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
