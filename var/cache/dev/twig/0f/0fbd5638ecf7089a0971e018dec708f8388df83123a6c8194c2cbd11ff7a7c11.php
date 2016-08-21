<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c2cb4931ab8bb524795921b544d06198eeecd153622c797b167d8a995e6d1eee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e07023a1dbd1eca74ad703b97e98efd7d4199bf619cb29f0537d8cf16aa8fe0 = $this->env->getExtension("native_profiler");
        $__internal_9e07023a1dbd1eca74ad703b97e98efd7d4199bf619cb29f0537d8cf16aa8fe0->enter($__internal_9e07023a1dbd1eca74ad703b97e98efd7d4199bf619cb29f0537d8cf16aa8fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e07023a1dbd1eca74ad703b97e98efd7d4199bf619cb29f0537d8cf16aa8fe0->leave($__internal_9e07023a1dbd1eca74ad703b97e98efd7d4199bf619cb29f0537d8cf16aa8fe0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c04be022aaf8154da357d203601f0fe03c15bcd6464b0c92bbf0337014dfaa0f = $this->env->getExtension("native_profiler");
        $__internal_c04be022aaf8154da357d203601f0fe03c15bcd6464b0c92bbf0337014dfaa0f->enter($__internal_c04be022aaf8154da357d203601f0fe03c15bcd6464b0c92bbf0337014dfaa0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c04be022aaf8154da357d203601f0fe03c15bcd6464b0c92bbf0337014dfaa0f->leave($__internal_c04be022aaf8154da357d203601f0fe03c15bcd6464b0c92bbf0337014dfaa0f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_685187c3462ce2c6ca218d4dbf4f51aa9d625a0c803d91104a3e54dca4903347 = $this->env->getExtension("native_profiler");
        $__internal_685187c3462ce2c6ca218d4dbf4f51aa9d625a0c803d91104a3e54dca4903347->enter($__internal_685187c3462ce2c6ca218d4dbf4f51aa9d625a0c803d91104a3e54dca4903347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_685187c3462ce2c6ca218d4dbf4f51aa9d625a0c803d91104a3e54dca4903347->leave($__internal_685187c3462ce2c6ca218d4dbf4f51aa9d625a0c803d91104a3e54dca4903347_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc0c27ef1f350c7da27b79bb97d5c2e47309445cdea1b72e2837a1541f4042a1 = $this->env->getExtension("native_profiler");
        $__internal_bc0c27ef1f350c7da27b79bb97d5c2e47309445cdea1b72e2837a1541f4042a1->enter($__internal_bc0c27ef1f350c7da27b79bb97d5c2e47309445cdea1b72e2837a1541f4042a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bc0c27ef1f350c7da27b79bb97d5c2e47309445cdea1b72e2837a1541f4042a1->leave($__internal_bc0c27ef1f350c7da27b79bb97d5c2e47309445cdea1b72e2837a1541f4042a1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
