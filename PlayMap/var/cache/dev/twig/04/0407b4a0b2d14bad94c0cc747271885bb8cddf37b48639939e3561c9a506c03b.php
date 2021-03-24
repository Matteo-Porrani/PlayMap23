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

\t\t<!--MAIN-->

\t\t<div class=\"container\">

\t\t\t<div class=\"row\">

\t\t\t\t<!--CADRE MES CHALLENGES ****************************************************** -->
\t\t\t\t<div class=\"col-4 text-center justify-content-center\">
\t\t\t\t\t<div class=\"cadreChallenge \">
\t\t\t\t\t\t<h3>Mes Challenges</h3>
\t\t\t\t\t\t<div class=\"cadreChallenge2\">
\t\t\t\t\t\t\t<p>Pas de Challenge en cours...</p><br>
\t\t\t\t\t\t\t<a href=\"\" class=\"\">Inscrivez-vous pour participer aux challenges !</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!--CADRE MES CHALLENGES-->




\t\t\t\t<!--MOYEN DE TRANSPORTS ****************************************************** -->
\t\t\t\t<div class=\"col-4\">

\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t<img class=\"ombretrottinette\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ombretrottinette.png"), "html", null, true);
        echo "\">
\t\t\t\t\t  <p class=\"selection\">Sélectionnez votre moyen de transport :</p>
\t\t\t\t  </div>

\t\t\t\t  <div class=\"row justify-content-center\">

            <div class=\"btnTransport\">
              <button type=\"button\" class=\"btn text-light\">Vélo</button>
            </div>
            <div class=\"btnTransport\">
              <button type=\"button\" class=\"btn text-light\">Trottinette</button>
            </div>
            <div class=\"btnTransport\">
              <button type=\"button\" class=\"btn text-light\">A Pieds</button>
            </div>

            <!-- FIN MOYEN DE TRANSPORTS-->

          </div>


            <!--INPUT DEPART ARRIVEE-->
          <div class=\"row justify-content-center\">

            <form>
              <div class=\"form-group\">
                <label for=\"start\">Départ</label>
                <input type=\"text\" class=\"form-control\" id=\"start\" placeholder=\"Adresse de départ\" name=\"start\">
              </div>

              <div class=\"form-group\">
                <label for=\"stop\">Arrivée</label>
                <input type=\"text\" class=\"form-control\" id=\"stop\" placeholder=\"Adresse d'arrivée\" name=\"stop\">
              </div>

              <div class=\"row justify-content-center\">
                <button type=\"button\" class=\"btn btn-warning text-light mb-4\" id=\"search\" name=\"search\">Allons-y !</button>
              </div>

            </form>

          </div>

        <!--FIN INPUT DEPART ARRIVEE-->
          
        <!--METEO-->
        </div>


      <!--METEO ****************************************************** -->
        <div class=\"col-4\">
          <div class=\"meteo\">

            <div class=\"row\">

              <div class=\"col-6 p-3 mb-2 text-white\">
                <p>Paris 10°<br>Aujourd'hui 10°/8°</p>
              </div>

              <div class=\"col-6\">
                <div>
                  <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/MeteoVent.png"), "html", null, true);
        echo "\">
                </div>
              </div>

            </div>

          </div>
          
        </div>

    </div> <!-- fin de row -->

  </div> <!-- fin du container -->

\t\t

\t\t<!--MAP-->
    <div class=\"container-fluid\">
\t\t\t<div id=\"carte\" class=\"map\">
        
      </div>
\t\t</div>

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
        return array (  187 => 98,  123 => 37,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}
\t{{ parent() }}- Home
{% endblock %}

{% block content %}

\t<main>

\t\t<!--MAIN-->

\t\t<div class=\"container\">

\t\t\t<div class=\"row\">

\t\t\t\t<!--CADRE MES CHALLENGES ****************************************************** -->
\t\t\t\t<div class=\"col-4 text-center justify-content-center\">
\t\t\t\t\t<div class=\"cadreChallenge \">
\t\t\t\t\t\t<h3>Mes Challenges</h3>
\t\t\t\t\t\t<div class=\"cadreChallenge2\">
\t\t\t\t\t\t\t<p>Pas de Challenge en cours...</p><br>
\t\t\t\t\t\t\t<a href=\"\" class=\"\">Inscrivez-vous pour participer aux challenges !</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!--CADRE MES CHALLENGES-->




\t\t\t\t<!--MOYEN DE TRANSPORTS ****************************************************** -->
\t\t\t\t<div class=\"col-4\">

\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t<img class=\"ombretrottinette\" src=\"{{ asset('images/ombretrottinette.png') }}\">
\t\t\t\t\t  <p class=\"selection\">Sélectionnez votre moyen de transport :</p>
\t\t\t\t  </div>

\t\t\t\t  <div class=\"row justify-content-center\">

            <div class=\"btnTransport\">
              <button type=\"button\" class=\"btn text-light\">Vélo</button>
            </div>
            <div class=\"btnTransport\">
              <button type=\"button\" class=\"btn text-light\">Trottinette</button>
            </div>
            <div class=\"btnTransport\">
              <button type=\"button\" class=\"btn text-light\">A Pieds</button>
            </div>

            <!-- FIN MOYEN DE TRANSPORTS-->

          </div>


            <!--INPUT DEPART ARRIVEE-->
          <div class=\"row justify-content-center\">

            <form>
              <div class=\"form-group\">
                <label for=\"start\">Départ</label>
                <input type=\"text\" class=\"form-control\" id=\"start\" placeholder=\"Adresse de départ\" name=\"start\">
              </div>

              <div class=\"form-group\">
                <label for=\"stop\">Arrivée</label>
                <input type=\"text\" class=\"form-control\" id=\"stop\" placeholder=\"Adresse d'arrivée\" name=\"stop\">
              </div>

              <div class=\"row justify-content-center\">
                <button type=\"button\" class=\"btn btn-warning text-light mb-4\" id=\"search\" name=\"search\">Allons-y !</button>
              </div>

            </form>

          </div>

        <!--FIN INPUT DEPART ARRIVEE-->
          
        <!--METEO-->
        </div>


      <!--METEO ****************************************************** -->
        <div class=\"col-4\">
          <div class=\"meteo\">

            <div class=\"row\">

              <div class=\"col-6 p-3 mb-2 text-white\">
                <p>Paris 10°<br>Aujourd'hui 10°/8°</p>
              </div>

              <div class=\"col-6\">
                <div>
                  <img src=\"{{ asset('images/MeteoVent.png') }}\">
                </div>
              </div>

            </div>

          </div>
          
        </div>

    </div> <!-- fin de row -->

  </div> <!-- fin du container -->

\t\t

\t\t<!--MAP-->
    <div class=\"container-fluid\">
\t\t\t<div id=\"carte\" class=\"map\">
        
      </div>
\t\t</div>

\t</main>
{% endblock %}
", "home/home.html.twig", "/Users/moussaillon/Documents/GitHub/PlayMap23/PlayMap/templates/home/home.html.twig");
    }
}
