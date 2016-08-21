<?php

/* UserBundle:User:listUsers.html.twig */
class __TwigTemplate_1f67eac573cd899680bf5bc1830c6dbf058a0211eabb93d29ea22dce2fa67ec5 extends Twig_Template
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
        $__internal_df837ae7d17c05b82a7f579fa56b309c231c3e9f8706d236132dd196a79b305e = $this->env->getExtension("native_profiler");
        $__internal_df837ae7d17c05b82a7f579fa56b309c231c3e9f8706d236132dd196a79b305e->enter($__internal_df837ae7d17c05b82a7f579fa56b309c231c3e9f8706d236132dd196a79b305e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:listUsers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df837ae7d17c05b82a7f579fa56b309c231c3e9f8706d236132dd196a79b305e->leave($__internal_df837ae7d17c05b82a7f579fa56b309c231c3e9f8706d236132dd196a79b305e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a883b01b202339172a604a0aaa4ed97d945d3c5033da98f2eb37da060ae65a5e = $this->env->getExtension("native_profiler");
        $__internal_a883b01b202339172a604a0aaa4ed97d945d3c5033da98f2eb37da060ae65a5e->enter($__internal_a883b01b202339172a604a0aaa4ed97d945d3c5033da98f2eb37da060ae65a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Users ";
        
        $__internal_a883b01b202339172a604a0aaa4ed97d945d3c5033da98f2eb37da060ae65a5e->leave($__internal_a883b01b202339172a604a0aaa4ed97d945d3c5033da98f2eb37da060ae65a5e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_494c166893585e64300e8c0e19b3e15d8c3ca3e3e044c7158d96a180cca17b0c = $this->env->getExtension("native_profiler");
        $__internal_494c166893585e64300e8c0e19b3e15d8c3ca3e3e044c7158d96a180cca17b0c->enter($__internal_494c166893585e64300e8c0e19b3e15d8c3ca3e3e044c7158d96a180cca17b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 18
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "id"), "method")) {
            echo " ";
            // line 19
            echo "
        ";
            // line 20
            if ((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) {
                // line 21
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 22
                    echo "
                <li><a href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_user", array("userId" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\">
                        <h2>";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
                    echo "</h2>
                    </a>
                </li>
                <li>";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                    echo "</li>

            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "
            ";
                // line 32
                echo "            <div class=\"navigation\">

                ";
                // line 34
                echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
                echo "
            </div>
        ";
            }
            // line 37
            echo "    ";
        } else {
            // line 38
            echo "        <h2>please login :)</h2>
    ";
        }
        // line 39
        echo " ";
        
        $__internal_494c166893585e64300e8c0e19b3e15d8c3ca3e3e044c7158d96a180cca17b0c->leave($__internal_494c166893585e64300e8c0e19b3e15d8c3ca3e3e044c7158d96a180cca17b0c_prof);

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
        return array (  112 => 39,  108 => 38,  105 => 37,  99 => 34,  95 => 32,  92 => 30,  83 => 27,  77 => 24,  73 => 23,  70 => 22,  65 => 21,  63 => 20,  60 => 19,  56 => 18,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}List of Users {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {#{% if users %}*/
/*         <ul>*/
/*             {% for user in users %}*/
/*                 <li> <a href="{{ path('show_user', {'userId': user.id}) }}">*/
/*                         <h2>{{ user.name }}</h2>*/
/*                     </a></li>*/
/*                     {{ user.email }}*/
/*                 {% endfor %}*/
/*         </ul>*/
/*     {%endif%}*/
/* #}*/
/*     {%if  app.session.get('id')%} {#if session  #}*/
/* */
/*         {% if pagination %}{#if users exist  #}*/
/*             {% for user in pagination %}*/
/* */
/*                 <li><a href="{{ path('show_user', {'userId': user.id}) }}">*/
/*                         <h2>{{ user.name }}</h2>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>{{ user.email }}</li>*/
/* */
/*             {% endfor %}*/
/* */
/*             {# display navigation #}*/
/*             <div class="navigation">*/
/* */
/*                 {{ knp_pagination_render(pagination) }}*/
/*             </div>*/
/*         {%endif%}{#end if users exist  #}*/
/*     {%else%}*/
/*         <h2>please login :)</h2>*/
/*     {%endif%} {#end if session  #}*/
/* {% endblock %}*/
