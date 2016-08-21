<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7ea808d8d32066fd2821a0c5b437ff76741570ff43e5141df409348add107e35 extends Twig_Template
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
        $__internal_eba1620b314bc250dc8e6d5aeefa2599a96d3cbb78a743cff3ab3163e5b8ca81 = $this->env->getExtension("native_profiler");
        $__internal_eba1620b314bc250dc8e6d5aeefa2599a96d3cbb78a743cff3ab3163e5b8ca81->enter($__internal_eba1620b314bc250dc8e6d5aeefa2599a96d3cbb78a743cff3ab3163e5b8ca81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_eba1620b314bc250dc8e6d5aeefa2599a96d3cbb78a743cff3ab3163e5b8ca81->leave($__internal_eba1620b314bc250dc8e6d5aeefa2599a96d3cbb78a743cff3ab3163e5b8ca81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
