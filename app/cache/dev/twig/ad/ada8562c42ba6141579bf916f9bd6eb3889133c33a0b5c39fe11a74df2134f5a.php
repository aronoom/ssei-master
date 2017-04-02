<?php

/* ProjetBundle:SituationDescriptifActivite:modifier.html.twig */
class __TwigTemplate_596a3f083c073b55401dde8b23baaeeb8230a26e2efd810a4803ac1030b05362 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjetBundle::layout.html.twig", "ProjetBundle:SituationDescriptifActivite:modifier.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_c050861bf265150caf630281af23ed4d503eaf01a024308f4edd6261bc77769e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c050861bf265150caf630281af23ed4d503eaf01a024308f4edd6261bc77769e->enter($__internal_c050861bf265150caf630281af23ed4d503eaf01a024308f4edd6261bc77769e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:SituationDescriptifActivite:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c050861bf265150caf630281af23ed4d503eaf01a024308f4edd6261bc77769e->leave($__internal_c050861bf265150caf630281af23ed4d503eaf01a024308f4edd6261bc77769e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_efd40d9aa62b02e7d974d65eaa47b981b5cf972c366634e09f9e87858210403d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd40d9aa62b02e7d974d65eaa47b981b5cf972c366634e09f9e87858210403d->enter($__internal_efd40d9aa62b02e7d974d65eaa47b981b5cf972c366634e09f9e87858210403d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Modifier une situation annuelle ";
        
        $__internal_efd40d9aa62b02e7d974d65eaa47b981b5cf972c366634e09f9e87858210403d->leave($__internal_efd40d9aa62b02e7d974d65eaa47b981b5cf972c366634e09f9e87858210403d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_380915e63f8fc7a9c7d5c606d55ab76e2e7d9c748b1303a0ac16306dc6dc88bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380915e63f8fc7a9c7d5c606d55ab76e2e7d9c748b1303a0ac16306dc6dc88bc->enter($__internal_380915e63f8fc7a9c7d5c606d55ab76e2e7d9c748b1303a0ac16306dc6dc88bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb row\" >
                    <li><a href=\"#\"> Acceuil </a></li>
                    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_homepage");
        echo "\"> Projet </a></li>
                    <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index", array("id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")))), "html", null, true);
        echo "\"> Composante </a></li>
                    <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_lister_activite", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["act_id"]) ? $context["act_id"] : $this->getContext($context, "act_id")))), "html", null, true);
        echo "\"> Activité </a></li>
                    <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_lister", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")), "act_id" => (isset($context["act_id"]) ? $context["act_id"] : $this->getContext($context, "act_id")))), "html", null, true);
        echo "\"> Descriptif </a></li>
                    <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_situation_annuelle_liste", array("idActivite" => (isset($context["act_id"]) ? $context["act_id"] : $this->getContext($context, "act_id")), "idDescriptifParUi" => (isset($context["idDescriptifParUi"]) ? $context["idDescriptifParUi"] : $this->getContext($context, "idDescriptifParUi")))), "html", null, true);
        echo "\">Situation annuelle</a></li>
                    <li class=\"active\"><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_situation_annuelle_objectif_liste", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")), "act_id" => (isset($context["act_id"]) ? $context["act_id"] : $this->getContext($context, "act_id")), "idDescriptifParUi" => (isset($context["idDescriptifParUi"]) ? $context["idDescriptifParUi"] : $this->getContext($context, "idDescriptifParUi")), "idSituationAnnuelle" => (isset($context["idSituationAnnuelle"]) ? $context["idSituationAnnuelle"] : $this->getContext($context, "idSituationAnnuelle")))), "html", null, true);
        echo "\"> Objectifs </a></li>
                    <li class=\"active\"> Modifier</li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Modification du situation annuelle ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["idSituationAnnuelle"]) ? $context["idSituationAnnuelle"] : $this->getContext($context, "idSituationAnnuelle")), "html", null, true);
        echo " de l'activite ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()), "html", null, true);
        echo " de l'activité ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "codeActivite", array()), "html", null, true);
        echo "</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <br>
                        ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "demo-form2", "data-parsley-validate" => "true", "novalidate" => "novalidate", "class" => "form-horizontal form-label-left")));
        echo "
                        ";
        // line 30
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 31
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 32
                echo "                                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>Erreur! </strong>";
                // line 34
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 38
                echo "                                <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>Success! </strong>";
                // line 40
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                        ";
        }
        // line 44
        echo "                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeSitAnParUi", array()), 'label', array("label" => "Année"));
        echo "
                            </div>
                            <div class=\"col-sm-3\">
                                ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeSitAnParUi", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeSitAnParUi", array()), 'errors');
        echo "
                                </li>
                            </ul>
                        </div>
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valeurCible", array()), 'label', array("label" => "Valeur cible"));
        echo "
                            </div>
                            <div class=\"col-sm-3\">
                                ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valeurCible", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valeurCible", array()), 'errors');
        echo "
                                </li>
                            </ul>
                        </div>
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realGlobSitAnParUi", array()), 'label', array("label" => "Réalisation globale"));
        echo "
                            </div>
                            <div class=\"col-sm-3\">
                                ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realGlobSitAnParUi", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    ";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realGlobSitAnParUi", array()), 'errors');
        echo "
                                </li>
                            </ul>
                        </div>
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realisationCumule", array()), 'label', array("label" => "Réalisation cumulée"));
        echo "
                            </div>
                            <div class=\"col-sm-3\">
                                ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realisationCumule", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realisationCumule", array()), 'errors');
        echo "
                                </li>
                            </ul>
                        </div>
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ecartAnnee", array()), 'label', array("label" => "Ecart année"));
        echo "
                            </div>
                            <div class=\"col-sm-3\">
                                ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ecartAnnee", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    ";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ecartAnnee", array()), 'errors');
        echo "
                                </li>
                            </ul>
                        </div>
                        <div class=\"ln_solid\"></div>
                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                                <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_situation_annuelle_liste", array("idActivite" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()), "idDescriptifParUi" => $this->getAttribute((isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "id", array()))), "html", null, true);
        echo "\">
                                    <button type=\"button\" class=\"btn btn-success\" >Retour</button>
                                </a>
                            </div>
                        </div>
                        ";
        // line 118
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_380915e63f8fc7a9c7d5c606d55ab76e2e7d9c748b1303a0ac16306dc6dc88bc->leave($__internal_380915e63f8fc7a9c7d5c606d55ab76e2e7d9c748b1303a0ac16306dc6dc88bc_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82695bc67a6ced7b51cc9c5edb8f287a68cfa06b7419c24f54cb0d4beb00e1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82695bc67a6ced7b51cc9c5edb8f287a68cfa06b7419c24f54cb0d4beb00e1c4->enter($__internal_82695bc67a6ced7b51cc9c5edb8f287a68cfa06b7419c24f54cb0d4beb00e1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 129
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
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_82695bc67a6ced7b51cc9c5edb8f287a68cfa06b7419c24f54cb0d4beb00e1c4->leave($__internal_82695bc67a6ced7b51cc9c5edb8f287a68cfa06b7419c24f54cb0d4beb00e1c4_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:SituationDescriptifActivite:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 154,  306 => 129,  301 => 128,  295 => 127,  280 => 118,  272 => 113,  268 => 112,  258 => 105,  251 => 101,  245 => 98,  236 => 92,  229 => 88,  223 => 85,  214 => 79,  207 => 75,  201 => 72,  192 => 66,  185 => 62,  179 => 59,  170 => 53,  163 => 49,  157 => 46,  153 => 44,  150 => 43,  141 => 40,  137 => 38,  132 => 37,  123 => 34,  119 => 32,  114 => 31,  112 => 30,  108 => 29,  96 => 24,  83 => 14,  79 => 13,  75 => 12,  71 => 11,  67 => 10,  63 => 9,  56 => 4,  50 => 3,  36 => 2,  11 => 1,);
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
{% block title %} {{parent()}} Modifier une situation annuelle {% endblock %}
{% block content %}
    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb row\" >
                    <li><a href=\"#\"> Acceuil </a></li>
                    <li><a href=\"{{ path('projet_homepage') }}\"> Projet </a></li>
                    <li><a href=\"{{ path('projet_index', {'id':projet_id }) }}\"> Composante </a></li>
                    <li><a href=\"{{ path('projet_lister_activite', {'projet_id': projet_id, 'comp_id': act_id }) }}\"> Activité </a></li>
                    <li><a href=\"{{ path('projet_descriptif_activite_lister', {'projet_id': projet_id, 'comp_id': comp_id ,'act_id': act_id }) }}\"> Descriptif </a></li>
                    <li><a href=\"{{ path('projet_descriptif_activite_situation_annuelle_liste',{'idActivite': act_id ,'idDescriptifParUi': idDescriptifParUi})}}\">Situation annuelle</a></li>
                    <li class=\"active\"><a href=\"{{ path('projet_descriptif_activite_situation_annuelle_objectif_liste',{'projet_id': projet_id ,'comp_id' : comp_id,'act_id':act_id ,'idDescriptifParUi': idDescriptifParUi,'idSituationAnnuelle' : idSituationAnnuelle }) }}\"> Objectifs </a></li>
                    <li class=\"active\"> Modifier</li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Modification du situation annuelle {{ idSituationAnnuelle }} de l'activite {{ activite.id }} de l'activité {{ activite.codeActivite }}</h2>
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
                                {{ form_label(form.anneeSitAnParUi,\"Année\") }}
                            </div>
                            <div class=\"col-sm-3\">
                                {{ form_widget(form.anneeSitAnParUi,{ 'attr' : {'class':'form-control col-md-7 col-xs-12'} })}}
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    {{ form_errors(form.anneeSitAnParUi)}}
                                </li>
                            </ul>
                        </div>
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                {{ form_label(form.valeurCible,\"Valeur cible\") }}
                            </div>
                            <div class=\"col-sm-3\">
                                {{ form_widget(form.valeurCible,{ 'attr' : {'class':'form-control col-md-7 col-xs-12'} })}}
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    {{ form_errors(form.valeurCible)}}
                                </li>
                            </ul>
                        </div>
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                {{ form_label(form.realGlobSitAnParUi,\"Réalisation globale\") }}
                            </div>
                            <div class=\"col-sm-3\">
                                {{ form_widget(form.realGlobSitAnParUi,{ 'attr' : {'class':'form-control col-md-7 col-xs-12'} })}}
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    {{ form_errors(form.realGlobSitAnParUi)}}
                                </li>
                            </ul>
                        </div>
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                {{ form_label(form.realisationCumule,\"Réalisation cumulée\") }}
                            </div>
                            <div class=\"col-sm-3\">
                                {{ form_widget(form.realisationCumule,{ 'attr' : {'class':'form-control col-md-7 col-xs-12'} })}}
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    {{ form_errors(form.realisationCumule)}}
                                </li>
                            </ul>
                        </div>
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                {{ form_label(form.ecartAnnee,\"Ecart année\") }}
                            </div>
                            <div class=\"col-sm-3\">
                                {{ form_widget(form.ecartAnnee,{ 'attr' : {'class':'form-control col-md-7 col-xs-12'} })}}
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    {{ form_errors(form.ecartAnnee)}}
                                </li>
                            </ul>
                        </div>
                        <div class=\"ln_solid\"></div>
                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                {{ form_widget(form.save) }}
                                <a href=\"{{ path('projet_descriptif_activite_situation_annuelle_liste',{'idActivite': activite.id ,'idDescriptifParUi': descriptifParUi.id }) }}\">
                                    <button type=\"button\" class=\"btn btn-success\" >Retour</button>
                                </a>
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

{% endblock %}", "ProjetBundle:SituationDescriptifActivite:modifier.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/SituationDescriptifActivite/modifier.html.twig");
    }
}
