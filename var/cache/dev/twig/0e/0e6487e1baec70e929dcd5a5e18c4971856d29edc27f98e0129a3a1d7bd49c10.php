<?php

/* :default:index.html.twig */
class __TwigTemplate_e443310ab359433b055eca41fad7a649aa55009b29070868854db827e2f0fba5 extends Twig_Template
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
        $__internal_503da04acd2215260f2ae412e2750fb16e1ba47a555f948e5708a8d6e8fe0ca2 = $this->env->getExtension("native_profiler");
        $__internal_503da04acd2215260f2ae412e2750fb16e1ba47a555f948e5708a8d6e8fe0ca2->enter($__internal_503da04acd2215260f2ae412e2750fb16e1ba47a555f948e5708a8d6e8fe0ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_503da04acd2215260f2ae412e2750fb16e1ba47a555f948e5708a8d6e8fe0ca2->leave($__internal_503da04acd2215260f2ae412e2750fb16e1ba47a555f948e5708a8d6e8fe0ca2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_de87093e9cab6fb4b8361a5d546494ee382b12d46e1f92bc9d2e49099a91a2b3 = $this->env->getExtension("native_profiler");
        $__internal_de87093e9cab6fb4b8361a5d546494ee382b12d46e1f92bc9d2e49099a91a2b3->enter($__internal_de87093e9cab6fb4b8361a5d546494ee382b12d46e1f92bc9d2e49099a91a2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_de87093e9cab6fb4b8361a5d546494ee382b12d46e1f92bc9d2e49099a91a2b3->leave($__internal_de87093e9cab6fb4b8361a5d546494ee382b12d46e1f92bc9d2e49099a91a2b3_prof);

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
