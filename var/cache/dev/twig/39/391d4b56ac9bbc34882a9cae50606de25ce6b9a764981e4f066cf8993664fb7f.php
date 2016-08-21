<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_180d228fb523e524562c7a4c0cac7f709acc0e07817548fdcdc5043008c329d2 extends Twig_Template
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
        $__internal_946f1c4a394cb395549076dacda29a3a398b4bcbfb043edab7fbc215fd82def3 = $this->env->getExtension("native_profiler");
        $__internal_946f1c4a394cb395549076dacda29a3a398b4bcbfb043edab7fbc215fd82def3->enter($__internal_946f1c4a394cb395549076dacda29a3a398b4bcbfb043edab7fbc215fd82def3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_946f1c4a394cb395549076dacda29a3a398b4bcbfb043edab7fbc215fd82def3->leave($__internal_946f1c4a394cb395549076dacda29a3a398b4bcbfb043edab7fbc215fd82def3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
