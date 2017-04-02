<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_6c7c875b7e191eedf85be46dd1750d02c60d09b08c510cb16abb09c0c295958e extends Twig_Template
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
        $__internal_9a05428d6e39d6ed8e31e31ec6c98862b63e91f134705159d11c2036c6d0396d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a05428d6e39d6ed8e31e31ec6c98862b63e91f134705159d11c2036c6d0396d->enter($__internal_9a05428d6e39d6ed8e31e31ec6c98862b63e91f134705159d11c2036c6d0396d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9a05428d6e39d6ed8e31e31ec6c98862b63e91f134705159d11c2036c6d0396d->leave($__internal_9a05428d6e39d6ed8e31e31ec6c98862b63e91f134705159d11c2036c6d0396d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
