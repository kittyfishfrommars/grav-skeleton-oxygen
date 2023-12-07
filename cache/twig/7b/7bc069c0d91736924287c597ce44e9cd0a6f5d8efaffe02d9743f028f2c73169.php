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

/* partials/themes-details.html.twig */
class __TwigTemplate_13152db30addbc40e45f6718d36de6ea69bbe16b81d231f94bee69ad57b5d03d extends \Twig\Template
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
        $context["gpm"] = $this->getAttribute(($context["admin"] ?? null), "gpm", [], "method");
        // line 2
        $context["installed"] = $this->getAttribute(($context["gpm"] ?? null), "isThemeInstalled", [0 => $this->getAttribute(($context["admin"] ?? null), "route", [])], "method");
        // line 3
        $context["isTestingRelease"] = $this->getAttribute(($context["gpm"] ?? null), "isTestingRelease", [0 => $this->getAttribute(($context["theme"] ?? null), "slug", [])], "method");
        // line 4
        $context["gumroad_loaded"] = false;
        // line 5
        echo "
";
        // line 6
        $context["state"] = "inactive";
        // line 7
        if (($this->getAttribute(($context["config"] ?? null), "get", [0 => "system.pages.theme"], "method") == $this->getAttribute(($context["theme"] ?? null), "slug", []))) {
            $context["state"] = "active";
        }
        // line 8
        echo "
<div class=\"grav-update theme\" data-gpm-theme=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "route", []), "html", null, true);
        echo "\">
</div>

<h1>
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "name", []), "html", null, true);
        echo "
    ";
        // line 14
        if ($this->getAttribute(($context["admin"] ?? null), "isTeamGrav", [0 => ($context["theme"] ?? null)], "method")) {
            // line 15
            echo "        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.GRAV_OFFICIAL_THEME"), "html", null, true);
            echo "\"></i></span></small>
    ";
        }
        // line 17
        echo "    ";
        if ($this->getAttribute(($context["admin"] ?? null), "isPremiumProduct", [0 => ($context["theme"] ?? null)], "method")) {
            // line 18
            echo "        <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.PREMIUM_PRODUCT"), "html", null, true);
            echo "</span></small>
    ";
        }
        // line 20
        echo "    ";
        if ($this->getAttribute(($context["theme"] ?? null), "symlink", [])) {
            // line 21
            echo "    <small class=\"hint--bottom\"  data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED"), "html", null, true);
            echo "\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    ";
        }
        // line 25
        echo "    <small>";
        (($this->getAttribute(($context["theme"] ?? null), "version", [])) ? (print (twig_escape_filter($this->env, ("v" . $this->getAttribute(($context["theme"] ?? null), "version", [])), "html", null, true))) : (print ("")));
        echo "</small>
    ";
        // line 26
        if (($context["isTestingRelease"] ?? null)) {
            echo "<span class=\"gpm-testing\">test release</span>";
        }
        // line 27
        echo "</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "icon", []), "html", null, true);
        echo "\"></i>
    <table>
        ";
        // line 31
        if ($this->getAttribute(($context["theme"] ?? null), "version", [])) {
            // line 32
            echo "        <tr>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.VERSION"), "html", null, true);
            echo ":</td>
            <td class=\"double\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "version", []), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        // line 37
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "author", [])) {
            // line 38
            echo "            <tr>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.AUTHOR"), "html", null, true);
            echo ":</td>
                <td class=\"double\">
                    ";
            // line 41
            if ($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "url", [])) {
                // line 42
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "url", []), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "name", []), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 44
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "name", []), "html", null, true);
                echo "
                    ";
            }
            // line 46
            echo "                    ";
            if ($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "email", [])) {
                // line 47
                echo "                         - <a href=\"mailto:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "email", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "email", []), "html", null, true);
                echo "</a>
                    ";
            }
            // line 49
            echo "                </td>
            </tr>
        ";
        }
        // line 52
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "homepage", [])) {
            // line 53
            echo "        <tr>
            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.HOMEPAGE"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "homepage", []), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "homepage", []), "html", null, true);
            echo "</a></td>
        </tr>
        ";
        }
        // line 58
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "demo", [])) {
            // line 59
            echo "        <tr>
            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.DEMO"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "demo", []), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "demo", []), "html", null, true);
            echo "</a></td>
        </tr>
        ";
        }
        // line 64
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "bugs", [])) {
            // line 65
            echo "            <tr>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BUG_TRACKER"), "html", null, true);
            echo ":</td>
                <td class=\"double\"><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "bugs", []), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "bugs", []), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        // line 70
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "keywords", [])) {
            // line 71
            echo "            <tr>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.KEYWORDS"), "html", null, true);
            echo ":</td>
                <td class=\"double\">
                   ";
            // line 74
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["theme"] ?? null), "keywords", []), ", "), "html", null, true);
            echo "
                </td>
            </tr>
        ";
        }
        // line 78
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "license", [])) {
            // line 79
            echo "            <tr>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.LICENSE"), "html", null, true);
            echo ":</td>
                ";
            // line 81
            if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->startsWithFilter($this->getAttribute(($context["theme"] ?? null), "license", []), "http")) {
                // line 82
                echo "                    <td class=\"double\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "license", []), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "license", []), "html", null, true);
                echo "</a></td>
                ";
            } else {
                // line 84
                echo "                    <td class=\"double\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "license", []), "html", null, true);
                echo "</td>
                ";
            }
            // line 86
            echo "            </tr>
        ";
        }
        // line 88
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "description", [])) {
            // line 89
            echo "            <tr>
                <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.DESCRIPTION"), "html", null, true);
            echo ":</td>
                <td class=\"double\">";
            // line 91
            echo $this->getAttribute(($context["theme"] ?? null), "description_html", []);
            echo "</td>
            </tr>
        ";
        }
        // line 94
        echo "
        ";
        // line 95
        if (($this->getAttribute(($context["theme"] ?? null), "readme", []) || $this->getAttribute(($context["theme"] ?? null), "homepage", []))) {
            // line 96
            echo "            ";
            $context["readme_link"] = (($this->getAttribute(($context["theme"] ?? null), "readme", [])) ? ($this->getAttribute(($context["theme"] ?? null), "readme", [])) : ((($this->getAttribute(($context["theme"] ?? null), "docs", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["theme"] ?? null), "docs", []), ($this->getAttribute(($context["theme"] ?? null), "homepage", []) . "/blob/master/README.md"))) : (($this->getAttribute(($context["theme"] ?? null), "homepage", []) . "/blob/master/README.md")))));
            // line 97
            echo "            <tr>
                <td>";
            // line 98
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["theme"] ?? null), "readme", [])) ? ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.README")) : ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.DOCS"))), "html", null, true);
            echo ":</td>
                <td class=\"double\"><a href=\"";
            // line 99
            echo twig_escape_filter($this->env, ($context["readme_link"] ?? null), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, ($context["readme_link"] ?? null), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        // line 102
        echo "
        ";
        // line 103
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "gpm", []), "findPackage", [0 => $this->getAttribute(($context["theme"] ?? null), "slug", []), 1 => true], "method"), "changelog", [])) {
            // line 104
            echo "        <tr>
            <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CHANGELOG"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a class=\"button button-small\" href=\"#\" data-remodal-target=\"changelog\" data-remodal-changelog=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(("/changelog/slug:" . $this->getAttribute(($context["theme"] ?? null), "slug", []))), "html", null, true);
            echo "\"><i class=\"fa fa-binoculars\"></i> View Changelog</a></td>
        </tr>
        ";
        }
        // line 109
        echo "    </table>
</div>

";
        // line 112
        if (($context["installed"] ?? null)) {
            // line 113
            echo "  ";
            if ((($context["state"] ?? null) == "active")) {
                // line 114
                echo "    ";
                $context["data"] = $this->getAttribute(($context["admin"] ?? null), "data", [0 => ("themes/" . $this->getAttribute(($context["admin"] ?? null), "route", []))], "method");
                // line 115
                echo "    ";
                $this->loadTemplate("partials/blueprints.html.twig", "partials/themes-details.html.twig", 115)->display(twig_array_merge($context, ["data" => ($context["data"] ?? null), "blueprints" => $this->getAttribute(($context["data"] ?? null), "blueprints", [])]));
                // line 116
                echo "  ";
            } else {
                // line 117
                echo "    <div class=\"theme\" data-gpm-theme=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "slug", []), "html", null, true);
                echo "\" data-gpm-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "name", []), "html", null, true);
                echo "\">
      <div style=\"display:none;\" class=\"gpm-name\"><a>";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "name", []), "html", null, true);
                echo "</a></div>
      <form>
        <div class=\"form-field grid\">
          <div class=\"form-label block size-1-3\">
            <label>";
                // line 122
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.ACTIVATION_REQUIRED"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"form-data block size-2-3\">
            <a class=\"button gpm-actions\" data-remodal-target=\"theme-switch-warn\" href=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((((($context["base_url_relative"] ?? null) . "/themes/") . $this->getAttribute(($context["theme"] ?? null), "slug", [])) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "activate"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                echo "\">
              <i class=\"fa fa-power-off\" aria-hidden=\"true\"></i> ";
                // line 126
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.ACTIVATE"), "html", null, true);
                echo " <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "name", []), "html", null, true);
                echo "</strong>
            </a>
          </div>
        </div>
      </form>
    </div>

    <div class=\"button-bar danger\">
      <span class=\"danger-zone\"></span>
      ";
                // line 135
                if ( !$this->getAttribute(($context["theme"] ?? null), "symlink", [])) {
                    // line 136
                    echo "          <a class=\"button button-reinstall-package hidden\" href=\"#\" data-remodal-target=\"reinstall-package\"><i class=\"fa fa-fw fa-repeat\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.REINSTALL_THEME"), "html", null, true);
                    echo "</a>
      ";
                }
                // line 138
                echo "      <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.REMOVE_THEME"), "html", null, true);
                echo "</a>
    </div>
  ";
            }
        } else {
            // line 142
            echo "    <div class=\"button-bar success\">
        ";
            // line 143
            if (($this->getAttribute(($context["theme"] ?? null), "premium", []) &&  !$this->getAttribute(($context["admin"] ?? null), "license", [0 => $this->getAttribute(($context["theme"] ?? null), "slug", [])], "method"))) {
                // line 144
                echo "            ";
                if ( !($context["gumroad_loaded"] ?? null)) {
                    // line 145
                    echo "                ";
                    $context["gumroad_loaded"] = true;
                    // line 146
                    echo "                <script src=\"//gumroad.com/js/gumroad.js\"></script>
            ";
                }
                // line 148
                echo "            <a class=\"gumroad-button button\" href=\"https://gum.co/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "premium", []), "permalink", []), "html", null, true);
                echo "\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "premium", [], "any", false, true), "button", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "premium", [], "any", false, true), "button", []), "Purchase")) : ("Purchase")), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 150
                echo "            <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "slug", []), "html", null, true);
                echo "\" data-theme-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.INSTALL_THEME"), "html", null, true);
                echo "</a>
        ";
            }
            // line 152
            echo "    </div>
";
        }
        // line 154
        echo "
";
        // line 155
        $this->loadTemplate("partials/modal-switch-theme.html.twig", "partials/themes-details.html.twig", 155)->display(twig_array_merge($context, ["theme_name" => $this->getAttribute(($context["theme"] ?? null), "name", [])]));
        // line 156
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "partials/themes-details.html.twig", 156)->display($context);
        // line 157
        $this->loadTemplate("partials/modal-add-package.html.twig", "partials/themes-details.html.twig", 157)->display(twig_array_merge($context, ["type" => "theme"]));
        // line 158
        $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/themes-details.html.twig", 158)->display(twig_array_merge($context, ["type" => "theme"]));
        // line 159
        $this->loadTemplate("partials/modal-remove-package.html.twig", "partials/themes-details.html.twig", 159)->display(twig_array_merge($context, ["type" => "theme", "package" => ($context["theme"] ?? null)]));
        // line 160
        $this->loadTemplate("partials/modal-reinstall-package.html.twig", "partials/themes-details.html.twig", 160)->display(twig_array_merge($context, ["type" => "theme", "package" => ($context["theme"] ?? null)]));
        // line 161
        $this->loadTemplate("partials/modal-changelog.html.twig", "partials/themes-details.html.twig", 161)->display(twig_array_merge($context, ["package" => ($context["theme"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "partials/themes-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 161,  445 => 160,  443 => 159,  441 => 158,  439 => 157,  437 => 156,  435 => 155,  432 => 154,  428 => 152,  420 => 150,  412 => 148,  408 => 146,  405 => 145,  402 => 144,  400 => 143,  397 => 142,  389 => 138,  383 => 136,  381 => 135,  367 => 126,  363 => 125,  357 => 122,  350 => 118,  343 => 117,  340 => 116,  337 => 115,  334 => 114,  331 => 113,  329 => 112,  324 => 109,  318 => 106,  314 => 105,  311 => 104,  309 => 103,  306 => 102,  298 => 99,  294 => 98,  291 => 97,  288 => 96,  286 => 95,  283 => 94,  277 => 91,  273 => 90,  270 => 89,  267 => 88,  263 => 86,  257 => 84,  249 => 82,  247 => 81,  243 => 80,  240 => 79,  237 => 78,  230 => 74,  225 => 72,  222 => 71,  219 => 70,  211 => 67,  207 => 66,  204 => 65,  201 => 64,  193 => 61,  189 => 60,  186 => 59,  183 => 58,  175 => 55,  171 => 54,  168 => 53,  165 => 52,  160 => 49,  152 => 47,  149 => 46,  143 => 44,  135 => 42,  133 => 41,  128 => 39,  125 => 38,  122 => 37,  116 => 34,  112 => 33,  109 => 32,  107 => 31,  102 => 29,  98 => 27,  94 => 26,  89 => 25,  81 => 21,  78 => 20,  72 => 18,  69 => 17,  63 => 15,  61 => 14,  57 => 13,  50 => 9,  47 => 8,  43 => 7,  41 => 6,  38 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set gpm = admin.gpm() %}
{% set installed = gpm.isThemeInstalled(admin.route) %}
{% set isTestingRelease = gpm.isTestingRelease(theme.slug) %}
{% set gumroad_loaded = false %}

{% set state = 'inactive' %}
{% if (config.get('system.pages.theme') == theme.slug) %}{% set state = 'active' %}{% endif %}

<div class=\"grav-update theme\" data-gpm-theme=\"{{ admin.route }}\">
</div>

<h1>
    {{ theme.name }}
    {% if admin.isTeamGrav(theme) %}
        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"{{ \"PLUGIN_ADMIN.GRAV_OFFICIAL_THEME\"|t }}\"></i></span></small>
    {% endif %}
    {% if admin.isPremiumProduct(theme) %}
        <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> {{ \"PLUGIN_ADMIN.PREMIUM_PRODUCT\"|t }}</span></small>
    {% endif %}
    {% if theme.symlink %}
    <small class=\"hint--bottom\"  data-hint=\"{{ \"PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED\"|t }}\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    {% endif %}
    <small>{{ theme.version ? 'v' ~ theme.version }}</small>
    {% if isTestingRelease %}<span class=\"gpm-testing\">test release</span>{% endif %}
</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-{{  theme.icon }}\"></i>
    <table>
        {% if theme.version %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.VERSION\"|t }}:</td>
            <td class=\"double\">{{ theme.version }}</td>
        </tr>
        {% endif %}
        {% if theme.author %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.AUTHOR\"|t }}:</td>
                <td class=\"double\">
                    {% if theme.author.url %}
                        <a href=\"{{ theme.author.url }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ theme.author.name }}</a>
                    {% else %}
                        {{ theme.author.name }}
                    {% endif %}
                    {% if theme.author.email %}
                         - <a href=\"mailto:{{ theme.author.email }}\">{{ theme.author.email }}</a>
                    {% endif %}
                </td>
            </tr>
        {% endif %}
        {% if theme.homepage %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.HOMEPAGE\"|t }}:</td>
            <td class=\"double\"><a href=\"{{ theme.homepage }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ theme.homepage }}</a></td>
        </tr>
        {% endif %}
        {% if theme.demo %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.DEMO\"|t }}:</td>
            <td class=\"double\"><a href=\"{{ theme.demo }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ theme.demo }}</a></td>
        </tr>
        {% endif %}
        {% if theme.bugs %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.BUG_TRACKER\"|t }}:</td>
                <td class=\"double\"><a href=\"{{ theme.bugs }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ theme.bugs }}</a></td>
            </tr>
        {% endif %}
        {% if theme.keywords %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.KEYWORDS\"|t }}:</td>
                <td class=\"double\">
                   {{ theme.keywords|join(', ') }}
                </td>
            </tr>
        {% endif %}
        {% if theme.license %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.LICENSE\"|t }}:</td>
                {% if theme.license|starts_with('http') %}
                    <td class=\"double\"><a href=\"{{ theme.license }}\" target=\"_blank\">{{ theme.license }}</a></td>
                {% else %}
                    <td class=\"double\">{{ theme.license }}</td>
                {% endif %}
            </tr>
        {% endif %}
        {% if theme.description %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.DESCRIPTION\"|t }}:</td>
                <td class=\"double\">{{ theme.description_html|raw }}</td>
            </tr>
        {% endif %}

        {% if theme.readme or theme.homepage %}
            {% set readme_link = theme.readme ?: theme.docs|default(theme.homepage ~ '/blob/master/README.md') %}
            <tr>
                <td>{{ theme.readme ? \"PLUGIN_ADMIN.README\"|t : \"PLUGIN_ADMIN.DOCS\"|t }}:</td>
                <td class=\"double\"><a href=\"{{ readme_link }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ readme_link }}</a></td>
            </tr>
        {% endif %}

        {% if admin.gpm.findPackage(theme.slug, true).changelog %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.CHANGELOG\"|t }}:</td>
            <td class=\"double\"><a class=\"button button-small\" href=\"#\" data-remodal-target=\"changelog\" data-remodal-changelog=\"{{ admin_route('/changelog/slug:' ~ theme.slug) }}\"><i class=\"fa fa-binoculars\"></i> View Changelog</a></td>
        </tr>
        {% endif %}
    </table>
</div>

{% if installed %}
  {% if state == 'active' %}
    {% set data = admin.data('themes/' ~ admin.route) %}
    {% include 'partials/blueprints.html.twig' with { data: data, blueprints: data.blueprints } %}
  {% else %}
    <div class=\"theme\" data-gpm-theme=\"{{ theme.slug }}\" data-gpm-name=\"{{ theme.name }}\">
      <div style=\"display:none;\" class=\"gpm-name\"><a>{{ theme.name }}</a></div>
      <form>
        <div class=\"form-field grid\">
          <div class=\"form-label block size-1-3\">
            <label>{{ \"PLUGIN_ADMIN.ACTIVATION_REQUIRED\"|t }}</label>
          </div>
          <div class=\"form-data block size-2-3\">
            <a class=\"button gpm-actions\" data-remodal-target=\"theme-switch-warn\" href=\"{{ uri.addNonce(base_url_relative ~ '/themes/' ~ theme.slug ~ '/task' ~ config.system.param_sep ~ 'activate', 'admin-form', 'admin-nonce') }}\">
              <i class=\"fa fa-power-off\" aria-hidden=\"true\"></i> {{ \"PLUGIN_ADMIN.ACTIVATE\"|t }} <strong>{{ theme.name }}</strong>
            </a>
          </div>
        </div>
      </form>
    </div>

    <div class=\"button-bar danger\">
      <span class=\"danger-zone\"></span>
      {% if not theme.symlink %}
          <a class=\"button button-reinstall-package hidden\" href=\"#\" data-remodal-target=\"reinstall-package\"><i class=\"fa fa-fw fa-repeat\"></i> {{ \"PLUGIN_ADMIN.REINSTALL_THEME\"|t }}</a>
      {% endif %}
      <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> {{ \"PLUGIN_ADMIN.REMOVE_THEME\"|t }}</a>
    </div>
  {% endif %}
{% else %}
    <div class=\"button-bar success\">
        {% if (theme.premium and not admin.license(theme.slug)) %}
            {% if not gumroad_loaded %}
                {% set gumroad_loaded = true %}
                <script src=\"//gumroad.com/js/gumroad.js\"></script>
            {% endif %}
            <a class=\"gumroad-button button\" href=\"https://gum.co/{{ theme.premium.permalink }}\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> {{ theme.premium.button|default('Purchase') }}</a>
        {% else %}
            <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"{{ theme.slug }}\" data-theme-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.INSTALL_THEME\"|t }}</a>
        {% endif %}
    </div>
{% endif %}

{% include 'partials/modal-switch-theme.html.twig' with {theme_name: theme.name} %}
{% include 'partials/modal-changes-detected.html.twig' %}
{% include 'partials/modal-add-package.html.twig' with { type: 'theme' } %}
{% include 'partials/modal-update-packages.html.twig' with { type: 'theme' } %}
{% include 'partials/modal-remove-package.html.twig' with { type: 'theme', package: theme } %}
{% include 'partials/modal-reinstall-package.html.twig' with { type: 'theme', package: theme } %}
{% include 'partials/modal-changelog.html.twig' with { package: theme} %}
", "partials/themes-details.html.twig", "/var/www/html/grav/grav-theme-solarize/user/plugins/admin/themes/grav/templates/partials/themes-details.html.twig");
    }
}
