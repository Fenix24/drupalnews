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

/* @help_topics/core.maintenance.html.twig */
class __TwigTemplate_f90d24f05c869bbee6a2bdf7ee5dcb385404a8279db97c5c628fc2dc5312bc42 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["trans" => 12];
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
        // line 12
        echo "<h2>";
        echo t("Maintaining and troubleshooting overview", array());
        echo "</h2>
<p>";
        // line 13
        echo t("Here are some tasks and hints related to maintaining your site, and troubleshooting problems that may come up on your site. See the related topics below for more information.", array());
        echo "</p>
<ul>
  <li>";
        // line 15
        echo t("When performing maintenance, such as installing, uninstalling, or upgrading a module, put your site in maintenance mode.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("Configure your site so that cron runs periodically.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("If your site is not behaving as expected, clear the cache before trying to diagnose the problem.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("There are several site reports that can help you diagnose problems with your site. There are also two core modules that can be used for error logging: Database Logging and Syslog.", array());
        echo "</li>
</ul>
<h2>";
        // line 20
        echo t("Additional resources", array());
        echo "</h2>
<ul>
    <li>";
        // line 22
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/prevent-chapter.html\">Preventing and Fixing Problems chapter in the User Guide</a>", array());
        echo "</li>
    <li>";
        // line 23
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/security-chapter.html\">Security and Maintenance chapter in the User Guide</a>", array());
        echo "</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@help_topics/core.maintenance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  87 => 22,  82 => 20,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  60 => 13,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/core.maintenance.html.twig", "/var/www/drupalnews-api/core/modules/help_topics/help_topics/core.maintenance.html.twig");
    }
}
