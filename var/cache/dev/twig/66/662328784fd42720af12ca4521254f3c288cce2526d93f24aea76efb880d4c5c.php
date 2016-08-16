<?php

/* base.html.twig */
class __TwigTemplate_f360901b54c6761bc8b128c24eb647000e92bedbbe707a862d64499183644bce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8319edd270e453f08bd13b1d27da464b4f7fab567cd8a12b3ec9ef83997ea66e = $this->env->getExtension("native_profiler");
        $__internal_8319edd270e453f08bd13b1d27da464b4f7fab567cd8a12b3ec9ef83997ea66e->enter($__internal_8319edd270e453f08bd13b1d27da464b4f7fab567cd8a12b3ec9ef83997ea66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8319edd270e453f08bd13b1d27da464b4f7fab567cd8a12b3ec9ef83997ea66e->leave($__internal_8319edd270e453f08bd13b1d27da464b4f7fab567cd8a12b3ec9ef83997ea66e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_289212f4331d0346d94e3a12b5ae3bcd3cabe1c4e1cbc3e702ff0a8873ea5d61 = $this->env->getExtension("native_profiler");
        $__internal_289212f4331d0346d94e3a12b5ae3bcd3cabe1c4e1cbc3e702ff0a8873ea5d61->enter($__internal_289212f4331d0346d94e3a12b5ae3bcd3cabe1c4e1cbc3e702ff0a8873ea5d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_289212f4331d0346d94e3a12b5ae3bcd3cabe1c4e1cbc3e702ff0a8873ea5d61->leave($__internal_289212f4331d0346d94e3a12b5ae3bcd3cabe1c4e1cbc3e702ff0a8873ea5d61_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b06865fcc64400aed8e9a7b324e4d3bdb707e6c4533e0875524476c496b0437a = $this->env->getExtension("native_profiler");
        $__internal_b06865fcc64400aed8e9a7b324e4d3bdb707e6c4533e0875524476c496b0437a->enter($__internal_b06865fcc64400aed8e9a7b324e4d3bdb707e6c4533e0875524476c496b0437a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b06865fcc64400aed8e9a7b324e4d3bdb707e6c4533e0875524476c496b0437a->leave($__internal_b06865fcc64400aed8e9a7b324e4d3bdb707e6c4533e0875524476c496b0437a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_274b1815e3267d3ebff9e02112e2d991357d16fa0d5ecfe7db8a9f447a150f72 = $this->env->getExtension("native_profiler");
        $__internal_274b1815e3267d3ebff9e02112e2d991357d16fa0d5ecfe7db8a9f447a150f72->enter($__internal_274b1815e3267d3ebff9e02112e2d991357d16fa0d5ecfe7db8a9f447a150f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_274b1815e3267d3ebff9e02112e2d991357d16fa0d5ecfe7db8a9f447a150f72->leave($__internal_274b1815e3267d3ebff9e02112e2d991357d16fa0d5ecfe7db8a9f447a150f72_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_43f811fee89e63129ec7dc33be88b820cc9647108d733461dbd8f088ccf6cfda = $this->env->getExtension("native_profiler");
        $__internal_43f811fee89e63129ec7dc33be88b820cc9647108d733461dbd8f088ccf6cfda->enter($__internal_43f811fee89e63129ec7dc33be88b820cc9647108d733461dbd8f088ccf6cfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_43f811fee89e63129ec7dc33be88b820cc9647108d733461dbd8f088ccf6cfda->leave($__internal_43f811fee89e63129ec7dc33be88b820cc9647108d733461dbd8f088ccf6cfda_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
