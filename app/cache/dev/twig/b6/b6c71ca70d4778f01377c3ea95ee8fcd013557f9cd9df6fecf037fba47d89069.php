<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_01fe582e3e287702c4d04b87d0cb9cb048d46d901422dbd47ac2c512eb140c55 extends Twig_Template
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
        $__internal_21c3f0d92baf792fd4fc98aaabf8b1c1337b5f09992cc195c85d9243e60d159e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c3f0d92baf792fd4fc98aaabf8b1c1337b5f09992cc195c85d9243e60d159e->enter($__internal_21c3f0d92baf792fd4fc98aaabf8b1c1337b5f09992cc195c85d9243e60d159e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_21c3f0d92baf792fd4fc98aaabf8b1c1337b5f09992cc195c85d9243e60d159e->leave($__internal_21c3f0d92baf792fd4fc98aaabf8b1c1337b5f09992cc195c85d9243e60d159e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
