<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_efff11fea6595c92ee6f131d3f073651715f3196586cd01dfde69fe25db5ee40 extends Twig_Template
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
        $__internal_b560e34830decbbb0b8696960a8128bdabb4ec360d1efacb3bb94c9a599fb895 = $this->env->getExtension("native_profiler");
        $__internal_b560e34830decbbb0b8696960a8128bdabb4ec360d1efacb3bb94c9a599fb895->enter($__internal_b560e34830decbbb0b8696960a8128bdabb4ec360d1efacb3bb94c9a599fb895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b560e34830decbbb0b8696960a8128bdabb4ec360d1efacb3bb94c9a599fb895->leave($__internal_b560e34830decbbb0b8696960a8128bdabb4ec360d1efacb3bb94c9a599fb895_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
