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

/* profile/index.html.twig */
class __TwigTemplate_bee09518a49cb311bb4663798bf6efa0 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Profile ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "prenom", [], "any", false, false, false, 3), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "nom", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
<div class=\"container-fluid\">
    <div class=\"row min-vh-100\">

        <!-- Sidebar -->
        <div class=\"col-md-3 col-lg-2 bg-light border-end p-4 text-center\">

            <h4 class=\"mb-4\">Mon Profil</h4>

            <!-- Image -->
            ";
        // line 16
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "image", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "image", [], "any", false, false, false, 17))), "html", null, true);
            yield "\"
         class=\"img-thumbnail rounded-circle\"
         width=\"120\">
";
        } else {
            // line 21
            yield "    <i class=\"bi bi-person-circle fs-1\"></i>
";
        }
        // line 23
        yield "
            <!-- Menu -->
            <div class=\"list-group mt-3\">

                <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_view");
        yield "\"
                   class=\"list-group-item list-group-item-action ";
        // line 28
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "get", ["_route"], "method", false, false, false, 28) == "profile_view")) ? ("active") : (""));
        yield "\">
                    Voir Profil
                </a>

                <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit");
        yield "\"
                   class=\"list-group-item list-group-item-action ";
        // line 33
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "get", ["_route"], "method", false, false, false, 33) == "profile_edit")) ? ("active") : (""));
        yield "\">
                    Modifier Profil
                </a>

                <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_change_password");
        yield "\"
                   class=\"list-group-item list-group-item-action ";
        // line 38
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "get", ["_route"], "method", false, false, false, 38) == "profile_change_password")) ? ("active") : (""));
        yield "\">
                    Changer Mot de Passe
                </a>

                <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_change_email");
        yield "\"
                   class=\"list-group-item list-group-item-action ";
        // line 43
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "get", ["_route"], "method", false, false, false, 43) == "profile_change_email")) ? ("active") : (""));
        yield "\">
                    Changer Email
                </a>

            </div>

        </div>

        <!-- Contenu -->
        <div class=\"col-md-9 col-lg-10 p-4\">

            <h1 class=\"mb-4\">Bienvenue, ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "prenom", [], "any", false, false, false, 54), "html", null, true);
        yield " !</h1>

            <div class=\"card shadow-sm\">
                <div class=\"card-body\">

                    ";
        // line 59
        if (array_key_exists("content_template", $context)) {
            // line 60
            yield "                        ";
            yield from $this->load((isset($context["content_template"]) || array_key_exists("content_template", $context) ? $context["content_template"] : (function () { throw new RuntimeError('Variable "content_template" does not exist.', 60, $this->source); })()), 60)->unwrap()->yield($context);
            // line 61
            yield "                    ";
        }
        // line 62
        yield "
                </div>
            </div>

        </div>

    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/index.html.twig";
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
        return array (  202 => 62,  199 => 61,  196 => 60,  194 => 59,  186 => 54,  172 => 43,  168 => 42,  161 => 38,  157 => 37,  150 => 33,  146 => 32,  139 => 28,  135 => 27,  129 => 23,  125 => 21,  117 => 17,  115 => 16,  103 => 6,  90 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profile {{ app.user.prenom }} {{ app.user.nom }}{% endblock %}

{% block body %}

<div class=\"container-fluid\">
    <div class=\"row min-vh-100\">

        <!-- Sidebar -->
        <div class=\"col-md-3 col-lg-2 bg-light border-end p-4 text-center\">

            <h4 class=\"mb-4\">Mon Profil</h4>

            <!-- Image -->
            {% if app.user.image %}
    <img src=\"{{ asset('uploads/' ~ app.user.image) }}\"
         class=\"img-thumbnail rounded-circle\"
         width=\"120\">
{% else %}
    <i class=\"bi bi-person-circle fs-1\"></i>
{% endif %}

            <!-- Menu -->
            <div class=\"list-group mt-3\">

                <a href=\"{{ path('profile_view') }}\"
                   class=\"list-group-item list-group-item-action {{ app.request.get('_route') == 'profile_view' ? 'active' : '' }}\">
                    Voir Profil
                </a>

                <a href=\"{{ path('profile_edit') }}\"
                   class=\"list-group-item list-group-item-action {{ app.request.get('_route') == 'profile_edit' ? 'active' : '' }}\">
                    Modifier Profil
                </a>

                <a href=\"{{ path('profile_change_password') }}\"
                   class=\"list-group-item list-group-item-action {{ app.request.get('_route') == 'profile_change_password' ? 'active' : '' }}\">
                    Changer Mot de Passe
                </a>

                <a href=\"{{ path('profile_change_email') }}\"
                   class=\"list-group-item list-group-item-action {{ app.request.get('_route') == 'profile_change_email' ? 'active' : '' }}\">
                    Changer Email
                </a>

            </div>

        </div>

        <!-- Contenu -->
        <div class=\"col-md-9 col-lg-10 p-4\">

            <h1 class=\"mb-4\">Bienvenue, {{ app.user.prenom }} !</h1>

            <div class=\"card shadow-sm\">
                <div class=\"card-body\">

                    {% if content_template is defined %}
                        {% include content_template %}
                    {% endif %}

                </div>
            </div>

        </div>

    </div>
</div>

{% endblock %}", "profile/index.html.twig", "/home/yassine/Bureau/product/templates/profile/index.html.twig");
    }
}
