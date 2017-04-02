<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_381e6ae9e70d9001a5bd7fa6e71252474a25b28624650fb08fe1f9cea79b01df extends Twig_Template
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
        $__internal_7b513254ea754bb57fd2e4c871fbd0cabc31ebad30a586e23f6a6a27a53956c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b513254ea754bb57fd2e4c871fbd0cabc31ebad30a586e23f6a6a27a53956c7->enter($__internal_7b513254ea754bb57fd2e4c871fbd0cabc31ebad30a586e23f6a6a27a53956c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7b513254ea754bb57fd2e4c871fbd0cabc31ebad30a586e23f6a6a27a53956c7->leave($__internal_7b513254ea754bb57fd2e4c871fbd0cabc31ebad30a586e23f6a6a27a53956c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
