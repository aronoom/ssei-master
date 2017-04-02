<?php

/* AretusaFlashBundle::flash-messages.html.twig */
class __TwigTemplate_51b024a88c7901b409ab941afb66a02a56721bfd659e118a5ae30c3ae4baa487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe97cb1b589fd39f6880423ffac0ea84f74029b396b8b8f792fa684289098914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe97cb1b589fd39f6880423ffac0ea84f74029b396b8b8f792fa684289098914->enter($__internal_fe97cb1b589fd39f6880423ffac0ea84f74029b396b8b8f792fa684289098914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AretusaFlashBundle::flash-messages.html.twig"));

        // line 1
        echo "<div id=\"flash-messages\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 3
            echo "        <div class=\"alert alert-success\">
            <button class=\"close\" data-dismiss=\"alert\">&times;</button>
            ";
            // line 5
            echo nl2br($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]));
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"alert alert-error\">
            <button class=\"close\" data-dismiss=\"alert\">&times;</button>
            ";
            // line 12
            echo nl2br($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]));
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"alert alert-info\">
            <button class=\"close\" data-dismiss=\"alert\">&times;</button>
            ";
            // line 19
            echo nl2br($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]));
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</div>
";
        
        $__internal_fe97cb1b589fd39f6880423ffac0ea84f74029b396b8b8f792fa684289098914->leave($__internal_fe97cb1b589fd39f6880423ffac0ea84f74029b396b8b8f792fa684289098914_prof);

    }

    public function getTemplateName()
    {
        return "AretusaFlashBundle::flash-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  73 => 19,  69 => 17,  65 => 16,  62 => 15,  53 => 12,  49 => 10,  45 => 9,  42 => 8,  33 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"flash-messages\">
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"alert alert-success\">
            <button class=\"close\" data-dismiss=\"alert\">&times;</button>
            {{ flashMessage|trans|raw|nl2br }}
        </div>
    {% endfor %}

    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"alert alert-error\">
            <button class=\"close\" data-dismiss=\"alert\">&times;</button>
            {{ flashMessage|trans|raw|nl2br }}
        </div>
    {% endfor %}

    {% for flashMessage in app.session.flashbag.get('info') %}
        <div class=\"alert alert-info\">
            <button class=\"close\" data-dismiss=\"alert\">&times;</button>
            {{ flashMessage|trans|raw|nl2br }}
        </div>
    {% endfor %}
</div>
", "AretusaFlashBundle::flash-messages.html.twig", "/opt/lampp/htdocs/ssei/vendor/aretusa/flash-bundle/Aretusa/Bundle/FlashBundle/Resources/views/flash-messages.html.twig");
    }
}
