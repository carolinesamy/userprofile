<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4bc8a098f96419d64cd2ed45951ef2cbf1e0b5efe58b25a4f5b13cf854b27bb6 extends Twig_Template
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
        $__internal_c609708f748a5aaa81bf2b12a1e7164dd0aa6bdd00d04a8c4a1d50c7ae38f735 = $this->env->getExtension("native_profiler");
        $__internal_c609708f748a5aaa81bf2b12a1e7164dd0aa6bdd00d04a8c4a1d50c7ae38f735->enter($__internal_c609708f748a5aaa81bf2b12a1e7164dd0aa6bdd00d04a8c4a1d50c7ae38f735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c609708f748a5aaa81bf2b12a1e7164dd0aa6bdd00d04a8c4a1d50c7ae38f735->leave($__internal_c609708f748a5aaa81bf2b12a1e7164dd0aa6bdd00d04a8c4a1d50c7ae38f735_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
