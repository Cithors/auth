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
        <a href=\"/absences\" class=\"btn btn-primary\">Vérifier les absences</a>
        <a href=\"/breakfast\" class=\"btn btn-primary\">Page petit déj</a>
        ";
            // line 16
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 17
                echo "            <a href=\"/adduser\" class=\"btn btn-primary\">Ajouter des utilisateurs</a>
        ";
            }
            // line 19
            echo "        <br><br>
    </div>
    <table class=\"table\">
        <tr align=\"center\">
            ";
            // line 23
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 24
                echo "                <td>ID</td>
            ";
            }
            // line 26
            echo "            <td>Nom</td>
            <td>Prénom</td>
            <td>Mail</td>
            <td>Avatar</td>
            <td>Viennoiserie Favorite</td>
            ";
            // line 31
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 32
                echo "                <td>Date de naissance</td>
                <td>Date de création</td>
                <td>Date de modification</td>
                <td>Actions</td>
            ";
            }
            // line 37
            echo "        </tr>

        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 40
                echo "            <tr align=\"center\">
                ";
                // line 41
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 42
                    echo "                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 42), "html", null, true);
                    echo "</td>
                ";
                }
                // line 44
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 44)), "html", null, true);
                echo "</td>
                <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 45)), "html", null, true);
                echo "</td>
                <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                <td>
                    <img src=\"";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 48), "html", null, true);
                echo "\" alt=\"avatar-";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 48)), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 48)), "html", null, true);
                echo "\" width=\"40\">
                </td>
                ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pastries"]) || array_key_exists("pastries", $context) ? $context["pastries"] : (function () { throw new RuntimeError('Variable "pastries" does not exist.', 50, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["pastrie"]) {
                    // line 51
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["pastrie"], "id", [], "any", false, false, false, 51) == twig_get_attribute($this->env, $this->source, $context["user"], "idpastries", [], "any", false, false, false, 51))) {
                        // line 52
                        echo "                        <td>";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pastrie"], "name", [], "any", false, false, false, 52)), "html", null, true);
                        echo "</td>
                    ";
                    }
                    // line 54
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pastrie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 56
                    echo "                <td>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "birthday", [], "any", false, false, false, 56), "d/m/Y"), "html", null, true);
                    echo "</td>
                <td>";
                    // line 57
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "createdat", [], "any", false, false, false, 57), "d/m/Y"), "html", null, true);
                    echo "</td>
                <td>";
                    // line 58
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "updatedat", [], "any", false, false, false, 58), "d/m/Y"), "html", null, true);
                    echo "</td>
                <td>
                    ";
                    // line 60
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 60), "0", [], "array", false, false, false, 60) != "ROLE_ADMIN")) {
                        // line 61
                        echo "                        <a href=\"/deluser?id=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 61), "html", null, true);
                        echo "\" class=\"btn btn-primary\">Supprimer</a>
                    ";
                    }
                    // line 63
                    echo "                    <a href=\"/updateuser?id=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 63), "html", null, true);
                    echo "\" class=\"btn btn-primary\">Modifier</a>
                </td>
                ";
                }
                // line 66
                echo "            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "    </table>
";
        } else {
            // line 70
            echo "    <script>window.location.href = '/login'</script>
";
        }
        // line 72
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
        return array (  203 => 72,  199 => 70,  195 => 68,  188 => 66,  181 => 63,  175 => 61,  173 => 60,  168 => 58,  164 => 57,  159 => 56,  156 => 55,  150 => 54,  144 => 52,  141 => 51,  137 => 50,  128 => 48,  123 => 46,  119 => 45,  114 => 44,  108 => 42,  106 => 41,  103 => 40,  99 => 39,  95 => 37,  88 => 32,  86 => 31,  79 => 26,  75 => 24,  73 => 23,  67 => 19,  63 => 17,  61 => 16,  53 => 10,  51 => 9,  41 => 1,);
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
        <a href=\"/absences\" class=\"btn btn-primary\">Vérifier les absences</a>
        <a href=\"/breakfast\" class=\"btn btn-primary\">Page petit déj</a>
        {% if is_granted('ROLE_ADMIN') %}
            <a href=\"/adduser\" class=\"btn btn-primary\">Ajouter des utilisateurs</a>
        {% endif %}
        <br><br>
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
            <td>Viennoiserie Favorite</td>
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
                {% for pastrie in pastries %}
                    {% if pastrie.id == user.idpastries %}
                        <td>{{ pastrie.name | capitalize }}</td>
                    {% endif %}
                {% endfor %}
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
