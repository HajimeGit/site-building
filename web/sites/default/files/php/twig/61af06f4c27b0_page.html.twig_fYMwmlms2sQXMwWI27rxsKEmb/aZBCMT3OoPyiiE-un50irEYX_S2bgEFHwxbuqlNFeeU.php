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

/* themes/custom/exam/templates/page.html.twig */
class __TwigTemplate_b4759cf9d129ee27b028de0ab012ae370ce42b631c171e0c764a849aa6cb7715 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 54), "fluid_container", [], "any", false, false, true, 54)) ? ("container") : ("container"));
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 56) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 56))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 96
        echo "
";
        // line 98
        $this->displayBlock('main', $context, $blocks);
        // line 159
        echo "
";
        // line 160
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 160)) {
            // line 161
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 57
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["theme"] ?? null), "settings", [], "any", false, false, true, 61), "navbar_inverse", [], "any", false, false, true, 61)) ? ("navbar-inverse") : ("navbar-default"))];
        // line 64
        echo "    <header";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 64), 64, $this->source), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 65
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 65)) {
            // line 66
            echo "      <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 66, $this->source), "html", null, true);
            echo " header-body\">
        ";
        }
        // line 68
        echo "        <div class=\"navbar-header\">
          ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "
          ";
        // line 71
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 71)) {
            // line 72
            echo "            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
              <span class=\"sr-only\">";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
          ";
        }
        // line 79
        echo "
        </div>


        ";
        // line 84
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 84)) {
            // line 85
            echo "          <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
            ";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 89
        echo "        ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 89)) {
            // line 90
            echo "      </div>
      ";
        }
        // line 92
        echo "      <div class=\"header-text container\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_text", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "</div>
    </header>
  ";
    }

    // line 98
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "  <div role=\"main\" class=\"main-container container js-quickedit-main-content\">
    <div>

      ";
        // line 103
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 103)) {
            // line 104
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 109
            echo "      ";
        }
        // line 110
        echo "
      ";
        // line 112
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 112)) {
            // line 113
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 118
            echo "      ";
        }
        // line 119
        echo "
      ";
        // line 121
        echo "      ";
        // line 122
        $context["content_classes"] = [];
        // line 125
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 125), 125, $this->source), "html", null, true);
        echo ">

        ";
        // line 128
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 128)) {
            // line 129
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 132
            echo "        ";
        }
        // line 133
        echo "
        ";
        // line 135
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 135)) {
            // line 136
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 139
            echo "        ";
        }
        // line 140
        echo "
        ";
        // line 142
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 146
        echo "      </section>

      ";
        // line 149
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 149)) {
            // line 150
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 155
            echo "      ";
        }
        // line 156
        echo "    </div>
  </div>
";
    }

    // line 104
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 113
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 129
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 136
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 142
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "          <a id=\"main-content\"></a>
          ";
        // line 144
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 150
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 152
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 161
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        echo "    <footer class=\"footer\" role=\"contentinfo\">
      ";
        // line 163
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/exam/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 163,  319 => 162,  315 => 161,  308 => 152,  305 => 151,  301 => 150,  295 => 144,  292 => 143,  288 => 142,  281 => 137,  277 => 136,  270 => 130,  266 => 129,  259 => 115,  256 => 114,  252 => 113,  245 => 106,  242 => 105,  238 => 104,  232 => 156,  229 => 155,  226 => 150,  223 => 149,  219 => 146,  216 => 142,  213 => 140,  210 => 139,  207 => 136,  204 => 135,  201 => 133,  198 => 132,  195 => 129,  192 => 128,  186 => 125,  184 => 122,  182 => 121,  179 => 119,  176 => 118,  173 => 113,  170 => 112,  167 => 110,  164 => 109,  161 => 104,  158 => 103,  153 => 99,  149 => 98,  141 => 92,  137 => 90,  134 => 89,  128 => 86,  125 => 85,  122 => 84,  116 => 79,  107 => 73,  104 => 72,  101 => 71,  97 => 69,  94 => 68,  88 => 66,  86 => 65,  81 => 64,  79 => 61,  78 => 59,  76 => 58,  72 => 57,  66 => 161,  64 => 160,  61 => 159,  59 => 98,  56 => 96,  52 => 57,  50 => 56,  48 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
      'navbar',
      theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
    ]
    %}
    <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
      {% if not navbar_attributes.hasClass(container) %}
      <div class=\"{{ container }} header-body\">
        {% endif %}
        <div class=\"navbar-header\">
          {{ page.navigation }}
          {# .btn-navbar is used as the toggle for collapsed navbar content #}
          {% if page.navigation_collapsible %}
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
              <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
          {% endif %}

        </div>


        {# Navigation (collapsible) #}
        {% if page.navigation_collapsible %}
          <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
            {{ page.navigation_collapsible }}
          </div>
        {% endif %}
        {% if not navbar_attributes.hasClass(container) %}
      </div>
      {% endif %}
      <div class=\"header-text container\">{{ page.header_text }}</div>
    </header>
  {% endblock %}
{% endif %}

{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container container js-quickedit-main-content\">
    <div>

      {# Header #}
      {% if page.header %}
        {% block header %}
          <div class=\"col-sm-12\" role=\"heading\">
            {{ page.header }}
          </div>
        {% endblock %}
      {% endif %}

      {# Sidebar First #}
      {% if page.sidebar_first %}
        {% block sidebar_first %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endblock %}
      {% endif %}

      {# Content #}
      {%
        set content_classes = [
      ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}
      </section>

      {# Sidebar Second #}
      {% if page.sidebar_second %}
        {% block sidebar_second %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endblock %}
      {% endif %}
    </div>
  </div>
{% endblock %}

{% if page.footer %}
  {% block footer %}
    <footer class=\"footer\" role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endblock %}
{% endif %}
", "themes/custom/exam/templates/page.html.twig", "/var/www/web/themes/custom/exam/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 54, "if" => 56, "block" => 57);
        static $filters = array("escape" => 64, "t" => 73);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 't'],
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
