<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7db2fa50db277910e7ab515446c24feb1d7b0dcaedc88d3c58a7c155cd5d79c4 extends Twig_Template
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
        $__internal_4756147ae5ffa258075db9992a2b417265e030b771cedab018f5e456c9d856a9 = $this->env->getExtension("native_profiler");
        $__internal_4756147ae5ffa258075db9992a2b417265e030b771cedab018f5e456c9d856a9->enter($__internal_4756147ae5ffa258075db9992a2b417265e030b771cedab018f5e456c9d856a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4756147ae5ffa258075db9992a2b417265e030b771cedab018f5e456c9d856a9->leave($__internal_4756147ae5ffa258075db9992a2b417265e030b771cedab018f5e456c9d856a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
