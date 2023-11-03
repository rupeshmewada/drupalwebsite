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

/* themes/custom/coffee/templates/page.html.twig */
class __TwigTemplate_11bc4efb5eba4c4c3618c8dc90042a59 extends Template
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
        // line 53
        echo "
   <div class=\"header_section header_bg\">
      <div class=\"container-fluid\">
         <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "
            <!-- <a class=\"navbar-brand\"href=\"index.html\"><img src=\"images/logo.png\"></a> -->
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
               aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
               <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
               ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
               <!-- <ul class=\"navbar-nav ml-auto\">
                         <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"index.html\">Home</a>
                         </li>
                         <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"about.html\">About</a>
                         </li>
                         <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"coffees.html\">Coffees</a>
                         </li>
                         <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"shop.html\">Shop</a>
                         </li>
                         <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"blog.html\">Blog</a>
                         </li>
                         <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                         </li>
                      </ul> -->
               <form class=\"form-inline my-2 my-lg-0\">
                  <div class=\"login_bt\">
                     ";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "
                     <!-- <ul>
                               <li><a href=\"#\"><span class=\"user_icon\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i></span>Login</a></li>
                               <li><a href=\"#\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>
                            </ul> -->
                  </div>
               </form>
            </div>
         </nav>
      </div>
   </div>
   <!-- header section end -->

   <!-- content section start  -->
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-md-12\">
            ";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
        echo "
         </div>
      </div>
   </div>
   <!-- content section end  -->

   <!-- footer section start -->
   <div class=\"footer_section layout_padding\">
      <div class=\"container\">
         <div class=\"row\">
            ";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
        echo "
            <!-- <div class=\"col-md-12\">
                      <h1 class=\"address_text\">Address</h1>
                      <p class=\"footer_text\">here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use </p>
                      <div class=\"location_text\">
                         <ul>
                            <li>
                               <a href=\"#\">
                               <i class=\"fa fa-phone\" aria-hidden=\"true\"></i><span class=\"padding_left_10\">+01 1234567890</span>
                               </a>
                            </li>
                            <li>
                               <a href=\"#\">
                               <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i><span class=\"padding_left_10\">demo@gmail.com</span>
                               </a>
                            </li>
                         </ul>
                      </div>
                      <div class=\"form-group\">
                         <textarea class=\"update_mail\" placeholder=\"Your Email\" rows=\"5\" id=\"comment\" name=\"Your Email\"></textarea>
                         <div class=\"subscribe_bt\"><a href=\"#\"><img src=\"images/teligram-icon.png\"></a></div>
                      </div>
                   </div> -->
         </div>
      </div>
   </div>
   <!-- footer section end -->

   <!-- copyright section start -->
   <div class=\"copyright_section\">
      <div class=\"container\">
         <div class=\"row\">
            ";
        // line 146
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "copyright_first", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
        echo "
            <!-- <div class=\"col-lg-6 col-sm-12\">
                      <p class=\"copyright_text\">2020 All Rights Reserved. Design by <a href=\"https://html.design\">Free Html Templates</a></p>
                   </div> -->
            <div class=\"col-lg-6 col-sm-12\">
               ";
        // line 151
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "copyright_second", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
        echo "
               <!-- <div class=\"footer_social_icon\">
                         <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                         </ul>
                      </div> -->
            </div>
         </div>
      </div>
   </div>
   <!-- copyright section end -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/coffee/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 151,  149 => 146,  114 => 114,  101 => 104,  81 => 87,  55 => 64,  45 => 57,  39 => 53,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Bartik's theme implementation to display a single page.
*
* The doctype, html, head and body tags are not in this template. Instead they
* can be found in the html.html.twig template normally located in the
* core/modules/system directory.
*
* Available variables:
*
* General utility variables:
* - base_path: The base URL path of the Drupal installation. Will usually be
* \"/\" unless you have installed Drupal in a sub-directory.
* - is_front: A flag indicating if the current page is the front page.
* - logged_in: A flag indicating if the user is registered and signed in.
* - is_admin: A flag indicating if the user has permission to access
* administration pages.
*
* Site identity:
* - front_page: The URL of the front page. Use this instead of base_path when
* linking to the front page. This includes the language domain or prefix.
*
* Page content (in order of occurrence in the default page.html.twig):
* - node: Fully loaded node, if there is an automatically-loaded node
* associated with the page and the node ID is the second argument in the
* page's path (e.g. node/12345 and node/12345/revisions, but not
* comment/reply/12345).
*
* Regions:
* - page.header: Items for the header region.
* - page.highlighted: Items for the highlighted region.
* - page.primary_menu: Items for the primary menu region.
* - page.secondary_menu: Items for the secondary menu region.
* - page.featured_top: Items for the featured top region.
* - page.content: The main content of the current page.
* - page.sidebar_first: Items for the first sidebar.
* - page.sidebar_second: Items for the second sidebar.
* - page.featured_bottom_first: Items for the first featured bottom region.
* - page.featured_bottom_second: Items for the second featured bottom region.
* - page.featured_bottom_third: Items for the third featured bottom region.
* - page.footer_first: Items for the first footer column.
* - page.footer_second: Items for the second footer column.
* - page.footer_third: Items for the third footer column.
* - page.footer_fourth: Items for the fourth footer column.
* - page.footer_fifth: Items for the fifth footer column.
* - page.breadcrumb: Items for the breadcrumb region.
*
* @see template_preprocess_page()
* @see html.html.twig
*/
#}

   <div class=\"header_section header_bg\">
      <div class=\"container-fluid\">
         <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            {{ page.logo }}
            <!-- <a class=\"navbar-brand\"href=\"index.html\"><img src=\"images/logo.png\"></a> -->
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
               aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
               <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
               {{ page.primary_menu }}
               <!-- <ul class=\"navbar-nav ml-auto\">
                         <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"index.html\">Home</a>
                         </li>
                         <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"about.html\">About</a>
                         </li>
                         <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"coffees.html\">Coffees</a>
                         </li>
                         <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"shop.html\">Shop</a>
                         </li>
                         <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"blog.html\">Blog</a>
                         </li>
                         <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                         </li>
                      </ul> -->
               <form class=\"form-inline my-2 my-lg-0\">
                  <div class=\"login_bt\">
                     {{ page.secondary_menu }}
                     <!-- <ul>
                               <li><a href=\"#\"><span class=\"user_icon\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i></span>Login</a></li>
                               <li><a href=\"#\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>
                            </ul> -->
                  </div>
               </form>
            </div>
         </nav>
      </div>
   </div>
   <!-- header section end -->

   <!-- content section start  -->
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-md-12\">
            {{ page.content }}
         </div>
      </div>
   </div>
   <!-- content section end  -->

   <!-- footer section start -->
   <div class=\"footer_section layout_padding\">
      <div class=\"container\">
         <div class=\"row\">
            {{ page.footer }}
            <!-- <div class=\"col-md-12\">
                      <h1 class=\"address_text\">Address</h1>
                      <p class=\"footer_text\">here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use </p>
                      <div class=\"location_text\">
                         <ul>
                            <li>
                               <a href=\"#\">
                               <i class=\"fa fa-phone\" aria-hidden=\"true\"></i><span class=\"padding_left_10\">+01 1234567890</span>
                               </a>
                            </li>
                            <li>
                               <a href=\"#\">
                               <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i><span class=\"padding_left_10\">demo@gmail.com</span>
                               </a>
                            </li>
                         </ul>
                      </div>
                      <div class=\"form-group\">
                         <textarea class=\"update_mail\" placeholder=\"Your Email\" rows=\"5\" id=\"comment\" name=\"Your Email\"></textarea>
                         <div class=\"subscribe_bt\"><a href=\"#\"><img src=\"images/teligram-icon.png\"></a></div>
                      </div>
                   </div> -->
         </div>
      </div>
   </div>
   <!-- footer section end -->

   <!-- copyright section start -->
   <div class=\"copyright_section\">
      <div class=\"container\">
         <div class=\"row\">
            {{ page.copyright_first}}
            <!-- <div class=\"col-lg-6 col-sm-12\">
                      <p class=\"copyright_text\">2020 All Rights Reserved. Design by <a href=\"https://html.design\">Free Html Templates</a></p>
                   </div> -->
            <div class=\"col-lg-6 col-sm-12\">
               {{ page.copyright_second}}
               <!-- <div class=\"footer_social_icon\">
                         <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                         </ul>
                      </div> -->
            </div>
         </div>
      </div>
   </div>
   <!-- copyright section end -->", "themes/custom/coffee/templates/page.html.twig", "/var/www/html/website/web/themes/custom/coffee/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 57);
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
