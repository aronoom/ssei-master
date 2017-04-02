<?php

/* ProjetBundle:SituationDescriptifActivite:liste.html.twig */
class __TwigTemplate_2710cd12c7dc2f79c4515e7b7d2ca39f86ff2c7e4d2533ba42985eb8394ea7b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "ProjetBundle:SituationDescriptifActivite:liste.html.twig", 1);
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
        $__internal_be4ef8479fdb7a04720ed3504ba95dee473fb81fecb120b50e1af4da9fa44eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4ef8479fdb7a04720ed3504ba95dee473fb81fecb120b50e1af4da9fa44eff->enter($__internal_be4ef8479fdb7a04720ed3504ba95dee473fb81fecb120b50e1af4da9fa44eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:SituationDescriptifActivite:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be4ef8479fdb7a04720ed3504ba95dee473fb81fecb120b50e1af4da9fa44eff->leave($__internal_be4ef8479fdb7a04720ed3504ba95dee473fb81fecb120b50e1af4da9fa44eff_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_493b2766566ec7a58f0fc776d6bbaa26e71fda3fde871ec7d2351dae0e881c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493b2766566ec7a58f0fc776d6bbaa26e71fda3fde871ec7d2351dae0e881c80->enter($__internal_493b2766566ec7a58f0fc776d6bbaa26e71fda3fde871ec7d2351dae0e881c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Situation annuelle ";
        
        $__internal_493b2766566ec7a58f0fc776d6bbaa26e71fda3fde871ec7d2351dae0e881c80->leave($__internal_493b2766566ec7a58f0fc776d6bbaa26e71fda3fde871ec7d2351dae0e881c80_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b4eaa59fba97007720a3a3f94827cef1c0df8344ea07724c03e775bc8123fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4eaa59fba97007720a3a3f94827cef1c0df8344ea07724c03e775bc8123fe7->enter($__internal_4b4eaa59fba97007720a3a3f94827cef1c0df8344ea07724c03e775bc8123fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_4b4eaa59fba97007720a3a3f94827cef1c0df8344ea07724c03e775bc8123fe7->leave($__internal_4b4eaa59fba97007720a3a3f94827cef1c0df8344ea07724c03e775bc8123fe7_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_e6015a3057f78cbb1882970d7283a1f027f98c751df5a37fe9272b74dea82d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6015a3057f78cbb1882970d7283a1f027f98c751df5a37fe9272b74dea82d5a->enter($__internal_e6015a3057f78cbb1882970d7283a1f027f98c751df5a37fe9272b74dea82d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_lister_activite", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => $this->getAttribute($this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "composante", array()), "id", array()))), "html", null, true);
        echo "\"> Activité </a></li>
                    <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_lister", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => $this->getAttribute($this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "composante", array()), "id", array()), "act_id" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()))), "html", null, true);
        echo "\"> Descriptif </a></li>
                    <li class=\"active\"> Situation annuelle </li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_situation_annuelle_ajouter", array("idActivite" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()), "idDescriptifParUi" => $this->getAttribute(        // line 24
(isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "id", array()))), "html", null, true);
        echo "\">
            <button class=\"btn btn-primary pull-left\" id=\"ajouterGroup\">Ajouter une situation annuelle</button>
        </a>
        <div class=\"clearfix\"></div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"dashboard_graph\">

                    <div class=\"x_panel\">
                        <div class=\"x_title\">
                            <h2>Liste des situations annuelles du descriptif ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "id", array()), "html", null, true);
        echo " de l'activité ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "codeActivite", array()), "html", null, true);
        echo "</h2>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"col-sm-12\">
                            <table id=\"situationAnnuelleTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                    <th>#</th>
                                    <th>Année</th>
                                    <th>Valeur cible</th>
                                    <th>Réalisation globale</th>
                                    <th>Réalisation cumulée</th>
                                    <th>Ecart année</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["situationAnnuelles"]) ? $context["situationAnnuelles"] : $this->getContext($context, "situationAnnuelles")));
        foreach ($context['_seq'] as $context["_key"] => $context["situation"]) {
            // line 50
            echo "                                    <tr>
                                        <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "id", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "anneeSitAnParUi", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "valeurCible", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "realGlobSitAnParUi", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "realisationCumule", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "ecartAnnee", array()), "html", null, true);
            echo "</td>
                                        <td >
                                        <div class=\"btn-group\">
                                            <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_situation_annuelle_objectif_liste", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")), "act_id" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()), "idDescriptifParUi" => $this->getAttribute((isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "id", array()), "idSituationAnnuelle" => $this->getAttribute($context["situation"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Objectif\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-flag\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_situation_annuelle_realisation_liste", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")), "act_id" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()), "idDescriptifParUi" => $this->getAttribute((isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "id", array()), "idSituationAnnuelle" => $this->getAttribute($context["situation"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Réalisation\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-unchecked\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_situation_annuelle_modifier", array("idActivite" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()), "idDescriptifParUi" => $this->getAttribute(            // line 70
(isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "id", array()), "idSituationAnnuelle" => $this->getAttribute(            // line 71
$context["situation"], "id", array()))), "html", null, true);
            // line 72
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["situation"], "id", array()), "html", null, true);
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
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_situation_annuelle_supprimer", array("idActivite" => $this->getAttribute(            // line 99
(isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()))), "html", null, true);
            // line 100
            echo "\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idSituation\" name=\"idSituation\" value=\"\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['situation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                                </tbody>
                                <tfoot>
                                    <th>#</th>
                                    <th>Année</th>
                                    <th>Valeur cible</th>
                                    <th>Réalisation globale</th>
                                    <th>Réalisation cumulée</th>
                                    <th>Ecart année</th>
                                    <th>Actions</th>
                                </tfoot>
                            </table>
                        </div>
                        <div class=\"clearfix\">
                            <a href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_lister", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => $this->getAttribute($this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "composante", array()), "id", array()), "act_id" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()))), "html", null, true);
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
        
        $__internal_e6015a3057f78cbb1882970d7283a1f027f98c751df5a37fe9272b74dea82d5a->leave($__internal_e6015a3057f78cbb1882970d7283a1f027f98c751df5a37fe9272b74dea82d5a_prof);

    }

    // line 138
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a8a270961a50756f7eaf980c209f98eaf4465a37d23965e302c0c5191a46879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8a270961a50756f7eaf980c209f98eaf4465a37d23965e302c0c5191a46879->enter($__internal_9a8a270961a50756f7eaf980c209f98eaf4465a37d23965e302c0c5191a46879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>  
    <script type=\"text/javascript\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>    
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$('#situationAnnuelleTable').dataTable();

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
                \$('#idSituation').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
";
        
        $__internal_9a8a270961a50756f7eaf980c209f98eaf4465a37d23965e302c0c5191a46879->leave($__internal_9a8a270961a50756f7eaf980c209f98eaf4465a37d23965e302c0c5191a46879_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:SituationDescriptifActivite:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 143,  296 => 142,  292 => 141,  288 => 140,  283 => 139,  277 => 138,  259 => 126,  244 => 113,  226 => 100,  224 => 99,  223 => 98,  200 => 78,  192 => 72,  190 => 71,  189 => 70,  188 => 69,  180 => 64,  172 => 59,  166 => 56,  162 => 55,  158 => 54,  154 => 53,  150 => 52,  146 => 51,  143 => 50,  139 => 49,  119 => 34,  106 => 24,  105 => 23,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  77 => 9,  71 => 8,  62 => 5,  57 => 4,  51 => 3,  37 => 2,  11 => 1,);
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
{% block title %} {{parent()}} Situation annuelle {% endblock %}
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
                    <li><a href=\"{{ path('projet_index', {'id': projet_id }) }}\"> Composante </a></li>
                    <li><a href=\"{{ path('projet_lister_activite', {'projet_id': projet_id, 'comp_id': activite.composante.id}) }}\"> Activité </a></li>
                    <li><a href=\"{{ path('projet_descriptif_activite_lister', {'projet_id': projet_id, 'comp_id': activite.composante.id ,'act_id':activite.id}) }}\"> Descriptif </a></li>
                    <li class=\"active\"> Situation annuelle </li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <a href=\"{{ path('projet_descriptif_activite_situation_annuelle_ajouter',{'idActivite': activite.id ,
            'idDescriptifParUi': descriptifParUi.id }) }}\">
            <button class=\"btn btn-primary pull-left\" id=\"ajouterGroup\">Ajouter une situation annuelle</button>
        </a>
        <div class=\"clearfix\"></div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"dashboard_graph\">

                    <div class=\"x_panel\">
                        <div class=\"x_title\">
                            <h2>Liste des situations annuelles du descriptif {{ descriptifParUi.id }} de l'activité {{ activite.codeActivite }}</h2>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"col-sm-12\">
                            <table id=\"situationAnnuelleTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                    <th>#</th>
                                    <th>Année</th>
                                    <th>Valeur cible</th>
                                    <th>Réalisation globale</th>
                                    <th>Réalisation cumulée</th>
                                    <th>Ecart année</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    {% for situation in situationAnnuelles %}
                                    <tr>
                                        <td>{{situation.id}}</td>
                                        <td>{{situation.anneeSitAnParUi}}</td>
                                        <td>{{situation.valeurCible}}</td>
                                        <td>{{situation.realGlobSitAnParUi}}</td>
                                        <td>{{situation.realisationCumule}}</td>
                                        <td>{{situation.ecartAnnee}}</td>
                                        <td >
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('projet_descriptif_activite_situation_annuelle_objectif_liste',{'projet_id': projet_id ,'comp_id' : comp_id,'act_id':activite.id ,'idDescriptifParUi': descriptifParUi.id ,'idSituationAnnuelle' : situation.id }) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Objectif\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-flag\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a href=\"{{ path('projet_descriptif_activite_situation_annuelle_realisation_liste',{'projet_id': projet_id ,'comp_id' : comp_id,'act_id':activite.id ,'idDescriptifParUi': descriptifParUi.id ,'idSituationAnnuelle' : situation.id }) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Réalisation\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-unchecked\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a href=\"{{ path('projet_descriptif_activite_situation_annuelle_modifier',{'idActivite' : activite.id ,
                                            'idDescriptifParUi' : descriptifParUi.id,
                                            'idSituationAnnuelle': situation.id
                                             }) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ situation.id }}\">
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
                                                        <form action=\"{{ path('projet_descriptif_activite_situation_annuelle_supprimer',{
                                                        'idActivite' : activite.id
                                                        }) }}\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idSituation\" name=\"idSituation\" value=\"\">
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
                                    <th>Année</th>
                                    <th>Valeur cible</th>
                                    <th>Réalisation globale</th>
                                    <th>Réalisation cumulée</th>
                                    <th>Ecart année</th>
                                    <th>Actions</th>
                                </tfoot>
                            </table>
                        </div>
                        <div class=\"clearfix\">
                            <a href=\"{{ path('projet_descriptif_activite_lister',{ 'projet_id': projet_id, 'comp_id': activite.composante.id,'act_id': activite.id }) }}\">
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
            \$('#situationAnnuelleTable').dataTable();

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
                \$('#idSituation').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
{% endblock %}", "ProjetBundle:SituationDescriptifActivite:liste.html.twig", "/opt/lampp/htdocs/ssei-master/src/ProjetBundle/Resources/views/SituationDescriptifActivite/liste.html.twig");
    }
}
