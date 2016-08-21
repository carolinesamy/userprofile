<?php

/* UserBundle:User:userDetails.html.twig */
class __TwigTemplate_f08cafcd80656562ee800fe5d1134cd1695c889d5171a275fd393244473dc084 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "User Details ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "

    <li>Name :";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
        echo "</li><br>
    <li> Email: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "</li><br>

    ";
        // line 11
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "birthdate", array())) {
            // line 12
            echo "        <li>BirthDate :";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "birthdate", array()), "m/d/Y"), "html", null, true);
            echo "</li><br>
            ";
            // line 14
            echo "        ";
        }
        // line 15
        echo "
    ";
        // line 16
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phones", array())) > 0)) {
            // line 17
            echo "
        <li> Phone Numbers :
            <ul>
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phones", array()));
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
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_phone", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">Add New Phone</a>
";
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
        return array (  90 => 27,  84 => 23,  75 => 21,  71 => 20,  66 => 17,  64 => 16,  61 => 15,  58 => 14,  53 => 12,  51 => 11,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}User Details {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*     <li>Name :{{ user.name }}</li><br>*/
/*     <li> Email: {{user.email}}</li><br>*/
/* */
/*     {% if user.birthdate %}*/
/*         <li>BirthDate :{{ user.birthdate|date("m/d/Y") }}</li><br>*/
/*             {#{{ user.phones|length }}#}*/
/*         {% endif %}*/
/* */
/*     {% if user.phones|length > 0 %}*/
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
/*     <a href="{{ path('add_phone', {'userId': user.id}) }}">Add New Phone</a>*/
/* {% endblock %}*/
