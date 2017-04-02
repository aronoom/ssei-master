<?php

/* UserBundle:Entite:liste.html.twig */
class __TwigTemplate_9891c50e7f1f7e23c81791566897c961013bcb5de65f6e04474a0a86c4db5189 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "UserBundle:Entite:liste.html.twig", 1);
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
        $__internal_872414ced7a3d062ea8fcb5bf1da15a1c248178ff6284a0080f16b78351e5e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872414ced7a3d062ea8fcb5bf1da15a1c248178ff6284a0080f16b78351e5e29->enter($__internal_872414ced7a3d062ea8fcb5bf1da15a1c248178ff6284a0080f16b78351e5e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Entite:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_872414ced7a3d062ea8fcb5bf1da15a1c248178ff6284a0080f16b78351e5e29->leave($__internal_872414ced7a3d062ea8fcb5bf1da15a1c248178ff6284a0080f16b78351e5e29_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_813e6bb50e639ddbf0a0518674534648c07a962b0365884bd5842383565c2826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813e6bb50e639ddbf0a0518674534648c07a962b0365884bd5842383565c2826->enter($__internal_813e6bb50e639ddbf0a0518674534648c07a962b0365884bd5842383565c2826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Groupes";
        
        $__internal_813e6bb50e639ddbf0a0518674534648c07a962b0365884bd5842383565c2826->leave($__internal_813e6bb50e639ddbf0a0518674534648c07a962b0365884bd5842383565c2826_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3f2831a9a48ed5611b9d0a6b5162ed175c12405f15ef4fcf1b1f4ffc5911c56d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2831a9a48ed5611b9d0a6b5162ed175c12405f15ef4fcf1b1f4ffc5911c56d->enter($__internal_3f2831a9a48ed5611b9d0a6b5162ed175c12405f15ef4fcf1b1f4ffc5911c56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_3f2831a9a48ed5611b9d0a6b5162ed175c12405f15ef4fcf1b1f4ffc5911c56d->leave($__internal_3f2831a9a48ed5611b9d0a6b5162ed175c12405f15ef4fcf1b1f4ffc5911c56d_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_d759ac0e62c2f3bd244fc1583133650fdb8685ae76bece982aacf34716e1a08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d759ac0e62c2f3bd244fc1583133650fdb8685ae76bece982aacf34716e1a08a->enter($__internal_d759ac0e62c2f3bd244fc1583133650fdb8685ae76bece982aacf34716e1a08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Entités</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a >Admnistration</a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entite_liste");
        echo "\">Entités</a></li>
                    <li class=\"active\">Liste des entités</li>
                </ol>
            </div>
        </div>
<div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"dashboard_graph\">
                <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entite_ajouter");
        echo "\">
                    <button class=\"btn btn-primary pull-right\" id=\"ajouterGroup\">Ajouter une entité</button>
                </a>
                <div class=\" x_panel\">

                    <div class=\"col-sm-12\">
                        <table id=\"entiteTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th style=\"display:none;\">#</th>
                                <th>Nom de l'entité</th>
                                <th>Groupe</th>
                                <th style=\"width:10%;\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entites"]) ? $context["entites"] : $this->getContext($context, "entites")));
        foreach ($context['_seq'] as $context["_key"] => $context["entite"]) {
            // line 39
            echo "                                <tr>
                                    <td style=\"display:none;\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entite"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entite"], "codeEntite", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entite"], "groupe", array()), "codeGroupUser", array()), "html", null, true);
            echo "</td>
                                    <td >
                                        <div class=\"btn-group\">
                                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entite_modifier", array("id" => $this->getAttribute($context["entite"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["entite"], "id", array()), "html", null, true);
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
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entite_supprimer");
            echo "\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idEntite\" name=\"idEntite\" value=\"\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <th style=\"display:none;\">#</th>
                                <th>Nom de l'entité</th>
                                <th>Groupe</th>
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
        
        $__internal_d759ac0e62c2f3bd244fc1583133650fdb8685ae76bece982aacf34716e1a08a->leave($__internal_d759ac0e62c2f3bd244fc1583133650fdb8685ae76bece982aacf34716e1a08a_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_07d02cf124e2c8bee6755fa74a58178b7cb0b618e8c41fc8225bad08a7d21f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d02cf124e2c8bee6755fa74a58178b7cb0b618e8c41fc8225bad08a7d21f45->enter($__internal_07d02cf124e2c8bee6755fa74a58178b7cb0b618e8c41fc8225bad08a7d21f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 101
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>  
    <script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lang.js"), "html", null, true);
        echo "\"></script>
    <script>
        var table = \$('#entiteTable').DataTable({
            language : lang
        });
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idEntite').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
";
        
        $__internal_07d02cf124e2c8bee6755fa74a58178b7cb0b618e8c41fc8225bad08a7d21f45->leave($__internal_07d02cf124e2c8bee6755fa74a58178b7cb0b618e8c41fc8225bad08a7d21f45_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Entite:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 105,  227 => 104,  223 => 103,  219 => 102,  214 => 101,  208 => 100,  186 => 84,  167 => 71,  144 => 51,  135 => 45,  129 => 42,  125 => 41,  121 => 40,  118 => 39,  114 => 38,  95 => 22,  84 => 14,  76 => 8,  70 => 7,  61 => 5,  56 => 4,  50 => 3,  37 => 2,  11 => 1,);
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
                <h3>Entités</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a >Admnistration</a></li>
                    <li><a href=\"{{ path('entite_liste') }}\">Entités</a></li>
                    <li class=\"active\">Liste des entités</li>
                </ol>
            </div>
        </div>
<div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"dashboard_graph\">
                <a href=\"{{ path('entite_ajouter') }}\">
                    <button class=\"btn btn-primary pull-right\" id=\"ajouterGroup\">Ajouter une entité</button>
                </a>
                <div class=\" x_panel\">

                    <div class=\"col-sm-12\">
                        <table id=\"entiteTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th style=\"display:none;\">#</th>
                                <th>Nom de l'entité</th>
                                <th>Groupe</th>
                                <th style=\"width:10%;\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for entite in entites %}
                                <tr>
                                    <td style=\"display:none;\">{{ entite.id }}</td>
                                    <td>{{ entite.codeEntite }}</td>
                                    <td>{{ entite.groupe.codeGroupUser }}</td>
                                    <td >
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('entite_modifier',{'id' : entite.id }) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ entite.id }}\">
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
                                                        <form action=\"{{ path('entite_supprimer') }}\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idEntite\" name=\"idEntite\" value=\"\">
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
                                <th style=\"display:none;\">#</th>
                                <th>Nom de l'entité</th>
                                <th>Groupe</th>
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
        var table = \$('#entiteTable').DataTable({
            language : lang
        });
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idEntite').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
{% endblock %}
", "UserBundle:Entite:liste.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/UserBundle/Resources/views/Entite/liste.html.twig");
    }
}
