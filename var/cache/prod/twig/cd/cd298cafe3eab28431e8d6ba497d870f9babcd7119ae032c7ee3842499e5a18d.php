<?php

/* UserBundle:User:userPhoneForm.html.twig */
class __TwigTemplate_a7521f3a638f2c5a0e555ed7991931f500a1510316ac2d19aa5a7afadcdf5829 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "

";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

<div>
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "number", array()), 'label', array("label" => "Enter Your phone"));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "number", array()), 'errors');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "number", array()), 'widget');
        echo "
</div>
<div>
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget');
        echo "
</div>
    
";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
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
        return array (  53 => 16,  47 => 13,  41 => 10,  37 => 9,  33 => 8,  27 => 5,  22 => 3,  19 => 2,);
    }
}
/* {# form to add new phpne #}*/
/* */
/* {{ form_start(form, {'attr': {'novalidate': 'novalidate'} }) }}*/
/* */
/* {{ form_errors(form) }}*/
/* */
/* <div>*/
/*     {{ form_label(form.number ,'Enter Your phone') }}*/
/*     {{ form_errors(form.number) }}*/
/*     {{ form_widget(form.number) }}*/
/* </div>*/
/* <div>*/
/*     {{ form_widget(form.save) }}*/
/* </div>*/
/*     */
/* {{ form_end(form) }}*/
