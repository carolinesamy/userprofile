<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a865fd86982dd3960484657af11366d46438a0b8c7c44fcc9938a543800fa158 extends Twig_Template
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
        $__internal_ffdc142c28c2a5e2e1cc2f031195370b43b68e77e6408dee07a78e7f419f7d28 = $this->env->getExtension("native_profiler");
        $__internal_ffdc142c28c2a5e2e1cc2f031195370b43b68e77e6408dee07a78e7f419f7d28->enter($__internal_ffdc142c28c2a5e2e1cc2f031195370b43b68e77e6408dee07a78e7f419f7d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ffdc142c28c2a5e2e1cc2f031195370b43b68e77e6408dee07a78e7f419f7d28->leave($__internal_ffdc142c28c2a5e2e1cc2f031195370b43b68e77e6408dee07a78e7f419f7d28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
