<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8f20eb43e8fecb7721ff2c867b267a2d12a50a14c9a7c4ddefb880ff887a9f2a extends Twig_Template
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
        $__internal_7438aebc760a0593d1e1edde25250aa1c017e5e56474fba379cdf4ec301a934d = $this->env->getExtension("native_profiler");
        $__internal_7438aebc760a0593d1e1edde25250aa1c017e5e56474fba379cdf4ec301a934d->enter($__internal_7438aebc760a0593d1e1edde25250aa1c017e5e56474fba379cdf4ec301a934d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7438aebc760a0593d1e1edde25250aa1c017e5e56474fba379cdf4ec301a934d->leave($__internal_7438aebc760a0593d1e1edde25250aa1c017e5e56474fba379cdf4ec301a934d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
