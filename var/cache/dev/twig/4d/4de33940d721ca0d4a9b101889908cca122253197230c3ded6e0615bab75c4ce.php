<?php

/* :lucky:number.html.twig */
class __TwigTemplate_2ee0ee0f4c95f42e19136a6027b64e47d60261252f16f8b35c29927c83f26b94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":lucky:number.html.twig", 2);
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
        $__internal_d396ef2f3bb7ac3bf1dd2baf0268ec93b4bbfe4ef220c82d07166f2d863c98c8 = $this->env->getExtension("native_profiler");
        $__internal_d396ef2f3bb7ac3bf1dd2baf0268ec93b4bbfe4ef220c82d07166f2d863c98c8->enter($__internal_d396ef2f3bb7ac3bf1dd2baf0268ec93b4bbfe4ef220c82d07166f2d863c98c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":lucky:number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d396ef2f3bb7ac3bf1dd2baf0268ec93b4bbfe4ef220c82d07166f2d863c98c8->leave($__internal_d396ef2f3bb7ac3bf1dd2baf0268ec93b4bbfe4ef220c82d07166f2d863c98c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_275bf64753869ee4e8ae0e798b8595ff24762468c560e13218d3684975a176b8 = $this->env->getExtension("native_profiler");
        $__internal_275bf64753869ee4e8ae0e798b8595ff24762468c560e13218d3684975a176b8->enter($__internal_275bf64753869ee4e8ae0e798b8595ff24762468c560e13218d3684975a176b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1> lucky numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo "</h1>
";
        
        $__internal_275bf64753869ee4e8ae0e798b8595ff24762468c560e13218d3684975a176b8->leave($__internal_275bf64753869ee4e8ae0e798b8595ff24762468c560e13218d3684975a176b8_prof);

    }

    public function getTemplateName()
    {
        return ":lucky:number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h1> lucky numbers: {{ luckyNumberList }}</h1>*/
/* {% endblock %}*/
