<?php

/* admin/index.twig */
class __TwigTemplate_22a973fe06becb831f72d776b11e5175b704e59bdc69a944c7ea979e3fb154b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/admin.twig", "admin/index.twig", 1);
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

    // line 5
    public function block_mainContent($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"page-header\">
        ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["pageHeader"]) ? $context["pageHeader"] : null), "html", null, true);
        echo "
    </h1>

    <div class=\"row placeholders\">
        <h2>Här kommer sammanfattande information för administrationen.</h2>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "templates/admin.twig" %}*/
/* */
/* */
/* */
/* {% block mainContent %}*/
/*     <h1 class="page-header">*/
/*         {{ pageHeader }}*/
/*     </h1>*/
/* */
/*     <div class="row placeholders">*/
/*         <h2>Här kommer sammanfattande information för administrationen.</h2>*/
/*     </div>*/
/* {% endblock mainContent %}*/
