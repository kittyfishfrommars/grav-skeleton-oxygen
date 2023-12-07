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

/* partials/footer.html.twig */
class __TwigTemplate_140ae0abc2bd2290d76ff1704b418ec5ca91a376b5e33ad3d2bfd91ced405611 extends \Twig\Template
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
        echo "<!-- Footer -->
\t<div id=\"footer\">
\t\t<section class=\"container\">
\t\t\t<header class=\"major\">
\t\t\t\t<h2>Connect with us</h2>
\t\t\t\t<span class=\"byline\">Integer sit amet pede vel arcu aliquet pretium</span>
\t\t\t</header>
\t\t\t<ul class=\"icons\">
\t\t\t\t<li><a href=\"#\" class=\"fa fa-facebook\"><span>Facebook</span></a></li>
\t\t\t\t<li><a href=\"#\" class=\"fa fa-twitter\"><span>Twitter</span></a></li>
\t\t\t\t<li><a href=\"#\" class=\"fa fa-dribbble\"><span>Pinterest</span></a></li>
\t\t\t\t<li><a href=\"#\" class=\"fa fa-google-plus\"><span>Google+</span></a></li>
\t\t\t</ul>
\t\t\t<hr />
\t\t</section>

\t\t<!-- Copyright -->
\t\t<div id=\"copyright\">
\t\t\t<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/impressum\">Impressum</a> | <a href=\"";
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/impressum#datenschutz\">Datenschutz</a>
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 19,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
\t<div id=\"footer\">
\t\t<section class=\"container\">
\t\t\t<header class=\"major\">
\t\t\t\t<h2>Connect with us</h2>
\t\t\t\t<span class=\"byline\">Integer sit amet pede vel arcu aliquet pretium</span>
\t\t\t</header>
\t\t\t<ul class=\"icons\">
\t\t\t\t<li><a href=\"#\" class=\"fa fa-facebook\"><span>Facebook</span></a></li>
\t\t\t\t<li><a href=\"#\" class=\"fa fa-twitter\"><span>Twitter</span></a></li>
\t\t\t\t<li><a href=\"#\" class=\"fa fa-dribbble\"><span>Pinterest</span></a></li>
\t\t\t\t<li><a href=\"#\" class=\"fa fa-google-plus\"><span>Google+</span></a></li>
\t\t\t</ul>
\t\t\t<hr />
\t\t</section>

\t\t<!-- Copyright -->
\t\t<div id=\"copyright\">
\t\t\t<a href=\"{{ base_url }}/impressum\">Impressum</a> | <a href=\"{{ base_url }}/impressum#datenschutz\">Datenschutz</a>
\t\t</div>
\t</div>", "partials/footer.html.twig", "/var/www/html/grav/tikkun/user/themes/solarize/templates/partials/footer.html.twig");
    }
}
