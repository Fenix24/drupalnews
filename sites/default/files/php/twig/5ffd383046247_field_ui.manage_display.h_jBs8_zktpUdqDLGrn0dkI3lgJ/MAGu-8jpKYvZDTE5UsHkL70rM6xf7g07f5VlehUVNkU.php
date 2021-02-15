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

/* @help_topics/field_ui.manage_display.html.twig */
class __TwigTemplate_5d67664a5c1f067054c2b9052364c9f2606fe0aa583cd2db3172d588fcde5b56 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 9, "trans" => 11];
        $filters = ["escape" => 12];
        $functions = ["render_var" => 9, "url" => 9];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'url']
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
        // line 9
        $context["content_types"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.node_type.collection"));
        // line 10
        $context["content_structure"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("help.help_topic", ["id" => "core.content_structure"]));
        // line 11
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 12
        echo t("Configure the <em>formatters</em> used to display the fields of an entity sub-type, their order in the display, and the formatter settings. See <a href=\"@content_structure\">Managing content structure</a> for background information.", array("@content_structure" => ($context["content_structure"] ?? null), ));
        echo "</p>
<h2>";
        // line 13
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 15
        echo t("Navigate to the page for managing the entity type you want to add the field to. For example, to add a field to a content type, in the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <a href=\"@content_types\"><em>Content types</em></a>.", array("@content_types" => ($context["content_types"] ?? null), ));
        echo "</li>
  <li>";
        // line 16
        echo t("Find the particular sub-type that you want to configure the display of, and click <em>Manage display</em> in the <em>Operations</em> list.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("Use the drag arrows to order the fields in your preferred order.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("Drag any fields that you do not wish to see in the display to the <em>Disabled</em> section.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("In the <em>Label</em> column, select the position for each field label in the display, or <em>- Hidden -</em> to hide a label. You can also choose <em>- Visually Hidden-</em> if you want the label's text to appear in the HTML page, so that screen readers and search engines can read it, but it will not be visible.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("In the <em>Format</em> column, select the formatter for displaying each field.", array());
        echo "</li>
  <li>";
        // line 21
        echo t("After selecting the desired formatters, click the settings gear in each row to change the settings for the formatter.", array());
        echo "</li>
  <li>";
        // line 22
        echo t("When you are done making changes, click <em>Save</em>.", array());
        echo "</li>
  <li>";
        // line 23
        echo t("Test the display for your entity sub-type by viewing an entity. If needed, return to these steps to further refine the display.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/field_ui.manage_display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 23,  101 => 22,  97 => 21,  93 => 20,  89 => 19,  85 => 18,  81 => 17,  77 => 16,  73 => 15,  68 => 13,  64 => 12,  59 => 11,  57 => 10,  55 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/field_ui.manage_display.html.twig", "/var/www/drupalnews-api/core/modules/help_topics/help_topics/field_ui.manage_display.html.twig");
    }
}
