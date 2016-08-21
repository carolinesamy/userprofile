<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9209969174f2bef8b2cc0fc89c671e6ac58ea9a1ec608f417d8ee1d00723100b extends Twig_Template
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
        $__internal_87626e33cdbe6ccd74175d1ea7970292f2f6ca776330381a1a81a38744fc509a = $this->env->getExtension("native_profiler");
        $__internal_87626e33cdbe6ccd74175d1ea7970292f2f6ca776330381a1a81a38744fc509a->enter($__internal_87626e33cdbe6ccd74175d1ea7970292f2f6ca776330381a1a81a38744fc509a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_87626e33cdbe6ccd74175d1ea7970292f2f6ca776330381a1a81a38744fc509a->leave($__internal_87626e33cdbe6ccd74175d1ea7970292f2f6ca776330381a1a81a38744fc509a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
