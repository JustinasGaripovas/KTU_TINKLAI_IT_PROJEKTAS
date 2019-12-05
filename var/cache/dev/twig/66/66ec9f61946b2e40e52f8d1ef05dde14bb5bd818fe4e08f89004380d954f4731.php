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

/* doctor/user_list.html.twig */
class __TwigTemplate_10a8721a4fd521da2e0f0ad03df7dcd086187a87b90a208277f160ecda73394d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "doctor/user_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "doctor/user_list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "doctor/user_list.html.twig", 1);
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
            <h1 class=\"text-center\">Examination list</h1>

            <table class=\"table mt-4\">
                <thead class=\"thead-dark\">
                <tr>
                    <th>#</th>
                    <th>Doctor username</th>
                    <th>Client name</th>
                    <th>Date</th>
                    <th>Hour</th>
                    <th>Examination type</th>
                    <th>Result</th>
                    <th>Comment</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["examination"]) {
            // line 29
            echo "                    <tr>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["examination"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["examination"], "employee", [], "any", false, false, false, 31), "username", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["examination"], "user", [], "any", false, false, false, 32), "username", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["examination"], "date", [], "any", false, false, false, 33), "Y:m:d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["examination"], "hours", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["examination"], "name", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["examination"], "name", [], "any", false, false, false, 35), "None")) : ("None")), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["examination"], "result", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["examination"], "result", [], "any", false, false, false, 36), "Empty")) : ("Empty")), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["examination"], "comment", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["examination"], "comment", [], "any", false, false, false, 37), "Empty")) : ("Empty")), "html", null, true);
            echo "</td>


                        ";
            // line 40
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DOCTOR")) {
                // line 41
                echo "                            <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_examination", ["id" => twig_get_attribute($this->env, $this->source, $context["examination"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\">Add comment</a></td>
                        ";
            }
            // line 43
            echo "                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 44
                echo "                            <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_examination", ["id" => twig_get_attribute($this->env, $this->source, $context["examination"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\">Cancel</a></td>
                        ";
            }
            // line 46
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['examination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
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
        return "doctor/user_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 48,  170 => 46,  164 => 44,  161 => 43,  155 => 41,  153 => 40,  147 => 37,  143 => 36,  139 => 35,  135 => 34,  131 => 33,  127 => 32,  123 => 31,  119 => 30,  116 => 29,  112 => 28,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Doctor list{% endblock %}

{% block body %}

    <div class=\"container\">

        <div class=\"content py-5\">
            <h1 class=\"text-center\">Examination list</h1>

            <table class=\"table mt-4\">
                <thead class=\"thead-dark\">
                <tr>
                    <th>#</th>
                    <th>Doctor username</th>
                    <th>Client name</th>
                    <th>Date</th>
                    <th>Hour</th>
                    <th>Examination type</th>
                    <th>Result</th>
                    <th>Comment</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                {% for examination in users %}
                    <tr>
                        <td>{{ examination.id }}</td>
                        <td>{{ examination.employee.username }}</td>
                        <td>{{ examination.user.username }}</td>
                        <td>{{ examination.date|date('Y:m:d') }}</td>
                        <td>{{ examination.hours }}</td>
                        <td>{{ examination.name|default('None') }}</td>
                        <td>{{ examination.result|default('Empty') }}</td>
                        <td>{{ examination.comment|default('Empty') }}</td>


                        {% if is_granted('ROLE_DOCTOR') %}
                            <td><a href=\"{{ path('edit_examination', {id: examination.id}) }}\">Add comment</a></td>
                        {% endif %}
                        {% if is_granted('ROLE_USER') %}
                            <td><a href=\"{{ path('delete_examination', {id: examination.id}) }}\">Cancel</a></td>
                        {% endif %}
                    </tr>
                {% endfor %}

                </tbody>
            </table>

        </div>

    </div>

{% endblock %}
", "doctor/user_list.html.twig", "/var/www/TINKLAI.lab2/IT_project/templates/doctor/user_list.html.twig");
    }
}
