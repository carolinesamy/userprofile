<?php

/* UserBundle:User:userForm.html.twig */
class __TwigTemplate_cdaa1961db2d393678301bb913959c77fecace5f09bdf61e6dd8b3dbd7a0ebd9 extends Twig_Template
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
        // line 4
        echo "

";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
<div>
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label', array("label" => "Enter Your Name"));
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'errors');
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
        echo "
</div>



<div>
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', array("label" => "Enter Your Email"));
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
</div>

<div>
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthdate", array()), 'label', array("label" => "Enter Your Birthday"));
        echo "
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthdate", array()), 'errors');
        echo "
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthdate", array()), 'widget');
        echo "
</div>

<div>
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget');
        echo "
</div>
";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "UserBundle:User:userForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 31,  82 => 29,  75 => 25,  71 => 24,  67 => 23,  60 => 19,  56 => 18,  52 => 17,  43 => 11,  39 => 10,  35 => 9,  30 => 7,  26 => 6,  22 => 4,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {# to avoid html5 validation  put that in start form {'attr': {'novalidate': 'novalidate'} })#}*/
/* */
/* */
/* {{ form_start(form, {'attr': {'novalidate': 'novalidate'} }) }}*/
/* {{ form_errors(form) }}*/
/* <div>*/
/*     {{ form_label(form.name, 'Enter Your Name') }}*/
/*     {{ form_errors(form.name) }}*/
/*     {{ form_widget(form.name) }}*/
/* </div>*/
/* */
/* */
/* */
/* <div>*/
/*     {{ form_label(form.email ,'Enter Your Email') }}*/
/*     {{ form_errors(form.email) }}*/
/*     {{ form_widget(form.email) }}*/
/* </div>*/
/* */
/* <div>*/
/*     {{ form_label(form.birthdate ,'Enter Your Birthday') }}*/
/*     {{ form_errors(form.birthdate) }}*/
/*     {{ form_widget(form.birthdate) }}*/
/* </div>*/
/* */
/* <div>*/
/*     {{ form_widget(form.save) }}*/
/* </div>*/
/* {{ form_end(form) }}*/
/* */
