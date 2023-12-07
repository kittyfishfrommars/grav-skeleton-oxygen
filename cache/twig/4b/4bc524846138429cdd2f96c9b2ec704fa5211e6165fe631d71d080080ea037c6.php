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

/* partials/base.html.twig */
class __TwigTemplate_18e409e4617ad9210402ffb8eb38356d33e91384f70140ae9628352a4d0889cd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'banner' => [$this, 'block_banner'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["body_classes"] = $this->getAttribute(($context["header"] ?? null), "body_classes", []);
        // line 2
        echo "<!-- Base -->
<!DOCTYPE HTML>
<html lang=\"";
        // line 4
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">
<head>
";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 48
        echo "</head>

<body class=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["body_classes"] ?? null), "html", null, true);
        echo "\">

\t";
        // line 52
        $this->displayBlock('header', $context, $blocks);
        // line 77
        echo "
\t";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "
\t";
        // line 84
        $this->displayBlock('footer', $context, $blocks);
        // line 87
        echo "
\t";
        // line 88
        $this->displayBlock('bottom', $context, $blocks);
        // line 91
        echo "
</body>
";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        // line 7
        echo "\t<title>";
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " - ";
        }
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["site"] ?? null), "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["site"] ?? null), "title", []), "Solarize by TEMPLATED")) : ("Solarize by TEMPLATED")), "html");
        echo "</title>
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />

\t";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.png"), "html", null, true);
        echo "\" />
\t<link rel=\"canonical\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\" />

\t";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "
\t";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "
\t";
        // line 38
        $this->displayBlock('assets', $context, $blocks);
        // line 46
        echo "
";
    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        // line 16
        echo "\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.min.js"], "method");
        // line 17
        echo "\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.dropotron.min.js"], "method");
        // line 18
        echo "\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/skel.min.js"], "method");
        // line 19
        echo "\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/skel-layers.min.js"], "method");
        // line 20
        echo "\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/init.js", 1 => ["group" => "init", "data-theme-root" => ($context["theme_url"] ?? null)]], "method");
        // line 21
        echo "\t";
    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 24
        echo "\t\t";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 8))) {
            // line 25
            echo "\t\t\t";
            // line 26
            echo "\t\t\t";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://css/ie/html5shiv.js"], "method");
            // line 27
            echo "\t\t";
        }
        // line 28
        echo "
\t\t";
        // line 29
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/skel.css", 1 => ["group" => "noscript"]], "method");
        // line 30
        echo "\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css", 1 => ["group" => "noscript"]], "method");
        // line 31
        echo "\t\t";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 8))) {
            // line 32
            echo "\t\t\t";
            // line 33
            echo "\t\t\t";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/ie/v8.css"], "method");
            // line 34
            echo "\t\t";
        }
        // line 35
        echo "\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 36
        echo "\t";
    }

    // line 38
    public function block_assets($context, array $blocks = [])
    {
        // line 39
        echo "\t\t";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
\t\t";
        // line 40
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "init", 1 => ["data-theme-root" => ($context["theme_url"] ?? null)]], "method");
        echo " ";
        // line 41
        echo "\t\t";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
\t\t<noscript>
\t\t\t";
        // line 43
        echo $this->getAttribute(($context["assets"] ?? null), "css", [0 => "noscript"], "method");
        echo "
\t\t</noscript>
\t";
    }

    // line 52
    public function block_header($context, array $blocks = [])
    {
        // line 53
        echo "
\t\t<!-- Header Wrapper -->
\t\t\t<div class=\"wrapper style1\">

\t\t\t<!-- Header -->
\t\t\t\t<div id=\"header\">
\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t\t<h1><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
        echo "\" id=\"logo\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</a></h1>

\t\t\t\t\t\t<!-- Nav -->
\t\t\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t\t\t";
        // line 66
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 66)->display($context);
        // line 67
        echo "\t\t\t\t\t\t\t</nav>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
        // line 72
        $this->displayBlock('banner', $context, $blocks);
        // line 73
        echo "
\t\t\t</div>

\t";
    }

    // line 72
    public function block_banner($context, array $blocks = [])
    {
    }

    // line 78
    public function block_body($context, array $blocks = [])
    {
        // line 79
        echo "\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 82
        echo "\t";
    }

    // line 79
    public function block_content($context, array $blocks = [])
    {
        // line 80
        echo "\t\t\t";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
\t\t";
    }

    // line 84
    public function block_footer($context, array $blocks = [])
    {
        // line 85
        echo "\t\t";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 85)->display($context);
        // line 86
        echo "\t";
    }

    // line 88
    public function block_bottom($context, array $blocks = [])
    {
        // line 89
        echo "\t\t";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
\t";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 89,  292 => 88,  288 => 86,  285 => 85,  282 => 84,  275 => 80,  272 => 79,  268 => 82,  265 => 79,  262 => 78,  257 => 72,  250 => 73,  248 => 72,  241 => 67,  239 => 66,  230 => 62,  219 => 53,  216 => 52,  209 => 43,  203 => 41,  200 => 40,  195 => 39,  192 => 38,  188 => 36,  185 => 35,  182 => 34,  179 => 33,  177 => 32,  174 => 31,  171 => 30,  169 => 29,  166 => 28,  163 => 27,  160 => 26,  158 => 25,  155 => 24,  152 => 23,  148 => 21,  145 => 20,  142 => 19,  139 => 18,  136 => 17,  133 => 16,  130 => 15,  125 => 46,  123 => 38,  120 => 37,  118 => 23,  115 => 22,  113 => 15,  108 => 13,  104 => 12,  101 => 11,  99 => 10,  88 => 7,  85 => 6,  79 => 91,  77 => 88,  74 => 87,  72 => 84,  69 => 83,  67 => 78,  64 => 77,  62 => 52,  57 => 50,  53 => 48,  51 => 6,  46 => 4,  42 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set body_classes = header.body_classes %}
<!-- Base -->
<!DOCTYPE HTML>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
\t<title>{% if header.title %}{{ header.title|e('html') }} - {% endif %}{{ site.title|default('Solarize by TEMPLATED')|e('html') }}</title>
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />

\t{% include 'partials/metadata.html.twig' %}

\t<link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
\t<link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

\t{% block javascripts %}
\t\t{% do assets.addJs('theme://js/jquery.min.js') %}
\t\t{% do assets.addJs('theme://js/jquery.dropotron.min.js') %}
\t\t{% do assets.addJs('theme://js/skel.min.js') %}
\t\t{% do assets.addJs('theme://js/skel-layers.min.js') %}
\t\t{% do assets.addJs('theme://js/init.js', {'group': 'init', 'data-theme-root': theme_url} ) %}
\t{% endblock %}

\t{% block stylesheets %}
\t\t{% if browser.getBrowser == 'msie' and browser.getVersion <= 8 %}
\t\t\t{# do assets.addJs('theme://css/ie/html5shiv.js', {'group', 'shiv'}) #}
\t\t\t{% do assets.addJs('theme://css/ie/html5shiv.js') %}
\t\t{% endif %}

\t\t{% do assets.addCss('theme://css/skel.css', {'group': 'noscript'}) %}
\t\t{% do assets.addCss('theme://css/style.css', {'group': 'noscript'}) %}
\t\t{% if browser.getBrowser == 'msie' and browser.getVersion <= 8 %}
\t\t\t{# do assets.addCss('theme://css/ie/v8.css', {'group', 'ie'}) #}
\t\t\t{% do assets.addCss('theme://css/ie/v8.css') %}
\t\t{% endif %}
\t\t{% do assets.addCss('theme://css/custom.css') %}
\t{% endblock %}

\t{% block assets %}
\t\t{{ assets.js()|raw }}
\t\t{{ assets.js('init', {'data-theme-root': theme_url} )|raw }} {# required for pre deferred assets Twig versions, see https://getgrav.org/blog/important-theme-updates #}
\t\t{{ assets.css()|raw }}
\t\t<noscript>
\t\t\t{{ assets.css('noscript')|raw }}
\t\t</noscript>
\t{% endblock assets %}

{% endblock head %}
</head>

<body class=\"{{ body_classes }}\">

\t{% block header %}

\t\t<!-- Header Wrapper -->
\t\t\t<div class=\"wrapper style1\">

\t\t\t<!-- Header -->
\t\t\t\t<div id=\"header\">
\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t\t<h1><a href=\"{{ home_url }}\" id=\"logo\">{{ site.title }}</a></h1>

\t\t\t\t\t\t<!-- Nav -->
\t\t\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t\t\t{% include 'partials/navigation.html.twig' %}
\t\t\t\t\t\t\t</nav>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t{% block banner %}{% endblock banner %}

\t\t\t</div>

\t{% endblock header %}

\t{% block body %}
\t\t{% block content %}
\t\t\t{{ page.content|raw }}
\t\t{% endblock content %}
\t{% endblock body %}

\t{% block footer %}
\t\t{% include 'partials/footer.html.twig' %}
\t{% endblock footer %}

\t{% block bottom %}
\t\t{{ assets.js('bottom')|raw }}
\t{% endblock bottom %}

</body>
", "partials/base.html.twig", "/var/www/html/grav/tikkun/user/themes/solarize/templates/partials/base.html.twig");
    }
}
