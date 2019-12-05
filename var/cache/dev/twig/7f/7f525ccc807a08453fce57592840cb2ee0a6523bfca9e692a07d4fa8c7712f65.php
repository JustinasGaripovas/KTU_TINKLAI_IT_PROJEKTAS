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

/* employee/index.html.twig */
class __TwigTemplate_6c61e31e83a05d457f1fec078ea3fc855db3083ae92f09c5cfe89429348ff1a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employee/index.html.twig", 1);
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
        echo "    <div class=\"container\">

        <div class=\"content py-5\">
            <h1 class=\"text-center\">Some really important employee stuff</h1>

            <table class=\"table mt-4\">
                <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">First</th>
                    <th scope=\"col\">Last</th>
                    <th scope=\"col\">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope=\"row\">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td><a class=\"col-5 btn btn-secondary\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Add</a></td>

                </tr>
                <tr>
                    <th scope=\"row\">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td><a class=\"col-5 btn btn-secondary\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Add</a></td>

                </tr>
                <tr>
                    <th scope=\"row\">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td><a class=\"col-5 btn btn-secondary\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Add</a></td>

                </tr>
                <tr>
                    <th scope=\"row\">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td><a class=\"col-5 btn btn-secondary\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Add</a></td>
                </tr>
                <tr>
                    <th scope=\"row\">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td><a class=\"col-5 btn btn-secondary\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Add</a></td>
                </tr>
                <tr>
                    <th scope=\"row\">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td><a class=\"col-5 btn btn-secondary\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Add</a></td>
                </tr>
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
        return "employee/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 58,  148 => 52,  139 => 46,  129 => 39,  119 => 32,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MainController!{% endblock %}

{% block body %}
    <div class=\"container\">

        <div class=\"content py-5\">
            <h1 class=\"text-center\">Some really important employee stuff</h1>

            <table class=\"table mt-4\">
                <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">First</th>
                    <th scope=\"col\">Last</th>
                    <th scope=\"col\">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope=\"row\">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td><a class=\"col-5 btn btn-secondary\" href=\"{{ path('home') }}\">Add</a></td>

                </tr>
                <tr>
                    <th scope=\"row\">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td><a class=\"col-5 btn btn-secondary\" href=\"{{ path('home') }}\">Add</a></td>

                </tr>
                <tr>
                    <th scope=\"row\">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td><a class=\"col-5 btn btn-secondary\" href=\"{{ path('home') }}\">Add</a></td>

                </tr>
                <tr>
                    <th scope=\"row\">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td><a class=\"col-5 btn btn-secondary\" href=\"{{ path('home') }}\">Add</a></td>
                </tr>
                <tr>
                    <th scope=\"row\">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td><a class=\"col-5 btn btn-secondary\" href=\"{{ path('home') }}\">Add</a></td>
                </tr>
                <tr>
                    <th scope=\"row\">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td><a class=\"col-5 btn btn-secondary\" href=\"{{ path('home') }}\">Add</a></td>
                </tr>
                </tbody>
            </table>


        </div>

    </div>

{% endblock %}
", "employee/index.html.twig", "/var/www/TINKLAI.lab2/IT_project/templates/employee/index.html.twig");
    }
}
