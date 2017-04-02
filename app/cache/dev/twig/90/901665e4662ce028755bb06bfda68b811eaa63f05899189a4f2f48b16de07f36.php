<?php

/* ProjetBundle:DescriptifActivite:lister.html.twig */
class __TwigTemplate_0ae32399bb2bbc326c4ed4730c1560cc7195b16db9481b3e3b4b4c6cc1d89cb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjetBundle::layout.html.twig", "ProjetBundle:DescriptifActivite:lister.html.twig", 1);
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
        $__internal_a43b77546f74814f4d2e15dd9d9f3a108fbfb8d3b402b681c25c51378bcf0f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43b77546f74814f4d2e15dd9d9f3a108fbfb8d3b402b681c25c51378bcf0f59->enter($__internal_a43b77546f74814f4d2e15dd9d9f3a108fbfb8d3b402b681c25c51378bcf0f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:DescriptifActivite:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a43b77546f74814f4d2e15dd9d9f3a108fbfb8d3b402b681c25c51378bcf0f59->leave($__internal_a43b77546f74814f4d2e15dd9d9f3a108fbfb8d3b402b681c25c51378bcf0f59_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fe0d0fe6e1998e728df65fc11fb61233758ae48bc12418d5de6a8f76fe9a898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe0d0fe6e1998e728df65fc11fb61233758ae48bc12418d5de6a8f76fe9a898->enter($__internal_7fe0d0fe6e1998e728df65fc11fb61233758ae48bc12418d5de6a8f76fe9a898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Descriptifs pour activité ";
        
        $__internal_7fe0d0fe6e1998e728df65fc11fb61233758ae48bc12418d5de6a8f76fe9a898->leave($__internal_7fe0d0fe6e1998e728df65fc11fb61233758ae48bc12418d5de6a8f76fe9a898_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_682a78e14f7c57429bdeec81b8b284ba8814cc1a73a99378647456a9655552b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682a78e14f7c57429bdeec81b8b284ba8814cc1a73a99378647456a9655552b2->enter($__internal_682a78e14f7c57429bdeec81b8b284ba8814cc1a73a99378647456a9655552b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_682a78e14f7c57429bdeec81b8b284ba8814cc1a73a99378647456a9655552b2->leave($__internal_682a78e14f7c57429bdeec81b8b284ba8814cc1a73a99378647456a9655552b2_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_918629a0dd5afc0cf56b97ca79504737bdf98c461686c5ad60f095040f4e8468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918629a0dd5afc0cf56b97ca79504737bdf98c461686c5ad60f095040f4e8468->enter($__internal_918629a0dd5afc0cf56b97ca79504737bdf98c461686c5ad60f095040f4e8468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index", array("id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")))), "html", null, true);
        echo "\"> Composante </a></li>
                    <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_lister_activite", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")))), "html", null, true);
        echo "\"> Activité </a></li>
                    <li class=\"active\"> Déscriptif </li>
                </ol>
            </div>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_ajouter", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")), "act_id" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
        Ajouter un descriptif
    </a>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">

            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Déscriptifs de l'activité ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "codeActivite", array()), "html", null, true);
        echo "</h2>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <div>
                        ";
        // line 38
        if (twig_test_empty((isset($context["descriptifs"]) ? $context["descriptifs"] : $this->getContext($context, "descriptifs")))) {
            // line 39
            echo "                            <span style=\"color: darkgrey\">Aucune descriptif</span>
                        ";
        } else {
            // line 41
            echo "                            <ul>
                                <table id=\"descriptifTable\" class=\"table table-responsive table-striped table-bordered\">
                                    <thead>
                                    <th style=\"display:none;\">#</th>
                                    <th>Indicateur</th>
                                    <th>Unité</th>
                                    <th>Baseline</th>
                                    <th>Objectif projet</th>
                                    <th>Réalisation</th>
                                    <th>Explication</th>
                                    <th>Commune</th>
                                    <th>Actions</th>
                                    </thead>
                                    <tbody>
                                    ";
            // line 55
            if ((twig_length_filter($this->env, (isset($context["descriptifs"]) ? $context["descriptifs"] : $this->getContext($context, "descriptifs"))) == 0)) {
                // line 56
                echo "                                        Aucun descriptif
                                    ";
            } else {
                // line 58
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["descriptifs"]) ? $context["descriptifs"] : $this->getContext($context, "descriptifs")));
                foreach ($context['_seq'] as $context["_key"] => $context["descriptif"]) {
                    // line 59
                    echo "                                            <tr>
                                                <td  style=\"display:none;\">";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["descriptif"], "id", array()), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["descriptif"], "indicateur", array()), "libelleIndicateur", array()), "html", null, true);
                    echo "</td>
                                                <td>
                                                    ";
                    // line 63
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["descriptif"], "unites", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["unite"]) {
                        // line 64
                        echo "                                                        -";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["unite"], "libelleUnite", array()), "html", null, true);
                        echo "</br>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unite'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 66
                    echo "                                                </td>
                                                <td>";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["descriptif"], "baselineDescParUi", array()), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($context["descriptif"], "objectifDescParUi", array()), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute($context["descriptif"], "realCumulParUi", array()), "html", null, true);
                    echo "</td>
                                                <td class=\"\">
                                                    ";
                    // line 71
                    if (($this->getAttribute($context["descriptif"], "explicationDescParUi", array()) != "")) {
                        // line 72
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["descriptif"], "explicationDescParUi", array()), "html", null, true);
                        echo "
                                                    ";
                    } else {
                        // line 74
                        echo "                                                        -Aucun-
                                                    ";
                    }
                    // line 76
                    echo "                                                </td>
                                                <td>
                                                    ";
                    // line 78
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["descriptif"], "communes", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["commune"]) {
                        // line 79
                        echo "                                                        -";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "communeLibelle", array()), "html", null, true);
                        echo "</br>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commune'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 81
                    echo "                                                </td>
                                                <td>
                                                    <div class=\"btn-group\">
                                                        <a href=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_modifier", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")), "act_id" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()), "idDescriptifParUi" => $this->getAttribute($context["descriptif"], "id", array()))), "html", null, true);
                    echo "\">
                                                            <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                                <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                            </button>
                                                        </a>
                                                        <a href=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_situation_annuelle_liste", array("idActivite" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()), "idDescriptifParUi" => $this->getAttribute($context["descriptif"], "id", array()))), "html", null, true);
                    echo "\">
                                                            <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Situation annuelle\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                                <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>
                                                            </button>
                                                        </a>
                                                        <a >
                                                            <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
                    // line 95
                    echo twig_escape_filter($this->env, $this->getAttribute($context["descriptif"], "id", array()), "html", null, true);
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
                    // line 115
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_activite_supprimer", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")), "act_id" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()))), "html", null, true);
                    echo "\" method=\"post\">
                                                                        <input type=\"hidden\" id=\"idDescriptif\" name=\"idDescriptif\" value=\"\">
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['descriptif'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "                                    ";
            }
            // line 129
            echo "                                    </tbody>
                                    <tfooter>
                                        <th style=\"display:none;\">#</th>
                                        <th>Indicateur</th>
                                        <th>Unité</th>
                                        <th>Baseline</th>
                                        <th>Objectif projet</th>
                                        <th>Réalisation</th>
                                        <th>Explication</th>
                                        <th>Commune</th>
                                        <th>Actions</th>
                                    </tfooter>
                                </table>
                            </ul>
                        ";
        }
        // line 144
        echo "                        <hr>
                        <div class=\"clearfix\">
                            <a href=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_lister_activite", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "comp_id" => (isset($context["comp_id"]) ? $context["comp_id"] : $this->getContext($context, "comp_id")))), "html", null, true);
        echo "\">
                                <button class=\"btn btn-success\" >Retour</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



";
        
        $__internal_918629a0dd5afc0cf56b97ca79504737bdf98c461686c5ad60f095040f4e8468->leave($__internal_918629a0dd5afc0cf56b97ca79504737bdf98c461686c5ad60f095040f4e8468_prof);

    }

    // line 160
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66c10598727e450526871d12c097312381ded52f306e3f2a6233ceaf0f452efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c10598727e450526871d12c097312381ded52f306e3f2a6233ceaf0f452efb->enter($__internal_66c10598727e450526871d12c097312381ded52f306e3f2a6233ceaf0f452efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 161
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 162
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
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#btnSupProjet').on('click',function(){
            \$('#suprProjetModal').modal('toggle');
        });

        \$('#btnModProjet').on('click', function(){
            var id = \$('#idProjet').val();
            \$.ajax({
                type: 'GET',
                url: Routing.generate('projet_modifier', {'id': id}),
                timeout: 3000,
                success: function(data) {
                    \$('#formModifProjet').children().remove();
                    \$('#formModifProjet').append(data);
                    \$('#modProjetModal').modal('show');
                },
                error: function() {
                    console.log('La requête n\\'a pas abouti');
                }
            });
        });
    </script>
    <script>
        var table = \$('#descriptifTable').DataTable();

        \$('.delete-btn').on('click',function(){
            var _this = \$(this);
            var _parent = \$(_this).parents()[3];
            var node = \$(\$(_parent).children()[0]);
            console.log(\$(node).text());
            \$('#idDescriptif').val(\$(node).text());
            \$('#modalDelete').modal('toggle');
        });
    </script>
";
        
        $__internal_66c10598727e450526871d12c097312381ded52f306e3f2a6233ceaf0f452efb->leave($__internal_66c10598727e450526871d12c097312381ded52f306e3f2a6233ceaf0f452efb_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:DescriptifActivite:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 191,  384 => 190,  380 => 189,  375 => 187,  347 => 162,  342 => 161,  336 => 160,  316 => 146,  312 => 144,  295 => 129,  292 => 128,  273 => 115,  250 => 95,  241 => 89,  233 => 84,  228 => 81,  219 => 79,  215 => 78,  211 => 76,  207 => 74,  201 => 72,  199 => 71,  194 => 69,  190 => 68,  186 => 67,  183 => 66,  174 => 64,  170 => 63,  165 => 61,  161 => 60,  158 => 59,  153 => 58,  149 => 56,  147 => 55,  131 => 41,  127 => 39,  125 => 38,  117 => 33,  105 => 24,  95 => 17,  91 => 16,  87 => 15,  80 => 10,  74 => 9,  65 => 7,  61 => 6,  56 => 5,  50 => 4,  37 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Descriptifs pour activité {% endblock %}
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
                    <li><a href=\"{{ path('projet_index', {'id': projet_id}) }}\"> Composante </a></li>
                    <li><a href=\"{{ path('projet_lister_activite', {'projet_id': projet_id, 'comp_id': comp_id}) }}\"> Activité </a></li>
                    <li class=\"active\"> Déscriptif </li>
                </ol>
            </div>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <a href=\"{{ path('projet_descriptif_activite_ajouter',{'projet_id' : projet_id, 'comp_id': comp_id, 'act_id': activite.id }) }}\" class=\"btn btn-primary\">
        Ajouter un descriptif
    </a>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">

            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Déscriptifs de l'activité {{ activite.codeActivite }}</h2>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <div>
                        {% if descriptifs is empty %}
                            <span style=\"color: darkgrey\">Aucune descriptif</span>
                        {% else %}
                            <ul>
                                <table id=\"descriptifTable\" class=\"table table-responsive table-striped table-bordered\">
                                    <thead>
                                    <th style=\"display:none;\">#</th>
                                    <th>Indicateur</th>
                                    <th>Unité</th>
                                    <th>Baseline</th>
                                    <th>Objectif projet</th>
                                    <th>Réalisation</th>
                                    <th>Explication</th>
                                    <th>Commune</th>
                                    <th>Actions</th>
                                    </thead>
                                    <tbody>
                                    {% if descriptifs|length ==0 %}
                                        Aucun descriptif
                                    {% else%}
                                        {% for descriptif in descriptifs %}
                                            <tr>
                                                <td  style=\"display:none;\">{{descriptif.id}}</td>
                                                <td>{{descriptif.indicateur.libelleIndicateur}}</td>
                                                <td>
                                                    {% for unite in descriptif.unites %}
                                                        -{{unite.libelleUnite}}</br>
                                                    {% endfor %}
                                                </td>
                                                <td>{{ descriptif.baselineDescParUi }}</td>
                                                <td>{{descriptif.objectifDescParUi}}</td>
                                                <td>{{descriptif.realCumulParUi}}</td>
                                                <td class=\"\">
                                                    {% if descriptif.explicationDescParUi != \"\" %}
                                                        {{descriptif.explicationDescParUi}}
                                                    {% else %}
                                                        -Aucun-
                                                    {% endif %}
                                                </td>
                                                <td>
                                                    {% for commune in descriptif.communes %}
                                                        -{{commune.communeLibelle}}</br>
                                                    {% endfor %}
                                                </td>
                                                <td>
                                                    <div class=\"btn-group\">
                                                        <a href=\"{{ path('projet_descriptif_activite_modifier',{'projet_id': projet_id, 'comp_id': comp_id, 'act_id': activite.id,'idDescriptifParUi' : descriptif.id }) }}\">
                                                            <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                                <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                                            </button>
                                                        </a>
                                                        <a href=\"{{ path('projet_descriptif_activite_situation_annuelle_liste',{'idActivite': activite.id, 'idDescriptifParUi' : descriptif.id }) }}\">
                                                            <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Situation annuelle\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                                                <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>
                                                            </button>
                                                        </a>
                                                        <a >
                                                            <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ descriptif.id }}\">
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
                                                                    <form action=\"{{ path('projet_descriptif_activite_supprimer', {'projet_id': projet_id, 'comp_id': comp_id, 'act_id': activite.id}) }}\" method=\"post\">
                                                                        <input type=\"hidden\" id=\"idDescriptif\" name=\"idDescriptif\" value=\"\">
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
                                    {% endif %}
                                    </tbody>
                                    <tfooter>
                                        <th style=\"display:none;\">#</th>
                                        <th>Indicateur</th>
                                        <th>Unité</th>
                                        <th>Baseline</th>
                                        <th>Objectif projet</th>
                                        <th>Réalisation</th>
                                        <th>Explication</th>
                                        <th>Commune</th>
                                        <th>Actions</th>
                                    </tfooter>
                                </table>
                            </ul>
                        {% endif %}
                        <hr>
                        <div class=\"clearfix\">
                            <a href=\"{{ path('projet_lister_activite',{'projet_id': projet_id,'comp_id': comp_id}) }}\">
                                <button class=\"btn btn-success\" >Retour</button>
                            </a>
                        </div>
                    </div>
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
        \$('#btnSupProjet').on('click',function(){
            \$('#suprProjetModal').modal('toggle');
        });

        \$('#btnModProjet').on('click', function(){
            var id = \$('#idProjet').val();
            \$.ajax({
                type: 'GET',
                url: Routing.generate('projet_modifier', {'id': id}),
                timeout: 3000,
                success: function(data) {
                    \$('#formModifProjet').children().remove();
                    \$('#formModifProjet').append(data);
                    \$('#modProjetModal').modal('show');
                },
                error: function() {
                    console.log('La requête n\\'a pas abouti');
                }
            });
        });
    </script>
    <script>
        var table = \$('#descriptifTable').DataTable();

        \$('.delete-btn').on('click',function(){
            var _this = \$(this);
            var _parent = \$(_this).parents()[3];
            var node = \$(\$(_parent).children()[0]);
            console.log(\$(node).text());
            \$('#idDescriptif').val(\$(node).text());
            \$('#modalDelete').modal('toggle');
        });
    </script>
{% endblock %}", "ProjetBundle:DescriptifActivite:lister.html.twig", "/opt/lampp/htdocs/ssei-master/src/ProjetBundle/Resources/views/DescriptifActivite/lister.html.twig");
    }
}
