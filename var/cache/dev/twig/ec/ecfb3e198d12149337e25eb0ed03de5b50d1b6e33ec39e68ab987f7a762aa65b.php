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

/* navbar.html.twig */
class __TwigTemplate_dacbbed727ab7975e81416684e4cfe2518323f13b7f9d54ed5f2141a4ccf3e68 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<div class=\"header\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\">Hospital system</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_main");
            echo "\">Admin section</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctor_main");
            echo "\">Doctor section</a>
                    </li>
                ";
        }
        // line 19
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DOCTOR")) {
            // line 20
            echo "                    <li>
                        <a class=\"nav-link\" href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctor_pacient_main");
            echo "\">Doctor patients</a>
                    </li>
                ";
        }
        // line 24
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LABORANT")) {
            // line 25
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("laborant_main");
            echo "\">Laborant section</a>
                    </li>
                ";
        }
        // line 29
        echo "                ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 30
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctor_visitation_main");
            echo "\">Doctor list</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_examinations");
            echo "\">Examination list</a>
                    </li>
                ";
        }
        // line 37
        echo "            </ul>

            <div class=\"m-2\">
                ";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DOCTOR")) {
            // line 41
            echo "                    Doctor,
                ";
        }
        // line 43
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LABORANT")) {
            // line 44
            echo "                    Laborant,
                ";
        }
        // line 46
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 47
            echo "                    Admin,
                ";
        }
        // line 49
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 50
            echo "                    User,
                ";
        }
        // line 52
        echo "                ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "username", [], "any", false, false, false, 52), "html", null, true);
        echo "

            </div>

            ";
        // line 56
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 57
            echo "                <a class=\"text-muted\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_logout");
            echo "\"> Logout </a>
            ";
        }
        // line 59
        echo "        </div>
    </nav>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 59,  156 => 57,  154 => 56,  146 => 52,  142 => 50,  139 => 49,  135 => 47,  132 => 46,  128 => 44,  125 => 43,  121 => 41,  119 => 40,  114 => 37,  108 => 34,  102 => 31,  99 => 30,  96 => 29,  90 => 26,  87 => 25,  84 => 24,  78 => 21,  75 => 20,  72 => 19,  66 => 16,  60 => 13,  57 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\">Hospital system</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('admin_main') }}\">Admin section</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('doctor_main') }}\">Doctor section</a>
                    </li>
                {% endif %}
                {% if is_granted('ROLE_DOCTOR') %}
                    <li>
                        <a class=\"nav-link\" href=\"{{ path('doctor_pacient_main') }}\">Doctor patients</a>
                    </li>
                {% endif %}
                {% if is_granted('ROLE_LABORANT') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('laborant_main') }}\">Laborant section</a>
                    </li>
                {% endif %}
                {% if is_granted('ROLE_USER') and is_granted('IS_AUTHENTICATED_FULLY') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('doctor_visitation_main') }}\">Doctor list</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('user_examinations') }}\">Examination list</a>
                    </li>
                {% endif %}
            </ul>

            <div class=\"m-2\">
                {% if is_granted('ROLE_DOCTOR') %}
                    Doctor,
                {% endif %}
                {% if is_granted('ROLE_LABORANT') %}
                    Laborant,
                {% endif %}
                {% if is_granted('ROLE_ADMIN') %}
                    Admin,
                {% endif %}
                {% if is_granted('ROLE_USER') %}
                    User,
                {% endif %}
                {{ app.user.username }}

            </div>

            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <a class=\"text-muted\" href=\"{{ path('employee_logout') }}\"> Logout </a>
            {% endif %}
        </div>
    </nav>
</div>", "navbar.html.twig", "/var/www/TINKLAI.lab2/IT_project/templates/navbar.html.twig");
    }
}
