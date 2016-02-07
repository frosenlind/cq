<?php

/* templates/adminMenu.twig */
class __TwigTemplate_047e00979c4ef2f8cd8b85c819262f03cce8e64e2fbe33d777db5ee095fae6fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'adminMenu' => array($this, 'block_adminMenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('adminMenu', $context, $blocks);
    }

    public function block_adminMenu($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"col-sm-3 col-md-2 sidebar-offcanvas\" id=\"sidebar\" role=\"navigation\">

        <ul class=\"nav nav-sidebar\">
            <li class=\"disabled\"><a href=\"#\">Medlemmar</a></li>
            <li class=\"disabled\"><a href=\"#\">Nya medlemar</a></li>
            <li class=\"disabled\"><a href=\"#\">Skapa medlem</a></li>
            ";
        // line 8
        if (((isset($context["adminMenuGroups"]) ? $context["adminMenuGroups"] : null) == true)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
            echo "admin/groups\">Grupper</a></li>";
        }
        // line 9
        echo "        </ul>
        <ul class=\"nav nav-sidebar\">
            <li class=\"disabled\"><a href=\"\">Skapa nyhet</a></li>
            <li class=\"disabled\"><a href=\"\">Redigera nyhet</a></li>
            <li class=\"disabled\"><a href=\"\">Kalendarium</a></li>
            <li class=\"disabled\"><a href=\"\">Månadsbrev</a></li>
        </ul>
        <ul class=\"nav nav-sidebar\">
            <li class=\"disabled\"><a href=\"\">Lokalbokning Loge 1</a></li>
            <li class=\"disabled\"><a href=\"\">Lokalbokning Loge 2</a></li>
        </ul>
        <ul class=\"nav nav-sidebar\">
            <li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "superadmin/resources\">Resources</a></li>
        </ul>


    </div><!--/span-->
";
    }

    public function getTemplateName()
    {
        return "templates/adminMenu.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 21,  40 => 9,  34 => 8,  26 => 2,  20 => 1,);
    }
}
/* {% block adminMenu %}*/
/*     <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">*/
/* */
/*         <ul class="nav nav-sidebar">*/
/*             <li class="disabled"><a href="#">Medlemmar</a></li>*/
/*             <li class="disabled"><a href="#">Nya medlemar</a></li>*/
/*             <li class="disabled"><a href="#">Skapa medlem</a></li>*/
/*             {% if adminMenuGroups == true %}<li><a href="{{ siteUrl }}admin/groups">Grupper</a></li>{% endif %}*/
/*         </ul>*/
/*         <ul class="nav nav-sidebar">*/
/*             <li class="disabled"><a href="">Skapa nyhet</a></li>*/
/*             <li class="disabled"><a href="">Redigera nyhet</a></li>*/
/*             <li class="disabled"><a href="">Kalendarium</a></li>*/
/*             <li class="disabled"><a href="">Månadsbrev</a></li>*/
/*         </ul>*/
/*         <ul class="nav nav-sidebar">*/
/*             <li class="disabled"><a href="">Lokalbokning Loge 1</a></li>*/
/*             <li class="disabled"><a href="">Lokalbokning Loge 2</a></li>*/
/*         </ul>*/
/*         <ul class="nav nav-sidebar">*/
/*             <li><a href="{{ siteUrl }}superadmin/resources">Resources</a></li>*/
/*         </ul>*/
/* */
/* */
/*     </div><!--/span-->*/
/* {% endblock adminMenu %}*/
