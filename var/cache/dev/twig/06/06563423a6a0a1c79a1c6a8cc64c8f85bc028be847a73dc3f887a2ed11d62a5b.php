<?php

/* base.html.twig */
class __TwigTemplate_a3b448338e017e0cdd7b3a9dfd93ef5c79131b4d2f98cec0c01435b306130ad4 extends Twig_Template
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
        $__internal_8620ed8ddcd68993c73e8c60a1c86015a20d91f012790a21bc8e89500ebea7f3 = $this->env->getExtension("native_profiler");
        $__internal_8620ed8ddcd68993c73e8c60a1c86015a20d91f012790a21bc8e89500ebea7f3->enter($__internal_8620ed8ddcd68993c73e8c60a1c86015a20d91f012790a21bc8e89500ebea7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8620ed8ddcd68993c73e8c60a1c86015a20d91f012790a21bc8e89500ebea7f3->leave($__internal_8620ed8ddcd68993c73e8c60a1c86015a20d91f012790a21bc8e89500ebea7f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd714454820d19821908c936e2cd7ff6cb31a34c28a60275369fcc23bb5b6cfb = $this->env->getExtension("native_profiler");
        $__internal_fd714454820d19821908c936e2cd7ff6cb31a34c28a60275369fcc23bb5b6cfb->enter($__internal_fd714454820d19821908c936e2cd7ff6cb31a34c28a60275369fcc23bb5b6cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fd714454820d19821908c936e2cd7ff6cb31a34c28a60275369fcc23bb5b6cfb->leave($__internal_fd714454820d19821908c936e2cd7ff6cb31a34c28a60275369fcc23bb5b6cfb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_325b8cd5f27f980dfde2c8426114f7f22209cf817b8525a86cc99a10a7463456 = $this->env->getExtension("native_profiler");
        $__internal_325b8cd5f27f980dfde2c8426114f7f22209cf817b8525a86cc99a10a7463456->enter($__internal_325b8cd5f27f980dfde2c8426114f7f22209cf817b8525a86cc99a10a7463456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_325b8cd5f27f980dfde2c8426114f7f22209cf817b8525a86cc99a10a7463456->leave($__internal_325b8cd5f27f980dfde2c8426114f7f22209cf817b8525a86cc99a10a7463456_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8750a20e6842231a06225603ea37dbf0b1ad8d01cadf800bf20b6f72038a97d = $this->env->getExtension("native_profiler");
        $__internal_d8750a20e6842231a06225603ea37dbf0b1ad8d01cadf800bf20b6f72038a97d->enter($__internal_d8750a20e6842231a06225603ea37dbf0b1ad8d01cadf800bf20b6f72038a97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d8750a20e6842231a06225603ea37dbf0b1ad8d01cadf800bf20b6f72038a97d->leave($__internal_d8750a20e6842231a06225603ea37dbf0b1ad8d01cadf800bf20b6f72038a97d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5633686e01649c326fbb35add2c632856540785f4ad1127fcb26d2405acf0309 = $this->env->getExtension("native_profiler");
        $__internal_5633686e01649c326fbb35add2c632856540785f4ad1127fcb26d2405acf0309->enter($__internal_5633686e01649c326fbb35add2c632856540785f4ad1127fcb26d2405acf0309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5633686e01649c326fbb35add2c632856540785f4ad1127fcb26d2405acf0309->leave($__internal_5633686e01649c326fbb35add2c632856540785f4ad1127fcb26d2405acf0309_prof);

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
