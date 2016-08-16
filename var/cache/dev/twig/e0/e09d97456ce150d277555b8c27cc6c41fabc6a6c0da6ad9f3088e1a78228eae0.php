<?php

/* UserBundle:User:userDetails.html.twig */
class __TwigTemplate_d75e904e6294591f98572682d8dca8a66c6b9e1dec57e4d39eaf15667905006e extends Twig_Template
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
        $__internal_8650bfc6844b88c0b1a8bafd9f956f7f07b25efa71a76f0ba7b2b54a93bfee44 = $this->env->getExtension("native_profiler");
        $__internal_8650bfc6844b88c0b1a8bafd9f956f7f07b25efa71a76f0ba7b2b54a93bfee44->enter($__internal_8650bfc6844b88c0b1a8bafd9f956f7f07b25efa71a76f0ba7b2b54a93bfee44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userDetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8650bfc6844b88c0b1a8bafd9f956f7f07b25efa71a76f0ba7b2b54a93bfee44->leave($__internal_8650bfc6844b88c0b1a8bafd9f956f7f07b25efa71a76f0ba7b2b54a93bfee44_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2a46ec9a47ad974d0ee0116d9e0305e8efcf3b0c94b4eca05d432923977de55 = $this->env->getExtension("native_profiler");
        $__internal_c2a46ec9a47ad974d0ee0116d9e0305e8efcf3b0c94b4eca05d432923977de55->enter($__internal_c2a46ec9a47ad974d0ee0116d9e0305e8efcf3b0c94b4eca05d432923977de55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User Details ";
        
        $__internal_c2a46ec9a47ad974d0ee0116d9e0305e8efcf3b0c94b4eca05d432923977de55->leave($__internal_c2a46ec9a47ad974d0ee0116d9e0305e8efcf3b0c94b4eca05d432923977de55_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4fff0e0c9c0b626983c90afa6b15719b28d0f42b641acb00dd46620e347be9f = $this->env->getExtension("native_profiler");
        $__internal_e4fff0e0c9c0b626983c90afa6b15719b28d0f42b641acb00dd46620e347be9f->enter($__internal_e4fff0e0c9c0b626983c90afa6b15719b28d0f42b641acb00dd46620e347be9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_phone", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Add New Phone</a>
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
        echo "
";
        
        $__internal_e4fff0e0c9c0b626983c90afa6b15719b28d0f42b641acb00dd46620e347be9f->leave($__internal_e4fff0e0c9c0b626983c90afa6b15719b28d0f42b641acb00dd46620e347be9f_prof);

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
        return array (  108 => 27,  102 => 23,  93 => 21,  89 => 20,  84 => 17,  82 => 16,  79 => 15,  76 => 14,  71 => 12,  69 => 11,  64 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}User Details {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <a href="{{ path('add_phone', {'userId': user.id}) }}">Add New Phone</a>*/
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
/* */
/* {% endblock %}*/
