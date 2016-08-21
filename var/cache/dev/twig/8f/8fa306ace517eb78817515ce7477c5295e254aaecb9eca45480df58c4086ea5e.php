<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_106688dd1e5acc6a47648c069c2a697bf0474708898fa3233793ea1a5f33379e extends Twig_Template
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
        $__internal_be3ebd1086a0732b6eef6334eb09dd25049222f2b7a53facc1b448291a61b451 = $this->env->getExtension("native_profiler");
        $__internal_be3ebd1086a0732b6eef6334eb09dd25049222f2b7a53facc1b448291a61b451->enter($__internal_be3ebd1086a0732b6eef6334eb09dd25049222f2b7a53facc1b448291a61b451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_be3ebd1086a0732b6eef6334eb09dd25049222f2b7a53facc1b448291a61b451->leave($__internal_be3ebd1086a0732b6eef6334eb09dd25049222f2b7a53facc1b448291a61b451_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
