<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e67064aa72f6f540a0fcf8be25b0fd665bf9e1182ae21bb0444d77235636e509 extends Twig_Template
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
        $__internal_ac3aa31eca6e99946e653a391949e192e8d4cbfa1a1927ddbb3c6513bda09be2 = $this->env->getExtension("native_profiler");
        $__internal_ac3aa31eca6e99946e653a391949e192e8d4cbfa1a1927ddbb3c6513bda09be2->enter($__internal_ac3aa31eca6e99946e653a391949e192e8d4cbfa1a1927ddbb3c6513bda09be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ac3aa31eca6e99946e653a391949e192e8d4cbfa1a1927ddbb3c6513bda09be2->leave($__internal_ac3aa31eca6e99946e653a391949e192e8d4cbfa1a1927ddbb3c6513bda09be2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
