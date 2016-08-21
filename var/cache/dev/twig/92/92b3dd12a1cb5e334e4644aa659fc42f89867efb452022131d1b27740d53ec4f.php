<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d35fb84f47d933767952d28e073d49c057e561ec31929e73b3968bfb26b970cf extends Twig_Template
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
        $__internal_bcc7134432b23c4c0ffb5c196f0ba94185b87d1bb3d8993e7c3c251b0eee246d = $this->env->getExtension("native_profiler");
        $__internal_bcc7134432b23c4c0ffb5c196f0ba94185b87d1bb3d8993e7c3c251b0eee246d->enter($__internal_bcc7134432b23c4c0ffb5c196f0ba94185b87d1bb3d8993e7c3c251b0eee246d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_bcc7134432b23c4c0ffb5c196f0ba94185b87d1bb3d8993e7c3c251b0eee246d->leave($__internal_bcc7134432b23c4c0ffb5c196f0ba94185b87d1bb3d8993e7c3c251b0eee246d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
