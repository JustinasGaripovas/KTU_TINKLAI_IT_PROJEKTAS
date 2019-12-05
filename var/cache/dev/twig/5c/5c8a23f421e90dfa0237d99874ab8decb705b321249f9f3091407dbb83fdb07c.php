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

/* examination/form.html.twig */
class __TwigTemplate_9e725f7bd9af79e7bb2ff091658300ab9e5afa22db8ae4c04b0a453b16f3f4c6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "examination/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "examination/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "examination/form.html.twig", 1);
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
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 9
            echo "
    <script>

        let allowedDates = [];
        let allowedHours = [];


        \$(document).ready(function () {

            var dateToday = new Date();

            allowedDates = ";
            // line 20
            echo json_encode((isset($context["allowedDays"]) || array_key_exists("allowedDays", $context) ? $context["allowedDays"] : (function () { throw new RuntimeError('Variable "allowedDays" does not exist.', 20, $this->source); })()));
            echo ";
            allowedHours = ";
            // line 21
            echo json_encode((isset($context["allowedHours"]) || array_key_exists("allowedHours", $context) ? $context["allowedHours"] : (function () { throw new RuntimeError('Variable "allowedHours" does not exist.', 21, $this->source); })()));
            echo ";

            console.log(allowedDates);
            console.log(allowedHours);

            \$(\".datepicker\").datepicker({beforeShowDay: disableDay,
                minDate: dateToday,
                onSelect: function(dateText) {
                    var date = \$(this).datepicker('getDate');
                    var dayOfWeek = date.getDay();
                    setHours(dayOfWeek);
                }
            })
        });

        function disableDay(day) {
            var day = day.getDay();

            for (let i=0; i <= allowedDates.length ; i++)
            {
                if (day == allowedDates[i]) {
                    return [true, \"datepicker\"]
                }
            }

            return [false, \"datepicker\"]
        }

        function setHours(day) {

            \$('#hour-select').empty();

            console.log(day);

            //TODO: isvalo,

            console.log(day);
            console.log(allowedDates);

            for (let i = 0; i <= allowedHours[day].length;i++)
            {
                setSlot(allowedHours[day][i-1]);
            }

        }

        function setSlot(hourText) {
            var o = new Option(hourText, hourText);
            \$(\"#hour-select\").append(o);
        }
    </script>

    ";
        }
        // line 74
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 78
        echo "

    <div class=\"container\">

        <h1>Register new examination</h1>

        ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_start');
        echo "

        ";
        // line 86
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 87
            echo "
        <p>Insert date</p>
        <input name=\"date\" class=\"datepicker\" type=\"text\">

        <p>Insert time</p>
        <select name=\"hours\" id=\"hour-select\">
        </select>

        ";
        }
        // line 96
        echo "
        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), 'widget');
        echo "


        ";
        // line 100
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_end');
        echo "

    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "examination/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 100,  220 => 97,  217 => 96,  206 => 87,  204 => 86,  199 => 84,  191 => 78,  181 => 77,  170 => 74,  114 => 21,  110 => 20,  97 => 9,  95 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MainController!{% endblock %}

{% block javascripts %}
    {{ parent() }}

    {% if is_granted('ROLE_USER') %}

    <script>

        let allowedDates = [];
        let allowedHours = [];


        \$(document).ready(function () {

            var dateToday = new Date();

            allowedDates = {{ allowedDays|json_encode|raw }};
            allowedHours = {{ allowedHours|json_encode|raw }};

            console.log(allowedDates);
            console.log(allowedHours);

            \$(\".datepicker\").datepicker({beforeShowDay: disableDay,
                minDate: dateToday,
                onSelect: function(dateText) {
                    var date = \$(this).datepicker('getDate');
                    var dayOfWeek = date.getDay();
                    setHours(dayOfWeek);
                }
            })
        });

        function disableDay(day) {
            var day = day.getDay();

            for (let i=0; i <= allowedDates.length ; i++)
            {
                if (day == allowedDates[i]) {
                    return [true, \"datepicker\"]
                }
            }

            return [false, \"datepicker\"]
        }

        function setHours(day) {

            \$('#hour-select').empty();

            console.log(day);

            //TODO: isvalo,

            console.log(day);
            console.log(allowedDates);

            for (let i = 0; i <= allowedHours[day].length;i++)
            {
                setSlot(allowedHours[day][i-1]);
            }

        }

        function setSlot(hourText) {
            var o = new Option(hourText, hourText);
            \$(\"#hour-select\").append(o);
        }
    </script>

    {% endif %}

{% endblock %}

{% block body %}


    <div class=\"container\">

        <h1>Register new examination</h1>

        {{ form_start(form) }}

        {% if is_granted('ROLE_USER') %}

        <p>Insert date</p>
        <input name=\"date\" class=\"datepicker\" type=\"text\">

        <p>Insert time</p>
        <select name=\"hours\" id=\"hour-select\">
        </select>

        {% endif %}

        {{ form_widget(form) }}


        {{ form_end(form) }}

    </div>


{% endblock %}
", "examination/form.html.twig", "/var/www/TINKLAI.lab2/IT_project/templates/examination/form.html.twig");
    }
}
