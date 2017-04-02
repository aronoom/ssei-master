<?php

/* IndicateurBundle:Periodicite:liste.html.twig */
class __TwigTemplate_765c211d70307be0d8445c8614cb5b678083c7cb937ca3bd0a021ed36557da2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "IndicateurBundle:Periodicite:liste.html.twig", 1);
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
        $__internal_fc85d373f744ac548a6f7b1d587b4580660ae2f1f2b46693487edf6c96a56782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc85d373f744ac548a6f7b1d587b4580660ae2f1f2b46693487edf6c96a56782->enter($__internal_fc85d373f744ac548a6f7b1d587b4580660ae2f1f2b46693487edf6c96a56782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicateurBundle:Periodicite:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc85d373f744ac548a6f7b1d587b4580660ae2f1f2b46693487edf6c96a56782->leave($__internal_fc85d373f744ac548a6f7b1d587b4580660ae2f1f2b46693487edf6c96a56782_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3283e3f38c625e380396d60b59d9027c54c15f977a4dc15a436d7f82b727780f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3283e3f38c625e380396d60b59d9027c54c15f977a4dc15a436d7f82b727780f->enter($__internal_3283e3f38c625e380396d60b59d9027c54c15f977a4dc15a436d7f82b727780f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Périodicités";
        
        $__internal_3283e3f38c625e380396d60b59d9027c54c15f977a4dc15a436d7f82b727780f->leave($__internal_3283e3f38c625e380396d60b59d9027c54c15f977a4dc15a436d7f82b727780f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67a4d2a8827384c06ea74f1d67250aa721728a47bdcdf61fdf6052e302917db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a4d2a8827384c06ea74f1d67250aa721728a47bdcdf61fdf6052e302917db7->enter($__internal_67a4d2a8827384c06ea74f1d67250aa721728a47bdcdf61fdf6052e302917db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_67a4d2a8827384c06ea74f1d67250aa721728a47bdcdf61fdf6052e302917db7->leave($__internal_67a4d2a8827384c06ea74f1d67250aa721728a47bdcdf61fdf6052e302917db7_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_e9d6db833e8d420629289e3b97b6485c5fd7c1fabe13a0b6676c2541279195d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d6db833e8d420629289e3b97b6485c5fd7c1fabe13a0b6676c2541279195d5->enter($__internal_e9d6db833e8d420629289e3b97b6485c5fd7c1fabe13a0b6676c2541279195d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Périodicités</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a >Admnistration</a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("periodicite_liste");
        echo "\">Périodicités</a></li>
                    <li class=\"active\">Liste des periodicites</li>
                </ol>
            </div>
        </div>
<div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"dashboard_graph\">
                <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("periodicite_ajouter");
        echo "\">
                    <button class=\"btn btn-primary pull-right\" id=\"ajouterGroup\">Ajouter une periodicite</button>
                </a>
                <div class=\" x_panel\">
                    <div class=\"col-sm-12\">
                        <table id=\"periodiciteTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Désignation de la periodicite</th>
                                <th style=\"width:10%;\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["periodicites"]) ? $context["periodicites"] : $this->getContext($context, "periodicites")));
        foreach ($context['_seq'] as $context["_key"] => $context["periodicite"]) {
            // line 37
            echo "                                <tr>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["periodicite"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["periodicite"], "libellePeriodicite", array()), "html", null, true);
            echo "</td>
                                    <td >
                                        <div class=\"btn-group\">
                                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("periodicite_modifier", array("id" => $this->getAttribute($context["periodicite"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["periodicite"], "id", array()), "html", null, true);
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
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("periodicite_supprimer");
            echo "\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idPeriodicite\" name=\"idPeriodicite\" value=\"\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['periodicite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Désignation de la periodicite</th>
                                <th style=\"width:10%;\">Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_e9d6db833e8d420629289e3b97b6485c5fd7c1fabe13a0b6676c2541279195d5->leave($__internal_e9d6db833e8d420629289e3b97b6485c5fd7c1fabe13a0b6676c2541279195d5_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_414c35c3f521e361092a7f55b6d101aed09ae828392521b43fa4d1d5142479e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414c35c3f521e361092a7f55b6d101aed09ae828392521b43fa4d1d5142479e5->enter($__internal_414c35c3f521e361092a7f55b6d101aed09ae828392521b43fa4d1d5142479e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>  
    <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lang.js"), "html", null, true);
        echo "\"></script>
    <script>
        var table = \$('#periodiciteTable').DataTable({
            language : lang
        });
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idPeriodicite').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
";
        
        $__internal_414c35c3f521e361092a7f55b6d101aed09ae828392521b43fa4d1d5142479e5->leave($__internal_414c35c3f521e361092a7f55b6d101aed09ae828392521b43fa4d1d5142479e5_prof);

    }

    public function getTemplateName()
    {
        return "IndicateurBundle:Periodicite:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 101,  220 => 100,  216 => 99,  212 => 98,  207 => 97,  201 => 96,  180 => 81,  161 => 68,  138 => 48,  129 => 42,  123 => 39,  119 => 38,  116 => 37,  112 => 36,  95 => 22,  84 => 14,  76 => 8,  70 => 7,  61 => 5,  56 => 4,  50 => 3,  37 => 2,  11 => 1,);
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
{% block title %}{{ parent() }} Périodicités{% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{asset('css/dataTables.bootstrap.min.css')}}\">
{% endblock %}
{% block content %}
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Périodicités</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a >Admnistration</a></li>
                    <li><a href=\"{{ path('periodicite_liste') }}\">Périodicités</a></li>
                    <li class=\"active\">Liste des periodicites</li>
                </ol>
            </div>
        </div>
<div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"dashboard_graph\">
                <a href=\"{{ path('periodicite_ajouter') }}\">
                    <button class=\"btn btn-primary pull-right\" id=\"ajouterGroup\">Ajouter une periodicite</button>
                </a>
                <div class=\" x_panel\">
                    <div class=\"col-sm-12\">
                        <table id=\"periodiciteTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Désignation de la periodicite</th>
                                <th style=\"width:10%;\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for periodicite in periodicites %}
                                <tr>
                                    <td>{{ periodicite.id }}</td>
                                    <td>{{ periodicite.libellePeriodicite }}</td>
                                    <td >
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('periodicite_modifier',{'id' : periodicite.id }) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ periodicite.id }}\">
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
                                                        <form action=\"{{ path('periodicite_supprimer') }}\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idPeriodicite\" name=\"idPeriodicite\" value=\"\">
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
                            <tr>
                                <th>#</th>
                                <th>Désignation de la periodicite</th>
                                <th style=\"width:10%;\">Actions</th>
                            </tr>
                            </tfoot>
                        </table>
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
    <script type=\"text/javascript\" src=\"{{asset('js/lang.js')}}\"></script>
    <script>
        var table = \$('#periodiciteTable').DataTable({
            language : lang
        });
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idPeriodicite').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
{% endblock %}
", "IndicateurBundle:Periodicite:liste.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/IndicateurBundle/Resources/views/Periodicite/liste.html.twig");
    }
}
