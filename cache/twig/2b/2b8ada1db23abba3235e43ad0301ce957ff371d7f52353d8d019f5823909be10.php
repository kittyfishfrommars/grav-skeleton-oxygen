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

/* left-sidebar.html.twig */
class __TwigTemplate_66e7cdde8281dd84b60f21a479efb7f4cec98ac0852b38dfc24773a39c478c6a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "left-sidebar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "
\t<!-- Main -->
\t\t<div id=\"main\" class=\"wrapper style4 plain\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<!-- Left Sidebar -->
\t\t\t\t\t<div id=\"sidebar\" class=\"4u\">
\t\t\t\t\t\t";
        // line 12
        $this->loadTemplate("partials/components/links_sidebar.html.twig", "left-sidebar.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<!-- Content -->
\t\t\t\t\t<div id=\"content\" class=\"8u skel-cell-important\">
\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t";
        // line 18
        $this->loadTemplate("partials/heading.html.twig", "left-sidebar.html.twig", 18)->display($context);
        // line 19
        echo "\t\t\t\t\t\t\t";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t";
        // line 26
        $this->loadTemplate("partials/sections/portals.html.twig", "left-sidebar.html.twig", 26)->display(twig_array_merge($context, ["data_source" => $this->getAttribute(($context["page"] ?? null), "find", [0 => "/"], "method")]));
        // line 27
        echo "
";
    }

    public function getTemplateName()
    {
        return "left-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 27,  74 => 26,  63 => 19,  61 => 18,  54 => 13,  52 => 12,  42 => 4,  39 => 3,  29 => 1,);
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

{% block body %}

\t<!-- Main -->
\t\t<div id=\"main\" class=\"wrapper style4 plain\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<!-- Left Sidebar -->
\t\t\t\t\t<div id=\"sidebar\" class=\"4u\">
\t\t\t\t\t\t{% include 'partials/components/links_sidebar.html.twig' %}
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Content -->
\t\t\t\t\t<div id=\"content\" class=\"8u skel-cell-important\">
\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t{% include 'partials/heading.html.twig' %}
\t\t\t\t\t\t\t{{ page.content|raw }}
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t{% include 'partials/sections/portals.html.twig' with { 'data_source': page.find('/') } %}

{% endblock body %}
", "left-sidebar.html.twig", "/var/www/html/grav/tikkun/user/themes/solarize/templates/left-sidebar.html.twig");
    }
}
