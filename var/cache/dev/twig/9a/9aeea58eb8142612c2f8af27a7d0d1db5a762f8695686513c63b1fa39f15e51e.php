<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e7743ecda4339fe361b2736ffe463926a8be928740fcf929236d48ec24b63953 extends Twig_Template
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
        $__internal_825268bd26a6141e589437ffcf836a84d2620b5351479f42ec8782a0cd61db60 = $this->env->getExtension("native_profiler");
        $__internal_825268bd26a6141e589437ffcf836a84d2620b5351479f42ec8782a0cd61db60->enter($__internal_825268bd26a6141e589437ffcf836a84d2620b5351479f42ec8782a0cd61db60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_825268bd26a6141e589437ffcf836a84d2620b5351479f42ec8782a0cd61db60->leave($__internal_825268bd26a6141e589437ffcf836a84d2620b5351479f42ec8782a0cd61db60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
