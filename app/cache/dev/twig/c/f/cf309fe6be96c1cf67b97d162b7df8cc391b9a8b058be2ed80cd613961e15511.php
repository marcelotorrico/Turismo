<?php

/* MTDTurismoBundle:Principal:principal.html.twig */
class __TwigTemplate_e02d74d19e66faf226d097b4d9b775b164eef64184de3f5376d97449ac564e09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c9fd85a9e249243a89ebf6e998377f4c73d98895bd16ae6a9234f656437d9af = $this->env->getExtension("native_profiler");
        $__internal_2c9fd85a9e249243a89ebf6e998377f4c73d98895bd16ae6a9234f656437d9af->enter($__internal_2c9fd85a9e249243a89ebf6e998377f4c73d98895bd16ae6a9234f656437d9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDTurismoBundle:Principal:principal.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
<head>
   <meta charset=\"utf-8\">
   <title>Agencia de Turismo</title>
   <meta name=\"description\" content=\"\">
   <meta name=\"keywords\" content=\"\">
   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
   <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
   <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/font-face/helvetica.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
   <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo "\">
   <!-- <link rel=\"stylesheet\" href=\"plugins/accessiblemegamenu/megamenu.css\"> -->
   <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/vendor/validation-engine.css"), "html", null, true);
        echo "\">
   <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/responsiveslides/responsiveslides.css"), "html", null, true);
        echo "\">
   <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\">
   <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/fonts/simple-line-icons.css"), "html", null, true);
        echo "\">
   <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/fonts/elegant-icons.css"), "html", null, true);
        echo "\">
   <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 26
            echo "        <script>alert('";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "');</script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "   <header>

      <!-- top bar begin -->
      <div id=\"top-bar\">
         <div class=\"container\">
            <div class=\"pull-left left-top-bar\">
               <div id=\"lang\">
                  <ul class=\"list-inline hidden-xs\">
                     <li>
                        <a href=\"#\" class=\"active\">Español</a>   
                     </li>
                     <li>
                        <a href=\"#\">English</a>   
                     </li>
                     <li>
                        <span></span>
                     </li>
                  </ul>
                  <div class=\"dropdown dropdown-top-list visible-xs\">
                     <a  href=\"#\" data-toggle=\"dropdown\" title=\"\">
                        English <span class=\"caret\"></span>
                     </a>
                     <div class=\"dropdown-menu dropdown-top-menu\">
                        <span class=\"dropdown-triangle-up\"></span>
                        <ul class=\"dropdown-top-menu-list\">
                           <li><a href=\"#\">French</a></li>
                           <li><a href=\"#\">German</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div id=\"currencies\">
                  <ul class=\"list-inline hidden-xs\">
                     <li>
                        <a href=\"#\" class=\"active\">USD</a>   
                     </li>
                  </ul>
                  <div class=\"dropdown dropdown-top-list visible-xs\">
                     <a  href=\"#\" data-toggle=\"dropdown\" title=\"\">
                        USD <span class=\"caret\"></span>
                     </a>
                     <div class=\"dropdown-menu dropdown-top-menu\">
                        <span class=\"dropdown-triangle-up\"></span>
                        <ul class=\"dropdown-top-menu-list\">
                           <li><a href=\"#\">EUR</a></li>
                           <li><a href=\"#\">AUD</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div id=\"top-contacts\">
                  <ul class=\"list-inline\">
                     <li class=\"hidden-xs\">
                        <i class=\"icon-call-in\"></i>
                        <span>+ 1 (800) 2364 332 23 16</span>
                     </li>
                  </ul>
               </div>
            </div>
            <div class=\"pull-right\">
               <div id=\"user-top-bar\">
                  <ul class=\"list-inline\">
                     <li class=\"btn-group\">
                        <a href=\"#\" class=\"pm_item visible-xs\">
                           <i class=\"icon-bag\"></i> (2)
                        </a>
                     </li>
                     <li class=\"btn-group dropdown\">
                        <a  href=\"#\" class=\"pm_item\" data-toggle=\"dropdown\" title=\"login\">
                           <i class=\"icon-login\"></i>
                           <span class=\"hidden-sm hidden-xs\">Ingresar</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                           <span class=\"dropdown-triangle-up\"></span>
                           <a href=\"#\" class=\"dd-close-btn\"><i class=\"icon_close\"></i></a>
                           <div class=\"dropdown-head\">
                              <h4 class=\"pull-left\">Ingrese sus Datos</h4>
                           </div>
                           <div class=\"dd-wrapper\">
                              <div id=\"dd_login\">
                                 <form action=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("mtd_inicio_sesion");
        echo "\" method=\"post\">
                                    <div class=\"required form-group\">
                                       <input type=\"text\" name=\"ci\" placeholder=\"Ingrese su CI\" class=\"placeholder-fix\">
                                       <i class=\"icon_mail field-icon\"></i>
                                    </div>
                                    <div class=\"required form-group\">
                                       <input type=\"password\" name=\"contrasena\" placeholder=\"Ingrese su Contraseña\" class=\"placeholder-fix\">
                                       <i class=\"icon_lock field-icon\"></i>
                                    </div>
                                    <div class=\"form-group\">
                                       <input id=\"remember\" class=\"stl\" type=\"checkbox\" value=\"1\" name=\"remember\">
                                       <label class=\"stl\" for=\"remember\"><span></span>remember me</label>
                                    </div>
                                    <div class=\"form-group text-center\">
                                       <button type=\"submit\" class=\"btn btn-sm btn-third-col\">Ingresar</button>
                                    </div>
                                    <div class=\"text-center\"><a href=\"coming-soon.html\" class=\"active\">Foget your password?</a></div>
                                    <div class=\"dd-delimiter\"></div>
                                    <div class=\"form-group text-center\">
                                       <button type=\"button\" class=\"btn btn-sm btn-sec-col\">Register</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>

         </div>
      </div>
      <!-- top bar end -->
      <!-- header bar begin -->
      <div id=\"header-bar\">
         <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-md-3 top-search-box hidden-sm hidden-xs\">
                  <form action=\"/\" method=\"post\">
                     <div class=\"required form-group\">
                        <input type=\"text\" name=\"search_query\" placeholder=\"Search\" class=\"placeholder-fix top-search\" autocomplete=\"off\">
                        <button><i class=\"icon_search field-icon\"></i></button>
                     </div>
                  </form>
               </div>
               <div id=\"header-logo\" class=\"col-md-6 col-sm-12\">
                  <a href=\"#\">
                     <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/logo.svg"), "html", null, true);
        echo "\" class=\"logo center-block hidden-xs\" alt=\"Shop+ - Responsive HTML5 Multipurpose Ecommerce Template\">
                     <img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/logo.svg"), "html", null, true);
        echo "\" class=\"logo center-block visible-xs hidden-sm\" alt=\"Shop+ - Responsive HTML5 Multipurpose Ecommerce Template\">
                  </a>
               </div>
               <div class=\"col-md-3 hidden-sm hidden-xs\">
                  <div id=\"shopping-cart-wrapper\" class=\"dropdown\">
                     <a href=\"#\" class=\"shp-ca\" data-toggle=\"dropdown\">
                        <div class=\"s-bag-1\">
                           <i class=\"icon-bag\"></i>
                        </div>
                        <div class=\"s-cart-pan\">
                           <div class=\"s-bag-2\">
                              <span class=\"dd-products-count\">2</span> item(s) / <span class=\"active dd-products-price\">\$230.00</span>
                           </div>
                        </div>
                     </a>
                     <div class=\"dropdown-menu dropdown-menu-right larger text-left\" role=\"menu\">
                        <span class=\"dropdown-triangle-up\"></span>
                        <a href=\"#\" class=\"dd-close-btn\"><i class=\"icon_close\"></i></a>
                        <div class=\"dropdown-head\">
                           <h4 class=\"pull-left\">2 items in the shopping bag</h4>
                        </div>
                        <div class=\"dd-wrapper\">
                           <div class=\"dd-list-empty\">There is no product in shopping cart!</div>
                           <div id=\"cart-product-group\" class=\"dropdown-product-list\">
                              <div class=\"dd-product-group\" id=\"pr5\">
                                 <div class=\"dd-product-box pull-left\">
                                    <a href=\"product-page.html\" title=\"product name\">
                                       <img  src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/pr_2-small.jpg"), "html", null, true);
        echo "\" alt=\"product name\">
                                    </a>
                                 </div>
                                 <div class=\"dd-product-desc pull-left\">
                                    <a class=\"title\">Beautiful Fit Velvet Sweater For Him test for longer header test for longer header</a>
                                    <div class=\"qty\">1 x <span class=\"active\">\$700.00</span></div>
                                    <a href=\"#\" class=\"close-btn ddr\"><i class=\"icon_close\"></i></a>
                                 </div>
                              </div>
                              <div class=\"dd-product-group\" id=\"pr6\">
                                 <div class=\"dd-product-box pull-left\">
                                    <a href=\"product-page.html\" title=\"product name\">
                                       <img  src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/pr_3-small.jpg"), "html", null, true);
        echo "\" alt=\"product name\">
                                    </a>
                                 </div>
                                 <div class=\"dd-product-desc pull-left\">
                                    <a class=\"title\">Beautiful Fit Velvet Sweater For Here</a>
                                    <div class=\"qty\">1 x <span class=\"active\">\$800.00</span></div>
                                    <a href=\"#\" class=\"close-btn ddr\"><i class=\"icon_close\"></i></a>
                                 </div>
                              </div>
                              <div class=\"text-center clear-all-btn\">
                                 <span class=\"cart-block-subtotal\">
                                    Cart Subtotal: \$1500.00
                                 </span>
                              </div>
                           </div>
                           <div class=\"row no-gutter\">
                              <div class=\"col-xs-6\">
                                 <a href=\"shopping-cart.html\" class=\"btn btn-md btn-third-col btn-w100\">View Cart</a>
                              </div>
                              <div class=\"col-xs-6\">
                                 <a href=\"checkout.html\" class=\"btn btn-md btn-third-col btn-w100\">Procced to Checkout</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- header bar end -->
      <!-- main menu begin -->
      <div class=\"top-menu\">
         <div class=\"container\">
            <nav class=\"main-menu\">
               <ul class=\"nav-menu\">
                  <li class=\"nav-item\">
                     <a href=\"#\"><i class=\"icon-screen-desktop\"></i> Home</a>
                     <div class=\"sub-nav\">
                          <ul class=\"sub-nav-group\">
                              <li class=\"has-sub-nav\">
                                 <a href=\"#\"><span>Clothes version</span></a>
                                 <div class=\"sub-nav\">
                                    <ul class=\"sub-nav-group\">
                                       <li><a href=\"home-1-clothes.html\"><span>Boxed Versihon</span></a></li>
                                       <li><a href=\"vistaPrincipal.html.twig.html\"><span>Full version</span></a></li>
                                   </ul>
                                 </div>
                              </li>
                              <li><a href=\"home-2-furniture.html\"><span>Furniture version</span></a></li>
                              <li><a href=\"home-3-bookstore.html\"><span>Bookstore version</span></a></li>
                              <li><a href=\"home-4-electronics.html\"><span>Electronics version</span></a></li>
\t\t\t\t\t\t\t  <li><a href=\"home-5-flower.html\"><span>Flower version</span></a></li>
                          </ul>
                      </div>
                  </li>
                  <li class=\"nav-item\">
                     <a href=\"#\"><span><i class=\"icon-user\"></i>Pages</span></a>
                     <div class=\"sub-nav full padding\">
                        <div class=\"row\">
                           <div class=\"col-md-3\">
                              <ul class=\"sub-nav-group sub-nav-grey\">
                                 <li><a href=\"basic-page.html\"><span>Basic Page</span></a></li>
                                 <li><a href=\"blog.html\"><span>Blog Page</span></a></li>
                                 <li><a href=\"category.html\"><span>Category Page</span></a></li>
                                 <li><a href=\"account.html\"><span>Account Page</span></a></li>
                                 <li><a href=\"coming-soon.html\"><span>Coming Soon Page</span></a></li>
                              </ul>
                           </div>
                           <div class=\"col-md-3\">
                              <ul class=\"sub-nav-group sub-nav-grey\">
                                 <li><a href=\"contact.html\"><span>Contact Page</span></a></li>
                                 <li><a href=\"email_template.html\"><span>Email Template Page</span></a></li>
                                 <li><a href=\"login_register.html\"><span>Login Register Page</span></a></li>
                                 <li><a href=\"order-complete.html\"><span>Order Complete Page</span></a></li>
                                 <li><a href=\"order-history.html\"><span>Order History</span></a></li>

                              </ul>
                           </div>
                           <div class=\"col-md-3\">
                              <ul class=\"sub-nav-group sub-nav-grey\">
                                 <li><a href=\"shopping-cart.html\"><span>Shopping Cart Page</span></a></li>
                                 <li><a href=\"shortcodes.html\"><span>Shortcodes Page</span></a></li>
                                 <li><a href=\"single-blog.html\"><span>Single Blog Page</span></a></li>
                                 <li><a href=\"wishlist.html\"><span>Wishlist Page</span></a></li>
                              </ul>
                           </div>
                           <div class=\"col-md-3\">
                              <ul class=\"sub-nav-group sub-nav-grey\">
                                 <li><a href=\"product-page.html\"><span>Product Page</span></a></li>
                                 <li><a href=\"review_page.html\"><span>Review Page</span></a></li>
\t\t\t\t\t\t\t\t <li><a href=\"checkout.html\"><span>Checkout Page</span></a></li>
                                 <li><a href=\"compare.html\"><span>Compare Page</span></a></li>
\t\t\t\t\t\t\t\t <li><a href=\"404.html\"><span>404 Page</span></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class=\"nav-item\">
                     <a href=\"#\"><span><i class=\"icon-user-female\"></i> Women</span></a>
                     <div class=\"sub-nav full padding\">
                        <div class=\"row\">
                           <div class=\"col-md-3\">
                              <h3 class=\"sub-nav-title\">Jackets</h3>
                              <ul class=\"sub-nav-group sub-nav-grey\">
                                 <li><a href=\"category.html\"><span>Shirts</span></a></li>
                                 <li><a href=\"category.html\"><span>Jumper & Cardigans</span></a></li>
                                 <li><a href=\"category.html\"><span>Autumn Jackets</span></a></li>
                                 <li><a href=\"category.html\"><span>Winter Jackets</span></a></li>
                                 <li><a href=\"category.html\"><span>Leather Jackets</span></a></li>
                                 <li><a href=\"category.html\"><span>Jeans</span></a></li>
                                 <li><a href=\"category.html\"><span>Shoes</span></a></li>
                              </ul>
                           </div>
                           <div class=\"col-md-3\">
                              <h3 class=\"sub-nav-title\">ACCESSORIES</h3>
                              <ul class=\"sub-nav-group sub-nav-grey\">
                                 <li><a href=\"category.html\"><span>Bags</span></a></li>
                                 <li><a href=\"category.html\"><span>Beauty</span></a></li>
                                 <li><a href=\"category.html\"><span>Underwear</span></a></li>
                                 <li><a href=\"category.html\"><span>Glasses</span></a></li>
                                 <li><a href=\"category.html\"><span>Leather Jackets</span></a></li>
                                 <li><a href=\"category.html\"><span>Jeans</span></a></li>
                                 <li><a href=\"category.html\"><span>Shoes</span></a></li>
                              </ul>
                           </div>
                           <div class=\"col-md-3\">
                              <h3 class=\"sub-nav-title\">SHOES</h3>
                              <ul class=\"sub-nav-group sub-nav-grey\">
                                 <li><a href=\"category.html\"><span>Shoes</span></a></li>
                                 <li><a href=\"category.html\"><span>Shorts</span></a></li>
                                 <li><a href=\"category.html\"><span>Shirts</span></a></li>
                                 <li><a href=\"category.html\"><span>Jeans</span></a></li>
                                 <li><a href=\"category.html\"><span>Leather Jackets</span></a></li>
                                 <li><a href=\"category.html\"><span>Suits & Blazers</span></a></li>
                                 <li><a href=\"category.html\"><span>Shoes</span></a></li>
                              </ul>
                           </div>
                           <div class=\"col-md-3\">
                              <div class=\"megamenu-popular box-with-pager\">
                                 <div class=\"sub-nav-title\">
                                    Popular products
                                 </div>
                                 <div>
                                    <ul class=\"vertical-bx-1\">
                                       <li>
                                          <a href=\"product-page.html\">      
                                             <figure>
                                                <span class=\"img-cover\"><img src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/pr_1-menu.jpg"), "html", null, true);
        echo "\" alt=\"image name\" class=\"pic\"></span>
                                                <figcaption>
                                                   <p>Black Bag</p>
                                                   <span class=\"price\">\$950.00</span>
                                                   <span class=\"old-price\">\$990.00</span>
                                                </figcaption>
                                             </figure>
                                          </a>
                                       </li>
                                       <li>
                                          <a href=\"product-page.html\">      
                                             <figure>
                                                <span class=\"img-cover\"><img src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/pr_2-menu.jpg"), "html", null, true);
        echo "\" alt=\"image name\" class=\"pic\"></span>
                                                <figcaption>
                                                   <p>Woman Red Handy Bag</p>
                                                   <span class=\"price\">\$950.00</span>
                                                   <span class=\"old-price\">\$990.00</span>
                                                </figcaption>
                                             </figure>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class=\"nav-item\">
                     <a href=\"#\"><span><i class=\"icon-screen-desktop\"></i> Electronics</span></a>
                     <div class=\"sub-nav\">
                          <ul class=\"sub-nav-group\">
                              <li><a href=\"account.html\"><span>Account</span></a></li>
                              <li><a href=\"#\"><span>New Product</span></a></li>
                              <li><a href=\"#\"><span>Special Product</span></a></li>
                              <li><a href=\"#\"><span>Featured Product</span></a></li>
                              <li><a href=\"contact.html\"><span>Contact</span></a></li>
                              <li><a href=\"shortcodes.html\"><span>Shortcodes</span></a></li>
                              <li class=\"has-sub-nav\">
                                 <a href=\"#\"><span>Submenu Left</span></a>
                                 <div class=\"sub-nav left-side\">
                                    <ul class=\"sub-nav-group\">
                                       <li><a href=\"account.html\"><span>Account</span></a></li>
                                       <li><a href=\"#\"><span>New Product</span></a></li>
                                       <li><a href=\"#\"><span>Special Product</span></a></li>
                                       <li><a href=\"#\"><span>Featured Product</span></a></li>
                                       <li><a href=\"contact.html\"><span>Contact</span></a></li>
                                       <li><a href=\"shortcodes.html\"><span>Shortcodes</span></a></li>
                                   </ul>
                                 </div>
                              </li>
                          </ul>
                      </div>
                  </li>
                  <li class=\"nav-item\">
                     <a href=\"blog.html\"><span><i class=\"icon-pencil\"></i> Blog</span></a>
                  </li>
                  <li class=\"nav-item\">
                     <a href=\"coming-soon.html\"><span><i class=\"icon-cup\"></i> Popular</span></a>
                     <div class=\"sub-nav full padding\">
                        <div class=\"megamenu-popular mmp-type-2 box-with-pager\">
                           <ul class=\"vertical-bx-1\">
                              <li>
                                 <div class=\"row\">
                                    <div class=\"col-md-3\">
                                       <a href=\"product-page.html\">      
                                          <figure>
                                             <span class=\"img-cover\"><img src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/pr_1.jpg"), "html", null, true);
        echo "\" alt=\"image name\" class=\"pic\"></span>
                                             <figcaption>
                                                <p>Woman Red Handy Bag</p>
                                                <span class=\"price\">\$950.00</span>
                                                <span class=\"old-price\">\$990.00</span>
                                             </figcaption>
                                          </figure>
                                       </a>
                                    </div>
                                    <div class=\"col-md-3\">
                                       <a href=\"product-page.html\">      
                                          <figure>
                                             <span class=\"img-cover\"><img src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/pr_2.jpg"), "html", null, true);
        echo "\" alt=\"image name\" class=\"pic\"></span>
                                             <figcaption>
                                                <p>Woman Red Handy Bag</p>
                                                <span class=\"price\">\$950.00</span>
                                                <span class=\"old-price\">\$990.00</span>
                                             </figcaption>
                                          </figure>
                                       </a>
                                    </div>
                                    <div class=\"col-md-3\">
                                       <a href=\"product-page.html\">      
                                          <figure>
                                             <span class=\"img-cover\"><img src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/pr_3.jpg"), "html", null, true);
        echo "\" alt=\"image name\" class=\"pic\"></span>
                                             <figcaption>
                                                <p>Woman Red Handy Bag</p>
                                                <span class=\"price\">\$950.00</span>
                                                <span class=\"old-price\">\$990.00</span>
                                             </figcaption>
                                          </figure>
                                       </a>
                                    </div>
                                    <div class=\"col-md-3\">
                                       <a href=\"product-page.html\">      
                                          <figure>
                                             <span class=\"img-cover\"><img src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/pr_4.jpg"), "html", null, true);
        echo "\" alt=\"image name\" class=\"pic\"></span>
                                             <figcaption>
                                                <p>Woman Red Handy Bag</p>
                                                <span class=\"price\">\$950.00</span>
                                                <span class=\"old-price\">\$990.00</span>
                                             </figcaption>
                                          </figure>
                                       </a>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class=\"row\">
                           <div class=\"col-md-4\">
                              <a href=\"blog.html\" class=\"img-fade-hover\">
                                 <img src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/megamenu-btm1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                              </a>
                           </div>
                           <div class=\"col-md-4\">
                              <a href=\"blog.html\" class=\"img-fade-hover\">
                                 <img src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/megamenu-btm2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                              </a>
                           </div>
                           <div class=\"col-md-4\">
                              <a href=\"blog.html\" class=\"img-fade-hover\">
                                 <img src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/megamenu-btm3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                              </a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class=\"nav-item\">
                     <a href=\"contact.html\"><span><i class=\"icon-call-in\"></i> Contact Us</span></a>
                  </li>
                  <li class=\"nav-item\">
                     <a href=\"category.html\"><span><i class=\"icon-wallet\"></i> Sale</span></a>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
      <!-- main menu end -->
      <!-- mobile menu begin -->
      <div class=\"mobile-menu\">
         <nav>
            <div class=\"mobile-menu-button\">
               MENU
               <a href=\"#\" class=\"mobile-menu-toggler\"><span></span><span></span><span></span></a>
            </div>
            <div class=\"mobile-menu-body\">
               <div class=\"mobile-menu-search clearfix\">
                  <form action=\"/\">
                     <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                     </div>
                     <button type=\"submit\" class=\"btn btn-default\"><i class=\"icon-magnifier\"></i></button>
                  </form>
               </div>
               <ul>
                  <li><a href=\"#\"><i class=\"icon-home\"></i> Home</a></li>
                  <li>
                     <a href=\"#\"><i class=\"icon-user\"></i> Men</a>
                     <a class=\"submenu-toggler\" href=\"#\"><i class=\"arrow_carrot-down\"></i></a>
                     <ul>
                        <li><a href=\"#\"><span>Shirts</span></a></li>
                        <li><a href=\"#\"><span>Jumper & Cardigans</span></a></li>
                        <li><a href=\"#\"><span>Autumn Jackets</span></a></li>
                        <li><a href=\"#\"><span>Winter Jackets</span></a></li>
                        <li><a href=\"#\"><span>Leather Jackets</span></a></li>
                        <li><a href=\"#\"><span>Jeans</span></a></li>
                        <li><a href=\"#\"><span>Shoes</span></a></li>
                     </ul>
                  </li>
                  <li>
                     <a href=\"#\"><i class=\"icon-user-female\"></i> Women</a>
                     <a class=\"submenu-toggler\" href=\"#\"><i class=\"arrow_carrot-down\"></i></a>
                     <ul>
                        <li><a href=\"#\"><span>Shirts</span></a></li>
                        <li><a href=\"#\"><span>Jumper & Cardigans</span></a></li>
                        <li><a href=\"#\"><span>Autumn Jackets</span></a></li>
                        <li><a href=\"#\"><span>Winter Jackets</span></a></li>
                        <li><a href=\"#\"><span>Leather Jackets</span></a></li>
                        <li><a href=\"#\"><span>Jeans</span></a></li>
                        <li><a href=\"#\"><span>Shoes</span></a></li>
                     </ul>
                  </li>
                  <li>
                     <a href=\"#\"><i class=\"icon-screen-desktop\"></i> Electronics</a>
                     <a class=\"submenu-toggler\" href=\"#\"><i class=\"arrow_carrot-down\"></i></a>
                     <ul>
                        <li><a href=\"#\"><span>Shirts</span></a></li>
                        <li><a href=\"#\"><span>Jumper & Cardigans</span></a></li>
                        <li><a href=\"#\"><span>Autumn Jackets</span></a></li>
                        <li><a href=\"#\"><span>Winter Jackets</span></a></li>
                        <li><a href=\"#\"><span>Leather Jackets</span></a></li>
                        <li><a href=\"#\"><span>Jeans</span></a></li>
                        <li><a href=\"#\"><span>Shoes</span></a></li>
                     </ul>
                  </li>
               </ul>
               <p><i class=\"icon-call-in\"></i> + 1 (800) 2364 332 23 16</p>
               <p><i class=\"icon-envelope\"></i>your@email.com</p>
            </div>
         </nav>
      </div>
      <!-- mobile menu end -->
   </header>
   <!-- page body content begin -->
   <div class=\"pg-body\">

      <section id=\"home1-slider\">
         <div class=\"home1-slider rslides-container loading\">
            <ul class=\"rslides\">
               <li>
                  <img src=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/home-1/slides/1-bg.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  <div class=\"slider-container\">
                     <div class=\"rslide-caption-1\">
                        <span class=\"sc1-year\">2016</span>
                        <span>Summer</span>
                        <span>Collection</span>
                     </div>
                     <div class=\"rslide-caption-2 hidden-xs\">
                        UPGRADE YOUR STYLE WITS US ALL THE FASHION TRENDS  YOU NEED THIS SEASON  FILL YOUR CLOSET  RIGHT NOW
                     </div>
                     <button class=\"rslide-button-1 hidden-xs\">Go to the collection </button>
                  </div>
               </li>
               <li>
                  <img src=\"";
        // line 576
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/home-1/slides/2-bg.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  <div class=\"slider-container\">
                     <div class=\"rslide-caption-3 hidden-xs\">
                        <a href=\"#\">MEN COLLECTIONS</a> &#x25a1;
                        <a href=\"#\">WOMAN COLLECTIONS</a> &#x25a1;
                        <a href=\"#\">AWESOME ACCESSORIES</a> 
                     </div>
                     <div class=\"rslide-caption-4\">
                        Shop+ SUPER ELEGANT SHOP
                     </div>
                  </div>
               </li>
               <li>
                  <img src=\"";
        // line 589
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/home-1/slides/3-bg.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  <div class=\"slider-container\">
                     <h3 class=\"rslide-caption-5\">
                        WE DESIGNED ELEGANT AND FUNCTIONAL SHOP
                     </h3>
                     <p class=\"rslide-caption-6 hidden-xs\">
                        Shop+ beautiful and functional shop, we included many options and shortcodes. <br>
                        This package has everythink if you need to start your business
                     </p>
                     <button class=\"rslide-button-1 hidden-xs\">BUY THIS TEMPLATE NOW</button>
                  </div>
               </li>
            </ul>
            <div class=\"rslides_nav_block\">
               <div class=\"rslides-number\">1/3</div>
            </div>
         </div>
      </section> <!-- home1-slider -->   

      <div class=\"bottom-line\">
         <div class=\"container\">
            <div class=\"gap-30\"></div>
            <div class=\"row\">
               <div class=\"col-md-4 text-center\">
                  <a href=\"category.html\" class=\"img-fade-hover\"><img src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/home-1/banner-1.jpg"), "html", null, true);
        echo "\" src=\"\" alt=\"\"></a>
                   <div class=\"gap-30\"></div>
               </div>
               <div class=\"col-md-4 text-center\">
                  <a href=\"category.html\" class=\"img-fade-hover\"><img src=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/home-1/banner-2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                   <div class=\"gap-30\"></div>
               </div>
               <div class=\"col-md-4 text-center\">
                  <a href=\"category.html\" class=\"img-fade-hover\"><img src=\"";
        // line 621
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/home-1/banner-3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                   <div class=\"gap-30\"></div>
               </div>
            </div>
            <div class=\"gap-30\"></div>
         </div>
      </div>

      
         <div class=\"container\">
            <div class=\"gap-50\"></div>
            <div class=\"text-center\">
               <ul class=\"product-categories moving-hover-line\" role=\"tablist\">
                  <li class=\"active\"><a href=\"#pl-new-products\" role=\"tab\" data-toggle=\"tab\">New Products</a></li>
                  <li><a href=\"#pl-featured\" role=\"tab\" data-toggle=\"tab\">Featured</a></li>
                  <li><a href=\"#pl-special\" role=\"tab\" data-toggle=\"tab\">Special</a></li>
                  <li><a href=\"#pl-bestsellers\" role=\"tab\" data-toggle=\"tab\">Bestsellers</a></li>
                  <li class=\"hover-line\"></li>
               </ul>
            </div>
            <div class=\"tab-content tab-no-style\">
               <div class=\"tab-pane fade in active\" id=\"pl-new-products\">
                  <div class=\"products-list pl-carousel\">
                     <div class=\"pl-controls\">
                        <a href=\"#\" class=\"pl-ctl-left\"></a>
                        <a href=\"#\" class=\"pl-ctl-right\"></a>
                     </div>
                     <ul class=\"pl-pages\">
                        <li class=\"active\">
                           <div class=\"row\">
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                    <a href=\"product-page.html\">
                                       <img src=\"";
        // line 654
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/products/thumbs/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </a>
                                    <label class=\"pl-badge\">NEW</label>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\">\$ 950.00</span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating stars-4\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/1.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <label class=\"pl-badge\">- 50%</label>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/3.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/4.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/5.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/6.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/7.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/8.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                            <div class=\"row\">
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/1.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <label class=\"pl-badge\">- 50%</label>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/3.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/4.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/5.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/6.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/7.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/8.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                    <a href=\"product-page.html\">
                                       <img src=\"images/products/thumbs/1.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <label class=\"pl-badge\">NEW</label>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\">\$ 950.00</span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating stars-4\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <div class=\"pl-controls plc-bottom\">
                        <a href=\"#\" class=\"pl-ctl-left\"></a>
                        <a href=\"#\" class=\"pl-ctl-right\"></a>
                     </div>
                  </div>
               </div>
               <div class=\"tab-pane fade\" id=\"pl-featured\">
                  <div class=\"products-list pl-carousel\">
                     <div class=\"pl-controls\">
                        <a href=\"#\" class=\"pl-ctl-left\"></a>
                        <a href=\"#\" class=\"pl-ctl-right\"></a>
                     </div>
                     <ul class=\"pl-pages\">
                        <li class=\"active\">
                           <div class=\"row\">
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/1.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <label class=\"pl-badge\">- 50%</label>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/3.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/4.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/5.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/6.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/7.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/8.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                    <a href=\"product-page.html\">
                                       <img src=\"images/products/thumbs/1.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <label class=\"pl-badge\">NEW</label>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\">\$ 950.00</span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating stars-4\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                            <div class=\"row\">
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/1.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <label class=\"pl-badge\">- 50%</label>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/3.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/4.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/5.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/6.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/7.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/8.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                    <a href=\"product-page.html\">
                                       <img src=\"images/products/thumbs/1.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <label class=\"pl-badge\">NEW</label>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\">\$ 950.00</span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating stars-4\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <div class=\"pl-controls plc-bottom\">
                        <a href=\"#\" class=\"pl-ctl-left\"></a>
                        <a href=\"#\" class=\"pl-ctl-right\"></a>
                     </div>
                  </div>
               </div>
               <div class=\"tab-pane fade\" id=\"pl-special\">
                  <div class=\"products-list pl-carousel\">
                     <div class=\"pl-controls\">
                        <a href=\"#\" class=\"pl-ctl-left\"></a>
                        <a href=\"#\" class=\"pl-ctl-right\"></a>
                     </div>
                     <ul class=\"pl-pages\">
                        <li class=\"active\">
                           <div class=\"row\">
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/3.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/4.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/5.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/6.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/7.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/8.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                               <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                    <a href=\"product-page.html\">
                                       <img src=\"images/products/thumbs/1.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <label class=\"pl-badge\">NEW</label>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\">\$ 950.00</span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating stars-4\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/1.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <label class=\"pl-badge\">- 50%</label>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                            <div class=\"row\">
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/1.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <label class=\"pl-badge\">- 50%</label>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/3.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/4.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/5.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/6.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/7.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/8.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                    <a href=\"product-page.html\">
                                       <img src=\"images/products/thumbs/1.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <label class=\"pl-badge\">NEW</label>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\">\$ 950.00</span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating stars-4\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <div class=\"pl-controls plc-bottom\">
                        <a href=\"#\" class=\"pl-ctl-left\"></a>
                        <a href=\"#\" class=\"pl-ctl-right\"></a>
                     </div>
                  </div>
               </div>
               <div class=\"tab-pane fade\" id=\"pl-bestsellers\">
                  <div class=\"products-list pl-carousel\">
                     <div class=\"pl-controls\">
                        <a href=\"#\" class=\"pl-ctl-left\"></a>
                        <a href=\"#\" class=\"pl-ctl-right\"></a>
                     </div>
                     <ul class=\"pl-pages\">
                        <li class=\"active\">
                           <div class=\"row\">
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/4.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/5.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/6.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/7.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/8.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                    <a href=\"product-page.html\">
                                       <img src=\"images/products/thumbs/1.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <label class=\"pl-badge\">NEW</label>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\">\$ 950.00</span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating stars-4\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/1.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <label class=\"pl-badge\">- 50%</label>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/3.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                            <div class=\"row\">
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/1.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <label class=\"pl-badge\">- 50%</label>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/3.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/4.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/5.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/6.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/7.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                   <a href=\"product-page.html\" class=\"pl-w-backside\">
                                       <img src=\"images/products/thumbs/8.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\"></span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                              <div class=\"col-md-3 col-sm-6 pl-item hidden-xs\">
                                 <figure>
                                    <a href=\"product-page.html\">
                                       <img src=\"images/products/thumbs/1.jpg\" alt=\"\">
                                       <span class=\"pl-backside\">
                                          <img src=\"images/products/thumbs/2.jpg\" alt=\"\">
                                       </span>
                                    </a>
                                    <label class=\"pl-badge\">NEW</label>
                                    <figcaption>
                                       <a href=\"#\" class=\"pl-button pl-addcart\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Cart\"><i class=\"icon-bag\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-qview\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Quick View\"><i class=\"icon-eye\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-compare\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Compare\"><i class=\"arrow_left-right_alt\"></i></a>
                                       <a href=\"#\" class=\"pl-button pl-wishlist\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add To Wish List\"><i class=\"icon-heart\"></i></a>
                                    </figcaption>
                                 </figure>
                                 <div class=\"pl-caption\">
                                    <p class=\"pl-price-block\">
                                       <span class=\"pl-price-old\">\$ 950.00</span>
                                       <span class=\"pl-price\">\$ 900.00</span>
                                    </p>
                                    <p class=\"pl-name\">Pure Cotton Shirt Slim Fit</p>
                                    <span class=\"stars-rating stars-4\"><span class=\"stars\"></span></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <div class=\"pl-controls plc-bottom\">
                        <a href=\"#\" class=\"pl-ctl-left\"></a>
                        <a href=\"#\" class=\"pl-ctl-right\"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      

      <div class=\"bottom-line\">
         <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-md-6 col-lg-5\">
                  <div class=\"most-popular-box box-with-pager mobile-collapse\">
                     <div class=\"title-type-1 mobile-collapse-header\">
                        WHAT OUR CLIENTS SAY
                     </div>
                     <div class=\"mobile-collapse-body\">
                        <ul class=\"vertical-bx-1\">
                           <li>
                              <div class=\"client-item\">
                                 <figure>
                                    <img src=\"images/review/avatar-1.jpg\" alt=\"image name\" class=\"\">
                                 </figure>
                                 <div class=\"ci-body\">
                                    <p>
                                       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                    </p>
                                    <p><span class=\"ci-name\">John Doe</span> – Happy customer</p>
                                 </div>
                              </div>
                              <div class=\"client-item\">
                                 <figure>
                                    <img src=\"images/review/avatar-2.jpg\" alt=\"image name\" class=\"\">
                                 </figure>
                                 <div class=\"ci-body\">
                                    <p>
                                       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                    </p>
                                    <p><span class=\"ci-name\">Mihael Doe</span> – Happy customer</p>
                                 </div>
                              </div>
                              <div class=\"client-item\">
                                 <figure>
                                    <img src=\"images/review/avatar-3.jpg\" alt=\"image name\" class=\"\">
                                 </figure>
                                 <div class=\"ci-body\">
                                    <p>
                                       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                    </p>
                                    <p><span class=\"ci-name\">Thomas Doe</span> – Happy customer</p>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class=\"col-md-6 col-lg-5 col-lg-offset-2\">
                  <div class=\"most-popular-box box-with-pager mobile-collapse\">
                     <div class=\"title-type-1 mobile-collapse-header\">
                        OUR BRANDS
                     </div>
                     <div class=\"mobile-collapse-body\">
                        <ul class=\"vertical-bx-1\">
                           <li>
                              <div class=\"brands-list\">
                                 <div class=\"bl-item\">
                                    <a href=\"basic-page.html\" class=\"bl-item-inner\">      
                                       <img src=\"images/brands/nike.png\" alt=\"\">
                                    </a>
                                 </div>
                                 <div class=\"bl-item\">
                                    <a href=\"basic-page.html\" class=\"bl-item-inner\">      
                                       <img src=\"images/brands/converse.png\" alt=\"\">
                                    </a>
                                 </div>
                                 <div class=\"bl-item\">
                                    <a href=\"basic-page.html\" class=\"bl-item-inner\">      
                                       <img src=\"images/brands/puma.png\" alt=\"\">
                                    </a>
                                 </div>
                                 <div class=\"bl-item\">
                                    <a href=\"basic-page.html\" class=\"bl-item-inner\">      
                                       <img src=\"images/brands/adidas.png\" alt=\"\">
                                    </a>
                                 </div>
                                 <div class=\"bl-item\">
                                    <a href=\"basic-page.html\" class=\"bl-item-inner\">      
                                       <img src=\"images/brands/reebok.png\" alt=\"\">
                                    </a>
                                 </div>
                                 <div class=\"bl-item\">
                                    <a href=\"basic-page.html\" class=\"bl-item-inner\">      
                                       <img src=\"images/brands/spalding.png\" alt=\"\">
                                    </a>
                                 </div>
                                 <div class=\"bl-item\">
                                    <a href=\"basic-page.html\" class=\"bl-item-inner\">      
                                       <img src=\"images/brands/lotto.png\" alt=\"\">
                                    </a>
                                 </div>
                                 <div class=\"bl-item\">
                                    <a href=\"basic-page.html\" class=\"bl-item-inner\">      
                                       <img src=\"images/brands/ozark.png\" alt=\"\">
                                    </a>
                                 </div>
                                 <div class=\"bl-item\">
                                    <a href=\"basic-page.html\" class=\"bl-item-inner\">      
                                       <img src=\"images/brands/exr.png\" alt=\"\">
                                    </a>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class=\"gap-30\"></div>
         </div>
      </div>   

      <div class=\"bottom-line\">
         <div class=\"container\">
            <div class=\"gap-60\"></div>
            <div class=\"news-list mobile-collapse\">
               <h2 class=\"news-title mobile-collapse-header\">OUR LATEST NEWS</h2>
               <div class=\"row news-container mobile-collapse-body\">
                  <div class=\"col-md-4 col-sm-6 news-item\">
                     <a href=\"blog.html\" class=\"img-zoom-link\"><i class=\"icon-plus\"></i><img src=\"images/home-1/news-1.jpg\" alt=\"\"></a>
                     <div class=\"ni-body\">
                        <h3 class=\"ni-title\"><a href=\"blog.html\">AWESOME POST TITLE</a></h3>
                        <hr class=\"ni-title-line\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt ut labore et  velit perspiciatis unde omnis iste natus error sit est, qui </p>
                        <span class=\"ni-info\">
                           <span class=\"ni-date\"><i class=\"icon_calendar\"></i>February 28</span>
                           <span class=\"ni-commments\"><i class=\"icon_comment_alt\"></i>15 comments</span>
                        </span>
                     </div>
                  </div>
                  <div class=\"col-md-4 col-sm-6 news-item\">
                     <a href=\"blog.html\" class=\"img-zoom-link\"><i class=\"icon-plus\"></i><img src=\"images/home-1/news-2.jpg\" alt=\"\"></a>
                     <div class=\"ni-body\">
                        <h3 class=\"ni-title\"><a href=\"blog.html\">AWESOME POST TITLE</a></h3>
                        <hr class=\"ni-title-line\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt ut labore et  velit perspiciatis unde omnis iste natus error sit est, qui </p>
                        <span class=\"ni-info\">
                           <span class=\"ni-date\"><i class=\"icon_calendar\"></i>February 28</span>
                           <span class=\"ni-commments\"><i class=\"icon_comment_alt\"></i>15 comments</span>
                        </span>
                     </div>
                  </div>
                  <div class=\"col-md-4 col-sm-6 news-item\">
                     <a href=\"blog.html\" class=\"img-zoom-link\"><i class=\"icon-plus\"></i><img src=\"images/home-1/news-3.jpg\" alt=\"\"></a>
                     <div class=\"ni-body\">
                        <h3 class=\"ni-title\"><a href=\"blog.html\">AWESOME POST TITLE</a></h3>
                        <hr class=\"ni-title-line\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt ut labore et  velit perspiciatis unde omnis iste natus error sit est, qui </p>
                        <span class=\"ni-info\">
                           <span class=\"ni-date\"><i class=\"icon_calendar\"></i>February 28</span>
                           <span class=\"ni-commments\"><i class=\"icon_comment_alt\"></i>15 comments</span>
                        </span>
                     </div>
                  </div>
               </div> <!-- news-container -->
               <div class=\"text-center\">
                  <button class=\"btn news-loadmore\"><i class=\"icon-reload\"></i>Load More</button>
               </div>
            </div> <!-- news-list -->
            <div class=\"gap-70\"></div>
         </div>
      </div>   

      <div class=\"bottom-line\">
         <div class=\"container\">
            <div class=\"gap-60\"></div>
            <div class=\"row\">
               <div class=\"col-sm-4\">
                  <div class=\"services-item\">
                     <p class=\"si-icon\"><i class=\"icon-like\"></i></p>
                     <h3 class=\"si-title\"><a href=\"#\">Free Shipping</a></h3>
                     <hr class=\"si-line\">
                     <p class=\"si-content\">Lorem ipsum dolor sit amet, adipisicing elit, sed do eiusmod tempor enim ad minim  nostrud exercitation ullamco consequat irure dolor in reprehenderit  omnis voluptatem accusantium.</p>
                  </div>
               </div>
               <div class=\"col-sm-4\">
                  <div class=\"services-item\">
                     <p class=\"si-icon\"><i class=\"icon_currency\"></i></p>
                     <h3 class=\"si-title\"><a href=\"#\">Back Guarantee</a></h3>
                     <hr class=\"si-line\">
                     <p class=\"si-content\">Lorem ipsum dolor sit amet, adipisicing elit, sed do eiusmod tempor enim ad minim  nostrud exercitation ullamco consequat irure dolor in reprehenderit  omnis voluptatem accusantium.</p>
                  </div>
               </div>
               <div class=\"col-sm-4\">
                  <div class=\"services-item\">
                     <p class=\"si-icon\"><i class=\"icon-speedometer\"></i></p>
                     <h3 class=\"si-title\"><a href=\"#\">Fastest Dilivery</a></h3>
                     <hr class=\"si-line\">
                     <p class=\"si-content\">Lorem ipsum dolor sit amet, adipisicing elit, sed do eiusmod tempor enim ad minim  nostrud exercitation ullamco consequat irure dolor in reprehenderit  omnis voluptatem accusantium.</p>
                  </div>
               </div>
            </div>
            <div class=\"gap-30\"></div>
         </div>
      </div>

      <section>
         <div class=\"container\">
            <div class=\"gap-80\"></div>
            <div class=\"row subscribe\">
               <div class=\"col-md-6 col-sm-12\">
                  <h3><span class=\"icon-envelope\"></span>SUBSCRIBE FOR OUR NEWSLETTER</h3>
               </div>
               <div class=\"col-md-6 col-sm-12\">
                  <form action=\"/\">
                     <div class=\"required form-group search col-sm-8 col-xs-12\">
                        <input type=\"text\" class=\"placeholder-fix\" placeholder=\"Enter your e-mail adress\">
                     </div>
                     <div class=\"col-sm-4 col-xs-12\">
                           <input type=\"submit\" class=\"btn btn-sec-col\" value=\"SUBSCRIBE\">   
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      
   </div> <!-- pg-body -->

   <footer>

      <!-- page body content end -->
      <!-- footer-1 begin -->
      <div id=\"footer-1\">
         
            <div class=\"container\">
               <div class=\"row\">
                  <div class=\"col-md-4\">
                     <div class=\"most-popular-box box-with-pager mobile-collapse\">
                        <div class=\"title-type-1 mobile-collapse-header\">
                           Most Popular
                        </div>
                        <div class=\"mobile-collapse-body\">
                           <ul class=\"vertical-bx-1\">
                              <li>
                                 <a href=\"product-page.html\">      
                                    <figure>
                                       <span class=\"img-cover\"><img src=\"images/pr_1-small.jpg\" alt=\"image name\" class=\"pic\"></span>
                                       <figcaption>
                                          Black Bag
                                          <span class=\"price\">990.00</span>
                                       </figcaption>
                                    </figure>
                                 </a>
                                 <a href=\"product-page.html\">      
                                    <figure>
                                       <span class=\"img-cover\"><img src=\"images/pr_2-small.jpg\" alt=\"image name\" class=\"pic\"></span>
                                       <figcaption>
                                          Pure Cotton Shirt Slim Fit
                                          <span class=\"price\">\$30.00</span>
                                       </figcaption>
                                    </figure>
                                 </a>
                                 <a href=\"product-page.html\">      
                                    <figure>
                                       <span class=\"img-cover\"><img src=\"images/pr_3-small.jpg\" alt=\"image name\" class=\"pic\"></span>
                                       <figcaption>
                                          Pure Cotton Shirt Slim Fit
                                          <span class=\"price\">\$10.00</span>
                                       </figcaption>
                                    </figure>
                                 </a>
                              </li>
                              <li>
                                 <a href=\"product-page.html\">      
                                    <figure>
                                       <span class=\"img-cover\"><img src=\"images/pr_4-small.jpg\" alt=\"image name\" class=\"pic\"></span>
                                       <figcaption>
                                          Woman Red Handy Bag
                                          <span class=\"price\">990.00</span>
                                       </figcaption>
                                    </figure>
                                 </a>
                                 <a href=\"product-page.html\">      
                                    <figure>
                                       <span class=\"img-cover\"><img src=\"images/pr_5-small.jpg\" alt=\"image name\" class=\"pic\"></span>
                                       <figcaption>
                                          Man Black Leather Wallet
                                          <span class=\"price\">\$30.00</span>
                                       </figcaption>
                                    </figure>
                                 </a>
                                 <a href=\"product-page.html\">      
                                    <figure>
                                       <span class=\"img-cover\"><img src=\"images/pr_6-small.jpg\" alt=\"image name\" class=\"pic\"></span>
                                       <figcaption>
                                          Pure Cotton Shirt Slim Fit
                                          <span class=\"price\">\$10.00</span>
                                       </figcaption>
                                    </figure>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-md-4\">
                     <div class=\"twitter-box box-with-top-button mobile-collapse\">
                        <div class=\"title-type-1 mobile-collapse-header\">
                           Twitter
                        </div>
                        <a class=\"top-box-btn-1 mobile-collapse-additional\">Follow</a>
                        <ul class=\"tweets-group list-unstyled mobile-collapse-body\">
                           <li>
                              <p>Lorem ipsum dolor consectetur adipisicing exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. cupidatat non proident, sunt in culpa <a href=\"#\">envato.team/Aop3Dp</a></p>
                              <span>17 June 2016</span>
                           </li>
                           <li>
                              <p>Lorem ipsum dolor consectetur adipisicing exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. cupidatat non proident, sunt in culpa <a href=\"#\">envato.team/Aop3Dp</a></p>
                              <span>10 June 2016</span>
                           </li>
                           <li>
                              <p>Lorem ipsum dolor consectetur adipisicing exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. cupidatat non proident, sunt in culpa <a href=\"#\">envato.team/Aop3Dp</a></p>
                              <span>01 June 2016</span>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class=\"col-md-4\">
                     <div class=\"get-in-touch-box mobile-collapse\">
                        <div class=\"title-type-1 mobile-collapse-header\">
                           Get IN TOUCH WITH US
                        </div>
                        <div class=\"tweets-group mobile-collapse-body\">
                           <form action=\"/\" class=\"validation-engine\">
                              <div class=\"google-maps\">
                                 <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89553.25418528763!2d9.19406272678945!3d45.458941223623455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c1493f1275e7%3A0x3cffcd13c6740e8d!2sShop+!5e0!3m2!1sen!2s!4v1403031740860\" width=\"370\" height=\"150\"></iframe>
                              </div>
                              <div class=\"required form-group\">
                                 <input type=\"text\" class=\"form-control validate[required]\" data-prompt-position=\"topLeft\" placeholder=\"Enter your name\">
                              </div>
                              <div class=\"required form-group\">
                                 <input type=\"text\" class=\"form-control validate[required,custom[email]]\" data-prompt-position=\"topLeft\" placeholder=\"Enter your email\">
                              </div>
                              <div class=\"required form-group\">
                                 <textarea class=\"form-control validate[required]\" data-prompt-position=\"topLeft\" rows=\"3\" placeholder=\"Enter your message\"></textarea>
                              </div>
                              <div class=\"required form-group\">
                                 <button class=\"btn btn-sm btn-yet-col arrow-btn\" type=\"submit\">Send Message</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         
      </div>
      <!-- footer-1 end -->
      <!-- footer-2 begin -->
      <div id=\"footer-2\">
         
            <div class=\"container\">
               <div class=\"row\">
                  <div class=\"col-md-4\">
                     <div class=\"about-us-box mobile-collapse\">
                        <div class=\"title-type-1 mobile-collapse-header\">
                           About Us
                        </div>
                        <div class=\"mobile-collapse-body\">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                           </p>
                           <p>
                              voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-md-4\">
                     <div class=\"contact-info-box mobile-collapse\">
                        <div class=\"title-type-1 mobile-collapse-header\">
                           Contact Info
                        </div>
                        <ul class=\"list-unstyled mobile-collapse-body\">
                           <li><span><i class=\"icon-pointer\"></i></span><span>Shop+, Valencia Road, Dumaguete city, Italy.</span></li>
                           <li><span><i class=\"icon-screen-smartphone\"></i></span><span> +1800-555-6875</span></li>
                           <li><a href=\"mailto:your@email.com\"><span><i class=\"icon-envelope \"></i></span><span>your@email.com</span></a></li>
                           <li><a href=\"http://envato.com\"><span><i class=\"icon-globe\"></i></span><span>www.envato.com</span></a></li>
                        </ul>
                     </div>   
                  </div>
                  <div class=\"col-md-4\">
                     <div class=\"facebox-fan-box box-with-top-button mobile-collapse\">
                        <div class=\"title-type-1 mobile-collapse-header\">
                           Facebook Fans
                        </div>
                        <div id=\"fb-fans\" class=\"mobile-collapse-body\">
                           <iframe src=\"https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;width=360&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=388032001306737\"></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         
      </div>
      <!-- footer-2 end -->
      <!-- footer-3 begin -->
      <div id=\"footer-3\">
         
            <div class=\"container\">
               <div class=\"row\">
                  <div class=\"col-md-3 col-sm-12\">
                     <div class=\"information-box mobile-collapse\">
                        <div class=\"title-type-2 mobile-collapse-header\">
                           Information
                        </div>
                        <ul class=\"list-unstyled mobile-collapse-body\">
                           <li>
                              <a href=\"category.html\">
                                 Bestsellers
                              </a>
                           </li>
                           <li>
                              <a href=\"category.html\">
                                 New product
                              </a>
                           </li>
                           <li>
                              <a href=\"category.html\">
                                 Special product
                              </a>
                           </li>
                           <li>
                              <a href=\"category.html\">
                                 Featured product
                              </a>
                           </li>
                           <li>
                              <a href=\"contact.html\">
                                 Contact
                              </a>
                           </li>
                        </ul>      
                     </div>
                  </div>
                  <div class=\"col-md-3 col-sm-12\">
                     <div class=\"product-tags-box mobile-collapse\">
                        <div class=\"title-type-2 mobile-collapse-header\">
                           Product Tags
                        </div>
                        <div class=\"tags mobile-collapse-body\">
                           <a href=\"contact.html\">Men</a>
                           <a href=\"contact.html\">Furniture</a>
                           <a href=\"contact.html\">Electronic</a>
                           <a href=\"contact.html\">Fabric</a>
                           <a href=\"contact.html\">Jackets</a>
                           <a href=\"contact.html\">Clothes</a>
                           <a href=\"contact.html\">Flowers</a>
                           <a href=\"contact.html\">Book</a>
                           <a href=\"contact.html\">Shorts</a>
                        </div>
                     </div>
                  </div>
                  <div class=\"col-md-3 col-sm-12\">
                     <div class=\"my-account-box mobile-collapse\">
                        <div class=\"title-type-2 mobile-collapse-header\">
                           My Account
                        </div>
                        <ul class=\"list-unstyled mobile-collapse-body\">
                           <li>
                              <a href=\"account.html\">
                                 My Account
                              </a>
                           </li>
                           <li>
                              <a href=\"wishlist.html\">
                                 Wishlist
                              </a>
                           </li>
                           <li>
                              <a href=\"review_page.html\">
                                 Testimonials
                              </a>
                           </li>
                           <li>
                              <a href=\"coming-soon.html\">
                                 Newsletter
                              </a>
                           </li>
                           <li>
                              <a href=\"blog.html\">
                                 Blog
                              </a>
                           </li>
                        </ul>      
                     </div>
                  </div>
                  <div class=\"col-md-3 col-sm-12\">
                     <div class=\"main-categories-box mobile-collapse\">
                        <div class=\"title-type-2 mobile-collapse-header\">
                           Main Categories
                        </div>
                        <ul class=\"list-unstyled mobile-collapse-body\">
                           <li>
                              <a href=\"category.html\">
                                 For Men
                              </a>
                           </li>
                           <li>
                              <a href=\"category.html\">
                                 Jeans
                              </a>
                           </li>
                           <li>
                              <a href=\"category.html\">
                                 Jackets
                              </a>
                           </li>
                           <li>
                              <a href=\"category.html\">
                                 For Her
                              </a>
                           </li>
                           <li>
                              <a href=\"category.html\">
                                 Accessories
                              </a>
                           </li>
                        </ul>      
                     </div>
                  </div>
               </div>
            </div>
         
      </div>
      <!-- footer-3 end -->
      <!-- footer-4 begin -->
      <div id=\"footer-4\">
         
            <div class=\"container\">
               <div class=\"row\">
                  <div class=\"col-md-6 text-center-md\">
                     <img src=\"images/credit-cards.png\" alt=\"accepted credit cards\">
                  </div>
                  <div class=\"col-md-6 text-right text-center-md\">
                     <ul id=\"social-buttons\" class=\"list-inline\">
                        <li class=\"facebook\"><a href=\"#\"><i class=\"icon-social-facebook\"></i></a></li>
                        <li class=\"tweeter\"><a href=\"#\"><i class=\"icon-social-twitter \"></i></a></li>
                        <li class=\"gplus\"><a href=\"#\"><i class=\"social_googleplus \"></i></a></li>
                        <li class=\"youtube\"><a href=\"#\"><i class=\"social_youtube\"></i></a></li>
                        <li class=\"instantgram\"><a href=\"#\"><i class=\"social_instagram \"></i></a></li>
                        <li class=\"skype\"><a href=\"#\"><i class=\"social_skype\"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         
      </div>   
      <!-- footer-4 end -->
      <!-- footer-5 begin -->
      <div id=\"footer-5\">
         
            <div class=\"container\">
               <p class=\"copyright\">
                  © 2016 Shop+. All right reseved. Made with <i class=\"icon_heart\"></i> by <a href=\"http://envato.com\">Envato</a>
               </p>
            </div>
         
      </div>
      <!-- footer-5 end -->   

   </footer>


   <!-- common modals begin -->

   <div class=\"modal fade\" id=\"product-added\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"product-added\" aria-hidden=\"true\">
     <div class=\"modal-dialog modal-md\">
       <div class=\"modal-content\">
         <div class=\"modal-header\">
            <a href=\"#\" class=\"modal-close\" data-dismiss=\"modal\" aria-hidden=\"true\"><i class=\"icon_close\"></i></a>
            <h4 class=\"modal-title\">Item was added to your shopping cart</h4>
         </div>
         <div class=\"modal-body\">
            <div id=\"wishlist-product-group-modal\" class=\"dropdown-product-list\">
               <div class=\"dd-product-group\" id=\"pr11\">
                  <div class=\"dd-product-box pull-left\">
                     <a href=\"#\" title=\"product name\">
                        <img src=\"images/pr_2-small.jpg\" alt=\"product name\">
                     </a>
                  </div>
                  <div class=\"dd-product-desc pull-left\">
                     <a class=\"title\">Beautiful Fit Velvet Sweater For Him</a>
                     <div class=\"qty\">1 x <span class=\"active\">\$700.00</span></div>
                  </div>
               </div>
            </div>
         </div>
         <div class=\"modal-footer\">
            <div class=\"row no-gutter\">
               <div class=\"col-xs-6\">
                  <button type=\"button\" class=\"btn btn-md btn-third-col btn-w100\">View Cart</button>
               </div>
               <div class=\"col-xs-6\">
                  <button type=\"button\" class=\"btn btn-md btn-third-col btn-w100\" data-dismiss=\"modal\">Continue Shopping</button>
               </div>
            </div>
         </div>
       </div>
     </div>
   </div>
   <div class=\"modal fade\" id=\"info-box\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"product-added\" aria-hidden=\"true\">
     <div class=\"modal-dialog modal-md\">
       <div class=\"modal-content\">
         <div class=\"modal-header\">
            <a href=\"#\" class=\"modal-close\" data-dismiss=\"modal\" aria-hidden=\"true\"><i class=\"icon_close\"></i></a>
            <h4 class=\"modal-title\">Information</h4>
         </div>
         <div class=\"modal-body modal-body-info\">
            <p>Beautiful Fit Velvet Sweater has been added to comparison list</p>
         </div>
       </div>
     </div>
   </div>
   <!-- common modals end -->



   <!-- JS Libs -->
   <script src=\"";
        // line 2906
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 2907
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 2908
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 2909
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 2910
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-accessibleMegaMenu.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 2911
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.validationEngine.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 2912
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.validationEngine-en.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 2913
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/responsiveslides/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 2914
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/fastclick.js"), "html", null, true);
        echo "\"></script> <!-- Eliminating the 300ms click delay on mobile browsers -->
   <script src=\"";
        // line 2915
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/plugins.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 2916
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/scripts.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_2c9fd85a9e249243a89ebf6e998377f4c73d98895bd16ae6a9234f656437d9af->leave($__internal_2c9fd85a9e249243a89ebf6e998377f4c73d98895bd16ae6a9234f656437d9af_prof);

    }

    public function getTemplateName()
    {
        return "MTDTurismoBundle:Principal:principal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3068 => 2916,  3064 => 2915,  3060 => 2914,  3056 => 2913,  3052 => 2912,  3048 => 2911,  3044 => 2910,  3040 => 2909,  3036 => 2908,  3032 => 2907,  3028 => 2906,  773 => 654,  737 => 621,  730 => 617,  723 => 613,  696 => 589,  680 => 576,  663 => 562,  571 => 473,  563 => 468,  555 => 463,  536 => 447,  521 => 435,  506 => 423,  491 => 411,  433 => 356,  418 => 344,  266 => 195,  251 => 183,  221 => 156,  217 => 155,  167 => 108,  85 => 28,  76 => 26,  72 => 25,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  46 => 17,  41 => 15,  37 => 14,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->*/
/* <head>*/
/*    <meta charset="utf-8">*/
/*    <title>Agencia de Turismo</title>*/
/*    <meta name="description" content="">*/
/*    <meta name="keywords" content="">*/
/*    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">*/
/*    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->*/
/*    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>*/
/*    <link href="{{ asset('public/font-face/helvetica.css') }}" rel='stylesheet' type='text/css'>*/
/*    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">*/
/*    <!-- <link rel="stylesheet" href="plugins/accessiblemegamenu/megamenu.css"> -->*/
/*    <link rel="stylesheet" href="{{ asset('public/css/vendor/validation-engine.css') }}">*/
/*    <link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/responsiveslides/responsiveslides.css') }}">*/
/*    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">*/
/*    <link rel="stylesheet" href="{{ asset('public/fonts/simple-line-icons.css') }}">*/
/*    <link rel="stylesheet" href="{{ asset('public/fonts/elegant-icons.css') }}">*/
/*    <script src="{{ asset('public/js/modernizr-2.6.2.min.js') }}"></script>*/
/* </head>*/
/* <body>*/
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <script>alert('{{ flashMessage }}');</script>*/
/*     {% endfor %}*/
/*    <header>*/
/* */
/*       <!-- top bar begin -->*/
/*       <div id="top-bar">*/
/*          <div class="container">*/
/*             <div class="pull-left left-top-bar">*/
/*                <div id="lang">*/
/*                   <ul class="list-inline hidden-xs">*/
/*                      <li>*/
/*                         <a href="#" class="active">Español</a>   */
/*                      </li>*/
/*                      <li>*/
/*                         <a href="#">English</a>   */
/*                      </li>*/
/*                      <li>*/
/*                         <span></span>*/
/*                      </li>*/
/*                   </ul>*/
/*                   <div class="dropdown dropdown-top-list visible-xs">*/
/*                      <a  href="#" data-toggle="dropdown" title="">*/
/*                         English <span class="caret"></span>*/
/*                      </a>*/
/*                      <div class="dropdown-menu dropdown-top-menu">*/
/*                         <span class="dropdown-triangle-up"></span>*/
/*                         <ul class="dropdown-top-menu-list">*/
/*                            <li><a href="#">French</a></li>*/
/*                            <li><a href="#">German</a></li>*/
/*                         </ul>*/
/*                      </div>*/
/*                   </div>*/
/*                </div>*/
/*                <div id="currencies">*/
/*                   <ul class="list-inline hidden-xs">*/
/*                      <li>*/
/*                         <a href="#" class="active">USD</a>   */
/*                      </li>*/
/*                   </ul>*/
/*                   <div class="dropdown dropdown-top-list visible-xs">*/
/*                      <a  href="#" data-toggle="dropdown" title="">*/
/*                         USD <span class="caret"></span>*/
/*                      </a>*/
/*                      <div class="dropdown-menu dropdown-top-menu">*/
/*                         <span class="dropdown-triangle-up"></span>*/
/*                         <ul class="dropdown-top-menu-list">*/
/*                            <li><a href="#">EUR</a></li>*/
/*                            <li><a href="#">AUD</a></li>*/
/*                         </ul>*/
/*                      </div>*/
/*                   </div>*/
/*                </div>*/
/*                <div id="top-contacts">*/
/*                   <ul class="list-inline">*/
/*                      <li class="hidden-xs">*/
/*                         <i class="icon-call-in"></i>*/
/*                         <span>+ 1 (800) 2364 332 23 16</span>*/
/*                      </li>*/
/*                   </ul>*/
/*                </div>*/
/*             </div>*/
/*             <div class="pull-right">*/
/*                <div id="user-top-bar">*/
/*                   <ul class="list-inline">*/
/*                      <li class="btn-group">*/
/*                         <a href="#" class="pm_item visible-xs">*/
/*                            <i class="icon-bag"></i> (2)*/
/*                         </a>*/
/*                      </li>*/
/*                      <li class="btn-group dropdown">*/
/*                         <a  href="#" class="pm_item" data-toggle="dropdown" title="login">*/
/*                            <i class="icon-login"></i>*/
/*                            <span class="hidden-sm hidden-xs">Ingresar</span>*/
/*                         </a>*/
/*                         <div class="dropdown-menu dropdown-menu-right" role="menu">*/
/*                            <span class="dropdown-triangle-up"></span>*/
/*                            <a href="#" class="dd-close-btn"><i class="icon_close"></i></a>*/
/*                            <div class="dropdown-head">*/
/*                               <h4 class="pull-left">Ingrese sus Datos</h4>*/
/*                            </div>*/
/*                            <div class="dd-wrapper">*/
/*                               <div id="dd_login">*/
/*                                  <form action="{{ path('mtd_inicio_sesion') }}" method="post">*/
/*                                     <div class="required form-group">*/
/*                                        <input type="text" name="ci" placeholder="Ingrese su CI" class="placeholder-fix">*/
/*                                        <i class="icon_mail field-icon"></i>*/
/*                                     </div>*/
/*                                     <div class="required form-group">*/
/*                                        <input type="password" name="contrasena" placeholder="Ingrese su Contraseña" class="placeholder-fix">*/
/*                                        <i class="icon_lock field-icon"></i>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                        <input id="remember" class="stl" type="checkbox" value="1" name="remember">*/
/*                                        <label class="stl" for="remember"><span></span>remember me</label>*/
/*                                     </div>*/
/*                                     <div class="form-group text-center">*/
/*                                        <button type="submit" class="btn btn-sm btn-third-col">Ingresar</button>*/
/*                                     </div>*/
/*                                     <div class="text-center"><a href="coming-soon.html" class="active">Foget your password?</a></div>*/
/*                                     <div class="dd-delimiter"></div>*/
/*                                     <div class="form-group text-center">*/
/*                                        <button type="button" class="btn btn-sm btn-sec-col">Register</button>*/
/*                                     </div>*/
/*                                  </form>*/
/*                               </div>*/
/*                            </div>*/
/*                         </div>*/
/*                      </li>*/
/*                   </ul>*/
/*                </div>*/
/*             </div>*/
/* */
/*          </div>*/
/*       </div>*/
/*       <!-- top bar end -->*/
/*       <!-- header bar begin -->*/
/*       <div id="header-bar">*/
/*          <div class="container">*/
/*             <div class="row">*/
/*                <div class="col-md-3 top-search-box hidden-sm hidden-xs">*/
/*                   <form action="/" method="post">*/
/*                      <div class="required form-group">*/
/*                         <input type="text" name="search_query" placeholder="Search" class="placeholder-fix top-search" autocomplete="off">*/
/*                         <button><i class="icon_search field-icon"></i></button>*/
/*                      </div>*/
/*                   </form>*/
/*                </div>*/
/*                <div id="header-logo" class="col-md-6 col-sm-12">*/
/*                   <a href="#">*/
/*                      <img src="{{ asset('public/images/logo.svg') }}" class="logo center-block hidden-xs" alt="Shop+ - Responsive HTML5 Multipurpose Ecommerce Template">*/
/*                      <img src="{{ asset('public/images/logo.svg') }}" class="logo center-block visible-xs hidden-sm" alt="Shop+ - Responsive HTML5 Multipurpose Ecommerce Template">*/
/*                   </a>*/
/*                </div>*/
/*                <div class="col-md-3 hidden-sm hidden-xs">*/
/*                   <div id="shopping-cart-wrapper" class="dropdown">*/
/*                      <a href="#" class="shp-ca" data-toggle="dropdown">*/
/*                         <div class="s-bag-1">*/
/*                            <i class="icon-bag"></i>*/
/*                         </div>*/
/*                         <div class="s-cart-pan">*/
/*                            <div class="s-bag-2">*/
/*                               <span class="dd-products-count">2</span> item(s) / <span class="active dd-products-price">$230.00</span>*/
/*                            </div>*/
/*                         </div>*/
/*                      </a>*/
/*                      <div class="dropdown-menu dropdown-menu-right larger text-left" role="menu">*/
/*                         <span class="dropdown-triangle-up"></span>*/
/*                         <a href="#" class="dd-close-btn"><i class="icon_close"></i></a>*/
/*                         <div class="dropdown-head">*/
/*                            <h4 class="pull-left">2 items in the shopping bag</h4>*/
/*                         </div>*/
/*                         <div class="dd-wrapper">*/
/*                            <div class="dd-list-empty">There is no product in shopping cart!</div>*/
/*                            <div id="cart-product-group" class="dropdown-product-list">*/
/*                               <div class="dd-product-group" id="pr5">*/
/*                                  <div class="dd-product-box pull-left">*/
/*                                     <a href="product-page.html" title="product name">*/
/*                                        <img  src="{{ asset('public/images/pr_2-small.jpg') }}" alt="product name">*/
/*                                     </a>*/
/*                                  </div>*/
/*                                  <div class="dd-product-desc pull-left">*/
/*                                     <a class="title">Beautiful Fit Velvet Sweater For Him test for longer header test for longer header</a>*/
/*                                     <div class="qty">1 x <span class="active">$700.00</span></div>*/
/*                                     <a href="#" class="close-btn ddr"><i class="icon_close"></i></a>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="dd-product-group" id="pr6">*/
/*                                  <div class="dd-product-box pull-left">*/
/*                                     <a href="product-page.html" title="product name">*/
/*                                        <img  src="{{ asset('images/pr_3-small.jpg') }}" alt="product name">*/
/*                                     </a>*/
/*                                  </div>*/
/*                                  <div class="dd-product-desc pull-left">*/
/*                                     <a class="title">Beautiful Fit Velvet Sweater For Here</a>*/
/*                                     <div class="qty">1 x <span class="active">$800.00</span></div>*/
/*                                     <a href="#" class="close-btn ddr"><i class="icon_close"></i></a>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="text-center clear-all-btn">*/
/*                                  <span class="cart-block-subtotal">*/
/*                                     Cart Subtotal: $1500.00*/
/*                                  </span>*/
/*                               </div>*/
/*                            </div>*/
/*                            <div class="row no-gutter">*/
/*                               <div class="col-xs-6">*/
/*                                  <a href="shopping-cart.html" class="btn btn-md btn-third-col btn-w100">View Cart</a>*/
/*                               </div>*/
/*                               <div class="col-xs-6">*/
/*                                  <a href="checkout.html" class="btn btn-md btn-third-col btn-w100">Procced to Checkout</a>*/
/*                               </div>*/
/*                            </div>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                </div>*/
/*             </div>*/
/*          </div>*/
/*       </div>*/
/*       <!-- header bar end -->*/
/*       <!-- main menu begin -->*/
/*       <div class="top-menu">*/
/*          <div class="container">*/
/*             <nav class="main-menu">*/
/*                <ul class="nav-menu">*/
/*                   <li class="nav-item">*/
/*                      <a href="#"><i class="icon-screen-desktop"></i> Home</a>*/
/*                      <div class="sub-nav">*/
/*                           <ul class="sub-nav-group">*/
/*                               <li class="has-sub-nav">*/
/*                                  <a href="#"><span>Clothes version</span></a>*/
/*                                  <div class="sub-nav">*/
/*                                     <ul class="sub-nav-group">*/
/*                                        <li><a href="home-1-clothes.html"><span>Boxed Versihon</span></a></li>*/
/*                                        <li><a href="vistaPrincipal.html.twig.html"><span>Full version</span></a></li>*/
/*                                    </ul>*/
/*                                  </div>*/
/*                               </li>*/
/*                               <li><a href="home-2-furniture.html"><span>Furniture version</span></a></li>*/
/*                               <li><a href="home-3-bookstore.html"><span>Bookstore version</span></a></li>*/
/*                               <li><a href="home-4-electronics.html"><span>Electronics version</span></a></li>*/
/* 							  <li><a href="home-5-flower.html"><span>Flower version</span></a></li>*/
/*                           </ul>*/
/*                       </div>*/
/*                   </li>*/
/*                   <li class="nav-item">*/
/*                      <a href="#"><span><i class="icon-user"></i>Pages</span></a>*/
/*                      <div class="sub-nav full padding">*/
/*                         <div class="row">*/
/*                            <div class="col-md-3">*/
/*                               <ul class="sub-nav-group sub-nav-grey">*/
/*                                  <li><a href="basic-page.html"><span>Basic Page</span></a></li>*/
/*                                  <li><a href="blog.html"><span>Blog Page</span></a></li>*/
/*                                  <li><a href="category.html"><span>Category Page</span></a></li>*/
/*                                  <li><a href="account.html"><span>Account Page</span></a></li>*/
/*                                  <li><a href="coming-soon.html"><span>Coming Soon Page</span></a></li>*/
/*                               </ul>*/
/*                            </div>*/
/*                            <div class="col-md-3">*/
/*                               <ul class="sub-nav-group sub-nav-grey">*/
/*                                  <li><a href="contact.html"><span>Contact Page</span></a></li>*/
/*                                  <li><a href="email_template.html"><span>Email Template Page</span></a></li>*/
/*                                  <li><a href="login_register.html"><span>Login Register Page</span></a></li>*/
/*                                  <li><a href="order-complete.html"><span>Order Complete Page</span></a></li>*/
/*                                  <li><a href="order-history.html"><span>Order History</span></a></li>*/
/* */
/*                               </ul>*/
/*                            </div>*/
/*                            <div class="col-md-3">*/
/*                               <ul class="sub-nav-group sub-nav-grey">*/
/*                                  <li><a href="shopping-cart.html"><span>Shopping Cart Page</span></a></li>*/
/*                                  <li><a href="shortcodes.html"><span>Shortcodes Page</span></a></li>*/
/*                                  <li><a href="single-blog.html"><span>Single Blog Page</span></a></li>*/
/*                                  <li><a href="wishlist.html"><span>Wishlist Page</span></a></li>*/
/*                               </ul>*/
/*                            </div>*/
/*                            <div class="col-md-3">*/
/*                               <ul class="sub-nav-group sub-nav-grey">*/
/*                                  <li><a href="product-page.html"><span>Product Page</span></a></li>*/
/*                                  <li><a href="review_page.html"><span>Review Page</span></a></li>*/
/* 								 <li><a href="checkout.html"><span>Checkout Page</span></a></li>*/
/*                                  <li><a href="compare.html"><span>Compare Page</span></a></li>*/
/* 								 <li><a href="404.html"><span>404 Page</span></a></li>*/
/*                               </ul>*/
/*                            </div>*/
/*                         </div>*/
/*                      </div>*/
/*                   </li>*/
/*                   <li class="nav-item">*/
/*                      <a href="#"><span><i class="icon-user-female"></i> Women</span></a>*/
/*                      <div class="sub-nav full padding">*/
/*                         <div class="row">*/
/*                            <div class="col-md-3">*/
/*                               <h3 class="sub-nav-title">Jackets</h3>*/
/*                               <ul class="sub-nav-group sub-nav-grey">*/
/*                                  <li><a href="category.html"><span>Shirts</span></a></li>*/
/*                                  <li><a href="category.html"><span>Jumper & Cardigans</span></a></li>*/
/*                                  <li><a href="category.html"><span>Autumn Jackets</span></a></li>*/
/*                                  <li><a href="category.html"><span>Winter Jackets</span></a></li>*/
/*                                  <li><a href="category.html"><span>Leather Jackets</span></a></li>*/
/*                                  <li><a href="category.html"><span>Jeans</span></a></li>*/
/*                                  <li><a href="category.html"><span>Shoes</span></a></li>*/
/*                               </ul>*/
/*                            </div>*/
/*                            <div class="col-md-3">*/
/*                               <h3 class="sub-nav-title">ACCESSORIES</h3>*/
/*                               <ul class="sub-nav-group sub-nav-grey">*/
/*                                  <li><a href="category.html"><span>Bags</span></a></li>*/
/*                                  <li><a href="category.html"><span>Beauty</span></a></li>*/
/*                                  <li><a href="category.html"><span>Underwear</span></a></li>*/
/*                                  <li><a href="category.html"><span>Glasses</span></a></li>*/
/*                                  <li><a href="category.html"><span>Leather Jackets</span></a></li>*/
/*                                  <li><a href="category.html"><span>Jeans</span></a></li>*/
/*                                  <li><a href="category.html"><span>Shoes</span></a></li>*/
/*                               </ul>*/
/*                            </div>*/
/*                            <div class="col-md-3">*/
/*                               <h3 class="sub-nav-title">SHOES</h3>*/
/*                               <ul class="sub-nav-group sub-nav-grey">*/
/*                                  <li><a href="category.html"><span>Shoes</span></a></li>*/
/*                                  <li><a href="category.html"><span>Shorts</span></a></li>*/
/*                                  <li><a href="category.html"><span>Shirts</span></a></li>*/
/*                                  <li><a href="category.html"><span>Jeans</span></a></li>*/
/*                                  <li><a href="category.html"><span>Leather Jackets</span></a></li>*/
/*                                  <li><a href="category.html"><span>Suits & Blazers</span></a></li>*/
/*                                  <li><a href="category.html"><span>Shoes</span></a></li>*/
/*                               </ul>*/
/*                            </div>*/
/*                            <div class="col-md-3">*/
/*                               <div class="megamenu-popular box-with-pager">*/
/*                                  <div class="sub-nav-title">*/
/*                                     Popular products*/
/*                                  </div>*/
/*                                  <div>*/
/*                                     <ul class="vertical-bx-1">*/
/*                                        <li>*/
/*                                           <a href="product-page.html">      */
/*                                              <figure>*/
/*                                                 <span class="img-cover"><img src="{{ asset('public/images/pr_1-menu.jpg') }}" alt="image name" class="pic"></span>*/
/*                                                 <figcaption>*/
/*                                                    <p>Black Bag</p>*/
/*                                                    <span class="price">$950.00</span>*/
/*                                                    <span class="old-price">$990.00</span>*/
/*                                                 </figcaption>*/
/*                                              </figure>*/
/*                                           </a>*/
/*                                        </li>*/
/*                                        <li>*/
/*                                           <a href="product-page.html">      */
/*                                              <figure>*/
/*                                                 <span class="img-cover"><img src="{{ asset('public/images/pr_2-menu.jpg') }}" alt="image name" class="pic"></span>*/
/*                                                 <figcaption>*/
/*                                                    <p>Woman Red Handy Bag</p>*/
/*                                                    <span class="price">$950.00</span>*/
/*                                                    <span class="old-price">$990.00</span>*/
/*                                                 </figcaption>*/
/*                                              </figure>*/
/*                                           </a>*/
/*                                        </li>*/
/*                                     </ul>*/
/*                                  </div>*/
/*                               </div>*/
/*                            </div>*/
/*                         </div>*/
/*                      </div>*/
/*                   </li>*/
/*                   <li class="nav-item">*/
/*                      <a href="#"><span><i class="icon-screen-desktop"></i> Electronics</span></a>*/
/*                      <div class="sub-nav">*/
/*                           <ul class="sub-nav-group">*/
/*                               <li><a href="account.html"><span>Account</span></a></li>*/
/*                               <li><a href="#"><span>New Product</span></a></li>*/
/*                               <li><a href="#"><span>Special Product</span></a></li>*/
/*                               <li><a href="#"><span>Featured Product</span></a></li>*/
/*                               <li><a href="contact.html"><span>Contact</span></a></li>*/
/*                               <li><a href="shortcodes.html"><span>Shortcodes</span></a></li>*/
/*                               <li class="has-sub-nav">*/
/*                                  <a href="#"><span>Submenu Left</span></a>*/
/*                                  <div class="sub-nav left-side">*/
/*                                     <ul class="sub-nav-group">*/
/*                                        <li><a href="account.html"><span>Account</span></a></li>*/
/*                                        <li><a href="#"><span>New Product</span></a></li>*/
/*                                        <li><a href="#"><span>Special Product</span></a></li>*/
/*                                        <li><a href="#"><span>Featured Product</span></a></li>*/
/*                                        <li><a href="contact.html"><span>Contact</span></a></li>*/
/*                                        <li><a href="shortcodes.html"><span>Shortcodes</span></a></li>*/
/*                                    </ul>*/
/*                                  </div>*/
/*                               </li>*/
/*                           </ul>*/
/*                       </div>*/
/*                   </li>*/
/*                   <li class="nav-item">*/
/*                      <a href="blog.html"><span><i class="icon-pencil"></i> Blog</span></a>*/
/*                   </li>*/
/*                   <li class="nav-item">*/
/*                      <a href="coming-soon.html"><span><i class="icon-cup"></i> Popular</span></a>*/
/*                      <div class="sub-nav full padding">*/
/*                         <div class="megamenu-popular mmp-type-2 box-with-pager">*/
/*                            <ul class="vertical-bx-1">*/
/*                               <li>*/
/*                                  <div class="row">*/
/*                                     <div class="col-md-3">*/
/*                                        <a href="product-page.html">      */
/*                                           <figure>*/
/*                                              <span class="img-cover"><img src="{{ asset('public/images/pr_1.jpg') }}" alt="image name" class="pic"></span>*/
/*                                              <figcaption>*/
/*                                                 <p>Woman Red Handy Bag</p>*/
/*                                                 <span class="price">$950.00</span>*/
/*                                                 <span class="old-price">$990.00</span>*/
/*                                              </figcaption>*/
/*                                           </figure>*/
/*                                        </a>*/
/*                                     </div>*/
/*                                     <div class="col-md-3">*/
/*                                        <a href="product-page.html">      */
/*                                           <figure>*/
/*                                              <span class="img-cover"><img src="{{ asset('public/images/pr_2.jpg') }}" alt="image name" class="pic"></span>*/
/*                                              <figcaption>*/
/*                                                 <p>Woman Red Handy Bag</p>*/
/*                                                 <span class="price">$950.00</span>*/
/*                                                 <span class="old-price">$990.00</span>*/
/*                                              </figcaption>*/
/*                                           </figure>*/
/*                                        </a>*/
/*                                     </div>*/
/*                                     <div class="col-md-3">*/
/*                                        <a href="product-page.html">      */
/*                                           <figure>*/
/*                                              <span class="img-cover"><img src="{{ asset('public/images/pr_3.jpg') }}" alt="image name" class="pic"></span>*/
/*                                              <figcaption>*/
/*                                                 <p>Woman Red Handy Bag</p>*/
/*                                                 <span class="price">$950.00</span>*/
/*                                                 <span class="old-price">$990.00</span>*/
/*                                              </figcaption>*/
/*                                           </figure>*/
/*                                        </a>*/
/*                                     </div>*/
/*                                     <div class="col-md-3">*/
/*                                        <a href="product-page.html">      */
/*                                           <figure>*/
/*                                              <span class="img-cover"><img src="{{ asset('public/images/pr_4.jpg') }}" alt="image name" class="pic"></span>*/
/*                                              <figcaption>*/
/*                                                 <p>Woman Red Handy Bag</p>*/
/*                                                 <span class="price">$950.00</span>*/
/*                                                 <span class="old-price">$990.00</span>*/
/*                                              </figcaption>*/
/*                                           </figure>*/
/*                                        </a>*/
/*                                     </div>*/
/*                                  </div>*/
/*                               </li>*/
/*                            </ul>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                            <div class="col-md-4">*/
/*                               <a href="blog.html" class="img-fade-hover">*/
/*                                  <img src="{{ asset('public/images/megamenu-btm1.jpg') }}" alt="">*/
/*                               </a>*/
/*                            </div>*/
/*                            <div class="col-md-4">*/
/*                               <a href="blog.html" class="img-fade-hover">*/
/*                                  <img src="{{ asset('public/images/megamenu-btm2.jpg') }}" alt="">*/
/*                               </a>*/
/*                            </div>*/
/*                            <div class="col-md-4">*/
/*                               <a href="blog.html" class="img-fade-hover">*/
/*                                  <img src="{{ asset('public/images/megamenu-btm3.jpg') }}" alt="">*/
/*                               </a>*/
/*                            </div>*/
/*                         </div>*/
/*                      </div>*/
/*                   </li>*/
/*                   <li class="nav-item">*/
/*                      <a href="contact.html"><span><i class="icon-call-in"></i> Contact Us</span></a>*/
/*                   </li>*/
/*                   <li class="nav-item">*/
/*                      <a href="category.html"><span><i class="icon-wallet"></i> Sale</span></a>*/
/*                   </li>*/
/*                </ul>*/
/*             </nav>*/
/*          </div>*/
/*       </div>*/
/*       <!-- main menu end -->*/
/*       <!-- mobile menu begin -->*/
/*       <div class="mobile-menu">*/
/*          <nav>*/
/*             <div class="mobile-menu-button">*/
/*                MENU*/
/*                <a href="#" class="mobile-menu-toggler"><span></span><span></span><span></span></a>*/
/*             </div>*/
/*             <div class="mobile-menu-body">*/
/*                <div class="mobile-menu-search clearfix">*/
/*                   <form action="/">*/
/*                      <div class="form-group">*/
/*                         <input type="text" class="form-control" placeholder="Search">*/
/*                      </div>*/
/*                      <button type="submit" class="btn btn-default"><i class="icon-magnifier"></i></button>*/
/*                   </form>*/
/*                </div>*/
/*                <ul>*/
/*                   <li><a href="#"><i class="icon-home"></i> Home</a></li>*/
/*                   <li>*/
/*                      <a href="#"><i class="icon-user"></i> Men</a>*/
/*                      <a class="submenu-toggler" href="#"><i class="arrow_carrot-down"></i></a>*/
/*                      <ul>*/
/*                         <li><a href="#"><span>Shirts</span></a></li>*/
/*                         <li><a href="#"><span>Jumper & Cardigans</span></a></li>*/
/*                         <li><a href="#"><span>Autumn Jackets</span></a></li>*/
/*                         <li><a href="#"><span>Winter Jackets</span></a></li>*/
/*                         <li><a href="#"><span>Leather Jackets</span></a></li>*/
/*                         <li><a href="#"><span>Jeans</span></a></li>*/
/*                         <li><a href="#"><span>Shoes</span></a></li>*/
/*                      </ul>*/
/*                   </li>*/
/*                   <li>*/
/*                      <a href="#"><i class="icon-user-female"></i> Women</a>*/
/*                      <a class="submenu-toggler" href="#"><i class="arrow_carrot-down"></i></a>*/
/*                      <ul>*/
/*                         <li><a href="#"><span>Shirts</span></a></li>*/
/*                         <li><a href="#"><span>Jumper & Cardigans</span></a></li>*/
/*                         <li><a href="#"><span>Autumn Jackets</span></a></li>*/
/*                         <li><a href="#"><span>Winter Jackets</span></a></li>*/
/*                         <li><a href="#"><span>Leather Jackets</span></a></li>*/
/*                         <li><a href="#"><span>Jeans</span></a></li>*/
/*                         <li><a href="#"><span>Shoes</span></a></li>*/
/*                      </ul>*/
/*                   </li>*/
/*                   <li>*/
/*                      <a href="#"><i class="icon-screen-desktop"></i> Electronics</a>*/
/*                      <a class="submenu-toggler" href="#"><i class="arrow_carrot-down"></i></a>*/
/*                      <ul>*/
/*                         <li><a href="#"><span>Shirts</span></a></li>*/
/*                         <li><a href="#"><span>Jumper & Cardigans</span></a></li>*/
/*                         <li><a href="#"><span>Autumn Jackets</span></a></li>*/
/*                         <li><a href="#"><span>Winter Jackets</span></a></li>*/
/*                         <li><a href="#"><span>Leather Jackets</span></a></li>*/
/*                         <li><a href="#"><span>Jeans</span></a></li>*/
/*                         <li><a href="#"><span>Shoes</span></a></li>*/
/*                      </ul>*/
/*                   </li>*/
/*                </ul>*/
/*                <p><i class="icon-call-in"></i> + 1 (800) 2364 332 23 16</p>*/
/*                <p><i class="icon-envelope"></i>your@email.com</p>*/
/*             </div>*/
/*          </nav>*/
/*       </div>*/
/*       <!-- mobile menu end -->*/
/*    </header>*/
/*    <!-- page body content begin -->*/
/*    <div class="pg-body">*/
/* */
/*       <section id="home1-slider">*/
/*          <div class="home1-slider rslides-container loading">*/
/*             <ul class="rslides">*/
/*                <li>*/
/*                   <img src="{{ asset('public/images/home-1/slides/1-bg.jpg') }}" alt="">*/
/*                   <div class="slider-container">*/
/*                      <div class="rslide-caption-1">*/
/*                         <span class="sc1-year">2016</span>*/
/*                         <span>Summer</span>*/
/*                         <span>Collection</span>*/
/*                      </div>*/
/*                      <div class="rslide-caption-2 hidden-xs">*/
/*                         UPGRADE YOUR STYLE WITS US ALL THE FASHION TRENDS  YOU NEED THIS SEASON  FILL YOUR CLOSET  RIGHT NOW*/
/*                      </div>*/
/*                      <button class="rslide-button-1 hidden-xs">Go to the collection </button>*/
/*                   </div>*/
/*                </li>*/
/*                <li>*/
/*                   <img src="{{ asset('public/images/home-1/slides/2-bg.jpg') }}" alt="">*/
/*                   <div class="slider-container">*/
/*                      <div class="rslide-caption-3 hidden-xs">*/
/*                         <a href="#">MEN COLLECTIONS</a> &#x25a1;*/
/*                         <a href="#">WOMAN COLLECTIONS</a> &#x25a1;*/
/*                         <a href="#">AWESOME ACCESSORIES</a> */
/*                      </div>*/
/*                      <div class="rslide-caption-4">*/
/*                         Shop+ SUPER ELEGANT SHOP*/
/*                      </div>*/
/*                   </div>*/
/*                </li>*/
/*                <li>*/
/*                   <img src="{{ asset('public/images/home-1/slides/3-bg.jpg') }}" alt="">*/
/*                   <div class="slider-container">*/
/*                      <h3 class="rslide-caption-5">*/
/*                         WE DESIGNED ELEGANT AND FUNCTIONAL SHOP*/
/*                      </h3>*/
/*                      <p class="rslide-caption-6 hidden-xs">*/
/*                         Shop+ beautiful and functional shop, we included many options and shortcodes. <br>*/
/*                         This package has everythink if you need to start your business*/
/*                      </p>*/
/*                      <button class="rslide-button-1 hidden-xs">BUY THIS TEMPLATE NOW</button>*/
/*                   </div>*/
/*                </li>*/
/*             </ul>*/
/*             <div class="rslides_nav_block">*/
/*                <div class="rslides-number">1/3</div>*/
/*             </div>*/
/*          </div>*/
/*       </section> <!-- home1-slider -->   */
/* */
/*       <div class="bottom-line">*/
/*          <div class="container">*/
/*             <div class="gap-30"></div>*/
/*             <div class="row">*/
/*                <div class="col-md-4 text-center">*/
/*                   <a href="category.html" class="img-fade-hover"><img src="{{ asset('public/images/home-1/banner-1.jpg') }}" src="" alt=""></a>*/
/*                    <div class="gap-30"></div>*/
/*                </div>*/
/*                <div class="col-md-4 text-center">*/
/*                   <a href="category.html" class="img-fade-hover"><img src="{{ asset('public/images/home-1/banner-2.jpg') }}" alt=""></a>*/
/*                    <div class="gap-30"></div>*/
/*                </div>*/
/*                <div class="col-md-4 text-center">*/
/*                   <a href="category.html" class="img-fade-hover"><img src="{{ asset('public/images/home-1/banner-3.jpg') }}" alt=""></a>*/
/*                    <div class="gap-30"></div>*/
/*                </div>*/
/*             </div>*/
/*             <div class="gap-30"></div>*/
/*          </div>*/
/*       </div>*/
/* */
/*       */
/*          <div class="container">*/
/*             <div class="gap-50"></div>*/
/*             <div class="text-center">*/
/*                <ul class="product-categories moving-hover-line" role="tablist">*/
/*                   <li class="active"><a href="#pl-new-products" role="tab" data-toggle="tab">New Products</a></li>*/
/*                   <li><a href="#pl-featured" role="tab" data-toggle="tab">Featured</a></li>*/
/*                   <li><a href="#pl-special" role="tab" data-toggle="tab">Special</a></li>*/
/*                   <li><a href="#pl-bestsellers" role="tab" data-toggle="tab">Bestsellers</a></li>*/
/*                   <li class="hover-line"></li>*/
/*                </ul>*/
/*             </div>*/
/*             <div class="tab-content tab-no-style">*/
/*                <div class="tab-pane fade in active" id="pl-new-products">*/
/*                   <div class="products-list pl-carousel">*/
/*                      <div class="pl-controls">*/
/*                         <a href="#" class="pl-ctl-left"></a>*/
/*                         <a href="#" class="pl-ctl-right"></a>*/
/*                      </div>*/
/*                      <ul class="pl-pages">*/
/*                         <li class="active">*/
/*                            <div class="row">*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                     <a href="product-page.html">*/
/*                                        <img src="{{ asset('public/images/products/thumbs/1.jpg') }}" alt="">*/
/*                                     </a>*/
/*                                     <label class="pl-badge">NEW</label>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old">$ 950.00</span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating stars-4"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/1.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <label class="pl-badge">- 50%</label>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/3.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/4.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/5.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/6.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/7.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/8.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                            </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="row">*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/1.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <label class="pl-badge">- 50%</label>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/3.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/4.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/5.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/6.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/7.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/8.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                     <a href="product-page.html">*/
/*                                        <img src="images/products/thumbs/1.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <label class="pl-badge">NEW</label>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old">$ 950.00</span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating stars-4"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                            </div>*/
/*                         </li>*/
/*                      </ul>*/
/*                      <div class="pl-controls plc-bottom">*/
/*                         <a href="#" class="pl-ctl-left"></a>*/
/*                         <a href="#" class="pl-ctl-right"></a>*/
/*                      </div>*/
/*                   </div>*/
/*                </div>*/
/*                <div class="tab-pane fade" id="pl-featured">*/
/*                   <div class="products-list pl-carousel">*/
/*                      <div class="pl-controls">*/
/*                         <a href="#" class="pl-ctl-left"></a>*/
/*                         <a href="#" class="pl-ctl-right"></a>*/
/*                      </div>*/
/*                      <ul class="pl-pages">*/
/*                         <li class="active">*/
/*                            <div class="row">*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/1.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <label class="pl-badge">- 50%</label>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/3.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/4.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/5.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/6.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/7.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/8.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                     <a href="product-page.html">*/
/*                                        <img src="images/products/thumbs/1.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <label class="pl-badge">NEW</label>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old">$ 950.00</span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating stars-4"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                            </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="row">*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/1.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <label class="pl-badge">- 50%</label>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/3.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/4.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/5.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/6.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/7.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/8.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                     <a href="product-page.html">*/
/*                                        <img src="images/products/thumbs/1.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <label class="pl-badge">NEW</label>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old">$ 950.00</span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating stars-4"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                            </div>*/
/*                         </li>*/
/*                      </ul>*/
/*                      <div class="pl-controls plc-bottom">*/
/*                         <a href="#" class="pl-ctl-left"></a>*/
/*                         <a href="#" class="pl-ctl-right"></a>*/
/*                      </div>*/
/*                   </div>*/
/*                </div>*/
/*                <div class="tab-pane fade" id="pl-special">*/
/*                   <div class="products-list pl-carousel">*/
/*                      <div class="pl-controls">*/
/*                         <a href="#" class="pl-ctl-left"></a>*/
/*                         <a href="#" class="pl-ctl-right"></a>*/
/*                      </div>*/
/*                      <ul class="pl-pages">*/
/*                         <li class="active">*/
/*                            <div class="row">*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/3.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/4.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/5.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/6.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/7.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/8.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                                <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                     <a href="product-page.html">*/
/*                                        <img src="images/products/thumbs/1.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <label class="pl-badge">NEW</label>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old">$ 950.00</span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating stars-4"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/1.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <label class="pl-badge">- 50%</label>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                            </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="row">*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/1.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <label class="pl-badge">- 50%</label>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/3.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/4.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/5.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/6.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/7.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/8.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                     <a href="product-page.html">*/
/*                                        <img src="images/products/thumbs/1.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <label class="pl-badge">NEW</label>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old">$ 950.00</span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating stars-4"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                            </div>*/
/*                         </li>*/
/*                      </ul>*/
/*                      <div class="pl-controls plc-bottom">*/
/*                         <a href="#" class="pl-ctl-left"></a>*/
/*                         <a href="#" class="pl-ctl-right"></a>*/
/*                      </div>*/
/*                   </div>*/
/*                </div>*/
/*                <div class="tab-pane fade" id="pl-bestsellers">*/
/*                   <div class="products-list pl-carousel">*/
/*                      <div class="pl-controls">*/
/*                         <a href="#" class="pl-ctl-left"></a>*/
/*                         <a href="#" class="pl-ctl-right"></a>*/
/*                      </div>*/
/*                      <ul class="pl-pages">*/
/*                         <li class="active">*/
/*                            <div class="row">*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/4.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/5.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/6.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/7.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/8.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                     <a href="product-page.html">*/
/*                                        <img src="images/products/thumbs/1.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <label class="pl-badge">NEW</label>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old">$ 950.00</span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating stars-4"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/1.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <label class="pl-badge">- 50%</label>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/3.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                            </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="row">*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/1.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <label class="pl-badge">- 50%</label>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/3.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/4.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/5.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/6.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/7.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                    <a href="product-page.html" class="pl-w-backside">*/
/*                                        <img src="images/products/thumbs/8.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old"></span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="col-md-3 col-sm-6 pl-item hidden-xs">*/
/*                                  <figure>*/
/*                                     <a href="product-page.html">*/
/*                                        <img src="images/products/thumbs/1.jpg" alt="">*/
/*                                        <span class="pl-backside">*/
/*                                           <img src="images/products/thumbs/2.jpg" alt="">*/
/*                                        </span>*/
/*                                     </a>*/
/*                                     <label class="pl-badge">NEW</label>*/
/*                                     <figcaption>*/
/*                                        <a href="#" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag"></i></a>*/
/*                                        <a href="#" class="pl-button pl-qview" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a>*/
/*                                        <a href="#" class="pl-button pl-compare" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>*/
/*                                        <a href="#" class="pl-button pl-wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wish List"><i class="icon-heart"></i></a>*/
/*                                     </figcaption>*/
/*                                  </figure>*/
/*                                  <div class="pl-caption">*/
/*                                     <p class="pl-price-block">*/
/*                                        <span class="pl-price-old">$ 950.00</span>*/
/*                                        <span class="pl-price">$ 900.00</span>*/
/*                                     </p>*/
/*                                     <p class="pl-name">Pure Cotton Shirt Slim Fit</p>*/
/*                                     <span class="stars-rating stars-4"><span class="stars"></span></span>*/
/*                                  </div>*/
/*                               </div>*/
/*                            </div>*/
/*                         </li>*/
/*                      </ul>*/
/*                      <div class="pl-controls plc-bottom">*/
/*                         <a href="#" class="pl-ctl-left"></a>*/
/*                         <a href="#" class="pl-ctl-right"></a>*/
/*                      </div>*/
/*                   </div>*/
/*                </div>*/
/*             </div>*/
/*          </div>*/
/*       */
/* */
/*       <div class="bottom-line">*/
/*          <div class="container">*/
/*             <div class="row">*/
/*                <div class="col-md-6 col-lg-5">*/
/*                   <div class="most-popular-box box-with-pager mobile-collapse">*/
/*                      <div class="title-type-1 mobile-collapse-header">*/
/*                         WHAT OUR CLIENTS SAY*/
/*                      </div>*/
/*                      <div class="mobile-collapse-body">*/
/*                         <ul class="vertical-bx-1">*/
/*                            <li>*/
/*                               <div class="client-item">*/
/*                                  <figure>*/
/*                                     <img src="images/review/avatar-1.jpg" alt="image name" class="">*/
/*                                  </figure>*/
/*                                  <div class="ci-body">*/
/*                                     <p>*/
/*                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.*/
/*                                     </p>*/
/*                                     <p><span class="ci-name">John Doe</span> – Happy customer</p>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="client-item">*/
/*                                  <figure>*/
/*                                     <img src="images/review/avatar-2.jpg" alt="image name" class="">*/
/*                                  </figure>*/
/*                                  <div class="ci-body">*/
/*                                     <p>*/
/*                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.*/
/*                                     </p>*/
/*                                     <p><span class="ci-name">Mihael Doe</span> – Happy customer</p>*/
/*                                  </div>*/
/*                               </div>*/
/*                               <div class="client-item">*/
/*                                  <figure>*/
/*                                     <img src="images/review/avatar-3.jpg" alt="image name" class="">*/
/*                                  </figure>*/
/*                                  <div class="ci-body">*/
/*                                     <p>*/
/*                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.*/
/*                                     </p>*/
/*                                     <p><span class="ci-name">Thomas Doe</span> – Happy customer</p>*/
/*                                  </div>*/
/*                               </div>*/
/*                            </li>*/
/*                         </ul>*/
/*                      </div>*/
/*                   </div>*/
/*                </div>*/
/*                <div class="col-md-6 col-lg-5 col-lg-offset-2">*/
/*                   <div class="most-popular-box box-with-pager mobile-collapse">*/
/*                      <div class="title-type-1 mobile-collapse-header">*/
/*                         OUR BRANDS*/
/*                      </div>*/
/*                      <div class="mobile-collapse-body">*/
/*                         <ul class="vertical-bx-1">*/
/*                            <li>*/
/*                               <div class="brands-list">*/
/*                                  <div class="bl-item">*/
/*                                     <a href="basic-page.html" class="bl-item-inner">      */
/*                                        <img src="images/brands/nike.png" alt="">*/
/*                                     </a>*/
/*                                  </div>*/
/*                                  <div class="bl-item">*/
/*                                     <a href="basic-page.html" class="bl-item-inner">      */
/*                                        <img src="images/brands/converse.png" alt="">*/
/*                                     </a>*/
/*                                  </div>*/
/*                                  <div class="bl-item">*/
/*                                     <a href="basic-page.html" class="bl-item-inner">      */
/*                                        <img src="images/brands/puma.png" alt="">*/
/*                                     </a>*/
/*                                  </div>*/
/*                                  <div class="bl-item">*/
/*                                     <a href="basic-page.html" class="bl-item-inner">      */
/*                                        <img src="images/brands/adidas.png" alt="">*/
/*                                     </a>*/
/*                                  </div>*/
/*                                  <div class="bl-item">*/
/*                                     <a href="basic-page.html" class="bl-item-inner">      */
/*                                        <img src="images/brands/reebok.png" alt="">*/
/*                                     </a>*/
/*                                  </div>*/
/*                                  <div class="bl-item">*/
/*                                     <a href="basic-page.html" class="bl-item-inner">      */
/*                                        <img src="images/brands/spalding.png" alt="">*/
/*                                     </a>*/
/*                                  </div>*/
/*                                  <div class="bl-item">*/
/*                                     <a href="basic-page.html" class="bl-item-inner">      */
/*                                        <img src="images/brands/lotto.png" alt="">*/
/*                                     </a>*/
/*                                  </div>*/
/*                                  <div class="bl-item">*/
/*                                     <a href="basic-page.html" class="bl-item-inner">      */
/*                                        <img src="images/brands/ozark.png" alt="">*/
/*                                     </a>*/
/*                                  </div>*/
/*                                  <div class="bl-item">*/
/*                                     <a href="basic-page.html" class="bl-item-inner">      */
/*                                        <img src="images/brands/exr.png" alt="">*/
/*                                     </a>*/
/*                                  </div>*/
/*                               </div>*/
/*                            </li>*/
/*                         </ul>*/
/*                      </div>*/
/*                   </div>*/
/*                </div>*/
/*             </div>*/
/*             <div class="gap-30"></div>*/
/*          </div>*/
/*       </div>   */
/* */
/*       <div class="bottom-line">*/
/*          <div class="container">*/
/*             <div class="gap-60"></div>*/
/*             <div class="news-list mobile-collapse">*/
/*                <h2 class="news-title mobile-collapse-header">OUR LATEST NEWS</h2>*/
/*                <div class="row news-container mobile-collapse-body">*/
/*                   <div class="col-md-4 col-sm-6 news-item">*/
/*                      <a href="blog.html" class="img-zoom-link"><i class="icon-plus"></i><img src="images/home-1/news-1.jpg" alt=""></a>*/
/*                      <div class="ni-body">*/
/*                         <h3 class="ni-title"><a href="blog.html">AWESOME POST TITLE</a></h3>*/
/*                         <hr class="ni-title-line">*/
/*                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt ut labore et  velit perspiciatis unde omnis iste natus error sit est, qui </p>*/
/*                         <span class="ni-info">*/
/*                            <span class="ni-date"><i class="icon_calendar"></i>February 28</span>*/
/*                            <span class="ni-commments"><i class="icon_comment_alt"></i>15 comments</span>*/
/*                         </span>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="col-md-4 col-sm-6 news-item">*/
/*                      <a href="blog.html" class="img-zoom-link"><i class="icon-plus"></i><img src="images/home-1/news-2.jpg" alt=""></a>*/
/*                      <div class="ni-body">*/
/*                         <h3 class="ni-title"><a href="blog.html">AWESOME POST TITLE</a></h3>*/
/*                         <hr class="ni-title-line">*/
/*                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt ut labore et  velit perspiciatis unde omnis iste natus error sit est, qui </p>*/
/*                         <span class="ni-info">*/
/*                            <span class="ni-date"><i class="icon_calendar"></i>February 28</span>*/
/*                            <span class="ni-commments"><i class="icon_comment_alt"></i>15 comments</span>*/
/*                         </span>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="col-md-4 col-sm-6 news-item">*/
/*                      <a href="blog.html" class="img-zoom-link"><i class="icon-plus"></i><img src="images/home-1/news-3.jpg" alt=""></a>*/
/*                      <div class="ni-body">*/
/*                         <h3 class="ni-title"><a href="blog.html">AWESOME POST TITLE</a></h3>*/
/*                         <hr class="ni-title-line">*/
/*                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt ut labore et  velit perspiciatis unde omnis iste natus error sit est, qui </p>*/
/*                         <span class="ni-info">*/
/*                            <span class="ni-date"><i class="icon_calendar"></i>February 28</span>*/
/*                            <span class="ni-commments"><i class="icon_comment_alt"></i>15 comments</span>*/
/*                         </span>*/
/*                      </div>*/
/*                   </div>*/
/*                </div> <!-- news-container -->*/
/*                <div class="text-center">*/
/*                   <button class="btn news-loadmore"><i class="icon-reload"></i>Load More</button>*/
/*                </div>*/
/*             </div> <!-- news-list -->*/
/*             <div class="gap-70"></div>*/
/*          </div>*/
/*       </div>   */
/* */
/*       <div class="bottom-line">*/
/*          <div class="container">*/
/*             <div class="gap-60"></div>*/
/*             <div class="row">*/
/*                <div class="col-sm-4">*/
/*                   <div class="services-item">*/
/*                      <p class="si-icon"><i class="icon-like"></i></p>*/
/*                      <h3 class="si-title"><a href="#">Free Shipping</a></h3>*/
/*                      <hr class="si-line">*/
/*                      <p class="si-content">Lorem ipsum dolor sit amet, adipisicing elit, sed do eiusmod tempor enim ad minim  nostrud exercitation ullamco consequat irure dolor in reprehenderit  omnis voluptatem accusantium.</p>*/
/*                   </div>*/
/*                </div>*/
/*                <div class="col-sm-4">*/
/*                   <div class="services-item">*/
/*                      <p class="si-icon"><i class="icon_currency"></i></p>*/
/*                      <h3 class="si-title"><a href="#">Back Guarantee</a></h3>*/
/*                      <hr class="si-line">*/
/*                      <p class="si-content">Lorem ipsum dolor sit amet, adipisicing elit, sed do eiusmod tempor enim ad minim  nostrud exercitation ullamco consequat irure dolor in reprehenderit  omnis voluptatem accusantium.</p>*/
/*                   </div>*/
/*                </div>*/
/*                <div class="col-sm-4">*/
/*                   <div class="services-item">*/
/*                      <p class="si-icon"><i class="icon-speedometer"></i></p>*/
/*                      <h3 class="si-title"><a href="#">Fastest Dilivery</a></h3>*/
/*                      <hr class="si-line">*/
/*                      <p class="si-content">Lorem ipsum dolor sit amet, adipisicing elit, sed do eiusmod tempor enim ad minim  nostrud exercitation ullamco consequat irure dolor in reprehenderit  omnis voluptatem accusantium.</p>*/
/*                   </div>*/
/*                </div>*/
/*             </div>*/
/*             <div class="gap-30"></div>*/
/*          </div>*/
/*       </div>*/
/* */
/*       <section>*/
/*          <div class="container">*/
/*             <div class="gap-80"></div>*/
/*             <div class="row subscribe">*/
/*                <div class="col-md-6 col-sm-12">*/
/*                   <h3><span class="icon-envelope"></span>SUBSCRIBE FOR OUR NEWSLETTER</h3>*/
/*                </div>*/
/*                <div class="col-md-6 col-sm-12">*/
/*                   <form action="/">*/
/*                      <div class="required form-group search col-sm-8 col-xs-12">*/
/*                         <input type="text" class="placeholder-fix" placeholder="Enter your e-mail adress">*/
/*                      </div>*/
/*                      <div class="col-sm-4 col-xs-12">*/
/*                            <input type="submit" class="btn btn-sec-col" value="SUBSCRIBE">   */
/*                      </div>*/
/*                   </form>*/
/*                </div>*/
/*             </div>*/
/*          </div>*/
/*       </section>*/
/*       */
/*    </div> <!-- pg-body -->*/
/* */
/*    <footer>*/
/* */
/*       <!-- page body content end -->*/
/*       <!-- footer-1 begin -->*/
/*       <div id="footer-1">*/
/*          */
/*             <div class="container">*/
/*                <div class="row">*/
/*                   <div class="col-md-4">*/
/*                      <div class="most-popular-box box-with-pager mobile-collapse">*/
/*                         <div class="title-type-1 mobile-collapse-header">*/
/*                            Most Popular*/
/*                         </div>*/
/*                         <div class="mobile-collapse-body">*/
/*                            <ul class="vertical-bx-1">*/
/*                               <li>*/
/*                                  <a href="product-page.html">      */
/*                                     <figure>*/
/*                                        <span class="img-cover"><img src="images/pr_1-small.jpg" alt="image name" class="pic"></span>*/
/*                                        <figcaption>*/
/*                                           Black Bag*/
/*                                           <span class="price">990.00</span>*/
/*                                        </figcaption>*/
/*                                     </figure>*/
/*                                  </a>*/
/*                                  <a href="product-page.html">      */
/*                                     <figure>*/
/*                                        <span class="img-cover"><img src="images/pr_2-small.jpg" alt="image name" class="pic"></span>*/
/*                                        <figcaption>*/
/*                                           Pure Cotton Shirt Slim Fit*/
/*                                           <span class="price">$30.00</span>*/
/*                                        </figcaption>*/
/*                                     </figure>*/
/*                                  </a>*/
/*                                  <a href="product-page.html">      */
/*                                     <figure>*/
/*                                        <span class="img-cover"><img src="images/pr_3-small.jpg" alt="image name" class="pic"></span>*/
/*                                        <figcaption>*/
/*                                           Pure Cotton Shirt Slim Fit*/
/*                                           <span class="price">$10.00</span>*/
/*                                        </figcaption>*/
/*                                     </figure>*/
/*                                  </a>*/
/*                               </li>*/
/*                               <li>*/
/*                                  <a href="product-page.html">      */
/*                                     <figure>*/
/*                                        <span class="img-cover"><img src="images/pr_4-small.jpg" alt="image name" class="pic"></span>*/
/*                                        <figcaption>*/
/*                                           Woman Red Handy Bag*/
/*                                           <span class="price">990.00</span>*/
/*                                        </figcaption>*/
/*                                     </figure>*/
/*                                  </a>*/
/*                                  <a href="product-page.html">      */
/*                                     <figure>*/
/*                                        <span class="img-cover"><img src="images/pr_5-small.jpg" alt="image name" class="pic"></span>*/
/*                                        <figcaption>*/
/*                                           Man Black Leather Wallet*/
/*                                           <span class="price">$30.00</span>*/
/*                                        </figcaption>*/
/*                                     </figure>*/
/*                                  </a>*/
/*                                  <a href="product-page.html">      */
/*                                     <figure>*/
/*                                        <span class="img-cover"><img src="images/pr_6-small.jpg" alt="image name" class="pic"></span>*/
/*                                        <figcaption>*/
/*                                           Pure Cotton Shirt Slim Fit*/
/*                                           <span class="price">$10.00</span>*/
/*                                        </figcaption>*/
/*                                     </figure>*/
/*                                  </a>*/
/*                               </li>*/
/*                            </ul>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="col-md-4">*/
/*                      <div class="twitter-box box-with-top-button mobile-collapse">*/
/*                         <div class="title-type-1 mobile-collapse-header">*/
/*                            Twitter*/
/*                         </div>*/
/*                         <a class="top-box-btn-1 mobile-collapse-additional">Follow</a>*/
/*                         <ul class="tweets-group list-unstyled mobile-collapse-body">*/
/*                            <li>*/
/*                               <p>Lorem ipsum dolor consectetur adipisicing exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. cupidatat non proident, sunt in culpa <a href="#">envato.team/Aop3Dp</a></p>*/
/*                               <span>17 June 2016</span>*/
/*                            </li>*/
/*                            <li>*/
/*                               <p>Lorem ipsum dolor consectetur adipisicing exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. cupidatat non proident, sunt in culpa <a href="#">envato.team/Aop3Dp</a></p>*/
/*                               <span>10 June 2016</span>*/
/*                            </li>*/
/*                            <li>*/
/*                               <p>Lorem ipsum dolor consectetur adipisicing exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. cupidatat non proident, sunt in culpa <a href="#">envato.team/Aop3Dp</a></p>*/
/*                               <span>01 June 2016</span>*/
/*                            </li>*/
/*                         </ul>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="col-md-4">*/
/*                      <div class="get-in-touch-box mobile-collapse">*/
/*                         <div class="title-type-1 mobile-collapse-header">*/
/*                            Get IN TOUCH WITH US*/
/*                         </div>*/
/*                         <div class="tweets-group mobile-collapse-body">*/
/*                            <form action="/" class="validation-engine">*/
/*                               <div class="google-maps">*/
/*                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89553.25418528763!2d9.19406272678945!3d45.458941223623455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c1493f1275e7%3A0x3cffcd13c6740e8d!2sShop+!5e0!3m2!1sen!2s!4v1403031740860" width="370" height="150"></iframe>*/
/*                               </div>*/
/*                               <div class="required form-group">*/
/*                                  <input type="text" class="form-control validate[required]" data-prompt-position="topLeft" placeholder="Enter your name">*/
/*                               </div>*/
/*                               <div class="required form-group">*/
/*                                  <input type="text" class="form-control validate[required,custom[email]]" data-prompt-position="topLeft" placeholder="Enter your email">*/
/*                               </div>*/
/*                               <div class="required form-group">*/
/*                                  <textarea class="form-control validate[required]" data-prompt-position="topLeft" rows="3" placeholder="Enter your message"></textarea>*/
/*                               </div>*/
/*                               <div class="required form-group">*/
/*                                  <button class="btn btn-sm btn-yet-col arrow-btn" type="submit">Send Message</button>*/
/*                               </div>*/
/*                            </form>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                </div>*/
/*             </div>*/
/*          */
/*       </div>*/
/*       <!-- footer-1 end -->*/
/*       <!-- footer-2 begin -->*/
/*       <div id="footer-2">*/
/*          */
/*             <div class="container">*/
/*                <div class="row">*/
/*                   <div class="col-md-4">*/
/*                      <div class="about-us-box mobile-collapse">*/
/*                         <div class="title-type-1 mobile-collapse-header">*/
/*                            About Us*/
/*                         </div>*/
/*                         <div class="mobile-collapse-body">*/
/*                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, voluptate velit esse cillum dolore eu fugiat nulla pariatur. */
/*                               Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem */
/*                            </p>*/
/*                            <p>*/
/*                               voluptate velit esse cillum dolore eu fugiat nulla pariatur. */
/*                               Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.*/
/*                            </p>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="col-md-4">*/
/*                      <div class="contact-info-box mobile-collapse">*/
/*                         <div class="title-type-1 mobile-collapse-header">*/
/*                            Contact Info*/
/*                         </div>*/
/*                         <ul class="list-unstyled mobile-collapse-body">*/
/*                            <li><span><i class="icon-pointer"></i></span><span>Shop+, Valencia Road, Dumaguete city, Italy.</span></li>*/
/*                            <li><span><i class="icon-screen-smartphone"></i></span><span> +1800-555-6875</span></li>*/
/*                            <li><a href="mailto:your@email.com"><span><i class="icon-envelope "></i></span><span>your@email.com</span></a></li>*/
/*                            <li><a href="http://envato.com"><span><i class="icon-globe"></i></span><span>www.envato.com</span></a></li>*/
/*                         </ul>*/
/*                      </div>   */
/*                   </div>*/
/*                   <div class="col-md-4">*/
/*                      <div class="facebox-fan-box box-with-top-button mobile-collapse">*/
/*                         <div class="title-type-1 mobile-collapse-header">*/
/*                            Facebook Fans*/
/*                         </div>*/
/*                         <div id="fb-fans" class="mobile-collapse-body">*/
/*                            <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;width=360&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=388032001306737"></iframe>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                </div>*/
/*             </div>*/
/*          */
/*       </div>*/
/*       <!-- footer-2 end -->*/
/*       <!-- footer-3 begin -->*/
/*       <div id="footer-3">*/
/*          */
/*             <div class="container">*/
/*                <div class="row">*/
/*                   <div class="col-md-3 col-sm-12">*/
/*                      <div class="information-box mobile-collapse">*/
/*                         <div class="title-type-2 mobile-collapse-header">*/
/*                            Information*/
/*                         </div>*/
/*                         <ul class="list-unstyled mobile-collapse-body">*/
/*                            <li>*/
/*                               <a href="category.html">*/
/*                                  Bestsellers*/
/*                               </a>*/
/*                            </li>*/
/*                            <li>*/
/*                               <a href="category.html">*/
/*                                  New product*/
/*                               </a>*/
/*                            </li>*/
/*                            <li>*/
/*                               <a href="category.html">*/
/*                                  Special product*/
/*                               </a>*/
/*                            </li>*/
/*                            <li>*/
/*                               <a href="category.html">*/
/*                                  Featured product*/
/*                               </a>*/
/*                            </li>*/
/*                            <li>*/
/*                               <a href="contact.html">*/
/*                                  Contact*/
/*                               </a>*/
/*                            </li>*/
/*                         </ul>      */
/*                      </div>*/
/*                   </div>*/
/*                   <div class="col-md-3 col-sm-12">*/
/*                      <div class="product-tags-box mobile-collapse">*/
/*                         <div class="title-type-2 mobile-collapse-header">*/
/*                            Product Tags*/
/*                         </div>*/
/*                         <div class="tags mobile-collapse-body">*/
/*                            <a href="contact.html">Men</a>*/
/*                            <a href="contact.html">Furniture</a>*/
/*                            <a href="contact.html">Electronic</a>*/
/*                            <a href="contact.html">Fabric</a>*/
/*                            <a href="contact.html">Jackets</a>*/
/*                            <a href="contact.html">Clothes</a>*/
/*                            <a href="contact.html">Flowers</a>*/
/*                            <a href="contact.html">Book</a>*/
/*                            <a href="contact.html">Shorts</a>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="col-md-3 col-sm-12">*/
/*                      <div class="my-account-box mobile-collapse">*/
/*                         <div class="title-type-2 mobile-collapse-header">*/
/*                            My Account*/
/*                         </div>*/
/*                         <ul class="list-unstyled mobile-collapse-body">*/
/*                            <li>*/
/*                               <a href="account.html">*/
/*                                  My Account*/
/*                               </a>*/
/*                            </li>*/
/*                            <li>*/
/*                               <a href="wishlist.html">*/
/*                                  Wishlist*/
/*                               </a>*/
/*                            </li>*/
/*                            <li>*/
/*                               <a href="review_page.html">*/
/*                                  Testimonials*/
/*                               </a>*/
/*                            </li>*/
/*                            <li>*/
/*                               <a href="coming-soon.html">*/
/*                                  Newsletter*/
/*                               </a>*/
/*                            </li>*/
/*                            <li>*/
/*                               <a href="blog.html">*/
/*                                  Blog*/
/*                               </a>*/
/*                            </li>*/
/*                         </ul>      */
/*                      </div>*/
/*                   </div>*/
/*                   <div class="col-md-3 col-sm-12">*/
/*                      <div class="main-categories-box mobile-collapse">*/
/*                         <div class="title-type-2 mobile-collapse-header">*/
/*                            Main Categories*/
/*                         </div>*/
/*                         <ul class="list-unstyled mobile-collapse-body">*/
/*                            <li>*/
/*                               <a href="category.html">*/
/*                                  For Men*/
/*                               </a>*/
/*                            </li>*/
/*                            <li>*/
/*                               <a href="category.html">*/
/*                                  Jeans*/
/*                               </a>*/
/*                            </li>*/
/*                            <li>*/
/*                               <a href="category.html">*/
/*                                  Jackets*/
/*                               </a>*/
/*                            </li>*/
/*                            <li>*/
/*                               <a href="category.html">*/
/*                                  For Her*/
/*                               </a>*/
/*                            </li>*/
/*                            <li>*/
/*                               <a href="category.html">*/
/*                                  Accessories*/
/*                               </a>*/
/*                            </li>*/
/*                         </ul>      */
/*                      </div>*/
/*                   </div>*/
/*                </div>*/
/*             </div>*/
/*          */
/*       </div>*/
/*       <!-- footer-3 end -->*/
/*       <!-- footer-4 begin -->*/
/*       <div id="footer-4">*/
/*          */
/*             <div class="container">*/
/*                <div class="row">*/
/*                   <div class="col-md-6 text-center-md">*/
/*                      <img src="images/credit-cards.png" alt="accepted credit cards">*/
/*                   </div>*/
/*                   <div class="col-md-6 text-right text-center-md">*/
/*                      <ul id="social-buttons" class="list-inline">*/
/*                         <li class="facebook"><a href="#"><i class="icon-social-facebook"></i></a></li>*/
/*                         <li class="tweeter"><a href="#"><i class="icon-social-twitter "></i></a></li>*/
/*                         <li class="gplus"><a href="#"><i class="social_googleplus "></i></a></li>*/
/*                         <li class="youtube"><a href="#"><i class="social_youtube"></i></a></li>*/
/*                         <li class="instantgram"><a href="#"><i class="social_instagram "></i></a></li>*/
/*                         <li class="skype"><a href="#"><i class="social_skype"></i></a></li>*/
/*                      </ul>*/
/*                   </div>*/
/*                </div>*/
/*             </div>*/
/*          */
/*       </div>   */
/*       <!-- footer-4 end -->*/
/*       <!-- footer-5 begin -->*/
/*       <div id="footer-5">*/
/*          */
/*             <div class="container">*/
/*                <p class="copyright">*/
/*                   © 2016 Shop+. All right reseved. Made with <i class="icon_heart"></i> by <a href="http://envato.com">Envato</a>*/
/*                </p>*/
/*             </div>*/
/*          */
/*       </div>*/
/*       <!-- footer-5 end -->   */
/* */
/*    </footer>*/
/* */
/* */
/*    <!-- common modals begin -->*/
/* */
/*    <div class="modal fade" id="product-added" tabindex="-1" role="dialog" aria-labelledby="product-added" aria-hidden="true">*/
/*      <div class="modal-dialog modal-md">*/
/*        <div class="modal-content">*/
/*          <div class="modal-header">*/
/*             <a href="#" class="modal-close" data-dismiss="modal" aria-hidden="true"><i class="icon_close"></i></a>*/
/*             <h4 class="modal-title">Item was added to your shopping cart</h4>*/
/*          </div>*/
/*          <div class="modal-body">*/
/*             <div id="wishlist-product-group-modal" class="dropdown-product-list">*/
/*                <div class="dd-product-group" id="pr11">*/
/*                   <div class="dd-product-box pull-left">*/
/*                      <a href="#" title="product name">*/
/*                         <img src="images/pr_2-small.jpg" alt="product name">*/
/*                      </a>*/
/*                   </div>*/
/*                   <div class="dd-product-desc pull-left">*/
/*                      <a class="title">Beautiful Fit Velvet Sweater For Him</a>*/
/*                      <div class="qty">1 x <span class="active">$700.00</span></div>*/
/*                   </div>*/
/*                </div>*/
/*             </div>*/
/*          </div>*/
/*          <div class="modal-footer">*/
/*             <div class="row no-gutter">*/
/*                <div class="col-xs-6">*/
/*                   <button type="button" class="btn btn-md btn-third-col btn-w100">View Cart</button>*/
/*                </div>*/
/*                <div class="col-xs-6">*/
/*                   <button type="button" class="btn btn-md btn-third-col btn-w100" data-dismiss="modal">Continue Shopping</button>*/
/*                </div>*/
/*             </div>*/
/*          </div>*/
/*        </div>*/
/*      </div>*/
/*    </div>*/
/*    <div class="modal fade" id="info-box" tabindex="-1" role="dialog" aria-labelledby="product-added" aria-hidden="true">*/
/*      <div class="modal-dialog modal-md">*/
/*        <div class="modal-content">*/
/*          <div class="modal-header">*/
/*             <a href="#" class="modal-close" data-dismiss="modal" aria-hidden="true"><i class="icon_close"></i></a>*/
/*             <h4 class="modal-title">Information</h4>*/
/*          </div>*/
/*          <div class="modal-body modal-body-info">*/
/*             <p>Beautiful Fit Velvet Sweater has been added to comparison list</p>*/
/*          </div>*/
/*        </div>*/
/*      </div>*/
/*    </div>*/
/*    <!-- common modals end -->*/
/* */
/* */
/* */
/*    <!-- JS Libs -->*/
/*    <script src="{{ asset('public/js/jquery-1.11.0.min.js') }}"></script>*/
/*    <script src="{{ asset('public/js/jquery-ui-1.10.4.custom.min.js') }}"></script>*/
/*    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*    <script src="{{ asset('public/js/jquery.bxslider.min.js') }}"></script>*/
/*    <script src="{{ asset('public/js/jquery-accessibleMegaMenu.js') }}"></script>*/
/*    <script src="{{ asset('public/js/jquery.validationEngine.js') }}"></script>*/
/*    <script src="{{ asset('public/js/jquery.validationEngine-en.js') }}"></script>*/
/*    <script src="{{ asset('public/plugins/responsiveslides/responsiveslides.min.js') }}"></script>*/
/*    <script src="{{ asset('public/js/fastclick.js') }}"></script> <!-- Eliminating the 300ms click delay on mobile browsers -->*/
/*    <script src="{{ asset('public/js/plugins.js') }}"></script>*/
/*    <script src="{{ asset('public/js/scripts.js') }}"></script>*/
/* </body>*/
/* </html>*/
