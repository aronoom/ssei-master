<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_285130528e5c7d311ba8347378c38ea442bec41de7675f7da3da972784089614 extends Twig_Template
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
        $__internal_64e92101e240c896168ad65293d53646a9d3491f4413894a10761935ea45d75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e92101e240c896168ad65293d53646a9d3491f4413894a10761935ea45d75d->enter($__internal_64e92101e240c896168ad65293d53646a9d3491f4413894a10761935ea45d75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    <div class=\"item form-group\">
        <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
            ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'label', array("label" => "Mot de passe actuel"));
        echo "
        </div>
        <div class=\"col-sm-3\">
            ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
        </div>
        <ul class=\"parsley-errors-list filled\">
            <li class=\"parsley-required\">
                ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'errors');
        echo "
            </li>
        </ul>
    </div>
    <br>
    <br>
    <div class=\"item form-group\">
        <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
            ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new", array()), "first", array()), 'label', array("label" => "Nouveau mot de passe"));
        echo "
        </div>
        <div class=\"col-sm-3\">
            ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
        </div>
        <ul class=\"parsley-errors-list filled\">
            <li class=\"parsley-required\">
                ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new", array()), "first", array()), 'errors');
        echo "
            </li>
        </ul>
    </div>
    <br>
    <br>
    <div class=\"item form-group\">
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new", array()), "second", array()), 'label', array("label" => "Validation du mot de passe"));
        echo "
            </div>
            <div class=\"col-sm-3\">
                ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
            </div>
            <ul class=\"parsley-errors-list filled\">
                <li class=\"parsley-required\">
                    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new", array()), "second", array()), 'errors');
        echo "
                </li>
            </ul>
    </div>
    <br>
    <br>
    <div class=\"ln_solid\"></div>
    <div class=\"form-group\">
        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-4\">
            <input type=\"submit\" class=\"btn btn-success\" value=\"Valider la modification\" />
        </div>
    </div>
";
        // line 55
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_64e92101e240c896168ad65293d53646a9d3491f4413894a10761935ea45d75d->leave($__internal_64e92101e240c896168ad65293d53646a9d3491f4413894a10761935ea45d75d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 55,  92 => 43,  85 => 39,  79 => 36,  68 => 28,  61 => 24,  55 => 21,  44 => 13,  37 => 9,  31 => 6,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    <div class=\"item form-group\">
        <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
            {{ form_label(form.current_password,\"Mot de passe actuel\") }}
        </div>
        <div class=\"col-sm-3\">
            {{ form_widget(form.current_password,{ 'attr' : {'class':'form-control col-md-7 col-xs-12'} })}}
        </div>
        <ul class=\"parsley-errors-list filled\">
            <li class=\"parsley-required\">
                {{ form_errors(form.current_password)}}
            </li>
        </ul>
    </div>
    <br>
    <br>
    <div class=\"item form-group\">
        <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
            {{ form_label(form.new.first,\"Nouveau mot de passe\") }}
        </div>
        <div class=\"col-sm-3\">
            {{ form_widget(form.new.first,{ 'attr' : {'class':'form-control col-md-7 col-xs-12'} })}}
        </div>
        <ul class=\"parsley-errors-list filled\">
            <li class=\"parsley-required\">
                {{ form_errors(form.new.first)}}
            </li>
        </ul>
    </div>
    <br>
    <br>
    <div class=\"item form-group\">
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                {{ form_label(form.new.second,\"Validation du mot de passe\") }}
            </div>
            <div class=\"col-sm-3\">
                {{ form_widget(form.new.second,{ 'attr' : {'class':'form-control col-md-7 col-xs-12' } })}}
            </div>
            <ul class=\"parsley-errors-list filled\">
                <li class=\"parsley-required\">
                    {{ form_errors(form.new.second)}}
                </li>
            </ul>
    </div>
    <br>
    <br>
    <div class=\"ln_solid\"></div>
    <div class=\"form-group\">
        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-4\">
            <input type=\"submit\" class=\"btn btn-success\" value=\"Valider la modification\" />
        </div>
    </div>
{{ form_end(form) }}
", "FOSUserBundle:ChangePassword:changePassword_content.html.twig", "/opt/lampp/htdocs/ssei/app/Resources/FOSUserBundle/views/ChangePassword/changePassword_content.html.twig");
    }
}
