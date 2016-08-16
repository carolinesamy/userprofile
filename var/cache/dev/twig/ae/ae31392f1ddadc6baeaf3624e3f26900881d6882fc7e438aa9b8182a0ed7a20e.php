<?php

/* default/index.html.twig */
class __TwigTemplate_bb3ff0f46d52ef00c8f9caee95655d404f2522a87ac5a4b3b0e14528ab764f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 2);
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
        $__internal_11266a34b0f2076c7a326ea7b9864077a7f3880bbd5aa18612667f54ab1f1775 = $this->env->getExtension("native_profiler");
        $__internal_11266a34b0f2076c7a326ea7b9864077a7f3880bbd5aa18612667f54ab1f1775->enter($__internal_11266a34b0f2076c7a326ea7b9864077a7f3880bbd5aa18612667f54ab1f1775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11266a34b0f2076c7a326ea7b9864077a7f3880bbd5aa18612667f54ab1f1775->leave($__internal_11266a34b0f2076c7a326ea7b9864077a7f3880bbd5aa18612667f54ab1f1775_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e9c55df3ed3fd023d8ba3b45c4c5bc3e41312e815d3f7b1c8c748c0628b4365 = $this->env->getExtension("native_profiler");
        $__internal_0e9c55df3ed3fd023d8ba3b45c4c5bc3e41312e815d3f7b1c8c748c0628b4365->enter($__internal_0e9c55df3ed3fd023d8ba3b45c4c5bc3e41312e815d3f7b1c8c748c0628b4365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>inside twig</h1>
    
    ";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("Symfony is great", array(), "messages");
        echo twig_escape_filter($this->env, (isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "html", null, true);
        echo $this->env->getExtension('translator')->getTranslator()->trans("Symfony is great", array(), "messages");
        echo "<br>
        ";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("%s%", array("%s%" => (isset($context["s"]) ? $context["s"] : $this->getContext($context, "s"))), "messages");
        echo "<br>
";
        
        $__internal_0e9c55df3ed3fd023d8ba3b45c4c5bc3e41312e815d3f7b1c8c748c0628b4365->leave($__internal_0e9c55df3ed3fd023d8ba3b45c4c5bc3e41312e815d3f7b1c8c748c0628b4365_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 2,);
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
