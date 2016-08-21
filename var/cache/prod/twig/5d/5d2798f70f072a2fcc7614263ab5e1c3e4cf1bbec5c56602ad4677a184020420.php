<?php

/* UserBundle:User:loginForm.html.twig */
class __TwigTemplate_dee61f34c818c22d425429a7457d8de4511cb2ed4449419b9245bbdcde6ae191 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label', array("label" => "Enter Your name"));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'errors');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
        echo "
</div>
<div>
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login", array()), 'widget');
        echo "
</div>
    
";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
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
/*     {{ form_label(form.name ,'Enter Your name') }}*/
/*     {{ form_errors(form.name) }}*/
/*     {{ form_widget(form.name) }}*/
/* </div>*/
/* <div>*/
/*     {{ form_widget(form.login) }}*/
/* </div>*/
/*     */
/* {{ form_end(form) }}*/
