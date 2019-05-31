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
            echo "    <div align=\"center\">
        <br>
        <a href=\"/logout\" class=\"btn btn-primary\">Se déconnecter</a>
        <br><br>
        ";
            // line 14
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 15
                echo "        <a href=\"/adduser\" class=\"btn btn-primary\">Ajouter des utilisateurs</a>
        <br><br>
        ";
            }
            // line 18
            echo "    </div>
    <table class=\"table\">
        <tr align=\"center\">
            ";
            // line 21
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 22
                echo "                <td>ID</td>
            ";
            }
            // line 24
            echo "            <td>Nom</td>
            <td>Prénom</td>
            <td>Mail</td>
            <td>Avatar</td>
            ";
            // line 28
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 29
                echo "                <td>Date de naissance</td>
                <td>Date de création</td>
                <td>Date de modification</td>
                <td>Actions</td>
            ";
            }
            // line 34
            echo "        </tr>

        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 37
                echo "            <tr align=\"center\">
                ";
                // line 38
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 39
                    echo "                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 39), "html", null, true);
                    echo "</td>
                ";
                }
                // line 41
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 41)), "html", null, true);
                echo "</td>
                <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 42)), "html", null, true);
                echo "</td>
                <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                <td>
                    <img src=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 45), "html", null, true);
                echo "\" alt=\"avatar-";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 45)), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 45)), "html", null, true);
                echo "\" width=\"40\">
                </td>
                ";
                // line 47
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 48
                    echo "                <td>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "birthday", [], "any", false, false, false, 48), "d/m/Y"), "html", null, true);
                    echo "</td>
                <td>";
                    // line 49
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "createdat", [], "any", false, false, false, 49), "d/m/Y"), "html", null, true);
                    echo "</td>
                <td>";
                    // line 50
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "updatedat", [], "any", false, false, false, 50), "d/m/Y"), "html", null, true);
                    echo "</td>
                <td>
                    ";
                    // line 52
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 52), "0", [], "array", false, false, false, 52) != "ROLE_ADMIN")) {
                        // line 53
                        echo "                        <a href=\"/deluser?id=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 53), "html", null, true);
                        echo "\" class=\"btn btn-primary\">Supprimer</a>
                    ";
                    }
                    // line 55
                    echo "                    <a href=\"/updateuser?id=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 55), "html", null, true);
                    echo "\" class=\"btn btn-primary\">Modifier</a>
                </td>
                ";
                }
                // line 58
                echo "            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "    </table>
";
        } else {
            // line 62
            echo "    <script>window.location.href = '/login'</script>
";
        }
        // line 64
        echo "</body>
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
        return array (  180 => 64,  176 => 62,  172 => 60,  165 => 58,  158 => 55,  152 => 53,  150 => 52,  145 => 50,  141 => 49,  136 => 48,  134 => 47,  125 => 45,  120 => 43,  116 => 42,  111 => 41,  105 => 39,  103 => 38,  100 => 37,  96 => 36,  92 => 34,  85 => 29,  83 => 28,  77 => 24,  73 => 22,  71 => 21,  66 => 18,  61 => 15,  59 => 14,  53 => 10,  51 => 9,  41 => 1,);
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
        <a href=\"/logout\" class=\"btn btn-primary\">Se déconnecter</a>
        <br><br>
        {% if is_granted('ROLE_ADMIN') %}
        <a href=\"/adduser\" class=\"btn btn-primary\">Ajouter des utilisateurs</a>
        <br><br>
        {% endif %}
    </div>
    <table class=\"table\">
        <tr align=\"center\">
            {% if is_granted('ROLE_ADMIN') %}
                <td>ID</td>
            {% endif %}
            <td>Nom</td>
            <td>Prénom</td>
            <td>Mail</td>
            <td>Avatar</td>
            {% if is_granted('ROLE_ADMIN') %}
                <td>Date de naissance</td>
                <td>Date de création</td>
                <td>Date de modification</td>
                <td>Actions</td>
            {% endif %}
        </tr>

        {% for user in tab %}
            <tr align=\"center\">
                {% if is_granted('ROLE_ADMIN') %}
                <td>{{ user.id }}</td>
                {% endif %}
                <td>{{ user.lastname | upper }}</td>
                <td>{{ user.name | capitalize  }}</td>
                <td>{{ user.email }}</td>
                <td>
                    <img src=\"{{ user.avatar }}\" alt=\"avatar-{{ user.lastname | upper }}-{{ user.name | capitalize }}\" width=\"40\">
                </td>
                {% if is_granted('ROLE_ADMIN') %}
                <td>{{ user.birthday | date('d/m/Y') }}</td>
                <td>{{ user.createdat | date('d/m/Y') }}</td>
                <td>{{ user.updatedat | date('d/m/Y') }}</td>
                <td>
                    {% if user.roles['0'] != 'ROLE_ADMIN' %}
                        <a href=\"/deluser?id={{ user.id }}\" class=\"btn btn-primary\">Supprimer</a>
                    {% endif %}
                    <a href=\"/updateuser?id={{ user.id }}\" class=\"btn btn-primary\">Modifier</a>
                </td>
                {% endif %}
            </tr>
        {% endfor %}
    </table>
{% else %}
    <script>window.location.href = '/login'</script>
{% endif %}
</body>
</html>", "home/index.html.twig", "C:\\laragon\\www\\auth\\templates\\home\\index.html.twig");
    }
}
