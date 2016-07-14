<?php

/* MTDTurismoBundle:Default:index.html.twig */
class __TwigTemplate_f1605d4bcba1943ded339f8400d3ff348fa9ffac751ad024da4077bee9db509f extends Twig_Template
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
        $__internal_944d827d85e013caad0c3d5b10654cf173335706509584380b60eea5f79c43f5 = $this->env->getExtension("native_profiler");
        $__internal_944d827d85e013caad0c3d5b10654cf173335706509584380b60eea5f79c43f5->enter($__internal_944d827d85e013caad0c3d5b10654cf173335706509584380b60eea5f79c43f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDTurismoBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_944d827d85e013caad0c3d5b10654cf173335706509584380b60eea5f79c43f5->leave($__internal_944d827d85e013caad0c3d5b10654cf173335706509584380b60eea5f79c43f5_prof);

    }

    public function getTemplateName()
    {
        return "MTDTurismoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
