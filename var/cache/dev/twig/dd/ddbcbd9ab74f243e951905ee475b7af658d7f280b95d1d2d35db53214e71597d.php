<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_738dd60f2ba73a4e85035c45270f3ce3552d8d039f25a1a2b42b458fe9bb9c0c extends Twig_Template
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
        $__internal_5ab30f0652453ffa58260f0e1025235478b799649831c449c92c4d42ecfe7548 = $this->env->getExtension("native_profiler");
        $__internal_5ab30f0652453ffa58260f0e1025235478b799649831c449c92c4d42ecfe7548->enter($__internal_5ab30f0652453ffa58260f0e1025235478b799649831c449c92c4d42ecfe7548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5ab30f0652453ffa58260f0e1025235478b799649831c449c92c4d42ecfe7548->leave($__internal_5ab30f0652453ffa58260f0e1025235478b799649831c449c92c4d42ecfe7548_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
