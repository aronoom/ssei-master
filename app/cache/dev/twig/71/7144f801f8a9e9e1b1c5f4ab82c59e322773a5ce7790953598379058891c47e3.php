<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_8e6475c110f1ead67dc2267403e300c82d349e46e24ceebb3469b780ec9bb6a1 extends Twig_Template
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
        $__internal_986181a29e9a6f1f16dd0e0df3b2c3818c74052c2a1eaec404f096e7ac7daa5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986181a29e9a6f1f16dd0e0df3b2c3818c74052c2a1eaec404f096e7ac7daa5b->enter($__internal_986181a29e9a6f1f16dd0e0df3b2c3818c74052c2a1eaec404f096e7ac7daa5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_986181a29e9a6f1f16dd0e0df3b2c3818c74052c2a1eaec404f096e7ac7daa5b->leave($__internal_986181a29e9a6f1f16dd0e0df3b2c3818c74052c2a1eaec404f096e7ac7daa5b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
