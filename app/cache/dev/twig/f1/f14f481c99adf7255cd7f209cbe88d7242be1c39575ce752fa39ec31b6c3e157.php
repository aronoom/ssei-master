<?php

/* UserBundle:User:show.html.twig */
class __TwigTemplate_8f36289592825cdd76e662225eaedc133545f8cde1c3c3385a0da82d429acfcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "UserBundle:User:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8aeac8933ced9c47120f5f16a6c22464daff56c9163b59b77ce5c5c34369a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8aeac8933ced9c47120f5f16a6c22464daff56c9163b59b77ce5c5c34369a54->enter($__internal_e8aeac8933ced9c47120f5f16a6c22464daff56c9163b59b77ce5c5c34369a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8aeac8933ced9c47120f5f16a6c22464daff56c9163b59b77ce5c5c34369a54->leave($__internal_e8aeac8933ced9c47120f5f16a6c22464daff56c9163b59b77ce5c5c34369a54_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5006e802aade865231f2baf3ae7030aa51f9af2502ecb4ce25ca79dfb81b43f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5006e802aade865231f2baf3ae7030aa51f9af2502ecb4ce25ca79dfb81b43f4->enter($__internal_5006e802aade865231f2baf3ae7030aa51f9af2502ecb4ce25ca79dfb81b43f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Utilisateurs ";
        
        $__internal_5006e802aade865231f2baf3ae7030aa51f9af2502ecb4ce25ca79dfb81b43f4->leave($__internal_5006e802aade865231f2baf3ae7030aa51f9af2502ecb4ce25ca79dfb81b43f4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a1cc50ddc4f621a8fb51383b7f7c9b52a8caba54986b6d674821b3d31ad9af04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1cc50ddc4f621a8fb51383b7f7c9b52a8caba54986b6d674821b3d31ad9af04->enter($__internal_a1cc50ddc4f621a8fb51383b7f7c9b52a8caba54986b6d674821b3d31ad9af04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Utilisateurs</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\">Acceuil</a></li>
                    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_admin_homepage");
        echo "\">Utilisateurs</a></li>
                    <li class=\"active\">Détails </li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Détails conçernant l'utilisateur</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <br>
                        <div class=\"col-md-offset-2\">
                            <div class=\"row\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    <strong>
                                        Nom
                                    </strong>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <p >";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "username", array()), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    <strong>
                                        Prénom
                                    </strong>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <p >";
        // line 43
        if (($this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "prenomUser", array()) != "")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "prenomUser", array()), "html", null, true);
            echo "
                                        ";
        } else {
            // line 45
            echo "                                            Aucun prénom
                                        ";
        }
        // line 47
        echo "                                    </p>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    <strong>
                                        Entités d'appartenance
                                    </strong>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "entites", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 58
            echo "                                    <p >-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleEntite", array()), "html", null, true);
            echo "</p>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    <strong>
                                        Contact
                                    </strong>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <p >
                                        ";
        // line 70
        if (($this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "contactAgent", array()) != "")) {
            // line 71
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "contactAgent", array()), "html", null, true);
            echo "
                                        ";
        } else {
            // line 73
            echo "                                            Aucun contact
                                        ";
        }
        // line 75
        echo "                                    </p>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    <strong>
                                        Email
                                    </strong>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <p >";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "email", array()), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    <strong>
                                        Adresse
                                    </strong>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <p >
                                        ";
        // line 96
        if (($this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "adresseAgent", array()) != "")) {
            // line 97
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "adresseAgent", array()), "html", null, true);
            echo "
                                        ";
        } else {
            // line 99
            echo "                                            Aucune adresse
                                        ";
        }
        // line 101
        echo "                                    </p>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    <strong>
                                        Fonction
                                    </strong>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <p >
                                        ";
        // line 112
        if (($this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "fonctionUser", array()) != "")) {
            // line 113
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "fonctionUser", array()), "html", null, true);
            echo "
                                        ";
        } else {
            // line 115
            echo "                                            Aucune fonction
                                        ";
        }
        // line 117
        echo "                                    </p>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    <strong>
                                        Service
                                    </strong>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <p >
                                        ";
        // line 128
        if (($this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "serviceUser", array()) != "")) {
            // line 129
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "serviceUser", array()), "html", null, true);
            echo "
                                        ";
        } else {
            // line 131
            echo "                                            Aucun service
                                        ";
        }
        // line 133
        echo "                                    </p>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    <strong>
                                        Direction
                                    </strong>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <p >
                                        ";
        // line 144
        if (($this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "directionUser", array()) != "")) {
            // line 145
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "directionUser", array()), "html", null, true);
            echo "
                                        ";
        } else {
            // line 147
            echo "                                            Aucune direction
                                        ";
        }
        // line 149
        echo "                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"ln_solid\"></div>
                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                <a href=\"";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_admin_homepage");
        echo "\">
                                    <button type=\"button\" class=\"btn btn-success\">Retour</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_a1cc50ddc4f621a8fb51383b7f7c9b52a8caba54986b6d674821b3d31ad9af04->leave($__internal_a1cc50ddc4f621a8fb51383b7f7c9b52a8caba54986b6d674821b3d31ad9af04_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 156,  274 => 149,  270 => 147,  264 => 145,  262 => 144,  249 => 133,  245 => 131,  239 => 129,  237 => 128,  224 => 117,  220 => 115,  214 => 113,  212 => 112,  199 => 101,  195 => 99,  189 => 97,  187 => 96,  173 => 85,  161 => 75,  157 => 73,  151 => 71,  149 => 70,  137 => 60,  128 => 58,  124 => 57,  112 => 47,  108 => 45,  102 => 43,  89 => 33,  63 => 10,  55 => 4,  49 => 3,  35 => 2,  11 => 1,);
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
{% block title %} {{parent()}} Utilisateurs {% endblock %}
{% block content %}
    <div>
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Utilisateurs</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\">Acceuil</a></li>
                    <li><a href=\"{{ path('user_admin_homepage') }}\">Utilisateurs</a></li>
                    <li class=\"active\">Détails </li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Détails conçernant l'utilisateur</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <br>
                        <div class=\"col-md-offset-2\">
                            <div class=\"row\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    <strong>
                                        Nom
                                    </strong>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <p >{{ agent.username }}</p>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    <strong>
                                        Prénom
                                    </strong>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <p >{% if agent.prenomUser != \"\" %}{{ agent.prenomUser }}
                                        {% else %}
                                            Aucun prénom
                                        {% endif %}
                                    </p>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    <strong>
                                        Entités d'appartenance
                                    </strong>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    {% for entity in agent.entites %}
                                    <p >-{{ entity.libelleEntite }}</p>
                                    {% endfor %}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    <strong>
                                        Contact
                                    </strong>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <p >
                                        {% if agent.contactAgent != \"\" %}
                                            {{ agent.contactAgent }}
                                        {% else %}
                                            Aucun contact
                                        {% endif %}
                                    </p>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    <strong>
                                        Email
                                    </strong>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <p >{{ agent.email }}</p>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    <strong>
                                        Adresse
                                    </strong>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <p >
                                        {% if agent.adresseAgent != \"\" %}
                                            {{ agent.adresseAgent }}
                                        {% else %}
                                            Aucune adresse
                                        {% endif %}
                                    </p>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    <strong>
                                        Fonction
                                    </strong>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <p >
                                        {% if agent.fonctionUser != \"\" %}
                                            {{ agent.fonctionUser }}
                                        {% else %}
                                            Aucune fonction
                                        {% endif %}
                                    </p>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    <strong>
                                        Service
                                    </strong>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <p >
                                        {% if agent.serviceUser != \"\" %}
                                            {{ agent.serviceUser }}
                                        {% else %}
                                            Aucun service
                                        {% endif %}
                                    </p>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                                    <strong>
                                        Direction
                                    </strong>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <p >
                                        {% if agent.directionUser != \"\" %}
                                            {{ agent.directionUser }}
                                        {% else %}
                                            Aucune direction
                                        {% endif %}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"ln_solid\"></div>
                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                <a href=\"{{ path('user_admin_homepage') }}\">
                                    <button type=\"button\" class=\"btn btn-success\">Retour</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "UserBundle:User:show.html.twig", "/opt/lampp/htdocs/ssei-master/src/Proc/UserBundle/Resources/views/User/show.html.twig");
    }
}
