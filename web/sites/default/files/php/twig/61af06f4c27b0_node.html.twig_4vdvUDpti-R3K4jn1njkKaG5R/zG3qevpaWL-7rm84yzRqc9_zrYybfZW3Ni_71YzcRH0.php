<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/exam/templates/node.html.twig */
class __TwigTemplate_b6b671039336200c23c5f0dbc5bc29404e5e118dc2c92407cf3e312d6c6e7525 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        $context["classes"] = [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 70
($context["node"] ?? null), "bundle", [], "any", false, false, true, 70), 70, $this->source)), 1 => ((twig_get_attribute($this->env, $this->source,         // line 71
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 71)) ? ("is-promoted") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 72)) ? ("is-sticky") : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 73)) ? ("is-unpublished") : ("")), 4 => ((        // line 74
($context["view_mode"] ?? null)) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 74, $this->source))) : ("")), 5 => "clearfix"];
        // line 78
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 78), 78, $this->source), "html", null, true);
        echo ">



  ";
        // line 82
        if (($context["display_submitted"] ?? null)) {
            // line 83
            echo "    <footer>
      ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 84, $this->source), "html", null, true);
            echo "
      <div";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "author"], "method", false, false, true, 85), 85, $this->source), "html", null, true);
            echo ">
        ";
            // line 86
            echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 87
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 87, $this->source), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 91
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method", false, false, true, 91), 91, $this->source), "html", null, true);
        echo ">
    ";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 92, $this->source), "html", null, true);
        echo "
    ";
        // line 93
        if ((($context["label"] ?? null) && ($context["page"] ?? null))) {
            // line 94
            echo "      <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 94, $this->source), "html", null, true);
            echo ">
        <a href=\"";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 95, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 95, $this->source), "html", null, true);
            echo "</a>
      </h2>
    ";
        }
        // line 98
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 98, $this->source), "html", null, true);
        echo "
    ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 99, $this->source), "html", null, true);
        echo "


  </div>

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/exam/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 99,  101 => 98,  93 => 95,  88 => 94,  86 => 93,  82 => 92,  77 => 91,  69 => 87,  67 => 86,  63 => 85,  59 => 84,  56 => 83,  54 => 82,  46 => 78,  44 => 74,  43 => 73,  42 => 72,  41 => 71,  40 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @ingroup templates
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}
{%
  set classes = [
    node.bundle|clean_class,
    node.isPromoted() ? 'is-promoted',
    node.isSticky() ? 'is-sticky',
    not node.isPublished() ? 'is-unpublished',
    view_mode ? view_mode|clean_class,
    'clearfix',
  ]
%}
<article{{ attributes.addClass(classes) }}>



  {% if display_submitted %}
    <footer>
      {{ author_picture }}
      <div{{ author_attributes.addClass('author') }}>
        {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}
        {{ metadata }}
      </div>
    </footer>
  {% endif %}
  <div{{ content_attributes.addClass('content') }}>
    {{ title_prefix }}
    {% if label and page %}
      <h2{{ title_attributes }}>
        <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
      </h2>
    {% endif %}
    {{ title_suffix }}
    {{ content }}


  </div>

</article>
", "themes/custom/exam/templates/node.html.twig", "/var/www/web/themes/custom/exam/templates/node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 69, "if" => 82, "trans" => 86);
        static $filters = array("clean_class" => 70, "escape" => 78);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
