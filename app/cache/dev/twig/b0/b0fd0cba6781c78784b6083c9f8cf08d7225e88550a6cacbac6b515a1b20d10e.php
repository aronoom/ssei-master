<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_98ee6079ecae8108b9522801e03160f4362ee0d17428595fe17183267671f091 extends Twig_Template
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
        $__internal_f04ad9fc3db0278be6e6ced2fafa143b845c20a2200dbf26c85d9481a8d32db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04ad9fc3db0278be6e6ced2fafa143b845c20a2200dbf26c85d9481a8d32db7->enter($__internal_f04ad9fc3db0278be6e6ced2fafa143b845c20a2200dbf26c85d9481a8d32db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f04ad9fc3db0278be6e6ced2fafa143b845c20a2200dbf26c85d9481a8d32db7->leave($__internal_f04ad9fc3db0278be6e6ced2fafa143b845c20a2200dbf26c85d9481a8d32db7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/opt/lampp/htdocs/ssei-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}