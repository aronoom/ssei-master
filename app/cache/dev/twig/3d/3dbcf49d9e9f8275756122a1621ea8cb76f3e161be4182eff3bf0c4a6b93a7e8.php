<?php

/* ZoneBundle:Region:index.html.twig */
class __TwigTemplate_a794b451d4ea483e06fd8acb056347a0bee16c77d71597583e223c549d693bf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ZoneBundle::layout.html.twig", "ZoneBundle:Region:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ZoneBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39cddc2a0180fed5b7af31c236cc34e63d916f9e3d3df48f00b8ac0d0d08e9b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cddc2a0180fed5b7af31c236cc34e63d916f9e3d3df48f00b8ac0d0d08e9b4->enter($__internal_39cddc2a0180fed5b7af31c236cc34e63d916f9e3d3df48f00b8ac0d0d08e9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle:Region:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39cddc2a0180fed5b7af31c236cc34e63d916f9e3d3df48f00b8ac0d0d08e9b4->leave($__internal_39cddc2a0180fed5b7af31c236cc34e63d916f9e3d3df48f00b8ac0d0d08e9b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6d5d4c521288bbff91c886438a767ad26e916659798279fb63ffbf142b711ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d5d4c521288bbff91c886438a767ad26e916659798279fb63ffbf142b711ad->enter($__internal_a6d5d4c521288bbff91c886438a767ad26e916659798279fb63ffbf142b711ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Région ";
        
        $__internal_a6d5d4c521288bbff91c886438a767ad26e916659798279fb63ffbf142b711ad->leave($__internal_a6d5d4c521288bbff91c886438a767ad26e916659798279fb63ffbf142b711ad_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_68ad966a654a042f5899a617b7ecabf56d5a666558c41eef291847f9b120459b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ad966a654a042f5899a617b7ecabf56d5a666558c41eef291847f9b120459b->enter($__internal_68ad966a654a042f5899a617b7ecabf56d5a666558c41eef291847f9b120459b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_68ad966a654a042f5899a617b7ecabf56d5a666558c41eef291847f9b120459b->leave($__internal_68ad966a654a042f5899a617b7ecabf56d5a666558c41eef291847f9b120459b_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_f1a10753f300001ceebfd5092c4c903c0fc57ba9659e0d6c70de0e3018addb9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a10753f300001ceebfd5092c4c903c0fc57ba9659e0d6c70de0e3018addb9b->enter($__internal_f1a10753f300001ceebfd5092c4c903c0fc57ba9659e0d6c70de0e3018addb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    <div class=\"page-title\">
        <div class=\"title_left\">
            <ol class=\"breadcrumb\">
                <li><a href=\"\">Acceuil</a></li>
                <li><a href=\"\">Admnistration</a></li>
                <li><a href=\"\">Location</a></li>
                <li class=\"active\"> Région </li>
            </ol>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <h1>Région</h1>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <button id=\"btnAjouterRegion\" class=\"btn btn-primary pull-right\" data-toggle=\"modal\" data-target=\"ajoutRegionModal\">
                        Ajouter une région
                    </button>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <table id=\"regionTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th>Code</th>
                            <th>Désignation</th>
                            <th>/</th>
                            <th>Districts</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 43
        if (((isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")) == null)) {
            // line 44
            echo "                            Aucune region
                        ";
        }
        // line 46
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 47
            echo "                            <tr>
                                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "regionCode", array()), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_district", array("region_id" => $this->getAttribute($context["region"], "id", array()))), "html", null, true);
            echo "\" class=\"lien\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "regionLibelle", array()), "html", null, true);
            echo "</a></td>
                                <td width=\"100px\">
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm btn-edit\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" aria-label=\"Center Align\">
                                            <input hidden=\"hidden\" id=\"id\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "id", array()), "html", null, true);
            echo "\" />
                                            <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-danger btn-sm btn-delete\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "id", array()), "html", null, true);
            echo "\">
                                            <input hidden=\"hidden\" id=\"id\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "id", array()), "html", null, true);
            echo "\" />
                                            <input hidden=\"hidden\" id=\"libelle\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "regionLibelle", array()), "html", null, true);
            echo "\" />
                                            <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                        </button>
                                    </div>
                                </td>
                                <td width=\"50px\"><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_district", array("region_id" => $this->getAttribute($context["region"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default btn-sm\">&raquo;</a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Code</th>
                            <th>Désignation</th>
                            <th>/</th>
                            <th>Districts</th>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- Ajouter Region -->
    <div style=\"z-index:2016;\" class=\"modal fade\" id=\"ajoutRegionModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-lg\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" >Ajouter une région</h4>
                </div>
                <form class=\"formulaire\" action=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_ajouter_region");
        echo "\" novalidate method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"modal-body\">
                        <div class=\"well\">
                            <div class=\"item form-group\">
                             <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regionCode", array()), 'label', array("label" => "Code de la région"));
        echo "
                             </div>
                             <div class=\"col-sm-6\">
                                   ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regionCode", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12", "required" => "true", "class" => "form-control", "autocomplete" => "off")));
        echo "
                            </div>
                                <ul class=\"parsley-errors-list filled\">
                                    <li class=\"parsley-required red\">
                                        ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regionCode", array()), 'errors');
        echo "
                                    </li>
                                </ul>
                            </div>
                            <br><br>
                            <div class=\"item form-group\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regionLibelle", array()), 'label', array("label" => "Désignation de la région"));
        echo "
                                </div>
                                <div class=\"col-sm-6\">
                                    ";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regionLibelle", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12", "required" => "true", "class" => "form-control", "autocomplete" => "off")));
        echo "
                                </div>
                                <ul class=\"parsley-errors-list filled\">
                                    <li class=\"parsley-required red\">
                                        ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "regionLibelle", array()), 'errors');
        echo "
                                    </li>
                                </ul>
                            </div>
                            <br><br>
                            ";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        </div>
                    </div>
                    <div class=\"item form-group modal-footer\">
                        <div class=\"col-md-9 col-sm-6 col-xs-12\">
                            <div class=\"pull-right\">
                                <button class=\"btn btn-primary\" id=\"sub\" type=\"submit\">Ajouter</button>
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Supprimer region -->
    <div class=\"modal fade bs-example-modal-md\" data-id=\"\" id=\"suprRegionModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"well\">
                        <p>Voulez-vous vraiment supprimer la region <span id=\"label\"></span></p>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <form action=\"";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_supprimer_region");
        echo "\" method=\"post\">
                        <input hidden=\"hidden\" id=\"regionId\" name=\"regionId\">
                        <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modification region -->
    <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modifRegionModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Modifier une région</h4>
                </div>
                <div id=\"formModifRegion\">
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_f1a10753f300001ceebfd5092c4c903c0fc57ba9659e0d6c70de0e3018addb9b->leave($__internal_f1a10753f300001ceebfd5092c4c903c0fc57ba9659e0d6c70de0e3018addb9b_prof);

    }

    // line 177
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1df012487624fc5db7798633495f51a85c13a35622d0a6fa9c379611b8767243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df012487624fc5db7798633495f51a85c13a35622d0a6fa9c379611b8767243->enter($__internal_1df012487624fc5db7798633495f51a85c13a35622d0a6fa9c379611b8767243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 178
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/validator/validator.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
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
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lang.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function(){
        var table = \$('#regionTable').dataTable({\"language\": lang_fr});

            \$('#btnAjouterRegion').on('click',function(){
                \$('#ajoutRegionModal').modal('toggle');
            });
        });

        \$(function(){

            \$('.btn-delete').on('click',function(){
                \$(\"#label\").text(\$(this).children()[1].value);
                \$(\"#regionId\").val(\$(this).children()[0].value);
                \$('#suprRegionModal').modal('toggle');
            });

            \$('.btn-edit').on('click', function(){
                var id = \$(this).children()[0].value;
                \$.ajax({
                    type: 'GET',
                    url: Routing.generate('zone_modifier_region', {'id': id}),
                    timeout: 3000,
                    success: function(data) {
                        \$('#formModifRegion').children().remove();
                        \$('#formModifRegion').append(data);
                        \$('#modifRegionModal').modal('show');
                    },
                    error: function() {
                        console.log('La requête n\\'a pas abouti');
                    }
                });
            });
        });

    </script>

";
        
        $__internal_1df012487624fc5db7798633495f51a85c13a35622d0a6fa9c379611b8767243->leave($__internal_1df012487624fc5db7798633495f51a85c13a35622d0a6fa9c379611b8767243_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle:Region:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 209,  370 => 208,  366 => 207,  338 => 182,  334 => 181,  329 => 179,  324 => 178,  318 => 177,  285 => 150,  252 => 120,  244 => 115,  237 => 111,  231 => 108,  221 => 101,  214 => 97,  208 => 94,  198 => 89,  173 => 66,  164 => 63,  156 => 58,  152 => 57,  148 => 56,  142 => 53,  133 => 49,  129 => 48,  126 => 47,  121 => 46,  117 => 44,  115 => 43,  80 => 10,  74 => 9,  65 => 7,  61 => 6,  56 => 5,  50 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"ZoneBundle::layout.html.twig\" %}

{% block title %}{{ parent() }} Région {% endblock %}
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
                <li><a href=\"\">Admnistration</a></li>
                <li><a href=\"\">Location</a></li>
                <li class=\"active\"> Région </li>
            </ol>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <h1>Région</h1>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <button id=\"btnAjouterRegion\" class=\"btn btn-primary pull-right\" data-toggle=\"modal\" data-target=\"ajoutRegionModal\">
                        Ajouter une région
                    </button>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <table id=\"regionTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th>Code</th>
                            <th>Désignation</th>
                            <th>/</th>
                            <th>Districts</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% if regions  == null %}
                            Aucune region
                        {% endif %}
                        {% for region in regions %}
                            <tr>
                                <td>{{ region.regionCode }}</td>
                                <td><a href=\"{{ path('zone_district', {'region_id': region.id }) }}\" class=\"lien\" >{{ region.regionLibelle }}</a></td>
                                <td width=\"100px\">
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-default btn-sm btn-edit\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" aria-label=\"Center Align\">
                                            <input hidden=\"hidden\" id=\"id\" value=\"{{ region.id }}\" />
                                            <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-danger btn-sm btn-delete\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ region.id }}\">
                                            <input hidden=\"hidden\" id=\"id\" value=\"{{ region.id }}\" />
                                            <input hidden=\"hidden\" id=\"libelle\" value=\"{{ region.regionLibelle }}\" />
                                            <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                        </button>
                                    </div>
                                </td>
                                <td width=\"50px\"><a href=\"{{ path('zone_district', {'region_id': region.id }) }}\" class=\"btn btn-default btn-sm\">&raquo;</a></td>
                            </tr>
                        {% endfor %}
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Code</th>
                            <th>Désignation</th>
                            <th>/</th>
                            <th>Districts</th>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- Ajouter Region -->
    <div style=\"z-index:2016;\" class=\"modal fade\" id=\"ajoutRegionModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-lg\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" >Ajouter une région</h4>
                </div>
                <form class=\"formulaire\" action=\"{{ path('zone_ajouter_region') }}\" novalidate method=\"post\" {{ form_enctype(form) }}>
                    <div class=\"modal-body\">
                        <div class=\"well\">
                            <div class=\"item form-group\">
                             <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                {{ form_label(form.regionCode,\"Code de la région\") }}
                             </div>
                             <div class=\"col-sm-6\">
                                   {{ form_widget(form.regionCode,{ 'attr' : {'class':'form-control col-md-7 col-xs-12','required':'true','class':'form-control','autocomplete':'off'} })}}
                            </div>
                                <ul class=\"parsley-errors-list filled\">
                                    <li class=\"parsley-required red\">
                                        {{ form_errors(form.regionCode)}}
                                    </li>
                                </ul>
                            </div>
                            <br><br>
                            <div class=\"item form-group\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    {{ form_label(form.regionLibelle,\"Désignation de la région\") }}
                                </div>
                                <div class=\"col-sm-6\">
                                    {{ form_widget(form.regionLibelle,{ 'attr' : {'class':'form-control col-md-7 col-xs-12','required':'true','class':'form-control','autocomplete':'off'} })}}
                                </div>
                                <ul class=\"parsley-errors-list filled\">
                                    <li class=\"parsley-required red\">
                                        {{ form_errors(form.regionLibelle)}}
                                    </li>
                                </ul>
                            </div>
                            <br><br>
                            {{form_rest(form)}}
                        </div>
                    </div>
                    <div class=\"item form-group modal-footer\">
                        <div class=\"col-md-9 col-sm-6 col-xs-12\">
                            <div class=\"pull-right\">
                                <button class=\"btn btn-primary\" id=\"sub\" type=\"submit\">Ajouter</button>
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Supprimer region -->
    <div class=\"modal fade bs-example-modal-md\" data-id=\"\" id=\"suprRegionModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"well\">
                        <p>Voulez-vous vraiment supprimer la region <span id=\"label\"></span></p>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <form action=\"{{ path('zone_supprimer_region')}}\" method=\"post\">
                        <input hidden=\"hidden\" id=\"regionId\" name=\"regionId\">
                        <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modification region -->
    <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modifRegionModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Modifier une région</h4>
                </div>
                <div id=\"formModifRegion\">
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{parent()}}
    <script src=\"{{asset('vendors/validator/validator.js')}}\"></script>

    <script type=\"text/javascript\" src=\"{{asset('js/dataTables.bootstrap.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/datatables.min.js')}}\"></script>
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
    <script type=\"text/javascript\" src=\"{{asset('js/bootstrap_dropdown_6.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/lang.js')}}\"></script>
    <script>
        \$(function(){
        var table = \$('#regionTable').dataTable({\"language\": lang_fr});

            \$('#btnAjouterRegion').on('click',function(){
                \$('#ajoutRegionModal').modal('toggle');
            });
        });

        \$(function(){

            \$('.btn-delete').on('click',function(){
                \$(\"#label\").text(\$(this).children()[1].value);
                \$(\"#regionId\").val(\$(this).children()[0].value);
                \$('#suprRegionModal').modal('toggle');
            });

            \$('.btn-edit').on('click', function(){
                var id = \$(this).children()[0].value;
                \$.ajax({
                    type: 'GET',
                    url: Routing.generate('zone_modifier_region', {'id': id}),
                    timeout: 3000,
                    success: function(data) {
                        \$('#formModifRegion').children().remove();
                        \$('#formModifRegion').append(data);
                        \$('#modifRegionModal').modal('show');
                    },
                    error: function() {
                        console.log('La requête n\\'a pas abouti');
                    }
                });
            });
        });

    </script>

{% endblock %}", "ZoneBundle:Region:index.html.twig", "/opt/lampp/htdocs/ssei/src/ZoneBundle/Resources/views/Region/index.html.twig");
    }
}
