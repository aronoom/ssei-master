<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_100f2d0e50007332e57cf57a599493dd2558af43546e7f155f7d9e6e355d17de extends Twig_Template
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
        $__internal_fc80bd84be5d3a917a663f45e8d143ae98ac27bd3648efaab7b37e225355d8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc80bd84be5d3a917a663f45e8d143ae98ac27bd3648efaab7b37e225355d8ff->enter($__internal_fc80bd84be5d3a917a663f45e8d143ae98ac27bd3648efaab7b37e225355d8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_fc80bd84be5d3a917a663f45e8d143ae98ac27bd3648efaab7b37e225355d8ff->leave($__internal_fc80bd84be5d3a917a663f45e8d143ae98ac27bd3648efaab7b37e225355d8ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/opt/lampp/htdocs/ssei-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
