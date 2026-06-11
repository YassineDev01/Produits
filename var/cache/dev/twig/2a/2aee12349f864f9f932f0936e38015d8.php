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

/* partials/_header.html.twig */
class __TwigTemplate_c6b75618102c588f343000e7b94c5ede extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        // line 1
        yield "<nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm\">
    <div class=\"container-fluid\">

        <!-- Logo -->
        <a class=\"navbar-brand fw-bold\" href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
            Marmiton
        </a>

        <!-- Burger -->
        <button class=\"navbar-toggler\" type=\"button\"
                data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarContent\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <!-- Menu -->
        <div class=\"collapse navbar-collapse\" id=\"navbarContent\">

            <!-- Left menu -->
            <ul class=\"navbar-nav me-auto\">

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        yield "\">Plats</a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_index");
        yield "\">Catégories</a>
                </li>

            </ul>

            <!-- Right menu -->
            <ul class=\"navbar-nav align-items-center\">

                ";
        // line 39
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "
                    <li class=\"nav-item dropdown\">

                        <a class=\"nav-link dropdown-toggle d-flex align-items-center\"
                           href=\"#\"
                           data-bs-toggle=\"dropdown\">

                            <!-- Image -->
                            ";
            // line 48
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "image", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "image", [], "any", false, false, false, 49))), "html", null, true);
                yield "\"
                                     class=\"rounded-circle me-2\"
                                     width=\"35\"
                                     height=\"35\">
                            ";
            } else {
                // line 54
                yield "                                <i class=\"bi bi-person-circle fs-3 me-2\"></i>
                            ";
            }
            // line 56
            yield "
                            ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "prenom", [], "any", false, false, false, 57), "html", null, true);
            yield "
                        </a>

                        <ul class=\"dropdown-menu dropdown-menu-end\">

                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 63
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_view");
            yield "\">
                                <i class=\"bi bi-person-circle\"></i>
                                    Mon Profil
                                </a>
                            </li>

                            ";
            // line 69
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "roles", [], "any", false, false, false, 69))) {
                // line 70
                yield "                                <li>
                                    <a class=\"dropdown-item text-warning\" href=\"";
                // line 71
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                yield "\">
                                    <i class=\"bi bi-speedometer2 me-1\"></i>
                                    Dashboard
                                    </a>
                                </li>
                            ";
            }
            // line 77
            yield "
                            <li><hr class=\"dropdown-divider\"></li>

                            <li>
                                <a class=\"dropdown-item text-danger\" href=\"";
            // line 81
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                <i class=\"bi bi-box-arrow-right me-1\"></i>
                                    Déconnexion
                                </a>
                            </li>

                        </ul>

                    </li>

                ";
        } else {
            // line 92
            yield "
                    <li class=\"nav-item me-2\">
                        <a class=\"btn btn-outline-primary\" href=\"";
            // line 94
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                            Connexion
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"btn btn-success\" href=\"";
            // line 100
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">
                            Inscription
                        </a>
                    </li>

                ";
        }
        // line 106
        yield "
            </ul>

        </div>
    </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/_header.html.twig";
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
        return array (  204 => 106,  195 => 100,  186 => 94,  182 => 92,  168 => 81,  162 => 77,  153 => 71,  150 => 70,  148 => 69,  139 => 63,  130 => 57,  127 => 56,  123 => 54,  114 => 49,  112 => 48,  102 => 40,  100 => 39,  89 => 31,  82 => 27,  75 => 23,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm\">
    <div class=\"container-fluid\">

        <!-- Logo -->
        <a class=\"navbar-brand fw-bold\" href=\"{{ path('app_home') }}\">
            Marmiton
        </a>

        <!-- Burger -->
        <button class=\"navbar-toggler\" type=\"button\"
                data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarContent\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <!-- Menu -->
        <div class=\"collapse navbar-collapse\" id=\"navbarContent\">

            <!-- Left menu -->
            <ul class=\"navbar-nav me-auto\">

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_home') }}\">Home</a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_product_index') }}\">Plats</a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_category_index') }}\">Catégories</a>
                </li>

            </ul>

            <!-- Right menu -->
            <ul class=\"navbar-nav align-items-center\">

                {% if app.user %}

                    <li class=\"nav-item dropdown\">

                        <a class=\"nav-link dropdown-toggle d-flex align-items-center\"
                           href=\"#\"
                           data-bs-toggle=\"dropdown\">

                            <!-- Image -->
                            {% if app.user.image %}
                                <img src=\"{{ asset('uploads/' ~ app.user.image) }}\"
                                     class=\"rounded-circle me-2\"
                                     width=\"35\"
                                     height=\"35\">
                            {% else %}
                                <i class=\"bi bi-person-circle fs-3 me-2\"></i>
                            {% endif %}

                            {{ app.user.prenom }}
                        </a>

                        <ul class=\"dropdown-menu dropdown-menu-end\">

                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('profile_view') }}\">
                                <i class=\"bi bi-person-circle\"></i>
                                    Mon Profil
                                </a>
                            </li>

                            {% if 'ROLE_ADMIN' in app.user.roles %}
                                <li>
                                    <a class=\"dropdown-item text-warning\" href=\"{{ path('admin') }}\">
                                    <i class=\"bi bi-speedometer2 me-1\"></i>
                                    Dashboard
                                    </a>
                                </li>
                            {% endif %}

                            <li><hr class=\"dropdown-divider\"></li>

                            <li>
                                <a class=\"dropdown-item text-danger\" href=\"{{ path('app_logout') }}\">
                                <i class=\"bi bi-box-arrow-right me-1\"></i>
                                    Déconnexion
                                </a>
                            </li>

                        </ul>

                    </li>

                {% else %}

                    <li class=\"nav-item me-2\">
                        <a class=\"btn btn-outline-primary\" href=\"{{ path('app_login') }}\">
                            Connexion
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"btn btn-success\" href=\"{{ path('app_register') }}\">
                            Inscription
                        </a>
                    </li>

                {% endif %}

            </ul>

        </div>
    </div>
</nav>", "partials/_header.html.twig", "/home/yassine/Bureau/product/templates/partials/_header.html.twig");
    }
}
