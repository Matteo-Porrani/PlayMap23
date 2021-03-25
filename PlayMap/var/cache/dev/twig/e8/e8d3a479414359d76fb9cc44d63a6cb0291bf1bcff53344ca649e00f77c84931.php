<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* security/login.html.twig */
class __TwigTemplate_501f50b7cad26a7d34d2f0abd20f66c724fc7ceb78f18ba34da0ee37a912b8fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
\t";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t- Log in

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "\t<form method=\"post\" class=\"my-5\">
\t\t";
        // line 12
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageKey", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageData", [], "any", false, false, false, 13), "security"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 15
        echo "
  ";
        // line 25
        echo "  
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-8 mx-auto p-5\" style=\"color:white; background: #002B43; box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.25); border-radius: 15px;\">
\t\t\t\t\t<h1 class=\"h3 mb-3 font-weight-normal text-center\">Connectez-vous à votre compte</h1>

\t\t\t\t\t<div class=\"my-3\">
\t\t\t\t\t  <label for=\"inputEmail\">Mail</label>
  \t\t\t\t\t<input type=\"email\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\" name=\"_username\" id=\"inputEmail\" class=\"form-control\" required autofocus>
            <small><a>Mot de passe oublié ?</a></small>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"my-3\">
\t\t\t\t\t  <label for=\"inputPassword\">Mot de passe</label>
  \t\t\t\t\t<input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\" required>
\t\t\t\t\t</div>

\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t\t\t\t<div class=\"text-center\">
            <button class=\"btn btn-warning text-light my-5\" type=\"submit\">Se connecter</button>
          </div>

\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 64
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 64,  133 => 43,  120 => 33,  110 => 25,  107 => 15,  101 => 13,  99 => 12,  96 => 11,  86 => 10,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}

\t{{ parent() }}
\t- Log in

{% endblock %}

{% block content %}
\t<form method=\"post\" class=\"my-5\">
\t\t{% if error %}
\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t{% endif %}

  {#
\t\t{% if app.user %}
\t\t\t<div class=\"mb-3\">
\t\t\t\tYou are logged in as
\t\t\t\t{{ app.user.username }},
\t\t\t\t<a href=\"{{ path('security_logout') }}\">Logout</a>
\t\t\t</div>
\t\t{% endif %}
  #}
  
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-8 mx-auto p-5\" style=\"color:white; background: #002B43; box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.25); border-radius: 15px;\">
\t\t\t\t\t<h1 class=\"h3 mb-3 font-weight-normal text-center\">Connectez-vous à votre compte</h1>

\t\t\t\t\t<div class=\"my-3\">
\t\t\t\t\t  <label for=\"inputEmail\">Mail</label>
  \t\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"_username\" id=\"inputEmail\" class=\"form-control\" required autofocus>
            <small><a>Mot de passe oublié ?</a></small>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"my-3\">
\t\t\t\t\t  <label for=\"inputPassword\">Mot de passe</label>
  \t\t\t\t\t<input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\" required>
\t\t\t\t\t</div>

\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t\t\t<div class=\"text-center\">
            <button class=\"btn btn-warning text-light my-5\" type=\"submit\">Se connecter</button>
          </div>

\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

\t{#
\t        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
\t        See https://symfony.com/doc/current/security/remember_me.html
\t
\t        <div class=\"checkbox mb-3\">
\t            <label>
\t                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
\t            </label>
\t        </div>
\t    #}


{% endblock %}
", "security/login.html.twig", "/Applications/MAMP/htdocs/gitSymfony/PlayMap23/PlayMap/templates/security/login.html.twig");
    }
}
