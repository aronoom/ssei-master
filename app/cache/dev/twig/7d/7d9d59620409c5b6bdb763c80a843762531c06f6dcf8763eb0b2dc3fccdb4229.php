<?php

/* ProjetBundle:Realisation:liste.html.twig */
class __TwigTemplate_0aea333b61ca77a33774d3c20f0605c137b36d38c18815edd3813ce018878509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "ProjetBundle:Realisation:liste.html.twig", 1);
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
        $__internal_1bdbe4a15d612edab58ec215600e1f324d0570fcf0d04555a6b59b02b9606ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bdbe4a15d612edab58ec215600e1f324d0570fcf0d04555a6b59b02b9606ab6->enter($__internal_1bdbe4a15d612edab58ec215600e1f324d0570fcf0d04555a6b59b02b9606ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Realisation:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bdbe4a15d612edab58ec215600e1f324d0570fcf0d04555a6b59b02b9606ab6->leave($__internal_1bdbe4a15d612edab58ec215600e1f324d0570fcf0d04555a6b59b02b9606ab6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4149b311d8beb3f19b007d2ac6ae3e5f4fd9236c01bc3a550ea1ca1ce089367d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4149b311d8beb3f19b007d2ac6ae3e5f4fd9236c01bc3a550ea1ca1ce089367d->enter($__internal_4149b311d8beb3f19b007d2ac6ae3e5f4fd9236c01bc3a550ea1ca1ce089367d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Réalisations ";
        
        $__internal_4149b311d8beb3f19b007d2ac6ae3e5f4fd9236c01bc3a550ea1ca1ce089367d->leave($__internal_4149b311d8beb3f19b007d2ac6ae3e5f4fd9236c01bc3a550ea1ca1ce089367d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_42460f2efcd8180b168f02a1ffe6631805a5c447a9d97cbb08c99f162bf50751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42460f2efcd8180b168f02a1ffe6631805a5c447a9d97cbb08c99f162bf50751->enter($__internal_42460f2efcd8180b168f02a1ffe6631805a5c447a9d97cbb08c99f162bf50751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_42460f2efcd8180b168f02a1ffe6631805a5c447a9d97cbb08c99f162bf50751->leave($__internal_42460f2efcd8180b168f02a1ffe6631805a5c447a9d97cbb08c99f162bf50751_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_b91eb63b40a699a6566bb254b74b8ad5936f053c400aba632ceed9ebf3860579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91eb63b40a699a6566bb254b74b8ad5936f053c400aba632ceed9ebf3860579->enter($__internal_b91eb63b40a699a6566bb254b74b8ad5936f053c400aba632ceed9ebf3860579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb row\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_homepage");
        echo "\">Projet</a></li>
                    <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index", array("id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")))), "html", null, true);
        echo "\">Descriptif</a></li>
                    <li ><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_liste", array("idDescriptifProjet" => (isset($context["idDescriptifProjet"]) ? $context["idDescriptifProjet"] : $this->getContext($context, "idDescriptifProjet")), "idDescriptifParUi" => $this->getAttribute((isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "id", array()))), "html", null, true);
        echo "\">Situation annuelle</a></li>
                    <li class=\"active\">Réalisations</li>
                </ol>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"dashboard_graph\">
                    <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_realisation_ajouter", array("projet_id" =>         // line 25
(isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "idDescriptifProjet" =>         // line 26
(isset($context["idDescriptifProjet"]) ? $context["idDescriptifProjet"] : $this->getContext($context, "idDescriptifProjet")), "idSituationAnnuelle" => $this->getAttribute(        // line 27
(isset($context["situationAnnuelle"]) ? $context["situationAnnuelle"] : $this->getContext($context, "situationAnnuelle")), "id", array()))), "html", null, true);
        // line 28
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
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["realisations"]) ? $context["realisations"] : $this->getContext($context, "realisations")));
        foreach ($context['_seq'] as $context["_key"] => $context["realisation"]) {
            // line 42
            echo "                                    <tr>
                                         <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisation"], "id", array()), "html", null, true);
            echo "</td>
                                         <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisation"], "valeur", array()), "html", null, true);
            echo "</td>
                                         <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["realisation"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                        <td >
                                        <div class=\"btn-group\">
                                            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_realisation_modifier", array("projet_id" =>             // line 49
(isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "idDescriptifProjet" =>             // line 50
(isset($context["idDescriptifProjet"]) ? $context["idDescriptifProjet"] : $this->getContext($context, "idDescriptifProjet")), "idSituationAnnuelle" => $this->getAttribute(            // line 51
(isset($context["situationAnnuelle"]) ? $context["situationAnnuelle"] : $this->getContext($context, "situationAnnuelle")), "id", array()), "idRealisation" => $this->getAttribute(            // line 52
$context["realisation"], "id", array()))), "html", null, true);
            // line 53
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Objectif\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>                                                                                        
                                            <a>
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
            // line 59
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
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_realisation_supprimer", array("projet_id" =>             // line 80
(isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "idDescriptifProjet" =>             // line 81
(isset($context["idDescriptifProjet"]) ? $context["idDescriptifProjet"] : $this->getContext($context, "idDescriptifProjet")), "idSituationAnnuelle" =>             // line 82
(isset($context["idSituationAnnuelle"]) ? $context["idSituationAnnuelle"] : $this->getContext($context, "idSituationAnnuelle")))), "html", null, true);
            // line 83
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
        // line 96
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
                            <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_liste", array("idDescriptifProjet" =>         // line 107
(isset($context["idDescriptifProjet"]) ? $context["idDescriptifProjet"] : $this->getContext($context, "idDescriptifProjet")), "idDescriptifParUi" => $this->getAttribute(        // line 108
(isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "id", array()))), "html", null, true);
        // line 109
        echo "\">
                                <button class=\"btn btn-success\">Retour</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>

";
        
        $__internal_b91eb63b40a699a6566bb254b74b8ad5936f053c400aba632ceed9ebf3860579->leave($__internal_b91eb63b40a699a6566bb254b74b8ad5936f053c400aba632ceed9ebf3860579_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4994d8901e877fe115a9515de3706b7ae6f07d919e4dc74f23f11c5aa974c6cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4994d8901e877fe115a9515de3706b7ae6f07d919e4dc74f23f11c5aa974c6cf->enter($__internal_4994d8901e877fe115a9515de3706b7ae6f07d919e4dc74f23f11c5aa974c6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 122
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>  
    <script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>    
    <script src=\"";
        // line 126
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
        
        $__internal_4994d8901e877fe115a9515de3706b7ae6f07d919e4dc74f23f11c5aa974c6cf->leave($__internal_4994d8901e877fe115a9515de3706b7ae6f07d919e4dc74f23f11c5aa974c6cf_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Realisation:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 126,  256 => 125,  252 => 124,  248 => 123,  243 => 122,  237 => 121,  220 => 109,  218 => 108,  217 => 107,  216 => 106,  204 => 96,  186 => 83,  184 => 82,  183 => 81,  182 => 80,  181 => 79,  158 => 59,  150 => 53,  148 => 52,  147 => 51,  146 => 50,  145 => 49,  144 => 48,  138 => 45,  134 => 44,  130 => 43,  127 => 42,  123 => 41,  108 => 28,  106 => 27,  105 => 26,  104 => 25,  103 => 24,  92 => 16,  88 => 15,  84 => 14,  77 => 9,  71 => 8,  62 => 5,  57 => 4,  51 => 3,  37 => 2,  11 => 1,);
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
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a href=\"{{ path('projet_homepage') }}\">Projet</a></li>
                    <li><a href=\"{{ path('projet_index',{'id':projet_id}) }}\">Descriptif</a></li>
                    <li ><a href=\"{{ path('projet_descriptif_situation_annuelle_liste',{'idDescriptifProjet': idDescriptifProjet, 'idDescriptifParUi' : descriptifParUi.id}) }}\">Situation annuelle</a></li>
                    <li class=\"active\">Réalisations</li>
                </ol>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"dashboard_graph\">
                    <a href=\"{{ path('projet_descriptif_situation_annuelle_realisation_ajouter',{
                        'projet_id' : projet_id ,
                        'idDescriptifProjet': idDescriptifProjet ,
                        'idSituationAnnuelle': situationAnnuelle.id
                    }) }}\">
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
                                            <a href=\"{{ path('projet_descriptif_situation_annuelle_realisation_modifier',{
                                                'projet_id' : projet_id ,
                                                'idDescriptifProjet': idDescriptifProjet ,
                                                'idSituationAnnuelle': situationAnnuelle.id ,
                                                'idRealisation': realisation.id
                                            }) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Objectif\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
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
                                                        <form action=\"{{ path('projet_descriptif_situation_annuelle_realisation_supprimer',{
                                                            'projet_id' : projet_id,
                                                            'idDescriptifProjet': idDescriptifProjet,
                                                            'idSituationAnnuelle': idSituationAnnuelle
                                                        }) }}\" method=\"post\">
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
                            <a href=\"{{ path('projet_descriptif_situation_annuelle_liste',{
                                'idDescriptifProjet': idDescriptifProjet,
                                'idDescriptifParUi' : descriptifParUi.id
                            }) }}\">
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
{% endblock %}", "ProjetBundle:Realisation:liste.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/Realisation/liste.html.twig");
    }
}
