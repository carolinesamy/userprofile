<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1f4d7194a12fdaf8fed9b20d153dfd988068755c47fb94bb0305382e95647e6f extends Twig_Template
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
        $__internal_90b9764487a64601648a9f1c96c14e8a94a427f240daeca070bf71be1006566c = $this->env->getExtension("native_profiler");
        $__internal_90b9764487a64601648a9f1c96c14e8a94a427f240daeca070bf71be1006566c->enter($__internal_90b9764487a64601648a9f1c96c14e8a94a427f240daeca070bf71be1006566c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_90b9764487a64601648a9f1c96c14e8a94a427f240daeca070bf71be1006566c->leave($__internal_90b9764487a64601648a9f1c96c14e8a94a427f240daeca070bf71be1006566c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
