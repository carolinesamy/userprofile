<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_03d8b026b639b67deb5ccb90696cf162e8a17061e51428ae5f7b6ac362832293 extends Twig_Template
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
        $__internal_6165e82f1046bbfb6a7f3edd7b6ab85e2ed6fe7267349b4f1f752f989573907a = $this->env->getExtension("native_profiler");
        $__internal_6165e82f1046bbfb6a7f3edd7b6ab85e2ed6fe7267349b4f1f752f989573907a->enter($__internal_6165e82f1046bbfb6a7f3edd7b6ab85e2ed6fe7267349b4f1f752f989573907a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6165e82f1046bbfb6a7f3edd7b6ab85e2ed6fe7267349b4f1f752f989573907a->leave($__internal_6165e82f1046bbfb6a7f3edd7b6ab85e2ed6fe7267349b4f1f752f989573907a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
