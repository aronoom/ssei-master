<?php

/* ProjetBundle:Activite:ajouter.html.twig */
class __TwigTemplate_e131c9b223f9672e188da8cb051f29e57c9c54199b6f972bbfbe53bfa26d7ee2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjetBundle::layout.html.twig", "ProjetBundle:Activite:ajouter.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbbd4f75af8296f4bfc1b6d95fe2e4b3c6c9d33ed37f4802dd46ea2c58ce1f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbbd4f75af8296f4bfc1b6d95fe2e4b3c6c9d33ed37f4802dd46ea2c58ce1f12->enter($__internal_bbbd4f75af8296f4bfc1b6d95fe2e4b3c6c9d33ed37f4802dd46ea2c58ce1f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Activite:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbbd4f75af8296f4bfc1b6d95fe2e4b3c6c9d33ed37f4802dd46ea2c58ce1f12->leave($__internal_bbbd4f75af8296f4bfc1b6d95fe2e4b3c6c9d33ed37f4802dd46ea2c58ce1f12_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_345e53cd24a36be86c93bbd97a4496af9852acf36736e66c5e8f42bad4e62204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_345e53cd24a36be86c93bbd97a4496af9852acf36736e66c5e8f42bad4e62204->enter($__internal_345e53cd24a36be86c93bbd97a4496af9852acf36736e66c5e8f42bad4e62204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Activite ";
        
        $__internal_345e53cd24a36be86c93bbd97a4496af9852acf36736e66c5e8f42bad4e62204->leave($__internal_345e53cd24a36be86c93bbd97a4496af9852acf36736e66c5e8f42bad4e62204_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3018829a6351cc5a368eb6084a23ef7b6ba6061ca8ab340965542be8c41feb4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3018829a6351cc5a368eb6084a23ef7b6ba6061ca8ab340965542be8c41feb4f->enter($__internal_3018829a6351cc5a368eb6084a23ef7b6ba6061ca8ab340965542be8c41feb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_3018829a6351cc5a368eb6084a23ef7b6ba6061ca8ab340965542be8c41feb4f->leave($__internal_3018829a6351cc5a368eb6084a23ef7b6ba6061ca8ab340965542be8c41feb4f_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_25225675b8e1d0a95331039e43fc238cba181d5ac4e3dd529d71b027b568d193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25225675b8e1d0a95331039e43fc238cba181d5ac4e3dd529d71b027b568d193->enter($__internal_25225675b8e1d0a95331039e43fc238cba181d5ac4e3dd529d71b027b568d193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\">Acceuil</a></li>
                    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_homepage");
        echo "\">Projet</a></li>
                    <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index", array("id" => $this->getAttribute($this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "projet", array()), "id", array()))), "html", null, true);
        echo "\"> Composante </a></li>
                    <li ><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_lister_activite", array("projet_id" => $this->getAttribute($this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "projet", array()), "id", array()), "comp_id" => $this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "id", array()))), "html", null, true);
        echo "\">Activité</a></li>
                    <li class=\"active\">Ajouter</li>
                </ol>
            </div>
        </div>

        <div class=\"clearfix\"></div>
        <h1>Activité</h1>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Ajouter une activité pour la composante ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "id", array()), "html", null, true);
        echo "</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <br>
                        ";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "demo-form2", "data-parsley-validate" => "true", "novalidate" => "novalidate", "class" => "form-horizontal form-label-left")));
        echo "
                        ";
        // line 33
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 34
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 35
                echo "                                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>Erreur! </strong>";
                // line 37
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 41
                echo "                                <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>Success! </strong>";
                // line 43
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                        ";
        }
        // line 47
        echo "                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelleActivite", array()), 'label', array("label" => "Désignation de l'activité"));
        echo "
                            </div>
                            <div class=\"col-sm-3\">
                                ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelleActivite", array()), 'widget', array("attr" => array("required" => "true", "class" => "form-control col-md-7 col-xs-12")));
        echo "
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelleActivite", array()), 'errors');
        echo "
                                </li>
                            </ul>
                        </div>
                        <div class=\"ln_solid\"></div>
                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                                <button type=\"reset\" class=\"btn btn-success\" onclick=\"history.go(-1);\">Retour</button>
                            </div>
                        </div>
                        ";
        // line 67
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_25225675b8e1d0a95331039e43fc238cba181d5ac4e3dd529d71b027b568d193->leave($__internal_25225675b8e1d0a95331039e43fc238cba181d5ac4e3dd529d71b027b568d193_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e09222a5856095e0a4299e4b09e524a1f65925c37eb3b14183f87985ffe1e852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09222a5856095e0a4299e4b09e524a1f65925c37eb3b14183f87985ffe1e852->enter($__internal_e09222a5856095e0a4299e4b09e524a1f65925c37eb3b14183f87985ffe1e852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 78
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
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$(\".select2_single\").select2({
                placeholder: \"Select a state\",
                allowClear: true
            });
            \$(\".select2_group\").select2({});
            \$(\".select2_multiple\").select2({
                maximumSelectionLength: 10,
                placeholder: \"Enités\",
                allowClear: true
            });
        });
    </script>
";
        
        $__internal_e09222a5856095e0a4299e4b09e524a1f65925c37eb3b14183f87985ffe1e852->leave($__internal_e09222a5856095e0a4299e4b09e524a1f65925c37eb3b14183f87985ffe1e852_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Activite:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 104,  248 => 103,  220 => 78,  215 => 77,  209 => 76,  194 => 67,  187 => 63,  177 => 56,  170 => 52,  164 => 49,  160 => 47,  157 => 46,  148 => 43,  144 => 41,  139 => 40,  130 => 37,  126 => 35,  121 => 34,  119 => 33,  115 => 32,  107 => 27,  92 => 15,  88 => 14,  84 => 13,  77 => 8,  71 => 7,  62 => 5,  57 => 4,  51 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"ProjetBundle::layout.html.twig\"%}
{% block title %} {{parent()}} Activite {% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link href=\"{{asset('vendors/select2/dist/css/select2.min.css')}}\" rel=\"stylesheet\">
{% endblock %}
{% block content %}
    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\">Acceuil</a></li>
                    <li><a href=\"{{ path('projet_homepage') }}\">Projet</a></li>
                    <li><a href=\"{{ path('projet_index', {'id': composante.projet.id }) }}\"> Composante </a></li>
                    <li ><a href=\"{{ path('projet_lister_activite', {'projet_id': composante.projet.id, 'comp_id': composante.id}) }}\">Activité</a></li>
                    <li class=\"active\">Ajouter</li>
                </ol>
            </div>
        </div>

        <div class=\"clearfix\"></div>
        <h1>Activité</h1>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Ajouter une activité pour la composante {{ composante.id }}</h2>
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
                                {{ form_label(form.libelleActivite,\"Désignation de l'activité\") }}
                            </div>
                            <div class=\"col-sm-3\">
                                {{ form_widget(form.libelleActivite,{ 'attr' : {'required':'true','class':'form-control col-md-7 col-xs-12'} })}}
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    {{ form_errors(form.libelleActivite)}}
                                </li>
                            </ul>
                        </div>
                        <div class=\"ln_solid\"></div>
                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                {{ form_widget(form.save) }}
                                <button type=\"reset\" class=\"btn btn-success\" onclick=\"history.go(-1);\">Retour</button>
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
    <script src=\"{{asset('vendors/select2/dist/js/select2.full.min.js')}}\"></script>
    <script>
        \$(document).ready(function() {
            \$(\".select2_single\").select2({
                placeholder: \"Select a state\",
                allowClear: true
            });
            \$(\".select2_group\").select2({});
            \$(\".select2_multiple\").select2({
                maximumSelectionLength: 10,
                placeholder: \"Enités\",
                allowClear: true
            });
        });
    </script>
{% endblock %}", "ProjetBundle:Activite:ajouter.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/Activite/ajouter.html.twig");
    }
}
