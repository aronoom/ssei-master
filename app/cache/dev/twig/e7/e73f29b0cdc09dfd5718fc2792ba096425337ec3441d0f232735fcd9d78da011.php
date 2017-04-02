<?php

/* UserBundle:Group:modifier.html.twig */
class __TwigTemplate_bfaaaad0ade0ac1eb8cba6a491e75e3c0d8d4b5f27ac0a7249135400b369c168 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "UserBundle:Group:modifier.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dbd6c08cfe8b4e5fffb74c7ce14870fad5b7557c0a226888036b27d20359f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dbd6c08cfe8b4e5fffb74c7ce14870fad5b7557c0a226888036b27d20359f2a->enter($__internal_2dbd6c08cfe8b4e5fffb74c7ce14870fad5b7557c0a226888036b27d20359f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dbd6c08cfe8b4e5fffb74c7ce14870fad5b7557c0a226888036b27d20359f2a->leave($__internal_2dbd6c08cfe8b4e5fffb74c7ce14870fad5b7557c0a226888036b27d20359f2a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7d0dea2335b3aac007f64f0491e20b073c1bd88338fb04f28d310a9a531d4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d0dea2335b3aac007f64f0491e20b073c1bd88338fb04f28d310a9a531d4e4->enter($__internal_b7d0dea2335b3aac007f64f0491e20b073c1bd88338fb04f28d310a9a531d4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Groupes ";
        
        $__internal_b7d0dea2335b3aac007f64f0491e20b073c1bd88338fb04f28d310a9a531d4e4->leave($__internal_b7d0dea2335b3aac007f64f0491e20b073c1bd88338fb04f28d310a9a531d4e4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ca2804b22ab2170ba2c8dcbe0e58de8f664b9aa38f48963c9e7445f2f34c8c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2804b22ab2170ba2c8dcbe0e58de8f664b9aa38f48963c9e7445f2f34c8c4a->enter($__internal_ca2804b22ab2170ba2c8dcbe0e58de8f664b9aa38f48963c9e7445f2f34c8c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Utilisateurs</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\">Acceuil</a></li>
                    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_user_liste");
        echo "\">Groupes</a></li>
                    <li class=\"active\">Modifier</li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Modifier une groupe</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <br>
                        ";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "demo-form2", "data-parsley-validate" => "true", "novalidate" => "novalidate", "class" => "form-horizontal form-label-left")));
        echo "
                        ";
        // line 26
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 27
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 28
                echo "                                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>Erreur! </strong>";
                // line 30
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 34
                echo "                                <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>Success! </strong>";
                // line 36
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                        ";
        }
        // line 40
        echo "                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codeGroupUser", array()), 'label', array("label" => "Code du groupe"));
        echo "
                            </div>
                            <div class=\"col-sm-3\">
                                ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codeGroupUser", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codeGroupUser", array()), 'errors');
        echo "
                                </li>
                            </ul>
                        </div>
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomGroupUser", array()), 'label', array("label" => "Nom du groupe"));
        echo "
                            </div>
                            <div class=\"col-sm-3\">
                                ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomGroupUser", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomGroupUser", array()), 'errors');
        echo "
                                </li>
                            </ul>
                        </div>
                        <div class=\"ln_solid\"></div>
                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                                <button type=\"button\" class=\"btn btn-success\" onclick=\"history.go(-1);\">Retour</button>
                            </div>
                        </div>
                        ";
        // line 73
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>

    </div>

";
        
        $__internal_ca2804b22ab2170ba2c8dcbe0e58de8f664b9aa38f48963c9e7445f2f34c8c4a->leave($__internal_ca2804b22ab2170ba2c8dcbe0e58de8f664b9aa38f48963c9e7445f2f34c8c4a_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cea130330ebb02a9f0f268394db5984337e6f92c4243f2abe9da5348ad81fbd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea130330ebb02a9f0f268394db5984337e6f92c4243f2abe9da5348ad81fbd2->enter($__internal_cea130330ebb02a9f0f268394db5984337e6f92c4243f2abe9da5348ad81fbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/validator/validator.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('form')
                .on('blur', 'input[required], input.optional, select.required', validator.checkField)
                .on('change', 'select.required', validator.checkField)
                .on('keypress', 'input[required][pattern]', validator.keypress);

        \$('.multi.required').on('keyup blur', 'input', function() {
            validator.checkField.apply(\$(this).siblings().last()[0]);
        });
        \$('form').submit(function(e) {
            e.preventDefault();
            var submit = true;

            // evaluate the form using generic validaing
            if (!validator.checkAll(\$(this))) {
                submit = false;
            }

            if (submit)
                this.submit();

            return false;
        });
    </script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_cea130330ebb02a9f0f268394db5984337e6f92c4243f2abe9da5348ad81fbd2->leave($__internal_cea130330ebb02a9f0f268394db5984337e6f92c4243f2abe9da5348ad81fbd2_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 110,  210 => 85,  205 => 84,  199 => 83,  183 => 73,  176 => 69,  166 => 62,  159 => 58,  153 => 55,  144 => 49,  137 => 45,  131 => 42,  127 => 40,  124 => 39,  115 => 36,  111 => 34,  106 => 33,  97 => 30,  93 => 28,  88 => 27,  86 => 26,  82 => 25,  64 => 10,  56 => 4,  50 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\"%}
{% block title %} {{parent()}} Groupes {% endblock %}
{% block content %}
    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Utilisateurs</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\">Acceuil</a></li>
                    <li><a href=\"{{ path('groupe_user_liste') }}\">Groupes</a></li>
                    <li class=\"active\">Modifier</li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Modifier une groupe</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <br>
                        {{ form_start(form, {'attr': { 'id':'demo-form2' ,'data-parsley-validate':'true','novalidate': 'novalidate' , 'class': 'form-horizontal form-label-left'}})}}
                        {% if app.request.hasPreviousSession %}
                            {% for flashMessage in app.session.flashBag.get('notice_error') %}
                                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>Erreur! </strong>{{ flashMessage }}
                                </div>
                            {% endfor %}
                            {% for flashMessage in app.session.flashBag.get('notice_success') %}
                                <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>Success! </strong>{{ flashMessage }}
                                </div>
                            {% endfor %}
                        {% endif %}
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                {{ form_label(form.codeGroupUser,\"Code du groupe\") }}
                            </div>
                            <div class=\"col-sm-3\">
                                {{ form_widget(form.codeGroupUser,{ 'attr' : {'class':'form-control col-md-7 col-xs-12'} })}}
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    {{ form_errors(form.codeGroupUser)}}
                                </li>
                            </ul>
                        </div>
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                {{ form_label(form.nomGroupUser,\"Nom du groupe\") }}
                            </div>
                            <div class=\"col-sm-3\">
                                {{ form_widget(form.nomGroupUser,{ 'attr' : {'class':'form-control col-md-7 col-xs-12'} })}}
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    {{ form_errors(form.nomGroupUser)}}
                                </li>
                            </ul>
                        </div>
                        <div class=\"ln_solid\"></div>
                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                {{ form_widget(form.save) }}
                                <button type=\"button\" class=\"btn btn-success\" onclick=\"history.go(-1);\">Retour</button>
                            </div>
                        </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>

    </div>

{% endblock %}

{% block javascripts %}
    {{parent()}}
    <script src=\"{{asset('vendors/validator/validator.js')}}\"></script>
    <script>
        \$('form')
                .on('blur', 'input[required], input.optional, select.required', validator.checkField)
                .on('change', 'select.required', validator.checkField)
                .on('keypress', 'input[required][pattern]', validator.keypress);

        \$('.multi.required').on('keyup blur', 'input', function() {
            validator.checkField.apply(\$(this).siblings().last()[0]);
        });
        \$('form').submit(function(e) {
            e.preventDefault();
            var submit = true;

            // evaluate the form using generic validaing
            if (!validator.checkAll(\$(this))) {
                submit = false;
            }

            if (submit)
                this.submit();

            return false;
        });
    </script>
    <script src=\"{{ asset('js/jquery.validate.js') }}\"></script>

{% endblock %}", "UserBundle:Group:modifier.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/UserBundle/Resources/views/Group/modifier.html.twig");
    }
}
