<?php

/* UserBundle:User:listUsers.html.twig */
class __TwigTemplate_f25cc7f5d62aec9dcd23966024744615e0ea6d263036ebf9746ee39d9848429f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "List of Users ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("adduser");
        echo "\">Add New User</a>
    ";
        // line 8
        if ((isset($context["users"]) ? $context["users"] : null)) {
            // line 9
            echo "        <ul>
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
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
        return array (  72 => 16,  64 => 14,  59 => 12,  54 => 11,  50 => 10,  47 => 9,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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
