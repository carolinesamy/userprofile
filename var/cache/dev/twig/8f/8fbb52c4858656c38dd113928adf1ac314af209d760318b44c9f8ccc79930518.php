<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bbdc5eef337fced2f2f1f43ee179d385093cd600064392fcaff5ca08d0dab31e extends Twig_Template
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
        $__internal_bbdd94f9b5a49f9ee2aa8e1d9b1fb16b8351617167724ff62c5faa6dd4cc8f00 = $this->env->getExtension("native_profiler");
        $__internal_bbdd94f9b5a49f9ee2aa8e1d9b1fb16b8351617167724ff62c5faa6dd4cc8f00->enter($__internal_bbdd94f9b5a49f9ee2aa8e1d9b1fb16b8351617167724ff62c5faa6dd4cc8f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbdd94f9b5a49f9ee2aa8e1d9b1fb16b8351617167724ff62c5faa6dd4cc8f00->leave($__internal_bbdd94f9b5a49f9ee2aa8e1d9b1fb16b8351617167724ff62c5faa6dd4cc8f00_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_16499a508cca09490e29757179125accf526c5813373ab0947e943c6cd7e8410 = $this->env->getExtension("native_profiler");
        $__internal_16499a508cca09490e29757179125accf526c5813373ab0947e943c6cd7e8410->enter($__internal_16499a508cca09490e29757179125accf526c5813373ab0947e943c6cd7e8410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_16499a508cca09490e29757179125accf526c5813373ab0947e943c6cd7e8410->leave($__internal_16499a508cca09490e29757179125accf526c5813373ab0947e943c6cd7e8410_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fc92fde103fc79f9d7e0d17653f07f7cb1e465d5a5ef9c8a7df207a5d26c9cca = $this->env->getExtension("native_profiler");
        $__internal_fc92fde103fc79f9d7e0d17653f07f7cb1e465d5a5ef9c8a7df207a5d26c9cca->enter($__internal_fc92fde103fc79f9d7e0d17653f07f7cb1e465d5a5ef9c8a7df207a5d26c9cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fc92fde103fc79f9d7e0d17653f07f7cb1e465d5a5ef9c8a7df207a5d26c9cca->leave($__internal_fc92fde103fc79f9d7e0d17653f07f7cb1e465d5a5ef9c8a7df207a5d26c9cca_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e6280325ff9d635064d15238cd21f1c95fbd5fa68dd164dd86a55297fa67c1a = $this->env->getExtension("native_profiler");
        $__internal_3e6280325ff9d635064d15238cd21f1c95fbd5fa68dd164dd86a55297fa67c1a->enter($__internal_3e6280325ff9d635064d15238cd21f1c95fbd5fa68dd164dd86a55297fa67c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3e6280325ff9d635064d15238cd21f1c95fbd5fa68dd164dd86a55297fa67c1a->leave($__internal_3e6280325ff9d635064d15238cd21f1c95fbd5fa68dd164dd86a55297fa67c1a_prof);

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
