<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home.html.twig */
class __TwigTemplate_20cd02869cf8e7858d28e7f454ea593627563e3dea8c3155bfb0b2963b1186ed extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'banner' => [$this, 'block_banner'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_banner($context, array $blocks = [])
    {
        // line 4
        echo "\t";
        $this->loadTemplate("partials/banner.html.twig", "home.html.twig", 4)->display($context);
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        // line 8
        echo "
\t";
        // line 9
        $this->loadTemplate("partials/sections/hook.html.twig", "home.html.twig", 9)->display(twig_array_merge($context, ["text_copy" => $this->getAttribute(($context["page"] ?? null), "content", [])]));
        // line 10
        echo "\t";
        $this->loadTemplate("partials/sections/cta.html.twig", "home.html.twig", 10)->display($context);
        // line 11
        echo "\t";
        $this->loadTemplate("partials/sections/quilt.html.twig", "home.html.twig", 11)->display($context);
        // line 12
        echo "\t";
        $this->loadTemplate("partials/sections/portals.html.twig", "home.html.twig", 12)->display($context);
        // line 13
        echo "
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  62 => 12,  59 => 11,  56 => 10,  54 => 9,  51 => 8,  48 => 7,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block banner %}
\t{% include 'partials/banner.html.twig' %}
{% endblock banner %}

{% block body %}

\t{% include 'partials/sections/hook.html.twig' with { text_copy: page.content } %}
\t{% include 'partials/sections/cta.html.twig' %}
\t{% include 'partials/sections/quilt.html.twig' %}
\t{% include 'partials/sections/portals.html.twig' %}

{% endblock body %}
", "home.html.twig", "/var/www/html/grav/grav-theme-solarize/user/themes/solarize/templates/home.html.twig");
    }
}
