<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0f4ca161900ece70b455c10628ffed5255bdfbe3544cdb7d4fa4f95cb37f13ac extends Twig_Template
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
        $__internal_03056300f671104eaf9f134094f39f7f32f6716f9fff53c4855d87ec1513c723 = $this->env->getExtension("native_profiler");
        $__internal_03056300f671104eaf9f134094f39f7f32f6716f9fff53c4855d87ec1513c723->enter($__internal_03056300f671104eaf9f134094f39f7f32f6716f9fff53c4855d87ec1513c723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_03056300f671104eaf9f134094f39f7f32f6716f9fff53c4855d87ec1513c723->leave($__internal_03056300f671104eaf9f134094f39f7f32f6716f9fff53c4855d87ec1513c723_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
