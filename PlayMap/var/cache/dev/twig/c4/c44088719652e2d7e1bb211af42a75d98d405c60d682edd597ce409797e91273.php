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

/* home/beta.html.twig */
class __TwigTemplate_a7469f2475007b38046645570535d58d628e02ff983775c8b3259eccd3595f5d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/beta.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/beta.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/beta.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t- beta
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
        echo "\t";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

\t<div class=\"container\">
\t\t<div class=\"row my-5\">
\t\t\t<div class=\"col\">

        ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            echo "          <p class=\"text-danger\">Ce message apparaît si un utilisateur est connecté : user = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "pseudo", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
        ";
        }
        // line 20
        echo "
\t\t\t\t<h2>Page de test</h2>
\t\t\t\t<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos magni praesentium nam voluptatem corrupti natus. Maxime debitis quo, quidem, voluptates molestias asperiores et vero delectus dolor distinctio, corporis voluptatem aut.</p>
\t\t\t</h2>
      <div id=\"react-root\" class=\"my-3\"></div>


\t\t\t<table class=\"table\">
\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>id</th>
\t\t\t\t\t\t<th>name</th>
\t\t\t\t\t\t<th>age</th>
\t\t\t\t\t</tr>

\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["betas"]) || array_key_exists("betas", $context) ? $context["betas"] : (function () { throw new RuntimeError('Variable "betas" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["beta"]) {
            // line 38
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beta"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beta"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["beta"], "age", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['beta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
\t\t\t\t</tbody>
\t\t\t</table>

\t\t</div>
\t</div>
  <div class=\"row\">
    <div class=\"col\">
      <div id=\"react-root\"></div>
    </div>
  </div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/beta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 44,  145 => 41,  141 => 40,  137 => 39,  134 => 38,  130 => 37,  111 => 20,  105 => 18,  103 => 17,  93 => 11,  83 => 10,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}


{% block title %}
\t{{ parent() }}
\t- beta
{% endblock %}


{% block content %}
\t{{ parent() }}

\t<div class=\"container\">
\t\t<div class=\"row my-5\">
\t\t\t<div class=\"col\">

        {% if app.user %}
          <p class=\"text-danger\">Ce message apparaît si un utilisateur est connecté : user = {{ app.user.pseudo }}</p>
        {% endif %}

\t\t\t\t<h2>Page de test</h2>
\t\t\t\t<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos magni praesentium nam voluptatem corrupti natus. Maxime debitis quo, quidem, voluptates molestias asperiores et vero delectus dolor distinctio, corporis voluptatem aut.</p>
\t\t\t</h2>
      <div id=\"react-root\" class=\"my-3\"></div>


\t\t\t<table class=\"table\">
\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>id</th>
\t\t\t\t\t\t<th>name</th>
\t\t\t\t\t\t<th>age</th>
\t\t\t\t\t</tr>

\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for beta in betas %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{beta.id}}</td>
\t\t\t\t\t\t\t<td>{{beta.name}}</td>
\t\t\t\t\t\t\t<td>{{beta.age}}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}

\t\t\t\t</tbody>
\t\t\t</table>

\t\t</div>
\t</div>
  <div class=\"row\">
    <div class=\"col\">
      <div id=\"react-root\"></div>
    </div>
  </div>
</div>{% endblock %}
", "home/beta.html.twig", "/Applications/MAMP/htdocs/playmap22/PlayMap/templates/home/beta.html.twig");
    }
}
