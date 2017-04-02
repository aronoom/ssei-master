<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_334d52ccf837e4d5e2b6130ccb1d0cb087fcf639cd179c3f458bcff3208af36a extends Twig_Template
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
        $__internal_56c0fb03b43ce4b9c006e3ddde8c23456555f973c4838f9b3ccbdade1f9d9496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c0fb03b43ce4b9c006e3ddde8c23456555f973c4838f9b3ccbdade1f9d9496->enter($__internal_56c0fb03b43ce4b9c006e3ddde8c23456555f973c4838f9b3ccbdade1f9d9496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_56c0fb03b43ce4b9c006e3ddde8c23456555f973c4838f9b3ccbdade1f9d9496->leave($__internal_56c0fb03b43ce4b9c006e3ddde8c23456555f973c4838f9b3ccbdade1f9d9496_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/opt/lampp/htdocs/ssei-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
