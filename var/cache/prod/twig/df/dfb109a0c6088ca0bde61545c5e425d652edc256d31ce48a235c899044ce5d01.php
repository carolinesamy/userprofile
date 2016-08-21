<?php

/* :default:index.html.twig */
class __TwigTemplate_4f02fa69af76178ff8af48e4a0fa9642095de611fa6fe45d315d74a857a7c93a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>inside twig</h1>
    
    ";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("Symfony is great", array(), "messages");
        echo twig_escape_filter($this->env, (isset($context["s"]) ? $context["s"] : null), "html", null, true);
        echo $this->env->getExtension('translator')->getTranslator()->trans("Symfony is great", array(), "messages");
        echo "<br>
        ";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("%s%", array("%s%" => (isset($context["s"]) ? $context["s"] : null)), "messages");
        echo "<br>
";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h1>inside twig</h1>*/
/*     */
/*     {% trans %}Symfony is great{% endtrans %}{{s}}{% trans %}Symfony is great{% endtrans %}<br>*/
/*         {% trans %}%s%{% endtrans %}<br>*/
/* {% endblock %}*/
