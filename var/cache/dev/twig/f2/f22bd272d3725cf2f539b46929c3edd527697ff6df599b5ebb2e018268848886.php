<?php

/* base.html.twig */
class __TwigTemplate_f4eb2d2025f838431b26fa7796db24342dd7c6b4f4b7b029a879d2ac62f92538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae64eb9ef02729ba4885692d1aab72903e796c8eb39077e89d143b656595861a = $this->env->getExtension("native_profiler");
        $__internal_ae64eb9ef02729ba4885692d1aab72903e796c8eb39077e89d143b656595861a->enter($__internal_ae64eb9ef02729ba4885692d1aab72903e796c8eb39077e89d143b656595861a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

</head>
<body>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("list_users");
        echo "\">Home</a>
    ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "id"), "method")) {
            echo " ";
            // line 16
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">logout</a>
    ";
        } else {
            // line 18
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">login</a>
    ";
        }
        // line 20
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "    
 
</body>
</html>
";
        
        $__internal_ae64eb9ef02729ba4885692d1aab72903e796c8eb39077e89d143b656595861a->leave($__internal_ae64eb9ef02729ba4885692d1aab72903e796c8eb39077e89d143b656595861a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab485e27dc8cc96107c00ac4a6a8f5297396fc1c0916c8d3530f6a5e6ca9d22e = $this->env->getExtension("native_profiler");
        $__internal_ab485e27dc8cc96107c00ac4a6a8f5297396fc1c0916c8d3530f6a5e6ca9d22e->enter($__internal_ab485e27dc8cc96107c00ac4a6a8f5297396fc1c0916c8d3530f6a5e6ca9d22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ab485e27dc8cc96107c00ac4a6a8f5297396fc1c0916c8d3530f6a5e6ca9d22e->leave($__internal_ab485e27dc8cc96107c00ac4a6a8f5297396fc1c0916c8d3530f6a5e6ca9d22e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7fe8823e2191fe08cb0b2de539a4afaf42caa1a89346af6d284d1872cda132f9 = $this->env->getExtension("native_profiler");
        $__internal_7fe8823e2191fe08cb0b2de539a4afaf42caa1a89346af6d284d1872cda132f9->enter($__internal_7fe8823e2191fe08cb0b2de539a4afaf42caa1a89346af6d284d1872cda132f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7fe8823e2191fe08cb0b2de539a4afaf42caa1a89346af6d284d1872cda132f9->leave($__internal_7fe8823e2191fe08cb0b2de539a4afaf42caa1a89346af6d284d1872cda132f9_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_500a49d2f77476d23f20fcab9b1eceb6e3586d74ab6949ffefb07b992dc476e5 = $this->env->getExtension("native_profiler");
        $__internal_500a49d2f77476d23f20fcab9b1eceb6e3586d74ab6949ffefb07b992dc476e5->enter($__internal_500a49d2f77476d23f20fcab9b1eceb6e3586d74ab6949ffefb07b992dc476e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "
    ";
        
        $__internal_500a49d2f77476d23f20fcab9b1eceb6e3586d74ab6949ffefb07b992dc476e5->leave($__internal_500a49d2f77476d23f20fcab9b1eceb6e3586d74ab6949ffefb07b992dc476e5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 21,  104 => 20,  93 => 6,  81 => 5,  70 => 23,  67 => 20,  61 => 18,  55 => 16,  52 => 15,  48 => 14,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>*/
/*     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>*/
/* */
/* </head>*/
/* <body>*/
/*     <a href="{{ path('list_users') }}">Home</a>*/
/*     {%if  app.session.get('id')%} {#if session  #}*/
/*         <a href="{{ path('logout') }}">logout</a>*/
/*     {%else%}*/
/*         <a href="{{ path('login') }}">login</a>*/
/*     {%endif%}*/
/*     {% block body %}*/
/* */
/*     {% endblock %}*/
/*     */
/*  */
/* </body>*/
/* </html>*/
/* */
