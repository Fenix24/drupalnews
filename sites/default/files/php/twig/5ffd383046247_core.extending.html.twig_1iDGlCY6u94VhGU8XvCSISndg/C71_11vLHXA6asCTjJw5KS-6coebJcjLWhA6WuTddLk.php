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

/* @help_topics/core.extending.html.twig */
class __TwigTemplate_e221d3d6931d8abee2969e4ee91f06ad25cb1795912cd5ed0c426d26613ca71c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["trans" => 5];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 5
        echo "<h2>";
        echo t("What is a module?", array());
        echo "</h2>
<p>";
        // line 6
        echo t("A <em>module</em> is a set of PHP, JavaScript, and/or CSS files that extends site features and adds functionality. A set of <em>Core modules</em> is distributed as part of the core software download. Additional <em>Contributed modules</em> can be downloaded separately from the <a href=\"https://www.drupal.org/project/project_module\">Download &amp; Extend page on drupal.org</a>.", array());
        echo "</p>
<h2>";
        // line 7
        echo t("What is an Experimental module?", array());
        echo "</h2>
<p>";
        // line 8
        echo t("An <em>Experimental</em> module is a module that is still in development and is not yet stable. Using Experimental modules on production sites is not recommended.", array());
        echo "</p>
<h2>";
        // line 9
        echo t("What are installing and uninstalling?", array());
        echo "</h2>
<p>";
        // line 10
        echo t("Installing a core or downloaded contributed module means turning it on, so that you can use its features and functionality. Uninstalling means turning it off and removing all of its configuration. A module cannot be uninstalled if another installed module depends on it, or if you have created content on your site using the module -- you would need to delete the content and uninstall dependent modules first.", array());
        echo "</p>
<h2>";
        // line 11
        echo t("Extending overview", array());
        echo "</h2>
<p>";
        // line 12
        echo t("See the related topics listed below for help performing tasks related to extending the functionality of your site.", array());
        echo "</p>
<h2>";
        // line 13
        echo t("Additional resources", array());
        echo "</h2>
<ul>
    <li>";
        // line 15
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/understanding-modules.html\">Concept: Modules topic in the User Guide</a>", array());
        echo "</li>
    <li>";
        // line 16
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/extend-chapter.html\">Extending and customizing your site chapter in the User Guide</a>", array());
        echo "</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@help_topics/core.extending.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 16,  93 => 15,  88 => 13,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  55 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/core.extending.html.twig", "/var/www/drupalnews-api/core/modules/help_topics/help_topics/core.extending.html.twig");
    }
}
