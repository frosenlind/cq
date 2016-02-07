<?php

/* templates/topNavbar.twig */
class __TwigTemplate_2a0f3e7bc220330ca9173427f4720e4a7a59a5346b22bdb848c3c4c73007c80c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navBar' => array($this, 'block_navBar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('navBar', $context, $blocks);
    }

    public function block_navBar($context, array $blocks = array())
    {
        // line 2
        echo "    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "start\">Cordis 4.0</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"#\">Nyheter</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Loger <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"disabled\"><a href=\"#\">Höga Rådet</a></li>
                            <li class=\"disabled\"><a href=\"#\">HRK</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li class=\"disabled\"><a href=\"#\">Loge 1</a></li>
                            <li class=\"disabled\"><a href=\"#\">Loge 2</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li class=\"disabled\"><a href=\"#\">Lila Rosetten 1</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 34
        if (((isset($context["isAdmin"]) ? $context["isAdmin"] : null) == 1)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
            echo "admin\">Administration</a></li>";
        }
        // line 35
        echo "                    <li><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "mypage\">Min Sida</a></li>
                    <li><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "logout\">Logga ut</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
";
    }

    public function getTemplateName()
    {
        return "templates/topNavbar.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  69 => 35,  63 => 34,  38 => 12,  26 => 2,  20 => 1,);
    }
}
/* {% block navBar %}*/
/*     <nav class="navbar navbar-default navbar-fixed-top">*/
/*         <div class="container">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="{{ siteUrl }}start">Cordis 4.0</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li><a href="#">Nyheter</a></li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Loger <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li class="disabled"><a href="#">Höga Rådet</a></li>*/
/*                             <li class="disabled"><a href="#">HRK</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li class="disabled"><a href="#">Loge 1</a></li>*/
/*                             <li class="disabled"><a href="#">Loge 2</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li class="disabled"><a href="#">Lila Rosetten 1</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/* */
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     {% if isAdmin == 1 %}<li><a href="{{ siteUrl }}admin">Administration</a></li>{% endif %}*/
/*                     <li><a href="{{ siteUrl }}mypage">Min Sida</a></li>*/
/*                     <li><a href="{{ siteUrl }}logout">Logga ut</a></li>*/
/*                 </ul>*/
/*             </div><!-- /.navbar-collapse -->*/
/*         </div><!-- /.container-fluid -->*/
/*     </nav>*/
/* {% endblock navBar%}*/
/* */
