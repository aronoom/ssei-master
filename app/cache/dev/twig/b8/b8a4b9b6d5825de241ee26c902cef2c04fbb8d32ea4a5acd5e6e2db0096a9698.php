<?php

/* ProjetBundle:Activite:liste.html.twig */
class __TwigTemplate_c012937af8b9c894ab08f25fa198af3829f5dfd199055acdb67e577e4b6631ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjetBundle::layout.html.twig", "ProjetBundle:Activite:liste.html.twig", 1);
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
        $__internal_26a724957f3bacbac7ce98517a895a4fc47656850532dabe17b8fb08f0800351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a724957f3bacbac7ce98517a895a4fc47656850532dabe17b8fb08f0800351->enter($__internal_26a724957f3bacbac7ce98517a895a4fc47656850532dabe17b8fb08f0800351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Activite:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26a724957f3bacbac7ce98517a895a4fc47656850532dabe17b8fb08f0800351->leave($__internal_26a724957f3bacbac7ce98517a895a4fc47656850532dabe17b8fb08f0800351_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b3d8b7e825a0a81eea9f91e027c815da25f35298bfda515fcd1da724d1bc621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3d8b7e825a0a81eea9f91e027c815da25f35298bfda515fcd1da724d1bc621->enter($__internal_4b3d8b7e825a0a81eea9f91e027c815da25f35298bfda515fcd1da724d1bc621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Activite ";
        
        $__internal_4b3d8b7e825a0a81eea9f91e027c815da25f35298bfda515fcd1da724d1bc621->leave($__internal_4b3d8b7e825a0a81eea9f91e027c815da25f35298bfda515fcd1da724d1bc621_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_25718b926d9880b0b44d346c0079891c431ef92828e3c4774ac9b14799a9fc35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25718b926d9880b0b44d346c0079891c431ef92828e3c4774ac9b14799a9fc35->enter($__internal_25718b926d9880b0b44d346c0079891c431ef92828e3c4774ac9b14799a9fc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/zone.css"), "html", null, true);
        echo "\">
";
        
        $__internal_25718b926d9880b0b44d346c0079891c431ef92828e3c4774ac9b14799a9fc35->leave($__internal_25718b926d9880b0b44d346c0079891c431ef92828e3c4774ac9b14799a9fc35_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_ae372119224ca1c1f0216f337583aef3e7dfe9e79cd074c8f3d50669ee55dce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae372119224ca1c1f0216f337583aef3e7dfe9e79cd074c8f3d50669ee55dce6->enter($__internal_ae372119224ca1c1f0216f337583aef3e7dfe9e79cd074c8f3d50669ee55dce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"row\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"> Acceuil </a></li>
                    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_homepage");
        echo "\"> Projet </a></li>
                    <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index", array("id" => $this->getAttribute($this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "projet", array()), "id", array()))), "html", null, true);
        echo "\"> Composante </a></li>
                    <li class=\"active\">Activité</li>
                </ol>
            </div>
        </div>
    </div>

    <div class=\"clearfix\"></div>
    <h1>Activités</h1>
    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2 class=\"pull-left\">Activités de la composante ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "id", array()), "html", null, true);
        echo "</h2>
            <a class=\"pull-right btn btn-primary\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_ajouter_activite", array("projet_id" => $this->getAttribute($this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "projet", array()), "id", array()), "comp_id" => $this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Ajouter une activité</a>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
            ";
        // line 32
        if (twig_test_empty((isset($context["activites"]) ? $context["activites"] : $this->getContext($context, "activites")))) {
            // line 33
            echo "                <div style=\"text-align: center\"> Aucune activité </div>
            ";
        } else {
            // line 35
            echo "                <div class=\"table-responsive\">
                    <table id=\"activiteTable\" class=\"table table-responsive table-striped table-bordered\" cellspacing=\"0\" width=\"100%\" >
                        <thead>
                            <tr role=\"row\">
                                <th>Code de l'activité</th>
                                <th>Désignation de l'activité</th>
                                <th style=\"width:10%;\">Actions</th>
                                <th>Descriptifs</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["activites"]) ? $context["activites"] : $this->getContext($context, "activites")));
            foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                // line 47
                echo "                                <tr>
                                    <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "codeActivite", array()), "html", null, true);
                echo "</td>
                                    <td><a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_lister", array("projet_id" => $this->getAttribute($this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "projet", array()), "id", array()), "comp_id" => $this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "id", array()), "act_id" => $this->getAttribute($context["activite"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "libelleActivite", array()), "html", null, true);
                echo "</a></td>
                                    <td >
                                        <div class=\"btn-group\">
                                            <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_modifier_activite", array("projet_id" => $this->getAttribute($this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "projet", array()), "id", array()), "comp_id" => $this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "id", array()), "id" => $this->getAttribute($context["activite"], "id", array()))), "html", null, true);
                echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "id", array()), "html", null, true);
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
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_supprimer_activite", array("projet_id" => $this->getAttribute($this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "projet", array()), "id", array()), "comp_id" => $this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "id", array()), "idActivite" => $this->getAttribute($context["activite"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idActivite\" name=\"idActivite\" value=\"\">
                                                            <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </td>
                                    <td width=\"50px\"><a class=\"btn btn-default btn-sm\" href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_lister", array("projet_id" => $this->getAttribute($this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "projet", array()), "id", array()), "comp_id" => $this->getAttribute((isset($context["composante"]) ? $context["composante"] : $this->getContext($context, "composante")), "id", array()), "act_id" => $this->getAttribute($context["activite"], "id", array()))), "html", null, true);
                echo "\">&raquo;</a></td>
                                    <!-- -->
                                        <!-- Supprimer -->
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                        </tbody>
                        <tfoot>
                            <tr role=\"row\">
                                <th>Code de l'activité</th>
                                <th>Désignation de l'activité</th>
                                <th>Actions</th>
                                <th>Descriptifs</th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
                <hr>
            ";
        }
        // line 107
        echo "        </div>
    </div>
";
        
        $__internal_ae372119224ca1c1f0216f337583aef3e7dfe9e79cd074c8f3d50669ee55dce6->leave($__internal_ae372119224ca1c1f0216f337583aef3e7dfe9e79cd074c8f3d50669ee55dce6_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b16239dc3048b58140d079032228239a0813227212f62b5191c792752a7a1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b16239dc3048b58140d079032228239a0813227212f62b5191c792752a7a1db->enter($__internal_0b16239dc3048b58140d079032228239a0813227212f62b5191c792752a7a1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$('.btn-danger').on('click',function(e){
            var _this = \$(this);
            var _parent = \$(_this).parents()[3];
            var node = \$(\$(_parent).children()[0]);
            \$('#idActivite').val(\$(node).text());
            \$('#modalDelete').modal('toggle');

        });

    </script>

    <script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function(){
            \$('#activiteTable').dataTable();
        });
    </script>

";
        
        $__internal_0b16239dc3048b58140d079032228239a0813227212f62b5191c792752a7a1db->leave($__internal_0b16239dc3048b58140d079032228239a0813227212f62b5191c792752a7a1db_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Activite:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 127,  262 => 126,  258 => 125,  241 => 112,  235 => 111,  226 => 107,  210 => 93,  199 => 88,  186 => 78,  163 => 58,  154 => 52,  146 => 49,  142 => 48,  139 => 47,  135 => 46,  122 => 35,  118 => 33,  116 => 32,  109 => 28,  105 => 27,  91 => 16,  87 => 15,  80 => 10,  74 => 9,  65 => 7,  61 => 6,  56 => 5,  50 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"ProjetBundle::layout.html.twig\" %}

{% block title %}{{ parent() }} Activite {% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{asset('css/dataTables.bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/zone.css')}}\">
{% endblock %}
{% block content %}
    <div class=\"row\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"> Acceuil </a></li>
                    <li><a href=\"{{ path('projet_homepage') }}\"> Projet </a></li>
                    <li><a href=\"{{ path('projet_index', {'id': composante.projet.id}) }}\"> Composante </a></li>
                    <li class=\"active\">Activité</li>
                </ol>
            </div>
        </div>
    </div>

    <div class=\"clearfix\"></div>
    <h1>Activités</h1>
    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2 class=\"pull-left\">Activités de la composante {{ composante.id }}</h2>
            <a class=\"pull-right btn btn-primary\" href=\"{{ path('projet_ajouter_activite', {'projet_id': composante.projet.id, 'comp_id': composante.id }) }}\" class=\"btn btn-primary\">Ajouter une activité</a>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
            {% if activites is empty %}
                <div style=\"text-align: center\"> Aucune activité </div>
            {% else %}
                <div class=\"table-responsive\">
                    <table id=\"activiteTable\" class=\"table table-responsive table-striped table-bordered\" cellspacing=\"0\" width=\"100%\" >
                        <thead>
                            <tr role=\"row\">
                                <th>Code de l'activité</th>
                                <th>Désignation de l'activité</th>
                                <th style=\"width:10%;\">Actions</th>
                                <th>Descriptifs</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for activite in activites %}
                                <tr>
                                    <td>{{ activite.codeActivite }}</td>
                                    <td><a href=\"{{ path('projet_descriptif_activite_lister', {'projet_id': composante.projet.id,'comp_id': composante.id, 'act_id': activite.id}) }}\">{{ activite.libelleActivite }}</a></td>
                                    <td >
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('projet_modifier_activite',{'projet_id' : composante.projet.id, 'comp_id': composante.id ,'id': activite.id }) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ activite.id }}\">
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
                                                        <form action=\"{{ path('projet_supprimer_activite', { 'projet_id' : composante.projet.id , 'comp_id': composante.id ,'idActivite' : activite.id }) }}\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idActivite\" name=\"idActivite\" value=\"\">
                                                            <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </td>
                                    <td width=\"50px\"><a class=\"btn btn-default btn-sm\" href=\"{{ path('projet_descriptif_activite_lister', {'projet_id': composante.projet.id,'comp_id': composante.id, 'act_id': activite.id}) }}\">&raquo;</a></td>
                                    <!-- -->
                                        <!-- Supprimer -->
                                </tr>
                            {% endfor %}
                        </tbody>
                        <tfoot>
                            <tr role=\"row\">
                                <th>Code de l'activité</th>
                                <th>Désignation de l'activité</th>
                                <th>Actions</th>
                                <th>Descriptifs</th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
                <hr>
            {% endif %}
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{parent()}}
    <script>
        \$('.btn-danger').on('click',function(e){
            var _this = \$(this);
            var _parent = \$(_this).parents()[3];
            var node = \$(\$(_parent).children()[0]);
            \$('#idActivite').val(\$(node).text());
            \$('#modalDelete').modal('toggle');

        });

    </script>

    <script type=\"text/javascript\" src=\"{{asset('js/dataTables.bootstrap.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/datatables.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/bootstrap_dropdown_6.js')}}\"></script>
    <script>
        \$(function(){
            \$('#activiteTable').dataTable();
        });
    </script>

{% endblock %}", "ProjetBundle:Activite:liste.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/Activite/liste.html.twig");
    }
}
