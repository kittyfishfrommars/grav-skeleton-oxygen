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

/* partials/sections/portals.html.twig */
class __TwigTemplate_bc961714483ad17289f27a5e941088cbbc2929f39379a15430c40d61e2bf88f9 extends \Twig\Template
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
        $context["data_source"] = ((array_key_exists("data_source", $context)) ? (_twig_default_filter(($context["data_source"] ?? null), ($context["page"] ?? null))) : (($context["page"] ?? null)));
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["data_source"] ?? null), "header", []), "portals", [])) {
            // line 3
            echo "<!-- Team aka 'portals' (CSS and frontmatter) -->
\t";
            // line 4
            $context["portals"] = $this->getAttribute($this->getAttribute(($context["data_source"] ?? null), "header", []), "portals", []);
            // line 5
            echo "\t<div class=\"wrapper style5 portals\">
\t\t<section id=\"team\" class=\"container\">
\t\t\t<header class=\"major\">
\t\t\t\t<h2>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["portals"] ?? null), "heading", []), "html", null, true);
            echo "</h2>
\t\t\t\t<span class=\"byline\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["portals"] ?? null), "byline", []), "html", null, true);
            echo "</span>
\t\t\t</header>
\t\t\t<div class=\"row\">
\t\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute(($context["portals"] ?? null), "items", []), 0, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["portal"]) {
                // line 13
                echo "\t\t\t\t<div class=\"3u\">
\t\t\t\t\t<a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["portal"], "target", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["portal"], "alt", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["portal"], "alt", []), "")) : ("")), "html", null, true);
                echo "\" class=\"image\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["data_source"] ?? null), "media", []), $this->getAttribute($context["portal"], "thumbnail", []), [], "array"), "resize", [0 => 162, 1 => 162], "method"), "url", []), "html", null, true);
                echo "\"></a>
\t\t\t\t\t<h3>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["portal"], "heading", []), "html", null, true);
                echo "</h3>
\t\t\t\t\t<p>";
                // line 16
                echo $this->getAttribute($context["portal"], "teaser", []);
                echo "</p>
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t</div>
\t\t</section>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sections/portals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  73 => 16,  69 => 15,  61 => 14,  58 => 13,  54 => 12,  48 => 9,  44 => 8,  39 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set data_source = data_source|default(page) %}
{% if data_source.header.portals %}
<!-- Team aka 'portals' (CSS and frontmatter) -->
\t{% set portals = data_source.header.portals %}
\t<div class=\"wrapper style5 portals\">
\t\t<section id=\"team\" class=\"container\">
\t\t\t<header class=\"major\">
\t\t\t\t<h2>{{ portals.heading }}</h2>
\t\t\t\t<span class=\"byline\">{{ portals.byline }}</span>
\t\t\t</header>
\t\t\t<div class=\"row\">
\t\t\t\t{% for portal in portals.items|slice(0, 4) %}
\t\t\t\t<div class=\"3u\">
\t\t\t\t\t<a href=\"{{ portal.target }}\" alt=\"{{ portal.alt|default('') }}\" class=\"image\"><img src=\"{{ data_source.media[portal.thumbnail].resize(162,162).url }}\"></a>
\t\t\t\t\t<h3>{{ portal.heading }}</h3>
\t\t\t\t\t<p>{{ portal.teaser|raw }}</p>
\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</section>
\t</div>
{% endif %}", "partials/sections/portals.html.twig", "/var/www/html/grav/grav-theme-solarize/user/themes/solarize/templates/partials/sections/portals.html.twig");
    }
}
