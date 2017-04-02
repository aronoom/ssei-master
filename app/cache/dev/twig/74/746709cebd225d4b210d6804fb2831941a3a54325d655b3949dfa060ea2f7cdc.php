<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_7b79372480711c8804124f7069bea6cebc8cf228a212e2389ced5554cc5ea8d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_696ac0a800fea8f92edbacb8073b7b020a27adc389743a607f46b403ab84b192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696ac0a800fea8f92edbacb8073b7b020a27adc389743a607f46b403ab84b192->enter($__internal_696ac0a800fea8f92edbacb8073b7b020a27adc389743a607f46b403ab84b192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "


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
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
        // line 25
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenomUser", array()) != "")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenomUser", array()), "html", null, true);
            echo "
                    ";
        } else {
            // line 27
            echo "                        Aucun prénom
                    ";
        }
        // line 29
        echo "                </p>
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
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "entites", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 40
            echo "                    <p >-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelleEntite", array()), "html", null, true);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </div>
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
        // line 52
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "contactAgent", array()) != "")) {
            // line 53
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "contactAgent", array()), "html", null, true);
            echo "
                    ";
        } else {
            // line 55
            echo "                        Aucun contact
                    ";
        }
        // line 57
        echo "                </p>
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
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
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
        // line 78
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresseAgent", array()) != "")) {
            // line 79
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresseAgent", array()), "html", null, true);
            echo "
                    ";
        } else {
            // line 81
            echo "                        Aucune adresse
                    ";
        }
        // line 83
        echo "                </p>
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
        // line 94
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "fonctionUser", array()) != "")) {
            // line 95
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "fonctionUser", array()), "html", null, true);
            echo "
                    ";
        } else {
            // line 97
            echo "                        Aucune fonction
                    ";
        }
        // line 99
        echo "                </p>
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
        // line 110
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "serviceUser", array()) != "")) {
            // line 111
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "serviceUser", array()), "html", null, true);
            echo "
                    ";
        } else {
            // line 113
            echo "                        Aucun service
                    ";
        }
        // line 115
        echo "                </p>
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
        // line 126
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "directionUser", array()) != "")) {
            // line 127
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "directionUser", array()), "html", null, true);
            echo "
                    ";
        } else {
            // line 129
            echo "                        Aucune direction
                    ";
        }
        // line 131
        echo "                </p>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <hr>
        <div class=\"form-group\">
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                <a href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-edit m-right-xs\"></i>Modifier mot de passe</a>
                ";
        // line 139
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "statusUser", array()) == false) &&  !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "isGranted", array(0 => "ROLE_ADMIN"), "method"))) {
            // line 140
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_checkUser");
            echo "\" class=\"btn btn-primary\">Passer au suivante</a>
                ";
        }
        // line 142
        echo "            </div>
        </div>
        <hr>

    </div>
</div>
";
        
        $__internal_696ac0a800fea8f92edbacb8073b7b020a27adc389743a607f46b403ab84b192->leave($__internal_696ac0a800fea8f92edbacb8073b7b020a27adc389743a607f46b403ab84b192_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 142,  237 => 140,  235 => 139,  231 => 138,  222 => 131,  218 => 129,  212 => 127,  210 => 126,  197 => 115,  193 => 113,  187 => 111,  185 => 110,  172 => 99,  168 => 97,  162 => 95,  160 => 94,  147 => 83,  143 => 81,  137 => 79,  135 => 78,  121 => 67,  109 => 57,  105 => 55,  99 => 53,  97 => 52,  85 => 42,  76 => 40,  72 => 39,  60 => 29,  56 => 27,  50 => 25,  37 => 15,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}



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
                <p >{{ app.user.username }}</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"control-label col-md-3 col-sm-3 col-xs-12\">
                <strong>
                    Prénom
                </strong>
            </div>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <p >{% if app.user.prenomUser != \"\" %}{{ app.user.prenomUser }}
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
                {% for entity in app.user.entites %}
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
                    {% if app.user.contactAgent != \"\" %}
                        {{ app.user.contactAgent }}
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
                <p >{{ app.user.email }}</p>
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
                    {% if app.user.adresseAgent != \"\" %}
                        {{ app.user.adresseAgent }}
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
                    {% if app.user.fonctionUser != \"\" %}
                        {{ app.user.fonctionUser }}
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
                    {% if app.user.serviceUser != \"\" %}
                        {{ app.user.serviceUser }}
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
                    {% if app.user.directionUser != \"\" %}
                        {{ app.user.directionUser }}
                    {% else %}
                        Aucune direction
                    {% endif %}
                </p>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <hr>
        <div class=\"form-group\">
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                <a href=\"{{path('fos_user_change_password')}}\" class=\"btn btn-success\"><i class=\"fa fa-edit m-right-xs\"></i>Modifier mot de passe</a>
                {% if app.user.statusUser == false and not app.security.isGranted('ROLE_ADMIN') %}
                    <a href=\"{{path('projet_checkUser')}}\" class=\"btn btn-primary\">Passer au suivante</a>
                {% endif %}
            </div>
        </div>
        <hr>

    </div>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/opt/lampp/htdocs/ssei/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
