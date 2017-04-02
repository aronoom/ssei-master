<?php

/* ProjetBundle:Projet:index.html.twig */
class __TwigTemplate_db23e00f1172511b192198ce84350f0cccb797582e67ebcffa21f1fbbe816d5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjetBundle::layout.html.twig", "ProjetBundle:Projet:index.html.twig", 1);
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
        $__internal_bf69c6abb9f5bfae783fa7394a37b6694cd1f95ceb38b9c1250aafb64563f97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf69c6abb9f5bfae783fa7394a37b6694cd1f95ceb38b9c1250aafb64563f97d->enter($__internal_bf69c6abb9f5bfae783fa7394a37b6694cd1f95ceb38b9c1250aafb64563f97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Projet:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf69c6abb9f5bfae783fa7394a37b6694cd1f95ceb38b9c1250aafb64563f97d->leave($__internal_bf69c6abb9f5bfae783fa7394a37b6694cd1f95ceb38b9c1250aafb64563f97d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7964cd3447d9ab9fa75e7054994bba495675646b588d7a03d8eed4849b61881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7964cd3447d9ab9fa75e7054994bba495675646b588d7a03d8eed4849b61881->enter($__internal_a7964cd3447d9ab9fa75e7054994bba495675646b588d7a03d8eed4849b61881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Détails ";
        
        $__internal_a7964cd3447d9ab9fa75e7054994bba495675646b588d7a03d8eed4849b61881->leave($__internal_a7964cd3447d9ab9fa75e7054994bba495675646b588d7a03d8eed4849b61881_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_55bdfa90d5c5351036c6ee517a41e6cf2af3e65a2f414eb594c7c4711388afc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55bdfa90d5c5351036c6ee517a41e6cf2af3e65a2f414eb594c7c4711388afc7->enter($__internal_55bdfa90d5c5351036c6ee517a41e6cf2af3e65a2f414eb594c7c4711388afc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_55bdfa90d5c5351036c6ee517a41e6cf2af3e65a2f414eb594c7c4711388afc7->leave($__internal_55bdfa90d5c5351036c6ee517a41e6cf2af3e65a2f414eb594c7c4711388afc7_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_79952149aef0828ad642cb0a1ef19161cfd46ca2f502cf19d462bf337d5b0027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79952149aef0828ad642cb0a1ef19161cfd46ca2f502cf19d462bf337d5b0027->enter($__internal_79952149aef0828ad642cb0a1ef19161cfd46ca2f502cf19d462bf337d5b0027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"row\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_homepage");
        echo "\">Projet</a></li>
                    <li class=\"active\"> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nomProjet", array()), "html", null, true);
        echo " </li>
                </ol>
            </div>
        </div>
    </div>
<div class=\"clearfix\"></div>
    <h1>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nomProjet", array()), "html", null, true);
        echo " <span style=\"font-size: 12pt\">, ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "dateProjet", array()), "d/m/Y"), "html", null, true);
        echo "</span></h1>

    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h3 class=\"pull-left\">Descriptifs </h3>
            <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_ajouter", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\">
                Ajouter une descriptif
            </a>
            <div class=\"clearfix\"></div>
        </div>
        ";
        // line 32
        if (twig_test_empty((isset($context["descriptifs"]) ? $context["descriptifs"] : $this->getContext($context, "descriptifs")))) {
            // line 33
            echo "            <span style=\"color: darkgrey\">Aucune descriptif</span>
        ";
        } else {
            // line 35
            echo "        <table id=\"descriptifTable\" class=\"table table-responsive table-striped table-bordered\">
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
            // line 48
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "descriptifProjets", array())) == 0)) {
                // line 49
                echo "            Aucun descriptif
            ";
            } else {
                // line 51
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["descriptifs"]) ? $context["descriptifs"] : $this->getContext($context, "descriptifs")));
                foreach ($context['_seq'] as $context["_key"] => $context["descriptif"]) {
                    // line 52
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["descriptif"], "descriptifParUis", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["descriptifui"]) {
                        // line 53
                        echo "                    <tr>
                        <td  style=\"display:none;\">";
                        // line 54
                        echo twig_escape_filter($this->env, $this->getAttribute($context["descriptif"], "id", array()), "html", null, true);
                        echo "</td>
                        <td>";
                        // line 55
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["descriptifui"], "indicateur", array()), "libelleIndicateur", array()), "html", null, true);
                        echo "</td>
                        <td>
                           ";
                        // line 57
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["descriptifui"], "unites", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["unite"]) {
                            // line 58
                            echo "                            -";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["unite"], "libelleUnite", array()), "html", null, true);
                            echo "</br>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unite'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 60
                        echo "                        </td>
                        <td>";
                        // line 61
                        echo twig_escape_filter($this->env, $this->getAttribute($context["descriptifui"], "baselineDescParUi", array()), "html", null, true);
                        echo "</td>
                        <td>";
                        // line 62
                        echo twig_escape_filter($this->env, $this->getAttribute($context["descriptifui"], "objectifDescParUi", array()), "html", null, true);
                        echo "</td>
                        <td>";
                        // line 63
                        echo twig_escape_filter($this->env, $this->getAttribute($context["descriptifui"], "realCumulParUi", array()), "html", null, true);
                        echo "</td>
                        <td class=\"\">
                        ";
                        // line 65
                        if (($this->getAttribute($context["descriptifui"], "explicationDescParUi", array()) != "")) {
                            // line 66
                            echo "                            ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["descriptifui"], "explicationDescParUi", array()), "html", null, true);
                            echo "
                        ";
                        } else {
                            // line 68
                            echo "                            -Aucun-
                        ";
                        }
                        // line 70
                        echo "                        </td>
                        <td>
                        ";
                        // line 72
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["descriptifui"], "communes", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["commune"]) {
                            // line 73
                            echo "                            -";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "communeLibelle", array()), "html", null, true);
                            echo "</br>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commune'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 75
                        echo "                         </td>
                        <td>
                            <div class=\"btn-group\">
                                <a href=\"";
                        // line 78
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_modifier", array("idDescriptifProjet" => $this->getAttribute($context["descriptif"], "id", array()), "idDescriptifParUi" => $this->getAttribute($context["descriptifui"], "id", array()))), "html", null, true);
                        echo "\">
                                    <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                        <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                    </button>
                                </a>
                                <a href=\"";
                        // line 83
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_liste", array("idDescriptifParUi" => $this->getAttribute($context["descriptifui"], "id", array()), "idDescriptifProjet" => $this->getAttribute($context["descriptif"], "id", array()))), "html", null, true);
                        echo "\">
                                    <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Situation annuelle\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                        <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>
                                    </button>
                                </a>
                                <a >
                                    <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal";
                        // line 89
                        echo twig_escape_filter($this->env, $this->getAttribute($context["descriptifui"], "id", array()), "html", null, true);
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
                        // line 109
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_supprimer");
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['descriptifui'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 122
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['descriptif'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "            ";
            }
            // line 124
            echo "            </tbody>
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
        ";
        }
        // line 138
        echo "    </div>
    <!-- composante end -->
    <div class=\"clearfix\"></div>



    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h3 class=\"pull-left\">Composantes </h3>
            <a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_ajouter_composante", array("projet_id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\">
                Ajouter une composante
            </a>
            <div class=\"clearfix\"></div>
        </div>

        ";
        // line 153
        if (twig_test_empty($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "composantes", array()))) {
            // line 154
            echo "            <span style=\"color: darkgrey\">Aucune composante</span>
        ";
        } else {
            // line 156
            echo "
            <table id=\"composanteTable\" class=\"table table-responsive table-striped table-bordered\" cellspacing=\"0\" width=\"100%\" >
                <thead>
                    <tr role=\"row\">
                        <th style=\"width:10%;\">Code</th>
                        <th>Désignation</th>
                        <th>Actions</th>
                        <th>Activités</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "composantes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["composante"]) {
                // line 168
                echo "                        <tr>
                            <td>composante ";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($context["composante"], "id", array()), "html", null, true);
                echo "</td>
                            <td><a href=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_lister_activite", array("projet_id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "comp_id" => $this->getAttribute($context["composante"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["composante"], "libelleComposante", array()), "html", null, true);
                echo "</a></td>
                            <td width=\"100px\">
                                <div class=\"btn-group\">
                                    <a href=\"";
                // line 173
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_modifier_composante", array("projet_id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "id" => $this->getAttribute($context["composante"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm btn-edit\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\"> <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\" ></span> </a>
                                    <button class=\"btn btn-danger btn-sm btn-remove\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\">
                                        <input value=\"";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($context["composante"], "id", array()), "html", null, true);
                echo "\" hidden/>
                                        <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                    </button>
                                </div>
                            </td>
                            <td width=\"50px\"><a class=\"btn btn-default btn-sm\" href=\"";
                // line 180
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_lister_activite", array("projet_id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "comp_id" => $this->getAttribute($context["composante"], "id", array()))), "html", null, true);
                echo "\">&raquo;</a></td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['composante'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "                </tbody>
                <tfoot>
                    <tr role=\"row\">
                        <th>Code</th>
                        <th>Désignation</th>
                        <th>Actions</th>
                        <th>Activités</th>
                    </tr>
                </tfoot>
            </table>

        ";
        }
        // line 195
        echo "        <hr>
    </div>

    <!-- Supprimer descriptif -->
    <div class=\"modal fade bs-example-modal-md\" data-id=\"\" id=\"suprProjetModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"well\">
                        <p>Voulez-vous vraiment supprimer ce projet</p>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <form action=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_supprimer", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                        <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- supprimer composante -->
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
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_supprimer_composante", array("projet_id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                               <input id=\"compId\" name=\"compId\" hidden>
                               <input name=\"projetId\" value=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "html", null, true);
        echo "\" hidden>
                               <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                               <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
        <!-- end supprimer -->
        <!-- Modification -->
        <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modProjetModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                        </button>
                        <h4 class=\"modal-title\" id=\"myModalLabel2\">Modifier ce projet</h4>
                    </div>
                    <div id=\"formModifProjet\">
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>



";
        
        $__internal_79952149aef0828ad642cb0a1ef19161cfd46ca2f502cf19d462bf337d5b0027->leave($__internal_79952149aef0828ad642cb0a1ef19161cfd46ca2f502cf19d462bf337d5b0027_prof);

    }

    // line 270
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2f6a82bf3069ae3f4422ba06b960f02011847d0bc346f8cabf1ff692858b4ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6a82bf3069ae3f4422ba06b960f02011847d0bc346f8cabf1ff692858b4ab8->enter($__internal_2f6a82bf3069ae3f4422ba06b960f02011847d0bc346f8cabf1ff692858b4ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 271
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 272
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
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>
    <script>

        \$(function(){

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
        });
    </script>
    <script>
        var table = \$('#descriptifTable').DataTable();
        var table2 = \$('#composanteTable').DataTable();
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idDescriptif').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });

        });
    </script>
    <script>
            \$('.btn-remove').on('click',function(){
                \$('#compId').val(\$(this).children()[0].value);
                \$('#suprCompModal').modal('toggle');
            });
        </script>
";
        
        $__internal_2f6a82bf3069ae3f4422ba06b960f02011847d0bc346f8cabf1ff692858b4ab8->leave($__internal_2f6a82bf3069ae3f4422ba06b960f02011847d0bc346f8cabf1ff692858b4ab8_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Projet:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  549 => 301,  545 => 300,  541 => 299,  536 => 297,  508 => 272,  503 => 271,  497 => 270,  460 => 239,  455 => 237,  428 => 213,  408 => 195,  394 => 183,  385 => 180,  377 => 175,  372 => 173,  364 => 170,  360 => 169,  357 => 168,  353 => 167,  340 => 156,  336 => 154,  334 => 153,  325 => 147,  314 => 138,  298 => 124,  295 => 123,  289 => 122,  270 => 109,  247 => 89,  238 => 83,  230 => 78,  225 => 75,  216 => 73,  212 => 72,  208 => 70,  204 => 68,  198 => 66,  196 => 65,  191 => 63,  187 => 62,  183 => 61,  180 => 60,  171 => 58,  167 => 57,  162 => 55,  158 => 54,  155 => 53,  150 => 52,  145 => 51,  141 => 49,  139 => 48,  124 => 35,  120 => 33,  118 => 32,  110 => 27,  100 => 22,  91 => 16,  87 => 15,  80 => 10,  74 => 9,  65 => 7,  61 => 6,  56 => 5,  50 => 4,  37 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Détails {% endblock %}
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
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a href=\"{{ path('projet_homepage') }}\">Projet</a></li>
                    <li class=\"active\"> {{ projet.nomProjet }} </li>
                </ol>
            </div>
        </div>
    </div>
<div class=\"clearfix\"></div>
    <h1>{{ projet.nomProjet }} <span style=\"font-size: 12pt\">, {{ projet.dateProjet|date(\"d/m/Y\") }}</span></h1>

    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h3 class=\"pull-left\">Descriptifs </h3>
            <a href=\"{{ path('projet_descriptif_ajouter',{'id' : id }) }}\" class=\"btn btn-primary pull-right\">
                Ajouter une descriptif
            </a>
            <div class=\"clearfix\"></div>
        </div>
        {% if descriptifs is empty %}
            <span style=\"color: darkgrey\">Aucune descriptif</span>
        {% else %}
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
            {% if projet.descriptifProjets|length ==0 %}
            Aucun descriptif
            {% else%}
                {% for descriptif in descriptifs %}
                {% for descriptifui in descriptif.descriptifParUis %}
                    <tr>
                        <td  style=\"display:none;\">{{descriptif.id}}</td>
                        <td>{{descriptifui.indicateur.libelleIndicateur}}</td>
                        <td>
                           {% for unite in descriptifui.unites %}
                            -{{unite.libelleUnite}}</br>
                            {% endfor %}
                        </td>
                        <td>{{descriptifui.baselineDescParUi }}</td>
                        <td>{{descriptifui.objectifDescParUi}}</td>
                        <td>{{descriptifui.realCumulParUi}}</td>
                        <td class=\"\">
                        {% if descriptifui.explicationDescParUi != \"\" %}
                            {{descriptifui.explicationDescParUi}}
                        {% else %}
                            -Aucun-
                        {% endif %}
                        </td>
                        <td>
                        {% for commune in descriptifui.communes %}
                            -{{commune.communeLibelle}}</br>
                        {% endfor %}
                         </td>
                        <td>
                            <div class=\"btn-group\">
                                <a href=\"{{ path('projet_descriptif_modifier',{'idDescriptifProjet' : descriptif.id,'idDescriptifParUi':descriptifui.id }) }}\">
                                    <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                        <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                                    </button>
                                </a>
                                <a href=\"{{ path('projet_descriptif_situation_annuelle_liste',{'idDescriptifParUi' : descriptifui.id , 'idDescriptifProjet' : descriptif.id }) }}\">
                                    <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Situation annuelle\" class=\"btn btn-default btn-sm\" aria-label=\"Center Align\">
                                        <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>
                                    </button>
                                </a>
                                <a >
                                    <button type=\"button\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\" class=\"btn btn-danger btn-sm delete-btn\" aria-label=\"Justify\" data-toggle=\"modal\" data-target=\"#modal{{ descriptifui.id }}\">
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
                                            <form action=\"{{ path('projet_descriptif_supprimer') }}\" method=\"post\">
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
        {% endif %}
    </div>
    <!-- composante end -->
    <div class=\"clearfix\"></div>



    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h3 class=\"pull-left\">Composantes </h3>
            <a href=\"{{ path('projet_ajouter_composante',{'projet_id' : projet.id }) }}\" class=\"btn btn-primary pull-right\">
                Ajouter une composante
            </a>
            <div class=\"clearfix\"></div>
        </div>

        {% if projet.composantes is empty %}
            <span style=\"color: darkgrey\">Aucune composante</span>
        {% else %}

            <table id=\"composanteTable\" class=\"table table-responsive table-striped table-bordered\" cellspacing=\"0\" width=\"100%\" >
                <thead>
                    <tr role=\"row\">
                        <th style=\"width:10%;\">Code</th>
                        <th>Désignation</th>
                        <th>Actions</th>
                        <th>Activités</th>
                    </tr>
                </thead>
                <tbody>
                    {% for composante in projet.composantes %}
                        <tr>
                            <td>composante {{ composante.id }}</td>
                            <td><a href=\"{{ path('projet_lister_activite', {'projet_id': projet.id, 'comp_id': composante.id}) }}\">{{ composante.libelleComposante }}</a></td>
                            <td width=\"100px\">
                                <div class=\"btn-group\">
                                    <a href=\"{{ path('projet_modifier_composante', {'projet_id': projet.id, 'id': composante.id}) }}\" class=\"btn btn-default btn-sm btn-edit\" data-toggle=\"tooltip\" title data-original-title=\"Modifier\"> <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\" ></span> </a>
                                    <button class=\"btn btn-danger btn-sm btn-remove\" data-toggle=\"tooltip\" title data-original-title=\"Supprimer\">
                                        <input value=\"{{ composante.id }}\" hidden/>
                                        <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                                    </button>
                                </div>
                            </td>
                            <td width=\"50px\"><a class=\"btn btn-default btn-sm\" href=\"{{ path('projet_lister_activite', {'projet_id': projet.id, 'comp_id': composante.id}) }}\">&raquo;</a></td>
                        </tr>
                    {% endfor %}
                </tbody>
                <tfoot>
                    <tr role=\"row\">
                        <th>Code</th>
                        <th>Désignation</th>
                        <th>Actions</th>
                        <th>Activités</th>
                    </tr>
                </tfoot>
            </table>

        {% endif %}
        <hr>
    </div>

    <!-- Supprimer descriptif -->
    <div class=\"modal fade bs-example-modal-md\" data-id=\"\" id=\"suprProjetModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Suppression</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"well\">
                        <p>Voulez-vous vraiment supprimer ce projet</p>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <form action=\"{{ path('projet_supprimer', {'id': projet.id})}}\" method=\"post\">
                        <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- supprimer composante -->
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
                           <form action=\"{{ path('projet_supprimer_composante',{'projet_id': projet.id})}}\" method=\"post\">
                               <input id=\"compId\" name=\"compId\" hidden>
                               <input name=\"projetId\" value=\"{{ projet.id }}\" hidden>
                               <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                               <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
        <!-- end supprimer -->
        <!-- Modification -->
        <div class=\"modal fade bs-example-modal-sm\" data-id=\"\" id=\"modProjetModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" style=\"display: none;\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                        </button>
                        <h4 class=\"modal-title\" id=\"myModalLabel2\">Modifier ce projet</h4>
                    </div>
                    <div id=\"formModifProjet\">
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

        \$(function(){

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
        });
    </script>
    <script>
        var table = \$('#descriptifTable').DataTable();
        var table2 = \$('#composanteTable').DataTable();
        \$(function(){

            \$('.delete-btn').on('click',function(){
                var _this = \$(this);
                var _parent = \$(_this).parents()[3];
                var node = \$(\$(_parent).children()[0]);
                console.log(\$(node).text());
                \$('#idDescriptif').val(\$(node).text());
                \$('#modalDelete').modal('toggle');
            });

        });
    </script>
    <script>
            \$('.btn-remove').on('click',function(){
                \$('#compId').val(\$(this).children()[0].value);
                \$('#suprCompModal').modal('toggle');
            });
        </script>
{% endblock %}", "ProjetBundle:Projet:index.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/Projet/index.html.twig");
    }
}
