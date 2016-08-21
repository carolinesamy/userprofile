<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_aa53305040902ca1610a57517c4f609c8b6109e67fcf3b4d45ff4a9cd7bc8e74 extends Twig_Template
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
        $__internal_c690ffea9e12f60a006a9080935e25dfcd2b09d7f3979f89e1f53187420e7d37 = $this->env->getExtension("native_profiler");
        $__internal_c690ffea9e12f60a006a9080935e25dfcd2b09d7f3979f89e1f53187420e7d37->enter($__internal_c690ffea9e12f60a006a9080935e25dfcd2b09d7f3979f89e1f53187420e7d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c690ffea9e12f60a006a9080935e25dfcd2b09d7f3979f89e1f53187420e7d37->leave($__internal_c690ffea9e12f60a006a9080935e25dfcd2b09d7f3979f89e1f53187420e7d37_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fff4393e97d43c908c715cbc253a2817dcc880ad9f01a0a559e2f726cf501b03 = $this->env->getExtension("native_profiler");
        $__internal_fff4393e97d43c908c715cbc253a2817dcc880ad9f01a0a559e2f726cf501b03->enter($__internal_fff4393e97d43c908c715cbc253a2817dcc880ad9f01a0a559e2f726cf501b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fff4393e97d43c908c715cbc253a2817dcc880ad9f01a0a559e2f726cf501b03->leave($__internal_fff4393e97d43c908c715cbc253a2817dcc880ad9f01a0a559e2f726cf501b03_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_863e9cba1282d34a86886d1777decc7d4db0a771fc3e189259d550f82f507db9 = $this->env->getExtension("native_profiler");
        $__internal_863e9cba1282d34a86886d1777decc7d4db0a771fc3e189259d550f82f507db9->enter($__internal_863e9cba1282d34a86886d1777decc7d4db0a771fc3e189259d550f82f507db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_863e9cba1282d34a86886d1777decc7d4db0a771fc3e189259d550f82f507db9->leave($__internal_863e9cba1282d34a86886d1777decc7d4db0a771fc3e189259d550f82f507db9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db2ac4498583a130fb87c939c7b1943c6bfc0373a32343b7ff8f0dc4b181fcc8 = $this->env->getExtension("native_profiler");
        $__internal_db2ac4498583a130fb87c939c7b1943c6bfc0373a32343b7ff8f0dc4b181fcc8->enter($__internal_db2ac4498583a130fb87c939c7b1943c6bfc0373a32343b7ff8f0dc4b181fcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_db2ac4498583a130fb87c939c7b1943c6bfc0373a32343b7ff8f0dc4b181fcc8->leave($__internal_db2ac4498583a130fb87c939c7b1943c6bfc0373a32343b7ff8f0dc4b181fcc8_prof);

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
