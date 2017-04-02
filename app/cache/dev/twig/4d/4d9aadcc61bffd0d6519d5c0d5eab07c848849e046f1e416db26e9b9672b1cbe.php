<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_9eff329a7eacaffb1e1fb2464eec9c6251fb898d36335118e6609ad17a3452c7 extends Twig_Template
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
        $__internal_c25a7eeb1525af456f34cc77f04e560d1387fa55d59dac45b5d9368e278c7ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25a7eeb1525af456f34cc77f04e560d1387fa55d59dac45b5d9368e278c7ba1->enter($__internal_c25a7eeb1525af456f34cc77f04e560d1387fa55d59dac45b5d9368e278c7ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c25a7eeb1525af456f34cc77f04e560d1387fa55d59dac45b5d9368e278c7ba1->leave($__internal_c25a7eeb1525af456f34cc77f04e560d1387fa55d59dac45b5d9368e278c7ba1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/opt/lampp/htdocs/ssei-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
