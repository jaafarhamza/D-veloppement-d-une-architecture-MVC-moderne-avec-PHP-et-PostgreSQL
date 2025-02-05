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

/* back/dashboard.twig */
class __TwigTemplate_9efa4721113f4acda52a675a0d6871e5c2c18760d769edd886b4028d0c43611c extends Template
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
    <title>Dashboard</title>
    <link rel=\"stylesheet\" href=\"/assets/css/style.css\">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
        <nav>
            <ul>
                <li><a href=\"/dashboard.twig\">Dashboard</a></li>
                <li><a href=\"/Users.twig\">Users</a></li>
                <li><a href=\"/logout\">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Welcome to the Admin Dashboard</h2>
        <p>Here you can manage your website's content and settings.</p>
        <section>
            <h3>Statistics</h3>
            <p>Number of users: ";
        // line 25
        echo twig_escape_filter($this->env, ($context["user_count"] ?? null), "html", null, true);
        echo "</p>
            <p>Number of articles: ";
        // line 26
        echo twig_escape_filter($this->env, ($context["article_count"] ?? null), "html", null, true);
        echo "</p>
        </section>
    </main>
    <footer>
        <p>&copy; ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Your Company. All rights reserved.</p>
    </footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "back/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 30,  67 => 26,  63 => 25,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Dashboard</title>
    <link rel=\"stylesheet\" href=\"/assets/css/style.css\">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
        <nav>
            <ul>
                <li><a href=\"/dashboard.twig\">Dashboard</a></li>
                <li><a href=\"/Users.twig\">Users</a></li>
                <li><a href=\"/logout\">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Welcome to the Admin Dashboard</h2>
        <p>Here you can manage your website's content and settings.</p>
        <section>
            <h3>Statistics</h3>
            <p>Number of users: {{ user_count }}</p>
            <p>Number of articles: {{ article_count }}</p>
        </section>
    </main>
    <footer>
        <p>&copy; {{ \"now\"|date(\"Y\") }} Your Company. All rights reserved.</p>
    </footer>
</body>
</html>", "back/dashboard.twig", "C:\\laragon\\www\\D-veloppement-d-une-architecture-MVC-moderne-avec-PHP-et-PostgreSQL\\app\\views\\back\\dashboard.twig");
    }
}
