<?php

/* IndicateurBundle:Subdivision:liste.html.twig */
class __TwigTemplate_375e472f8dd37b7a6ca22bd2bf05a4d99220230b018f5f03bd92e575df8107e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "IndicateurBundle:Subdivision:liste.html.twig", 1);
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
        $__internal_16229c018d220216dfab68d6adda1bf828d4ecd358df549a86c88af9cd510ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16229c018d220216dfab68d6adda1bf828d4ecd358df549a86c88af9cd510ad0->enter($__internal_16229c018d220216dfab68d6adda1bf828d4ecd358df549a86c88af9cd510ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicateurBundle:Subdivision:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16229c018d220216dfab68d6adda1bf828d4ecd358df549a86c88af9cd510ad0->leave($__internal_16229c018d220216dfab68d6adda1bf828d4ecd358df549a86c88af9cd510ad0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b7fcc6a0d2414aba9d31c17379725dc1a0dc4588f6b08680c0f1b8800a98889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7fcc6a0d2414aba9d31c17379725dc1a0dc4588f6b08680c0f1b8800a98889->enter($__internal_4b7fcc6a0d2414aba9d31c17379725dc1a0dc4588f6b08680c0f1b8800a98889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Groupes";
        
        $__internal_4b7fcc6a0d2414aba9d31c17379725dc1a0dc4588f6b08680c0f1b8800a98889->leave($__internal_4b7fcc6a0d2414aba9d31c17379725dc1a0dc4588f6b08680c0f1b8800a98889_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6784e802e70882d6392eceec1360af69fb59ac1973f31a5b2aae10aadbd91d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6784e802e70882d6392eceec1360af69fb59ac1973f31a5b2aae10aadbd91d70->enter($__internal_6784e802e70882d6392eceec1360af69fb59ac1973f31a5b2aae10aadbd91d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6784e802e70882d6392eceec1360af69fb59ac1973f31a5b2aae10aadbd91d70->leave($__internal_6784e802e70882d6392eceec1360af69fb59ac1973f31a5b2aae10aadbd91d70_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_e9faf5d3abd99462adb89ad955b75275fb82d437b00638cf5a44ec41e3f36b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9faf5d3abd99462adb89ad955b75275fb82d437b00638cf5a44ec41e3f36b3c->enter($__internal_e9faf5d3abd99462adb89ad955b75275fb82d437b00638cf5a44ec41e3f36b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Subdivision</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a >Admnistration</a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subdivision_liste");
        echo "\">Subdivision</a></li>
                    <li class=\"active\">Liste des subdivisions</li>
                </ol>
            </div>
        </div>
<div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"dashboard_graph\">
                <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subdivision_ajouter");
        echo "\">
                    <button class=\"btn btn-primary pull-right\" id=\"ajouterGroup\">Ajouter une subdivision</button>
                </a>
                <div class=\" x_panel\">
                    <div class=\"col-sm-12\">
                        <table id=\"subdivisionTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Désignation de la subdivision</th>
                                <th style=\"width:10%;\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subdivisions"]) ? $context["subdivisions"] : $this->getContext($context, "subdivisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
            // line 37
            echo "                                <tr>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "libelleSubdivision", array()), "html", null, true);
            echo "</td>
                                    <td >
                                        <div class=\"btn-group\">
                                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subdivision_modifier", array("id" => $this->getAttribute($context["sub"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "id", array()), "html", null, true);
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subdivision_supprimer");
            echo "\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idSubdivision\" name=\"idSubdivision\" value=\"\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Désignation de la subdivision</th>
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
        
        $__internal_e9faf5d3abd99462adb89ad955b75275fb82d437b00638cf5a44ec41e3f36b3c->leave($__internal_e9faf5d3abd99462adb89ad955b75275fb82d437b00638cf5a44ec41e3f36b3c_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec26c1f584049e527a4c058d4b094b733e95a05dd0eb5679717277b5e706d9f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec26c1f584049e527a4c058d4b094b733e95a05dd0eb5679717277b5e706d9f9->enter($__internal_ec26c1f584049e527a4c058d4b094b733e95a05dd0eb5679717277b5e706d9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        var table = \$('#subdivisionTable').DataTable({
            language : lang
        });
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idSubdivision').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
";
        
        $__internal_ec26c1f584049e527a4c058d4b094b733e95a05dd0eb5679717277b5e706d9f9->leave($__internal_ec26c1f584049e527a4c058d4b094b733e95a05dd0eb5679717277b5e706d9f9_prof);

    }

    public function getTemplateName()
    {
        return "IndicateurBundle:Subdivision:liste.html.twig";
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
{% block title %}{{ parent() }} Groupes{% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{asset('css/dataTables.bootstrap.min.css')}}\">
{% endblock %}
{% block content %}
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Subdivision</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a >Admnistration</a></li>
                    <li><a href=\"{{ path('subdivision_liste') }}\">Subdivision</a></li>
                    <li class=\"active\">Liste des subdivisions</li>
                </ol>
            </div>
        </div>
<div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"dashboard_graph\">
                <a href=\"{{ path('subdivision_ajouter') }}\">
                    <button class=\"btn btn-primary pull-right\" id=\"ajouterGroup\">Ajouter une subdivision</button>
                </a>
                <div class=\" x_panel\">
                    <div class=\"col-sm-12\">
                        <table id=\"subdivisionTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Désignation de la subdivision</th>
                                <th style=\"width:10%;\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for sub in subdivisions %}
                                <tr>
                                    <td>{{ sub.id }}</td>
                                    <td>{{ sub.libelleSubdivision }}</td>
                                    <td >
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('subdivision_modifier',{'id' : sub.id }) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ sub.id }}\">
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
                                                        <form action=\"{{ path('subdivision_supprimer') }}\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idSubdivision\" name=\"idSubdivision\" value=\"\">
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
                                <th>Désignation de la subdivision</th>
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
        var table = \$('#subdivisionTable').DataTable({
            language : lang
        });
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idSubdivision').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
{% endblock %}
", "IndicateurBundle:Subdivision:liste.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/IndicateurBundle/Resources/views/Subdivision/liste.html.twig");
    }
}
