<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2d8b5b8b5d709f2c782b7ab84eaaf183360758a81040d990122f4fd53661e283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_768cd3a406dd5b6088a3cf0c7265507aab8ebc661d464731e4311e14847c98ca = $this->env->getExtension("native_profiler");
        $__internal_768cd3a406dd5b6088a3cf0c7265507aab8ebc661d464731e4311e14847c98ca->enter($__internal_768cd3a406dd5b6088a3cf0c7265507aab8ebc661d464731e4311e14847c98ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_768cd3a406dd5b6088a3cf0c7265507aab8ebc661d464731e4311e14847c98ca->leave($__internal_768cd3a406dd5b6088a3cf0c7265507aab8ebc661d464731e4311e14847c98ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e255e874a9aa3068120d788e16287dab9e1f9ce18e5d3db80c3e4f70912842c = $this->env->getExtension("native_profiler");
        $__internal_2e255e874a9aa3068120d788e16287dab9e1f9ce18e5d3db80c3e4f70912842c->enter($__internal_2e255e874a9aa3068120d788e16287dab9e1f9ce18e5d3db80c3e4f70912842c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2e255e874a9aa3068120d788e16287dab9e1f9ce18e5d3db80c3e4f70912842c->leave($__internal_2e255e874a9aa3068120d788e16287dab9e1f9ce18e5d3db80c3e4f70912842c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_903ec3a7b8dcd54a23e99bc1d84a5b5a47086ca78792c2f88831cc042e5c4f58 = $this->env->getExtension("native_profiler");
        $__internal_903ec3a7b8dcd54a23e99bc1d84a5b5a47086ca78792c2f88831cc042e5c4f58->enter($__internal_903ec3a7b8dcd54a23e99bc1d84a5b5a47086ca78792c2f88831cc042e5c4f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_903ec3a7b8dcd54a23e99bc1d84a5b5a47086ca78792c2f88831cc042e5c4f58->leave($__internal_903ec3a7b8dcd54a23e99bc1d84a5b5a47086ca78792c2f88831cc042e5c4f58_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dc7ce05e84a56be476503b3a10c05343cb9724044e20f2fb274bd0046b1eb67 = $this->env->getExtension("native_profiler");
        $__internal_2dc7ce05e84a56be476503b3a10c05343cb9724044e20f2fb274bd0046b1eb67->enter($__internal_2dc7ce05e84a56be476503b3a10c05343cb9724044e20f2fb274bd0046b1eb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2dc7ce05e84a56be476503b3a10c05343cb9724044e20f2fb274bd0046b1eb67->leave($__internal_2dc7ce05e84a56be476503b3a10c05343cb9724044e20f2fb274bd0046b1eb67_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
