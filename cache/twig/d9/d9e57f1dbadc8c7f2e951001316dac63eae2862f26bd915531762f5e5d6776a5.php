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

/* default.html.twig */
class __TwigTemplate_f2b183188016005519a4312d782c9810738c71714be16a006f46068dc20f9372 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "<!-- Main -->
\t<div id=\"main\" class=\"wrapper style4 plain\">

\t\t<!-- Content -->
\t\t<div id=\"content\" class=\"container\">
\t\t\t<section>
\t\t\t\t";
        // line 10
        $this->loadTemplate("partials/heading.html.twig", "default.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t\t";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
\t\t\t</section>
\t\t</div>
\t</div>

\t";
        // line 16
        $this->loadTemplate("partials/sections/portals.html.twig", "default.html.twig", 16)->display(twig_array_merge($context, ["data_source" => $this->getAttribute(($context["page"] ?? null), "find", [0 => "/"], "method")]));
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  61 => 16,  52 => 11,  50 => 10,  42 => 4,  39 => 3,  29 => 1,);
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
<!-- Main -->
\t<div id=\"main\" class=\"wrapper style4 plain\">

\t\t<!-- Content -->
\t\t<div id=\"content\" class=\"container\">
\t\t\t<section>
\t\t\t\t{% include 'partials/heading.html.twig' %}
\t\t\t\t{{ page.content|raw }}
\t\t\t</section>
\t\t</div>
\t</div>

\t{% include 'partials/sections/portals.html.twig' with { 'data_source': page.find('/') } %}

{% endblock body %}
", "default.html.twig", "/var/www/html/grav/tikkun/user/themes/solarize/templates/default.html.twig");
    }
}
