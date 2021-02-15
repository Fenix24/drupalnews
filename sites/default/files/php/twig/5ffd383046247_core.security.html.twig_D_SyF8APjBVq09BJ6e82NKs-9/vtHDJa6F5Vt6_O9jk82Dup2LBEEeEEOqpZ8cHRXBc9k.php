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

/* @help_topics/core.security.html.twig */
class __TwigTemplate_37b2d23d48365a57e49e30707da57e6470ac29c28ca3a65cf606565397138981 extends \Twig\Template
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
        echo t("What are security updates?", array());
        echo "</h2>
<p>";
        // line 6
        echo t("Any software occasionally has bugs, and sometimes these bugs have security implications. When security bugs are fixed in the core software, modules, or themes that your site uses, they are released in a <em>security update</em>. You will need to apply security updates in order to keep your site secure.", array());
        echo "</p>
<h2>";
        // line 7
        echo t("Security tasks", array());
        echo "</h2>
<p>";
        // line 8
        echo t("Keeping track of updates, updating the core software, and updating contributed modules and/or themes are all part of keeping your site secure. See the related topics listed below for specific tasks.", array());
        echo "</p>
<h2>";
        // line 9
        echo t("Additional resources", array());
        echo "</h2>
<ul>
    <li>";
        // line 11
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/security-chapter.html\">Security and Maintenance chapter in the User Guide</a>", array());
        echo "</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@help_topics/core.security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  55 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/core.security.html.twig", "/var/www/drupalnews-api/core/modules/help_topics/help_topics/core.security.html.twig");
    }
}
