<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_675fdae2ef48497be8c3aaf14b302d2326ac10daa65938603ce44f2986dc5cf5 extends Twig_Template
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
        $__internal_caed01dcc45aecb411dea12ce19fa3cb2b3174593aa1851a99bf759b114fdd8a = $this->env->getExtension("native_profiler");
        $__internal_caed01dcc45aecb411dea12ce19fa3cb2b3174593aa1851a99bf759b114fdd8a->enter($__internal_caed01dcc45aecb411dea12ce19fa3cb2b3174593aa1851a99bf759b114fdd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_caed01dcc45aecb411dea12ce19fa3cb2b3174593aa1851a99bf759b114fdd8a->leave($__internal_caed01dcc45aecb411dea12ce19fa3cb2b3174593aa1851a99bf759b114fdd8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
