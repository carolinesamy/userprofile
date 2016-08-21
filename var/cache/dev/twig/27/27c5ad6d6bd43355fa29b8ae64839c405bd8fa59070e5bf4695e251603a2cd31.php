<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_5b574faffae1bd8cea73895c9774bd7b78dd54aa7d5b6436d113a4fc5625de7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23763c551933e767ad58c4bdf2136440b4d0a026da616a513b6eb918ffe8eb67 = $this->env->getExtension("native_profiler");
        $__internal_23763c551933e767ad58c4bdf2136440b4d0a026da616a513b6eb918ffe8eb67->enter($__internal_23763c551933e767ad58c4bdf2136440b4d0a026da616a513b6eb918ffe8eb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_23763c551933e767ad58c4bdf2136440b4d0a026da616a513b6eb918ffe8eb67->leave($__internal_23763c551933e767ad58c4bdf2136440b4d0a026da616a513b6eb918ffe8eb67_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e63b295169ba1c3cce8103655b541b2544d16df0f1da082598a2280c70e0d5ad = $this->env->getExtension("native_profiler");
        $__internal_e63b295169ba1c3cce8103655b541b2544d16df0f1da082598a2280c70e0d5ad->enter($__internal_e63b295169ba1c3cce8103655b541b2544d16df0f1da082598a2280c70e0d5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e63b295169ba1c3cce8103655b541b2544d16df0f1da082598a2280c70e0d5ad->leave($__internal_e63b295169ba1c3cce8103655b541b2544d16df0f1da082598a2280c70e0d5ad_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
