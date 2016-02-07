<?php

/* admin/resources.twig */
class __TwigTemplate_153bba790e9bfef0ff36543484bda84b46b99c922c502ec3dcb9c140e2bbe3da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/admin.twig", "admin/resources.twig", 1);
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
        echo twig_escape_filter($this->env, (isset($context["pageHeader"]) ? $context["pageHeader"] : null), "html", null, true);
        echo "
    </h1>

    <div class=\"col-sm-9 col-md-10 main\">
        <div class=\"col-md-6\">
            <h2>Resurser</h2>
            <ul class=\"list-group\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resources"]) ? $context["resources"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
            // line 13
            echo "                    <li class=\"list-group-item\">
                        <span class=\"badge\">Ta bort</span>
                        ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["resource"], "name", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["resource"], "description", array())), "html", null, true);
            echo "
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </ul>
        </div>
        <div class=\"col-md-6\">
            <h2>Skapa resurs</h2>
            <form action=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "superadmin/resources\" method=\"post\">
                ";
        // line 23
        echo (isset($context["validation_errors"]) ? $context["validation_errors"] : null);
        echo "
                <div class=\"form-group\">
                    <label for=\"pass\">Namn</label>
                    <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Namn, sammanhängande text ex. loge1lokal\">
                </div>
                <div class=\"form-group\">
                    <label for=\"pass\">Beskrivning</label>
                    <input type=\"text\" name=\"description\" class=\"form-control\" id=\"description\" placeholder=\"Beskrivning på resursen\">
                </div>
                <input type=\"submit\" class=\"btn btn-default\" value=\"Spara\" />
            </form>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "admin/resources.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  69 => 22,  63 => 18,  52 => 15,  48 => 13,  44 => 12,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "templates/admin.twig" %}*/
/* */
/* {% block mainContent %}*/
/*     <h1 class="page-header">*/
/*         {{ pageHeader }}*/
/*     </h1>*/
/* */
/*     <div class="col-sm-9 col-md-10 main">*/
/*         <div class="col-md-6">*/
/*             <h2>Resurser</h2>*/
/*             <ul class="list-group">*/
/*                 {% for resource in resources %}*/
/*                     <li class="list-group-item">*/
/*                         <span class="badge">Ta bort</span>*/
/*                         {{ resource.name }} - {{ resource.description|capitalize }}*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <h2>Skapa resurs</h2>*/
/*             <form action="{{ siteUrl }}superadmin/resources" method="post">*/
/*                 {{ validation_errors|raw }}*/
/*                 <div class="form-group">*/
/*                     <label for="pass">Namn</label>*/
/*                     <input type="text" name="name" class="form-control" id="name" placeholder="Namn, sammanhängande text ex. loge1lokal">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="pass">Beskrivning</label>*/
/*                     <input type="text" name="description" class="form-control" id="description" placeholder="Beskrivning på resursen">*/
/*                 </div>*/
/*                 <input type="submit" class="btn btn-default" value="Spara" />*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock mainContent %}*/
