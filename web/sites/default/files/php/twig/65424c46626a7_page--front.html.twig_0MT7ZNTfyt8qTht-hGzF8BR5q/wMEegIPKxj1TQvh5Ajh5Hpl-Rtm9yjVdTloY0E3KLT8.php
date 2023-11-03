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

/* themes/custom/coffee/templates/page--front.html.twig */
class __TwigTemplate_88bab3a9515b84f902bf0686e7deb777 extends Template
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
        // line 54
        echo "
<body>
    <div class=\"header_section\">
        <div class=\"container-fluid\">
            <nav class=\"navbar 
            navbar-expand-lg navbar-light bg-light\">
                ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
                <!-- <a class=\"navbar-brand\"href=\"index.html\"><img src=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "/themes/custom/coffee/images/logo.png\"></a> -->
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav ml-auto\">
                        ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "
                        <!-- <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"index.html\">Home</a>
                     </li>
                     <li class=\"nav-item\">
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
                     </li> -->
                    </ul>
                    <form class=\"form-inline my-2 my-lg-0\">
                        <div class=\"login_bt\">
                            ";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
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

        <!-- banner section start -->
        <div class=\"banner_section layout_padding\">
            <div class=\"container\">
                ";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider1", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
        echo "
                <!-- <div id=\"banner_slider\" class=\"carousel slide\" data-ride=\"carousel\">
                    <div class=\"carousel-inner\">

                        <div class=\"carousel-item active\">

                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"banner_img\"><img src=\"images/banner-img.png\"></div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"banner_taital_main\">

                                        <h1 class=\"banner_taital\">coffee</h1>
                                        <h5 class=\"tasty_text\">Tasty Of DozeCafe</h5>
                                        <p class=\"banner_text\">more-or-less normal distribution of letters, as opposed
                                            to using </p>
                                        <div class=\"btn_main\">
                                            <div class=\"about_bt\"><a href=\"#\">About Us</a></div>
                                            <div class=\"callnow_bt active\"><a href=\"#\">Call Now</a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"banner_img\"><img src=\"images/banner-img.png\"></div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"banner_taital_main\">
                                        <h1 class=\"banner_taital\">coffee</h1>
                                        <h5 class=\"tasty_text\">Tasty Of DozeCafe</h5>
                                        <p class=\"banner_text\">more-or-less normal distribution of letters, as opposed
                                            to using </p>
                                        <div class=\"btn_main\">
                                            <div class=\"about_bt\"><a href=\"#\">About Us</a></div>
                                            <div class=\"callnow_bt active\"><a href=\"#\">Call Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"banner_img\"><img src=\"images/banner-img.png\"></div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"banner_taital_main\">
                                        <h1 class=\"banner_taital\">coffee</h1>
                                        <h5 class=\"tasty_text\">Tasty Of DozeCafe</h5>
                                        <p class=\"banner_text\">more-or-less normal distribution of letters, as opposed
                                            to using </p>
                                        <div class=\"btn_main\">
                                            <div class=\"about_bt\"><a href=\"#\">About Us</a></div>
                                            <div class=\"callnow_bt active\"><a href=\"#\">Call Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#banner_slider\" role=\"button\" data-slide=\"prev\">
                        <i class=\"fa fa-arrow-left\"></i>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#banner_slider\" role=\"button\" data-slide=\"next\">
                        <i class=\"fa fa-arrow-right\"></i>
                    </a>
                </div> -->

            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->
    
    <!-- coffee section start -->
    <div class=\"coffee_section layout_padding\">
        <div class=\"container\">
            ";
        // line 188
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "our_coffee", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
        echo "
            <!-- <div class=\"row\">
                <h1 class=\"coffee_taital\">OUR Coffee OFFER</h1>
                <div class=\"bulit_icon\"><img src=\"images/bulit-icon.png\"></div>
            </div> -->
        </div>
        <div class=\"coffee_section_2\">
            ";
        // line 195
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider2", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
        echo "
            <!-- <div id=\"main_slider\" class=\"carousel slide\" data-ride=\"carousel\"> -->

                <!-- <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-1.png\"></div>
                                    <h3 class=\"types_text\">TYPES OF COFFEE</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-2.png\"></div>
                                    <h3 class=\"types_text\">BEAN VARIETIES</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-3.png\"></div>
                                    <h3 class=\"types_text\">COFFEE & PASTRY</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-4.png\"></div>
                                    <h3 class=\"types_text\">COFFEE TO GO</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-1.png\"></div>
                                    <h3 class=\"types_text\">TYPES OF COFFEE</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-2.png\"></div>
                                    <h3 class=\"types_text\">BEAN VARIETIES</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-3.png\"></div>
                                    <h3 class=\"types_text\">COFFEE & PASTRY</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-4.png\"></div>
                                    <h3 class=\"types_text\">COFFEE TO GO</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-1.png\"></div>
                                    <h3 class=\"types_text\">TYPES OF COFFEE</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-2.png\"></div>
                                    <h3 class=\"types_text\">BEAN VARIETIES</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-3.png\"></div>
                                    <h3 class=\"types_text\">COFFEE & PASTRY</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-4.png\"></div>
                                    <h3 class=\"types_text\">COFFEE TO GO</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <a class=\"carousel-control-prev\" href=\"#main_slider\" role=\"button\" data-slide=\"prev\">
                    <i class=\"fa fa-arrow-left\"></i>
                </a>
                <a class=\"carousel-control-next\" href=\"#main_slider\" role=\"button\" data-slide=\"next\">
                    <i class=\"fa fa-arrow-right\"></i>
                </a>
            </div> -->
        </div>
    </div>
    <!-- coffee section end -->

    <!-- about section start -->
    <div class=\"about_section layout_padding\">
        <div class=\"container\">
            ";
        // line 304
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about_head", [], "any", false, false, true, 304), 304, $this->source), "html", null, true);
        echo "
            <!-- <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1 class=\"about_taital\">About Our shop</h1>
                    <div class=\"bulit_icon\"><img src=\"images/bulit-icon.png\"></div>
                </div>
            </div> -->
            <div class=\"about_section_2 layout_padding\">
                ";
        // line 312
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about_our_shop", [], "any", false, false, true, 312), 312, $this->source), "html", null, true);
        echo "
                <!-- <div class=\"image_iman\"><img src=\"images/about-img.png\" class=\"about_img\"></div>
                <div class=\"about_taital_box\">
                    <h1 class=\"about_taital_1\">Coffee distribution '</h1>
                    <p class=\" about_text\">has a more-or-less normal distribution of letters, as opposed to using
                        'Content here, content here', making it look like readable English. Many desktop publishing
                        packages and web page editorhas a more-or-less normal distribution of letters, as opposed to
                        using 'Content here, content here', making it look like readable English. Many desktop
                        publishing packages and web page editor</p>
                    <div class=\"readmore_btn\"><a href=\"#\">Read More</a></div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- about section end -->

    <!-- client section start -->
    <div class=\"client_section layout_padding\">
        <div class=\"container\">
            <!-- ";
        // line 331
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "customer_head", [], "any", false, false, true, 331), 331, $this->source), "html", null, true);
        echo " -->
            <!-- <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1 class=\"about_taital\">What syas customers</h1>
                    <div class=\"bulit_icon\"><img src=\"images/bulit-icon.png\"></div>
                </div>
            </div> -->
            ";
        // line 338
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "customer", [], "any", false, false, true, 338), 338, $this->source), "html", null, true);
        echo "
            <!-- <div class=\"client_section_2\">

                <div class=\"client_taital_main\">
                    <div class=\"client_left\">
                        <div class=\"client_img\"><img src=\"images/client-img1.png\"></div>
                    </div>
                    <div class=\"client_right\">
                        <h3 class=\"moark_text\">Joy   Moark</h3>
                        <p class=\"client_text\">now use Lorem Ipsum as their default model text, and a search for 'lorem
                            ipsum' will uncover many web sites still in their infancynow use Lorem Ipsum as their
                            default model text, </p>
                    </div>
                </div>
                <div class=\"client_taital_main\">
                    <div class=\"client_left\">
                        <div class=\"client_img\"><img src=\"images/client-img2.png\"></div>
                    </div>
                    <div class=\"client_right\">
                        <h3 class=\"moark_text\">Mihacal</h3>
                        <p class=\"client_text\">now use Lorem Ipsum as their default model text, and a search for 'lorem
                            ipsum' will uncover many web sites still in their infancynow use Lorem Ipsum as their
                            default model text, </p>
                    </div>
                </div>
                <div class=\"client_taital_main\">
                    <div class=\"client_left\">
                        <div class=\"client_img\"><img src=\"images/client-img3.png\"></div>
                    </div>
                    <div class=\"client_right\">
                        <h3 class=\"moark_text\">Uliya den</h3>
                        <p class=\"client_text\">now use Lorem Ipsum as their default model text, and a search for 'lorem
                            ipsum' will uncover many web sites still in their infancynow use Lorem Ipsum as their
                            default model text, </p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- client section end -->

    <!-- blog section start -->
    <div class=\"blog_section layout_padding\">
        <div class=\"container\">
            ";
        // line 382
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "blog", [], "any", false, false, true, 382), 382, $this->source), "html", null, true);
        echo "
            <!-- ";
        // line 383
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "blog_head", [], "any", false, false, true, 383), 383, $this->source), "html", null, true);
        echo " -->
            <!-- <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1 class=\"about_taital\">Our Blog</h1>
                    <div class=\"bulit_icon\"><img src=\"images/bulit-icon.png\"></div>
                </div>
            </div> -->
            <!-- <div class=\"blog_section_2\">
                <div class=\"row\"> -->

                    <!-- <div class=\"col-md-6\">
                        <div class=\"blog_box\">
                            <div class=\"blog_img\"><img src=\"images/blog-img1.png\"></div>
                            <h4 class=\"date_text\">05 April</h4>
                            <h4 class=\"prep_text\">PREP TECHNIQUES Coffee</h4>
                            <p class=\"lorem_text\">distracted by the readable content of a page when looking at its
                                layout. The point of using Lorem Ipsum is that it has a moredistracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum is that it
                                has a more</p>
                        </div>
                        <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"blog_box\">
                            <div class=\"blog_img\"><img src=\"images/blog-img2.png\"></div>
                            <h4 class=\"date_text\">05 April</h4>
                            <h4 class=\"prep_text\">PREP TECHNIQUES Coffee</h4>
                            <p class=\"lorem_text\">distracted by the readable content of a page when looking at its
                                layout. The point of using Lorem Ipsum is that it has a moredistracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum is that it
                                has a more</p>
                        </div>
                        <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                    </div> -->
                <!-- </div>
            </div> -->
        </div>
    </div>
    <!-- blog section end -->
    <!-- contact section start -->
    <div class=\"contact_section layout_padding\">
        <div class=\"container\">
            ";
        // line 425
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "form_head", [], "any", false, false, true, 425), 425, $this->source), "html", null, true);
        echo "
            <!-- <div class=\"row\">
                <div class=\"col-sm-12\">
                    <h1 class=\"contact_taital\">Get In Touch</h1>
                    <div class=\"bulit_icon\"><img src=\"images/bulit-icon.png\"></div>
                </div>
            </div> -->
        </div>
        <div class=\"container-fluid\">
            <div class=\"contact_section_2\">
                <div class=\"row\">
                    <div class=\"col-md-12 myform\">
                        ";
        // line 437
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "form", [], "any", false, false, true, 437), 437, $this->source), "html", null, true);
        echo "
                        <!-- <div class=\"mail_section_1\">
                            <input type=\"text\" class=\"mail_text\" placeholder=\"Your Name\" name=\"Your Name\">
                            <input type=\"text\" class=\"mail_text\" placeholder=\"Your Email\" name=\"Your Email\">
                            <input type=\"text\" class=\"mail_text\" placeholder=\"Your Phone\" name=\"Your Phone\">
                            <textarea class=\"massage-bt\" placeholder=\"Massage\" rows=\"5\" id=\"comment\"
                                name=\"Massage\"></textarea>
                            <div class=\"send_bt\"><a href=\"#\">SEND</a></div>
                        </div> -->
                    </div>
                    <div class=\"map_main\">
                        ";
        // line 448
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "map", [], "any", false, false, true, 448), 448, $this->source), "html", null, true);
        echo "
                        <!-- <div class=\"map-responsive\">
                            <iframe
                                src=\"https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France\"
                                width=\"250\" height=\"500\" frameborder=\"0\" style=\"border:0; width: 100%;\"
                                allowfullscreen=\"\"></iframe>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->

    <!-- footer section start -->
    <div class=\"footer_section layout_padding\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 466
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 466), 466, $this->source), "html", null, true);
        echo "
                <!-- <div class=\"col-md-12\">
                    <h1 class=\"address_text\">Address</h1>
                    <p class=\"footer_text\">here, content here', making it look like readable English. Many desktop
                        publishing packages and web page editors now use </p>
                    <div class=\"location_text\">
                        <ul>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-phone\" aria-hidden=\"true\"></i><span class=\"padding_left_10\">+01
                                        1234567890</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i><span
                                        class=\"padding_left_10\">demo@gmail.com</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"form-group\">
                        <textarea class=\"update_mail\" placeholder=\"Your Email\" rows=\"5\" id=\"comment\"
                            name=\"Your Email\"></textarea>
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
                <div class=\"col-lg-6 col-sm-12\">
                    ";
        // line 502
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "copyright_first", [], "any", false, false, true, 502), 502, $this->source), "html", null, true);
        echo "
                    <!-- <p class=\"copyright_text\">2020 All Rights Reserved. Design by <a href=\"https://html.design\">Free
                            Html Templates</a></p> -->
                </div>
                <div class=\"col-lg-6 col-sm-12\">
                    ";
        // line 507
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "copyright_second", [], "any", false, false, true, 507), 507, $this->source), "html", null, true);
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
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/popper.min.js\"></script>
    <script src=\"js/bootstrap.bundle.min.js\"></script>
    <script src=\"js/jquery-3.0.0.min.js\"></script>
    <script src=\"js/plugin.js\"></script>
    <!-- sidebar -->
    <script src=\"js/jquery.mCustomScrollbar.concat.min.js\"></script>
    <script src=\"js/custom.js\"></script>
</body>";
    }

    public function getTemplateName()
    {
        return "themes/custom/coffee/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  548 => 507,  540 => 502,  501 => 466,  480 => 448,  466 => 437,  451 => 425,  406 => 383,  402 => 382,  355 => 338,  345 => 331,  323 => 312,  312 => 304,  200 => 195,  190 => 188,  104 => 105,  87 => 91,  62 => 69,  51 => 61,  47 => 60,  39 => 54,);
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

<body>
    <div class=\"header_section\">
        <div class=\"container-fluid\">
            <nav class=\"navbar 
            navbar-expand-lg navbar-light bg-light\">
                {{ page.logo }}
                <!-- <a class=\"navbar-brand\"href=\"index.html\"><img src=\"{{url('<front>')}}/themes/custom/coffee/images/logo.png\"></a> -->
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav ml-auto\">
                        {{ page.primary_menu }}
                        <!-- <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"index.html\">Home</a>
                     </li>
                     <li class=\"nav-item\">
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
                     </li> -->
                    </ul>
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

        <!-- banner section start -->
        <div class=\"banner_section layout_padding\">
            <div class=\"container\">
                {{ page.slider1 }}
                <!-- <div id=\"banner_slider\" class=\"carousel slide\" data-ride=\"carousel\">
                    <div class=\"carousel-inner\">

                        <div class=\"carousel-item active\">

                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"banner_img\"><img src=\"images/banner-img.png\"></div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"banner_taital_main\">

                                        <h1 class=\"banner_taital\">coffee</h1>
                                        <h5 class=\"tasty_text\">Tasty Of DozeCafe</h5>
                                        <p class=\"banner_text\">more-or-less normal distribution of letters, as opposed
                                            to using </p>
                                        <div class=\"btn_main\">
                                            <div class=\"about_bt\"><a href=\"#\">About Us</a></div>
                                            <div class=\"callnow_bt active\"><a href=\"#\">Call Now</a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"banner_img\"><img src=\"images/banner-img.png\"></div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"banner_taital_main\">
                                        <h1 class=\"banner_taital\">coffee</h1>
                                        <h5 class=\"tasty_text\">Tasty Of DozeCafe</h5>
                                        <p class=\"banner_text\">more-or-less normal distribution of letters, as opposed
                                            to using </p>
                                        <div class=\"btn_main\">
                                            <div class=\"about_bt\"><a href=\"#\">About Us</a></div>
                                            <div class=\"callnow_bt active\"><a href=\"#\">Call Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"banner_img\"><img src=\"images/banner-img.png\"></div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"banner_taital_main\">
                                        <h1 class=\"banner_taital\">coffee</h1>
                                        <h5 class=\"tasty_text\">Tasty Of DozeCafe</h5>
                                        <p class=\"banner_text\">more-or-less normal distribution of letters, as opposed
                                            to using </p>
                                        <div class=\"btn_main\">
                                            <div class=\"about_bt\"><a href=\"#\">About Us</a></div>
                                            <div class=\"callnow_bt active\"><a href=\"#\">Call Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#banner_slider\" role=\"button\" data-slide=\"prev\">
                        <i class=\"fa fa-arrow-left\"></i>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#banner_slider\" role=\"button\" data-slide=\"next\">
                        <i class=\"fa fa-arrow-right\"></i>
                    </a>
                </div> -->

            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->
    
    <!-- coffee section start -->
    <div class=\"coffee_section layout_padding\">
        <div class=\"container\">
            {{ page.our_coffee }}
            <!-- <div class=\"row\">
                <h1 class=\"coffee_taital\">OUR Coffee OFFER</h1>
                <div class=\"bulit_icon\"><img src=\"images/bulit-icon.png\"></div>
            </div> -->
        </div>
        <div class=\"coffee_section_2\">
            {{ page.slider2 }}
            <!-- <div id=\"main_slider\" class=\"carousel slide\" data-ride=\"carousel\"> -->

                <!-- <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-1.png\"></div>
                                    <h3 class=\"types_text\">TYPES OF COFFEE</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-2.png\"></div>
                                    <h3 class=\"types_text\">BEAN VARIETIES</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-3.png\"></div>
                                    <h3 class=\"types_text\">COFFEE & PASTRY</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-4.png\"></div>
                                    <h3 class=\"types_text\">COFFEE TO GO</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-1.png\"></div>
                                    <h3 class=\"types_text\">TYPES OF COFFEE</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-2.png\"></div>
                                    <h3 class=\"types_text\">BEAN VARIETIES</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-3.png\"></div>
                                    <h3 class=\"types_text\">COFFEE & PASTRY</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-4.png\"></div>
                                    <h3 class=\"types_text\">COFFEE TO GO</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-1.png\"></div>
                                    <h3 class=\"types_text\">TYPES OF COFFEE</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-2.png\"></div>
                                    <h3 class=\"types_text\">BEAN VARIETIES</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-3.png\"></div>
                                    <h3 class=\"types_text\">COFFEE & PASTRY</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                                <div class=\"col-lg-3 col-md-6\">
                                    <div class=\"coffee_img\"><img src=\"images/img-4.png\"></div>
                                    <h3 class=\"types_text\">COFFEE TO GO</h3>
                                    <p class=\"looking_text\">looking at its layout. The point of</p>
                                    <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <a class=\"carousel-control-prev\" href=\"#main_slider\" role=\"button\" data-slide=\"prev\">
                    <i class=\"fa fa-arrow-left\"></i>
                </a>
                <a class=\"carousel-control-next\" href=\"#main_slider\" role=\"button\" data-slide=\"next\">
                    <i class=\"fa fa-arrow-right\"></i>
                </a>
            </div> -->
        </div>
    </div>
    <!-- coffee section end -->

    <!-- about section start -->
    <div class=\"about_section layout_padding\">
        <div class=\"container\">
            {{ page.about_head }}
            <!-- <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1 class=\"about_taital\">About Our shop</h1>
                    <div class=\"bulit_icon\"><img src=\"images/bulit-icon.png\"></div>
                </div>
            </div> -->
            <div class=\"about_section_2 layout_padding\">
                {{ page.about_our_shop }}
                <!-- <div class=\"image_iman\"><img src=\"images/about-img.png\" class=\"about_img\"></div>
                <div class=\"about_taital_box\">
                    <h1 class=\"about_taital_1\">Coffee distribution '</h1>
                    <p class=\" about_text\">has a more-or-less normal distribution of letters, as opposed to using
                        'Content here, content here', making it look like readable English. Many desktop publishing
                        packages and web page editorhas a more-or-less normal distribution of letters, as opposed to
                        using 'Content here, content here', making it look like readable English. Many desktop
                        publishing packages and web page editor</p>
                    <div class=\"readmore_btn\"><a href=\"#\">Read More</a></div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- about section end -->

    <!-- client section start -->
    <div class=\"client_section layout_padding\">
        <div class=\"container\">
            <!-- {{ page.customer_head }} -->
            <!-- <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1 class=\"about_taital\">What syas customers</h1>
                    <div class=\"bulit_icon\"><img src=\"images/bulit-icon.png\"></div>
                </div>
            </div> -->
            {{ page.customer }}
            <!-- <div class=\"client_section_2\">

                <div class=\"client_taital_main\">
                    <div class=\"client_left\">
                        <div class=\"client_img\"><img src=\"images/client-img1.png\"></div>
                    </div>
                    <div class=\"client_right\">
                        <h3 class=\"moark_text\">Joy   Moark</h3>
                        <p class=\"client_text\">now use Lorem Ipsum as their default model text, and a search for 'lorem
                            ipsum' will uncover many web sites still in their infancynow use Lorem Ipsum as their
                            default model text, </p>
                    </div>
                </div>
                <div class=\"client_taital_main\">
                    <div class=\"client_left\">
                        <div class=\"client_img\"><img src=\"images/client-img2.png\"></div>
                    </div>
                    <div class=\"client_right\">
                        <h3 class=\"moark_text\">Mihacal</h3>
                        <p class=\"client_text\">now use Lorem Ipsum as their default model text, and a search for 'lorem
                            ipsum' will uncover many web sites still in their infancynow use Lorem Ipsum as their
                            default model text, </p>
                    </div>
                </div>
                <div class=\"client_taital_main\">
                    <div class=\"client_left\">
                        <div class=\"client_img\"><img src=\"images/client-img3.png\"></div>
                    </div>
                    <div class=\"client_right\">
                        <h3 class=\"moark_text\">Uliya den</h3>
                        <p class=\"client_text\">now use Lorem Ipsum as their default model text, and a search for 'lorem
                            ipsum' will uncover many web sites still in their infancynow use Lorem Ipsum as their
                            default model text, </p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- client section end -->

    <!-- blog section start -->
    <div class=\"blog_section layout_padding\">
        <div class=\"container\">
            {{ page.blog }}
            <!-- {{ page.blog_head }} -->
            <!-- <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1 class=\"about_taital\">Our Blog</h1>
                    <div class=\"bulit_icon\"><img src=\"images/bulit-icon.png\"></div>
                </div>
            </div> -->
            <!-- <div class=\"blog_section_2\">
                <div class=\"row\"> -->

                    <!-- <div class=\"col-md-6\">
                        <div class=\"blog_box\">
                            <div class=\"blog_img\"><img src=\"images/blog-img1.png\"></div>
                            <h4 class=\"date_text\">05 April</h4>
                            <h4 class=\"prep_text\">PREP TECHNIQUES Coffee</h4>
                            <p class=\"lorem_text\">distracted by the readable content of a page when looking at its
                                layout. The point of using Lorem Ipsum is that it has a moredistracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum is that it
                                has a more</p>
                        </div>
                        <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"blog_box\">
                            <div class=\"blog_img\"><img src=\"images/blog-img2.png\"></div>
                            <h4 class=\"date_text\">05 April</h4>
                            <h4 class=\"prep_text\">PREP TECHNIQUES Coffee</h4>
                            <p class=\"lorem_text\">distracted by the readable content of a page when looking at its
                                layout. The point of using Lorem Ipsum is that it has a moredistracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum is that it
                                has a more</p>
                        </div>
                        <div class=\"read_bt\"><a href=\"#\">Read More</a></div>
                    </div> -->
                <!-- </div>
            </div> -->
        </div>
    </div>
    <!-- blog section end -->
    <!-- contact section start -->
    <div class=\"contact_section layout_padding\">
        <div class=\"container\">
            {{page.form_head}}
            <!-- <div class=\"row\">
                <div class=\"col-sm-12\">
                    <h1 class=\"contact_taital\">Get In Touch</h1>
                    <div class=\"bulit_icon\"><img src=\"images/bulit-icon.png\"></div>
                </div>
            </div> -->
        </div>
        <div class=\"container-fluid\">
            <div class=\"contact_section_2\">
                <div class=\"row\">
                    <div class=\"col-md-12 myform\">
                        {{ page.form }}
                        <!-- <div class=\"mail_section_1\">
                            <input type=\"text\" class=\"mail_text\" placeholder=\"Your Name\" name=\"Your Name\">
                            <input type=\"text\" class=\"mail_text\" placeholder=\"Your Email\" name=\"Your Email\">
                            <input type=\"text\" class=\"mail_text\" placeholder=\"Your Phone\" name=\"Your Phone\">
                            <textarea class=\"massage-bt\" placeholder=\"Massage\" rows=\"5\" id=\"comment\"
                                name=\"Massage\"></textarea>
                            <div class=\"send_bt\"><a href=\"#\">SEND</a></div>
                        </div> -->
                    </div>
                    <div class=\"map_main\">
                        {{ page.map }}
                        <!-- <div class=\"map-responsive\">
                            <iframe
                                src=\"https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France\"
                                width=\"250\" height=\"500\" frameborder=\"0\" style=\"border:0; width: 100%;\"
                                allowfullscreen=\"\"></iframe>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->

    <!-- footer section start -->
    <div class=\"footer_section layout_padding\">
        <div class=\"container\">
            <div class=\"row\">
                {{ page.footer }}
                <!-- <div class=\"col-md-12\">
                    <h1 class=\"address_text\">Address</h1>
                    <p class=\"footer_text\">here, content here', making it look like readable English. Many desktop
                        publishing packages and web page editors now use </p>
                    <div class=\"location_text\">
                        <ul>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-phone\" aria-hidden=\"true\"></i><span class=\"padding_left_10\">+01
                                        1234567890</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i><span
                                        class=\"padding_left_10\">demo@gmail.com</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"form-group\">
                        <textarea class=\"update_mail\" placeholder=\"Your Email\" rows=\"5\" id=\"comment\"
                            name=\"Your Email\"></textarea>
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
                <div class=\"col-lg-6 col-sm-12\">
                    {{ page.copyright_first }}
                    <!-- <p class=\"copyright_text\">2020 All Rights Reserved. Design by <a href=\"https://html.design\">Free
                            Html Templates</a></p> -->
                </div>
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
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/popper.min.js\"></script>
    <script src=\"js/bootstrap.bundle.min.js\"></script>
    <script src=\"js/jquery-3.0.0.min.js\"></script>
    <script src=\"js/plugin.js\"></script>
    <!-- sidebar -->
    <script src=\"js/jquery.mCustomScrollbar.concat.min.js\"></script>
    <script src=\"js/custom.js\"></script>
</body>", "themes/custom/coffee/templates/page--front.html.twig", "/var/www/html/website/web/themes/custom/coffee/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 60);
        static $functions = array("url" => 61);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['url']
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
