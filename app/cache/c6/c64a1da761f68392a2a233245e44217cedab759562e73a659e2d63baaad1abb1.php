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

/* front/home.twig */
class __TwigTemplate_590af12c53295a2b109fdde2d60765e9f19c4475d7698b20bd5b2e401dc5f164 extends Template
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
        echo "<!Doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>";
        // line 8
        echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
        echo "</h1>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "front/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!Doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{{ title }}</title>
    </head>
    <body>
        <h1>{{ content }}</h1>
    </body>
</html>", "front/home.twig", "C:\\laragon\\www\\D-veloppement-d-une-architecture-MVC-moderne-avec-PHP-et-PostgreSQL\\app\\views\\front\\home.twig");
    }
}
