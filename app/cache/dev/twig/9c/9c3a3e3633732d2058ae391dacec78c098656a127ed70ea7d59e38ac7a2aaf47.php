<?php

/* ProjetBundle:Objectif:liste.html.twig */
class __TwigTemplate_0b71fb88346bda5690fdb12992f3d67a0c6722b801a3466591059c53f257dc11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "ProjetBundle:Objectif:liste.html.twig", 1);
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
        $__internal_ad6febdc39d42e1c5b391c292cd726fda648ada808b48396b3b8756d345cc380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6febdc39d42e1c5b391c292cd726fda648ada808b48396b3b8756d345cc380->enter($__internal_ad6febdc39d42e1c5b391c292cd726fda648ada808b48396b3b8756d345cc380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Objectif:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad6febdc39d42e1c5b391c292cd726fda648ada808b48396b3b8756d345cc380->leave($__internal_ad6febdc39d42e1c5b391c292cd726fda648ada808b48396b3b8756d345cc380_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5b165a4c0b4542baacf7a975f1a37dc9552aaefb3b362af782dee5a1f676cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b165a4c0b4542baacf7a975f1a37dc9552aaefb3b362af782dee5a1f676cb8->enter($__internal_c5b165a4c0b4542baacf7a975f1a37dc9552aaefb3b362af782dee5a1f676cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " objectifs ";
        
        $__internal_c5b165a4c0b4542baacf7a975f1a37dc9552aaefb3b362af782dee5a1f676cb8->leave($__internal_c5b165a4c0b4542baacf7a975f1a37dc9552aaefb3b362af782dee5a1f676cb8_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d83cdfb68d9635b5ae05c6d638a74be42b3a02252d628ab24572688a8234af2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83cdfb68d9635b5ae05c6d638a74be42b3a02252d628ab24572688a8234af2f->enter($__internal_d83cdfb68d9635b5ae05c6d638a74be42b3a02252d628ab24572688a8234af2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_d83cdfb68d9635b5ae05c6d638a74be42b3a02252d628ab24572688a8234af2f->leave($__internal_d83cdfb68d9635b5ae05c6d638a74be42b3a02252d628ab24572688a8234af2f_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_0c760ff1b1a6d5c2acc6fa2f14e373c4ba8247d0053bd4ff68beb124dc6b6b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c760ff1b1a6d5c2acc6fa2f14e373c4ba8247d0053bd4ff68beb124dc6b6b5f->enter($__internal_0c760ff1b1a6d5c2acc6fa2f14e373c4ba8247d0053bd4ff68beb124dc6b6b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb\">
                    <ol class=\"breadcrumb row\">
                        <li><a href=\"\">Acceuil</a></li>
                        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_homepage");
        echo "\">Projet</a></li>
                        <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index", array("id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")))), "html", null, true);
        echo "\">Descriptif</a></li>
                        <li ><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_liste", array("idDescriptifProjet" => (isset($context["idDescriptifProjet"]) ? $context["idDescriptifProjet"] : $this->getContext($context, "idDescriptifProjet")), "idDescriptifParUi" => $this->getAttribute((isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "id", array()))), "html", null, true);
        echo "\">Situation annuelle</a></li>
                        <li class=\"active\">Objectifs</li>
                    </ol>
                </ol>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"dashboard_graph\">
                    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_objectif_ajouter", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "idDescriptifProjet" => (isset($context["idDescriptifProjet"]) ? $context["idDescriptifProjet"] : $this->getContext($context, "idDescriptifProjet")), "idSituationAnnuelle" => $this->getAttribute((isset($context["situationAnnuelle"]) ? $context["situationAnnuelle"] : $this->getContext($context, "situationAnnuelle")), "id", array()))), "html", null, true);
        echo "\">
                        <button class=\"btn btn-primary pull-left\" id=\"ajouterGroup\">Ajouter un objectif</button>
                    </a>
                    <div class=\"x_panel\">
                        <div class=\"col-sm-12\">
                            <table id=\"objectifTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
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
        $context['_seq'] = twig_ensure_traversable((isset($context["objectifs"]) ? $context["objectifs"] : $this->getContext($context, "objectifs")));
        foreach ($context['_seq'] as $context["_key"] => $context["objectif"]) {
            // line 40
            echo "                                    <tr>
                                         <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["objectif"], "id", array()), "html", null, true);
            echo "</td>
                                         <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["objectif"], "valeur", array()), "html", null, true);
            echo "</td>
                                         <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["objectif"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                        <td >
                                        <div class=\"btn-group\">
                                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_objectif_modifier", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "idDescriptifProjet" => (isset($context["idDescriptifProjet"]) ? $context["idDescriptifProjet"] : $this->getContext($context, "idDescriptifProjet")), "idSituationAnnuelle" => $this->getAttribute((isset($context["situationAnnuelle"]) ? $context["situationAnnuelle"] : $this->getContext($context, "situationAnnuelle")), "id", array()), "idObjectif" => $this->getAttribute($context["objectif"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>                                                                                        
                                            <a>
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["objectif"], "id", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_objectif_supprimer", array("projet_id" =>             // line 73
(isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "idDescriptifProjet" =>             // line 74
(isset($context["idDescriptifProjet"]) ? $context["idDescriptifProjet"] : $this->getContext($context, "idDescriptifProjet")), "idSituationAnnuelle" =>             // line 75
(isset($context["idSituationAnnuelle"]) ? $context["idSituationAnnuelle"] : $this->getContext($context, "idSituationAnnuelle")))), "html", null, true);
            // line 76
            echo "\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idObjectif\" name=\"idObjectif\" value=\"\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objectif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
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
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_liste", array("idDescriptifProjet" => (isset($context["idDescriptifProjet"]) ? $context["idDescriptifProjet"] : $this->getContext($context, "idDescriptifProjet")), "idDescriptifParUi" => $this->getAttribute((isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "id", array()))), "html", null, true);
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
        
        $__internal_0c760ff1b1a6d5c2acc6fa2f14e373c4ba8247d0053bd4ff68beb124dc6b6b5f->leave($__internal_0c760ff1b1a6d5c2acc6fa2f14e373c4ba8247d0053bd4ff68beb124dc6b6b5f_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e92a4e929be0697c70ee396db0bb44517fda96f9cb452b5022a861819127b26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92a4e929be0697c70ee396db0bb44517fda96f9cb452b5022a861819127b26a->enter($__internal_e92a4e929be0697c70ee396db0bb44517fda96f9cb452b5022a861819127b26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>  
    <script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>    
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$('#objectifTable').dataTable();

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
                \$('#idObjectif').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
";
        
        $__internal_e92a4e929be0697c70ee396db0bb44517fda96f9cb452b5022a861819127b26a->leave($__internal_e92a4e929be0697c70ee396db0bb44517fda96f9cb452b5022a861819127b26a_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Objectif:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 116,  246 => 115,  242 => 114,  238 => 113,  233 => 112,  227 => 111,  209 => 99,  197 => 89,  179 => 76,  177 => 75,  176 => 74,  175 => 73,  174 => 72,  151 => 52,  142 => 46,  136 => 43,  132 => 42,  128 => 41,  125 => 40,  121 => 39,  105 => 26,  93 => 17,  89 => 16,  85 => 15,  77 => 9,  71 => 8,  62 => 5,  57 => 4,  51 => 3,  37 => 2,  11 => 1,);
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
{% block title %} {{parent()}} objectifs {% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link href=\"{{asset('vendors/select2/dist/css/select2.min.css')}}\" rel=\"stylesheet\">
{% endblock %}

{% block content %}
    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb\">
                    <ol class=\"breadcrumb row\">
                        <li><a href=\"\">Acceuil</a></li>
                        <li><a href=\"{{ path('projet_homepage') }}\">Projet</a></li>
                        <li><a href=\"{{ path('projet_index',{'id':projet_id}) }}\">Descriptif</a></li>
                        <li ><a href=\"{{ path('projet_descriptif_situation_annuelle_liste',{'idDescriptifProjet': idDescriptifProjet, 'idDescriptifParUi' : descriptifParUi.id}) }}\">Situation annuelle</a></li>
                        <li class=\"active\">Objectifs</li>
                    </ol>
                </ol>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"dashboard_graph\">
                    <a href=\"{{ path('projet_descriptif_situation_annuelle_objectif_ajouter',{'projet_id' : projet_id ,'idDescriptifProjet': idDescriptifProjet ,'idSituationAnnuelle': situationAnnuelle.id }) }}\">
                        <button class=\"btn btn-primary pull-left\" id=\"ajouterGroup\">Ajouter un objectif</button>
                    </a>
                    <div class=\"x_panel\">
                        <div class=\"col-sm-12\">
                            <table id=\"objectifTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                    <th>#</th>
                                    <th>Valeur</th>    
                                    <th>Date</th>
                                    <th style=\"width:10%;\">Actions</th>
                                </thead>
                                <tbody>
                                    {% for objectif in objectifs %}
                                    <tr>
                                         <td>{{objectif.id}}</td>
                                         <td>{{objectif.valeur}}</td>
                                         <td>{{objectif.date|date('d/m/Y')}}</td>
                                        <td >
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('projet_descriptif_situation_annuelle_objectif_modifier',{'projet_id' : projet_id ,'idDescriptifProjet': idDescriptifProjet ,'idSituationAnnuelle': situationAnnuelle.id ,'idObjectif':objectif.id}) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>                                                                                        
                                            <a>
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ objectif.id }}\">
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
                                                        <form action=\"{{ path('projet_descriptif_situation_annuelle_objectif_supprimer',{
                                                        'projet_id' : projet_id,
                                                            'idDescriptifProjet': idDescriptifProjet,
                                                            'idSituationAnnuelle': idSituationAnnuelle
                                                        }) }}\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idObjectif\" name=\"idObjectif\" value=\"\">
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
                            <a href=\"{{ path('projet_descriptif_situation_annuelle_liste',{'idDescriptifProjet': idDescriptifProjet, 'idDescriptifParUi' : descriptifParUi.id}) }}\">
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
            \$('#objectifTable').dataTable();

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
                \$('#idObjectif').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
{% endblock %}", "ProjetBundle:Objectif:liste.html.twig", "/opt/lampp/htdocs/ssei-master/src/ProjetBundle/Resources/views/Objectif/liste.html.twig");
    }
}
