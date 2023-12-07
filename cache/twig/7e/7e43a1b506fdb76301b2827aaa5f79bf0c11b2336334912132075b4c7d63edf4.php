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

/* partials/banner.html.twig */
class __TwigTemplate_94024943dcd18fde3434af5947ff102a344058aace5a72e6e412d4fde8f96730 extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "banner", [])) {
            // line 2
            echo "<!-- Banner -->
\t<div id=\"banner\">
\t\t<section class=\"container\">
\t\t\t<h2>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "banner", []), "headline", []), "html", null, true);
            echo "</h2>
\t\t\t";
            // line 6
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "banner", []), "follower", [])) {
                // line 7
                echo "\t\t\t<div>
\t\t\t\t<span>";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "banner", []), "follower", []), "html", null, true);
                echo "</span>
\t\t\t<div>\t
\t\t\t";
            }
            // line 11
            echo "\t\t\t";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "banner", []), "blurb", [])) {
                // line 12
                echo "\t\t\t<div>
\t\t\t\t<p>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "banner", []), "blurb", []), "html", null, true);
                echo "</p>
\t\t\t</div>
\t\t\t";
            }
            // line 16
            echo "\t\t</section>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  58 => 13,  55 => 12,  52 => 11,  46 => 8,  43 => 7,  41 => 6,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.header.banner %}
<!-- Banner -->
\t<div id=\"banner\">
\t\t<section class=\"container\">
\t\t\t<h2>{{ page.header.banner.headline }}</h2>
\t\t\t{% if page.header.banner.follower %}
\t\t\t<div>
\t\t\t\t<span>{{ page.header.banner.follower }}</span>
\t\t\t<div>\t
\t\t\t{% endif %}
\t\t\t{% if page.header.banner.blurb %}
\t\t\t<div>
\t\t\t\t<p>{{ page.header.banner.blurb }}</p>
\t\t\t</div>
\t\t\t{% endif %}
\t\t</section>
\t</div>
{% endif %}", "partials/banner.html.twig", "/var/www/html/grav/tikkun/user/themes/solarize/templates/partials/banner.html.twig");
    }
}
