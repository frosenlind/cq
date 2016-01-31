<?php

/* templates/layout.twig */
class __TwigTemplate_8cfbc9ca3b1d9df4a60794264c5cb4864cbfaf34dce20f7004bb1c30fd111a2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navBar' => array($this, 'block_navBar'),
            'jumbotron' => array($this, 'block_jumbotron'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 12
        if ( !twig_test_empty((isset($context["pageTitle"]) ? $context["pageTitle"] : null))) {
            echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : null), "html", null, true);
            echo " - ";
        }
        echo twig_escape_filter($this->env, (isset($context["globalTitle"]) ? $context["globalTitle"] : null), "html", null, true);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "vendor/twbs/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "vendor/twbs/bootstrap/docs/assets/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "assets/css/style.css\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>


    ";
        // line 33
        $this->displayBlock('navBar', $context, $blocks);
        // line 36
        echo "
    <!-- Main jumbotron for a primary marketing message or call to action -->
    ";
        // line 38
        $this->displayBlock('jumbotron', $context, $blocks);
        // line 39
        echo "
    <div class=\"container\">
        <!-- Put main content here -->

        ";
        // line 43
        $this->displayBlock('mainContent', $context, $blocks);
        // line 44
        echo "
        <!-- END: Put main content here -->
        <hr>

        <footer>
            <p>&copy; 2016 Fredrik Rosenlind</p>
        </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "vendor/twbs/bootstrap/docs/assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "vendor/twbs/bootstrap/dist/js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "vendor/twbs/bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js\"></script>
</body>
</html>
";
    }

    // line 33
    public function block_navBar($context, array $blocks = array())
    {
        // line 34
        echo "        ";
        $this->loadTemplate("templates/topNavbar.twig", "templates/layout.twig", 34)->display($context);
        // line 35
        echo "    ";
    }

    // line 38
    public function block_jumbotron($context, array $blocks = array())
    {
    }

    // line 43
    public function block_mainContent($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "templates/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 43,  131 => 38,  127 => 35,  124 => 34,  121 => 33,  113 => 61,  108 => 59,  104 => 58,  88 => 44,  86 => 43,  80 => 39,  78 => 38,  74 => 36,  72 => 33,  57 => 21,  51 => 18,  45 => 15,  35 => 12,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="../../favicon.ico">*/
/* */
/*     <title>{% if pageTitle is not empty %}{{ pageTitle }} - {% endif %}{{ globalTitle }}</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="{{ baseUrl }}vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*     <link href="{{ baseUrl }}vendor/twbs/bootstrap/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">*/
/* */
/*     <!-- Custom styles for this template -->*/
/*     <link href="{{ baseUrl }}assets/css/style.css" rel="stylesheet">*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/* <body>*/
/* */
/* */
/*     {% block navBar %}*/
/*         {% include 'templates/topNavbar.twig' %}*/
/*     {% endblock %}*/
/* */
/*     <!-- Main jumbotron for a primary marketing message or call to action -->*/
/*     {% block jumbotron %}{% endblock %}*/
/* */
/*     <div class="container">*/
/*         <!-- Put main content here -->*/
/* */
/*         {% block mainContent %} {% endblock %}*/
/* */
/*         <!-- END: Put main content here -->*/
/*         <hr>*/
/* */
/*         <footer>*/
/*             <p>&copy; 2016 Fredrik Rosenlind</p>*/
/*         </footer>*/
/*     </div> <!-- /container -->*/
/* */
/* */
/*     <!-- Bootstrap core JavaScript*/
/*     ================================================== -->*/
/*     <!-- Placed at the end of the document so the pages load faster -->*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     <script>window.jQuery || document.write('<script src="{{ baseUrl }}vendor/twbs/bootstrap/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>*/
/*     <script src="{{ baseUrl }}vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>*/
/*     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*     <script src="{{ baseUrl }}vendor/twbs/bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js"></script>*/
/* </body>*/
/* </html>*/
/* */
