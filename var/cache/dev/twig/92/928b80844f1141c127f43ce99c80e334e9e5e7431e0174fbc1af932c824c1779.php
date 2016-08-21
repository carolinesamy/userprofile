<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_85807862addeeaf914d3f14d626dc88343dbf8f7badd08493e5c134bc54a0843 extends Twig_Template
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
        $__internal_04544a974903ebba1cc3eaacff6fb730c1ba6082f039120e8c81296d3fc68f8b = $this->env->getExtension("native_profiler");
        $__internal_04544a974903ebba1cc3eaacff6fb730c1ba6082f039120e8c81296d3fc68f8b->enter($__internal_04544a974903ebba1cc3eaacff6fb730c1ba6082f039120e8c81296d3fc68f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_04544a974903ebba1cc3eaacff6fb730c1ba6082f039120e8c81296d3fc68f8b->leave($__internal_04544a974903ebba1cc3eaacff6fb730c1ba6082f039120e8c81296d3fc68f8b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
