<?php

/* ProjetBundle:Objectif:ajouter.html.twig */
class __TwigTemplate_975fb6a64e39d6f86e883f6f493407df294f791a985925056f62f7beaac9d601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjetBundle::layout.html.twig", "ProjetBundle:Objectif:ajouter.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_8969906733eca4060a3fec7407151ac6f28a56cbd265537a606500fd2f76734e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8969906733eca4060a3fec7407151ac6f28a56cbd265537a606500fd2f76734e->enter($__internal_8969906733eca4060a3fec7407151ac6f28a56cbd265537a606500fd2f76734e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle:Objectif:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8969906733eca4060a3fec7407151ac6f28a56cbd265537a606500fd2f76734e->leave($__internal_8969906733eca4060a3fec7407151ac6f28a56cbd265537a606500fd2f76734e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_002089cd4a0d531b91ca1c57d79f4b2cb64a62e72b2b968ba77b731113665338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002089cd4a0d531b91ca1c57d79f4b2cb64a62e72b2b968ba77b731113665338->enter($__internal_002089cd4a0d531b91ca1c57d79f4b2cb64a62e72b2b968ba77b731113665338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajouter une situation annuelle ";
        
        $__internal_002089cd4a0d531b91ca1c57d79f4b2cb64a62e72b2b968ba77b731113665338->leave($__internal_002089cd4a0d531b91ca1c57d79f4b2cb64a62e72b2b968ba77b731113665338_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4ce65dd6bb09b96a36538a4ea1d3b059b5eda827e7c44df32c2ae6e021b0d4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce65dd6bb09b96a36538a4ea1d3b059b5eda827e7c44df32c2ae6e021b0d4ae->enter($__internal_4ce65dd6bb09b96a36538a4ea1d3b059b5eda827e7c44df32c2ae6e021b0d4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb row\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_homepage");
        echo "\">Projet</a></li>
                    <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index", array("id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")))), "html", null, true);
        echo "\">Descriptif</a></li>
                    <li ><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_liste", array("idDescriptifProjet" => (isset($context["idDescriptifProjet"]) ? $context["idDescriptifProjet"] : $this->getContext($context, "idDescriptifProjet")), "idDescriptifParUi" => $this->getAttribute((isset($context["descriptifParUi"]) ? $context["descriptifParUi"] : $this->getContext($context, "descriptifParUi")), "id", array()))), "html", null, true);
        echo "\">Situation annuelle</a></li>
                    <li ><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_objectif_liste", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "idDescriptifProjet" => (isset($context["idDescriptifProjet"]) ? $context["idDescriptifProjet"] : $this->getContext($context, "idDescriptifProjet")), "idSituationAnnuelle" => $this->getAttribute((isset($context["situationAnnuelle"]) ? $context["situationAnnuelle"] : $this->getContext($context, "situationAnnuelle")), "id", array()))), "html", null, true);
        echo "\">Objectifs</a></li>
                    <li class=\"active\">Ajouter</li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Ajouter un objectif</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <br>
                        ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "demo-form2", "data-parsley-validate" => "true", "novalidate" => "novalidate", "class" => "form-horizontal form-label-left")));
        echo "
                        ";
        // line 28
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 29
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 30
                echo "                                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>Erreur! </strong>";
                // line 32
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice_success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 36
                echo "                                <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>Success! </strong>";
                // line 38
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                        ";
        }
        echo "                                                
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valeur", array()), 'label', array("label" => "Valeur"));
        echo "
                            </div>
                            <div class=\"col-sm-3\">
                                ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valeur", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valeur", array()), 'errors');
        echo "
                                </li>
                            </ul>
                        </div>
                        <div class=\"ln_solid\"></div>
                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                                <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_descriptif_situation_annuelle_objectif_liste", array("projet_id" => (isset($context["projet_id"]) ? $context["projet_id"] : $this->getContext($context, "projet_id")), "idDescriptifProjet" => (isset($context["idDescriptifProjet"]) ? $context["idDescriptifProjet"] : $this->getContext($context, "idDescriptifProjet")), "idSituationAnnuelle" => $this->getAttribute((isset($context["situationAnnuelle"]) ? $context["situationAnnuelle"] : $this->getContext($context, "situationAnnuelle")), "id", array()))), "html", null, true);
        echo "\">
                                    <button type=\"button\" class=\"btn btn-success\" >Retour</button>
                                </a>
                            </div>
                        </div>
                        ";
        // line 64
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_4ce65dd6bb09b96a36538a4ea1d3b059b5eda827e7c44df32c2ae6e021b0d4ae->leave($__internal_4ce65dd6bb09b96a36538a4ea1d3b059b5eda827e7c44df32c2ae6e021b0d4ae_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ff49437831a291241982a4abbb2b5db171090ae968d8c6fd9705c803563ad031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff49437831a291241982a4abbb2b5db171090ae968d8c6fd9705c803563ad031->enter($__internal_ff49437831a291241982a4abbb2b5db171090ae968d8c6fd9705c803563ad031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 75
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
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_ff49437831a291241982a4abbb2b5db171090ae968d8c6fd9705c803563ad031->leave($__internal_ff49437831a291241982a4abbb2b5db171090ae968d8c6fd9705c803563ad031_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle:Objectif:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 100,  203 => 75,  198 => 74,  192 => 73,  177 => 64,  169 => 59,  165 => 58,  155 => 51,  148 => 47,  142 => 44,  135 => 41,  126 => 38,  122 => 36,  117 => 35,  108 => 32,  104 => 30,  99 => 29,  97 => 28,  93 => 27,  75 => 12,  71 => 11,  67 => 10,  63 => 9,  56 => 4,  50 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"ProjetBundle::layout.html.twig\"%}
{% block title %} {{parent()}} Ajouter une situation annuelle {% endblock %}
{% block content %}
    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <ol class=\"breadcrumb row\">
                    <li><a href=\"\">Acceuil</a></li>
                    <li><a href=\"{{ path('projet_homepage') }}\">Projet</a></li>
                    <li><a href=\"{{ path('projet_index',{'id':projet_id}) }}\">Descriptif</a></li>
                    <li ><a href=\"{{ path('projet_descriptif_situation_annuelle_liste',{'idDescriptifProjet': idDescriptifProjet, 'idDescriptifParUi' : descriptifParUi.id}) }}\">Situation annuelle</a></li>
                    <li ><a href=\"{{ path('projet_descriptif_situation_annuelle_objectif_liste',{'projet_id' : projet_id ,'idDescriptifProjet': idDescriptifProjet ,'idSituationAnnuelle': situationAnnuelle.id }) }}\">Objectifs</a></li>
                    <li class=\"active\">Ajouter</li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Ajouter un objectif</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <br>
                        {{ form_start(form, {'attr': { 'id':'demo-form2' ,'data-parsley-validate':'true','novalidate': 'novalidate' , 'class': 'form-horizontal form-label-left'}})}}
                        {% if app.request.hasPreviousSession %}
                            {% for flashMessage in app.session.flashBag.get('notice_error') %}
                                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>Erreur! </strong>{{ flashMessage }}
                                </div>
                            {% endfor %}
                            {% for flashMessage in app.session.flashBag.get('notice_success') %}
                                <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>Success! </strong>{{ flashMessage }}
                                </div>
                            {% endfor %}
                        {% endif %}                                                
                        <div class=\"item form-group\">
                            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                {{ form_label(form.valeur,\"Valeur\") }}
                            </div>
                            <div class=\"col-sm-3\">
                                {{ form_widget(form.valeur,{ 'attr' : {'class':'form-control col-md-7 col-xs-12'} })}}
                            </div>
                            <ul class=\"parsley-errors-list filled\">
                                <li class=\"parsley-required\">
                                    {{ form_errors(form.valeur)}}
                                </li>
                            </ul>
                        </div>
                        <div class=\"ln_solid\"></div>
                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                {{ form_widget(form.save) }}
                                <a href=\"{{ path('projet_descriptif_situation_annuelle_objectif_liste',{'projet_id' : projet_id ,'idDescriptifProjet': idDescriptifProjet ,'idSituationAnnuelle': situationAnnuelle.id }) }}\">
                                    <button type=\"button\" class=\"btn btn-success\" >Retour</button>
                                </a>
                            </div>
                        </div>
                        {{ form_end(form) }}
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

{% endblock %}", "ProjetBundle:Objectif:ajouter.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/Objectif/ajouter.html.twig");
    }
}
