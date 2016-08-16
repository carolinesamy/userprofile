<?php

/* UserBundle:User:userForm.html.twig */
class __TwigTemplate_9583745185d150412b4ce68ddb812a28b28cdbb76418fbfcea5af6df29a5fc8e extends Twig_Template
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
        $__internal_cd7fba9d2540fb7c3342672b1d1fe2e172f37836f714d3a0c3edb33158c0728f = $this->env->getExtension("native_profiler");
        $__internal_cd7fba9d2540fb7c3342672b1d1fe2e172f37836f714d3a0c3edb33158c0728f->enter($__internal_cd7fba9d2540fb7c3342672b1d1fe2e172f37836f714d3a0c3edb33158c0728f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userForm.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "

";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
<div>
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label" => "Enter Your Name"));
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
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Enter Your Email"));
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
</div>

<div>
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthdate", array()), 'label', array("label" => "Enter Your Birthday"));
        echo "
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthdate", array()), 'errors');
        echo "
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthdate", array()), 'widget');
        echo "
</div>

<div>
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
</div>
";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_cd7fba9d2540fb7c3342672b1d1fe2e172f37836f714d3a0c3edb33158c0728f->leave($__internal_cd7fba9d2540fb7c3342672b1d1fe2e172f37836f714d3a0c3edb33158c0728f_prof);

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
        return array (  90 => 31,  85 => 29,  78 => 25,  74 => 24,  70 => 23,  63 => 19,  59 => 18,  55 => 17,  46 => 11,  42 => 10,  38 => 9,  33 => 7,  29 => 6,  25 => 4,  22 => 2,);
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
