<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c1dde71001402053829d99dc50216a12f7c8d8439aaf19387afd310dd0698cf2 extends Twig_Template
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
        $__internal_7d7d67390b6493c7a6a7dfe673487c7a03995bbf7e51a6a91573d0aee62bcfe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7d67390b6493c7a6a7dfe673487c7a03995bbf7e51a6a91573d0aee62bcfe9->enter($__internal_7d7d67390b6493c7a6a7dfe673487c7a03995bbf7e51a6a91573d0aee62bcfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7d7d67390b6493c7a6a7dfe673487c7a03995bbf7e51a6a91573d0aee62bcfe9->leave($__internal_7d7d67390b6493c7a6a7dfe673487c7a03995bbf7e51a6a91573d0aee62bcfe9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
