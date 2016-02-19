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
    ";
        // line 7
        if (($this->getAttribute($this->getAttribute((isset($context["ACL"]) ? $context["ACL"] : null), "groups", array()), "D", array()) == true)) {
            // line 8
            echo "    <p>
        <span class=\"glyphicon glyphicon-remove-circle\" id=\"removeGroup\" title=\"Ta bot grupp\"></span>
        <div class=\"alert alert-danger\" id=\"removeGroupConfirmation\" style=\"display: none\">
            <p>Vill du verkligen ta bort gruppen och alla användare? Detta kan inte ångras!</p>
            <form class=\"form-inline\" method=\"post\" action=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
            echo "admin/group/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"type\" value=\"removeGroup\">
                <button id=\"removeGroupConfirmationNo\" class=\"btn btn-success\">AVBRYT</button>
                <input type=\"submit\" value=\"Ta bort\" class=\"btn btn-danger\">
            </form>
        </div>
    </p>
    ";
        }
        // line 20
        echo "    <span style=\"display: none\" id=\"groupId\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()), "html", null, true);
        echo "</span>



    <div class=\"col-sm-9 col-md-10 main\">
        <div class=\"col-md-6\">
            <div class=\"row\">
                <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "admin/group/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()), "html", null, true);
        echo "\" method=\"post\" class=\"form-inline\">
                    ";
        // line 28
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
        // line 37
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "admin/group/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()), "html", null, true);
        echo "\" method=\"post\">
                    <ul class=\"list-group\">
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["search"]) ? $context["search"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 40
            echo "                            <li class=\"list-group-item\">
                                <input type=\"checkbox\" name=\"users[]\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">
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
        echo "                    </ul>
                    <input type=\"hidden\" name=\"type\" value=\"addUser\">
                    <input type=\"submit\" class=\"btn btn-default\" value=\"Lägg till\" ";
        // line 47
        if (($this->getAttribute($this->getAttribute((isset($context["ACL"]) ? $context["ACL"] : null), "groupuser", array()), "C", array()) != true)) {
            echo "disabled";
        }
        echo ">
                </form>
            </div>
            <div class=\"row\">
                <h2>Användare</h2>
                ";
        // line 52
        if (($this->getAttribute($this->getAttribute((isset($context["ACL"]) ? $context["ACL"] : null), "groupuser", array()), "R", array()) == true)) {
            // line 53
            echo "                    <ul class=\"list-group\">
                        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 55
                echo "                            <li class=\"list-group-item\">
                                <button type=\"button\" id=\"delete\" class=\"btn btn-default\" title=\"Ta bort användare från grupp\" ";
                // line 56
                if (($this->getAttribute($this->getAttribute((isset($context["ACL"]) ? $context["ACL"] : null), "groupuser", array()), "D", array()) != true)) {
                    echo "disabled";
                }
                echo "><span class=\"glyphicon glyphicon-remove-circle\"></span> Ta bort</button>
                                <span id=\"userId\" style=\"display: none\">";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "</span>
                                ";
                // line 58
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
            // line 61
            echo "                    </ul>
                ";
        } else {
            // line 63
            echo "                    <p class=\"alert alert-danger\">Du har inte behörighet att se gruppens användare</p>
                ";
        }
        // line 65
        echo "            </div>
        </div>
        <div class=\"col-md-6\">
            <h2>Resurser</h2>

            ";
        // line 70
        if (($this->getAttribute($this->getAttribute((isset($context["ACL"]) ? $context["ACL"] : null), "groupresources", array()), "R", array()) == true)) {
            // line 71
            echo "            <ul class=\"list-group\">
                ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resources"]) ? $context["resources"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
                // line 73
                echo "                    <li class=\"list-group-item\">
                        <form action=\"";
                // line 74
                echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
                echo "admin/group/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()), "html", null, true);
                echo "\" method=\"post\">
                            <input type=\"submit\" value=\"Spara\" class=\"btn btn-default\" ";
                // line 75
                if (($this->getAttribute($this->getAttribute((isset($context["ACL"]) ? $context["ACL"] : null), "groupresources", array()), "U", array()) != true)) {
                    echo "disabled";
                }
                echo ">
                            <a class=\"label ";
                // line 76
                if (($this->getAttribute($context["resource"], "crudc", array()) == 1)) {
                    echo "label-success ";
                } elseif (($this->getAttribute($context["resource"], "crudc", array()) == "N")) {
                    echo "label-warning";
                } else {
                    echo " label-danger";
                }
                echo "\">C</a>
                            <input type=\"checkbox\" name=\"crudc\" ";
                // line 77
                if (($this->getAttribute($context["resource"], "crudc", array()) == 1)) {
                    echo " checked ";
                } elseif (($this->getAttribute($context["resource"], "crudc", array()) == "N")) {
                    echo "disabled";
                }
                echo " />

                            <a class=\"label ";
                // line 79
                if (($this->getAttribute($context["resource"], "crudr", array()) == 1)) {
                    echo "label-success ";
                } elseif (($this->getAttribute($context["resource"], "crudr", array()) == "N")) {
                    echo "label-warning";
                } else {
                    echo " label-danger";
                }
                echo "\">R</a>
                            <input type=\"checkbox\" name=\"crudr\" ";
                // line 80
                if (($this->getAttribute($context["resource"], "crudr", array()) == 1)) {
                    echo " checked ";
                } elseif (($this->getAttribute($context["resource"], "crudr", array()) == "N")) {
                    echo "disabled";
                }
                echo " />

                            <a class=\"label ";
                // line 82
                if (($this->getAttribute($context["resource"], "crudu", array()) == 1)) {
                    echo "label-success ";
                } elseif (($this->getAttribute($context["resource"], "crudu", array()) == "N")) {
                    echo "label-warning";
                } else {
                    echo " label-danger";
                }
                echo "\">U</a>
                            <input type=\"checkbox\" name=\"crudu\" ";
                // line 83
                if (($this->getAttribute($context["resource"], "crudu", array()) == 1)) {
                    echo " checked ";
                } elseif (($this->getAttribute($context["resource"], "crudu", array()) == "N")) {
                    echo "disabled";
                }
                echo " />

                            <a class=\"label ";
                // line 85
                if (($this->getAttribute($context["resource"], "crudd", array()) == 1)) {
                    echo "label-success ";
                } elseif (($this->getAttribute($context["resource"], "crudd", array()) == "N")) {
                    echo "label-warning";
                } else {
                    echo " label-danger";
                }
                echo "\">D</a>
                            <input type=\"checkbox\" name=\"crudd\" ";
                // line 86
                if (($this->getAttribute($context["resource"], "crudd", array()) == 1)) {
                    echo " checked ";
                } elseif (($this->getAttribute($context["resource"], "crudd", array()) == "N")) {
                    echo "disabled";
                }
                echo " />

                            <input type=\"hidden\" name=\"resourceid\" value=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["resource"], "id", array()), "html", null, true);
                echo "\">
                            <input type=\"hidden\" name=\"type\" value=\"resources\">

                            <strong>";
                // line 91
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
            // line 95
            echo "            </ul>
            ";
        } else {
            // line 97
            echo "                <p class=\"alert alert-danger\">Du har inte behörighet att se gruppens resurser</p>
            ";
        }
        // line 99
        echo "        </div>
    </div>
";
    }

    // line 103
    public function block_javaScript($context, array $blocks = array())
    {
        // line 104
        echo "    <script>
        ";
        // line 105
        $this->loadTemplate("admin/assets/js/group.js", "admin/group.twig", 105)->display($context);
        // line 106
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
        return array (  321 => 106,  319 => 105,  316 => 104,  313 => 103,  307 => 99,  303 => 97,  299 => 95,  287 => 91,  281 => 88,  272 => 86,  262 => 85,  253 => 83,  243 => 82,  234 => 80,  224 => 79,  215 => 77,  205 => 76,  199 => 75,  193 => 74,  190 => 73,  186 => 72,  183 => 71,  181 => 70,  174 => 65,  170 => 63,  166 => 61,  155 => 58,  151 => 57,  145 => 56,  142 => 55,  138 => 54,  135 => 53,  133 => 52,  123 => 47,  119 => 45,  108 => 42,  104 => 41,  101 => 40,  97 => 39,  90 => 37,  78 => 28,  72 => 27,  61 => 20,  48 => 12,  42 => 8,  40 => 7,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "templates/admin.twig" %}*/
/* */
/* {% block mainContent %}*/
/*     <h1 class="page-header">*/
/*         {{ pageHeader|capitalize }}*/
/*     </h1>*/
/*     {% if ACL.groups.D == true %}*/
/*     <p>*/
/*         <span class="glyphicon glyphicon-remove-circle" id="removeGroup" title="Ta bot grupp"></span>*/
/*         <div class="alert alert-danger" id="removeGroupConfirmation" style="display: none">*/
/*             <p>Vill du verkligen ta bort gruppen och alla användare? Detta kan inte ångras!</p>*/
/*             <form class="form-inline" method="post" action="{{ siteUrl }}admin/group/{{ group.id }}">*/
/*                 <input type="hidden" name="type" value="removeGroup">*/
/*                 <button id="removeGroupConfirmationNo" class="btn btn-success">AVBRYT</button>*/
/*                 <input type="submit" value="Ta bort" class="btn btn-danger">*/
/*             </form>*/
/*         </div>*/
/*     </p>*/
/*     {% endif %}*/
/*     <span style="display: none" id="groupId">{{ group.id }}</span>*/
/* */
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
/*                                 <input type="checkbox" name="users[]" value="{{ user.id }}">*/
/*                                 {{ user.username|capitalize }} - {{ user.email }}*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                     <input type="hidden" name="type" value="addUser">*/
/*                     <input type="submit" class="btn btn-default" value="Lägg till" {% if ACL.groupuser.C != true %}disabled{% endif %}>*/
/*                 </form>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <h2>Användare</h2>*/
/*                 {% if ACL.groupuser.R == true %}*/
/*                     <ul class="list-group">*/
/*                         {% for user in users %}*/
/*                             <li class="list-group-item">*/
/*                                 <button type="button" id="delete" class="btn btn-default" title="Ta bort användare från grupp" {% if ACL.groupuser.D != true %}disabled{% endif %}><span class="glyphicon glyphicon-remove-circle"></span> Ta bort</button>*/
/*                                 <span id="userId" style="display: none">{{ user.id }}</span>*/
/*                                 {{ user.username|capitalize }} - {{ user.email }}*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 {% else %}*/
/*                     <p class="alert alert-danger">Du har inte behörighet att se gruppens användare</p>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <h2>Resurser</h2>*/
/* */
/*             {% if ACL.groupresources.R == true %}*/
/*             <ul class="list-group">*/
/*                 {% for resource in resources %}*/
/*                     <li class="list-group-item">*/
/*                         <form action="{{ siteUrl }}admin/group/{{ group.id }}" method="post">*/
/*                             <input type="submit" value="Spara" class="btn btn-default" {% if ACL.groupresources.U != true %}disabled{% endif %}>*/
/*                             <a class="label {% if resource.crudc == 1%}label-success {% elseif resource.crudc == 'N' %}label-warning{% else %} label-danger{% endif %}">C</a>*/
/*                             <input type="checkbox" name="crudc" {% if resource.crudc == 1 %} checked {% elseif  resource.crudc == 'N' %}disabled{% endif %} />*/
/* */
/*                             <a class="label {% if resource.crudr == 1%}label-success {% elseif resource.crudr == 'N' %}label-warning{% else %} label-danger{% endif %}">R</a>*/
/*                             <input type="checkbox" name="crudr" {% if resource.crudr == 1 %} checked {% elseif  resource.crudr == 'N' %}disabled{% endif %} />*/
/* */
/*                             <a class="label {% if resource.crudu == 1%}label-success {% elseif resource.crudu == 'N' %}label-warning{% else %} label-danger{% endif %}">U</a>*/
/*                             <input type="checkbox" name="crudu" {% if resource.crudu == 1 %} checked {% elseif  resource.crudu == 'N' %}disabled{% endif %} />*/
/* */
/*                             <a class="label {% if resource.crudd == 1%}label-success {% elseif resource.crudd == 'N' %}label-warning{% else %} label-danger{% endif %}">D</a>*/
/*                             <input type="checkbox" name="crudd" {% if resource.crudd == 1 %} checked {% elseif  resource.crudd == 'N' %}disabled{% endif %} />*/
/* */
/*                             <input type="hidden" name="resourceid" value="{{ resource.id }}">*/
/*                             <input type="hidden" name="type" value="resources">*/
/* */
/*                             <strong>{{ resource.name|capitalize }}</strong> - {{ resource.description|capitalize }}*/
/*                         </form>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*             {% else %}*/
/*                 <p class="alert alert-danger">Du har inte behörighet att se gruppens resurser</p>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock mainContent %}*/
/* */
/* {% block javaScript %}*/
/*     <script>*/
/*         {% include 'admin/assets/js/group.js' %}*/
/*     </script>*/
/* {% endblock %}*/
