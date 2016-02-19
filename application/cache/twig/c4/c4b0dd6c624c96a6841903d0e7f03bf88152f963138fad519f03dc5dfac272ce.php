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
<script type=\"text/javascript\">
    var baseUrl = ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo ";
    var siteUrl = ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo ";
</script>



    ";
        // line 38
        $this->displayBlock('navBar', $context, $blocks);
        // line 41
        echo "
    <!-- Main jumbotron for a primary marketing message or call to action -->
    ";
        // line 43
        $this->displayBlock('jumbotron', $context, $blocks);
        // line 44
        echo "
    <div class=\"container\">
        <!-- Put main content here -->

        ";
        // line 48
        $this->displayBlock('mainContent', $context, $blocks);
        // line 49
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
        // line 63
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "vendor/twbs/bootstrap/docs/assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "vendor/twbs/bootstrap/dist/js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "vendor/twbs/bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js\"></script>
</body>
</html>
";
    }

    // line 38
    public function block_navBar($context, array $blocks = array())
    {
        // line 39
        echo "        ";
        $this->loadTemplate("templates/topNavbar.twig", "templates/layout.twig", 39)->display($context);
        // line 40
        echo "    ";
    }

    // line 43
    public function block_jumbotron($context, array $blocks = array())
    {
    }

    // line 48
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
        return array (  147 => 48,  142 => 43,  138 => 40,  135 => 39,  132 => 38,  124 => 66,  119 => 64,  115 => 63,  99 => 49,  97 => 48,  91 => 44,  89 => 43,  85 => 41,  83 => 38,  75 => 33,  71 => 32,  57 => 21,  51 => 18,  45 => 15,  35 => 12,  22 => 1,);
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
/* <script type="text/javascript">*/
/*     var baseUrl = {{ baseUrl }};*/
/*     var siteUrl = {{ siteUrl }};*/
/* </script>*/
/* */
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
