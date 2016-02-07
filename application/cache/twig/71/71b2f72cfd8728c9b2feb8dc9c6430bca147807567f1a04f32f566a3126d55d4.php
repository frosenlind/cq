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
            'javaScript' => array($this, 'block_javaScript'),
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
    <p>";
        // line 7
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "description", array())), "html", null, true);
        echo "</p>


    <div class=\"col-sm-9 col-md-10 main\">
        <div class=\"col-md-6\">
            <div class=\"row\">
                <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "admin/group/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()), "html", null, true);
        echo "\" method=\"post\" class=\"form-inline\">
                    ";
        // line 14
        echo (isset($context["validation_errors"]) ? $context["validation_errors"] : null);
        echo "
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"input\" class=\"form-control\" id=\"name\" placeholder=\"Namn eller ONR\">
                    </div>
                    <input type=\"submit\" class=\"btn btn-default\" value=\"Sök\" />
                    <input type=\"hidden\" name=\"type\" value=\"search\">
                </form>
            </div>
            <div class=\"row\">
                <form action=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "admin/group/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()), "html", null, true);
        echo "\" method=\"post\">
                    <ul class=\"list-group\">
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["search"]) ? $context["search"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "                            <li class=\"list-group-item\">
                                <input type=\"checkbox\" name=\"users[]\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\"/>
                                ";
            // line 28
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["user"], "username", array())), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </ul>
                    <input type=\"hidden\" name=\"type\" value=\"addUser\">
                    <input type=\"submit\" class=\"btn btn-default\" value=\"Lägg till\" />
                </form>
            </div>
            <div class=\"row\">
                <h2>Användare</h2>
                <ul class=\"list-group\">
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 40
            echo "                        <li class=\"list-group-item\">
                            <button type=\"button\" id=\"delete\" class=\"btn btn-default\" title=\"Ta bort användare från grupp\"><span class=\"glyphicon glyphicon-remove-circle\"></span> Ta bort</button>
                            ";
            // line 42
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["user"], "username", array())), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </ul>

            </div>
        </div>
        <div class=\"col-md-6\">
            <h2>Resurser</h2>

            <ul class=\"list-group\">
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resources"]) ? $context["resources"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
            // line 54
            echo "                    <li class=\"list-group-item\">
                        <form action=\"";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
            echo "admin/group/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()), "html", null, true);
            echo "\" method=\"post\">
                            <input type=\"submit\" value=\"Spara\" class=\"btn btn-default\"/>
                            <a class=\"label ";
            // line 57
            if ($this->getAttribute($context["resource"], "crudc", array())) {
                echo "label-success ";
            } else {
                echo " label-danger";
            }
            echo "\">C</a>
                            <input type=\"checkbox\" name=\"crudc\" ";
            // line 58
            if ($this->getAttribute($context["resource"], "crudc", array())) {
                echo " checked ";
            }
            echo " />

                            <a class=\"label ";
            // line 60
            if ($this->getAttribute($context["resource"], "crudr", array())) {
                echo "label-success ";
            } else {
                echo " label-danger";
            }
            echo "\">R</a>
                            <input type=\"checkbox\" name=\"crudr\" ";
            // line 61
            if ($this->getAttribute($context["resource"], "crudr", array())) {
                echo " checked ";
            }
            echo " />

                            <a class=\"label ";
            // line 63
            if ($this->getAttribute($context["resource"], "crudu", array())) {
                echo "label-success ";
            } else {
                echo " label-danger";
            }
            echo "\">U</a>
                            <input type=\"checkbox\" name=\"crudu\" ";
            // line 64
            if ($this->getAttribute($context["resource"], "crudu", array())) {
                echo " checked ";
            }
            echo " />

                            <a class=\"label ";
            // line 66
            if ($this->getAttribute($context["resource"], "crudd", array())) {
                echo "label-success ";
            } else {
                echo " label-danger";
            }
            echo "\">D</a>
                            <input type=\"checkbox\" name=\"crudd\" ";
            // line 67
            if ($this->getAttribute($context["resource"], "crudd", array())) {
                echo " checked ";
            }
            echo " />

                            <input type=\"hidden\" name=\"resourceid\" value=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["resource"], "id", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" name=\"type\" value=\"resources\">

                            <strong>";
            // line 72
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["resource"], "name", array())), "html", null, true);
            echo "</strong> - ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["resource"], "description", array())), "html", null, true);
            echo "
                        </form>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "            </ul>
        </div>
    </div>
";
    }

    // line 81
    public function block_javaScript($context, array $blocks = array())
    {
        // line 82
        echo "    <script>
        ";
        // line 83
        $this->loadTemplate("admin/assets/js/group.js", "admin/group.twig", 83)->display($context);
        // line 84
        echo "    </script>
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
        return array (  242 => 84,  240 => 83,  237 => 82,  234 => 81,  227 => 76,  215 => 72,  209 => 69,  202 => 67,  194 => 66,  187 => 64,  179 => 63,  172 => 61,  164 => 60,  157 => 58,  149 => 57,  142 => 55,  139 => 54,  135 => 53,  125 => 45,  114 => 42,  110 => 40,  106 => 39,  96 => 31,  85 => 28,  81 => 27,  78 => 26,  74 => 25,  67 => 23,  55 => 14,  49 => 13,  40 => 7,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "templates/admin.twig" %}*/
/* */
/* {% block mainContent %}*/
/*     <h1 class="page-header">*/
/*         {{ pageHeader|capitalize }}*/
/*     </h1>*/
/*     <p>{{ group.description|capitalize }}</p>*/
/* */
/* */
/*     <div class="col-sm-9 col-md-10 main">*/
/*         <div class="col-md-6">*/
/*             <div class="row">*/
/*                 <form action="{{ siteUrl }}admin/group/{{ group.id }}" method="post" class="form-inline">*/
/*                     {{ validation_errors|raw }}*/
/*                     <div class="form-group">*/
/*                         <input type="text" name="input" class="form-control" id="name" placeholder="Namn eller ONR">*/
/*                     </div>*/
/*                     <input type="submit" class="btn btn-default" value="Sök" />*/
/*                     <input type="hidden" name="type" value="search">*/
/*                 </form>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <form action="{{ siteUrl }}admin/group/{{ group.id }}" method="post">*/
/*                     <ul class="list-group">*/
/*                         {% for user in search %}*/
/*                             <li class="list-group-item">*/
/*                                 <input type="checkbox" name="users[]" value="{{ user.id }}"/>*/
/*                                 {{ user.username|capitalize }} - {{ user.email }}*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                     <input type="hidden" name="type" value="addUser">*/
/*                     <input type="submit" class="btn btn-default" value="Lägg till" />*/
/*                 </form>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <h2>Användare</h2>*/
/*                 <ul class="list-group">*/
/*                     {% for user in users %}*/
/*                         <li class="list-group-item">*/
/*                             <button type="button" id="delete" class="btn btn-default" title="Ta bort användare från grupp"><span class="glyphicon glyphicon-remove-circle"></span> Ta bort</button>*/
/*                             {{ user.username|capitalize }} - {{ user.email }}*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/* */
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <h2>Resurser</h2>*/
/* */
/*             <ul class="list-group">*/
/*                 {% for resource in resources %}*/
/*                     <li class="list-group-item">*/
/*                         <form action="{{ siteUrl }}admin/group/{{ group.id }}" method="post">*/
/*                             <input type="submit" value="Spara" class="btn btn-default"/>*/
/*                             <a class="label {% if resource.crudc %}label-success {% else %} label-danger{% endif %}">C</a>*/
/*                             <input type="checkbox" name="crudc" {% if resource.crudc %} checked {% endif %} />*/
/* */
/*                             <a class="label {% if resource.crudr %}label-success {% else %} label-danger{% endif %}">R</a>*/
/*                             <input type="checkbox" name="crudr" {% if resource.crudr %} checked {% endif %} />*/
/* */
/*                             <a class="label {% if resource.crudu %}label-success {% else %} label-danger{% endif %}">U</a>*/
/*                             <input type="checkbox" name="crudu" {% if resource.crudu %} checked {% endif %} />*/
/* */
/*                             <a class="label {% if resource.crudd %}label-success {% else %} label-danger{% endif %}">D</a>*/
/*                             <input type="checkbox" name="crudd" {% if resource.crudd %} checked {% endif %} />*/
/* */
/*                             <input type="hidden" name="resourceid" value="{{ resource.id }}">*/
/*                             <input type="hidden" name="type" value="resources">*/
/* */
/*                             <strong>{{ resource.name|capitalize }}</strong> - {{ resource.description|capitalize }}*/
/*                         </form>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* {% endblock mainContent %}*/
/* */
/* {% block javaScript %}*/
/*     <script>*/
/*         {% include 'admin/assets/js/group.js' %}*/
/*     </script>*/
/* {% endblock %}*/
