<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_473ccae13598bfffa76e183af097960633af32dd5159ef47143e559aa97c0ec8 extends Twig_Template
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
        $__internal_584b8da1bd6c94bd09bc2ea1e0c8a14907e2f1c7eeb7c76b48280e55749a5fa7 = $this->env->getExtension("native_profiler");
        $__internal_584b8da1bd6c94bd09bc2ea1e0c8a14907e2f1c7eeb7c76b48280e55749a5fa7->enter($__internal_584b8da1bd6c94bd09bc2ea1e0c8a14907e2f1c7eeb7c76b48280e55749a5fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_584b8da1bd6c94bd09bc2ea1e0c8a14907e2f1c7eeb7c76b48280e55749a5fa7->leave($__internal_584b8da1bd6c94bd09bc2ea1e0c8a14907e2f1c7eeb7c76b48280e55749a5fa7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
