<?php

/* UserBundle:User:userPhoneForm.html.twig */
class __TwigTemplate_b689fb45152d945a718f6e8d803688b6ede519f3faf0b129958c750eeb7d0310 extends Twig_Template
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
        $__internal_da2b9003c39fa37f867b850e689140eedcc5903fd953852c130dab352a0bdb9f = $this->env->getExtension("native_profiler");
        $__internal_da2b9003c39fa37f867b850e689140eedcc5903fd953852c130dab352a0bdb9f->enter($__internal_da2b9003c39fa37f867b850e689140eedcc5903fd953852c130dab352a0bdb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userPhoneForm.html.twig"));

        // line 1
        echo "
<!-- Modal content-->
<div id=\"m_content\" class=\"modal-content\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Modal Header</h4>
    </div>
    <div class=\"modal-body\">
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "

        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <div>
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "number", array()), 'label', array("label" => "Enter Your phone"));
        echo "
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "number", array()), 'errors');
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "number", array()), 'widget', array("attr" => array("id" => "number")));
        echo "
        </div>
        ";
        // line 21
        echo "        <div>
            <button type=\"submit\" class=\"btn btn-default\" >save</button>
        </div>

        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
    </div>
</div>
";
        
        $__internal_da2b9003c39fa37f867b850e689140eedcc5903fd953852c130dab352a0bdb9f->leave($__internal_da2b9003c39fa37f867b850e689140eedcc5903fd953852c130dab352a0bdb9f_prof);

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
        return array (  62 => 25,  56 => 21,  51 => 16,  47 => 15,  43 => 14,  37 => 11,  32 => 9,  22 => 1,);
    }
}
/* */
/* <!-- Modal content-->*/
/* <div id="m_content" class="modal-content">*/
/*     <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*         <h4 class="modal-title">Modal Header</h4>*/
/*     </div>*/
/*     <div class="modal-body">*/
/*         {{ form_start(form, {'attr': {'novalidate': 'novalidate'} }) }}*/
/* */
/*         {{ form_errors(form) }}*/
/* */
/*         <div>*/
/*             {{ form_label(form.number ,'Enter Your phone') }}*/
/*             {{ form_errors(form.number) }}*/
/*             {{ form_widget(form.number,{'attr': {'id': 'number'} }) }}*/
/*         </div>*/
/*         {#<div>*/
/*             {{ form_widget(form.save ,{'attr': {'class': 'btn btn-default'} }) }}*/
/*         </div>#}*/
/*         <div>*/
/*             <button type="submit" class="btn btn-default" >save</button>*/
/*         </div>*/
/* */
/*         {{ form_end(form) }}*/
/*     </div>*/
/*     <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*     </div>*/
/* </div>*/
/* */
