<?php

/* MTDTurismoBundle:Default:index.html.twig */
class __TwigTemplate_b742a2e2df86ceffb84113e355c0e4afdd8bb6656bacf102700a5eba87a317af extends Twig_Template
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
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "!
";
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
        return array (  19 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
