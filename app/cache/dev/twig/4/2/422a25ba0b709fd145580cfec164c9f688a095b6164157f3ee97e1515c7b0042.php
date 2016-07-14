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
        $__internal_c63d3ef7bbc3c51ef6d08fdf9a712c7bb04d3eb46c8e8a4d6cb6514220ff5a32 = $this->env->getExtension("native_profiler");
        $__internal_c63d3ef7bbc3c51ef6d08fdf9a712c7bb04d3eb46c8e8a4d6cb6514220ff5a32->enter($__internal_c63d3ef7bbc3c51ef6d08fdf9a712c7bb04d3eb46c8e8a4d6cb6514220ff5a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c63d3ef7bbc3c51ef6d08fdf9a712c7bb04d3eb46c8e8a4d6cb6514220ff5a32->leave($__internal_c63d3ef7bbc3c51ef6d08fdf9a712c7bb04d3eb46c8e8a4d6cb6514220ff5a32_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_082e42f8cfb7bb66a1447e4f53f58e5e463cc11aaaebcd59fd96b86dde2fa4d7 = $this->env->getExtension("native_profiler");
        $__internal_082e42f8cfb7bb66a1447e4f53f58e5e463cc11aaaebcd59fd96b86dde2fa4d7->enter($__internal_082e42f8cfb7bb66a1447e4f53f58e5e463cc11aaaebcd59fd96b86dde2fa4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_082e42f8cfb7bb66a1447e4f53f58e5e463cc11aaaebcd59fd96b86dde2fa4d7->leave($__internal_082e42f8cfb7bb66a1447e4f53f58e5e463cc11aaaebcd59fd96b86dde2fa4d7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5e67addb1985aff51cdcd747698b2767771ffda778abb65bbdf2835416129d3 = $this->env->getExtension("native_profiler");
        $__internal_a5e67addb1985aff51cdcd747698b2767771ffda778abb65bbdf2835416129d3->enter($__internal_a5e67addb1985aff51cdcd747698b2767771ffda778abb65bbdf2835416129d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a5e67addb1985aff51cdcd747698b2767771ffda778abb65bbdf2835416129d3->leave($__internal_a5e67addb1985aff51cdcd747698b2767771ffda778abb65bbdf2835416129d3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_617d12a49dacb4065b2a6a5f57edb24462ae92b49d1f8e65381371162898a4a9 = $this->env->getExtension("native_profiler");
        $__internal_617d12a49dacb4065b2a6a5f57edb24462ae92b49d1f8e65381371162898a4a9->enter($__internal_617d12a49dacb4065b2a6a5f57edb24462ae92b49d1f8e65381371162898a4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_617d12a49dacb4065b2a6a5f57edb24462ae92b49d1f8e65381371162898a4a9->leave($__internal_617d12a49dacb4065b2a6a5f57edb24462ae92b49d1f8e65381371162898a4a9_prof);

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
