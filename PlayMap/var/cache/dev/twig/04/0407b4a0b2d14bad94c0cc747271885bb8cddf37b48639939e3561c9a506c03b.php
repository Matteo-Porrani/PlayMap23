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

/* home/home.html.twig */
class __TwigTemplate_7cb2b6c01d06b53389a32ee28a785245a233e9089afed27ff5fda96269a7caf8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/home.html.twig", 1);
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
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "- Home
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
\t<main>

\t\t<!-- MODALE UTILISATEUR -->
\t\t<div id=\"user-acc\" class=\"d-none\" style=\"opacity: 0;\">

\t\t\t<section class=\"user-avatar text-center\">
\t\t\t\t<img class=\"w-25\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/old-man.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t</section>

\t\t\t<section class=\"user-pseudo my-2\">
\t\t\t\t<div>
\t\t\t\t\t";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
            // line 21
            echo "\t\t\t\t\t\t<p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "pseudo", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t</div>
\t\t\t</section>

\t\t\t<section class=\"user-grade my-3\">
\t\t\t\t<p>
          ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "\t\t\t\t\t\t— ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "gradeLabel", [], "any", false, false, false, 29), "html", null, true);
            echo " —
\t\t\t\t\t";
        }
        // line 31
        echo "        </p>
\t\t\t</section>

\t\t\t<!-- A*A -- PROGRESSION -->
\t\t\t<section class=\"user-level d-flex justify-content-center align-items-center my-3\">

\t\t\t\t<div class=\"user-level-logo\">
\t\t\t\t\t<img src=\"images/BadgeOr.png\" alt=\"\">
\t\t\t\t</div>

\t\t\t\t<div class=\"user-level-prog\">
          <div></div>
          <div class=\"user-level-prog-int bg-warning\"></div>
        </div>

\t\t\t\t<div class=\"user-level-logo\">
\t\t\t\t\t<img src=\"images/Médaille.png\" alt=\"\">
\t\t\t\t</div>

\t\t\t</section>

\t\t\t<!-- A*A -- STATS -->
\t\t\t<section class=\"user-stats d-flex justify-content-between\">

\t\t\t\t<div class=\"user-stats-icon\">
\t\t\t\t\t<p>85<br>km</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"user-stats-icon\">
\t\t\t\t\t<p>2000<br>calories</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"user-stats-icon\">
\t\t\t\t\t<p>250 g<br>Co2/km</p>
\t\t\t\t</div>

\t\t\t</section>

\t\t\t<section class=\"user-account my-3 text-center\">
\t\t\t\t";
        // line 68
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68)) {
            // line 69
            echo "\t\t\t\t\t<a class=\"btn btn-account\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">Voir profil</a>
\t\t\t\t";
        }
        // line 71
        echo "\t\t\t</section>


\t\t</div>
\t\t<!-- FIN DU MODALE UTILISATEUR -->


\t\t<!--MAIN-->

\t\t<div class=\"container\">

\t\t\t<div
\t\t\t\tclass=\"row\">

\t\t\t\t<!-- RPR -- BLOC DE GAUCHE ****************************************************** -->
\t\t\t\t<div class=\"col-4 text-center justify-content-center\">
\t\t\t\t\t<div class=\"cadreChallenge \">
\t\t\t\t\t\t<h3>Mes Challenges</h3>
\t\t\t\t\t\t<div class=\"cadreChallenge2\">
\t\t\t\t\t\t\t<p>Pas de Challenge en cours...</p><br>
\t\t\t\t\t\t\t<a href=\"\" class=\"\">Inscrivez-vous pour participer aux challenges !</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<!-- RPR -- BLOC DU CENTRE ****************************************************** -->
\t\t\t\t<div class=\"col-4\">

\t\t\t\t\t<div class=\"row justify-content-center ombreTransport\">
\t\t\t\t\t\t<img class=\"ombreVelo\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Ombre+Vélo.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img class=\"ombretrottinette d-none\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ombretrottinette.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img class=\"ombrePied d-none\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Icon_Apied.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<p class=\"selection med-txt\">Sélectionnez votre moyen de transport :</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row justify-content-center\">

\t\t\t\t\t\t<div class=\"btnTransport\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"btnVelo\" class=\"btn text-light med-txt\">Vélo</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btnTransport\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"btnTrottinette\" class=\"btn text-light med-txt\">Trottinette</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btnTransport\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"btnPied\" class=\"btn text-light med-txt\">A Pieds</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- FIN MOYEN DE TRANSPORTS-->

\t\t\t\t\t</div>


\t\t\t\t\t<!--A*A-- FORMULAIRE ITINERAIRE -->
\t\t\t\t\t<form>
\t\t\t\t\t\t<div class=\"form-group\" style=\"\">
\t\t\t\t\t\t\t<label for=\"start\">Départ</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"start\" placeholder=\"Adresse de départ\" name=\"start\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"Vector\">
\t\t\t\t\t\t\t<img class=\"float-right\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/vector.png"), "html", null, true);
        echo "\" alt=\"VECTOR\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"stop\">Arrivée</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"stop\" placeholder=\"Adresse d'arrivée\" name=\"stop\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row justify-content-around\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"search\" class=\"btn btn-warning text-light mb-4\" name=\"search\">Allons-y !</button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"btnGo\" class=\"btn btn-danger text-light mb-4\">Valider mon Trajet !</button>
\t\t\t\t\t\t</div>


\t\t\t\t\t</form>
\t\t\t\t\t<!--FIN INPUT DEPART ARRIVEE-->

\t\t\t\t</div>

\t\t\t\t<!-- RPR -- BLOC DE DROITE ****************************************************** -->
\t\t\t\t<div
\t\t\t\t\tclass=\"col-4\">
\t\t\t\t\t<!--METEO ****************************************************** -->

\t\t\t\t\t<div class=\"meteo\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t<!-- row météo -->

\t\t\t\t\t\t\t<div class=\"col-6 p-3 mb-2 text-white\">
\t\t\t\t\t\t\t\t<p id=\"cityTemp\" class=\"font-weight-bold\"></p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<img id=\"temp\" src=\"\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t<!-- row trajet -->

\t\t\t\t\t\t<div class=\"col p-3 mt-5 mb-3 statsTrajet\">

\t\t\t\t\t\t\t<div class=\"statsTrajetHaut\">
\t\t\t\t\t\t\t\t<p>12 km</p>
\t\t\t\t\t\t\t\t<p>25 min</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"statsTrajetBas d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<p>2000
\t\t\t\t\t\t\t\t\t\t<br>calories</p>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<p>1056
\t\t\t\t\t\t\t\t\t\t<br>co2</p>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<img id=\"transport\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Vélo.png"), "html", null, true);
        echo "\" alt=\"transport mobilité\">
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t<!-- row favoris -->
\t\t\t\t\t\t<button class=\"btn btn-warning text-light mx-auto\">Enregistrer dans les favoris</button>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>
\t\t<!-- fin du container -->


\t\t<!--MAP-->
\t\t<div class=\"container-fluid\">
\t\t\t<div id=\"carte\" class=\"map\"></div>
\t\t</div>
\t\t<!-- FIN MAP-->


\t\t<!-- MODALE CHALLENGER -->

\t\t<div id=\"user-chal\" class=\"d-none p-4 \">
\t\t\t<section class=\"border-chal text-center py-3\">

\t\t\t\t<section class=\"badge\">
\t\t\t\t\t<img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/badge.png"), "html", null, true);
        echo "\" alt=\"BADGE\">
\t\t\t\t\t<h4 class=\"font-weight-bold\">Bien Joué !
\t\t\t\t\t\t<br>
\t\t\t\t\t\tVous êtes arrivé !</h4>
\t\t\t\t</section>

\t\t\t\t<section class=\"cumuler font-weight-bold\">
\t\t\t\t\t<p class=\"text-light\">
\t\t\t\t\t\tVous Avez Cumulé :
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"text-warning\">
\t\t\t\t\t\t+ 3 Km
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t- 200 Calories
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"text-info\">
\t\t\t\t\t\t- 20g co2/km
\t\t\t\t\t</p>
\t\t\t\t</section>
\t\t\t</section>

\t\t</div>

\t\t<!-- FIN DU MODALE CHALLENGER -->

\t</main>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 229,  316 => 194,  251 => 132,  219 => 103,  215 => 102,  211 => 101,  179 => 71,  173 => 69,  171 => 68,  132 => 31,  126 => 29,  124 => 28,  117 => 23,  111 => 21,  109 => 20,  101 => 15,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}
\t{{ parent() }}- Home
{% endblock %}

{% block content %}

\t<main>

\t\t<!-- MODALE UTILISATEUR -->
\t\t<div id=\"user-acc\" class=\"d-none\" style=\"opacity: 0;\">

\t\t\t<section class=\"user-avatar text-center\">
\t\t\t\t<img class=\"w-25\" src=\"{{ asset('images/old-man.png') }}\" alt=\"\">
\t\t\t</section>

\t\t\t<section class=\"user-pseudo my-2\">
\t\t\t\t<div>
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<p>{{ app.user.pseudo }}</p>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</section>

\t\t\t<section class=\"user-grade my-3\">
\t\t\t\t<p>
          {% if app.user %}
\t\t\t\t\t\t— {{ app.user.gradeLabel }} —
\t\t\t\t\t{% endif %}
        </p>
\t\t\t</section>

\t\t\t<!-- A*A -- PROGRESSION -->
\t\t\t<section class=\"user-level d-flex justify-content-center align-items-center my-3\">

\t\t\t\t<div class=\"user-level-logo\">
\t\t\t\t\t<img src=\"images/BadgeOr.png\" alt=\"\">
\t\t\t\t</div>

\t\t\t\t<div class=\"user-level-prog\">
          <div></div>
          <div class=\"user-level-prog-int bg-warning\"></div>
        </div>

\t\t\t\t<div class=\"user-level-logo\">
\t\t\t\t\t<img src=\"images/Médaille.png\" alt=\"\">
\t\t\t\t</div>

\t\t\t</section>

\t\t\t<!-- A*A -- STATS -->
\t\t\t<section class=\"user-stats d-flex justify-content-between\">

\t\t\t\t<div class=\"user-stats-icon\">
\t\t\t\t\t<p>85<br>km</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"user-stats-icon\">
\t\t\t\t\t<p>2000<br>calories</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"user-stats-icon\">
\t\t\t\t\t<p>250 g<br>Co2/km</p>
\t\t\t\t</div>

\t\t\t</section>

\t\t\t<section class=\"user-account my-3 text-center\">
\t\t\t\t{% if app.user %}
\t\t\t\t\t<a class=\"btn btn-account\" href=\"{{ path('account', {('id'): app.user.id}) }}\">Voir profil</a>
\t\t\t\t{% endif %}
\t\t\t</section>


\t\t</div>
\t\t<!-- FIN DU MODALE UTILISATEUR -->


\t\t<!--MAIN-->

\t\t<div class=\"container\">

\t\t\t<div
\t\t\t\tclass=\"row\">

\t\t\t\t<!-- RPR -- BLOC DE GAUCHE ****************************************************** -->
\t\t\t\t<div class=\"col-4 text-center justify-content-center\">
\t\t\t\t\t<div class=\"cadreChallenge \">
\t\t\t\t\t\t<h3>Mes Challenges</h3>
\t\t\t\t\t\t<div class=\"cadreChallenge2\">
\t\t\t\t\t\t\t<p>Pas de Challenge en cours...</p><br>
\t\t\t\t\t\t\t<a href=\"\" class=\"\">Inscrivez-vous pour participer aux challenges !</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<!-- RPR -- BLOC DU CENTRE ****************************************************** -->
\t\t\t\t<div class=\"col-4\">

\t\t\t\t\t<div class=\"row justify-content-center ombreTransport\">
\t\t\t\t\t\t<img class=\"ombreVelo\" src=\"{{ asset('images/Ombre+Vélo.png') }}\">
\t\t\t\t\t\t<img class=\"ombretrottinette d-none\" src=\"{{ asset('images/ombretrottinette.png') }}\">
\t\t\t\t\t\t<img class=\"ombrePied d-none\" src=\"{{ asset('images/Icon_Apied.png') }}\">
\t\t\t\t\t\t<p class=\"selection med-txt\">Sélectionnez votre moyen de transport :</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row justify-content-center\">

\t\t\t\t\t\t<div class=\"btnTransport\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"btnVelo\" class=\"btn text-light med-txt\">Vélo</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btnTransport\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"btnTrottinette\" class=\"btn text-light med-txt\">Trottinette</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btnTransport\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"btnPied\" class=\"btn text-light med-txt\">A Pieds</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- FIN MOYEN DE TRANSPORTS-->

\t\t\t\t\t</div>


\t\t\t\t\t<!--A*A-- FORMULAIRE ITINERAIRE -->
\t\t\t\t\t<form>
\t\t\t\t\t\t<div class=\"form-group\" style=\"\">
\t\t\t\t\t\t\t<label for=\"start\">Départ</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"start\" placeholder=\"Adresse de départ\" name=\"start\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"Vector\">
\t\t\t\t\t\t\t<img class=\"float-right\" src=\"{{ asset('images/vector.png') }}\" alt=\"VECTOR\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"stop\">Arrivée</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"stop\" placeholder=\"Adresse d'arrivée\" name=\"stop\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row justify-content-around\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"search\" class=\"btn btn-warning text-light mb-4\" name=\"search\">Allons-y !</button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"btnGo\" class=\"btn btn-danger text-light mb-4\">Valider mon Trajet !</button>
\t\t\t\t\t\t</div>


\t\t\t\t\t</form>
\t\t\t\t\t<!--FIN INPUT DEPART ARRIVEE-->

\t\t\t\t</div>

\t\t\t\t<!-- RPR -- BLOC DE DROITE ****************************************************** -->
\t\t\t\t<div
\t\t\t\t\tclass=\"col-4\">
\t\t\t\t\t<!--METEO ****************************************************** -->

\t\t\t\t\t<div class=\"meteo\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t<!-- row météo -->

\t\t\t\t\t\t\t<div class=\"col-6 p-3 mb-2 text-white\">
\t\t\t\t\t\t\t\t<p id=\"cityTemp\" class=\"font-weight-bold\"></p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<img id=\"temp\" src=\"\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t<!-- row trajet -->

\t\t\t\t\t\t<div class=\"col p-3 mt-5 mb-3 statsTrajet\">

\t\t\t\t\t\t\t<div class=\"statsTrajetHaut\">
\t\t\t\t\t\t\t\t<p>12 km</p>
\t\t\t\t\t\t\t\t<p>25 min</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"statsTrajetBas d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<p>2000
\t\t\t\t\t\t\t\t\t\t<br>calories</p>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<p>1056
\t\t\t\t\t\t\t\t\t\t<br>co2</p>
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t<article>
\t\t\t\t\t\t\t\t\t<img id=\"transport\" src=\"{{ asset('images/Vélo.png') }}\" alt=\"transport mobilité\">
\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t<!-- row favoris -->
\t\t\t\t\t\t<button class=\"btn btn-warning text-light mx-auto\">Enregistrer dans les favoris</button>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>
\t\t<!-- fin du container -->


\t\t<!--MAP-->
\t\t<div class=\"container-fluid\">
\t\t\t<div id=\"carte\" class=\"map\"></div>
\t\t</div>
\t\t<!-- FIN MAP-->


\t\t<!-- MODALE CHALLENGER -->

\t\t<div id=\"user-chal\" class=\"d-none p-4 \">
\t\t\t<section class=\"border-chal text-center py-3\">

\t\t\t\t<section class=\"badge\">
\t\t\t\t\t<img src=\"{{ asset('images/badge.png') }}\" alt=\"BADGE\">
\t\t\t\t\t<h4 class=\"font-weight-bold\">Bien Joué !
\t\t\t\t\t\t<br>
\t\t\t\t\t\tVous êtes arrivé !</h4>
\t\t\t\t</section>

\t\t\t\t<section class=\"cumuler font-weight-bold\">
\t\t\t\t\t<p class=\"text-light\">
\t\t\t\t\t\tVous Avez Cumulé :
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"text-warning\">
\t\t\t\t\t\t+ 3 Km
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"text-danger\">
\t\t\t\t\t\t- 200 Calories
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"text-info\">
\t\t\t\t\t\t- 20g co2/km
\t\t\t\t\t</p>
\t\t\t\t</section>
\t\t\t</section>

\t\t</div>

\t\t<!-- FIN DU MODALE CHALLENGER -->

\t</main>


{% endblock %}
", "home/home.html.twig", "/Applications/MAMP/htdocs/playmap22/PlayMap/templates/home/home.html.twig");
    }
}
