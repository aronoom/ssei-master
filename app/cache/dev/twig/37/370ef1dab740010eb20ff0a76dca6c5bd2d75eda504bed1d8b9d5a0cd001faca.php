<?php

/* ZoneBundle:Commune:index.html.twig */
class __TwigTemplate_8367adf80e64629619d6153fed022768760f78ef073d4a163465b0b93c730458 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ZoneBundle::layout.html.twig", "ZoneBundle:Commune:index.html.twig", 1);
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
        $__internal_759fc6afc50c4ac5bbdb9f637d9457f026d8f4f467e8af91b39eed97fb5f2d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759fc6afc50c4ac5bbdb9f637d9457f026d8f4f467e8af91b39eed97fb5f2d20->enter($__internal_759fc6afc50c4ac5bbdb9f637d9457f026d8f4f467e8af91b39eed97fb5f2d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle:Commune:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_759fc6afc50c4ac5bbdb9f637d9457f026d8f4f467e8af91b39eed97fb5f2d20->leave($__internal_759fc6afc50c4ac5bbdb9f637d9457f026d8f4f467e8af91b39eed97fb5f2d20_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ea3076368fbfca601b3eae3378311f08556642ba0670477de3115c8bb47a515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea3076368fbfca601b3eae3378311f08556642ba0670477de3115c8bb47a515->enter($__internal_2ea3076368fbfca601b3eae3378311f08556642ba0670477de3115c8bb47a515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Commune ";
        
        $__internal_2ea3076368fbfca601b3eae3378311f08556642ba0670477de3115c8bb47a515->leave($__internal_2ea3076368fbfca601b3eae3378311f08556642ba0670477de3115c8bb47a515_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_23b698609f22485f847e68b87e73a998f27875b33cc6c2dd9264f633aab8e577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b698609f22485f847e68b87e73a998f27875b33cc6c2dd9264f633aab8e577->enter($__internal_23b698609f22485f847e68b87e73a998f27875b33cc6c2dd9264f633aab8e577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_23b698609f22485f847e68b87e73a998f27875b33cc6c2dd9264f633aab8e577->leave($__internal_23b698609f22485f847e68b87e73a998f27875b33cc6c2dd9264f633aab8e577_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_c0ef0b272363422f996eaa8ad0108d66a3c706b4a416e2b63f8855c38cd12497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ef0b272363422f996eaa8ad0108d66a3c706b4a416e2b63f8855c38cd12497->enter($__internal_c0ef0b272363422f996eaa8ad0108d66a3c706b4a416e2b63f8855c38cd12497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    <div class=\"page-title\">
        <div class=\"title_left\">
            <ol class=\"breadcrumb\">
                <li><a href=\"\">Acceuil</a></li>
                <li><a href=\"\">Admnistration</a></li>
                <li><a href=\"\">Location</a></li>
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_region");
        echo "\">Régions </a> </li>
                <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_district", array("region_id" => (isset($context["region_id"]) ? $context["region_id"] : $this->getContext($context, "region_id")))), "html", null, true);
        echo "\">Districts </a> </li>
                <li class=\"active\"> Commune </li>
            </ol>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <h1>Commune </h1>
    <input hidden=\"hidden\" id=\"districtId\" name=\"districtId\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["district_id"]) ? $context["district_id"] : $this->getContext($context, "district_id")), "html", null, true);
        echo "\">
    <input hidden=\"hidden\" id=\"regionId\" name=\"regionId\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["region_id"]) ? $context["region_id"] : $this->getContext($context, "region_id")), "html", null, true);
        echo "\">
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h3 class=\"pull-left\">Commune de la district ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
        echo "</h3>
                    <button id=\"btnAjouterCommune\" class=\"btn btn-primary btn-md pull-right\" data-toggle=\"modal\" data-target=\"ajoutCommuneModal\">
                        Ajouter une commune
                    </button>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    ";
        // line 38
        if (((isset($context["communes"]) ? $context["communes"] : $this->getContext($context, "communes")) == null)) {
            // line 39
            echo "                        Aucune commune
                    ";
        } else {
            // line 41
            echo "                        <table id=\"communeTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>Code</th>
                                <th>Désignation</th>
                                <th>/</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["communes"]) ? $context["communes"] : $this->getContext($context, "communes")));
            foreach ($context['_seq'] as $context["_key"] => $context["commune"]) {
                // line 51
                echo "                                <tr>
                                    <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "communeCode", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "communeLibelle", array()), "html", null, true);
                echo "</td>
                                    <td width=\"100px\">
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default btn-sm btn-edit\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" aria-label=\"Center Align\">
                                                <input hidden=\"hidden\" id=\"id\" value=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "id", array()), "html", null, true);
                echo "\" />
                                                <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-danger btn-sm btn-delete\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "id", array()), "html", null, true);
                echo "\">
                                                <input hidden=\"hidden\" id=\"id\" value=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "id", array()), "html", null, true);
                echo "\" />
                                                <input hidden=\"hidden\" id=\"libelle\" value=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "communeLibelle", array()), "html", null, true);
                echo "\" />
                                                <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commune'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Code</th>
                                <th>Désignation</th>
                                <th>/</th>
                            </tr>
                            </tfoot>
                        </table>
                    ";
        }
        // line 79
        echo "                </div>
            </div>
        </div>
    </div>
    <!-- Ajouter Commune -->
    <div style=\"z-index:2016;\" class=\"modal fade\" id=\"ajoutCommuneModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-lg\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" >Ajouter une région</h4>
                </div>
                <form class=\"formulaire\" action=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_ajouter_commune", array("region_id" => (isset($context["region_id"]) ? $context["region_id"] : $this->getContext($context, "region_id")), "district_id" => (isset($context["district_id"]) ? $context["district_id"] : $this->getContext($context, "district_id")))), "html", null, true);
        echo "\" novalidate method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"modal-body\">
                        <div class=\"well\">
                           <div class=\"item form-group\">
                               <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "communeCode", array()), 'label', array("label" => "Code de la commune"));
        echo "
                               </div>
                               <div class=\"col-sm-6\">
                                ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "communeCode", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12", "required" => "true", "class" => "form-control", "autocomplete" => "off")));
        echo "
                              </div>
                               <ul class=\"parsley-errors-list filled\">
                               <li class=\"parsley-required red\">
                                ";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "communeCode", array()), 'errors');
        echo "
                                </li>
                               </ul>
                           </div>
                            <br><br>
                            <div class=\"item form-group\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "communeLibelle", array()), 'label', array("label" => "Désignation de la commune"));
        echo "
                                </div>
                                <div class=\"col-sm-6\">
                                    ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "communeLibelle", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12", "required" => "true", "class" => "form-control", "autocomplete" => "off")));
        echo "
                                </div>
                                <ul class=\"parsley-errors-list filled\">
                                    <li class=\"parsley-required red\">
                                        ";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "communeLibelle", array()), 'errors');
        echo "
                                    </li>
                                </ul>
                            </div>
                            <br><br>
                            ";
        // line 122
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

    <!-- Supprimer commune -->
    <div class=\"modal fade bs-example-modal-md\" data-id=\"\" id=\"suprCommuneModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"well\">
                        <p>Voulez-vous vraiment supprimer la commune <span id=\"label\"></span></p>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <form action=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_supprimer_commune", array("district_id" => (isset($context["district_id"]) ? $context["district_id"] : $this->getContext($context, "district_id")), "region_id" => (isset($context["region_id"]) ? $context["region_id"] : $this->getContext($context, "region_id")))), "html", null, true);
        echo "\" method=\"post\">
                        <input hidden=\"hidden\" id=\"communeId\" name=\"communeId\">
                        <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modification commune -->
    <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modifCommuneModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Modifier une commune</h4>
                </div>
                <div id=\"formModifCommune\">
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c0ef0b272363422f996eaa8ad0108d66a3c706b4a416e2b63f8855c38cd12497->leave($__internal_c0ef0b272363422f996eaa8ad0108d66a3c706b4a416e2b63f8855c38cd12497_prof);

    }

    // line 179
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_44afe37e9dcbd8e96e79618c2c4d65571e47a21b1d64915de979f380346fd7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44afe37e9dcbd8e96e79618c2c4d65571e47a21b1d64915de979f380346fd7f2->enter($__internal_44afe37e9dcbd8e96e79618c2c4d65571e47a21b1d64915de979f380346fd7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 180
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 181
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
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lang.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function(){
            \$('#communeTable').dataTable({\"language\": lang_fr});
            \$('#btnAjouterCommune').on('click',function(){
                \$('#ajoutCommuneModal').modal('toggle');
            });

            \$('.btn-delete').on('click',function(){
                \$(\"#communeId\").val(\$(this).children()[0].value);
                \$(\"#label\").text(\$(this).children()[1].value);
                \$('#suprCommuneModal').modal('toggle');
            });

            \$('.btn-edit').on('click', function(){
                var id = \$(this).children()[0].value;
                var district_id = \$('#districtId').val();
                var region_id = \$('#regionId').val();
                \$.ajax({
                    type: 'GET',
                    url: Routing.generate('zone_modifier_commune', {'district_id': district_id, 'region_id': region_id, 'id': id}),
                    timeout: 3000,
                    success: function(data) {
                        \$('#formModifCommune').children().remove();
                        \$('#formModifCommune').append(data);
                        \$('#modifCommuneModal').modal('show');
                    },
                    error: function() {
                        console.log('La requête n\\'a pas abouti');
                    }
                });
            });
        });

    </script>

";
        
        $__internal_44afe37e9dcbd8e96e79618c2c4d65571e47a21b1d64915de979f380346fd7f2->leave($__internal_44afe37e9dcbd8e96e79618c2c4d65571e47a21b1d64915de979f380346fd7f2_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle:Commune:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 211,  385 => 210,  381 => 209,  377 => 208,  372 => 206,  344 => 181,  339 => 180,  333 => 179,  301 => 153,  267 => 122,  259 => 117,  252 => 113,  246 => 110,  236 => 103,  229 => 99,  223 => 96,  213 => 91,  199 => 79,  187 => 69,  174 => 62,  170 => 61,  166 => 60,  160 => 57,  153 => 53,  149 => 52,  146 => 51,  142 => 50,  131 => 41,  127 => 39,  125 => 38,  115 => 31,  107 => 26,  103 => 25,  93 => 18,  89 => 17,  80 => 10,  74 => 9,  65 => 7,  61 => 6,  56 => 5,  50 => 4,  37 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Commune {% endblock %}
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
                <li><a href=\"{{ path('zone_region') }}\">Régions </a> </li>
                <li><a href=\"{{ path('zone_district', {'region_id': region_id}) }}\">Districts </a> </li>
                <li class=\"active\"> Commune </li>
            </ol>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <h1>Commune </h1>
    <input hidden=\"hidden\" id=\"districtId\" name=\"districtId\" value=\"{{ district_id }}\">
    <input hidden=\"hidden\" id=\"regionId\" name=\"regionId\" value=\"{{ region_id }}\">
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h3 class=\"pull-left\">Commune de la district {{ libelle }}</h3>
                    <button id=\"btnAjouterCommune\" class=\"btn btn-primary btn-md pull-right\" data-toggle=\"modal\" data-target=\"ajoutCommuneModal\">
                        Ajouter une commune
                    </button>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    {% if communes  == null %}
                        Aucune commune
                    {% else %}
                        <table id=\"communeTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>Code</th>
                                <th>Désignation</th>
                                <th>/</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for commune in communes %}
                                <tr>
                                    <td>{{ commune.communeCode }}</td>
                                    <td>{{ commune.communeLibelle }}</td>
                                    <td width=\"100px\">
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default btn-sm btn-edit\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" aria-label=\"Center Align\">
                                                <input hidden=\"hidden\" id=\"id\" value=\"{{ commune.id }}\" />
                                                <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-danger btn-sm btn-delete\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ commune.id }}\">
                                                <input hidden=\"hidden\" id=\"id\" value=\"{{ commune.id }}\" />
                                                <input hidden=\"hidden\" id=\"libelle\" value=\"{{ commune.communeLibelle }}\" />
                                                <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Code</th>
                                <th>Désignation</th>
                                <th>/</th>
                            </tr>
                            </tfoot>
                        </table>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
    <!-- Ajouter Commune -->
    <div style=\"z-index:2016;\" class=\"modal fade\" id=\"ajoutCommuneModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-lg\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" >Ajouter une région</h4>
                </div>
                <form class=\"formulaire\" action=\"{{ path('zone_ajouter_commune', {'region_id': region_id, 'district_id': district_id}) }}\" novalidate method=\"post\" {{ form_enctype(form) }}>
                    <div class=\"modal-body\">
                        <div class=\"well\">
                           <div class=\"item form-group\">
                               <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                {{ form_label(form.communeCode,\"Code de la commune\") }}
                               </div>
                               <div class=\"col-sm-6\">
                                {{ form_widget(form.communeCode,{ 'attr' : {'class':'form-control col-md-7 col-xs-12','required':'true','class':'form-control','autocomplete':'off'} })}}
                              </div>
                               <ul class=\"parsley-errors-list filled\">
                               <li class=\"parsley-required red\">
                                {{ form_errors(form.communeCode)}}
                                </li>
                               </ul>
                           </div>
                            <br><br>
                            <div class=\"item form-group\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    {{ form_label(form.communeLibelle,\"Désignation de la commune\") }}
                                </div>
                                <div class=\"col-sm-6\">
                                    {{ form_widget(form.communeLibelle,{ 'attr' : {'class':'form-control col-md-7 col-xs-12','required':'true','class':'form-control','autocomplete':'off'} })}}
                                </div>
                                <ul class=\"parsley-errors-list filled\">
                                    <li class=\"parsley-required red\">
                                        {{ form_errors(form.communeLibelle)}}
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

    <!-- Supprimer commune -->
    <div class=\"modal fade bs-example-modal-md\" data-id=\"\" id=\"suprCommuneModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"well\">
                        <p>Voulez-vous vraiment supprimer la commune <span id=\"label\"></span></p>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <form action=\"{{ path('zone_supprimer_commune', {'district_id': district_id, 'region_id': region_id})}}\" method=\"post\">
                        <input hidden=\"hidden\" id=\"communeId\" name=\"communeId\">
                        <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modification commune -->
    <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modifCommuneModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Modifier une commune</h4>
                </div>
                <div id=\"formModifCommune\">
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
    <script type=\"text/javascript\" src=\"{{asset('js/lang.js')}}\"></script>
    <script>
        \$(function(){
            \$('#communeTable').dataTable({\"language\": lang_fr});
            \$('#btnAjouterCommune').on('click',function(){
                \$('#ajoutCommuneModal').modal('toggle');
            });

            \$('.btn-delete').on('click',function(){
                \$(\"#communeId\").val(\$(this).children()[0].value);
                \$(\"#label\").text(\$(this).children()[1].value);
                \$('#suprCommuneModal').modal('toggle');
            });

            \$('.btn-edit').on('click', function(){
                var id = \$(this).children()[0].value;
                var district_id = \$('#districtId').val();
                var region_id = \$('#regionId').val();
                \$.ajax({
                    type: 'GET',
                    url: Routing.generate('zone_modifier_commune', {'district_id': district_id, 'region_id': region_id, 'id': id}),
                    timeout: 3000,
                    success: function(data) {
                        \$('#formModifCommune').children().remove();
                        \$('#formModifCommune').append(data);
                        \$('#modifCommuneModal').modal('show');
                    },
                    error: function() {
                        console.log('La requête n\\'a pas abouti');
                    }
                });
            });
        });

    </script>

{% endblock %}", "ZoneBundle:Commune:index.html.twig", "/opt/lampp/htdocs/ssei/src/ZoneBundle/Resources/views/Commune/index.html.twig");
    }
}
