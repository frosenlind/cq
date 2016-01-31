<?php

/* start.twig */
class __TwigTemplate_40d43493c0f1b794a421f6c20267276073e50397378afcfa37b4c89d9c5b5070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/layout.twig", "start.twig", 1);
        $this->blocks = array(
            'jumbotron' => array($this, 'block_jumbotron'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_jumbotron($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"jumbotron\">
        <div class=\"container\">
            <h1>Senaste nyheten</h1>
            <p>Detta är en del av den senaste nyheten!</p>
            <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Läs mer &raquo;</a></p>

        </div>
    </div>
";
    }

    // line 16
    public function block_mainContent($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <h2>En tillbakablick</h2>
            <p>Här kommer nyheter</p>
        </div>
        <div class=\"col-md-6\">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "start.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 17,  44 => 16,  32 => 6,  29 => 5,  11 => 1,);
    }
}
/* {% extends "templates/layout.twig" %}*/
/* */
/* */
/* */
/* {% block jumbotron %}*/
/*     <div class="jumbotron">*/
/*         <div class="container">*/
/*             <h1>Senaste nyheten</h1>*/
/*             <p>Detta är en del av den senaste nyheten!</p>*/
/*             <p><a class="btn btn-primary btn-lg" href="#" role="button">Läs mer &raquo;</a></p>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block mainContent %}*/
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             <h2>En tillbakablick</h2>*/
/*             <p>Här kommer nyheter</p>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <h2>Heading</h2>*/
/*             <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*             <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
