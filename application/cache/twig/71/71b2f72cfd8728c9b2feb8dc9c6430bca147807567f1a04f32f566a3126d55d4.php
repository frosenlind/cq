<?php

/* admin/group.twig */
class __TwigTemplate_a4522f7d6d33bd1cae21d42145f945c7d735e5affb9642434e8e6a991cacd3e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/admin.twig", "admin/group.twig", 1);
        $this->blocks = array(
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_mainContent($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"page-header\">
        ";
        // line 5
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["pageHeader"]) ? $context["pageHeader"] : null)), "html", null, true);
        echo "
    </h1>

    <div class=\"col-sm-9 col-md-10 main\">
        <div class=\"col-md-6\">

            <h3>Beskrivning:</h3>
            <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "description", array())), "html", null, true);
        echo "</p>


            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Användare i denna grupp</h3>
                </div>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "                    <div class=\"panel-body\">
                        ";
            // line 21
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["user"], "username", array())), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </div>

            <p>";
        // line 26
        echo twig_var_dump($this->env, $context, (isset($context["resources"]) ? $context["resources"] : null));
        echo "</p>

        </div>
        <div class=\"col-md-6\">
            <h2>Resurser</h2>

            <ul class=\"list-group\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resources"]) ? $context["resources"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
            // line 34
            echo "                    <li class=\"list-group-item\">
                        <span class=\"badge\">Ta bort</span>
                        ";
            // line 36
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["resource"], "name", array())), "html", null, true);
            echo "
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </ul>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "admin/group.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 39,  92 => 36,  88 => 34,  84 => 33,  74 => 26,  70 => 24,  61 => 21,  58 => 20,  54 => 19,  44 => 12,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "templates/admin.twig" %}*/
/* */
/* {% block mainContent %}*/
/*     <h1 class="page-header">*/
/*         {{ pageHeader|capitalize }}*/
/*     </h1>*/
/* */
/*     <div class="col-sm-9 col-md-10 main">*/
/*         <div class="col-md-6">*/
/* */
/*             <h3>Beskrivning:</h3>*/
/*             <p>{{ group.description|capitalize }}</p>*/
/* */
/* */
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h3 class="panel-title">Användare i denna grupp</h3>*/
/*                 </div>*/
/*                 {% for user in users %}*/
/*                     <div class="panel-body">*/
/*                         {{ user.username|capitalize }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/* */
/*             <p>{{ dump(resources) }}</p>*/
/* */
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <h2>Resurser</h2>*/
/* */
/*             <ul class="list-group">*/
/*                 {% for resource in resources %}*/
/*                     <li class="list-group-item">*/
/*                         <span class="badge">Ta bort</span>*/
/*                         {{ resource.name|capitalize }}*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock mainContent %}*/
