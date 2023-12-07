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

/* partials/components/links_sidebar.html.twig */
class __TwigTemplate_b2a373874ac43bd99437e92040eeb065244842ebc82c40d57e455310573e15e5 extends \Twig\Template
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
        echo "<!-- Links Sidebar -->
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sidebars", []), "links", []));
        foreach ($context['_seq'] as $context["_key"] => $context["sidebar"]) {
            // line 3
            echo "\t";
            $context["front"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/components/links/" . $context["sidebar"])], "method"), "header", []);
            // line 4
            echo "\t<section>
\t\t<header class=\"major\">
\t\t\t<h2>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute(($context["front"] ?? null), "title", []), "html", null, true);
            echo "</h2>
\t\t</header>
\t\t<ul class=\"default\">
\t\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["front"] ?? null), "links", []));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 10
                echo "\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "target", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "text", []), "html", null, true);
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t\t</ul>
\t</section>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sidebar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/components/links_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  54 => 10,  50 => 9,  44 => 6,  40 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- Links Sidebar -->
{% for sidebar in page.header.sidebars.links %}
\t{% set front =  page.find('/components/links/' ~ sidebar).header %}
\t<section>
\t\t<header class=\"major\">
\t\t\t<h2>{{ front.title }}</h2>
\t\t</header>
\t\t<ul class=\"default\">
\t\t\t{% for link in front.links %}
\t\t\t\t<li><a href=\"{{ link.target }}\">{{ link.text }}</a></li>
\t\t\t{% endfor %}
\t\t</ul>
\t</section>
{% endfor %}
", "partials/components/links_sidebar.html.twig", "/var/www/html/grav/tikkun/user/themes/solarize/templates/partials/components/links_sidebar.html.twig");
    }
}
