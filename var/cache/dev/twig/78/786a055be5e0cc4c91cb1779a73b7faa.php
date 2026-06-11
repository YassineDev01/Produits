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

/* product/edit.html.twig */
class __TwigTemplate_04b87d9e33a38df0b6d00d8ee6ebd71a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/edit.html.twig"));

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

        yield "Edit Product";
        
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
        yield "<div class=\"container py-5\">

    <!-- Header -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"fw-bold\">Edit Product</h1>

        <a class=\"btn btn-outline-secondary\"
           href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        yield "\">
            ← Back to list
        </a>
    </div>

    <!-- Form Card -->
    <div class=\"card shadow-sm\">
        <div class=\"card-body\">

            ";
        // line 22
        yield Twig\Extension\CoreExtension::include($this->env, $context, "product/_form.html.twig", ["button_label" => "Update"]);
        yield "

        </div>
    </div>

    <!-- 🔥 IMAGES SECTION -->
    <div class=\"mt-5\">

        <h4 class=\"mb-3\">Current Images</h4>

        <div class=\"d-flex flex-wrap gap-3\">
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "productImages", [], "any", false, false, false, 33));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 34
            yield "                <div class=\"text-center\">

                    <img src=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["image"], "imageFile"), "html", null, true);
            yield "\"
                         width=\"100\"
                         class=\"img-thumbnail\">

                    <br>

                    <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_image_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\"
                       class=\"btn btn-outline-danger btn-sm\"
                       onclick=\"return confirm('Delete this image?')\">
                        Delete
                    </a>

                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 49
        if (!$context['_iterated']) {
            // line 50
            yield "                <p>No images found.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "        </div>

    </div>

    <!-- Actions -->
    <div class=\"mt-4 d-flex gap-2\">
        ";
        // line 58
        yield Twig\Extension\CoreExtension::include($this->env, $context, "product/_delete_form.html.twig");
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
        return "product/edit.html.twig";
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
        return array (  182 => 58,  174 => 52,  167 => 50,  165 => 49,  153 => 42,  144 => 36,  140 => 34,  135 => 33,  121 => 22,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Product{% endblock %}

{% block body %}
<div class=\"container py-5\">

    <!-- Header -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"fw-bold\">Edit Product</h1>

        <a class=\"btn btn-outline-secondary\"
           href=\"{{ path('app_product_index') }}\">
            ← Back to list
        </a>
    </div>

    <!-- Form Card -->
    <div class=\"card shadow-sm\">
        <div class=\"card-body\">

            {{ include('product/_form.html.twig', {'button_label': 'Update'}) }}

        </div>
    </div>

    <!-- 🔥 IMAGES SECTION -->
    <div class=\"mt-5\">

        <h4 class=\"mb-3\">Current Images</h4>

        <div class=\"d-flex flex-wrap gap-3\">
            {% for image in product.productImages %}
                <div class=\"text-center\">

                    <img src=\"{{ vich_uploader_asset(image, 'imageFile') }}\"
                         width=\"100\"
                         class=\"img-thumbnail\">

                    <br>

                    <a href=\"{{ path('product_image_delete', {id: image.id}) }}\"
                       class=\"btn btn-outline-danger btn-sm\"
                       onclick=\"return confirm('Delete this image?')\">
                        Delete
                    </a>

                </div>
            {% else %}
                <p>No images found.</p>
            {% endfor %}
        </div>

    </div>

    <!-- Actions -->
    <div class=\"mt-4 d-flex gap-2\">
        {{ include('product/_delete_form.html.twig') }}
    </div>

</div>
{% endblock %}", "product/edit.html.twig", "/home/yassine/Bureau/product/templates/product/edit.html.twig");
    }
}
