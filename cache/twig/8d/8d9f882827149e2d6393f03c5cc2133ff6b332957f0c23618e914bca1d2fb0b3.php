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

/* partials/modal-reinstall-package.html.twig */
class __TwigTemplate_9d58cf1048df938bf38736ee52ee707d9e104ed2ad0828c10a216fc7ec60cb7d extends \Twig\Template
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
        echo "<div class=\"remodal\"
     data-remodal-id=\"reinstall-package\"
     data-remodal-options=\"hashTracking: false\">
    <form>
        <div class=\"reinstall-package-confirm\">
            <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.REINSTALL_THE", $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["type"] ?? null))))), "html", null, true);
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CONFIRM_REINSTALL", $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["type"] ?? null))))), "html", null, true);
        echo "
            </p>
            <p class=\"bigger hidden warning-reinstall-not-latest-release\">
                ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.WARNING_REINSTALL_NOT_LATEST_RELEASE"), "html", null, true);
        echo "
            </p>

            <div class=\"button-bar\">
                <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>

                <button data-";
        // line 17
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "-action=\"reinstall-package\"
                        data-package-slug=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["package"] ?? null), "slug", []), "html", null, true);
        echo "\"
                        data-package-type=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["package"] ?? null), "package_type", []), "html", null, true);
        echo "\"
                        data-package-name=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["package"] ?? null), "name", []), "html", null, true);
        echo "\"
                        data-package-current-version=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["package"] ?? null), "version", []), "html", null, true);
        echo "\"
                        class=\"button\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>

                <div class=\"spinning-wheel hidden\">
                    ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.INSTALLING"), "html", null, true);
        echo ".. <i class=\"fa fa-spinner fa-spin\"></i>
                </div>
            </div>
        </div>

        <div class=\"reinstall-package-done hidden\">
            <h1>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.REINSTALLED_SUCCESSFULLY", $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["type"] ?? null))))), "html", null, true);
        echo "</h1>
        </div>

        <div class=\"reinstall-package-error hidden\">
            <h1>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.ERROR_REINSTALLING_THE", $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ("PLUGIN_ADMIN." . twig_upper_filter($this->env, ($context["type"] ?? null))))), "html", null, true);
        echo "</h1>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/modal-reinstall-package.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 35,  95 => 31,  86 => 25,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  55 => 15,  48 => 11,  42 => 8,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"remodal\"
     data-remodal-id=\"reinstall-package\"
     data-remodal-options=\"hashTracking: false\">
    <form>
        <div class=\"reinstall-package-confirm\">
            <h1>{{ \"PLUGIN_ADMIN.REINSTALL_THE\"|t((\"PLUGIN_ADMIN.\" ~ type|upper)|t) }}</h1>
            <p class=\"bigger\">
                {{ \"PLUGIN_ADMIN.CONFIRM_REINSTALL\"|t((\"PLUGIN_ADMIN.\" ~ type|upper)|t) }}
            </p>
            <p class=\"bigger hidden warning-reinstall-not-latest-release\">
                {{ \"PLUGIN_ADMIN.WARNING_REINSTALL_NOT_LATEST_RELEASE\"|t }}
            </p>

            <div class=\"button-bar\">
                <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|t }}</button>

                <button data-{{ type }}-action=\"reinstall-package\"
                        data-package-slug=\"{{ package.slug }}\"
                        data-package-type=\"{{ package.package_type }}\"
                        data-package-name=\"{{ package.name }}\"
                        data-package-current-version=\"{{ package.version }}\"
                        class=\"button\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|t }}</button>

                <div class=\"spinning-wheel hidden\">
                    {{ \"PLUGIN_ADMIN.INSTALLING\"|t }}.. <i class=\"fa fa-spinner fa-spin\"></i>
                </div>
            </div>
        </div>

        <div class=\"reinstall-package-done hidden\">
            <h1>{{ \"PLUGIN_ADMIN.REINSTALLED_SUCCESSFULLY\"|t((\"PLUGIN_ADMIN.\" ~ type|upper)|t) }}</h1>
        </div>

        <div class=\"reinstall-package-error hidden\">
            <h1>{{ \"PLUGIN_ADMIN.ERROR_REINSTALLING_THE\"|t((\"PLUGIN_ADMIN.\" ~ type|upper)|t) }}</h1>
        </div>
    </form>
</div>
", "partials/modal-reinstall-package.html.twig", "/var/www/html/grav/grav-theme-solarize/user/plugins/admin/themes/grav/templates/partials/modal-reinstall-package.html.twig");
    }
}
