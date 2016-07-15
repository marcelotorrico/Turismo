<?php

/* MTDTurismoBundle:Principal:paqueteTuristico.html.twig */
class __TwigTemplate_86fada12d30b5d9b6cfbcb0ad7d7ca71bcb6c12bbcc960a4e16c0579daba5d35 extends Twig_Template
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
        $__internal_b40c21d28c52799cc5dc8c3f08438fd4f775151b121d418953be4328390898cf = $this->env->getExtension("native_profiler");
        $__internal_b40c21d28c52799cc5dc8c3f08438fd4f775151b121d418953be4328390898cf->enter($__internal_b40c21d28c52799cc5dc8c3f08438fd4f775151b121d418953be4328390898cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDTurismoBundle:Principal:paqueteTuristico.html.twig"));

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
<body ng-app=\"acumuladorApp\" ng-controller=\"acumuladorAppCtrl as vm\">
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
                         ";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "apellido", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "
                     </li>
                  </ul>
               </div>
            </div>

         </div>
      </div>
                     
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
                     <img src=\"images/logo.svg\" class=\"logo center-block visible-xs hidden-sm\" alt=\"Shop+ - Responsive HTML5 Multipurpose Ecommerce Template\">
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
                              <span class=\"dd-products-count\">{[{vm.numPaq}]} </span> paquete(s) / <span class=\"active dd-products-price\">{[{vm.total}]}</span>
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
                                       <img src=\"images/pr_2-small.jpg\" alt=\"product name\">
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
                                       <img src=\"images/pr_3-small.jpg\" alt=\"product name\">
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
                     <a href=\"#\"><span><i class=\"icon-screen-desktop\"></i> Agregar Paquetes Turisticos</span></a>
                     <div class=\"sub-nav\">
                          <ul class=\"sub-nav-group\">
                              <li><a href=\"";
        // line 216
        echo $this->env->getExtension('routing')->getPath("mtd_administrativo_paquetes");
        echo "\"><span>Normal</span></a></li>
                              <li><a href=\"#\"><span>Promociones</span></a></li>
                          </ul>
                      </div>
                  </li>
                  <li class=\"nav-item\">
                     <a href=\"#\"><span><i class=\"icon-user\"></i>Paquetes Turisticos</span></a>
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
        // line 234
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
        // line 246
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
        // line 258
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
        // line 270
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
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/megamenu-btm1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                              </a>
                           </div>
                           <div class=\"col-md-4\">
                              <a href=\"blog.html\" class=\"img-fade-hover\">
                                 <img src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/megamenu-btm2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                              </a>
                           </div>
                           <div class=\"col-md-4\">
                              <a href=\"blog.html\" class=\"img-fade-hover\">
                                 <img src=\"";
        // line 296
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
      
      <div class=\"pg-header\">
         <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-md-6 col-sm-12 title\">
                  <h1>";
        // line 317
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paquete"]) ? $context["paquete"] : $this->getContext($context, "paquete")), "nombre", array()), "html", null, true);
        echo "</h1>
               </div>
               <div class=\"col-md-6 col-sm-12\">
                  <div class=\"b-crumbs pull-right\"><a href=\"#\">Home /</a> <a href=\"#\">Men /</a> <a href=\"#\">Shirts /</a> <i class=\"arrow_carrot-right\"></i>  Majestic beecroft</div>
               </div>
            </div>
         </div>
      </div>                          
    
   </header>
   
   <div class=\"pg-body clearfix\">
      <div class=\"container clearfix\">
         <div class=\"row\">
            <div class=\"col-md-6 col-lg-7 col-xs-12 product-images\">
               <div class=\"clearfix zoom-content\">
                  
                  <a href=\"#\" class=\"btn btn-yet-col\" id=\"product-pupGallery-button\" data-target=\"#product-pupGallery-box\" data-toggle=\"modal\"><span class=\"icon-magnifier-add\"></span></a>
                  <div aria-hidden=\"true\" aria-labelledby=\"product-added\" role=\"dialog\" tabindex=\"-1\" id=\"product-pupGallery-box\" class=\"modal fade\" style=\"display: none;\">
                    <div class=\"modal-dialog modal-lg\">
                      <div class=\"modal-content\">
                        <div class=\"modal-body modal-body-info\">
                           <div class=\"clearfix zoom-content-2\">
                              <div class=\"clearfix big-image\">

                                 <img id=\"zoom_04\" src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("documentosEmpleado/" . $this->getAttribute((isset($context["paquete"]) ? $context["paquete"] : $this->getContext($context, "paquete")), "imagen", array()))), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("documentosEmpleado/" . $this->getAttribute((isset($context["paquete"]) ? $context["paquete"] : $this->getContext($context, "paquete")), "imagen", array()))), "html", null, true);
        echo "\" alt=\"\"/> 

                              </div>
                              <div class=\"clearfix thumbnails\">
                                 <ul id=\"thumblist2\" class=\"clearfix\" >

                                    <li>
                                       <a  href=\"#\" class=\"elevatezoom-gallery zoomThumbActive\" data-update=\"\" 
                                       data-image=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("documentosEmpleado/" . $this->getAttribute((isset($context["paquete"]) ? $context["paquete"] : $this->getContext($context, "paquete")), "imagen", array()))), "html", null, true);
        echo "\" 
                                       data-zoom-image=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("documentosEmpleado/" . $this->getAttribute((isset($context["paquete"]) ? $context["paquete"] : $this->getContext($context, "paquete")), "imagen", array()))), "html", null, true);
        echo "\">
                                          <img src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("documentosEmpleado/" . $this->getAttribute((isset($context["paquete"]) ? $context["paquete"] : $this->getContext($context, "paquete")), "imagen", array()))), "html", null, true);
        echo "\" width=\"100\"  alt=\"\" />
                                       </a>
                                    </li>
                                    <li>
                                       <a  href=\"#\" class=\"elevatezoom-gallery\" data-update=\"\" 
                                       data-image=\"http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image1.png\" 
                                       data-zoom-image=\"http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image1.jpg\">
                                          <img src=\"http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image1.png\" width=\"100\"  alt=\"\" />
                                       </a>
                                    </li>
                                    <li>
                                       <a  href=\"#\" class=\"elevatezoom-gallery\" data-update=\"\" 
                                       data-image=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("documentosEmpleado/" . $this->getAttribute((isset($context["paquete"]) ? $context["paquete"] : $this->getContext($context, "paquete")), "imagen", array()))), "html", null, true);
        echo "\" 
                                       data-zoom-image=\"images/product_page_gallery/1-big-3x.jpg\">
                                          <img src=\"images/product_page_gallery/2-small.jpg\" width=\"100\"  alt=\"\" />
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"clearfix big-image product-page\">

                     <img id=\"zoom_04\" src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("documentosEmpleado/" . $this->getAttribute((isset($context["paquete"]) ? $context["paquete"] : $this->getContext($context, "paquete")), "imagen", array()))), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("documentosEmpleado/" . $this->getAttribute((isset($context["paquete"]) ? $context["paquete"] : $this->getContext($context, "paquete")), "imagen", array()))), "html", null, true);
        echo "\" alt=\"\"/> 

                  </div>
                  <br/>
               </div>
               <div class=\"article-info col-xs-12\">
                  <div class=\"for-border-top share-wrapp clearfix\">
                     <span class=\"h7\">SHARE PRODUCT</span>
                     <ul class=\"list-inline social-buttons\">
                        <li class=\"facebook\"><a href=\"#\"><i class=\"icon-social-facebook\"></i></a></li>
                        <li class=\"tweeter\"><a href=\"#\"><i class=\"icon-social-twitter \"></i></a></li>
                        <li class=\"gplus\"><a href=\"#\"><i class=\"social_googleplus \"></i></a></li>
                        <li class=\"dribbble\"><a href=\"#\"><i class=\"icon-social-dribbble\"></i></a></li>
                        <li class=\"instantgram\"><a href=\"#\"><i class=\"social_instagram \"></i></a></li>
                     </ul>
                  </div>
                  <div class=\"for-border-top print-wrapp\">
                     <span class=\"print\"><a href=\"\"><span class=\"icon_printer-alt\"></span>Print</a></span>
                  </div>
               </div> 
            </div>
            <br>
            <div class=\"col-md-6 col-lg-5 col-xs-12 product-info\">
               <div id=\"zoom-window-container\" style=\"position: relative;\"></div>
               <div class=\"product-reviews\">
                  <h3>";
        // line 404
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paquete"]) ? $context["paquete"] : $this->getContext($context, "paquete")), "nombre", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paquete"]) ? $context["paquete"] : $this->getContext($context, "paquete")), "lugar", array()), "html", null, true);
        echo "</h3>
                  <a href=\"#\">20 Reviewer(s)</a><a href=\"#review-btn\">Add Review</a>
               </div>
               <div class=\"hr\"></div>
               <div class=\"price\">
                  ";
        // line 409
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paquete"]) ? $context["paquete"] : $this->getContext($context, "paquete")), "precio", array()), "html", null, true);
        echo "
               </div>
               <p class=\"availability col-sm-pull-right col-xs-pull-left\">Disponible: <span><span class=\"in-stock\"></p>
               <div class=\"hr\"></div>
               <h4>Descripcion</h4>
               <div class=\"hr\"></div>
               <p>";
        // line 415
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paquete"]) ? $context["paquete"] : $this->getContext($context, "paquete")), "descripcion", array()), "html", null, true);
        echo "</p>
               <div class=\"col-xs-12 tech-info\">
               </div>
               <div class=\"hr\"></div>
               <div class=\"cart_quantity_button clrfix product-count pull-left\">
                  <a rel=\"nofollow\" class=\"btn btn-default btn-minus\" href=\"#\" title=\"Subtract\">&ndash;</a>
                  <input type=\"text\"   size=\"2\" autocomplete=\"off\" class=\"cart_quantity_input form-control grey count\" value=\"1\" name=\"quantity\">
                  <a rel=\"nofollow\" class=\"btn btn-default btn-plus\" href=\"#\" title=\"Add\">+</a>
               </div>
               <input type=\"button\" value=\"ADD TO CART\" ng-click=\"vm.sumar()\" class=\"btn btn-sec-col pull-left add-cart\"/>
               <a href=\"#\" class=\"btn btn-gray\"><span class=\"icon-heart\"></span></a>
               <a href=\"\" class=\"btn btn-gray\"><span class=\"arrow_left-right_alt\"></span></a>
               <div class=\"hr\"></div>
               <div class=\"product-tabs\">
                  <!-- Nav tabs -->
                  <ul role=\"tablist\" class=\"nav nav-tabs\">
                    <li><a data-toggle=\"tab\" role=\"tab\" href=\"#tab-review\" id=\"review-btn\">CONTACTAR</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class=\"tab-content\">
                     <div id=\"tab-review\" class=\"tab-pane\">
                        <form action=\"#\">
                           <div class=\"row\">
                              <div class=\"col-md-6 col-xs-12\">
                                 <div class=\"form-group required\"><label class=\"type-text\">Name*<input type=\"text\" class=\"form-control placeholder-fix\"></label></div>
                              </div>
                              <div class=\"col-md-6 col-xs-12\">
                                 <div class=\"form-group required\"><label class=\"type-text\">Email*<input type=\"text\" class=\"form-control placeholder-fix\"></label></div>
                              </div>
                              <div class=\"col-xs-12\">
                                 <div class=\"you-rating\">
                                    <div class=\"data-info secondary-font-family\">Your Rating</div>
                                    <a href=\"#\"><span class=\"stars-rating stars-1\"><span class=\"stars\"></span></span></a>
                                    <a href=\"#\"><span class=\"stars-rating stars-2\"><span class=\"stars\"></span></span></a>
                                    <a href=\"#\"><span class=\"stars-rating stars-3\"><span class=\"stars\"></span></span></a>
                                    <a href=\"#\"><span class=\"stars-rating stars-4\"><span class=\"stars\"></span></span></a>
                                    <a href=\"#\"><span class=\"stars-rating stars-5\"><span class=\"stars\"></span></span></a>
                                 </div>
                                 <div class=\"data-info secondary-font-family\">Your Review</div>
                                 <div class=\"required form-group\">
                                    <textarea class=\"form-control placeholder-fix\" rows=\"4\"></textarea>
                                 </div>
                                 <button type=\"submit\" class=\"btn btn-lg btn-sec-col col-xs-12\">SUBMIT REVIEW</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

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
        // line 872
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 873
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 874
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 875
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 876
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-accessibleMegaMenu.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 877
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.validationEngine.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 878
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.validationEngine-en.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 879
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/responsiveslides/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 880
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/fastclick.js"), "html", null, true);
        echo "\"></script> <!-- Eliminating the 300ms click delay on mobile browsers -->
   <script src=\"";
        // line 881
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/plugins.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 882
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/scripts.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 883
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/seleccionImagenes.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 884
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/angular.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 885
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/controladorAngular.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_b40c21d28c52799cc5dc8c3f08438fd4f775151b121d418953be4328390898cf->leave($__internal_b40c21d28c52799cc5dc8c3f08438fd4f775151b121d418953be4328390898cf_prof);

    }

    public function getTemplateName()
    {
        return "MTDTurismoBundle:Principal:paqueteTuristico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1050 => 885,  1046 => 884,  1042 => 883,  1038 => 882,  1034 => 881,  1030 => 880,  1026 => 879,  1022 => 878,  1018 => 877,  1014 => 876,  1010 => 875,  1006 => 874,  1002 => 873,  998 => 872,  538 => 415,  529 => 409,  519 => 404,  489 => 379,  471 => 364,  456 => 352,  452 => 351,  448 => 350,  435 => 342,  407 => 317,  383 => 296,  375 => 291,  367 => 286,  348 => 270,  333 => 258,  318 => 246,  303 => 234,  282 => 216,  155 => 96,  85 => 28,  76 => 26,  72 => 25,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  46 => 17,  41 => 15,  37 => 14,  22 => 1,);
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
/* <body ng-app="acumuladorApp" ng-controller="acumuladorAppCtrl as vm">*/
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
/*                          {{tipo}} - {{usuario.apellido}} {{usuario.nombre}}*/
/*                      </li>*/
/*                   </ul>*/
/*                </div>*/
/*             </div>*/
/* */
/*          </div>*/
/*       </div>*/
/*                      */
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
/*                      <img src="images/logo.svg" class="logo center-block visible-xs hidden-sm" alt="Shop+ - Responsive HTML5 Multipurpose Ecommerce Template">*/
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
/*                               <span class="dd-products-count">{[{vm.numPaq}]} </span> paquete(s) / <span class="active dd-products-price">{[{vm.total}]}</span>*/
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
/*                                        <img src="images/pr_2-small.jpg" alt="product name">*/
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
/*                                        <img src="images/pr_3-small.jpg" alt="product name">*/
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
/*                      */
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
/*                      <a href="#"><span><i class="icon-screen-desktop"></i> Agregar Paquetes Turisticos</span></a>*/
/*                      <div class="sub-nav">*/
/*                           <ul class="sub-nav-group">*/
/*                               <li><a href="{{ path('mtd_administrativo_paquetes') }}"><span>Normal</span></a></li>*/
/*                               <li><a href="#"><span>Promociones</span></a></li>*/
/*                           </ul>*/
/*                       </div>*/
/*                   </li>*/
/*                   <li class="nav-item">*/
/*                      <a href="#"><span><i class="icon-user"></i>Paquetes Turisticos</span></a>*/
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
/*       */
/*       <div class="pg-header">*/
/*          <div class="container">*/
/*             <div class="row">*/
/*                <div class="col-md-6 col-sm-12 title">*/
/*                   <h1>{{paquete.nombre}}</h1>*/
/*                </div>*/
/*                <div class="col-md-6 col-sm-12">*/
/*                   <div class="b-crumbs pull-right"><a href="#">Home /</a> <a href="#">Men /</a> <a href="#">Shirts /</a> <i class="arrow_carrot-right"></i>  Majestic beecroft</div>*/
/*                </div>*/
/*             </div>*/
/*          </div>*/
/*       </div>                          */
/*     */
/*    </header>*/
/*    */
/*    <div class="pg-body clearfix">*/
/*       <div class="container clearfix">*/
/*          <div class="row">*/
/*             <div class="col-md-6 col-lg-7 col-xs-12 product-images">*/
/*                <div class="clearfix zoom-content">*/
/*                   */
/*                   <a href="#" class="btn btn-yet-col" id="product-pupGallery-button" data-target="#product-pupGallery-box" data-toggle="modal"><span class="icon-magnifier-add"></span></a>*/
/*                   <div aria-hidden="true" aria-labelledby="product-added" role="dialog" tabindex="-1" id="product-pupGallery-box" class="modal fade" style="display: none;">*/
/*                     <div class="modal-dialog modal-lg">*/
/*                       <div class="modal-content">*/
/*                         <div class="modal-body modal-body-info">*/
/*                            <div class="clearfix zoom-content-2">*/
/*                               <div class="clearfix big-image">*/
/* */
/*                                  <img id="zoom_04" src="{{ asset('documentosEmpleado/' ~ paquete.imagen) }}" data-zoom-image="{{ asset('documentosEmpleado/' ~ paquete.imagen) }}" alt=""/> */
/* */
/*                               </div>*/
/*                               <div class="clearfix thumbnails">*/
/*                                  <ul id="thumblist2" class="clearfix" >*/
/* */
/*                                     <li>*/
/*                                        <a  href="#" class="elevatezoom-gallery zoomThumbActive" data-update="" */
/*                                        data-image="{{ asset('documentosEmpleado/' ~ paquete.imagen) }}" */
/*                                        data-zoom-image="{{ asset('documentosEmpleado/' ~ paquete.imagen) }}">*/
/*                                           <img src="{{ asset('documentosEmpleado/' ~ paquete.imagen) }}" width="100"  alt="" />*/
/*                                        </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                        <a  href="#" class="elevatezoom-gallery" data-update="" */
/*                                        data-image="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image1.png" */
/*                                        data-zoom-image="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image1.jpg">*/
/*                                           <img src="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image1.png" width="100"  alt="" />*/
/*                                        </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                        <a  href="#" class="elevatezoom-gallery" data-update="" */
/*                                        data-image="{{ asset('documentosEmpleado/' ~ paquete.imagen) }}" */
/*                                        data-zoom-image="images/product_page_gallery/1-big-3x.jpg">*/
/*                                           <img src="images/product_page_gallery/2-small.jpg" width="100"  alt="" />*/
/*                                        </a>*/
/*                                     </li>*/
/*                                  </ul>*/
/*                               </div>*/
/*                            </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/* */
/*                   <div class="clearfix big-image product-page">*/
/* */
/*                      <img id="zoom_04" src="{{ asset('documentosEmpleado/' ~ paquete.imagen) }}" data-zoom-image="{{ asset('documentosEmpleado/' ~ paquete.imagen) }}" alt=""/> */
/* */
/*                   </div>*/
/*                   <br/>*/
/*                </div>*/
/*                <div class="article-info col-xs-12">*/
/*                   <div class="for-border-top share-wrapp clearfix">*/
/*                      <span class="h7">SHARE PRODUCT</span>*/
/*                      <ul class="list-inline social-buttons">*/
/*                         <li class="facebook"><a href="#"><i class="icon-social-facebook"></i></a></li>*/
/*                         <li class="tweeter"><a href="#"><i class="icon-social-twitter "></i></a></li>*/
/*                         <li class="gplus"><a href="#"><i class="social_googleplus "></i></a></li>*/
/*                         <li class="dribbble"><a href="#"><i class="icon-social-dribbble"></i></a></li>*/
/*                         <li class="instantgram"><a href="#"><i class="social_instagram "></i></a></li>*/
/*                      </ul>*/
/*                   </div>*/
/*                   <div class="for-border-top print-wrapp">*/
/*                      <span class="print"><a href=""><span class="icon_printer-alt"></span>Print</a></span>*/
/*                   </div>*/
/*                </div> */
/*             </div>*/
/*             <br>*/
/*             <div class="col-md-6 col-lg-5 col-xs-12 product-info">*/
/*                <div id="zoom-window-container" style="position: relative;"></div>*/
/*                <div class="product-reviews">*/
/*                   <h3>{{paquete.nombre}} - {{paquete.lugar}}</h3>*/
/*                   <a href="#">20 Reviewer(s)</a><a href="#review-btn">Add Review</a>*/
/*                </div>*/
/*                <div class="hr"></div>*/
/*                <div class="price">*/
/*                   {{paquete.precio}}*/
/*                </div>*/
/*                <p class="availability col-sm-pull-right col-xs-pull-left">Disponible: <span><span class="in-stock"></p>*/
/*                <div class="hr"></div>*/
/*                <h4>Descripcion</h4>*/
/*                <div class="hr"></div>*/
/*                <p>{{paquete.descripcion}}</p>*/
/*                <div class="col-xs-12 tech-info">*/
/*                </div>*/
/*                <div class="hr"></div>*/
/*                <div class="cart_quantity_button clrfix product-count pull-left">*/
/*                   <a rel="nofollow" class="btn btn-default btn-minus" href="#" title="Subtract">&ndash;</a>*/
/*                   <input type="text"   size="2" autocomplete="off" class="cart_quantity_input form-control grey count" value="1" name="quantity">*/
/*                   <a rel="nofollow" class="btn btn-default btn-plus" href="#" title="Add">+</a>*/
/*                </div>*/
/*                <input type="button" value="ADD TO CART" ng-click="vm.sumar()" class="btn btn-sec-col pull-left add-cart"/>*/
/*                <a href="#" class="btn btn-gray"><span class="icon-heart"></span></a>*/
/*                <a href="" class="btn btn-gray"><span class="arrow_left-right_alt"></span></a>*/
/*                <div class="hr"></div>*/
/*                <div class="product-tabs">*/
/*                   <!-- Nav tabs -->*/
/*                   <ul role="tablist" class="nav nav-tabs">*/
/*                     <li><a data-toggle="tab" role="tab" href="#tab-review" id="review-btn">CONTACTAR</a></li>*/
/*                   </ul>*/
/* */
/*                   <!-- Tab panes -->*/
/*                   <div class="tab-content">*/
/*                      <div id="tab-review" class="tab-pane">*/
/*                         <form action="#">*/
/*                            <div class="row">*/
/*                               <div class="col-md-6 col-xs-12">*/
/*                                  <div class="form-group required"><label class="type-text">Name*<input type="text" class="form-control placeholder-fix"></label></div>*/
/*                               </div>*/
/*                               <div class="col-md-6 col-xs-12">*/
/*                                  <div class="form-group required"><label class="type-text">Email*<input type="text" class="form-control placeholder-fix"></label></div>*/
/*                               </div>*/
/*                               <div class="col-xs-12">*/
/*                                  <div class="you-rating">*/
/*                                     <div class="data-info secondary-font-family">Your Rating</div>*/
/*                                     <a href="#"><span class="stars-rating stars-1"><span class="stars"></span></span></a>*/
/*                                     <a href="#"><span class="stars-rating stars-2"><span class="stars"></span></span></a>*/
/*                                     <a href="#"><span class="stars-rating stars-3"><span class="stars"></span></span></a>*/
/*                                     <a href="#"><span class="stars-rating stars-4"><span class="stars"></span></span></a>*/
/*                                     <a href="#"><span class="stars-rating stars-5"><span class="stars"></span></span></a>*/
/*                                  </div>*/
/*                                  <div class="data-info secondary-font-family">Your Review</div>*/
/*                                  <div class="required form-group">*/
/*                                     <textarea class="form-control placeholder-fix" rows="4"></textarea>*/
/*                                  </div>*/
/*                                  <button type="submit" class="btn btn-lg btn-sec-col col-xs-12">SUBMIT REVIEW</button>*/
/*                               </div>*/
/*                            </div>*/
/*                         </form>*/
/*                      </div>*/
/*                   </div>*/
/*                </div>*/
/*             </div>*/
/*          </div>*/
/*       </div>*/
/*    </div>*/
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
/*    <script src="{{ asset('public/js/seleccionImagenes.js') }}"></script>*/
/*    <script src="{{ asset('public/js/angular.min.js') }}"></script>*/
/*    <script src="{{ asset('public/js/controladorAngular.js') }}"></script>*/
/* </body>*/
/* </html>*/
