<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7025de3be10c0430bcba80ddf8e2c74aef43842c5adac84a78b53997678e21e8 extends Twig_Template
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
        $__internal_c20a370be902440db2cdfea47e9c8e46c67b40580715f1963049288a468b3cca = $this->env->getExtension("native_profiler");
        $__internal_c20a370be902440db2cdfea47e9c8e46c67b40580715f1963049288a468b3cca->enter($__internal_c20a370be902440db2cdfea47e9c8e46c67b40580715f1963049288a468b3cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c20a370be902440db2cdfea47e9c8e46c67b40580715f1963049288a468b3cca->leave($__internal_c20a370be902440db2cdfea47e9c8e46c67b40580715f1963049288a468b3cca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
