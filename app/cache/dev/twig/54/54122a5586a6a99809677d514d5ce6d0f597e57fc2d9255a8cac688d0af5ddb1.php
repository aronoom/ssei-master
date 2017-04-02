<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9e557a40a2f50c61eb88ad48180d3fed0274ebb3500fef439650389f5e609745 extends Twig_Template
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
        $__internal_4ed5d3e3eb3ad7d41dd3fafb65ddbbfa48b110ceb8320f6c536af49c0055dd09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed5d3e3eb3ad7d41dd3fafb65ddbbfa48b110ceb8320f6c536af49c0055dd09->enter($__internal_4ed5d3e3eb3ad7d41dd3fafb65ddbbfa48b110ceb8320f6c536af49c0055dd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4ed5d3e3eb3ad7d41dd3fafb65ddbbfa48b110ceb8320f6c536af49c0055dd09->leave($__internal_4ed5d3e3eb3ad7d41dd3fafb65ddbbfa48b110ceb8320f6c536af49c0055dd09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/opt/lampp/htdocs/ssei-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
