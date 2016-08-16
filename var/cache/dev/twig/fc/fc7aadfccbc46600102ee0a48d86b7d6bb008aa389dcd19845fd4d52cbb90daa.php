<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_e3cebcf09e08089d55c0dc3a5b4994ccab60d522c6af69ab490be3cf627a2325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Default:index.html.twig", 1);
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
        $__internal_68624e94c1aed7895eac866e938045949e81d1bd46f386d2a4d1e843d6e32e70 = $this->env->getExtension("native_profiler");
        $__internal_68624e94c1aed7895eac866e938045949e81d1bd46f386d2a4d1e843d6e32e70->enter($__internal_68624e94c1aed7895eac866e938045949e81d1bd46f386d2a4d1e843d6e32e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68624e94c1aed7895eac866e938045949e81d1bd46f386d2a4d1e843d6e32e70->leave($__internal_68624e94c1aed7895eac866e938045949e81d1bd46f386d2a4d1e843d6e32e70_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1753b49e9b699a2bb2122dd2fa871d3e9c63501ea94a10afbfcacb75ad37571a = $this->env->getExtension("native_profiler");
        $__internal_1753b49e9b699a2bb2122dd2fa871d3e9c63501ea94a10afbfcacb75ad37571a->enter($__internal_1753b49e9b699a2bb2122dd2fa871d3e9c63501ea94a10afbfcacb75ad37571a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Users ";
        
        $__internal_1753b49e9b699a2bb2122dd2fa871d3e9c63501ea94a10afbfcacb75ad37571a->leave($__internal_1753b49e9b699a2bb2122dd2fa871d3e9c63501ea94a10afbfcacb75ad37571a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b7e0da6f8c2c110e0ebf31cca4a2447e89ccbd9d2832150059c8e659c88cf28 = $this->env->getExtension("native_profiler");
        $__internal_8b7e0da6f8c2c110e0ebf31cca4a2447e89ccbd9d2832150059c8e659c88cf28->enter($__internal_8b7e0da6f8c2c110e0ebf31cca4a2447e89ccbd9d2832150059c8e659c88cf28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("adduser");
        echo "\">Add New User</a>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 6
            echo "        <li> <a href=\"/users/show/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">
                <h2>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</h2>
            </a></li>
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8b7e0da6f8c2c110e0ebf31cca4a2447e89ccbd9d2832150059c8e659c88cf28->leave($__internal_8b7e0da6f8c2c110e0ebf31cca4a2447e89ccbd9d2832150059c8e659c88cf28_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 9,  67 => 7,  62 => 6,  58 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}List of Users {% endblock %}*/
/* {% block body %}*/
/*     <a href="{{ path('adduser') }}">Add New User</a>*/
/*     {% for user in users %}*/
/*         <li> <a href="/users/show/{{ user.id }}">*/
/*                 <h2>{{ user.name }}</h2>*/
/*             </a></li>*/
/*         {{ user.email }}*/
/*     {% endfor %}*/
/* {% endblock %}*/
