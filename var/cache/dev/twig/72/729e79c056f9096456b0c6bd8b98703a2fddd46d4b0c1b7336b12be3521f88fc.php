<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_73185e7752ff697b2eeac72652a11ce3ad1abb54e9dc71894b22ff4e6e7049b8 extends Twig_Template
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
        $__internal_cccfc631ffa0ee8df4f228ba6d6c79ae53ee519a4946132b74a9bf7c0fdb033d = $this->env->getExtension("native_profiler");
        $__internal_cccfc631ffa0ee8df4f228ba6d6c79ae53ee519a4946132b74a9bf7c0fdb033d->enter($__internal_cccfc631ffa0ee8df4f228ba6d6c79ae53ee519a4946132b74a9bf7c0fdb033d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_cccfc631ffa0ee8df4f228ba6d6c79ae53ee519a4946132b74a9bf7c0fdb033d->leave($__internal_cccfc631ffa0ee8df4f228ba6d6c79ae53ee519a4946132b74a9bf7c0fdb033d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
