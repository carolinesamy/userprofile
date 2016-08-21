<?php

/* UserBundle:User:userDetails.html.twig */
class __TwigTemplate_2d83ec08653a1e8edb04709c031dbc578fcc0c55105ca722e16c5709008875cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:userDetails.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01a9c07fe3e8416497195e3a7ce2213d98441bfdd9627c33097afb04636d8a9a = $this->env->getExtension("native_profiler");
        $__internal_01a9c07fe3e8416497195e3a7ce2213d98441bfdd9627c33097afb04636d8a9a->enter($__internal_01a9c07fe3e8416497195e3a7ce2213d98441bfdd9627c33097afb04636d8a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:userDetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01a9c07fe3e8416497195e3a7ce2213d98441bfdd9627c33097afb04636d8a9a->leave($__internal_01a9c07fe3e8416497195e3a7ce2213d98441bfdd9627c33097afb04636d8a9a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_002bff203665ba7efde16caf2311834f78f2af8d3ed78750429d7771047c746b = $this->env->getExtension("native_profiler");
        $__internal_002bff203665ba7efde16caf2311834f78f2af8d3ed78750429d7771047c746b->enter($__internal_002bff203665ba7efde16caf2311834f78f2af8d3ed78750429d7771047c746b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User Details ";
        
        $__internal_002bff203665ba7efde16caf2311834f78f2af8d3ed78750429d7771047c746b->leave($__internal_002bff203665ba7efde16caf2311834f78f2af8d3ed78750429d7771047c746b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_23c1fb3160ceb2d7c79d9e7504634edce98abb3cb1cf4e76eba23a267cdb715a = $this->env->getExtension("native_profiler");
        $__internal_23c1fb3160ceb2d7c79d9e7504634edce98abb3cb1cf4e76eba23a267cdb715a->enter($__internal_23c1fb3160ceb2d7c79d9e7504634edce98abb3cb1cf4e76eba23a267cdb715a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("list_users");
        echo "\">Back</a>

    <li>Name :";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</li><br>
    <li> Email: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</li><br>

    ";
        // line 13
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "birthdate", array())) {
            // line 14
            echo "        <li>BirthDate :";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "birthdate", array()), "m/d/Y"), "html", null, true);
            echo "</li><br>
            ";
            // line 16
            echo "        ";
        }
        // line 17
        echo "    <div id=\"p\"></div>
    ";
        // line 18
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phones", array())) > 0)) {
            // line 19
            echo "        <div id='phone_div' data-path='";
            echo $this->env->getExtension('routing')->getPath("show_user");
            echo "' >
            <li> Phone Numbers :
                <ul>
                    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phones", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                // line 23
                echo "                        <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
                echo "</li><br>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                </ul>
            </li> 
        </div>
    ";
        }
        // line 30
        echo "
    ";
        // line 31
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "name"), "method"))) {
            // line 32
            echo "
        <div class=\"container\">
            <!-- Trigger the modal with a button -->
            ";
            // line 36
            echo "
            <a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("add_phone");
            echo "\" id=\"action\" class=\"btn btn-info btn-lg \" data-toggle=\"modal\" data-target=\"#myModal\">Add New Phone</a>

            <!-- Modal -->
            <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
                <div class=\"modal-dialog\" id='ph_div' data-path='";
            // line 41
            echo $this->env->getExtension('routing')->getPath("add_phone");
            echo "'>
                </div>
            </div>

        </div>


    ";
        }
        // line 49
        echo "

    ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_23c1fb3160ceb2d7c79d9e7504634edce98abb3cb1cf4e76eba23a267cdb715a->leave($__internal_23c1fb3160ceb2d7c79d9e7504634edce98abb3cb1cf4e76eba23a267cdb715a_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a03dcf404d230b35a26c5286483f5796401c56502c57e6a272db08041690f265 = $this->env->getExtension("native_profiler");
        $__internal_a03dcf404d230b35a26c5286483f5796401c56502c57e6a272db08041690f265->enter($__internal_a03dcf404d230b35a26c5286483f5796401c56502c57e6a272db08041690f265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "57456fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57456fa_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/57456fa_part_1_addphoneAction_1.js");
            // line 53
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "57456fa_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57456fa_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/57456fa_part_1_dividecontrolr_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "57456fa_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57456fa_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/57456fa_part_1_embdedPhoneForm_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "57456fa_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57456fa_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/57456fa_part_1_selector_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "57456fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_57456fa") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/57456fa.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 55
        echo "    ";
        
        $__internal_a03dcf404d230b35a26c5286483f5796401c56502c57e6a272db08041690f265->leave($__internal_a03dcf404d230b35a26c5286483f5796401c56502c57e6a272db08041690f265_prof);

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
        return array (  197 => 55,  165 => 53,  160 => 52,  148 => 51,  144 => 49,  133 => 41,  126 => 37,  123 => 36,  118 => 32,  116 => 31,  113 => 30,  107 => 26,  97 => 23,  93 => 22,  86 => 19,  84 => 18,  81 => 17,  78 => 16,  73 => 14,  71 => 13,  66 => 11,  62 => 10,  57 => 8,  54 => 7,  48 => 6,  36 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}User Details {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <a href="{{ path('list_users') }}">Back</a>*/
/* */
/*     <li>Name :{{ user.name }}</li><br>*/
/*     <li> Email: {{user.email}}</li><br>*/
/* */
/*     {% if user.birthdate %}*/
/*         <li>BirthDate :{{ user.birthdate|date("m/d/Y") }}</li><br>*/
/*             {#{{ user.phones|length }}#}*/
/*         {% endif %}*/
/*     <div id="p"></div>*/
/*     {% if user.phones|length > 0 %}*/
/*         <div id='phone_div' data-path='{{ path('show_user')}}' >*/
/*             <li> Phone Numbers :*/
/*                 <ul>*/
/*                     {% for phone in user.phones %}*/
/*                         <li>{{ phone.number }}</li><br>*/
/* */
/*                     {% endfor%}*/
/*                 </ul>*/
/*             </li> */
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% if user.name == app.session.get('name') %}*/
/* */
/*         <div class="container">*/
/*             <!-- Trigger the modal with a button -->*/
/*             {#            <button id="action" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add New Phone</button>#}*/
/* */
/*             <a href="{{ path('add_phone') }}" id="action" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal">Add New Phone</a>*/
/* */
/*             <!-- Modal -->*/
/*             <div class="modal fade" id="myModal" role="dialog">*/
/*                 <div class="modal-dialog" id='ph_div' data-path='{{ path('add_phone')}}'>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/* */
/*     {% endif %}*/
/* */
/* */
/*     {% block javascripts %}*/
/*         {% javascripts '@UserBundle/Resources/public/js/*' %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
