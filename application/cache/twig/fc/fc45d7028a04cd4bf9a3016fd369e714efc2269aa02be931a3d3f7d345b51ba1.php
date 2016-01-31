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
            'navBar' => array($this, 'block_navBar'),
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
    public function block_navBar($context, array $blocks = array())
    {
        // line 4
        echo "<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "\">Cordis 4.0</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">

            <form class=\"navbar-form navbar-right\" action=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 18
        echo (isset($context["validation_errors"]) ? $context["validation_errors"] : null);
        echo "
                <div class=\"form-group\">
                    <input type=\"text\" placeholder=\"E-post\" name=\"email\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    <input type=\"password\" placeholder=\"Lösenord\" name=\"password\" class=\"form-control\">
                </div>
                <button type=\"submit\" class=\"btn btn-success\">Logga in</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>
";
    }

    // line 32
    public function block_jumbotron($context, array $blocks = array())
    {
        // line 33
        echo "    <div class=\"jumbotron\">
        <div class=\"container\">
            <h1>www.CordisQuinta.com 4.0</h1>
            <p>Cordisquinta har uppdaterat sin hemsida till version 4. Nya funktioner, lättare administration och möjlighet att bygga ut ytterliggare.</p>
            <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
        </div>
    </div>
";
    }

    // line 42
    public function block_mainContent($context, array $blocks = array())
    {
        // line 43
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
        return array (  89 => 43,  86 => 42,  75 => 33,  72 => 32,  55 => 18,  51 => 17,  44 => 13,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "templates/outside.twig" %}*/
/* */
/* {% block navBar %}*/
/* <nav class="navbar navbar-default navbar-fixed-top">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ baseUrl }}">Cordis 4.0</a>*/
/*         </div>*/
/*         <div id="navbar" class="navbar-collapse collapse">*/
/* */
/*             <form class="navbar-form navbar-right" action="{{ siteUrl }}" method="post">*/
/*                 {{ validation_errors|raw }}*/
/*                 <div class="form-group">*/
/*                     <input type="text" placeholder="E-post" name="email" class="form-control">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <input type="password" placeholder="Lösenord" name="password" class="form-control">*/
/*                 </div>*/
/*                 <button type="submit" class="btn btn-success">Logga in</button>*/
/*             </form>*/
/*         </div><!--/.navbar-collapse -->*/
/*     </div>*/
/* </nav>*/
/* {% endblock %}*/
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
