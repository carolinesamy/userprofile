<?php

/* UserBundle:User:userPhoneForm.html.twig */
class __TwigTemplate_cf856bd1f76a00bfb04f72aa6e38c1e7525cf292d8a38d69e2a84185a97f7e55 extends Twig_Template
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
        $__internal_6c142f9ed98ae0ed7297049e28213613f8fdd8687fce5d036fa7a6366e68f4c9 = $this->env->getExtension("native_profiler");
        $__internal_6c142f9ed98ae0ed7297049e28213613f8fdd8687fce5d036fa7a6366e68f4c9->enter($__internal_6c142f9ed98ae0ed7297049e28213613f8fdd8687fce5d036fa7a6366e68f4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userPhoneForm.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<div>
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "number", array()), 'label', array("label" => "Enter Your phone"));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "number", array()), 'errors');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "number", array()), 'widget');
        echo "
</div>


<div>
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
</div>
    
";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_6c142f9ed98ae0ed7297049e28213613f8fdd8687fce5d036fa7a6366e68f4c9->leave($__internal_6c142f9ed98ae0ed7297049e28213613f8fdd8687fce5d036fa7a6366e68f4c9_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:userPhoneForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  51 => 14,  43 => 9,  39 => 8,  35 => 7,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {{ form_start(form, {'attr': {'novalidate': 'novalidate'} }) }}*/
/* {{ form_errors(form) }}*/
/* */
/* <div>*/
/*     {{ form_label(form.number ,'Enter Your phone') }}*/
/*     {{ form_errors(form.number) }}*/
/*     {{ form_widget(form.number) }}*/
/* </div>*/
/* */
/* */
/* <div>*/
/*     {{ form_widget(form.save) }}*/
/* </div>*/
/*     */
/* {{ form_end(form) }}*/
