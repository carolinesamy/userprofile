<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0ab30afb8a438febcd18a170c5677120d2d4b6414bb09f08b5ec503e4db29a68 extends Twig_Template
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
        $__internal_fa59b2417ee4601712ab5f120a2aec6c5479d2ab2a747140cd4e2de98c75fa64 = $this->env->getExtension("native_profiler");
        $__internal_fa59b2417ee4601712ab5f120a2aec6c5479d2ab2a747140cd4e2de98c75fa64->enter($__internal_fa59b2417ee4601712ab5f120a2aec6c5479d2ab2a747140cd4e2de98c75fa64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fa59b2417ee4601712ab5f120a2aec6c5479d2ab2a747140cd4e2de98c75fa64->leave($__internal_fa59b2417ee4601712ab5f120a2aec6c5479d2ab2a747140cd4e2de98c75fa64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
