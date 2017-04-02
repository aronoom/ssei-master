<?php

/* ProjetBundle:Projet:liste.html.twig */
class __TwigTemplate_74dd734e4a20981ad937b396db3c84a32a9a72548bf620e4183207680e8abb5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjetBundle::layout.html.twig", "ProjetBundle:Projet:liste.html.twig", 1);
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
        $__internal_4b714c28365b89acbde3ad0d136ef7cf42393970a6ca899ba061b16617071f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b714c28365b89acbde3ad0d136ef7cf42393970a6ca899ba061b16617071f55->enter($__internal_4b714c28365b89acbde3ad0d136ef7cf42393970a6ca899ba061b16617071f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Projet:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b714c28365b89acbde3ad0d136ef7cf42393970a6ca899ba061b16617071f55->leave($__internal_4b714c28365b89acbde3ad0d136ef7cf42393970a6ca899ba061b16617071f55_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0828d41f61737b9e09af25d2e48c363d2db4fb80100dbb0507202228ae7a02df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0828d41f61737b9e09af25d2e48c363d2db4fb80100dbb0507202228ae7a02df->enter($__internal_0828d41f61737b9e09af25d2e48c363d2db4fb80100dbb0507202228ae7a02df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste ";
        
        $__internal_0828d41f61737b9e09af25d2e48c363d2db4fb80100dbb0507202228ae7a02df->leave($__internal_0828d41f61737b9e09af25d2e48c363d2db4fb80100dbb0507202228ae7a02df_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e1aff4cde4d30294360e3b4ecb29d117f02f95f6fd1a0d65e29550dc91016634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1aff4cde4d30294360e3b4ecb29d117f02f95f6fd1a0d65e29550dc91016634->enter($__internal_e1aff4cde4d30294360e3b4ecb29d117f02f95f6fd1a0d65e29550dc91016634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e1aff4cde4d30294360e3b4ecb29d117f02f95f6fd1a0d65e29550dc91016634->leave($__internal_e1aff4cde4d30294360e3b4ecb29d117f02f95f6fd1a0d65e29550dc91016634_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_7851382174ee52a4a4ac4af3b56b88fe5de14185666e5ce787712c66862f2439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7851382174ee52a4a4ac4af3b56b88fe5de14185666e5ce787712c66862f2439->enter($__internal_7851382174ee52a4a4ac4af3b56b88fe5de14185666e5ce787712c66862f2439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"page-title\">
        <div class=\"title_left\">
            <ol class=\"breadcrumb\">
                <li><a href=\"\">Acceuil</a></li>
                <li class=\"active\"> Projet </li>
            </ol>
        </div>
    </div>

    <div class=\"clearfix\"></div>
    <h1>Projets <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_ajouter");
        echo "\" class=\"btn btn-primary btn-lg pull-right\"> Nouveau </a> </h1>
    <!-- start accordion -->
    <div class=\"accordion\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 24
            echo "
            <div class=\"panel\">
                <a class=\"panel-heading\" role=\"tab\" id=\"heading";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "\" aria-expanded=\"true\" aria-controls=\"collapse";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "\">
                    <h4 class=\"panel-title\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", array()), "html", null, true);
            echo " <span class=\"pull-right\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateProjet", array()), "d/m/Y"), "html", null, true);
            echo "</span></h4>
                </a>
                <div id=\"collapse";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "\" aria-expanded=\"true\" style=\"\">
                    <div class=\"panel-body\">
                        <p> Objectif : ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "objectifProjet", array()), "html", null, true);
            echo "</p>
                        <p> Régions :
                            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["projet"], "regions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
                // line 34
                echo "                                <code>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "regionLibelle", array()), "html", null, true);
                echo "</code>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                        </p>
                        <p> Entités :
                            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["projet"], "entites", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entite"]) {
                // line 39
                echo "                                <code>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entite"], "codeEntite", array()), "html", null, true);
                echo "</code>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                        </p>
                        <div class=\"pull-right\">
                            <div class=\"btn-group\">
                                <a class=\"btn btn-libelle btn-default btn-sm btn-edit\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">
                                    <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span> Détail
                                </a>
                                <a class=\"btn btn-libelle btn-default btn-sm btn-edit\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_modifier", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">
                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Modifier
                                </a>
                                <button type=\"button\" class=\"btn btn-libelle btn-danger btn-sm btn-delete\" aria-label=\"Justify\" data-toggle=\"modal\" >
                                    <input hidden=\"hidden\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "\"/>
                                    <input hidden=\"hidden\" id=\"libelle\"/>
                                    <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span> Supprimer
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </div>
    <!-- end of accordion -->

    <!-- Supprimer -->
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
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_supprimer");
        echo "\" method=\"post\">
                        <input name=\"projetIdSupr\" id=\"projetIdSupr\" hidden/>
                        <button type=\"submit\" id=\"modalSuppr\" class=\"btn btn-danger\">Supprimer</button>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_7851382174ee52a4a4ac4af3b56b88fe5de14185666e5ce787712c66862f2439->leave($__internal_7851382174ee52a4a4ac4af3b56b88fe5de14185666e5ce787712c66862f2439_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a5ab113c2293ae247957650c5b79ee0fe95247b3a6e7c3e2b4822bf7a26f594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5ab113c2293ae247957650c5b79ee0fe95247b3a6e7c3e2b4822bf7a26f594->enter($__internal_4a5ab113c2293ae247957650c5b79ee0fe95247b3a6e7c3e2b4822bf7a26f594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 92
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



        \$('.btn-delete').on('click',function(){
            \$(\"#projetIdSupr\").val(\$(this).children()[0].value);
            console.log(\$(\"#projetIdSupr\").val());
            \$('#suprProjetModal').modal('toggle');
        });
    </script>
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap_dropdown_6.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_4a5ab113c2293ae247957650c5b79ee0fe95247b3a6e7c3e2b4822bf7a26f594->leave($__internal_4a5ab113c2293ae247957650c5b79ee0fe95247b3a6e7c3e2b4822bf7a26f594_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Projet:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 129,  290 => 128,  286 => 127,  281 => 125,  245 => 92,  240 => 91,  234 => 90,  217 => 79,  197 => 61,  181 => 51,  174 => 47,  168 => 44,  163 => 41,  154 => 39,  150 => 38,  146 => 36,  137 => 34,  133 => 33,  128 => 31,  121 => 29,  114 => 27,  106 => 26,  102 => 24,  98 => 23,  92 => 20,  80 => 10,  74 => 9,  65 => 7,  61 => 6,  56 => 5,  50 => 4,  37 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Liste {% endblock %}
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
                <li class=\"active\"> Projet </li>
            </ol>
        </div>
    </div>

    <div class=\"clearfix\"></div>
    <h1>Projets <a href=\"{{ path('projet_ajouter') }}\" class=\"btn btn-primary btn-lg pull-right\"> Nouveau </a> </h1>
    <!-- start accordion -->
    <div class=\"accordion\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
        {% for projet in projets %}

            <div class=\"panel\">
                <a class=\"panel-heading\" role=\"tab\" id=\"heading{{ projet.id }}\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse{{ projet.id }}\" aria-expanded=\"true\" aria-controls=\"collapse{{ projet.id }}\">
                    <h4 class=\"panel-title\">{{ projet.nomProjet }} <span class=\"pull-right\">{{ projet.dateProjet|date(\"d/m/Y\") }}</span></h4>
                </a>
                <div id=\"collapse{{ projet.id }}\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading{{ projet.id }}\" aria-expanded=\"true\" style=\"\">
                    <div class=\"panel-body\">
                        <p> Objectif : {{ projet.objectifProjet }}</p>
                        <p> Régions :
                            {% for region in projet.regions %}
                                <code>{{ region.regionLibelle }}</code>
                            {% endfor %}
                        </p>
                        <p> Entités :
                            {% for entite in projet.entites %}
                                <code>{{ entite.codeEntite }}</code>
                            {% endfor %}
                        </p>
                        <div class=\"pull-right\">
                            <div class=\"btn-group\">
                                <a class=\"btn btn-libelle btn-default btn-sm btn-edit\" href=\"{{ path('projet_index', {'id': projet.id}) }}\">
                                    <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span> Détail
                                </a>
                                <a class=\"btn btn-libelle btn-default btn-sm btn-edit\" href=\"{{ path('projet_modifier', {'id': projet.id}) }}\">
                                    <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Modifier
                                </a>
                                <button type=\"button\" class=\"btn btn-libelle btn-danger btn-sm btn-delete\" aria-label=\"Justify\" data-toggle=\"modal\" >
                                    <input hidden=\"hidden\" value=\"{{ projet.id }}\"/>
                                    <input hidden=\"hidden\" id=\"libelle\"/>
                                    <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span> Supprimer
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
    <!-- end of accordion -->

    <!-- Supprimer -->
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
                    <form action=\"{{ path('projet_supprimer') }}\" method=\"post\">
                        <input name=\"projetIdSupr\" id=\"projetIdSupr\" hidden/>
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



        \$('.btn-delete').on('click',function(){
            \$(\"#projetIdSupr\").val(\$(this).children()[0].value);
            console.log(\$(\"#projetIdSupr\").val());
            \$('#suprProjetModal').modal('toggle');
        });
    </script>
    <script src=\"{{ asset('js/jquery.validate.js') }}\"></script>

    <script type=\"text/javascript\" src=\"{{asset('js/dataTables.bootstrap.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/datatables.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/bootstrap_dropdown_6.js')}}\"></script>

{% endblock %}", "ProjetBundle:Projet:liste.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/Projet/liste.html.twig");
    }
}
