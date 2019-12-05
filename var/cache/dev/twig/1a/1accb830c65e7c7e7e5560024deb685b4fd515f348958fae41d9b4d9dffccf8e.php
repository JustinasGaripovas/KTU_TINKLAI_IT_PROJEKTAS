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

/* user/index.html.twig */
class __TwigTemplate_c8fa91eba034e8663ad1ab3659577ed679cc3501cc22d14f839c9c2251b6d773 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

                <h1 class=\"text-center\">User visits</h1>

            <table class=\"table mt-4\">
                <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">Last</th>
                    <th scope=\"col\">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope=\"row\">1</th>
                    <td>2019-01-21</td>
                    <td>Otto</td>
                    <td><a class=\"col-5 btn btn-danger\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Cancel</a></td>

                </tr>
                <tr>
                    <th scope=\"row\">2</th>
                    <td>2019-01-21</td>
                    <td>Thornton</td>
                    <td><a class=\"col-5 btn btn-danger\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Cancel</a></td>

                </tr>
                <tr>
                    <th scope=\"row\">3</th>
                    <td>2019-01-21</td>
                    <td>the Bird</td>
                    <td><a class=\"col-5 btn btn-danger\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Cancel</a></td>

                </tr>
                <tr>
                    <th scope=\"row\">1</th>
                    <td>2019-01-21</td>
                    <td>Otto</td>
                    <td><a class=\"col-5 btn btn-danger\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Cancel</a></td>

                </tr>
                <tr>
                    <th scope=\"row\">2</th>
                    <td>2019-01-21</td>
                    <td>Thornton</td>
                    <td><a class=\"col-5 btn btn-danger\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Cancel</a></td>

                </tr>
                <tr>
                    <th scope=\"row\">3</th>
                    <td>2019-01-21</td>
                    <td>the Bird</td>
                    <td><a class=\"col-5 btn btn-danger\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Cancel</a></td>
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
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 62,  151 => 55,  141 => 48,  131 => 41,  121 => 34,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MainController!{% endblock %}

{% block body %}

    <div class=\"container\">

        <div class=\"content py-5\">

                <h1 class=\"text-center\">User visits</h1>

            <table class=\"table mt-4\">
                <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">Last</th>
                    <th scope=\"col\">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope=\"row\">1</th>
                    <td>2019-01-21</td>
                    <td>Otto</td>
                    <td><a class=\"col-5 btn btn-danger\" href=\"{{ path('home') }}\">Cancel</a></td>

                </tr>
                <tr>
                    <th scope=\"row\">2</th>
                    <td>2019-01-21</td>
                    <td>Thornton</td>
                    <td><a class=\"col-5 btn btn-danger\" href=\"{{ path('home') }}\">Cancel</a></td>

                </tr>
                <tr>
                    <th scope=\"row\">3</th>
                    <td>2019-01-21</td>
                    <td>the Bird</td>
                    <td><a class=\"col-5 btn btn-danger\" href=\"{{ path('home') }}\">Cancel</a></td>

                </tr>
                <tr>
                    <th scope=\"row\">1</th>
                    <td>2019-01-21</td>
                    <td>Otto</td>
                    <td><a class=\"col-5 btn btn-danger\" href=\"{{ path('home') }}\">Cancel</a></td>

                </tr>
                <tr>
                    <th scope=\"row\">2</th>
                    <td>2019-01-21</td>
                    <td>Thornton</td>
                    <td><a class=\"col-5 btn btn-danger\" href=\"{{ path('home') }}\">Cancel</a></td>

                </tr>
                <tr>
                    <th scope=\"row\">3</th>
                    <td>2019-01-21</td>
                    <td>the Bird</td>
                    <td><a class=\"col-5 btn btn-danger\" href=\"{{ path('home') }}\">Cancel</a></td>
                </tr>
                </tbody>
            </table>

        </div>

    </div>

{% endblock %}
", "user/index.html.twig", "/var/www/TINKLAI.lab2/IT_project/templates/user/index.html.twig");
    }
}
