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

/* partials/sections/cta.html.twig */
class __TwigTemplate_48c28debfddd308fe4f8c964dafed5b88964c12b629ecc570708df33af8a24e5 extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cta", [])) {
            // line 2
            echo "<!-- Section Two aka 'cta' (CSS and frontmatter) -->
\t<div class=\"wrapper style3 cta\">
\t\t<section class=\"container\">
\t\t\t<header class=\"major\">
\t\t\t\t<h2>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["header"] ?? null), "cta", []), "headline", []), "html", null, true);
            echo "</h2>
\t\t\t</header>
\t\t\t<p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["header"] ?? null), "cta", []), "copy", []), "html", null, true);
            echo "</p>
\t\t\t<a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "cta", []), "button", []), "target", []), "html", null, true);
            echo "\" class=\"button alt\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "cta", []), "button", []), "text", []), "html", null, true);
            echo "</a>
\t\t</section>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sections/cta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  43 => 8,  38 => 6,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.header.cta %}
<!-- Section Two aka 'cta' (CSS and frontmatter) -->
\t<div class=\"wrapper style3 cta\">
\t\t<section class=\"container\">
\t\t\t<header class=\"major\">
\t\t\t\t<h2>{{ header.cta.headline }}</h2>
\t\t\t</header>
\t\t\t<p>{{ header.cta.copy }}</p>
\t\t\t<a href=\"{{ header.cta.button.target }}\" class=\"button alt\">{{ header.cta.button.text }}</a>
\t\t</section>
\t</div>
{% endif %}", "partials/sections/cta.html.twig", "/var/www/html/grav/grav-theme-solarize/user/themes/solarize/templates/partials/sections/cta.html.twig");
    }
}
