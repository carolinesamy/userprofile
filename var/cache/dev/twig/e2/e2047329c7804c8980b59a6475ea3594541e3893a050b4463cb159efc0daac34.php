<?php

/* UserBundle:User:userForm.html.twig */
class __TwigTemplate_11cd3f9b894f6e11388187c43f573009c77c4be04dd4a852e0ce67335a33cd8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:userForm.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73e7936ab994f18201c2bae821db9f3644c18ed3cf936f88af2e66ecf67506dd = $this->env->getExtension("native_profiler");
        $__internal_73e7936ab994f18201c2bae821db9f3644c18ed3cf936f88af2e66ecf67506dd->enter($__internal_73e7936ab994f18201c2bae821db9f3644c18ed3cf936f88af2e66ecf67506dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73e7936ab994f18201c2bae821db9f3644c18ed3cf936f88af2e66ecf67506dd->leave($__internal_73e7936ab994f18201c2bae821db9f3644c18ed3cf936f88af2e66ecf67506dd_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6d6e469e7ee38041811662bb607a799e7d1b96de4d4a8546d9ebd91220c3197 = $this->env->getExtension("native_profiler");
        $__internal_b6d6e469e7ee38041811662bb607a799e7d1b96de4d4a8546d9ebd91220c3197->enter($__internal_b6d6e469e7ee38041811662bb607a799e7d1b96de4d4a8546d9ebd91220c3197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User Details ";
        
        $__internal_b6d6e469e7ee38041811662bb607a799e7d1b96de4d4a8546d9ebd91220c3197->leave($__internal_b6d6e469e7ee38041811662bb607a799e7d1b96de4d4a8546d9ebd91220c3197_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c9b0daa9001c4f0a85e39cb0e263c7eb87e69d4c25a69353e0d2cc4f477e358 = $this->env->getExtension("native_profiler");
        $__internal_1c9b0daa9001c4f0a85e39cb0e263c7eb87e69d4c25a69353e0d2cc4f477e358->enter($__internal_1c9b0daa9001c4f0a85e39cb0e263c7eb87e69d4c25a69353e0d2cc4f477e358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    ";
        // line 9
        echo "

    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["user_form"]) ? $context["user_form"] : $this->getContext($context, "user_form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["user_form"]) ? $context["user_form"] : $this->getContext($context, "user_form")), 'errors');
        echo "
    <div>
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["user_form"]) ? $context["user_form"] : $this->getContext($context, "user_form")), "name", array()), 'label', array("label" => "Enter Your Name"));
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["user_form"]) ? $context["user_form"] : $this->getContext($context, "user_form")), "name", array()), 'errors');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["user_form"]) ? $context["user_form"] : $this->getContext($context, "user_form")), "name", array()), 'widget');
        echo "
    </div>



    <div>
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["user_form"]) ? $context["user_form"] : $this->getContext($context, "user_form")), "email", array()), 'label', array("label" => "Enter Your Email"));
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["user_form"]) ? $context["user_form"] : $this->getContext($context, "user_form")), "email", array()), 'errors');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["user_form"]) ? $context["user_form"] : $this->getContext($context, "user_form")), "email", array()), 'widget');
        echo "
    </div>

    <div>
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["user_form"]) ? $context["user_form"] : $this->getContext($context, "user_form")), "birthdate", array()), 'label', array("label" => "Enter Your Birthday"));
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["user_form"]) ? $context["user_form"] : $this->getContext($context, "user_form")), "birthdate", array()), 'errors');
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["user_form"]) ? $context["user_form"] : $this->getContext($context, "user_form")), "birthdate", array()), 'widget');
        echo "
    </div>
    <div>
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["user_form"]) ? $context["user_form"] : $this->getContext($context, "user_form")), "phones", array()), 'label', array("label" => "Enter Your Phone"));
        echo "
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["user_form"]) ? $context["user_form"] : $this->getContext($context, "user_form")), "phones", array()), 'errors');
        echo "


        <ul class=\"phones\">
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user_form"]) ? $context["user_form"] : $this->getContext($context, "user_form")), "phones", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 39
            echo "                <li>
                    ";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["phone"], "number", array()), 'widget');
            echo "
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </ul>

    </div>

    <div>
        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["user_form"]) ? $context["user_form"] : $this->getContext($context, "user_form")), "save", array()), 'widget');
        echo "

    </div>


    ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["user_form"]) ? $context["user_form"] : $this->getContext($context, "user_form")), 'form_end');
        echo "


";
        
        $__internal_1c9b0daa9001c4f0a85e39cb0e263c7eb87e69d4c25a69353e0d2cc4f477e358->leave($__internal_1c9b0daa9001c4f0a85e39cb0e263c7eb87e69d4c25a69353e0d2cc4f477e358_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:userForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 53,  149 => 48,  142 => 43,  133 => 40,  130 => 39,  126 => 38,  119 => 34,  115 => 33,  109 => 30,  105 => 29,  101 => 28,  94 => 24,  90 => 23,  86 => 22,  77 => 16,  73 => 15,  69 => 14,  64 => 12,  60 => 11,  56 => 9,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}User Details {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {# to avoid html5 validation  put that in start form {'attr': {'novalidate': 'novalidate'} })#}*/
/* */
/* */
/*     {{ form_start(user_form, {'attr': {'novalidate': 'novalidate'} }) }}*/
/*     {{ form_errors(user_form) }}*/
/*     <div>*/
/*         {{ form_label(user_form.name, 'Enter Your Name') }}*/
/*         {{ form_errors(user_form.name) }}*/
/*         {{ form_widget(user_form.name) }}*/
/*     </div>*/
/* */
/* */
/* */
/*     <div>*/
/*         {{ form_label(user_form.email ,'Enter Your Email') }}*/
/*         {{ form_errors(user_form.email) }}*/
/*         {{ form_widget(user_form.email) }}*/
/*     </div>*/
/* */
/*     <div>*/
/*         {{ form_label(user_form.birthdate ,'Enter Your Birthday') }}*/
/*         {{ form_errors(user_form.birthdate) }}*/
/*         {{ form_widget(user_form.birthdate) }}*/
/*     </div>*/
/*     <div>*/
/*         {{ form_label(user_form.phones,'Enter Your Phone') }}*/
/*         {{ form_errors(user_form.phones) }}*/
/* */
/* */
/*         <ul class="phones">*/
/*             {% for phone in user_form.phones %}*/
/*                 <li>*/
/*                     {{ form_widget(phone.number) }}*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/* */
/*     </div>*/
/* */
/*     <div>*/
/*         {{ form_widget(user_form.save) }}*/
/* */
/*     </div>*/
/* */
/* */
/*     {{ form_end(user_form) }}*/
/* */
/* */
/* {%endblock%}*/
