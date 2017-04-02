<?php

/* ProjetBundle:RealisationDA:liste.html.twig */
class __TwigTemplate_1ac79b0c8d6b515f88723c54ded4f3fbc902e87b4385e3fde3829e6a10f5708a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "ProjetBundle:RealisationDA:liste.html.twig", 1);
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
        $__internal_5e5f171f64ce01d63d713a7edb8e60d11899d78a07e2c1be1491de71530e56e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5f171f64ce01d63d713a7edb8e60d11899d78a07e2c1be1491de71530e56e7->enter($__internal_5e5f171f64ce01d63d713a7edb8e60d11899d78a07e2c1be1491de71530e56e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:RealisationDA:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e5f171f64ce01d63d713a7edb8e60d11899d78a07e2c1be1491de71530e56e7->leave($__internal_5e5f171f64ce01d63d713a7edb8e60d11899d78a07e2c1be1491de71530e56e7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca6a3b6d4a032bb141051261293665170a79e9d305da668e1c04a9b77ce09886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6a3b6d4a032bb141051261293665170a79e9d305da668e1c04a9b77ce09886->enter($__internal_ca6a3b6d4a032bb141051261293665170a79e9d305da668e1c04a9b77ce09886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Réalisations ";
        
        $__internal_ca6a3b6d4a032bb141051261293665170a79e9d305da668e1c04a9b77ce09886->leave($__internal_ca6a3b6d4a032bb141051261293665170a79e9d305da668e1c04a9b77ce09886_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_72a8e27e1583b16cf09780e263e5f45366d68e8d875d421faa0450cce87711b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a8e27e1583b16cf09780e263e5f45366d68e8d875d421faa0450cce87711b7->enter($__internal_72a8e27e1583b16cf09780e263e5f45366d68e8d875d421faa0450cce87711b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_72a8e27e1583b16cf09780e263e5f45366d68e8d875d421faa0450cce87711b7->leave($__internal_72a8e27e1583b16cf09780e263e5f45366d68e8d875d421faa0450cce87711b7_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_4041fb3039f50f98dfa16061cc4cf798a19798d007535c84a1f3bbb42d6251ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4041fb3039f50f98dfa16061cc4cf798a19798d007535c84a1f3bbb42d6251ac->enter($__internal_4041fb3039f50f98dfa16061cc4cf798a19798d007535c84a1f3bbb42d6251ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb row\">
                    <li><a href=\"#\"> Acceuil </a></li>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_lister_activite", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["act_id"]) ? $context["act_id"] : $this->getContext($context, "act_id")))), "html", null, true);
        echo "\"> Activité </a></li>
                    <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_lister", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")), "act_id" => (isset($context["act_id"]) ? $context["act_id"] : $this->getContext($context, "act_id")))), "html", null, true);
        echo "\"> Descriptif </a></li>
                    <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_situation_annuelle_liste", array("idActivite" => (isset($context["act_id"]) ? $context["act_id"] : $this->getContext($context, "act_id")), "idDescriptifParUi" => (isset($context["idDescriptifParUi"]) ? $context["idDescriptifParUi"] : $this->getContext($context, "idDescriptifParUi")))), "html", null, true);
        echo "\">Situation annuelle</a></li>
                    <li class=\"active\"> Realisation</li>
                </ol>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"dashboard_graph\">
                    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_situation_annuelle_realisation_ajouter", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")), "act_id" => (isset($context["act_id"]) ? $context["act_id"] : $this->getContext($context, "act_id")), "idDescriptifParUi" => (isset($context["idDescriptifParUi"]) ? $context["idDescriptifParUi"] : $this->getContext($context, "idDescriptifParUi")), "idSituationAnnuelle" => $this->getAttribute((isset($context["situationAnnuelle"]) ? $context["situationAnnuelle"] : $this->getContext($context, "situationAnnuelle")), "id", array()))), "html", null, true);
        echo "\">
                        <button class=\"btn btn-primary pull-left\" id=\"ajouterGroup\">Ajouter une réalisations trimestrielle</button>
                    </a>
                    <div class=\"x_panel\">
                        <div class=\"col-sm-12\">
                            <table id=\"realisationTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                    <th>#</th>
                                    <th>Valeur</th>    
                                    <th>Date</th>
                                    <th style=\"width:10%;\">Actions</th>
                                </thead>
                                <tbody>
                                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["realisations"]) ? $context["realisations"] : $this->getContext($context, "realisations")));
        foreach ($context['_seq'] as $context["_key"] => $context["realisation"]) {
            // line 40
            echo "                                    <tr>
                                         <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisation"], "id", array()), "html", null, true);
            echo "</td>
                                         <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisation"], "valeur", array()), "html", null, true);
            echo "</td>
                                         <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["realisation"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                        <td >
                                        <div class=\"btn-group\">
                                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_situation_annuelle_realisation_modifier", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")), "act_id" => (isset($context["act_id"]) ? $context["act_id"] : $this->getContext($context, "act_id")), "idDescriptifParUi" => (isset($context["idDescriptifParUi"]) ? $context["idDescriptifParUi"] : $this->getContext($context, "idDescriptifParUi")), "idSituationAnnuelle" => $this->getAttribute((isset($context["situationAnnuelle"]) ? $context["situationAnnuelle"] : $this->getContext($context, "situationAnnuelle")), "id", array()), "idRealisation" => $this->getAttribute($context["realisation"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>                                                                                        
                                            <a>
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisation"], "id", array()), "html", null, true);
            echo "\">
                                                    <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                        </div>
                                        <!-- -->
                                        <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modalDelete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                            <div class=\"modal-dialog modal-sm\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                                        </button>
                                                        <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <h4>
                                                            <p>Voulez-vous vraiment supprimer?</p>
                                                        </h4>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <form action=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_situation_annuelle_realisation_supprimer", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")), "act_id" => (isset($context["act_id"]) ? $context["act_id"] : $this->getContext($context, "act_id")), "idDescriptifParUi" => (isset($context["idDescriptifParUi"]) ? $context["idDescriptifParUi"] : $this->getContext($context, "idDescriptifParUi")), "idSituationAnnuelle" => $this->getAttribute((isset($context["situationAnnuelle"]) ? $context["situationAnnuelle"] : $this->getContext($context, "situationAnnuelle")), "id", array()))), "html", null, true);
            echo "\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idRealisation\" name=\"idRealisation\" value=\"\">
                                                            <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -->
                                    </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['realisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                                </tbody>
                                <tfoot>
                                    <th>#</th>
                                    <th>Valeur</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tfoot>
                            </table>
                        </div>
                        <div class=\"clearfix\">
                            <a href=\"{!{ path('projet_descriptif_situation_annuelle_liste',{'idDescriptifProjet': ,'idDescriptifParUi': situationAnnuelle.id })}!}\">
                                <button class=\"btn btn-success\">Retour</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>

";
        
        $__internal_4041fb3039f50f98dfa16061cc4cf798a19798d007535c84a1f3bbb42d6251ac->leave($__internal_4041fb3039f50f98dfa16061cc4cf798a19798d007535c84a1f3bbb42d6251ac_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_386666c4f48c2a83a077d5371c891149af5569254ceb0b495abfbb7853838d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386666c4f48c2a83a077d5371c891149af5569254ceb0b495abfbb7853838d4e->enter($__internal_386666c4f48c2a83a077d5371c891149af5569254ceb0b495abfbb7853838d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>  
    <script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>    
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$('#realisationTable').dataTable();

            \$(\".select2_multiple\").select2({
                maximumSelectionLength: 10,
                placeholder : \"Veuillez ajouter\",
                allowClear: true,
            });
            \$('select').toggleClass('required');

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idRealisation').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
";
        
        $__internal_386666c4f48c2a83a077d5371c891149af5569254ceb0b495abfbb7853838d4e->leave($__internal_386666c4f48c2a83a077d5371c891149af5569254ceb0b495abfbb7853838d4e_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:RealisationDA:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 112,  245 => 111,  241 => 110,  237 => 109,  232 => 108,  226 => 107,  199 => 85,  180 => 72,  157 => 52,  148 => 46,  142 => 43,  138 => 42,  134 => 41,  131 => 40,  127 => 39,  111 => 26,  100 => 18,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  77 => 9,  71 => 8,  62 => 5,  57 => 4,  51 => 3,  37 => 2,  11 => 1,);
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
{% block title %} {{parent()}} Réalisations {% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link href=\"{{asset('vendors/select2/dist/css/select2.min.css')}}\" rel=\"stylesheet\">
{% endblock %}

{% block content %}
    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb row\">
                    <li><a href=\"#\"> Acceuil </a></li>
                    <li><a href=\"{{ path('projet_homepage') }}\"> Projet </a></li>
                    <li><a href=\"{{ path('projet_index', {'id':projet_id }) }}\"> Composante </a></li>
                    <li><a href=\"{{ path('projet_lister_activite', {'projet_id': projet_id, 'comp_id': act_id }) }}\"> Activité </a></li>
                    <li><a href=\"{{ path('projet_descriptif_activite_lister', {'projet_id': projet_id, 'comp_id': comp_id ,'act_id': act_id }) }}\"> Descriptif </a></li>
                    <li><a href=\"{{ path('projet_descriptif_activite_situation_annuelle_liste',{'idActivite': act_id ,'idDescriptifParUi': idDescriptifParUi})}}\">Situation annuelle</a></li>
                    <li class=\"active\"> Realisation</li>
                </ol>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"dashboard_graph\">
                    <a href=\"{{ path('projet_descriptif_activite_situation_annuelle_realisation_ajouter',{'projet_id': projet_id,'comp_id': comp_id , 'act_id': act_id,'idDescriptifParUi': idDescriptifParUi,'idSituationAnnuelle':situationAnnuelle.id}) }}\">
                        <button class=\"btn btn-primary pull-left\" id=\"ajouterGroup\">Ajouter une réalisations trimestrielle</button>
                    </a>
                    <div class=\"x_panel\">
                        <div class=\"col-sm-12\">
                            <table id=\"realisationTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                    <th>#</th>
                                    <th>Valeur</th>    
                                    <th>Date</th>
                                    <th style=\"width:10%;\">Actions</th>
                                </thead>
                                <tbody>
                                    {% for realisation in realisations %}
                                    <tr>
                                         <td>{{realisation.id}}</td>
                                         <td>{{realisation.valeur}}</td>
                                         <td>{{realisation.date|date('d/m/Y')}}</td>
                                        <td >
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('projet_descriptif_activite_situation_annuelle_realisation_modifier',{'projet_id': projet_id,'comp_id': comp_id , 'act_id': act_id,'idDescriptifParUi': idDescriptifParUi,'idSituationAnnuelle':situationAnnuelle.id,'idRealisation':realisation.id}) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>                                                                                        
                                            <a>
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ realisation.id }}\">
                                                    <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                        </div>
                                        <!-- -->
                                        <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modalDelete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
                                            <div class=\"modal-dialog modal-sm\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                                        </button>
                                                        <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <h4>
                                                            <p>Voulez-vous vraiment supprimer?</p>
                                                        </h4>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <form action=\"{{ path('projet_descriptif_activite_situation_annuelle_realisation_supprimer',{'projet_id': projet_id,'comp_id': comp_id , 'act_id': act_id,'idDescriptifParUi': idDescriptifParUi,'idSituationAnnuelle':situationAnnuelle.id}) }}\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idRealisation\" name=\"idRealisation\" value=\"\">
                                                            <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -->
                                    </td>
                                    </tr>
                                    {% endfor %}
                                </tbody>
                                <tfoot>
                                    <th>#</th>
                                    <th>Valeur</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tfoot>
                            </table>
                        </div>
                        <div class=\"clearfix\">
                            <a href=\"{!{ path('projet_descriptif_situation_annuelle_liste',{'idDescriptifProjet': ,'idDescriptifParUi': situationAnnuelle.id })}!}\">
                                <button class=\"btn btn-success\">Retour</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    {{parent()}}    
    <script type=\"text/javascript\" src=\"{{asset('js/dataTables.bootstrap.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/datatables.min.js')}}\"></script>  
    <script type=\"text/javascript\" src=\"{{asset('js/bootstrap_dropdown_6.js')}}\"></script>    
    <script src=\"{{asset('vendors/select2/dist/js/select2.full.min.js')}}\"></script>
    <script>
        \$(document).ready(function() {
            \$('#realisationTable').dataTable();

            \$(\".select2_multiple\").select2({
                maximumSelectionLength: 10,
                placeholder : \"Veuillez ajouter\",
                allowClear: true,
            });
            \$('select').toggleClass('required');

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idRealisation').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
{% endblock %}", "ProjetBundle:RealisationDA:liste.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/RealisationDA/liste.html.twig");
    }
}
