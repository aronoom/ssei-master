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
        $__internal_608090787c876f8ee048c82f534869dd51d1fd65f0046e4af5d22ceaa506e586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608090787c876f8ee048c82f534869dd51d1fd65f0046e4af5d22ceaa506e586->enter($__internal_608090787c876f8ee048c82f534869dd51d1fd65f0046e4af5d22ceaa506e586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_608090787c876f8ee048c82f534869dd51d1fd65f0046e4af5d22ceaa506e586->leave($__internal_608090787c876f8ee048c82f534869dd51d1fd65f0046e4af5d22ceaa506e586_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_04ba8de190223e532b79949e8d00896212e45774cc43b90ebbf16427897f5ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ba8de190223e532b79949e8d00896212e45774cc43b90ebbf16427897f5ad9->enter($__internal_04ba8de190223e532b79949e8d00896212e45774cc43b90ebbf16427897f5ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_04ba8de190223e532b79949e8d00896212e45774cc43b90ebbf16427897f5ad9->leave($__internal_04ba8de190223e532b79949e8d00896212e45774cc43b90ebbf16427897f5ad9_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_381880c2c50ee96618b2db47d201b21d29e9c9a5ecb5856bca098dae70246adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381880c2c50ee96618b2db47d201b21d29e9c9a5ecb5856bca098dae70246adb->enter($__internal_381880c2c50ee96618b2db47d201b21d29e9c9a5ecb5856bca098dae70246adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_381880c2c50ee96618b2db47d201b21d29e9c9a5ecb5856bca098dae70246adb->leave($__internal_381880c2c50ee96618b2db47d201b21d29e9c9a5ecb5856bca098dae70246adb_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_58fd584136cf9df9354a38aba51a70eba21e32e6f77e8bce8fcfcf0035b1a5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58fd584136cf9df9354a38aba51a70eba21e32e6f77e8bce8fcfcf0035b1a5a9->enter($__internal_58fd584136cf9df9354a38aba51a70eba21e32e6f77e8bce8fcfcf0035b1a5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_58fd584136cf9df9354a38aba51a70eba21e32e6f77e8bce8fcfcf0035b1a5a9->leave($__internal_58fd584136cf9df9354a38aba51a70eba21e32e6f77e8bce8fcfcf0035b1a5a9_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "/opt/lampp/htdocs/ssei-master/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
