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
        $__internal_e8048edb254f9561dffcc900425b55de6427c0c91bd1c07e6a0e36d7feb88289 = $this->env->getExtension("native_profiler");
        $__internal_e8048edb254f9561dffcc900425b55de6427c0c91bd1c07e6a0e36d7feb88289->enter($__internal_e8048edb254f9561dffcc900425b55de6427c0c91bd1c07e6a0e36d7feb88289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:listUsers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8048edb254f9561dffcc900425b55de6427c0c91bd1c07e6a0e36d7feb88289->leave($__internal_e8048edb254f9561dffcc900425b55de6427c0c91bd1c07e6a0e36d7feb88289_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8174468d500b9d1577f5134068db747a66a76fb024de00e4ef9ba88132d9ffc = $this->env->getExtension("native_profiler");
        $__internal_a8174468d500b9d1577f5134068db747a66a76fb024de00e4ef9ba88132d9ffc->enter($__internal_a8174468d500b9d1577f5134068db747a66a76fb024de00e4ef9ba88132d9ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Users ";
        
        $__internal_a8174468d500b9d1577f5134068db747a66a76fb024de00e4ef9ba88132d9ffc->leave($__internal_a8174468d500b9d1577f5134068db747a66a76fb024de00e4ef9ba88132d9ffc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_831842aba2e05b57f864673ea103db6dc95085b8445dc2054df46faa77d4b1a3 = $this->env->getExtension("native_profiler");
        $__internal_831842aba2e05b57f864673ea103db6dc95085b8445dc2054df46faa77d4b1a3->enter($__internal_831842aba2e05b57f864673ea103db6dc95085b8445dc2054df46faa77d4b1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_831842aba2e05b57f864673ea103db6dc95085b8445dc2054df46faa77d4b1a3->leave($__internal_831842aba2e05b57f864673ea103db6dc95085b8445dc2054df46faa77d4b1a3_prof);

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
