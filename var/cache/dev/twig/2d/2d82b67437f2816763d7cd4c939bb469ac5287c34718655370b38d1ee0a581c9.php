<?php

/* :default:new.html.twig */
class __TwigTemplate_cbe381f6cff122cfa696f7f0993bf5bee81044658bab1d1cee380741562147c2 extends Twig_Template
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
        $__internal_8a9c81522e14f5463b91cdcdb9e25595dffa99ad2e1e9ecf2ec2357100af0082 = $this->env->getExtension("native_profiler");
        $__internal_8a9c81522e14f5463b91cdcdb9e25595dffa99ad2e1e9ecf2ec2357100af0082->enter($__internal_8a9c81522e14f5463b91cdcdb9e25595dffa99ad2e1e9ecf2ec2357100af0082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:new.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "

";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
<div>
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "task", array()), 'label', array("attr" => array("class" => "task_field"), "label" => "Task Description"));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "task", array()), 'errors');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "task", array()), 'widget');
        echo "
</div>



<div>
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dueDate", array()), 'label', array("label" => "Date"));
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dueDate", array()), 'errors');
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dueDate", array()), 'widget');
        echo "
</div>



<div>
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
</div>
";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_8a9c81522e14f5463b91cdcdb9e25595dffa99ad2e1e9ecf2ec2357100af0082->leave($__internal_8a9c81522e14f5463b91cdcdb9e25595dffa99ad2e1e9ecf2ec2357100af0082_prof);

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
        return array (  77 => 26,  72 => 24,  63 => 18,  59 => 17,  55 => 16,  46 => 10,  42 => 9,  38 => 8,  33 => 6,  29 => 5,  25 => 3,  22 => 1,);
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
