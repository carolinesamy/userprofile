<?php

/* UserBundle:User:loginForm.html.twig */
class __TwigTemplate_3fc555911dbc2a2351e38ae2c7e319a1a5bd5f50cb34b976f115eea5d28e6ead extends Twig_Template
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
        $__internal_28bdd75e2327868f254e11659c6bc392a6c43cb4a885e4a975f6865816e63356 = $this->env->getExtension("native_profiler");
        $__internal_28bdd75e2327868f254e11659c6bc392a6c43cb4a885e4a975f6865816e63356->enter($__internal_28bdd75e2327868f254e11659c6bc392a6c43cb4a885e4a975f6865816e63356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:loginForm.html.twig"));

        // line 2
        echo "

    ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "

    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div>
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label" => "Enter Your name"));
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
    </div>
    <div>
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'widget');
        echo "
    </div>

    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("adduser");
        echo "\">Register Now</a>

";
        
        $__internal_28bdd75e2327868f254e11659c6bc392a6c43cb4a885e4a975f6865816e63356->leave($__internal_28bdd75e2327868f254e11659c6bc392a6c43cb4a885e4a975f6865816e63356_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:loginForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  57 => 17,  51 => 14,  45 => 11,  41 => 10,  37 => 9,  31 => 6,  26 => 4,  22 => 2,);
    }
}
/* {# form to add new phpne #}*/
/* */
/* */
/*     {{ form_start(form, {'attr': {'novalidate': 'novalidate'} }) }}*/
/* */
/*     {{ form_errors(form) }}*/
/* */
/*     <div>*/
/*         {{ form_label(form.name ,'Enter Your name') }}*/
/*         {{ form_errors(form.name) }}*/
/*         {{ form_widget(form.name) }}*/
/*     </div>*/
/*     <div>*/
/*         {{ form_widget(form.login) }}*/
/*     </div>*/
/* */
/*     {{ form_end(form) }}*/
/* */
/*     <a href="{{ path('adduser') }}">Register Now</a>*/
/* */
/* */
