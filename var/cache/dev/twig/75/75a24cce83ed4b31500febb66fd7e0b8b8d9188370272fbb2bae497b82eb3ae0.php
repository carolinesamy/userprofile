<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e2bfcdc21bb34b6acd8ed1569564dbd53d42fde02fc75b9d1cc6b00328dddda4 extends Twig_Template
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
        $__internal_7ed08497a4a6ca948bedccdccf72ba8d790e1358a08737401a572869be81bef3 = $this->env->getExtension("native_profiler");
        $__internal_7ed08497a4a6ca948bedccdccf72ba8d790e1358a08737401a572869be81bef3->enter($__internal_7ed08497a4a6ca948bedccdccf72ba8d790e1358a08737401a572869be81bef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7ed08497a4a6ca948bedccdccf72ba8d790e1358a08737401a572869be81bef3->leave($__internal_7ed08497a4a6ca948bedccdccf72ba8d790e1358a08737401a572869be81bef3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
