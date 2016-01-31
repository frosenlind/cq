<?php

/* templates/admin.twig */
class __TwigTemplate_176d47843d26bcbdf69104ec2f0f9b2a7934c4658171722d6f955fcc2e6162d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navBar' => array($this, 'block_navBar'),
            'adminMenu' => array($this, 'block_adminMenu'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
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
        echo "assets/css/admin.css\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

";
        // line 32
        $this->displayBlock('navBar', $context, $blocks);
        // line 35
        echo "
<div class=\"container-fluid\">

    <div class=\"row row-offcanvas row-offcanvas-left\">

        ";
        // line 40
        $this->displayBlock('adminMenu', $context, $blocks);
        // line 43
        echo "
        <!-- MainContent -->
        <div class=\"col-sm-9 col-md-10 main\">

            <!--toggle sidebar button-->
            <p class=\"visible-xs\">
                <button type=\"button\" class=\"btn btn-primary btn-xs\" data-toggle=\"offcanvas\"><i class=\"glyphicon glyphicon-chevron-left\"></i></button>
            </p>

        ";
        // line 52
        $this->displayBlock('mainContent', $context, $blocks);
        // line 54
        echo "
        </div>
        <!-- MainContent END-->

    </div>
</div><!--/.container-->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"vendor/twbs/bootstrap/docs/assets/js/vendor/jquery.min.js\"><\\/script>')</script>
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "vendor/twbs/bootstrap/dist/js/bootstrap.min.js\"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "vendor/twbs/bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js\"></script>

<script type='text/javascript'>

    \$(document).ready(function() {
        \$('[data-toggle=offcanvas]').click(function() {
            \$('.row-offcanvas').toggleClass('active');
        });
    });

</script>

</body>
</html>

";
    }

    // line 32
    public function block_navBar($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        $this->loadTemplate("templates/topNavbar.twig", "templates/admin.twig", 33)->display($context);
    }

    // line 40
    public function block_adminMenu($context, array $blocks = array())
    {
        // line 41
        echo "            ";
        $this->loadTemplate("templates/adminMenu.twig", "templates/admin.twig", 41)->display($context);
        // line 42
        echo "        ";
    }

    // line 52
    public function block_mainContent($context, array $blocks = array())
    {
        // line 53
        echo "        ";
    }

    public function getTemplateName()
    {
        return "templates/admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 53,  153 => 52,  149 => 42,  146 => 41,  143 => 40,  138 => 33,  135 => 32,  115 => 69,  110 => 67,  95 => 54,  93 => 52,  82 => 43,  80 => 40,  73 => 35,  71 => 32,  57 => 21,  51 => 18,  45 => 15,  35 => 12,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
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
/*     <link href="{{ baseUrl }}assets/css/admin.css" rel="stylesheet">*/
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
/* {% block navBar %}*/
/*     {% include 'templates/topNavbar.twig' %}*/
/* {% endblock %}*/
/* */
/* <div class="container-fluid">*/
/* */
/*     <div class="row row-offcanvas row-offcanvas-left">*/
/* */
/*         {% block adminMenu %}*/
/*             {% include 'templates/adminMenu.twig' %}*/
/*         {% endblock adminMenu %}*/
/* */
/*         <!-- MainContent -->*/
/*         <div class="col-sm-9 col-md-10 main">*/
/* */
/*             <!--toggle sidebar button-->*/
/*             <p class="visible-xs">*/
/*                 <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>*/
/*             </p>*/
/* */
/*         {% block mainContent %}*/
/*         {% endblock mainContent %}*/
/* */
/*         </div>*/
/*         <!-- MainContent END-->*/
/* */
/*     </div>*/
/* </div><!--/.container-->*/
/* */
/* */
/* <!-- Bootstrap core JavaScript*/
/* ================================================== -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* <script>window.jQuery || document.write('<script src="vendor/twbs/bootstrap/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>*/
/* <script src="{{ baseUrl }}vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>*/
/* <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/* <script src="{{ baseUrl }}vendor/twbs/bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js"></script>*/
/* */
/* <script type='text/javascript'>*/
/* */
/*     $(document).ready(function() {*/
/*         $('[data-toggle=offcanvas]').click(function() {*/
/*             $('.row-offcanvas').toggleClass('active');*/
/*         });*/
/*     });*/
/* */
/* </script>*/
/* */
/* </body>*/
/* </html>*/
/* */
/* */
