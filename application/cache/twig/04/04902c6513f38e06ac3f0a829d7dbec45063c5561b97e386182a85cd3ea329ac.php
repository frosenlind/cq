<?php

/* admin/groups.twig */
class __TwigTemplate_58fa6be8473faa05f92194f9ddb3d3897e004e9d9e6c55c661fcdaaa32dfd7bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/admin.twig", "admin/groups.twig", 1);
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
            <h2>Grupper</h2>

            <div class=\"list-group\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 14
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
            echo "admin/group/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\" class=\"list-group-item\">
                        <strong>";
            // line 15
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["group"], "name", array())), "html", null, true);
            echo "</strong>
                        - ";
            // line 16
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["group"], "description", array())), "html", null, true);
            echo "
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
            </div>

        </div>
        <div class=\"col-md-6\">
            <h2>Skapa grupp</h2>
            <form action=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "admin/groups\" method=\"post\">
                ";
        // line 26
        echo (isset($context["validation_errors"]) ? $context["validation_errors"] : null);
        echo "
                <div class=\"form-group\">
                    <label for=\"pass\">Namn</label>
                    <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Namn på gruppen\">
                </div>
                <div class=\"form-group\">
                    <label for=\"pass\">Beskrivning</label>
                    <input type=\"text\" name=\"description\" class=\"form-control\" id=\"description\" placeholder=\"Beskrivning på gruppen\">
                </div>
                <input type=\"submit\" class=\"btn btn-default\" value=\"Spara\" ";
        // line 35
        if (($this->getAttribute($this->getAttribute((isset($context["ACL"]) ? $context["ACL"] : null), "groups", array()), "C", array()) != true)) {
            echo "disabled";
        }
        echo ">
            </form>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "admin/groups.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 35,  81 => 26,  77 => 25,  69 => 19,  60 => 16,  56 => 15,  49 => 14,  45 => 13,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
/*             <h2>Grupper</h2>*/
/* */
/*             <div class="list-group">*/
/*                 {% for group in groups %}*/
/*                     <a href="{{ siteUrl }}admin/group/{{ group.id }}" class="list-group-item">*/
/*                         <strong>{{ group.name|capitalize }}</strong>*/
/*                         - {{ group.description|capitalize }}*/
/*                     </a>*/
/*                 {% endfor %}*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <h2>Skapa grupp</h2>*/
/*             <form action="{{ siteUrl }}admin/groups" method="post">*/
/*                 {{ validation_errors|raw }}*/
/*                 <div class="form-group">*/
/*                     <label for="pass">Namn</label>*/
/*                     <input type="text" name="name" class="form-control" id="name" placeholder="Namn på gruppen">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="pass">Beskrivning</label>*/
/*                     <input type="text" name="description" class="form-control" id="description" placeholder="Beskrivning på gruppen">*/
/*                 </div>*/
/*                 <input type="submit" class="btn btn-default" value="Spara" {% if ACL.groups.C != true %}disabled{% endif %}>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock mainContent %}*/
