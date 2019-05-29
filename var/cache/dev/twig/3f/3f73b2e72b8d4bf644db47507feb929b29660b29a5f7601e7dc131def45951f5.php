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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

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
            echo "        <div align=\"center\">
            <br>
            <p>It works !</p>
            <a href=\"/logout\" class=\"btn btn-primary\">Log Out</a>
            <br><br>
            <a href=\"/adduser\" class=\"btn btn-primary\">Ajouter des utilisateurs</a>
            <br><br>
        </div>
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
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 32
                echo "            <tr align=\"center\">
                <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 34)), "html", null, true);
                echo "</td>
                <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 35)), "html", null, true);
                echo "</td>
                <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                <td>
                    <img src=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 38), "html", null, true);
                echo "\" alt=\"avatar-";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 38)), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 38)), "html", null, true);
                echo "\" width=\"40\">
                </td>
                <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "datenaissance", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true);
                echo "</td>
                <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "datecreation", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true);
                echo "</td>
                <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "datemodif", [], "any", false, false, false, 42), "d/m/Y"), "html", null, true);
                echo "</td>
                <td>
                    <a href=\"/deluser?id=";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 44), "html", null, true);
                echo "\" class=\"btn btn-primary\">Supprimer</a>
                    <a href=\"/updateuser?id=";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 45), "html", null, true);
                echo "\" class=\"btn btn-primary\">Modifier</a>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        </table>
    ";
        } else {
            // line 51
            echo "        <script>window.location.href = '/login'</script>
    ";
        }
        // line 53
        echo "    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  144 => 53,  140 => 51,  136 => 49,  126 => 45,  122 => 44,  117 => 42,  113 => 41,  109 => 40,  100 => 38,  95 => 36,  91 => 35,  87 => 34,  83 => 33,  80 => 32,  76 => 31,  53 => 10,  51 => 9,  41 => 1,);
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
        <div align=\"center\">
            <br>
            <p>It works !</p>
            <a href=\"/logout\" class=\"btn btn-primary\">Log Out</a>
            <br><br>
            <a href=\"/adduser\" class=\"btn btn-primary\">Ajouter des utilisateurs</a>
            <br><br>
        </div>
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
                <td>{{ user.datenaissance | date('d/m/Y') }}</td>
                <td>{{ user.datecreation | date('d/m/Y') }}</td>
                <td>{{ user.datemodif | date('d/m/Y') }}</td>
                <td>
                    <a href=\"/deluser?id={{ user.id }}\" class=\"btn btn-primary\">Supprimer</a>
                    <a href=\"/updateuser?id={{ user.id }}\" class=\"btn btn-primary\">Modifier</a>
                </td>
            </tr>
        {% endfor %}
        </table>
    {% else %}
        <script>window.location.href = '/login'</script>
    {% endif %}
    </body>
</html>", "user/index.html.twig", "C:\\laragon\\www\\auth\\templates\\user\\index.html.twig");
    }
}
