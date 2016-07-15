<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_18fd845899dfee3386ac9683c7fb03af114ff6107662ae7498e049ec7429d505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0445e6d86f764c7d1db6b991e9e95a739ca355ac5a1dd2cf6f071010442c4081 = $this->env->getExtension("native_profiler");
        $__internal_0445e6d86f764c7d1db6b991e9e95a739ca355ac5a1dd2cf6f071010442c4081->enter($__internal_0445e6d86f764c7d1db6b991e9e95a739ca355ac5a1dd2cf6f071010442c4081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0445e6d86f764c7d1db6b991e9e95a739ca355ac5a1dd2cf6f071010442c4081->leave($__internal_0445e6d86f764c7d1db6b991e9e95a739ca355ac5a1dd2cf6f071010442c4081_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_18e5ffdc05373d1fe0d77510bc11e1c7e459bcbe5736c015ad3840a4d606cb02 = $this->env->getExtension("native_profiler");
        $__internal_18e5ffdc05373d1fe0d77510bc11e1c7e459bcbe5736c015ad3840a4d606cb02->enter($__internal_18e5ffdc05373d1fe0d77510bc11e1c7e459bcbe5736c015ad3840a4d606cb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_18e5ffdc05373d1fe0d77510bc11e1c7e459bcbe5736c015ad3840a4d606cb02->leave($__internal_18e5ffdc05373d1fe0d77510bc11e1c7e459bcbe5736c015ad3840a4d606cb02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_661fb5de01a0ff8db9187354e60e57e5f571a4d09323f5efa66ad381e4d14f53 = $this->env->getExtension("native_profiler");
        $__internal_661fb5de01a0ff8db9187354e60e57e5f571a4d09323f5efa66ad381e4d14f53->enter($__internal_661fb5de01a0ff8db9187354e60e57e5f571a4d09323f5efa66ad381e4d14f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_661fb5de01a0ff8db9187354e60e57e5f571a4d09323f5efa66ad381e4d14f53->leave($__internal_661fb5de01a0ff8db9187354e60e57e5f571a4d09323f5efa66ad381e4d14f53_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8611443d282b580345f8b09ed9ac5778a6fc24df289690e0ddbffb1451a34bb1 = $this->env->getExtension("native_profiler");
        $__internal_8611443d282b580345f8b09ed9ac5778a6fc24df289690e0ddbffb1451a34bb1->enter($__internal_8611443d282b580345f8b09ed9ac5778a6fc24df289690e0ddbffb1451a34bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8611443d282b580345f8b09ed9ac5778a6fc24df289690e0ddbffb1451a34bb1->leave($__internal_8611443d282b580345f8b09ed9ac5778a6fc24df289690e0ddbffb1451a34bb1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
