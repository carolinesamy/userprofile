<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3014e42e59929d02d9579792ef49b8ecbcbc9d9bc5cf9d7a77e2b929c757bb73 extends Twig_Template
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
        $__internal_4824e3e4803d4ccda07599eb3eb766ef1d14af41dd8df84c9d9461bf77a8363e = $this->env->getExtension("native_profiler");
        $__internal_4824e3e4803d4ccda07599eb3eb766ef1d14af41dd8df84c9d9461bf77a8363e->enter($__internal_4824e3e4803d4ccda07599eb3eb766ef1d14af41dd8df84c9d9461bf77a8363e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4824e3e4803d4ccda07599eb3eb766ef1d14af41dd8df84c9d9461bf77a8363e->leave($__internal_4824e3e4803d4ccda07599eb3eb766ef1d14af41dd8df84c9d9461bf77a8363e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
