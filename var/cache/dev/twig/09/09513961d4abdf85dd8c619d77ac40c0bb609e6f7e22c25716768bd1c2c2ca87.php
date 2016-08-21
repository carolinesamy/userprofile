<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_dfbf262c05d74d7e9014820946c0eda735d40956e4b464abcd48e056bd1d09b4 extends Twig_Template
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
        $__internal_e4422142896738c4a67374e60d7ab5ffe0608c2004018a596f9c0b44a7cd28d5 = $this->env->getExtension("native_profiler");
        $__internal_e4422142896738c4a67374e60d7ab5ffe0608c2004018a596f9c0b44a7cd28d5->enter($__internal_e4422142896738c4a67374e60d7ab5ffe0608c2004018a596f9c0b44a7cd28d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e4422142896738c4a67374e60d7ab5ffe0608c2004018a596f9c0b44a7cd28d5->leave($__internal_e4422142896738c4a67374e60d7ab5ffe0608c2004018a596f9c0b44a7cd28d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
