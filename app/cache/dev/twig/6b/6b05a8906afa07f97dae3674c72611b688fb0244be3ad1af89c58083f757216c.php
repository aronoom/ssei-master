<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9acde862814485e8ba636c5193378949f9ae1922476da67b8646286e8b641469 extends Twig_Template
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
        $__internal_9fdc52cda72300af6c5245ef7e6df51bbc48dfec2a05ed081af8a9f786109e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fdc52cda72300af6c5245ef7e6df51bbc48dfec2a05ed081af8a9f786109e5f->enter($__internal_9fdc52cda72300af6c5245ef7e6df51bbc48dfec2a05ed081af8a9f786109e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_9fdc52cda72300af6c5245ef7e6df51bbc48dfec2a05ed081af8a9f786109e5f->leave($__internal_9fdc52cda72300af6c5245ef7e6df51bbc48dfec2a05ed081af8a9f786109e5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
