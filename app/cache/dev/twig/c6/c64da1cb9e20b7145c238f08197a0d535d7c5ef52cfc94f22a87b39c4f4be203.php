<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_441450edaaeff03b675f47779ca296dd90f1e376fdfc25eeccaa24da89a0a082 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39e4800cae69d789884fb31c3d371ee0fc8c617f8f965adce0d56aa3708cdfab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e4800cae69d789884fb31c3d371ee0fc8c617f8f965adce0d56aa3708cdfab->enter($__internal_39e4800cae69d789884fb31c3d371ee0fc8c617f8f965adce0d56aa3708cdfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39e4800cae69d789884fb31c3d371ee0fc8c617f8f965adce0d56aa3708cdfab->leave($__internal_39e4800cae69d789884fb31c3d371ee0fc8c617f8f965adce0d56aa3708cdfab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46222f9e9d8a4fc795164808277d554e4ebf0a4cdc66cca2326c7552376b0056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46222f9e9d8a4fc795164808277d554e4ebf0a4cdc66cca2326c7552376b0056->enter($__internal_46222f9e9d8a4fc795164808277d554e4ebf0a4cdc66cca2326c7552376b0056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_46222f9e9d8a4fc795164808277d554e4ebf0a4cdc66cca2326c7552376b0056->leave($__internal_46222f9e9d8a4fc795164808277d554e4ebf0a4cdc66cca2326c7552376b0056_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:checkEmail.html.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/checkEmail.html.twig");
    }
}
