<?php

/* UserBundle:User:listUsers.html.twig */
class __TwigTemplate_6527bee0be3b45bf750b3c739f039640b726bd0dba79990f7a781d85041f33af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:listUsers.html.twig", 1);
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
        $__internal_2189c0b8a7b922f6beb77181ba1b490bec1de8a2e06369fb2bbcaa885f29ec39 = $this->env->getExtension("native_profiler");
        $__internal_2189c0b8a7b922f6beb77181ba1b490bec1de8a2e06369fb2bbcaa885f29ec39->enter($__internal_2189c0b8a7b922f6beb77181ba1b490bec1de8a2e06369fb2bbcaa885f29ec39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:listUsers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2189c0b8a7b922f6beb77181ba1b490bec1de8a2e06369fb2bbcaa885f29ec39->leave($__internal_2189c0b8a7b922f6beb77181ba1b490bec1de8a2e06369fb2bbcaa885f29ec39_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ed60b9cd66a622c5fe8c43684ff45ed8b70479c197f868f0c5d392d96456975 = $this->env->getExtension("native_profiler");
        $__internal_4ed60b9cd66a622c5fe8c43684ff45ed8b70479c197f868f0c5d392d96456975->enter($__internal_4ed60b9cd66a622c5fe8c43684ff45ed8b70479c197f868f0c5d392d96456975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Users ";
        
        $__internal_4ed60b9cd66a622c5fe8c43684ff45ed8b70479c197f868f0c5d392d96456975->leave($__internal_4ed60b9cd66a622c5fe8c43684ff45ed8b70479c197f868f0c5d392d96456975_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_877dbc4ec8ee8b2a697ae7e030447d1965fa9b235301487404a02b2ffe8166a1 = $this->env->getExtension("native_profiler");
        $__internal_877dbc4ec8ee8b2a697ae7e030447d1965fa9b235301487404a02b2ffe8166a1->enter($__internal_877dbc4ec8ee8b2a697ae7e030447d1965fa9b235301487404a02b2ffe8166a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("adduser");
        echo "\">Add New User</a>
    ";
        // line 8
        if ((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))) {
            // line 9
            echo "        <ul>
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 11
                echo "                <li> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_user", array("userId" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">
                        <h2>";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
                echo "</h2>
                    </a></li>
                    ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </ul>
    ";
        }
        
        $__internal_877dbc4ec8ee8b2a697ae7e030447d1965fa9b235301487404a02b2ffe8166a1->leave($__internal_877dbc4ec8ee8b2a697ae7e030447d1965fa9b235301487404a02b2ffe8166a1_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:listUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  79 => 14,  74 => 12,  69 => 11,  65 => 10,  62 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}List of Users {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <a href="{{ path('adduser') }}">Add New User</a>*/
/*     {% if users %}*/
/*         <ul>*/
/*             {% for user in users %}*/
/*                 <li> <a href="{{ path('show_user', {'userId': user.id}) }}">*/
/*                         <h2>{{ user.name }}</h2>*/
/*                     </a></li>*/
/*                     {{ user.email }}*/
/*                 {% endfor %}*/
/*         </ul>*/
/*     {%endif%}*/
/* {% endblock %}*/
