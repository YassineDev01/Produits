<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* emails/welcome.html.twig */
class __TwigTemplate_c1224c250ca6676a97103e94cf203b34 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/welcome.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/welcome.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
    <style>
        /* Styles CSS avec couleurs vives */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ff6ec7, #6effa1); /* fond vif dégradé */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            font-size: 3rem;
            font-weight: bold;
            text-decoration: underline;
            color: #ffdd00; /* couleur vive pour le texte */
            text-shadow: 2px 2px 5px #00000050; /* petit effet d’ombre */
            transition: transform 0.3s, color 0.3s;
        }

        /* effet au survol */
        h1:hover {
            transform: scale(1.1);
            color: #00ffff; /* change la couleur au hover */
        }
    </style>
</head>
<body>

<h1>
    Hello ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), "html", null, true);
        yield "
</h1>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/welcome.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  87 => 38,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
    <style>
        /* Styles CSS avec couleurs vives */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ff6ec7, #6effa1); /* fond vif dégradé */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            font-size: 3rem;
            font-weight: bold;
            text-decoration: underline;
            color: #ffdd00; /* couleur vive pour le texte */
            text-shadow: 2px 2px 5px #00000050; /* petit effet d’ombre */
            transition: transform 0.3s, color 0.3s;
        }

        /* effet au survol */
        h1:hover {
            transform: scale(1.1);
            color: #00ffff; /* change la couleur au hover */
        }
    </style>
</head>
<body>

<h1>
    Hello {{ contact.nom }}
</h1>

</body>
</html>", "emails/welcome.html.twig", "/home/yassine/Bureau/product/templates/emails/welcome.html.twig");
    }
}
