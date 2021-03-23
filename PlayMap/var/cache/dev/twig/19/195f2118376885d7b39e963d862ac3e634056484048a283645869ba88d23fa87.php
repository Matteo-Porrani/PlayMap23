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

\t\t<!---BARRE DE NAV-->


\t\t<div
\t\t\tclass=\"container\">

\t\t\t<!--COUPE + BTN CHALLENGE-->

\t\t\t<div class=\"row p-3 pb-5 justify-content-center text-center\">

\t\t\t\t<div class=\"col-4 align-self-center\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img class=\"coupechallenges\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/iconcoupechallenge.png"), "html", null, true);
        echo "\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"btnChallenge\">
\t\t\t\t\t\t<a class=\"btn btn-warning text-light d-sm-none d-lg-inline\" href=\"#\">Challenges</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!--COUPE + BTN CHALLENGE-->

\t\t\t\t<!--LOGO PLAYMAP-->

\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t<a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img class=\"logoplaymap\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logoplaymap2.png"), "html", null, true);
        echo "\"></a>
\t\t\t\t</div>

\t\t\t\t<!--LOGO PLAYMAP-->

\t\t\t\t<!--NAV BURGER INSCRIPTION CONNEXION-->

\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-dark \">
\t\t\t\t\t\t<button class=\"navbar-toggler border-light\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon \"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
\t\t\t\t\t\t\t<div class=\"navbar-nav\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active text-light btn-nav\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
        echo "\">Inscription</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link active text-light btn-nav\" href=\"#\">Connexion</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t<!--NAV BURGER INSCRIPTION CONNEXION-->

\t\t<!--BARRE DE NAV-->

\t</header>


\t";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "

\t<footer>

\t\t<!--FOOTER-->

\t\t<div class=\"container\">

\t\t\t<div class=\"row p-3\">

\t\t\t\t<div class=\"col-3 \">
\t\t\t\t\t<div class=\"Fcontact\">
\t\t\t\t\t\t<p>Contact Siège</p>
\t\t\t\t\t\t<p>6 Rue Chaudron</p><br>
\t\t\t\t\t\t<p>75010 PARIS</p><br>
\t\t\t\t\t\t<p>xxx.gmail.com</p>
\t\t\t\t\t\t<p>Tel : 0123456789</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t<div class=\"row justify-content-center mb-5 mt-3\">
\t\t\t\t\t\t<div class=\"imgR\">

\t\t\t\t\t\t\t<img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/InstagramIcon.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/FacebookIcon.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/TwitterIcon.png"), "html", null, true);
        echo "\">

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-4 text-center mt-4\">
\t\t\t\t\t\t\t<p>Mentions légales</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-4 text-center mt-4\">
\t\t\t\t\t\t\t<p>Cookies</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-4 text-center mt-4\">
\t\t\t\t\t\t\t<p>Contactez-nous</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-3 align-self-center\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"formGroupExampleInput2\">Suivez notre actualité</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"formGroupExampleInput2\" placeholder=\"Adresse mail\">
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>

\t\t</div>

\t</div>

\t<!--FOOTER-->

</footer>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 63
        echo "\t\t";
        // line 64
        echo "

\t";
        
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
        return array (  238 => 64,  236 => 63,  226 => 62,  176 => 93,  172 => 92,  168 => 91,  142 => 67,  140 => 62,  120 => 45,  101 => 31,  86 => 19,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}

\t<header>

\t\t<!---BARRE DE NAV-->


\t\t<div
\t\t\tclass=\"container\">

\t\t\t<!--COUPE + BTN CHALLENGE-->

\t\t\t<div class=\"row p-3 pb-5 justify-content-center text-center\">

\t\t\t\t<div class=\"col-4 align-self-center\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img class=\"coupechallenges\" src=\"{{ asset('images/iconcoupechallenge.png') }}\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"btnChallenge\">
\t\t\t\t\t\t<a class=\"btn btn-warning text-light d-sm-none d-lg-inline\" href=\"#\">Challenges</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!--COUPE + BTN CHALLENGE-->

\t\t\t\t<!--LOGO PLAYMAP-->

\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t<a href=\"{{ path('home') }}\"><img class=\"logoplaymap\" src=\"{{ asset('images/logoplaymap2.png') }}\"></a>
\t\t\t\t</div>

\t\t\t\t<!--LOGO PLAYMAP-->

\t\t\t\t<!--NAV BURGER INSCRIPTION CONNEXION-->

\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-dark \">
\t\t\t\t\t\t<button class=\"navbar-toggler border-light\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon \"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
\t\t\t\t\t\t\t<div class=\"navbar-nav\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active text-light btn-nav\" href=\"{{ path('security_registration') }}\">Inscription</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link active text-light btn-nav\" href=\"#\">Connexion</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t<!--NAV BURGER INSCRIPTION CONNEXION-->

\t\t<!--BARRE DE NAV-->

\t</header>


\t{% block content %}
\t\t{# c'est ici que viendra s'insérer le contenu propre à chaque page #}


\t{% endblock %}


\t<footer>

\t\t<!--FOOTER-->

\t\t<div class=\"container\">

\t\t\t<div class=\"row p-3\">

\t\t\t\t<div class=\"col-3 \">
\t\t\t\t\t<div class=\"Fcontact\">
\t\t\t\t\t\t<p>Contact Siège</p>
\t\t\t\t\t\t<p>6 Rue Chaudron</p><br>
\t\t\t\t\t\t<p>75010 PARIS</p><br>
\t\t\t\t\t\t<p>xxx.gmail.com</p>
\t\t\t\t\t\t<p>Tel : 0123456789</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t<div class=\"row justify-content-center mb-5 mt-3\">
\t\t\t\t\t\t<div class=\"imgR\">

\t\t\t\t\t\t\t<img src=\"{{ asset('images/InstagramIcon.png') }}\">
\t\t\t\t\t\t\t<img src=\"{{ asset('images/FacebookIcon.png') }}\">
\t\t\t\t\t\t\t<img src=\"{{ asset('images/TwitterIcon.png') }}\">

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-4 text-center mt-4\">
\t\t\t\t\t\t\t<p>Mentions légales</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-4 text-center mt-4\">
\t\t\t\t\t\t\t<p>Cookies</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-4 text-center mt-4\">
\t\t\t\t\t\t\t<p>Contactez-nous</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-3 align-self-center\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"formGroupExampleInput2\">Suivez notre actualité</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"formGroupExampleInput2\" placeholder=\"Adresse mail\">
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>

\t\t</div>

\t</div>

\t<!--FOOTER-->

</footer>


{% endblock %}
", "layout.html.twig", "/Applications/MAMP/htdocs/playmap22/PlayMap/templates/layout.html.twig");
    }
}
