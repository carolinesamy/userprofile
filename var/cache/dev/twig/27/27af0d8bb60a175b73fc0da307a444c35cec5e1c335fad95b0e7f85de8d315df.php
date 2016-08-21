<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_0a3a0d8a267f00fe5ca8f7e569e2f8638bd3329dc3d325cf0064fb1abe19a92e extends Twig_Template
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
        $__internal_bdde254e9b341da12bfa2a79ac19bc958f84e86ec6abc3f52752b61e687c38eb = $this->env->getExtension("native_profiler");
        $__internal_bdde254e9b341da12bfa2a79ac19bc958f84e86ec6abc3f52752b61e687c38eb->enter($__internal_bdde254e9b341da12bfa2a79ac19bc958f84e86ec6abc3f52752b61e687c38eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bdde254e9b341da12bfa2a79ac19bc958f84e86ec6abc3f52752b61e687c38eb->leave($__internal_bdde254e9b341da12bfa2a79ac19bc958f84e86ec6abc3f52752b61e687c38eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
