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

/* back/register.twig */
class __TwigTemplate_e99da0aa157df2995972e93961a6019aca0d48bb81d3a823d7fbb84ec85c6f21 extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    ";
        // line 10
        if (($context["errors"] ?? null)) {
            // line 11
            echo "        <div class=\"errors\">
            <ul>
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 14
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            </ul>
        </div>
    ";
        }
        // line 19
        echo "    <form action=\"/register\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"username\" required>
        ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 22)) {
            // line 23
            echo "            <span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "username", [], "any", false, false, false, 23), "html", null, true);
            echo "</span>
        ";
        }
        // line 25
        echo "        <br>
        <label for=\"email\">Email:</label>
        <input type=\"email\" id=\"email\" name=\"email\" required>
        ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 28)) {
            // line 29
            echo "            <span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 29), "html", null, true);
            echo "</span>
        ";
        }
        // line 31
        echo "        <br>
        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"password\" required>
        ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 34)) {
            // line 35
            echo "            <span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 35), "html", null, true);
            echo "</span>
        ";
        }
        // line 37
        echo "        <br>
        <button type=\"submit\">Register</button>
    </form>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "back/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 37,  105 => 35,  103 => 34,  98 => 31,  92 => 29,  90 => 28,  85 => 25,  79 => 23,  77 => 22,  72 => 19,  67 => 16,  58 => 14,  54 => 13,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    {% if errors %}
        <div class=\"errors\">
            <ul>
                {% for error in errors %}
                    <li>{{ error }}</li>
                {% endfor %}
            </ul>
        </div>
    {% endif %}
    <form action=\"/register\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"username\" required>
        {% if errors.username %}
            <span class=\"error\">{{ errors.username }}</span>
        {% endif %}
        <br>
        <label for=\"email\">Email:</label>
        <input type=\"email\" id=\"email\" name=\"email\" required>
        {% if errors.email %}
            <span class=\"error\">{{ errors.email }}</span>
        {% endif %}
        <br>
        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"password\" required>
        {% if errors.password %}
            <span class=\"error\">{{ errors.password }}</span>
        {% endif %}
        <br>
        <button type=\"submit\">Register</button>
    </form>
</body>
</html>
", "back/register.twig", "C:\\laragon\\www\\D-veloppement-d-une-architecture-MVC-moderne-avec-PHP-et-PostgreSQL\\app\\views\\back\\register.twig");
    }
}
