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

/* admin/shedule_index.html.twig */
class __TwigTemplate_ac107d5b00793700e1a2a6486be6550d1ad01347bf5480bcaf5a3bf5eb9ce348 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/shedule_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/shedule_index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/shedule_index.html.twig", 1);
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

        echo "Hello MainController!";
        
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
            <h1 class=\"text-center\">Employee schedule</h1>

            <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_schedule_create", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\">New schedule entity</a>

            ";
        // line 14
        if ((((isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 14, $this->source); })()) != null) && (twig_get_attribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 14, $this->source); })()), "scheduleDays", [], "any", false, false, false, 14) != null))) {
            // line 15
            echo "                <table class=\"table mt-4\">
                    <thead class=\"thead-dark\">
                    <tr>
                        <th>Day</th>
                        <th>Slots</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 24, $this->source); })()), "scheduleDays", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
                // line 25
                echo "                        <tr>
                            <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 26, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, false, 26), [], "array", false, false, false, 26), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["day"], "slots", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["slots"]) {
                    // line 29
                    echo "
                                    ";
                    // line 30
                    echo twig_escape_filter($this->env, _twig_default_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slots"], "startTime", [], "any", false, false, false, 30), "H:i"), "none"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, _twig_default_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slots"], "endTime", [], "any", false, false, false, 30), "H:i"), "none"), "html", null, true);
                    echo " <br>

                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slots'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                            </td>
                            <td>
                                <a class=\"btn btn-danger\" href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_schedule_day", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35), "day" => twig_get_attribute($this->env, $this->source, $context["day"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\">Delete</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    </tbody>
                </table>
            ";
        } else {
            // line 42
            echo "                <div class=\"container p-5 m-5\">
                    <h4 class=\"text-center\">Schedule is empty</h4>
                </div>
            ";
        }
        // line 46
        echo "
        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/shedule_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 46,  163 => 42,  158 => 39,  148 => 35,  144 => 33,  133 => 30,  130 => 29,  126 => 28,  121 => 26,  118 => 25,  114 => 24,  103 => 15,  101 => 14,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MainController!{% endblock %}

{% block body %}

    <div class=\"container\">

        <div class=\"content py-5\">
            <h1 class=\"text-center\">Employee schedule</h1>

            <a href=\"{{ path('admin_schedule_create', {id: employee.id}) }}\">New schedule entity</a>

            {% if schedule != null and schedule.scheduleDays != null %}
                <table class=\"table mt-4\">
                    <thead class=\"thead-dark\">
                    <tr>
                        <th>Day</th>
                        <th>Slots</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for day in schedule.scheduleDays %}
                        <tr>
                            <td>{{ days[day.day] }}</td>
                            <td>
                                {% for slots in day.slots %}

                                    {{ slots.startTime|date('H:i')|default('none') }} - {{ slots.endTime|date('H:i')|default('none') }} <br>

                                {% endfor %}
                            </td>
                            <td>
                                <a class=\"btn btn-danger\" href=\"{{ path('admin_delete_schedule_day', {id: employee.id, day: day.id}) }}\">Delete</a>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            {% else %}
                <div class=\"container p-5 m-5\">
                    <h4 class=\"text-center\">Schedule is empty</h4>
                </div>
            {% endif %}

        </div>

    </div>

{% endblock %}
", "admin/shedule_index.html.twig", "/var/www/TINKLAI.lab2/IT_project/templates/admin/shedule_index.html.twig");
    }
}
