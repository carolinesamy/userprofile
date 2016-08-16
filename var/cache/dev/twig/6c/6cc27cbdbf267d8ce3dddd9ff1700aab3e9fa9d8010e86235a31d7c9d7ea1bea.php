<?php

/* UserBundle:User:index.html.twig */
class __TwigTemplate_ceae6cd68dbea0cd53f28b3b3880f3af38ae5610c2c85fe49934904f61496d6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:index.html.twig", 1);
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
        $__internal_26ca2d3de7df6f95cb5bb9b5e7d933b98e80e58e97b854fc196c4b0fac54cac3 = $this->env->getExtension("native_profiler");
        $__internal_26ca2d3de7df6f95cb5bb9b5e7d933b98e80e58e97b854fc196c4b0fac54cac3->enter($__internal_26ca2d3de7df6f95cb5bb9b5e7d933b98e80e58e97b854fc196c4b0fac54cac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26ca2d3de7df6f95cb5bb9b5e7d933b98e80e58e97b854fc196c4b0fac54cac3->leave($__internal_26ca2d3de7df6f95cb5bb9b5e7d933b98e80e58e97b854fc196c4b0fac54cac3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1865b4ef6113a3f6164a5335acb3597b522fa8441d75678a33b7fb4b8b4d6f2 = $this->env->getExtension("native_profiler");
        $__internal_d1865b4ef6113a3f6164a5335acb3597b522fa8441d75678a33b7fb4b8b4d6f2->enter($__internal_d1865b4ef6113a3f6164a5335acb3597b522fa8441d75678a33b7fb4b8b4d6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Users ";
        
        $__internal_d1865b4ef6113a3f6164a5335acb3597b522fa8441d75678a33b7fb4b8b4d6f2->leave($__internal_d1865b4ef6113a3f6164a5335acb3597b522fa8441d75678a33b7fb4b8b4d6f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3672a5688a22e2b8219b7555af9a349b2aed5a658ce341ccc332050713dc28b1 = $this->env->getExtension("native_profiler");
        $__internal_3672a5688a22e2b8219b7555af9a349b2aed5a658ce341ccc332050713dc28b1->enter($__internal_3672a5688a22e2b8219b7555af9a349b2aed5a658ce341ccc332050713dc28b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "        <li> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_user", array("userId" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
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
        
        $__internal_3672a5688a22e2b8219b7555af9a349b2aed5a658ce341ccc332050713dc28b1->leave($__internal_3672a5688a22e2b8219b7555af9a349b2aed5a658ce341ccc332050713dc28b1_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:index.html.twig";
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
/*         <li> <a href="{{ path('show_user', {'userId': user.id}) }}">*/
/*                 <h2>{{ user.name }}</h2>*/
/*             </a></li>*/
/*         {{ user.email }}*/
/*     {% endfor %}*/
/* {% endblock %}*/
