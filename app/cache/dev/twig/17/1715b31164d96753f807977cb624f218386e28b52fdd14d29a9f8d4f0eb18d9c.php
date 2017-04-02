<?php

/* ProjetBundle:Descriptif:modifier.html.twig */
class __TwigTemplate_9b91d1a43367a321de98c3853eb3d52798f358a99b78607166db74feba11f730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "ProjetBundle:Descriptif:modifier.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_66e44fdfa61feb2e5462e78d8c6d4f294b9b0ca5f24f17c59497705fc023e7d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e44fdfa61feb2e5462e78d8c6d4f294b9b0ca5f24f17c59497705fc023e7d2->enter($__internal_66e44fdfa61feb2e5462e78d8c6d4f294b9b0ca5f24f17c59497705fc023e7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Descriptif:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66e44fdfa61feb2e5462e78d8c6d4f294b9b0ca5f24f17c59497705fc023e7d2->leave($__internal_66e44fdfa61feb2e5462e78d8c6d4f294b9b0ca5f24f17c59497705fc023e7d2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_db2e671bffe3ad5f0f66de9cb7b1774a38ed62b8f90efe6df08e7bb1bbe1672d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2e671bffe3ad5f0f66de9cb7b1774a38ed62b8f90efe6df08e7bb1bbe1672d->enter($__internal_db2e671bffe3ad5f0f66de9cb7b1774a38ed62b8f90efe6df08e7bb1bbe1672d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Descriptif ";
        
        $__internal_db2e671bffe3ad5f0f66de9cb7b1774a38ed62b8f90efe6df08e7bb1bbe1672d->leave($__internal_db2e671bffe3ad5f0f66de9cb7b1774a38ed62b8f90efe6df08e7bb1bbe1672d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d99e569e1f7a2ec4791dd31d9e16549d9bdb0865cf2eb19c4976b44099459fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99e569e1f7a2ec4791dd31d9e16549d9bdb0865cf2eb19c4976b44099459fc6->enter($__internal_d99e569e1f7a2ec4791dd31d9e16549d9bdb0865cf2eb19c4976b44099459fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_d99e569e1f7a2ec4791dd31d9e16549d9bdb0865cf2eb19c4976b44099459fc6->leave($__internal_d99e569e1f7a2ec4791dd31d9e16549d9bdb0865cf2eb19c4976b44099459fc6_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_08f42f7acd5d8c4f12ec5d34731ce3c18188310ede4b6a1f902e94314f9bb454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f42f7acd5d8c4f12ec5d34731ce3c18188310ede4b6a1f902e94314f9bb454->enter($__internal_08f42f7acd5d8c4f12ec5d34731ce3c18188310ede4b6a1f902e94314f9bb454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_homepage");
        echo "\">Projet</a></li>
                    <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\">Descriptif</a></li>
                    <li class=\"active\"> Modifier</li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Modifier le descriptif du projet : ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nomProjet", array()), "html", null, true);
        echo "</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <br>
                        <form action=\"\" method=\"POST\" id=\"demo-form2\" class=\"form-horizontal form-label-left\" data-parsley-validate=\"true\" novalidate>
                            ";
        // line 31
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 32
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 33
                echo "                                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                        <strong>Erreur! </strong>";
                // line 35
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 39
                echo "                                    <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                        <strong>Success! </strong>";
                // line 41
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                            ";
        }
        // line 45
        echo "                            <div class=\"item form-group\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    Indicateurs
                                </div>
                                <div class=\"col-sm-3\">
                                    <select class=\"form-control col-md-7 col-xs-12\" name=\"indicateur\" value=\"\">     
                                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["indicateurs"]) ? $context["indicateurs"] : $this->getContext($context, "indicateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["indic"]) {
            // line 52
            echo "                                        \t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["indic"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["indic"], "libelleIndicateur", array()) == $this->getAttribute($this->getAttribute((isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "indicateur", array()), "libelleIndicateur", array()))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["indic"], "libelleIndicateur", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"item form-group\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    Unité
                                </div>
                                <div class=\"col-sm-3\">
                                    <select class=\"form-control col-md-7 col-xs-12 select2_multiple\" name=\"unite[]\" multiple=\"multiple\">
                                        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unites"]) ? $context["unites"] : $this->getContext($context, "unites")));
        foreach ($context['_seq'] as $context["_key"] => $context["unite"]) {
            // line 64
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unite"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unite"], "libelleUnite", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                                    </select>                                    
                                   
                                </div>
                                <ul class=\"parsley-errors-list filled\">
                                    <li class=\"parsley-required\">
                                    </li>
                                </ul>
                            </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Commune de la région
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <select class=\"form-control col-md-7 col-xs-12 select2_multiple\" name=\"commune[]\"  multiple=\"multiple\">
                                            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 81
            echo "                                            <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "regionLibelle", array()), "html", null, true);
            echo "\">
                                                ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["region"], "districts", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["district"]) {
                // line 83
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["district"], "getCommunes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["commune"]) {
                    // line 84
                    echo "                                                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "communeLibelle", array()), "html", null, true);
                    echo "</option>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commune'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['district'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                                            </optgroup>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                                        </select>
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Baseline
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <input type=\"number\" class=\"required form-control col-md-7 col-xs-12\" name=\"baseline\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "baselineDescParUi", array()), "html", null, true);
        echo "\" min=\"0\">
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Objectif
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <input type=\"number\" class=\"form-control col-md-7 col-xs-12\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "objectifDescParUi", array()), "html", null, true);
        echo "\" min=\"0\" name=\"objectif\" >
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Réalisation cumulée
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <input type=\"number\" class=\"form-control col-md-7 col-xs-12\" name=\"realisation\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "realCumulParUi", array()), "html", null, true);
        echo "\" min=\"0\">
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Explication
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <textarea name=\"explication\" class=\"form-control col-md-7 col-xs-12\" id=\"\" cols=\"30\" rows=\"3\">";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "explicationDescParUi", array()), "html", null, true);
        echo "</textarea>
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                            <div class=\"ln_solid\"></div>
                            <div class=\"form-group\">
                                <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Soumettre\">
                                    <a href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\">
                                        <button type=\"button\" class=\"btn btn-success\" >Retour</button>
                                    </a>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_08f42f7acd5d8c4f12ec5d34731ce3c18188310ede4b6a1f902e94314f9bb454->leave($__internal_08f42f7acd5d8c4f12ec5d34731ce3c18188310ede4b6a1f902e94314f9bb454_prof);

    }

    // line 163
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_92aaee5a87ae50680098643aa154cb14ed77ecad56e3e8327619e06ada1a7317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92aaee5a87ae50680098643aa154cb14ed77ecad56e3e8327619e06ada1a7317->enter($__internal_92aaee5a87ae50680098643aa154cb14ed77ecad56e3e8327619e06ada1a7317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 164
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/validator/validator.js"), "html", null, true);
        echo "\"></script>
    <!-- validator -->
    <script>
        // initialize the validator function
        validator.message.date = 'not a real date';

        // validate a field on \"blur\" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
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
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {

            \$(\".select2_multiple\").select2({
                maximumSelectionLength: 10,
                placeholder : \"Veuillez ajouter\",
                allowClear: true,
            });
            \$('select').toggleClass('required');
        });
    </script>
";
        
        $__internal_92aaee5a87ae50680098643aa154cb14ed77ecad56e3e8327619e06ada1a7317->leave($__internal_92aaee5a87ae50680098643aa154cb14ed77ecad56e3e8327619e06ada1a7317_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Descriptif:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 196,  367 => 165,  362 => 164,  356 => 163,  335 => 148,  321 => 137,  306 => 125,  291 => 113,  276 => 101,  262 => 89,  255 => 87,  249 => 86,  238 => 84,  233 => 83,  229 => 82,  224 => 81,  220 => 80,  204 => 66,  193 => 64,  189 => 63,  178 => 54,  163 => 52,  159 => 51,  151 => 45,  148 => 44,  139 => 41,  135 => 39,  130 => 38,  121 => 35,  117 => 33,  112 => 32,  110 => 31,  101 => 25,  88 => 15,  84 => 14,  77 => 9,  71 => 8,  62 => 5,  57 => 4,  51 => 3,  37 => 2,  11 => 1,);
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
{% block title %} {{parent()}} Descriptif {% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link href=\"{{asset('vendors/select2/dist/css/select2.min.css')}}\" rel=\"stylesheet\">
{% endblock %}

{% block content %}
    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a href=\"{{ path('projet_homepage') }}\">Projet</a></li>
                    <li><a href=\"{{ path('projet_index',{'id':projet.id}) }}\">Descriptif</a></li>
                    <li class=\"active\"> Modifier</li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Modifier le descriptif du projet : {{ projet.nomProjet }}</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <br>
                        <form action=\"\" method=\"POST\" id=\"demo-form2\" class=\"form-horizontal form-label-left\" data-parsley-validate=\"true\" novalidate>
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
                                    Indicateurs
                                </div>
                                <div class=\"col-sm-3\">
                                    <select class=\"form-control col-md-7 col-xs-12\" name=\"indicateur\" value=\"\">     
                                        {% for indic in indicateurs %}
                                        \t<option value=\"{{ indic.id }}\" {% if indic.libelleIndicateur == descriptifParUi.indicateur.libelleIndicateur %}selected=\"selected\"{% endif %}>{{ indic.libelleIndicateur }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"item form-group\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    Unité
                                </div>
                                <div class=\"col-sm-3\">
                                    <select class=\"form-control col-md-7 col-xs-12 select2_multiple\" name=\"unite[]\" multiple=\"multiple\">
                                        {% for unite in unites %}
                                        <option value=\"{{ unite.id }}\">{{ unite.libelleUnite }}</option>
                                        {% endfor %}
                                    </select>                                    
                                   
                                </div>
                                <ul class=\"parsley-errors-list filled\">
                                    <li class=\"parsley-required\">
                                    </li>
                                </ul>
                            </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Commune de la région
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <select class=\"form-control col-md-7 col-xs-12 select2_multiple\" name=\"commune[]\"  multiple=\"multiple\">
                                            {% for region in regions %}
                                            <optgroup label=\"{{ region.regionLibelle }}\">
                                                {% for district in region.districts %}
                                                    {% for commune in district.getCommunes %}
                                                    <option value=\"{{ commune.id }}\">{{ commune.communeLibelle }}</option>
                                                    {% endfor %}
                                                {% endfor %}
                                            </optgroup>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Baseline
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <input type=\"number\" class=\"required form-control col-md-7 col-xs-12\" name=\"baseline\" value=\"{{descriptifParUi.baselineDescParUi}}\" min=\"0\">
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Objectif
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <input type=\"number\" class=\"form-control col-md-7 col-xs-12\" value=\"{{descriptifParUi.objectifDescParUi}}\" min=\"0\" name=\"objectif\" >
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Réalisation cumulée
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <input type=\"number\" class=\"form-control col-md-7 col-xs-12\" name=\"realisation\" value=\"{{descriptifParUi.realCumulParUi}}\" min=\"0\">
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"item form-group\">
                                    <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                        Explication
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <textarea name=\"explication\" class=\"form-control col-md-7 col-xs-12\" id=\"\" cols=\"30\" rows=\"3\">{{descriptifParUi.explicationDescParUi}}</textarea>
                                    </div>
                                    <ul class=\"parsley-errors-list filled\">
                                        <li class=\"parsley-required\">
                                        </li>
                                    </ul>
                                </div>
                            <div class=\"ln_solid\"></div>
                            <div class=\"form-group\">
                                <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Soumettre\">
                                    <a href=\"{{ path('projet_index',{'id': projet.id }) }}\">
                                        <button type=\"button\" class=\"btn btn-success\" >Retour</button>
                                    </a>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    {{parent()}}
    <script src=\"{{asset('vendors/validator/validator.js')}}\"></script>
    <!-- validator -->
    <script>
        // initialize the validator function
        validator.message.date = 'not a real date';

        // validate a field on \"blur\" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
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
    <script src=\"{{asset('vendors/select2/dist/js/select2.full.min.js')}}\"></script>
    <script>
        \$(document).ready(function() {

            \$(\".select2_multiple\").select2({
                maximumSelectionLength: 10,
                placeholder : \"Veuillez ajouter\",
                allowClear: true,
            });
            \$('select').toggleClass('required');
        });
    </script>
{% endblock %}", "ProjetBundle:Descriptif:modifier.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/Descriptif/modifier.html.twig");
    }
}
