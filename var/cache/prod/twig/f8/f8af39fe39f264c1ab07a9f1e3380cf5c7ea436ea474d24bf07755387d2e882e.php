<?php

/* :default:new.html.twig */
class __TwigTemplate_ecb234a61662bb6ea5c1b394d470ff964f4465b2458e20cda6fd89b50add8c50 extends Twig_Template
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
        // line 1
        echo "
";
        // line 3
        echo "

";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
<div>
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "task", array()), 'label', array("attr" => array("class" => "task_field"), "label" => "Task Description"));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "task", array()), 'errors');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "task", array()), 'widget');
        echo "
</div>



<div>
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dueDate", array()), 'label', array("label" => "Date"));
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dueDate", array()), 'errors');
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dueDate", array()), 'widget');
        echo "
</div>



<div>
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget');
        echo "
</div>
";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return ":default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 26,  69 => 24,  60 => 18,  56 => 17,  52 => 16,  43 => 10,  39 => 9,  35 => 8,  30 => 6,  26 => 5,  22 => 3,  19 => 1,);
    }
}
/* */
/* {# to avoid html5 validation  put that in start form {'attr': {'novalidate': 'novalidate'} })#}*/
/* */
/* */
/* {{ form_start(form, {'attr': {'novalidate': 'novalidate'} }) }}*/
/* {{ form_errors(form) }}*/
/* <div>*/
/*     {{ form_label(form.task, 'Task Description',{'attr': {'class': 'task_field'} }) }}*/
/*     {{ form_errors(form.task) }}*/
/*     {{ form_widget(form.task) }}*/
/* </div>*/
/* */
/* */
/* */
/* <div>*/
/*     {{ form_label(form.dueDate ,'Date') }}*/
/*     {{ form_errors(form.dueDate) }}*/
/*     {{ form_widget(form.dueDate) }}*/
/* </div>*/
/* */
/* */
/* */
/* <div>*/
/*     {{ form_widget(form.save) }}*/
/* </div>*/
/* {{ form_end(form) }}*/
/* */
/* {#to access inputfield by id or name*/
/* */
/* {{ form.task.vars.id }}*/
/* {{ form.task.vars.full_name }}#}*/
