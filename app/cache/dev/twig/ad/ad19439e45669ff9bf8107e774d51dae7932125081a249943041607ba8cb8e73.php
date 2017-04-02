<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f05cec656550f8ddbe9678cfe3561e167d63920990a4796ea7818b58b1ce550b extends Twig_Template
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
        $__internal_08c81e2fff04809e22f90c70243beac6a09294183d7fe85ac53ce4921b33fafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c81e2fff04809e22f90c70243beac6a09294183d7fe85ac53ce4921b33fafb->enter($__internal_08c81e2fff04809e22f90c70243beac6a09294183d7fe85ac53ce4921b33fafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_08c81e2fff04809e22f90c70243beac6a09294183d7fe85ac53ce4921b33fafb->leave($__internal_08c81e2fff04809e22f90c70243beac6a09294183d7fe85ac53ce4921b33fafb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/opt/lampp/htdocs/ssei-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
