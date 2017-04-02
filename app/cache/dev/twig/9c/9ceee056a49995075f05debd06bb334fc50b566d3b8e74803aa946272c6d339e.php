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
        $__internal_8474b8dd92e25f8fe97b393e065326fc60d417c2be9b205ef3bd73048a820ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8474b8dd92e25f8fe97b393e065326fc60d417c2be9b205ef3bd73048a820ee3->enter($__internal_8474b8dd92e25f8fe97b393e065326fc60d417c2be9b205ef3bd73048a820ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8474b8dd92e25f8fe97b393e065326fc60d417c2be9b205ef3bd73048a820ee3->leave($__internal_8474b8dd92e25f8fe97b393e065326fc60d417c2be9b205ef3bd73048a820ee3_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
