<?php

/* ProjetBundle:Composante:lister.html.twig */
class __TwigTemplate_cfefe897ab3dd22a541b386715fc4df0d77a6b241d56ab0e2bfb132d633bf65d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjetBundle::layout.html.twig", "ProjetBundle:Composante:lister.html.twig", 1);
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
        $__internal_a6ff309954a58403cbc32570a460d1c97b1316f6e5d06a90281db5c91be83617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ff309954a58403cbc32570a460d1c97b1316f6e5d06a90281db5c91be83617->enter($__internal_a6ff309954a58403cbc32570a460d1c97b1316f6e5d06a90281db5c91be83617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Composante:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6ff309954a58403cbc32570a460d1c97b1316f6e5d06a90281db5c91be83617->leave($__internal_a6ff309954a58403cbc32570a460d1c97b1316f6e5d06a90281db5c91be83617_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fc6aa5946729f3135707cbaf43b8fdf1c549ad47a8dbed347e5352d6e57a327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc6aa5946729f3135707cbaf43b8fdf1c549ad47a8dbed347e5352d6e57a327->enter($__internal_8fc6aa5946729f3135707cbaf43b8fdf1c549ad47a8dbed347e5352d6e57a327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Composantes ";
        
        $__internal_8fc6aa5946729f3135707cbaf43b8fdf1c549ad47a8dbed347e5352d6e57a327->leave($__internal_8fc6aa5946729f3135707cbaf43b8fdf1c549ad47a8dbed347e5352d6e57a327_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5fbd49e0ee5eddc6f65d3447a037cfe13abb674e949101d912159e254a8d7813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fbd49e0ee5eddc6f65d3447a037cfe13abb674e949101d912159e254a8d7813->enter($__internal_5fbd49e0ee5eddc6f65d3447a037cfe13abb674e949101d912159e254a8d7813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5fbd49e0ee5eddc6f65d3447a037cfe13abb674e949101d912159e254a8d7813->leave($__internal_5fbd49e0ee5eddc6f65d3447a037cfe13abb674e949101d912159e254a8d7813_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_be404b40a791fb413c85f34e8ae80e95888e3000b6e0116b2e2314415056591b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be404b40a791fb413c85f34e8ae80e95888e3000b6e0116b2e2314415056591b->enter($__internal_be404b40a791fb413c85f34e8ae80e95888e3000b6e0116b2e2314415056591b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"page-title\">
        <div class=\"title_left\">
            <ol class=\"breadcrumb\">
                <li><a href=\"\">Acceuil</a></li>
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_homepage");
        echo "\">Projet</a></li>
                <li class=\"active\"> Composante </li>
            </ol>
        </div>
    </div>

    <div class=\"clearfix\"></div>
    <h1>Composantes</h1>


    <div class=\"x_panel\">
        <div class=\"x_title\">
            <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_ajouter_composante", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Ajouter une composante</a>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
            ";
        // line 30
        if (twig_test_empty((isset($context["composantes"]) ? $context["composantes"] : $this->getContext($context, "composantes")))) {
            // line 31
            echo "                <div style=\"text-align: center\"> Aucune composante </div>
            ";
        } else {
            // line 33
            echo "                <div class=\"table-responsive\">
                    <table id=\"composanteTable\" class=\"crud-table table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\" >
                        <thead>
                            <tr role=\"row\">
                                <th>#</th>
                                <th>Libelle</th>
                                <th>Code</th>
                                <th>/</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["composantes"]) ? $context["composantes"] : $this->getContext($context, "composantes")));
            foreach ($context['_seq'] as $context["_key"] => $context["composante"]) {
                // line 45
                echo "                                <tr>
                                    <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["composante"], "id", array()), "html", null, true);
                echo "</td>
                                    <td><a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_lister_activite", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => $this->getAttribute($context["composante"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["composante"], "libelleComposante", array()), "html", null, true);
                echo "</a></td>
                                    <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["composante"], "codeComposante", array()), "html", null, true);
                echo "</td>
                                    <td width=\"100px\">
                                        <div class=\"btn-group\">
                                            <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_modifier_composante", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "id" => $this->getAttribute($context["composante"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm btn-edit\"> <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> </a>
                                            <button class=\"btn btn-danger btn-sm btn-remove\">
                                                <input value=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["composante"], "id", array()), "html", null, true);
                echo "\" hidden/>
                                                <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['composante'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                        </tbody>
                        <tfoot>
                            <tr role=\"row\">
                                <th>#</th>
                                <th>Libelle</th>
                                <th>Code</th>
                                <th>/</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            ";
        }
        // line 72
        echo "        </div>
    </div>

    <!-- Supprimer -->
    <div class=\"modal fade bs-example-modal-md\" data-id=\"\" id=\"suprCompModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"well\">
                        <p>Voulez-vous vraiment supprimer cette composante</p>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <form action=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_supprimer_composante", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")))), "html", null, true);
        echo "\" method=\"post\">
                        <input id=\"compId\" name=\"compId\" hidden>
                        <input name=\"projetId\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "html", null, true);
        echo "\" hidden>
                        <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_be404b40a791fb413c85f34e8ae80e95888e3000b6e0116b2e2314415056591b->leave($__internal_be404b40a791fb413c85f34e8ae80e95888e3000b6e0116b2e2314415056591b_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11370de8fac3726f0d389cb3c5f5603c222a4157028a69e47edc628bba4b4ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11370de8fac3726f0d389cb3c5f5603c222a4157028a69e47edc628bba4b4ca2->enter($__internal_11370de8fac3726f0d389cb3c5f5603c222a4157028a69e47edc628bba4b4ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/validator/validator.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('form')
                .on('blur', 'input[required], input.optional, select.required', validator.checkField)
                .on('change', 'select.required', validator.checkField)
                .on('keypress', 'input[required][pattern]', validator.keypress);

        \$('.multi.required').on('keyup blur', 'input', function() {
            validator.checkField.apply(\$(this).siblings().last()[0]);
        });
        \$('form').submit(function(e) {
            e.preventDefault();
            var submit = true;

            // evaluate the form using generic validaing
            if (!validator.checkAll(\$(this))) {
                submit = false;
            }

            if (submit)
                this.submit();

            return false;
        });
    </script>
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('.btn-remove').on('click',function(){
            \$('#compId').val(\$(this).children()[0].value);
            \$('#suprCompModal').modal('toggle');
        });
    </script>

";
        
        $__internal_11370de8fac3726f0d389cb3c5f5603c222a4157028a69e47edc628bba4b4ca2->leave($__internal_11370de8fac3726f0d389cb3c5f5603c222a4157028a69e47edc628bba4b4ca2_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Composante:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 133,  271 => 132,  267 => 131,  262 => 129,  234 => 104,  229 => 103,  223 => 102,  207 => 92,  202 => 90,  182 => 72,  168 => 60,  155 => 53,  150 => 51,  144 => 48,  138 => 47,  134 => 46,  131 => 45,  127 => 44,  114 => 33,  110 => 31,  108 => 30,  101 => 26,  86 => 14,  80 => 10,  74 => 9,  65 => 7,  61 => 6,  56 => 5,  50 => 4,  37 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Composantes {% endblock %}
{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{asset('css/dataTables.bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/zone.css')}}\">
{% endblock %}
{% block content %}
    <div class=\"page-title\">
        <div class=\"title_left\">
            <ol class=\"breadcrumb\">
                <li><a href=\"\">Acceuil</a></li>
                <li><a href=\"{{ path('projet_homepage') }}\">Projet</a></li>
                <li class=\"active\"> Composante </li>
            </ol>
        </div>
    </div>

    <div class=\"clearfix\"></div>
    <h1>Composantes</h1>


    <div class=\"x_panel\">
        <div class=\"x_title\">
            <a href=\"{{ path('projet_ajouter_composante', {'projet_id': projet_id}) }}\" class=\"btn btn-primary\">Ajouter une composante</a>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"x_content\">
            {% if composantes is empty %}
                <div style=\"text-align: center\"> Aucune composante </div>
            {% else %}
                <div class=\"table-responsive\">
                    <table id=\"composanteTable\" class=\"crud-table table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\" >
                        <thead>
                            <tr role=\"row\">
                                <th>#</th>
                                <th>Libelle</th>
                                <th>Code</th>
                                <th>/</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for composante in composantes %}
                                <tr>
                                    <td>{{ composante.id }}</td>
                                    <td><a href=\"{{ path('projet_lister_activite', {'projet_id': projet_id, 'comp_id': composante.id}) }}\">{{ composante.libelleComposante }}</a></td>
                                    <td>{{ composante.codeComposante }}</td>
                                    <td width=\"100px\">
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('projet_modifier_composante', {'projet_id': projet_id, 'id': composante.id}) }}\" class=\"btn btn-default btn-sm btn-edit\"> <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> </a>
                                            <button class=\"btn btn-danger btn-sm btn-remove\">
                                                <input value=\"{{ composante.id }}\" hidden/>
                                                <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                        <tfoot>
                            <tr role=\"row\">
                                <th>#</th>
                                <th>Libelle</th>
                                <th>Code</th>
                                <th>/</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            {% endif %}
        </div>
    </div>

    <!-- Supprimer -->
    <div class=\"modal fade bs-example-modal-md\" data-id=\"\" id=\"suprCompModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"well\">
                        <p>Voulez-vous vraiment supprimer cette composante</p>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <form action=\"{{ path('projet_supprimer_composante',{'projet_id': projet_id})}}\" method=\"post\">
                        <input id=\"compId\" name=\"compId\" hidden>
                        <input name=\"projetId\" value=\"{{ projet_id }}\" hidden>
                        <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{parent()}}
    <script src=\"{{asset('vendors/validator/validator.js')}}\"></script>
    <script>
        \$('form')
                .on('blur', 'input[required], input.optional, select.required', validator.checkField)
                .on('change', 'select.required', validator.checkField)
                .on('keypress', 'input[required][pattern]', validator.keypress);

        \$('.multi.required').on('keyup blur', 'input', function() {
            validator.checkField.apply(\$(this).siblings().last()[0]);
        });
        \$('form').submit(function(e) {
            e.preventDefault();
            var submit = true;

            // evaluate the form using generic validaing
            if (!validator.checkAll(\$(this))) {
                submit = false;
            }

            if (submit)
                this.submit();

            return false;
        });
    </script>
    <script src=\"{{ asset('js/jquery.validate.js') }}\"></script>

    <script type=\"text/javascript\" src=\"{{asset('js/dataTables.bootstrap.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/datatables.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/bootstrap_dropdown_6.js')}}\"></script>
    <script>
        \$('.btn-remove').on('click',function(){
            \$('#compId').val(\$(this).children()[0].value);
            \$('#suprCompModal').modal('toggle');
        });
    </script>

{% endblock %}", "ProjetBundle:Composante:lister.html.twig", "/opt/lampp/htdocs/ssei-master/src/ProjetBundle/Resources/views/Composante/lister.html.twig");
    }
}
