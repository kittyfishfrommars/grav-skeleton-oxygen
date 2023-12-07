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

/* partials/sections/quilt.html.twig */
class __TwigTemplate_8c323953471fa3d8d14cbc27e3457893c71fcc116e7f712ed55c5e9986ff17d1 extends \Twig\Template
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
        $context["columns"] = ((($context["columns"] ?? null)) ? (($context["columns"] ?? null)) : (3));
        // line 2
        $context["column_units"] = ((($context["column_units"] ?? null)) ? (($context["column_units"] ?? null)) : ((int) floor((12 / ($context["columns"] ?? null)))));
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "notices", [])) {
            // line 5
            $context["notices"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "notices", []);
            // line 6
            echo "<!-- Section Three aka plain aka 'notices' (frontmatter) -->
\t<div class=\"wrapper style4 plain\">
\t\t<section class=\"container\">
\t\t\t<header class=\"major\">
\t\t\t\t<h2>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute(($context["notices"] ?? null), "heading", []), "html", null, true);
            echo "</h2>
\t\t\t\t<span class=\"byline\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["notices"] ?? null), "byline", []), "html", null, true);
            echo "</span>
\t\t\t</header>
\t\t\t<div class=\"row flush\">
\t\t\t\t";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, $this->getAttribute(($context["notices"] ?? null), "items", []))));
            foreach ($context['_seq'] as $context["_key"] => $context["row_num"]) {
                if ((($context["row_num"] % ($context["columns"] ?? null)) == 0)) {
                    // line 15
                    echo "\t\t\t\t\t<div class=\"";
                    echo twig_escape_filter($this->env, ($context["column_units"] ?? null), "html", null, true);
                    echo "u\">
\t\t\t\t\t\t<ul class=\"special-icons\">
\t\t\t\t\t\t";
                    // line 17
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute(($context["notices"] ?? null), "items", []), $context["row_num"], ($context["columns"] ?? null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 18
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"fa fa-";
                        // line 19
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
                        echo "\"></span>
\t\t\t\t\t\t\t\t<h3>";
                        // line 20
                        ob_start();
                        // line 21
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["item"], "target", [])) {
                            // line 22
                            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "target", []), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "heading", []), "html", null, true);
                            echo "</a>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 24
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "heading", []), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 26
                        echo "\t\t\t\t\t\t\t\t";
                        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                        echo "</h3>
\t\t\t\t\t\t\t\t<p>";
                        // line 27
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "point", []), "html", null, true);
                        echo "</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row_num'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t</div>
\t\t</section>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sections/quilt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 33,  112 => 30,  103 => 27,  98 => 26,  92 => 24,  84 => 22,  81 => 21,  79 => 20,  75 => 19,  72 => 18,  68 => 17,  62 => 15,  57 => 14,  51 => 11,  47 => 10,  41 => 6,  39 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set columns = columns ?: 3 %}
{% set column_units = column_units ?: (12 // columns) %}

{% if page.header.notices %}
{% set notices = page.header.notices %}
<!-- Section Three aka plain aka 'notices' (frontmatter) -->
\t<div class=\"wrapper style4 plain\">
\t\t<section class=\"container\">
\t\t\t<header class=\"major\">
\t\t\t\t<h2>{{ notices.heading }}</h2>
\t\t\t\t<span class=\"byline\">{{ notices.byline }}</span>
\t\t\t</header>
\t\t\t<div class=\"row flush\">
\t\t\t\t{% for row_num in 0..notices.items|length if (row_num % columns == 0) %}
\t\t\t\t\t<div class=\"{{ column_units }}u\">
\t\t\t\t\t\t<ul class=\"special-icons\">
\t\t\t\t\t\t{% for item in notices.items|slice(row_num, columns) %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"fa fa-{{ item.icon }}\"></span>
\t\t\t\t\t\t\t\t<h3>{% spaceless %}
\t\t\t\t\t\t\t\t\t{% if item.target %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ item.target }}\">{{ item.heading }}</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{{ item.heading }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endspaceless %}</h3>
\t\t\t\t\t\t\t\t<p>{{ item.point }}</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</section>
\t</div>
{% endif %}
", "partials/sections/quilt.html.twig", "/var/www/html/grav/grav-theme-solarize/user/themes/solarize/templates/partials/sections/quilt.html.twig");
    }
}
