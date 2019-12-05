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

/* doctor/index.html.twig */
class __TwigTemplate_0416056b67f3dccf0e7852d4b9e3ddaa57fc06c27c1722c9a8069e736a46a2b1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "doctor/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "doctor/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "doctor/index.html.twig", 1);
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

        echo "Doctor list";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\">

        <div class=\"content py-5\">
            <h1 class=\"text-center\">Doctor list</h1>

            <table class=\"table mt-4\">
                <thead class=\"thead-dark\">
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["doctors"]) || array_key_exists("doctors", $context) ? $context["doctors"] : (function () { throw new RuntimeError('Variable "doctors" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
            // line 25
            echo "                    <tr>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "username", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "email", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "phone", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>

                        ";
            // line 31
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 32
                echo "                            <td><a class=\"btn\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_examination", ["id" => twig_get_attribute($this->env, $this->source, $context["doctor"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\">Register visitation</a></td>
                        ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 34
                echo "                            <td><a class=\"btn\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_schedule", ["id" => twig_get_attribute($this->env, $this->source, $context["doctor"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\">Add schedule</a></td>
                        ";
            }
            // line 36
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
                </tbody>
            </table>

        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "doctor/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 38,  146 => 36,  140 => 34,  134 => 32,  132 => 31,  127 => 29,  123 => 28,  119 => 27,  115 => 26,  112 => 25,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Doctor list{% endblock %}

{% block body %}

    <div class=\"container\">

        <div class=\"content py-5\">
            <h1 class=\"text-center\">Doctor list</h1>

            <table class=\"table mt-4\">
                <thead class=\"thead-dark\">
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                {% for doctor in doctors %}
                    <tr>
                        <td>{{ doctor.id }}</td>
                        <td>{{ doctor.username }}</td>
                        <td>{{ doctor.email }}</td>
                        <td>{{ doctor.phone }}</td>

                        {% if is_granted('ROLE_USER') %}
                            <td><a class=\"btn\" href=\"{{ path('register_examination', {\"id\": doctor.id}) }}\">Register visitation</a></td>
                        {% elseif is_granted('ROLE_ADMIN') %}
                            <td><a class=\"btn\" href=\"{{ path('admin_schedule', {\"id\": doctor.id}) }}\">Add schedule</a></td>
                        {% endif %}
                    </tr>
                {% endfor %}

                </tbody>
            </table>

        </div>

    </div>

{% endblock %}
", "doctor/index.html.twig", "/var/www/TINKLAI.lab2/IT_project/templates/doctor/index.html.twig");
    }
}
