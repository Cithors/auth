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

/* home/index.html.twig */
class __TwigTemplate_6151cab574e50140cd81778352cbd3bee2dd54a0351d3775926c5b02c8e5aea6 extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        echo "
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Home</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    </head>
    <body>
    ";
        // line 9
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 10
            echo "        <p>It works !</p>
        <a href=\"/logout\" class=\"btn btn-primary\">Log Out</a>
        <br><br>
        <a href=\"/adduser\" class=\"btn btn-primary\">Ajouter des utilisateurs</a>
        <br><br>
        <table class=\"table\">
            <tr align=\"center\">
                <td>ID</td>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Mail</td>
                <td>Avatar</td>
                <td>Date de naissance</td>
                <td>Date de création</td>
                <td>Date de modification</td>
                <td>Actions</td>
            </tr>

        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 29
                echo "            <tr align=\"center\">
                <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 31)), "html", null, true);
                echo "</td>
                <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 32)), "html", null, true);
                echo "</td>
                <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                <td>
                    <img src=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 35), "html", null, true);
                echo "\" alt=\"avatar-";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 35)), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 35)), "html", null, true);
                echo "\" width=\"40\">
                </td>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "datenaissance", [], "any", false, false, false, 37), "m/d/Y"), "html", null, true);
                echo "</td>
                <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "datecreation", [], "any", false, false, false, 38), "m/d/Y"), "html", null, true);
                echo "</td>
                <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "datemodif", [], "any", false, false, false, 39), "m/d/Y"), "html", null, true);
                echo "</td>
                <td>
                    <a href=\"/deluser?id=";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 41), "html", null, true);
                echo "\" class=\"btn btn-primary\">Supprimer</a>
                    <a href=\"/updateuser?id=";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "\" class=\"btn btn-primary\">Modifier</a>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        </table>
    ";
        } else {
            // line 48
            echo "        <div align=\"center\">
            <p>Il faut se connecter afin d'acceder à cet espace !</p>
            <a href=\"/login\" class=\"btn btn-primary\">Se connecter</a>
            <a href=\"/register\" class=\"btn btn-primary\">Je n'ai pas de compte (m'inscrire)</a>
        </div>

    ";
        }
        // line 55
        echo "    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 55,  137 => 48,  133 => 46,  123 => 42,  119 => 41,  114 => 39,  110 => 38,  106 => 37,  97 => 35,  92 => 33,  88 => 32,  84 => 31,  80 => 30,  77 => 29,  73 => 28,  53 => 10,  51 => 9,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Home</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    </head>
    <body>
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        <p>It works !</p>
        <a href=\"/logout\" class=\"btn btn-primary\">Log Out</a>
        <br><br>
        <a href=\"/adduser\" class=\"btn btn-primary\">Ajouter des utilisateurs</a>
        <br><br>
        <table class=\"table\">
            <tr align=\"center\">
                <td>ID</td>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Mail</td>
                <td>Avatar</td>
                <td>Date de naissance</td>
                <td>Date de création</td>
                <td>Date de modification</td>
                <td>Actions</td>
            </tr>

        {% for user in tab %}
            <tr align=\"center\">
                <td>{{ user.id }}</td>
                <td>{{ user.nom | upper }}</td>
                <td>{{ user.prenom | capitalize  }}</td>
                <td>{{ user.email }}</td>
                <td>
                    <img src=\"{{ user.avatar }}\" alt=\"avatar-{{ user.nom | upper }}-{{ user.prenom | capitalize }}\" width=\"40\">
                </td>
                <td>{{ user.datenaissance | date('m/d/Y') }}</td>
                <td>{{ user.datecreation | date('m/d/Y') }}</td>
                <td>{{ user.datemodif | date('m/d/Y') }}</td>
                <td>
                    <a href=\"/deluser?id={{ user.id }}\" class=\"btn btn-primary\">Supprimer</a>
                    <a href=\"/updateuser?id={{ user.id }}\" class=\"btn btn-primary\">Modifier</a>
                </td>
            </tr>
        {% endfor %}
        </table>
    {% else %}
        <div align=\"center\">
            <p>Il faut se connecter afin d'acceder à cet espace !</p>
            <a href=\"/login\" class=\"btn btn-primary\">Se connecter</a>
            <a href=\"/register\" class=\"btn btn-primary\">Je n'ai pas de compte (m'inscrire)</a>
        </div>

    {% endif %}
    </body>
</html>", "home/index.html.twig", "C:\\laragon\\www\\auth\\templates\\home\\index.html.twig");
    }
}
