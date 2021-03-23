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

/* layout.html.twig */
class __TwigTemplate_d0b6e174757ed38decccf302b46a465918df695b061dba78d34adb5e95e2d4d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<header>


\t\t<nav>

\t\t\t<h1 class=\"d-inline-block mx-3\">
\t\t\t\t<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">PlayMap</a>
\t\t\t</h1>

\t\t\t";
        // line 15
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "
\t\t\t\t<span class=\"mx-3\">Bonjour
\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "pseudo", [], "any", false, false, false, 18), "html", null, true);
            echo "</span>
\t\t\t\t<a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Se déconnecter</a>

\t\t\t";
        } else {
            // line 22
            echo "
\t\t\t\t<span class=\"mx-3\">Bonjour Inconnu</span>
\t\t\t\t<a class=\"mx-3\" href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Se connecter</a>
\t\t\t\t<a class=\"mx-3\" href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\">S'inscrire</a>

\t\t\t";
        }
        // line 28
        echo "
\t\t</nav>
\t</header>

\t<main>
\t\t";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "\t</main>

\t<footer>
\t\t<p>&copy; PlayMap-";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
\t</footer>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "\t\t\t";
        // line 35
        echo "\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 35,  153 => 34,  143 => 33,  129 => 39,  124 => 36,  122 => 33,  115 => 28,  109 => 25,  105 => 24,  101 => 22,  95 => 19,  91 => 18,  87 => 16,  84 => 15,  78 => 11,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}

\t<header>


\t\t<nav>

\t\t\t<h1 class=\"d-inline-block mx-3\">
\t\t\t\t<a href=\"{{ path('home') }}\">PlayMap</a>
\t\t\t</h1>

\t\t\t{# {% if is_granted('ROLE_USER') %} #}
\t\t\t{% if app.user %}

\t\t\t\t<span class=\"mx-3\">Bonjour
\t\t\t\t\t{{ app.user.pseudo }}</span>
\t\t\t\t<a href=\"{{ path('security_logout') }}\">Se déconnecter</a>

\t\t\t{% else %}

\t\t\t\t<span class=\"mx-3\">Bonjour Inconnu</span>
\t\t\t\t<a class=\"mx-3\" href=\"{{ path('security_login') }}\">Se connecter</a>
\t\t\t\t<a class=\"mx-3\" href=\"{{ path('security_registration') }}\">S'inscrire</a>

\t\t\t{% endif %}

\t\t</nav>
\t</header>

\t<main>
\t\t{% block content %}
\t\t\t{# c'est ici que viendra s'insérer le contenu propre à chaque page #}
\t\t{% endblock %}
\t</main>

\t<footer>
\t\t<p>&copy; PlayMap-{{ \"now\" | date(\"Y\") }}</p>
\t</footer>

{% endblock %}
", "layout.html.twig", "/Applications/MAMP/htdocs/playmap19/PlayMap/templates/layout.html.twig");
    }
}
