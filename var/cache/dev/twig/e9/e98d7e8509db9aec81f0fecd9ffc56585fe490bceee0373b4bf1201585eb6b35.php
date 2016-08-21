<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_58a01876844d68c68f6fc70a97578b537b1e49b374d9ee01eb0b6eac5eeb27f1 extends Twig_Template
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
        $__internal_edd77805150ec51ef9e6738d780a0e323c1a6d9d045955677cb75af8533318ec = $this->env->getExtension("native_profiler");
        $__internal_edd77805150ec51ef9e6738d780a0e323c1a6d9d045955677cb75af8533318ec->enter($__internal_edd77805150ec51ef9e6738d780a0e323c1a6d9d045955677cb75af8533318ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_edd77805150ec51ef9e6738d780a0e323c1a6d9d045955677cb75af8533318ec->leave($__internal_edd77805150ec51ef9e6738d780a0e323c1a6d9d045955677cb75af8533318ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
