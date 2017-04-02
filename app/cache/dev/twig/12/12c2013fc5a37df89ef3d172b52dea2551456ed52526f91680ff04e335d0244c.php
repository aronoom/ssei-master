<?php

/* UserBundle:User:liste.html.twig */
class __TwigTemplate_fed3d72c00a0392cdc3e8a8ce1f8eb1d900c6c7753a5ee025a890daf3c306cb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "UserBundle:User:liste.html.twig", 1);
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
        $__internal_074ecc0afb810a1880933e7c8b5475712aca9a08d6191b13d291ad5421c02548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074ecc0afb810a1880933e7c8b5475712aca9a08d6191b13d291ad5421c02548->enter($__internal_074ecc0afb810a1880933e7c8b5475712aca9a08d6191b13d291ad5421c02548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_074ecc0afb810a1880933e7c8b5475712aca9a08d6191b13d291ad5421c02548->leave($__internal_074ecc0afb810a1880933e7c8b5475712aca9a08d6191b13d291ad5421c02548_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5d251711aa4398cb18e76146a597f47cbb9825ba711007a35abcc92be0e4a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d251711aa4398cb18e76146a597f47cbb9825ba711007a35abcc92be0e4a56->enter($__internal_a5d251711aa4398cb18e76146a597f47cbb9825ba711007a35abcc92be0e4a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Utilisateurs";
        
        $__internal_a5d251711aa4398cb18e76146a597f47cbb9825ba711007a35abcc92be0e4a56->leave($__internal_a5d251711aa4398cb18e76146a597f47cbb9825ba711007a35abcc92be0e4a56_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8690f02149f36c2233c432250615d1daa898d13d741d38e0e01672ff41aee1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8690f02149f36c2233c432250615d1daa898d13d741d38e0e01672ff41aee1c->enter($__internal_f8690f02149f36c2233c432250615d1daa898d13d741d38e0e01672ff41aee1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">    
";
        
        $__internal_f8690f02149f36c2233c432250615d1daa898d13d741d38e0e01672ff41aee1c->leave($__internal_f8690f02149f36c2233c432250615d1daa898d13d741d38e0e01672ff41aee1c_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_8d0be69b6a59c42cb99608b951a00a81da5ebcecd3b23289a628bc4f43dff610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0be69b6a59c42cb99608b951a00a81da5ebcecd3b23289a628bc4f43dff610->enter($__internal_8d0be69b6a59c42cb99608b951a00a81da5ebcecd3b23289a628bc4f43dff610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
    <div class=\"page-title\">
        <div class=\"title_left\">
            <h3>Utilisateurs</h3>
                <ol class=\"breadcrumb\">
                   <li><a href=\"\">Acceuil</a></li>
                   <li><a >Admnistration</a></li>
                   <li><a href=\"\">Utilisateurs</a></li>
                   <li class=\"active\">Liste des utilisateurs</li>
                </ol>
            </div>
    </div>
    <div class=\"row\">
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"dashboard_graph\">
        <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_admin_userAdd");
        echo "\">
            <button class=\"btn btn-primary pull-right\" id=\"ajouterAgent\">Ajouter un utilisateur</button>
        </a>
        <div class=\" x_panel\">
            
            <div class=\"col-sm-12\">
                <table id=\"agentTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th style=\"display:none;\">#</th>
                            <th>Nom</th>
                            <th>Prénom(s)</th>
                            <th>Entité(s)</th>
                            <th>E-mail</th>
                            <th>Fonction</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agents"]) ? $context["agents"] : $this->getContext($context, "agents")));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 43
            echo "                        <tr>
                            <td style=\"display:none;\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "username", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 47
            if (($this->getAttribute($context["agent"], "prenomUser", array()) != "")) {
                // line 48
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "prenomUser", array()), "html", null, true);
                echo "
                                ";
            } else {
                // line 50
                echo "                                    Aucun(s)
                                ";
            }
            // line 52
            echo "                            </td>
                            <td data-toggle=\"tooltip\" data-original-title=\"\">
                                ";
            // line 54
            if (($this->getAttribute($this->getAttribute($context["agent"], "entites", array()), "count", array()) == 0)) {
                // line 55
                echo "                                    Aucun
                                ";
            } else {
                // line 57
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["agent"], "entites", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                    // line 58
                    echo "                                        -";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleEntite", array()), "html", null, true);
                    echo "<br>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "                                ";
            }
            // line 61
            echo "                            </td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "email", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 64
            if (($this->getAttribute($context["agent"], "fonctionUser", array()) != "")) {
                // line 65
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "fonctionUser", array()), "html", null, true);
                echo "
                                ";
            } else {
                // line 67
                echo "                                    Aucun
                                ";
            }
            // line 69
            echo "                            </td>
                            <td >
                                <div class=\"btn-group\">
                                    <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_admin_show", array("id" => $this->getAttribute($context["agent"], "id", array()))), "html", null, true);
            echo "\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\" title data-original-title=\"Détails\" aria-label=\"Center Align\">
                                            <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span>
                                        </button>
                                    </a>
                                    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_admin_userEdit", array("id" => $this->getAttribute($context["agent"], "id", array()))), "html", null, true);
            echo "\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" aria-label=\"Center Align\">
                                            <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                        </button>
                                    </a>
                                    <a title data-original-title=\"Supprimer\" data-toggle=\"tooltip\">
                                        <button type=\"button\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "id", array()), "html", null, true);
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
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_admin_userDel");
            echo "\" method=\"post\">
                                                    <input type=\"hidden\" id=\"idAgent\" name=\"idAgent\" value=\"\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                    </tbody>
                    <tfoot>
                        <tr>
                            <th style=\"display:none;\">#</th>
                            <th>Nom</th>
                            <th>Prénom(s)</th>
                            <th>Entité(s)</th>
                            <th>E-mail</th>
                            <th>Fonction</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>            
            </div>
        </div>
    </div>
    </div>
";
        
        $__internal_8d0be69b6a59c42cb99608b951a00a81da5ebcecd3b23289a628bc4f43dff610->leave($__internal_8d0be69b6a59c42cb99608b951a00a81da5ebcecd3b23289a628bc4f43dff610_prof);

    }

    // line 136
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_491843ef9e77fe82dcc3831e0be5024ea7f9b6246a2e3711b71dfff87f91707b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491843ef9e77fe82dcc3831e0be5024ea7f9b6246a2e3711b71dfff87f91707b->enter($__internal_491843ef9e77fe82dcc3831e0be5024ea7f9b6246a2e3711b71dfff87f91707b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 137
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>  
    <script type=\"text/javascript\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lang.js"), "html", null, true);
        echo "\"></script>
    <script>
        var table = \$('#agentTable').DataTable({
            language : lang
        });
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);

                \$('#idAgent').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });


    </script>
";
        
        $__internal_491843ef9e77fe82dcc3831e0be5024ea7f9b6246a2e3711b71dfff87f91707b->leave($__internal_491843ef9e77fe82dcc3831e0be5024ea7f9b6246a2e3711b71dfff87f91707b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 141,  299 => 140,  295 => 139,  291 => 138,  286 => 137,  280 => 136,  255 => 117,  235 => 103,  212 => 83,  203 => 77,  195 => 72,  190 => 69,  186 => 67,  180 => 65,  178 => 64,  173 => 62,  170 => 61,  167 => 60,  158 => 58,  153 => 57,  149 => 55,  147 => 54,  143 => 52,  139 => 50,  133 => 48,  131 => 47,  126 => 45,  122 => 44,  119 => 43,  115 => 42,  93 => 23,  76 => 8,  70 => 7,  61 => 5,  56 => 4,  50 => 3,  37 => 2,  11 => 1,);
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
{% block title %}{{ parent() }} Utilisateurs{% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{asset('css/dataTables.bootstrap.min.css')}}\">    
{% endblock %}
{% block content %}

    <div class=\"page-title\">
        <div class=\"title_left\">
            <h3>Utilisateurs</h3>
                <ol class=\"breadcrumb\">
                   <li><a href=\"\">Acceuil</a></li>
                   <li><a >Admnistration</a></li>
                   <li><a href=\"\">Utilisateurs</a></li>
                   <li class=\"active\">Liste des utilisateurs</li>
                </ol>
            </div>
    </div>
    <div class=\"row\">
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"dashboard_graph\">
        <a href=\"{{ path('user_admin_userAdd') }}\">
            <button class=\"btn btn-primary pull-right\" id=\"ajouterAgent\">Ajouter un utilisateur</button>
        </a>
        <div class=\" x_panel\">
            
            <div class=\"col-sm-12\">
                <table id=\"agentTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th style=\"display:none;\">#</th>
                            <th>Nom</th>
                            <th>Prénom(s)</th>
                            <th>Entité(s)</th>
                            <th>E-mail</th>
                            <th>Fonction</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for agent in agents %}
                        <tr>
                            <td style=\"display:none;\">{{ agent.id }}</td>
                            <td>{{ agent.username }}</td>
                            <td>
                                {% if agent.prenomUser != \"\" %}
                                    {{ agent.prenomUser }}
                                {% else %}
                                    Aucun(s)
                                {% endif %}
                            </td>
                            <td data-toggle=\"tooltip\" data-original-title=\"\">
                                {% if agent.entites.count ==0 %}
                                    Aucun
                                {% else %}
                                    {% for entity in agent.entites %}
                                        -{{ entity.libelleEntite }}<br>
                                    {% endfor %}
                                {% endif %}
                            </td>
                            <td>{{ agent.email }}</td>
                            <td>
                                {% if agent.fonctionUser != \"\" %}
                                    {{ agent.fonctionUser }}
                                {% else %}
                                    Aucun
                                {% endif %}
                            </td>
                            <td >
                                <div class=\"btn-group\">
                                    <a href=\"{{ path('user_admin_show',{'id' : agent.id }) }}\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\" title data-original-title=\"Détails\" aria-label=\"Center Align\">
                                            <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span>
                                        </button>
                                    </a>
                                    <a href=\"{{ path('user_admin_userEdit',{'id' : agent.id }) }}\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" aria-label=\"Center Align\">
                                            <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                        </button>
                                    </a>
                                    <a title data-original-title=\"Supprimer\" data-toggle=\"tooltip\">
                                        <button type=\"button\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ agent.id }}\">
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
                                                <form action=\"{{ path('user_admin_userDel') }}\" method=\"post\">
                                                    <input type=\"hidden\" id=\"idAgent\" name=\"idAgent\" value=\"\">
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
                            <th>Nom</th>
                            <th>Prénom(s)</th>
                            <th>Entité(s)</th>
                            <th>E-mail</th>
                            <th>Fonction</th>
                            <th>Actions</th>
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
        var table = \$('#agentTable').DataTable({
            language : lang
        });
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);

                \$('#idAgent').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });
        });


    </script>
{% endblock %}
", "UserBundle:User:liste.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/UserBundle/Resources/views/User/liste.html.twig");
    }
}
