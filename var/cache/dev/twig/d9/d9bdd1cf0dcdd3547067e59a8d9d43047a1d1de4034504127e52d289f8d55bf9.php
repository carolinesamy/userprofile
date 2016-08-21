<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3c304d7002beffdd5aaf1aa9ae78ab6a0dc953b37afdee80b8a9d3ec53d7060d extends Twig_Template
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
        $__internal_9b818a77c4a7604c545269790a51e5b6262cc5d7f63b93945a12a252bb813b09 = $this->env->getExtension("native_profiler");
        $__internal_9b818a77c4a7604c545269790a51e5b6262cc5d7f63b93945a12a252bb813b09->enter($__internal_9b818a77c4a7604c545269790a51e5b6262cc5d7f63b93945a12a252bb813b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9b818a77c4a7604c545269790a51e5b6262cc5d7f63b93945a12a252bb813b09->leave($__internal_9b818a77c4a7604c545269790a51e5b6262cc5d7f63b93945a12a252bb813b09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
