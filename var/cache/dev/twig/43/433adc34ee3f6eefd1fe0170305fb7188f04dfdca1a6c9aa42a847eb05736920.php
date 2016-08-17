<?php

/* UserBundle:User:userDetails.html.twig */
class __TwigTemplate_120ee0f5b589ef4edc7c46cec953f9b65a4797ccc8717aeb20131deea1c2e1d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:userDetails.html.twig", 1);
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
        $__internal_ad296f798d1e3b5944b83a7ec4de1417e8506a249a01252dbb8e4cb5e239a7de = $this->env->getExtension("native_profiler");
        $__internal_ad296f798d1e3b5944b83a7ec4de1417e8506a249a01252dbb8e4cb5e239a7de->enter($__internal_ad296f798d1e3b5944b83a7ec4de1417e8506a249a01252dbb8e4cb5e239a7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userDetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad296f798d1e3b5944b83a7ec4de1417e8506a249a01252dbb8e4cb5e239a7de->leave($__internal_ad296f798d1e3b5944b83a7ec4de1417e8506a249a01252dbb8e4cb5e239a7de_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_85b4cc1c6bf8e775586f072996929d01c758793d553bc34aa2801faa2698c6f8 = $this->env->getExtension("native_profiler");
        $__internal_85b4cc1c6bf8e775586f072996929d01c758793d553bc34aa2801faa2698c6f8->enter($__internal_85b4cc1c6bf8e775586f072996929d01c758793d553bc34aa2801faa2698c6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User Details ";
        
        $__internal_85b4cc1c6bf8e775586f072996929d01c758793d553bc34aa2801faa2698c6f8->leave($__internal_85b4cc1c6bf8e775586f072996929d01c758793d553bc34aa2801faa2698c6f8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b931c751f3b9850c19ff0ab1fd2874dbe622ffe083166284bc5723f3462766d = $this->env->getExtension("native_profiler");
        $__internal_0b931c751f3b9850c19ff0ab1fd2874dbe622ffe083166284bc5723f3462766d->enter($__internal_0b931c751f3b9850c19ff0ab1fd2874dbe622ffe083166284bc5723f3462766d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
   
    <li>Name :";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</li><br>
    <li> Email: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</li><br>

    ";
        // line 11
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "birthdate", array())) {
            // line 12
            echo "        <li>BirthDate :";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "birthdate", array()), "m/d/Y"), "html", null, true);
            echo "</li><br>
            ";
            // line 14
            echo "        ";
        }
        // line 15
        echo "
    ";
        // line 16
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phones", array())) > 1)) {
            // line 17
            echo "
        <li> Phone Numbers :
            <ul>
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phones", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                // line 21
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
                echo "</li><br>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            </ul>
        </li> 

    ";
        }
        // line 27
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_phone", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Add New Phone</a>
";
        
        $__internal_0b931c751f3b9850c19ff0ab1fd2874dbe622ffe083166284bc5723f3462766d->leave($__internal_0b931c751f3b9850c19ff0ab1fd2874dbe622ffe083166284bc5723f3462766d_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:userDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 27,  99 => 23,  90 => 21,  86 => 20,  81 => 17,  79 => 16,  76 => 15,  73 => 14,  68 => 12,  66 => 11,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}User Details {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*    */
/*     <li>Name :{{ user.name }}</li><br>*/
/*     <li> Email: {{user.email}}</li><br>*/
/* */
/*     {% if user.birthdate %}*/
/*         <li>BirthDate :{{ user.birthdate|date("m/d/Y") }}</li><br>*/
/*             {#{{ user.phones|length }}#}*/
/*         {% endif %}*/
/* */
/*     {% if user.phones|length > 1 %}*/
/* */
/*         <li> Phone Numbers :*/
/*             <ul>*/
/*                 {% for phone in user.phones %}*/
/*                     <li>{{ phone.number }}</li><br>*/
/*                     {% endfor%}*/
/*             </ul>*/
/*         </li> */
/* */
/*     {% endif %}*/
/*  <a href="{{ path('add_phone', {'userId': user.id}) }}">Add New Phone</a>*/
/* {% endblock %}*/
