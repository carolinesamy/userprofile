<?php

/* lucky/number.html.twig */
class __TwigTemplate_2f192bdb08e454e287a0c5faf5659982b0bb3530d3ec33c503754e3414be6c97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lucky/number.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d1e397975a41dc169e5f8ea409969bdae15b482fa2268f0bc3fa8af7d2ffcea = $this->env->getExtension("native_profiler");
        $__internal_7d1e397975a41dc169e5f8ea409969bdae15b482fa2268f0bc3fa8af7d2ffcea->enter($__internal_7d1e397975a41dc169e5f8ea409969bdae15b482fa2268f0bc3fa8af7d2ffcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d1e397975a41dc169e5f8ea409969bdae15b482fa2268f0bc3fa8af7d2ffcea->leave($__internal_7d1e397975a41dc169e5f8ea409969bdae15b482fa2268f0bc3fa8af7d2ffcea_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_33a7caaf0d59e45a7d296d155dc58b0e8969553b720e6537b41793fb56adecfb = $this->env->getExtension("native_profiler");
        $__internal_33a7caaf0d59e45a7d296d155dc58b0e8969553b720e6537b41793fb56adecfb->enter($__internal_33a7caaf0d59e45a7d296d155dc58b0e8969553b720e6537b41793fb56adecfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1> lucky numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo "</h1>
";
        
        $__internal_33a7caaf0d59e45a7d296d155dc58b0e8969553b720e6537b41793fb56adecfb->leave($__internal_33a7caaf0d59e45a7d296d155dc58b0e8969553b720e6537b41793fb56adecfb_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h1> lucky numbers: {{ luckyNumberList }}</h1>*/
/* {% endblock %}*/
