<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1dfa921c191cf011a1fba10b1de1c98dbb2ae31bf718759b7fc9081d440ae488 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d85e9153ece10011189698545e993c2bed106e8ebe698ef1a6231bceb333842 = $this->env->getExtension("native_profiler");
        $__internal_6d85e9153ece10011189698545e993c2bed106e8ebe698ef1a6231bceb333842->enter($__internal_6d85e9153ece10011189698545e993c2bed106e8ebe698ef1a6231bceb333842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d85e9153ece10011189698545e993c2bed106e8ebe698ef1a6231bceb333842->leave($__internal_6d85e9153ece10011189698545e993c2bed106e8ebe698ef1a6231bceb333842_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e5db59f3c2d1a01de0c5174accb4589b0311e449b3f0e6b88993440ae428acd3 = $this->env->getExtension("native_profiler");
        $__internal_e5db59f3c2d1a01de0c5174accb4589b0311e449b3f0e6b88993440ae428acd3->enter($__internal_e5db59f3c2d1a01de0c5174accb4589b0311e449b3f0e6b88993440ae428acd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e5db59f3c2d1a01de0c5174accb4589b0311e449b3f0e6b88993440ae428acd3->leave($__internal_e5db59f3c2d1a01de0c5174accb4589b0311e449b3f0e6b88993440ae428acd3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a637ca45768724c2ba2d781653b36609ff6ad544cbe3fb375ee7b7f819379d8e = $this->env->getExtension("native_profiler");
        $__internal_a637ca45768724c2ba2d781653b36609ff6ad544cbe3fb375ee7b7f819379d8e->enter($__internal_a637ca45768724c2ba2d781653b36609ff6ad544cbe3fb375ee7b7f819379d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a637ca45768724c2ba2d781653b36609ff6ad544cbe3fb375ee7b7f819379d8e->leave($__internal_a637ca45768724c2ba2d781653b36609ff6ad544cbe3fb375ee7b7f819379d8e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d201935cd7f8e76ebd80a289021c00ddc91dce72676dee40912cfc22c87a7e04 = $this->env->getExtension("native_profiler");
        $__internal_d201935cd7f8e76ebd80a289021c00ddc91dce72676dee40912cfc22c87a7e04->enter($__internal_d201935cd7f8e76ebd80a289021c00ddc91dce72676dee40912cfc22c87a7e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d201935cd7f8e76ebd80a289021c00ddc91dce72676dee40912cfc22c87a7e04->leave($__internal_d201935cd7f8e76ebd80a289021c00ddc91dce72676dee40912cfc22c87a7e04_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
