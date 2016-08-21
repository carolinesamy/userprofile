<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3ec56216ebac765d3657048819b79cd1d9e51eeed7aa68b28e897537e0410208 extends Twig_Template
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
        $__internal_5336e5cd73838cf23fc2be32df35d4584a99f6583d7298561bd6eaad7f23b325 = $this->env->getExtension("native_profiler");
        $__internal_5336e5cd73838cf23fc2be32df35d4584a99f6583d7298561bd6eaad7f23b325->enter($__internal_5336e5cd73838cf23fc2be32df35d4584a99f6583d7298561bd6eaad7f23b325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5336e5cd73838cf23fc2be32df35d4584a99f6583d7298561bd6eaad7f23b325->leave($__internal_5336e5cd73838cf23fc2be32df35d4584a99f6583d7298561bd6eaad7f23b325_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
