<?php

/* MTDTurismoBundle:Principal:formularioPaquete.html.twig */
class __TwigTemplate_e1445fcbd7d47c5f64423da35179dd8070a12b5f1e14dba9ca6a9c370af6382e extends Twig_Template
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
        $__internal_0f485f0000c3f1a27cc3eba00b6815268cf74a008103c8811b379df4bf91dac9 = $this->env->getExtension("native_profiler");
        $__internal_0f485f0000c3f1a27cc3eba00b6815268cf74a008103c8811b379df4bf91dac9->enter($__internal_0f485f0000c3f1a27cc3eba00b6815268cf74a008103c8811b379df4bf91dac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDTurismoBundle:Principal:formularioPaquete.html.twig"));

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
        // line 132
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
        // line 150
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
        // line 162
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
        // line 174
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
        // line 186
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
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/megamenu-btm1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                              </a>
                           </div>
                           <div class=\"col-md-4\">
                              <a href=\"blog.html\" class=\"img-fade-hover\">
                                 <img src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/megamenu-btm2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                              </a>
                           </div>
                           <div class=\"col-md-4\">
                              <a href=\"blog.html\" class=\"img-fade-hover\">
                                 <img src=\"";
        // line 212
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
                  <h1>Registrar un nuevo Paquete Turistico</h1>
               </div>
               <div class=\"col-md-6 col-sm-12\">
                  <div class=\"b-crumbs pull-right\"><a href=\"#\">Home</a> <i class=\"arrow_carrot-right\"></i> Basic Page</div>
               </div>
            </div>
         </div>
      </div>
      
   </header>
   <!-- page body content begin -->
   <div class=\"pg-body\">
      <div class=\"container contact\">
         <div class=\"row\">
            <div class=\"col-md-9 col-sm-12\">
               <form action=\"/\" class=\"validation-engine\">
                  <div class=\"google-maps\">
                     <iframe src=\"\" width=\"370\" height=\"150\"></iframe>
                  </div>
                  <h6>LEAVE A REPLY</h6>
                  <div class=\"row\">
                     <div class=\"col-sm-6 col-xs-12\">
                        <div class=\"required form-group\">
                           <input type=\"text\" class=\"form-control validate[required]\" data-prompt-position=\"topLeft\" placeholder=\"Name *\">
                        </div>
                        <div class=\"required form-group\">
                           <input type=\"text\" class=\"form-control validate[required,custom[email]]\" data-prompt-position=\"topLeft\" placeholder=\"E-mail *\">
                        </div>
                        <div class=\"required form-group\">
                           <input type=\"text\" class=\"form-control validate[required]\" data-prompt-position=\"topLeft\" placeholder=\"Enter your subgect *\">
                        </div>
                        <p>Your email adress will not published. Reguired fields are marked *</p>
                     </div>
                     <div class=\"col-sm-6 col-xs-12\">
                        <div class=\"required form-group\">
                           <textarea class=\"form-control validate[required]\" data-prompt-position=\"topLeft\" rows=\"6\" placeholder=\"Your comment\"></textarea>
                        </div>
                        <div class=\"required form-group\">
                           <button class=\"btn btn-sm btn-third-col col-xs-12\" type=\"submit\">POST COMMENT</button>
                        </div>
                     </div>
                  </div>
               </form>
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
        // line 683
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 685
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 686
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 687
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-accessibleMegaMenu.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 688
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.validationEngine.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 689
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.validationEngine-en.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 690
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/responsiveslides/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 691
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/fastclick.js"), "html", null, true);
        echo "\"></script> <!-- Eliminating the 300ms click delay on mobile browsers -->
   <script src=\"";
        // line 692
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/plugins.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 693
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/scripts.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_0f485f0000c3f1a27cc3eba00b6815268cf74a008103c8811b379df4bf91dac9->leave($__internal_0f485f0000c3f1a27cc3eba00b6815268cf74a008103c8811b379df4bf91dac9_prof);

    }

    public function getTemplateName()
    {
        return "MTDTurismoBundle:Principal:formularioPaquete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  813 => 693,  809 => 692,  805 => 691,  801 => 690,  797 => 689,  793 => 688,  789 => 687,  785 => 686,  781 => 685,  777 => 684,  773 => 683,  299 => 212,  291 => 207,  283 => 202,  264 => 186,  249 => 174,  234 => 162,  219 => 150,  198 => 132,  155 => 96,  85 => 28,  76 => 26,  72 => 25,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  46 => 17,  41 => 15,  37 => 14,  22 => 1,);
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
/*                          {{tipo}} - {{usuario.apellido}} {{usuario.nombre}}*/
/*                      </li>*/
/*                   </ul>*/
/*                </div>*/
/*             </div>*/
/* */
/*          </div>*/
/*       </div>*/
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
/*                               */
/*       <div class="pg-header">*/
/*          <div class="container">*/
/*             <div class="row">*/
/*                <div class="col-md-6 col-sm-12 title">*/
/*                   <h1>Registrar un nuevo Paquete Turistico</h1>*/
/*                </div>*/
/*                <div class="col-md-6 col-sm-12">*/
/*                   <div class="b-crumbs pull-right"><a href="#">Home</a> <i class="arrow_carrot-right"></i> Basic Page</div>*/
/*                </div>*/
/*             </div>*/
/*          </div>*/
/*       </div>*/
/*       */
/*    </header>*/
/*    <!-- page body content begin -->*/
/*    <div class="pg-body">*/
/*       <div class="container contact">*/
/*          <div class="row">*/
/*             <div class="col-md-9 col-sm-12">*/
/*                <form action="/" class="validation-engine">*/
/*                   <div class="google-maps">*/
/*                      <iframe src="" width="370" height="150"></iframe>*/
/*                   </div>*/
/*                   <h6>LEAVE A REPLY</h6>*/
/*                   <div class="row">*/
/*                      <div class="col-sm-6 col-xs-12">*/
/*                         <div class="required form-group">*/
/*                            <input type="text" class="form-control validate[required]" data-prompt-position="topLeft" placeholder="Name *">*/
/*                         </div>*/
/*                         <div class="required form-group">*/
/*                            <input type="text" class="form-control validate[required,custom[email]]" data-prompt-position="topLeft" placeholder="E-mail *">*/
/*                         </div>*/
/*                         <div class="required form-group">*/
/*                            <input type="text" class="form-control validate[required]" data-prompt-position="topLeft" placeholder="Enter your subgect *">*/
/*                         </div>*/
/*                         <p>Your email adress will not published. Reguired fields are marked *</p>*/
/*                      </div>*/
/*                      <div class="col-sm-6 col-xs-12">*/
/*                         <div class="required form-group">*/
/*                            <textarea class="form-control validate[required]" data-prompt-position="topLeft" rows="6" placeholder="Your comment"></textarea>*/
/*                         </div>*/
/*                         <div class="required form-group">*/
/*                            <button class="btn btn-sm btn-third-col col-xs-12" type="submit">POST COMMENT</button>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                </form>*/
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
/* </body>*/
/* </html>*/
