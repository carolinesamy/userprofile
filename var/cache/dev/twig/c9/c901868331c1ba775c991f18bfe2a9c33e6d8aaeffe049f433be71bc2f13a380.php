<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_720e9fdb255215993535b7bf0501b070c7b54180a0db4e71e77bbb6c08dd52f6 extends Twig_Template
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
        $__internal_d7c678b29dd1515a99acef71a8e7b5b1805f4cb3996c7c64efd1f6a64a99d47b = $this->env->getExtension("native_profiler");
        $__internal_d7c678b29dd1515a99acef71a8e7b5b1805f4cb3996c7c64efd1f6a64a99d47b->enter($__internal_d7c678b29dd1515a99acef71a8e7b5b1805f4cb3996c7c64efd1f6a64a99d47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d7c678b29dd1515a99acef71a8e7b5b1805f4cb3996c7c64efd1f6a64a99d47b->leave($__internal_d7c678b29dd1515a99acef71a8e7b5b1805f4cb3996c7c64efd1f6a64a99d47b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
