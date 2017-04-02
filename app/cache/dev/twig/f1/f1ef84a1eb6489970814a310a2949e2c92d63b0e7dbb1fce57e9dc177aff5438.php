<?php

/* UserBundle:Group:liste.html.twig */
class __TwigTemplate_9ce38eefa1b681734d9999522cafb387e749b777d006fa1d60ace15f6f93a4f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "UserBundle:Group:liste.html.twig", 1);
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
        $__internal_2de1a5afe06588f61597489832de68c9dbe4770aac8752d01f271ce8861ca768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de1a5afe06588f61597489832de68c9dbe4770aac8752d01f271ce8861ca768->enter($__internal_2de1a5afe06588f61597489832de68c9dbe4770aac8752d01f271ce8861ca768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2de1a5afe06588f61597489832de68c9dbe4770aac8752d01f271ce8861ca768->leave($__internal_2de1a5afe06588f61597489832de68c9dbe4770aac8752d01f271ce8861ca768_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b3f9ef5a625a0adc0e72f2833e5dc881bf7d9de8e07116879d75dc92ecf6075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3f9ef5a625a0adc0e72f2833e5dc881bf7d9de8e07116879d75dc92ecf6075->enter($__internal_3b3f9ef5a625a0adc0e72f2833e5dc881bf7d9de8e07116879d75dc92ecf6075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Groupes";
        
        $__internal_3b3f9ef5a625a0adc0e72f2833e5dc881bf7d9de8e07116879d75dc92ecf6075->leave($__internal_3b3f9ef5a625a0adc0e72f2833e5dc881bf7d9de8e07116879d75dc92ecf6075_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9cedd888881d299c9f17db096ea2ff95df92ebe75c4f0a65779f37a8d2063572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cedd888881d299c9f17db096ea2ff95df92ebe75c4f0a65779f37a8d2063572->enter($__internal_9cedd888881d299c9f17db096ea2ff95df92ebe75c4f0a65779f37a8d2063572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_9cedd888881d299c9f17db096ea2ff95df92ebe75c4f0a65779f37a8d2063572->leave($__internal_9cedd888881d299c9f17db096ea2ff95df92ebe75c4f0a65779f37a8d2063572_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_f5d4a632e633d981a6f4077e05e49ec77f54445819ca3b05c9f1ac18f90f04f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d4a632e633d981a6f4077e05e49ec77f54445819ca3b05c9f1ac18f90f04f0->enter($__internal_f5d4a632e633d981a6f4077e05e49ec77f54445819ca3b05c9f1ac18f90f04f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Groupes</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a >Admnistration</a></li>
                    <li><a href=\"\">Utilisateurs</a></li>
                    <li class=\"active\">Liste des groupes</li>
                </ol>
            </div>
        </div>
<div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"dashboard_graph\">
                <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_user_ajouter");
        echo "\">
                    <button class=\"btn btn-primary pull-right\" id=\"ajouterGroup\">Ajouter un groupe</button>
                </a>
                <div class=\" x_panel\">

                    <div class=\"col-sm-12\">
                        <table id=\"groupTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th style=\"display:none;\">#</th>
                                <th>Code groupe</th>
                                <th>Nom du groupe</th>
                                <th style=\"width:10%;\">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groupes"]) ? $context["groupes"] : $this->getContext($context, "groupes")));
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 39
            echo "                                <tr>
                                    <td style=\"display:none;\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "codeGroupUser", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "nomGroupUser", array()), "html", null, true);
            echo "</td>
                                    <td >
                                        <div class=\"btn-group\">
                                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_user_modifier", array("id" => $this->getAttribute($context["groupe"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array()), "html", null, true);
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_user_supprimer");
            echo "\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idGroup\" name=\"idGroup\" value=\"\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                            </tbody>
                            <tfoot>
                                <tr>
                                    <th style=\"display:none;\">#</th>
                                    <th>Code groupe</th>
                                    <th>Nom du groupe</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_f5d4a632e633d981a6f4077e05e49ec77f54445819ca3b05c9f1ac18f90f04f0->leave($__internal_f5d4a632e633d981a6f4077e05e49ec77f54445819ca3b05c9f1ac18f90f04f0_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_36cc4342d5b69cdf80492952ce74ba6e3c5bfb005bc5002d257d9639c6193d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36cc4342d5b69cdf80492952ce74ba6e3c5bfb005bc5002d257d9639c6193d9e->enter($__internal_36cc4342d5b69cdf80492952ce74ba6e3c5bfb005bc5002d257d9639c6193d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        var table = \$('#groupTable').DataTable({
            language : lang
        });
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idGroup').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
";
        
        $__internal_36cc4342d5b69cdf80492952ce74ba6e3c5bfb005bc5002d257d9639c6193d9e->leave($__internal_36cc4342d5b69cdf80492952ce74ba6e3c5bfb005bc5002d257d9639c6193d9e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 105,  224 => 104,  220 => 103,  216 => 102,  211 => 101,  205 => 100,  183 => 84,  164 => 71,  141 => 51,  132 => 45,  126 => 42,  122 => 41,  118 => 40,  115 => 39,  111 => 38,  92 => 22,  76 => 8,  70 => 7,  61 => 5,  56 => 4,  50 => 3,  37 => 2,  11 => 1,);
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
                <h3>Groupes</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a >Admnistration</a></li>
                    <li><a href=\"\">Utilisateurs</a></li>
                    <li class=\"active\">Liste des groupes</li>
                </ol>
            </div>
        </div>
<div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"dashboard_graph\">
                <a href=\"{{ path('groupe_user_ajouter') }}\">
                    <button class=\"btn btn-primary pull-right\" id=\"ajouterGroup\">Ajouter un groupe</button>
                </a>
                <div class=\" x_panel\">

                    <div class=\"col-sm-12\">
                        <table id=\"groupTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th style=\"display:none;\">#</th>
                                <th>Code groupe</th>
                                <th>Nom du groupe</th>
                                <th style=\"width:10%;\">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for groupe in groupes %}
                                <tr>
                                    <td style=\"display:none;\">{{ groupe.id }}</td>
                                    <td>{{ groupe.codeGroupUser }}</td>
                                    <td>{{ groupe.nomGroupUser }}</td>
                                    <td >
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('groupe_user_modifier',{'id' : groupe.id }) }}\">
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                </button>
                                            </a>
                                            <a >
                                                <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ groupe.id }}\">
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
                                                        <form action=\"{{ path('groupe_user_supprimer') }}\" method=\"post\">
                                                            <input type=\"hidden\" id=\"idGroup\" name=\"idGroup\" value=\"\">
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
                                    <th>Code groupe</th>
                                    <th>Nom du groupe</th>
                                    <th>Action</th>
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
        var table = \$('#groupTable').DataTable({
            language : lang
        });
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idGroup').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });
    </script>
{% endblock %}
", "UserBundle:Group:liste.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/UserBundle/Resources/views/Group/liste.html.twig");
    }
}
