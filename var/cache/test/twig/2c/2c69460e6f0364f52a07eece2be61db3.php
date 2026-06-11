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

/* product/index.html.twig */
class __TwigTemplate_54e92729cf3b5d7301a6c0b221a97b3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

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

        yield "Plats";
        
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
        yield "<div class=\"container mt-4\">

    <h1 class=\" mb-4 fw-bold text-center border-bottom pb-3 bg-light py-2 rounded shadow-sm\">
        Nos Plats
    </h1>

    <div class=\"row\">

        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 15
            yield "
            <div class=\"col-md-4 mb-4\">

                
            <a href=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            yield "\"
                    class=\"text-decoration-none text-dark\">
                <div class=\"card shadow-sm h-100 \">

                    ";
            // line 24
            yield "                    ";
            $context["firstImage"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "productImages", [], "any", false, false, false, 24));
            // line 25
            yield "
                    ";
            // line 26
            if (((isset($context["firstImage"]) || array_key_exists("firstImage", $context) ? $context["firstImage"] : (function () { throw new RuntimeError('Variable "firstImage" does not exist.', 26, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["firstImage"]) || array_key_exists("firstImage", $context) ? $context["firstImage"] : (function () { throw new RuntimeError('Variable "firstImage" does not exist.', 26, $this->source); })()), "imageName", [], "any", false, false, false, 26))) {
                // line 27
                yield "
                        <img src=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["firstImage"]) || array_key_exists("firstImage", $context) ? $context["firstImage"] : (function () { throw new RuntimeError('Variable "firstImage" does not exist.', 28, $this->source); })()), "imageName", [], "any", false, false, false, 28))), "html", null, true);
                yield "\"
                             class=\"card-img-top\"
                             style=\"height:200px; object-fit:cover;\">

                    ";
            } else {
                // line 33
                yield "
                        <img src=\"";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default.jpg"), "html", null, true);
                yield "\"
                             class=\"card-img-top\"
                             style=\"height:200px; object-fit:cover;\">

                    ";
            }
            // line 39
            yield "
                    <div class=\"card-body text-center\">

                        <h5 class=\"fw-bold\">
                            ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43), "html", null, true);
            yield "
                        </h5>

                        <p class=\"text-muted\">
                            ";
            // line 47
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 48
$context["product"], "description", [], "any", false, false, false, 48), 0, 80) . "..."), "html", null, true)) : (""));
            // line 49
            yield "
                        </p>

                        ";
            // line 53
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "                            <p class=\"badge bg-primary\">
                                ";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 55), "nameCategory", [], "any", false, false, false, 55), "html", null, true);
                yield "
                            </p>
                        ";
            }
            // line 58
            yield "
                    </div>

                </div>
            </a>

            </div>


        ";
            $context['_iterated'] = true;
        }
        // line 67
        if (!$context['_iterated']) {
            // line 68
            yield "

            <div class=\"col-12 text-center\">
                <p>Aucun produit disponible.</p>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "
    </div>
    </div>

    

<div class=\"d-flex justify-content-center mt-4\">
    ";
        // line 82
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 82, $this->source); })()));
        yield "
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
        return "product/index.html.twig";
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
        return array (  227 => 82,  218 => 75,  206 => 68,  204 => 67,  191 => 58,  185 => 55,  182 => 54,  179 => 53,  174 => 49,  172 => 48,  171 => 47,  164 => 43,  158 => 39,  150 => 34,  147 => 33,  139 => 28,  136 => 27,  134 => 26,  131 => 25,  128 => 24,  121 => 19,  115 => 15,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Plats{% endblock %}

{% block body %}
<div class=\"container mt-4\">

    <h1 class=\" mb-4 fw-bold text-center border-bottom pb-3 bg-light py-2 rounded shadow-sm\">
        Nos Plats
    </h1>

    <div class=\"row\">

        {% for product in products %}

            <div class=\"col-md-4 mb-4\">

                
            <a href=\"{{ path('app_product_show', {'id': product.id}) }}\"
                    class=\"text-decoration-none text-dark\">
                <div class=\"card shadow-sm h-100 \">

                    {# Première image #}
                    {% set firstImage = product.productImages|first %}

                    {% if firstImage and firstImage.imageName %}

                        <img src=\"{{ asset('uploads/products/' ~ firstImage.imageName) }}\"
                             class=\"card-img-top\"
                             style=\"height:200px; object-fit:cover;\">

                    {% else %}

                        <img src=\"{{ asset('images/default.jpg') }}\"
                             class=\"card-img-top\"
                             style=\"height:200px; object-fit:cover;\">

                    {% endif %}

                    <div class=\"card-body text-center\">

                        <h5 class=\"fw-bold\">
                            {{ product.name }}
                        </h5>

                        <p class=\"text-muted\">
                            {{ product.description
                                ? product.description|slice(0,80) ~ '...'
                                : '' }}
                        </p>

                        {# Afficher la catégorie #}
                        {% if product.category %}
                            <p class=\"badge bg-primary\">
                                {{ product.category.nameCategory }}
                            </p>
                        {% endif %}

                    </div>

                </div>
            </a>

            </div>


        {% else %}


            <div class=\"col-12 text-center\">
                <p>Aucun produit disponible.</p>
            </div>

        {% endfor %}

    </div>
    </div>

    

<div class=\"d-flex justify-content-center mt-4\">
    {{ knp_pagination_render(products) }}
</div>

</div>
{% endblock %}", "product/index.html.twig", "/home/yassine/Documents/Symfony-Test-Toto/product/templates/product/index.html.twig");
    }
}
