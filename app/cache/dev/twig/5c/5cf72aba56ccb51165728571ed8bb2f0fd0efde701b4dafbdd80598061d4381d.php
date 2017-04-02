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
        $__internal_f6424bb3b31ba0f4600734628505ac19076aafdbd719c6e2af2e05ef55c21cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6424bb3b31ba0f4600734628505ac19076aafdbd719c6e2af2e05ef55c21cfe->enter($__internal_f6424bb3b31ba0f4600734628505ac19076aafdbd719c6e2af2e05ef55c21cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f6424bb3b31ba0f4600734628505ac19076aafdbd719c6e2af2e05ef55c21cfe->leave($__internal_f6424bb3b31ba0f4600734628505ac19076aafdbd719c6e2af2e05ef55c21cfe_prof);

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
", "@Framework/Form/form_end.html.php", "/opt/lampp/htdocs/ssei-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
