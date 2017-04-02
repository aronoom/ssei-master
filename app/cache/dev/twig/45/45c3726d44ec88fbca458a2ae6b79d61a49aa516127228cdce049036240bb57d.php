<?php

/* ProjetBundle:DescriptifActivite:ajouter.html.twig */
class __TwigTemplate_3359d46ac65966713eed57720515d73909b424c0167c4d634f17025b0990bf18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "ProjetBundle:DescriptifActivite:ajouter.html.twig", 1);
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
        $__internal_9f41db37542d93031a755d6752b609be36002bb4c1839f8f8555c67b168ae7bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f41db37542d93031a755d6752b609be36002bb4c1839f8f8555c67b168ae7bb->enter($__internal_9f41db37542d93031a755d6752b609be36002bb4c1839f8f8555c67b168ae7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:DescriptifActivite:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f41db37542d93031a755d6752b609be36002bb4c1839f8f8555c67b168ae7bb->leave($__internal_9f41db37542d93031a755d6752b609be36002bb4c1839f8f8555c67b168ae7bb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c35ea918b336e7ab2e89c7d9a5c00de4f20088ddceec89a683532fd2544f305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c35ea918b336e7ab2e89c7d9a5c00de4f20088ddceec89a683532fd2544f305->enter($__internal_9c35ea918b336e7ab2e89c7d9a5c00de4f20088ddceec89a683532fd2544f305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Descriptif ";
        
        $__internal_9c35ea918b336e7ab2e89c7d9a5c00de4f20088ddceec89a683532fd2544f305->leave($__internal_9c35ea918b336e7ab2e89c7d9a5c00de4f20088ddceec89a683532fd2544f305_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b862dc014f19119aade96609b58702ec71ed842e6c130f6dde37b9ad5ae0a4d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b862dc014f19119aade96609b58702ec71ed842e6c130f6dde37b9ad5ae0a4d4->enter($__internal_b862dc014f19119aade96609b58702ec71ed842e6c130f6dde37b9ad5ae0a4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_b862dc014f19119aade96609b58702ec71ed842e6c130f6dde37b9ad5ae0a4d4->leave($__internal_b862dc014f19119aade96609b58702ec71ed842e6c130f6dde37b9ad5ae0a4d4_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_89a334db5a5bb845f62f15d5320dc5df4abe4bdeaf89ac5def670554a2c89161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a334db5a5bb845f62f15d5320dc5df4abe4bdeaf89ac5def670554a2c89161->enter($__internal_89a334db5a5bb845f62f15d5320dc5df4abe4bdeaf89ac5def670554a2c89161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\">Acceuil</a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_homepage");
        echo "\"> Projet </a></li>
                    <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index", array("id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")))), "html", null, true);
        echo "\"> Composante </a></li>
                    <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_lister_activite", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")))), "html", null, true);
        echo "\"> Activité </a></li>
                    <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_lister", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")), "act_id" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()))), "html", null, true);
        echo "\"> Déscriptif </a></li>
                    <li class=\"active\">Ajouter</li>
                </ol>
            </div>
        </div>

        <div class=\"clearfix\"></div>
        <h1>Descriptif</h1>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Ajouter un descriptif pour l'activité ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "codeActivite", array()), "html", null, true);
        echo "</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <br>
                        <form action=\"\" method=\"POST\" id=\"demo-form2\" class=\"form-horizontal form-label-left\" data-parsley-validate=\"true\" novalidate>
                            ";
        // line 35
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 36
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 37
                echo "                                    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                        <strong>Erreur! </strong>";
                // line 39
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 43
                echo "                                    <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                        <strong>Success! </strong>";
                // line 45
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                            ";
        }
        // line 49
        echo "                            <div class=\"item form-group\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    Indicateurs
                                </div>
                                <div class=\"col-sm-3\">
                                    <select class=\"form-control col-md-7 col-xs-12\" name=\"indicateur\">
                                        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["indicateurs"]) ? $context["indicateurs"] : $this->getContext($context, "indicateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["indic"]) {
            // line 56
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["indic"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["indic"], "libelleIndicateur", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
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
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unites"]) ? $context["unites"] : $this->getContext($context, "unites")));
        foreach ($context['_seq'] as $context["_key"] => $context["unite"]) {
            // line 68
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
        // line 70
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
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 84
            echo "
                                            <optgroup label=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "regionLibelle", array()), "html", null, true);
            echo "\">
                                                ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["region"], "districts", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["district"]) {
                // line 87
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["district"], "getCommunes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["commune"]) {
                    // line 88
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
                // line 90
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['district'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                                            </optgroup>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
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
                                        <input type=\"number\" class=\"required form-control col-md-7 col-xs-12\" name=\"baseline\" value=\"0\" min=\"0\">
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
                                        <input type=\"number\" class=\"form-control col-md-7 col-xs-12\" value=\"0\" min=\"0\" name=\"objectif\" >
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
                                        <input type=\"number\" class=\"form-control col-md-7 col-xs-12\" name=\"realisation\" value=\"0\" min=\"0\">
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
                                        <textarea name=\"explication\" class=\"form-control col-md-7 col-xs-12\" id=\"\" cols=\"30\" rows=\"3\"></textarea>
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
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_lister", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")), "act_id" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()))), "html", null, true);
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
        
        $__internal_89a334db5a5bb845f62f15d5320dc5df4abe4bdeaf89ac5def670554a2c89161->leave($__internal_89a334db5a5bb845f62f15d5320dc5df4abe4bdeaf89ac5def670554a2c89161_prof);

    }

    // line 166
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b080a23f6b96a67e3ec8bd6c107e9acc25279159ec19ad7ab99f2e76db5e3ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b080a23f6b96a67e3ec8bd6c107e9acc25279159ec19ad7ab99f2e76db5e3ac->enter($__internal_0b080a23f6b96a67e3ec8bd6c107e9acc25279159ec19ad7ab99f2e76db5e3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 167
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 168
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
        // line 199
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
        
        $__internal_0b080a23f6b96a67e3ec8bd6c107e9acc25279159ec19ad7ab99f2e76db5e3ac->leave($__internal_0b080a23f6b96a67e3ec8bd6c107e9acc25279159ec19ad7ab99f2e76db5e3ac_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:DescriptifActivite:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 199,  361 => 168,  356 => 167,  350 => 166,  330 => 152,  269 => 93,  262 => 91,  256 => 90,  245 => 88,  240 => 87,  236 => 86,  232 => 85,  229 => 84,  225 => 83,  210 => 70,  199 => 68,  195 => 67,  184 => 58,  173 => 56,  169 => 55,  161 => 49,  158 => 48,  149 => 45,  145 => 43,  140 => 42,  131 => 39,  127 => 37,  122 => 36,  120 => 35,  111 => 29,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  77 => 9,  71 => 8,  62 => 5,  57 => 4,  51 => 3,  37 => 2,  11 => 1,);
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
                    <li><a href=\"#\">Acceuil</a></li>
                    <li><a href=\"{{ path('projet_homepage') }}\"> Projet </a></li>
                    <li><a href=\"{{ path('projet_index', {'id': projet_id}) }}\"> Composante </a></li>
                    <li><a href=\"{{ path('projet_lister_activite', {'projet_id': projet_id, 'comp_id': comp_id}) }}\"> Activité </a></li>
                    <li><a href=\"{{ path('projet_descriptif_activite_lister', {'projet_id': projet_id, 'comp_id': comp_id, 'act_id': activite.id}) }}\"> Déscriptif </a></li>
                    <li class=\"active\">Ajouter</li>
                </ol>
            </div>
        </div>

        <div class=\"clearfix\"></div>
        <h1>Descriptif</h1>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Ajouter un descriptif pour l'activité {{ activite.codeActivite }}</h2>
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
                                    <select class=\"form-control col-md-7 col-xs-12\" name=\"indicateur\">
                                        {% for indic in indicateurs %}
                                        <option value=\"{{ indic.id }}\">{{ indic.libelleIndicateur }}</option>
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
                                        <input type=\"number\" class=\"required form-control col-md-7 col-xs-12\" name=\"baseline\" value=\"0\" min=\"0\">
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
                                        <input type=\"number\" class=\"form-control col-md-7 col-xs-12\" value=\"0\" min=\"0\" name=\"objectif\" >
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
                                        <input type=\"number\" class=\"form-control col-md-7 col-xs-12\" name=\"realisation\" value=\"0\" min=\"0\">
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
                                        <textarea name=\"explication\" class=\"form-control col-md-7 col-xs-12\" id=\"\" cols=\"30\" rows=\"3\"></textarea>
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
                                    <a href=\"{{ path('projet_descriptif_activite_lister',{'projet_id': projet_id, 'comp_id': comp_id, 'act_id': activite.id}) }}\">
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
{% endblock %}", "ProjetBundle:DescriptifActivite:ajouter.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/DescriptifActivite/ajouter.html.twig");
    }
}
