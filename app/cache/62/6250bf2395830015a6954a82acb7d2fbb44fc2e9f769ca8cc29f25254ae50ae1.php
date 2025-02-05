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

/* back/login.twig */
class __TwigTemplate_0118779b87ba4d9469765513736a14970b9c391f9150e6eab99dfc276a370ace extends Template
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
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
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
        echo "    <form action=\"/login\" method=\"post\">
        <label for=\"email\">Email:</label>
        <input type=\"email\" id=\"email\" name=\"email\" required>
        <br>
        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"password\" required>
        <br>
        <input type=\"hidden\" name=\"role\" value=\"admin\">
        <button type=\"submit\">Login</button>
    </form>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "back/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  67 => 16,  58 => 14,  54 => 13,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    {% if errors %}
        <div class=\"errors\">
            <ul>
                {% for error in errors %}
                    <li>{{ error }}</li>
                {% endfor %}
            </ul>
        </div>
    {% endif %}
    <form action=\"/login\" method=\"post\">
        <label for=\"email\">Email:</label>
        <input type=\"email\" id=\"email\" name=\"email\" required>
        <br>
        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"password\" required>
        <br>
        <input type=\"hidden\" name=\"role\" value=\"admin\">
        <button type=\"submit\">Login</button>
    </form>
</body>
</html>
", "back/login.twig", "C:\\laragon\\www\\D-veloppement-d-une-architecture-MVC-moderne-avec-PHP-et-PostgreSQL\\app\\views\\back\\login.twig");
    }
}
