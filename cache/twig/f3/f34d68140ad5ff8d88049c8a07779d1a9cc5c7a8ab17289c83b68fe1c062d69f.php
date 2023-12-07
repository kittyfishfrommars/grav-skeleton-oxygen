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

/* partials/sections/hook.html.twig */
class __TwigTemplate_7f3cad6e3b0782db09324258fbc89485a0f81f837d6cf95a2a8d27604eb9f52e extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hook", [])) {
            // line 2
            echo "<!-- Section One aka Even(ly)Part(ed) aka 'hook' (frontmatter) -->
\t<div class=\"wrapper style2 evenpart\">
\t\t<section class=\"container\">
\t\t\t<div class=\"row double\">
\t\t\t\t<div class=\"6u\">
\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t<h2>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["header"] ?? null), "hook", []), "teaser", []), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t<span class=\"byline\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["header"] ?? null), "hook", []), "byline", []), "html", null, true);
            echo "</span>
\t\t\t\t\t</header>
\t\t\t\t</div>
\t\t\t\t<div class=\"6u\">
\t\t\t\t\t";
            // line 13
            echo ((array_key_exists("text_copy", $context)) ? (_twig_default_filter(($context["text_copy"] ?? null), $this->getAttribute(($context["page"] ?? null), "content", []))) : ($this->getAttribute(($context["page"] ?? null), "content", [])));
            echo "
\t\t\t\t\t";
            // line 14
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hook", []), "button", [])) {
                // line 15
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "hook", []), "button", []), "target", []), "html", null, true);
                echo "\" class=\"button\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "hook", []), "button", []), "text", []), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>
";
        } elseif ((twig_length_filter($this->env, twig_trim_filter($this->getAttribute(        // line 21
($context["page"] ?? null), "content", []))) > 0)) {
            // line 22
            echo "\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->dump($this->env, $context, "Notice: homepage markdown content not rendered because page header \"hook\" is missing in frontmatter."), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sections/hook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  71 => 21,  65 => 17,  57 => 15,  55 => 14,  51 => 13,  44 => 9,  40 => 8,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.header.hook %}
<!-- Section One aka Even(ly)Part(ed) aka 'hook' (frontmatter) -->
\t<div class=\"wrapper style2 evenpart\">
\t\t<section class=\"container\">
\t\t\t<div class=\"row double\">
\t\t\t\t<div class=\"6u\">
\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t<h2>{{ header.hook.teaser }}</h2>
\t\t\t\t\t\t<span class=\"byline\">{{ header.hook.byline }}</span>
\t\t\t\t\t</header>
\t\t\t\t</div>
\t\t\t\t<div class=\"6u\">
\t\t\t\t\t{{ (text_copy|default(page.content))|raw }}
\t\t\t\t\t{% if page.header.hook.button %}
\t\t\t\t\t\t<a href=\"{{ header.hook.button.target }}\" class=\"button\">{{ header.hook.button.text }}</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>
{% elseif page.content|trim|length > 0 %}
\t{{ dump('Notice: homepage markdown content not rendered because page header \"hook\" is missing in frontmatter.') }}
{% endif %}
", "partials/sections/hook.html.twig", "/var/www/html/grav/grav-theme-solarize/user/themes/solarize/templates/partials/sections/hook.html.twig");
    }
}
