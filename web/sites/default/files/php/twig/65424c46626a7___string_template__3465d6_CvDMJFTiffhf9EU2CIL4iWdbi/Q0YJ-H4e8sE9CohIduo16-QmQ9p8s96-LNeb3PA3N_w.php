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

/* __string_template__3465d6936a5b76c36d946363bd1adb30 */
class __TwigTemplate_5110dd0a498e5f6b76581028cd3fbf82 extends Template
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
        // line 1
        echo "<div class=\"carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"banner_img\">";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_slider_image"] ?? null), 4, $this->source), "html", null, true);
        echo "</div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"banner_taital_main\">
                                     ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 8, $this->source), "html", null, true);
        echo " 
                                    </div>
                                </div>
                            </div>
                        </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__3465d6936a5b76c36d946363bd1adb30";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"banner_img\">{{ field_slider_image }}</div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"banner_taital_main\">
                                     {{ body }} 
                                    </div>
                                </div>
                            </div>
                        </div>", "__string_template__3465d6936a5b76c36d946363bd1adb30", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
