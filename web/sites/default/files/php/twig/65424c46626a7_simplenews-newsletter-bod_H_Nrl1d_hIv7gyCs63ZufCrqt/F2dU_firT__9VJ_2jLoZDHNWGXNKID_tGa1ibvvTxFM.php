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

/* modules/contrib/simplenews/templates/simplenews-newsletter-body.html.twig */
class __TwigTemplate_21d1d1ff8e82ce0acf92034edc06f99a extends Template
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
        // line 45
        echo "
<h2>";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 46, $this->source), "html", null, true);
        echo "</h2>
";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["build"] ?? null), 47, $this->source), "html", null, true);
        echo "

";
        // line 49
        if ((($context["format"] ?? null) == "html")) {
            // line 50
            echo "  ";
            if ((($context["reason"] ?? null) || ($context["unsubscribe_text"] ?? null))) {
                // line 51
                echo "    <p class=\"newsletter-footer\">
      ";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["reason"] ?? null), 52, $this->source), "html", null, true);
                echo "
      ";
                // line 53
                if (($context["unsubscribe_text"] ?? null)) {
                    // line 54
                    echo "        <a href=\"[simplenews-subscriber:unsubscribe-url]\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["unsubscribe_text"] ?? null), 54, $this->source), "html", null, true);
                    echo "</a>
      ";
                }
                // line 56
                echo "    </p>
  ";
            }
            // line 58
            echo "  ";
            if (($context["test_message"] ?? null)) {
                // line 59
                echo "    <p class=\"simplenews-test-message\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["test_message"] ?? null), 59, $this->source), "html", null, true);
                echo "</p>
  ";
            }
        } else {
            // line 62
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["reason"] ?? null), 62, $this->source), "html", null, true);
            echo "
  ";
            // line 63
            if (($context["unsubscribe_text"] ?? null)) {
                // line 64
                echo "    -- ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["unsubscribe_text"] ?? null), 64, $this->source), "html", null, true);
                echo " : [simplenews-subscriber:unsubscribe-url]
  ";
            }
            // line 66
            echo "  ";
            if (($context["test_message"] ?? null)) {
                // line 67
                echo "    - - - ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["test_message"] ?? null), 67, $this->source), "html", null, true);
                echo " - - -
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/simplenews/templates/simplenews-newsletter-body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 67,  98 => 66,  92 => 64,  90 => 63,  85 => 62,  78 => 59,  75 => 58,  71 => 56,  65 => 54,  63 => 53,  59 => 52,  56 => 51,  53 => 50,  51 => 49,  46 => 47,  42 => 46,  39 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to format the simplenews newsletter body.
 *
 * Copy this file in your theme directory to create a custom themed body.
 * Rename it to override it. Available templates:
 *   simplenews-newsletter-body--[newsletter_id].html.twig
 *   simplenews-newsletter-body--[view mode].html.twig
 *   simplenews-newsletter-body--[newsletter_id]--[view mode].html.twig
 * See README.txt for more details.
 *
 * Available variables:
 * - title: Node title
 * - build: The rendered newsletter issue entity.
 * - reason: (optional) Translated text explaining why the subscriber is
 *   receiving this newsletter.
 * - unsubscribe_text: (optional) Translated text to describe the subscribe
 *   link, which is available as [simplenews-subscriber:unsubscribe-url]. If
 *   this variable isn't set then the link is likely to be unavailable.
 * - test_message: (optional) Translated text that if set describes that this
 *   is a test version of the newsletter
 * - format: newsletter format [plain|html]
 * - newsletter: object(Drupal\\simplenews\\Entity\\Newsletter)
 *     {{ newsletter.from_name }}: string
 *     {{ newsletter.subject }}: string
 *
 * Less recommended variables that normally shouldn't be needed:
 * - node: The issue entity that was rendered to create {{ build }}, hence
 *   shouldn't normally need to be accessed again. There is limited access to
 *   object properties and methods.
 * - view_mode: The active display view mode of the node
 * - key: email key [node|test|extra]
 * - simplenews_subscriber: object(Drupal\\simplenews\\Entity\\Subscriber)
 *   The subscriber for which the newsletter is built.
 *     {{ simplenews_subscriber.getMail  }}: string: subscriber's email address
 *   Note that depending on the used caching strategy, the generated body might
 *   be used for multiple subscribers. If you created personalized newsletters
 *   and can't use tokens for that, make sure to disable caching or write a
 *   custom caching strategy implementation.
 *
 * @see template_preprocess_simplenews_newsletter_body()
 */
#}

<h2>{{ title }}</h2>
{{ build }}

{% if format == 'html' %}
  {% if reason or unsubscribe_text %}
    <p class=\"newsletter-footer\">
      {{ reason }}
      {% if unsubscribe_text %}
        <a href=\"[simplenews-subscriber:unsubscribe-url]\">{{ unsubscribe_text }}</a>
      {% endif %}
    </p>
  {% endif %}
  {% if test_message %}
    <p class=\"simplenews-test-message\">{{ test_message }}</p>
  {% endif %}
{% else %}
  {{ reason }}
  {% if unsubscribe_text %}
    -- {{ unsubscribe_text }} : [simplenews-subscriber:unsubscribe-url]
  {% endif %}
  {% if test_message %}
    - - - {{ test_message }} - - -
  {% endif %}
{% endif %}
", "modules/contrib/simplenews/templates/simplenews-newsletter-body.html.twig", "/var/www/html/website/web/modules/contrib/simplenews/templates/simplenews-newsletter-body.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 49);
        static $filters = array("escape" => 46);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
