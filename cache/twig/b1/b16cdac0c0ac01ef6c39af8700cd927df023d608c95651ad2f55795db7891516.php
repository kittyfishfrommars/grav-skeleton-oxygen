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

/* partials/heading.html.twig */
class __TwigTemplate_1eaed277b998ec0ddcd9ff3371e3a14c9455ed78a21252294e92a459ae2256e3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!-- Heading -->
<header class=\"major\">
\t<h2>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "</h2>
\t";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", [])) {
            // line 5
            echo "\t\t<span class=\"byline\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []), "html", null, true);
            echo "</span>
\t";
        }
        // line 7
        echo "</header>
";
    }

    public function getTemplateName()
    {
        return "partials/heading.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  40 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- Heading -->
<header class=\"major\">
\t<h2>{{ page.title }}</h2>
\t{% if page.header.subtitle %}
\t\t<span class=\"byline\">{{ page.header.subtitle }}</span>
\t{% endif %}
</header>
", "partials/heading.html.twig", "/var/www/html/grav/tikkun/user/themes/solarize/templates/partials/heading.html.twig");
    }
}
