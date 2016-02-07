<?php

/* outside.twig */
class __TwigTemplate_4ce3f472246dc1870f45765e752156a5cc386bbd78413e8870b8014831c2424f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/outside.twig", "outside.twig", 1);
        $this->blocks = array(
            'jumbotron' => array($this, 'block_jumbotron'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/outside.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_jumbotron($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"jumbotron\">
        <div class=\"container\">
            <h1>www.CordisQuinta.com 4.0</h1>
            <p>Cordisquinta har uppdaterat sin hemsida till version 4. Nya funktioner, lättare administration och möjlighet att bygga ut ytterliggare.</p>
            <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
        </div>
    </div>
";
    }

    // line 13
    public function block_mainContent($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <h2>En tillbakablick</h2>
            <p>Orden Cordis Quinta har levt och verkat sedan 1933. Rötterna finns i det kamratskap och den gemenskap som de fem stiftarna ursprungligen fann i scoutlivet men som under åren blev en vidareförädlad ideologi. Brödraskapet inom vår Orden bygger på gemensamma värderingar med grundstenarna kamratskap, samhörighet och hjälpsamhet.</p>

            <h2>Ordens ändamål</h2>
            <p>Orden är av opolitisk natur och har till ändamål att inom en gemensam organisation sammanföras till en sällskaplig samvaro, tillvarataga och utveckla deras sociala och kulturella intressen samt främja ett vårdat och ridderligt uppträdande.</p>
                <p>I dagens samhälle behövs alternativ till idrotts- eller intresseföreningarna som i sin grund bygger på ett gemensamt intresse kring en specifik sport eller aktivitet. Orden står för en positiv ideologi och för en tro på det goda hos människan. I stiftarnas val av värderingar, kamratskap, samhörighet och hjälpsamhet finner vi uttryck för det som är kännetecknande för en västlig och kristen kultur. Vi låter oss dock inte begränsas utan är öppna för det positiva och goda vi finner i andra kulturer.</p>
                <p>Det finns för många ett stort behov av att finna gemenskap och alternativ som ger frihet från vardagens förpliktelser och påfrestningar. Orden erbjuder ett stimulerande komplement till en ytlig och lättillgänglig nöjesvärld.</p>
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
        return "outside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  43 => 13,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "templates/outside.twig" %}*/
/* */
/* {% block jumbotron %}*/
/*     <div class="jumbotron">*/
/*         <div class="container">*/
/*             <h1>www.CordisQuinta.com 4.0</h1>*/
/*             <p>Cordisquinta har uppdaterat sin hemsida till version 4. Nya funktioner, lättare administration och möjlighet att bygga ut ytterliggare.</p>*/
/*             <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block mainContent %}*/
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             <h2>En tillbakablick</h2>*/
/*             <p>Orden Cordis Quinta har levt och verkat sedan 1933. Rötterna finns i det kamratskap och den gemenskap som de fem stiftarna ursprungligen fann i scoutlivet men som under åren blev en vidareförädlad ideologi. Brödraskapet inom vår Orden bygger på gemensamma värderingar med grundstenarna kamratskap, samhörighet och hjälpsamhet.</p>*/
/* */
/*             <h2>Ordens ändamål</h2>*/
/*             <p>Orden är av opolitisk natur och har till ändamål att inom en gemensam organisation sammanföras till en sällskaplig samvaro, tillvarataga och utveckla deras sociala och kulturella intressen samt främja ett vårdat och ridderligt uppträdande.</p>*/
/*                 <p>I dagens samhälle behövs alternativ till idrotts- eller intresseföreningarna som i sin grund bygger på ett gemensamt intresse kring en specifik sport eller aktivitet. Orden står för en positiv ideologi och för en tro på det goda hos människan. I stiftarnas val av värderingar, kamratskap, samhörighet och hjälpsamhet finner vi uttryck för det som är kännetecknande för en västlig och kristen kultur. Vi låter oss dock inte begränsas utan är öppna för det positiva och goda vi finner i andra kulturer.</p>*/
/*                 <p>Det finns för många ett stort behov av att finna gemenskap och alternativ som ger frihet från vardagens förpliktelser och påfrestningar. Orden erbjuder ett stimulerande komplement till en ytlig och lättillgänglig nöjesvärld.</p>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <h2>Heading</h2>*/
/*             <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*             <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
