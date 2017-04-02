<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e27e9e6ca8a182fea02e73a30e9d4e994dc4f3c83b917b4189d5d475523c1042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e10bbd17b9ab35d8f24957e6a84187e0a48297f97f363a1eb37cc14c323f5c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10bbd17b9ab35d8f24957e6a84187e0a48297f97f363a1eb37cc14c323f5c3e->enter($__internal_e10bbd17b9ab35d8f24957e6a84187e0a48297f97f363a1eb37cc14c323f5c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>";
        // line 11
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">     
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>       
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" />
        <style type=\"text/css\">
           .login-form {
            width: 400px;
            height: 400px;
            }
            body
            {background-color: #f8f8f8;}
        </style>        
  </head>

  <body class=\"login\">
    <div class=\"card card-container login-form\">
      <img id=\"profile-img\" class=\"profile-img-card\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" />

      <div class=\"login_wrapper\">  
        ";
        // line 32
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 33
            echo "            <div class=\"alert alert-danger text-center\" stlye=\"border-radius:10px;\">
            ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array("Bad credentials" => "Login ou mot de passe incorrect")), "html", null, true);
            echo "</div>            
        ";
        }
        // line 35
        echo "                   
        <div class=\"animate form login_form\">
          <section class=\"login_content\">           
            <form action=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
              <h1>MPAE </h1>
              <div>
                <input type=\"text\" class=\"form-control\" autocomplete=\"off\" placeholder=\"Email ou nom d'utilisateur\" name=\"_username\" id=\"username\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/>
              </div>
              <div>
                <input type=\"password\" id=\"inputPassword\" class=\"form-control\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe\"/>
              </div>         
              <div>
                <button class=\"btn\" type=\"submit\">Se connecter</button>
                <!--<a class=\"reset_pass\" href=\"{!{ path('fos_user_resetting_request') }}\">Mot de passe perdu ?</a>-->
              </div>
              <div class=\"clearfix\"></div>

              <div class=\"separator\">
                <div class=\"clearfix\"></div>
                <br />

                <div>
                  <h3><i class=\"fa fa-tasks\"></i> MPAE</h3>
                  <p>© Copyright 2017</p>
                </div>
              </div>
            </form>
          </section>
        </div>

 
      </div>
    </div>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/login.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>

  </body>
</html>
";
        
        $__internal_e10bbd17b9ab35d8f24957e6a84187e0a48297f97f363a1eb37cc14c323f5c3e->leave($__internal_e10bbd17b9ab35d8f24957e6a84187e0a48297f97f363a1eb37cc14c323f5c3e_prof);

    }

    // line 11
    public function block_titre($context, array $blocks = array())
    {
        $__internal_c966d9db5662ca7aca9bc7b463ac744a916aa1151f3fc61b577ba021a7352a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c966d9db5662ca7aca9bc7b463ac744a916aa1151f3fc61b577ba021a7352a8e->enter($__internal_c966d9db5662ca7aca9bc7b463ac744a916aa1151f3fc61b577ba021a7352a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "MPAE | Login";
        
        $__internal_c966d9db5662ca7aca9bc7b463ac744a916aa1151f3fc61b577ba021a7352a8e->leave($__internal_c966d9db5662ca7aca9bc7b463ac744a916aa1151f3fc61b577ba021a7352a8e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 11,  144 => 72,  140 => 71,  136 => 70,  132 => 69,  102 => 42,  96 => 39,  92 => 38,  87 => 35,  82 => 34,  79 => 33,  77 => 32,  71 => 29,  55 => 16,  51 => 15,  47 => 14,  43 => 13,  39 => 12,  35 => 11,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>{% block titre %}MPAE | Login{% endblock %}</title>
        <link href=\"{{asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('fonts/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">     
        <link href=\"{{asset('css/custom.min.css')}}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\"/>       
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/favicon.ico') }}\" />
        <style type=\"text/css\">
           .login-form {
            width: 400px;
            height: 400px;
            }
            body
            {background-color: #f8f8f8;}
        </style>        
  </head>

  <body class=\"login\">
    <div class=\"card card-container login-form\">
      <img id=\"profile-img\" class=\"profile-img-card\" src=\"{{asset('images/user.png')}}\" />

      <div class=\"login_wrapper\">  
        {% if error %}
            <div class=\"alert alert-danger text-center\" stlye=\"border-radius:10px;\">
            {{ error|trans({'Bad credentials': 'Login ou mot de passe incorrect'}) }}</div>            
        {% endif %}                   
        <div class=\"animate form login_form\">
          <section class=\"login_content\">           
            <form action=\"{{ path('fos_user_security_check') }}\" method=\"post\">
              <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
              <h1>MPAE </h1>
              <div>
                <input type=\"text\" class=\"form-control\" autocomplete=\"off\" placeholder=\"Email ou nom d'utilisateur\" name=\"_username\" id=\"username\" value=\"{{ last_username }}\" required=\"required\"/>
              </div>
              <div>
                <input type=\"password\" id=\"inputPassword\" class=\"form-control\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe\"/>
              </div>         
              <div>
                <button class=\"btn\" type=\"submit\">Se connecter</button>
                <!--<a class=\"reset_pass\" href=\"{!{ path('fos_user_resetting_request') }}\">Mot de passe perdu ?</a>-->
              </div>
              <div class=\"clearfix\"></div>

              <div class=\"separator\">
                <div class=\"clearfix\"></div>
                <br />

                <div>
                  <h3><i class=\"fa fa-tasks\"></i> MPAE</h3>
                  <p>© Copyright 2017</p>
                </div>
              </div>
            </form>
          </section>
        </div>

 
      </div>
    </div>
    <script src=\"{{asset('js/jquery.min.js')}}\"></script>
<script src=\"{{asset('js/login.js')}}\"></script>
    <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>

  </body>
</html>
", "FOSUserBundle:Security:login.html.twig", "/opt/lampp/htdocs/ssei/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
