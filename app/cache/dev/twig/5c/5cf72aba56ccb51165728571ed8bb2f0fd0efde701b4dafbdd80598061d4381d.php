<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e97ac4084d5a2487a8aa1294d64d94dc4c904fee00bea75c4dc8a63d975d9eab extends Twig_Template
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
        $__internal_ef2dcc643d4305dc9a37cc921fec4a00578fbbb9b2a75de66e3d80f3d422de25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2dcc643d4305dc9a37cc921fec4a00578fbbb9b2a75de66e3d80f3d422de25->enter($__internal_ef2dcc643d4305dc9a37cc921fec4a00578fbbb9b2a75de66e3d80f3d422de25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ef2dcc643d4305dc9a37cc921fec4a00578fbbb9b2a75de66e3d80f3d422de25->leave($__internal_ef2dcc643d4305dc9a37cc921fec4a00578fbbb9b2a75de66e3d80f3d422de25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
