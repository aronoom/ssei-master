<?php

/* ZoneBundle:District:index.html.twig */
class __TwigTemplate_7994818ec77f8a0584925d00249bc197910f9267c7dcbf4f6283ca84a9ad01d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ZoneBundle::layout.html.twig", "ZoneBundle:District:index.html.twig", 1);
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
        $__internal_46fccf46c7e16c3526fde43b46b3e7ecb329711349ddc4562307709026510f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46fccf46c7e16c3526fde43b46b3e7ecb329711349ddc4562307709026510f9f->enter($__internal_46fccf46c7e16c3526fde43b46b3e7ecb329711349ddc4562307709026510f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle:District:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46fccf46c7e16c3526fde43b46b3e7ecb329711349ddc4562307709026510f9f->leave($__internal_46fccf46c7e16c3526fde43b46b3e7ecb329711349ddc4562307709026510f9f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fa4e8d26e562d8fff2eb95345b78faf6bb526687b7031560264037f378a8f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa4e8d26e562d8fff2eb95345b78faf6bb526687b7031560264037f378a8f0d->enter($__internal_5fa4e8d26e562d8fff2eb95345b78faf6bb526687b7031560264037f378a8f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " District ";
        
        $__internal_5fa4e8d26e562d8fff2eb95345b78faf6bb526687b7031560264037f378a8f0d->leave($__internal_5fa4e8d26e562d8fff2eb95345b78faf6bb526687b7031560264037f378a8f0d_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc00a8173553247ca283ba444f442b8c296d84801213847c48bb9d33f6fd3680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc00a8173553247ca283ba444f442b8c296d84801213847c48bb9d33f6fd3680->enter($__internal_bc00a8173553247ca283ba444f442b8c296d84801213847c48bb9d33f6fd3680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_bc00a8173553247ca283ba444f442b8c296d84801213847c48bb9d33f6fd3680->leave($__internal_bc00a8173553247ca283ba444f442b8c296d84801213847c48bb9d33f6fd3680_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_204ac81389ff120002ef82563579f48a2d0b04e63d915cdf929fcc76a4de8fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204ac81389ff120002ef82563579f48a2d0b04e63d915cdf929fcc76a4de8fad->enter($__internal_204ac81389ff120002ef82563579f48a2d0b04e63d915cdf929fcc76a4de8fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                <li class=\"active\"> District </li>
            </ol>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <h1>District</h1>
    <input hidden=\"hidden\" id=\"regionId\" name=\"regionId\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["region_id"]) ? $context["region_id"] : $this->getContext($context, "region_id")), "html", null, true);
        echo "\">
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h3 class=\"pull-left\">District de la region ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
        echo "</h3>
                    <button id=\"btnAjouterDistrict\" class=\"btn btn-primary btn-md pull-right\" data-toggle=\"modal\" data-target=\"ajoutDistrictModal\">
                        Ajouter une district
                    </button>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    ";
        // line 36
        if (((isset($context["districts"]) ? $context["districts"] : $this->getContext($context, "districts")) == null)) {
            // line 37
            echo "                        Aucun district
                    ";
        } else {
            // line 39
            echo "                        <table id=\"districtTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>Code</th>
                                <th>Désignation</th>
                                <th>/</th>
                                <th>Communes</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["districts"]) ? $context["districts"] : $this->getContext($context, "districts")));
            foreach ($context['_seq'] as $context["_key"] => $context["district"]) {
                // line 50
                echo "                                <tr>
                                    <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["district"], "districtCode", array()), "html", null, true);
                echo "</td>
                                    <td><a class=\"lien\" href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_commune", array("region_id" => (isset($context["region_id"]) ? $context["region_id"] : $this->getContext($context, "region_id")), "district_id" => $this->getAttribute($context["district"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["district"], "districtLibelle", array()), "html", null, true);
                echo "</a></td>
                                    <td width=\"100px\">
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default btn-sm btn-edit\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" aria-label=\"Center Align\">
                                                <input hidden=\"hidden\" id=\"id\" value=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["district"], "id", array()), "html", null, true);
                echo "\" />
                                                <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-danger btn-sm btn-delete\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["district"], "id", array()), "html", null, true);
                echo "\">
                                                <input hidden=\"hidden\" id=\"id\" value=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["district"], "id", array()), "html", null, true);
                echo "\" />
                                                <input hidden=\"hidden\" id=\"libelle\" value=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["district"], "districtLibelle", array()), "html", null, true);
                echo "\" />
                                                <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                            </button>
                                        </div>
                                    </td>
                                    <td width=\"50px\"><a class=\"btn btn-sm btn-default\" href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_commune", array("region_id" => (isset($context["region_id"]) ? $context["region_id"] : $this->getContext($context, "region_id")), "district_id" => $this->getAttribute($context["district"], "id", array()))), "html", null, true);
                echo "\">&raquo;</a></td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['district'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Code</th>
                                <th>Désignation</th>
                                <th>/</th>
                                <th>Communes</th>
                            </tr>
                            </tfoot>
                        </table>
                    ";
        }
        // line 80
        echo "                </div>
            </div>
        </div>
    </div>

    <!-- Ajouter District -->
    <div style=\"z-index:2016;\" class=\"modal fade\" id=\"ajoutDistrictModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-lg\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" >Ajouter un district</h4>
                </div>
                <form class=\"formulaire\" action=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_ajouter_district", array("region_id" => (isset($context["region_id"]) ? $context["region_id"] : $this->getContext($context, "region_id")))), "html", null, true);
        echo "\" novalidate method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"modal-body\">
                        <div class=\"well\">
                            <div class=\"item form-group\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "districtCode", array()), 'label', array("label" => "Code du district"));
        echo "
                                </div>
                                <div class=\"col-sm-6\">
                                    ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "districtCode", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12", "required" => "true", "class" => "form-control", "autocomplete" => "off")));
        echo "
                                </div>
                                <ul class=\"parsley-errors-list filled\">
                                    <li class=\"parsley-required red\">
                                        ";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "districtCode", array()), 'errors');
        echo "
                                    </li>
                                </ul>
                            </div>
                            <br><br>
                            <div class=\"item form-group\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "districtLibelle", array()), 'label', array("label" => "Désignation du district"));
        echo "
                                </div>
                                <div class=\"col-sm-6\">
                                    ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "districtLibelle", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12", "required" => "true", "class" => "form-control", "autocomplete" => "off")));
        echo "
                                </div>
                                <ul class=\"parsley-errors-list filled\">
                                    <li class=\"parsley-required red\">
                                        ";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "districtLibelle", array()), 'errors');
        echo "
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <br><br>
                        ";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
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

    <!-- Supprimer district -->
    <div class=\"modal fade bs-example-modal-md\" data-id=\"\" id=\"suprDistrictModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"well\">
                        <p>Voulez-vous vraiment supprimer le district <span id=\"label\"></span></p>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <form action=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_supprimer_district", array("region_id" => (isset($context["region_id"]) ? $context["region_id"] : $this->getContext($context, "region_id")))), "html", null, true);
        echo "\" method=\"post\">
                        <input hidden=\"hidden\" id=\"districtId\" name=\"districtId\">
                        <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Modification district -->
    <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modifDistrictModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Modifier un district</h4>
                </div>
                <div id=\"formModifDistrict\">
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_204ac81389ff120002ef82563579f48a2d0b04e63d915cdf929fcc76a4de8fad->leave($__internal_204ac81389ff120002ef82563579f48a2d0b04e63d915cdf929fcc76a4de8fad_prof);

    }

    // line 184
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fb96702db6fc9239cde528fffd43bc031eeb0b0136d536d6221ec7dc6c880e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb96702db6fc9239cde528fffd43bc031eeb0b0136d536d6221ec7dc6c880e1e->enter($__internal_fb96702db6fc9239cde528fffd43bc031eeb0b0136d536d6221ec7dc6c880e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 185
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 186
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
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lang.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function(){
            var table = \$('#districtTable').dataTable({\"language\": lang_fr});
            \$('#btnAjouterDistrict').on('click',function(){
                \$('#ajoutDistrictModal').modal('toggle');
            });
        });

        \$(function(){

            \$('.btn-delete').on('click',function(){
                \$(\"#districtId\").val(\$(this).children()[0].value);
                \$(\"#label\").text(\$(this).children()[1].value);
                \$('#suprDistrictModal').modal('toggle');
            });

            \$('.btn-edit').on('click', function(){
                var id = \$(this).children()[0].value;
                var region_id = \$('#regionId').val();
                \$.ajax({
                    type: 'GET',
                    url: Routing.generate('zone_modifier_district', {'region_id': region_id, 'id': id}),
                    timeout: 3000,
                    success: function(data) {
                        \$('#formModifDistrict').children().remove();
                        \$('#formModifDistrict').append(data);
                        \$('#modifDistrictModal').modal('show');
                    },
                    error: function() {
                        console.log('La requête n\\'a pas abouti');
                    }
                });
            });
        });

    </script>

";
        
        $__internal_fb96702db6fc9239cde528fffd43bc031eeb0b0136d536d6221ec7dc6c880e1e->leave($__internal_fb96702db6fc9239cde528fffd43bc031eeb0b0136d536d6221ec7dc6c880e1e_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle:District:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 216,  389 => 215,  385 => 214,  381 => 213,  376 => 211,  348 => 186,  343 => 185,  337 => 184,  302 => 155,  269 => 125,  260 => 119,  253 => 115,  247 => 112,  237 => 105,  230 => 101,  224 => 98,  214 => 93,  199 => 80,  186 => 69,  177 => 66,  169 => 61,  165 => 60,  161 => 59,  155 => 56,  146 => 52,  142 => 51,  139 => 50,  135 => 49,  123 => 39,  119 => 37,  117 => 36,  107 => 29,  99 => 24,  89 => 17,  80 => 10,  74 => 9,  65 => 7,  61 => 6,  56 => 5,  50 => 4,  37 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} District {% endblock %}
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
                <li class=\"active\"> District </li>
            </ol>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <h1>District</h1>
    <input hidden=\"hidden\" id=\"regionId\" name=\"regionId\" value=\"{{ region_id }}\">
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h3 class=\"pull-left\">District de la region {{ libelle }}</h3>
                    <button id=\"btnAjouterDistrict\" class=\"btn btn-primary btn-md pull-right\" data-toggle=\"modal\" data-target=\"ajoutDistrictModal\">
                        Ajouter une district
                    </button>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    {% if districts  == null %}
                        Aucun district
                    {% else %}
                        <table id=\"districtTable\" class=\"table table-responsive table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>Code</th>
                                <th>Désignation</th>
                                <th>/</th>
                                <th>Communes</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for district in districts %}
                                <tr>
                                    <td>{{ district.districtCode }}</td>
                                    <td><a class=\"lien\" href=\"{{ path('zone_commune', {'region_id': region_id, 'district_id':district.id}) }}\">{{ district.districtLibelle }}</a></td>
                                    <td width=\"100px\">
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default btn-sm btn-edit\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" aria-label=\"Center Align\">
                                                <input hidden=\"hidden\" id=\"id\" value=\"{{ district.id }}\" />
                                                <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-danger btn-sm btn-delete\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ district.id }}\">
                                                <input hidden=\"hidden\" id=\"id\" value=\"{{ district.id }}\" />
                                                <input hidden=\"hidden\" id=\"libelle\" value=\"{{ district.districtLibelle }}\" />
                                                <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                            </button>
                                        </div>
                                    </td>
                                    <td width=\"50px\"><a class=\"btn btn-sm btn-default\" href=\"{{ path('zone_commune', {'region_id': region_id, 'district_id':district.id}) }}\">&raquo;</a></td>
                                </tr>
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Code</th>
                                <th>Désignation</th>
                                <th>/</th>
                                <th>Communes</th>
                            </tr>
                            </tfoot>
                        </table>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    <!-- Ajouter District -->
    <div style=\"z-index:2016;\" class=\"modal fade\" id=\"ajoutDistrictModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-lg\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" >Ajouter un district</h4>
                </div>
                <form class=\"formulaire\" action=\"{{ path('zone_ajouter_district', {'region_id': region_id}) }}\" novalidate method=\"post\" {{ form_enctype(form) }}>
                    <div class=\"modal-body\">
                        <div class=\"well\">
                            <div class=\"item form-group\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    {{ form_label(form.districtCode,\"Code du district\") }}
                                </div>
                                <div class=\"col-sm-6\">
                                    {{ form_widget(form.districtCode,{ 'attr' : {'class':'form-control col-md-7 col-xs-12','required':'true','class':'form-control','autocomplete':'off'} })}}
                                </div>
                                <ul class=\"parsley-errors-list filled\">
                                    <li class=\"parsley-required red\">
                                        {{ form_errors(form.districtCode)}}
                                    </li>
                                </ul>
                            </div>
                            <br><br>
                            <div class=\"item form-group\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    {{ form_label(form.districtLibelle,\"Désignation du district\") }}
                                </div>
                                <div class=\"col-sm-6\">
                                    {{ form_widget(form.districtLibelle,{ 'attr' : {'class':'form-control col-md-7 col-xs-12','required':'true','class':'form-control','autocomplete':'off'} })}}
                                </div>
                                <ul class=\"parsley-errors-list filled\">
                                    <li class=\"parsley-required red\">
                                        {{ form_errors(form.districtLibelle)}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <br><br>
                        {{form_rest(form)}}
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

    <!-- Supprimer district -->
    <div class=\"modal fade bs-example-modal-md\" data-id=\"\" id=\"suprDistrictModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"well\">
                        <p>Voulez-vous vraiment supprimer le district <span id=\"label\"></span></p>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <form action=\"{{ path('zone_supprimer_district', {'region_id': region_id})}}\" method=\"post\">
                        <input hidden=\"hidden\" id=\"districtId\" name=\"districtId\">
                        <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Modification district -->
    <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modifDistrictModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Modifier un district</h4>
                </div>
                <div id=\"formModifDistrict\">
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
            var table = \$('#districtTable').dataTable({\"language\": lang_fr});
            \$('#btnAjouterDistrict').on('click',function(){
                \$('#ajoutDistrictModal').modal('toggle');
            });
        });

        \$(function(){

            \$('.btn-delete').on('click',function(){
                \$(\"#districtId\").val(\$(this).children()[0].value);
                \$(\"#label\").text(\$(this).children()[1].value);
                \$('#suprDistrictModal').modal('toggle');
            });

            \$('.btn-edit').on('click', function(){
                var id = \$(this).children()[0].value;
                var region_id = \$('#regionId').val();
                \$.ajax({
                    type: 'GET',
                    url: Routing.generate('zone_modifier_district', {'region_id': region_id, 'id': id}),
                    timeout: 3000,
                    success: function(data) {
                        \$('#formModifDistrict').children().remove();
                        \$('#formModifDistrict').append(data);
                        \$('#modifDistrictModal').modal('show');
                    },
                    error: function() {
                        console.log('La requête n\\'a pas abouti');
                    }
                });
            });
        });

    </script>

{% endblock %}", "ZoneBundle:District:index.html.twig", "/opt/lampp/htdocs/ssei-master/src/ZoneBundle/Resources/views/District/index.html.twig");
    }
}
