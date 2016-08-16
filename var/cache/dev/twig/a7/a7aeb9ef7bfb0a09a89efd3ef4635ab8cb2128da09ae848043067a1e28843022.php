<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_89e300a580a096aacfa18c9310d87893295f5afadc99e57333584b9cdba1f91e extends Twig_Template
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
        $__internal_25fb82ad84fff0d00794ed74ff6e9123ee3c52defe9ee9da1b8de528bc3087fe = $this->env->getExtension("native_profiler");
        $__internal_25fb82ad84fff0d00794ed74ff6e9123ee3c52defe9ee9da1b8de528bc3087fe->enter($__internal_25fb82ad84fff0d00794ed74ff6e9123ee3c52defe9ee9da1b8de528bc3087fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25fb82ad84fff0d00794ed74ff6e9123ee3c52defe9ee9da1b8de528bc3087fe->leave($__internal_25fb82ad84fff0d00794ed74ff6e9123ee3c52defe9ee9da1b8de528bc3087fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_85fb5a1f641743dcf8cd912a680d6a28fee22c579d2c72ed7b9fb6974160a93a = $this->env->getExtension("native_profiler");
        $__internal_85fb5a1f641743dcf8cd912a680d6a28fee22c579d2c72ed7b9fb6974160a93a->enter($__internal_85fb5a1f641743dcf8cd912a680d6a28fee22c579d2c72ed7b9fb6974160a93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_85fb5a1f641743dcf8cd912a680d6a28fee22c579d2c72ed7b9fb6974160a93a->leave($__internal_85fb5a1f641743dcf8cd912a680d6a28fee22c579d2c72ed7b9fb6974160a93a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6c65ab4bf56c9be9ea5f54b7461bdea9d97abbc9dd357690546bc5805f5438c = $this->env->getExtension("native_profiler");
        $__internal_d6c65ab4bf56c9be9ea5f54b7461bdea9d97abbc9dd357690546bc5805f5438c->enter($__internal_d6c65ab4bf56c9be9ea5f54b7461bdea9d97abbc9dd357690546bc5805f5438c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d6c65ab4bf56c9be9ea5f54b7461bdea9d97abbc9dd357690546bc5805f5438c->leave($__internal_d6c65ab4bf56c9be9ea5f54b7461bdea9d97abbc9dd357690546bc5805f5438c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_94c1797391f98ed0c43cfe8f45435dc179fd20f28f255a014da784b182c1d490 = $this->env->getExtension("native_profiler");
        $__internal_94c1797391f98ed0c43cfe8f45435dc179fd20f28f255a014da784b182c1d490->enter($__internal_94c1797391f98ed0c43cfe8f45435dc179fd20f28f255a014da784b182c1d490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_94c1797391f98ed0c43cfe8f45435dc179fd20f28f255a014da784b182c1d490->leave($__internal_94c1797391f98ed0c43cfe8f45435dc179fd20f28f255a014da784b182c1d490_prof);

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
