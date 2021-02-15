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

/* @help_topics/block_content.add.html.twig */
class __TwigTemplate_8180e41b90ed64715d805a614d25cdca0d91b0e07e4c7ae137c0f5484af92fef extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 9, "trans" => 10];
        $filters = ["escape" => 14];
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
        $context["content_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.block_content.collection"));
        // line 10
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 11
        echo t("Create a custom block, which can later be placed on the site.", array());
        echo "</p>
<h2>";
        // line 12
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 14
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>Block layout</em> &gt; <a href=\"@content_url\"><em>Custom block library</em></a>.", array("@content_url" => ($context["content_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 15
        echo t("Click  <em>Add custom block</em>. If you have more than one custom block type defined on your site, click the name of the type you want to create.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("Enter a description of your block (to be shown to administrators) and the body text for your block.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("Click <em>Save</em>.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/block_content.add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  79 => 16,  75 => 15,  71 => 14,  66 => 12,  62 => 11,  57 => 10,  55 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/block_content.add.html.twig", "/var/www/drupalnews-api/core/modules/help_topics/help_topics/block_content.add.html.twig");
    }
}
