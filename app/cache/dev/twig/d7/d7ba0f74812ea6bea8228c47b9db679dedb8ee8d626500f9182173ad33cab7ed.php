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
        $__internal_9c4e62e20f4f1e4aaa8030820c698cc7db5961f353e5ee79b4d32fbcbf8feb6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4e62e20f4f1e4aaa8030820c698cc7db5961f353e5ee79b4d32fbcbf8feb6b->enter($__internal_9c4e62e20f4f1e4aaa8030820c698cc7db5961f353e5ee79b4d32fbcbf8feb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9c4e62e20f4f1e4aaa8030820c698cc7db5961f353e5ee79b4d32fbcbf8feb6b->leave($__internal_9c4e62e20f4f1e4aaa8030820c698cc7db5961f353e5ee79b4d32fbcbf8feb6b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1db0fec966513e5a5bb164fef9bedd14a0062d37744dc0de4ae086f8fc7c3938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db0fec966513e5a5bb164fef9bedd14a0062d37744dc0de4ae086f8fc7c3938->enter($__internal_1db0fec966513e5a5bb164fef9bedd14a0062d37744dc0de4ae086f8fc7c3938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1db0fec966513e5a5bb164fef9bedd14a0062d37744dc0de4ae086f8fc7c3938->leave($__internal_1db0fec966513e5a5bb164fef9bedd14a0062d37744dc0de4ae086f8fc7c3938_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1e97f32da39984ff593a1daaaf83493b1ae6453a6da1820eb824ef7b342bdfea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e97f32da39984ff593a1daaaf83493b1ae6453a6da1820eb824ef7b342bdfea->enter($__internal_1e97f32da39984ff593a1daaaf83493b1ae6453a6da1820eb824ef7b342bdfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1e97f32da39984ff593a1daaaf83493b1ae6453a6da1820eb824ef7b342bdfea->leave($__internal_1e97f32da39984ff593a1daaaf83493b1ae6453a6da1820eb824ef7b342bdfea_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8d7a51c10d425eb9b5d66a7e8877cef4f5e1de02829919c9b2cf2c58f0452886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7a51c10d425eb9b5d66a7e8877cef4f5e1de02829919c9b2cf2c58f0452886->enter($__internal_8d7a51c10d425eb9b5d66a7e8877cef4f5e1de02829919c9b2cf2c58f0452886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8d7a51c10d425eb9b5d66a7e8877cef4f5e1de02829919c9b2cf2c58f0452886->leave($__internal_8d7a51c10d425eb9b5d66a7e8877cef4f5e1de02829919c9b2cf2c58f0452886_prof);

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
