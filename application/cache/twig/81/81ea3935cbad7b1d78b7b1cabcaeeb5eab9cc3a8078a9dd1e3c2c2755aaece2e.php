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
        <div class=\"col-xs-6 col-sm-3 placeholder text-center\">
            <img src=\"//placehold.it/200/6666ff/fff\" class=\"center-block img-responsive img-circle\" alt=\"Generic placeholder thumbnail\">
            <h4>Label</h4>
            <span class=\"text-muted\">Something else</span>
        </div>
        <div class=\"col-xs-6 col-sm-3 placeholder text-center\">
            <img src=\"//placehold.it/200/66ff66/fff\" class=\"center-block img-responsive img-circle\" alt=\"Generic placeholder thumbnail\">
            <h4>Label</h4>
            <span class=\"text-muted\">Something else</span>
        </div>
        <div class=\"col-xs-6 col-sm-3 placeholder text-center\">
            <img src=\"//placehold.it/200/6666ff/fff\" class=\"center-block img-responsive img-circle\" alt=\"Generic placeholder thumbnail\">
            <h4>Label</h4>
            <span class=\"text-muted\">Something else</span>
        </div>
        <div class=\"col-xs-6 col-sm-3 placeholder text-center\">
            <img src=\"//placehold.it/200/66ff66/fff\" class=\"center-block img-responsive img-circle\" alt=\"Generic placeholder thumbnail\">
            <h4>Label</h4>
            <span class=\"text-muted\">Something else</span>
        </div>
    </div>

    <hr>

    <h2 class=\"sub-header\">Section title</h2>
    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>#</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td>sit</td>
            </tr>
            <tr>
                <td>1,002</td>
                <td>amet</td>
                <td>consectetur</td>
                <td>adipiscing</td>
                <td>elit</td>
            </tr>
            <tr>
                <td>1,003</td>
                <td>Integer</td>
                <td>nec</td>
                <td>odio</td>
                <td>Praesent</td>
            </tr>
            <tr>
                <td>1,003</td>
                <td>libero</td>
                <td>Sed</td>
                <td>cursus</td>
                <td>ante</td>
            </tr>
            <tr>
                <td>1,004</td>
                <td>dapibus</td>
                <td>diam</td>
                <td>Sed</td>
                <td>nisi</td>
            </tr>
            <tr>
                <td>1,005</td>
                <td>Nulla</td>
                <td>quis</td>
                <td>sem</td>
                <td>at</td>
            </tr>
            <tr>
                <td>1,006</td>
                <td>nibh</td>
                <td>elementum</td>
                <td>imperdiet</td>
                <td>Duis</td>
            </tr>
            <tr>
                <td>1,007</td>
                <td>sagittis</td>
                <td>ipsum</td>
                <td>Praesent</td>
                <td>mauris</td>
            </tr>
            <tr>
                <td>1,008</td>
                <td>Fusce</td>
                <td>nec</td>
                <td>tellus</td>
                <td>sed</td>
            </tr>
            <tr>
                <td>1,009</td>
                <td>augue</td>
                <td>semper</td>
                <td>porta</td>
                <td>Mauris</td>
            </tr>
            <tr>
                <td>1,010</td>
                <td>massa</td>
                <td>Vestibulum</td>
                <td>lacinia</td>
                <td>arcu</td>
            </tr>
            <tr>
                <td>1,011</td>
                <td>eget</td>
                <td>nulla</td>
                <td>Class</td>
                <td>aptent</td>
            </tr>
            <tr>
                <td>1,012</td>
                <td>taciti</td>
                <td>sociosqu</td>
                <td>ad</td>
                <td>litora</td>
            </tr>
            <tr>
                <td>1,013</td>
                <td>torquent</td>
                <td>per</td>
                <td>conubia</td>
                <td>nostra</td>
            </tr>
            <tr>
                <td>1,014</td>
                <td>per</td>
                <td>inceptos</td>
                <td>himenaeos</td>
                <td>Curabitur</td>
            </tr>
            <tr>
                <td>1,015</td>
                <td>sodales</td>
                <td>ligula</td>
                <td>in</td>
                <td>libero</td>
            </tr>
            </tbody>
        </table>
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
/*         <div class="col-xs-6 col-sm-3 placeholder text-center">*/
/*             <img src="//placehold.it/200/6666ff/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">*/
/*             <h4>Label</h4>*/
/*             <span class="text-muted">Something else</span>*/
/*         </div>*/
/*         <div class="col-xs-6 col-sm-3 placeholder text-center">*/
/*             <img src="//placehold.it/200/66ff66/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">*/
/*             <h4>Label</h4>*/
/*             <span class="text-muted">Something else</span>*/
/*         </div>*/
/*         <div class="col-xs-6 col-sm-3 placeholder text-center">*/
/*             <img src="//placehold.it/200/6666ff/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">*/
/*             <h4>Label</h4>*/
/*             <span class="text-muted">Something else</span>*/
/*         </div>*/
/*         <div class="col-xs-6 col-sm-3 placeholder text-center">*/
/*             <img src="//placehold.it/200/66ff66/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">*/
/*             <h4>Label</h4>*/
/*             <span class="text-muted">Something else</span>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <h2 class="sub-header">Section title</h2>*/
/*     <div class="table-responsive">*/
/*         <table class="table table-striped">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>#</th>*/
/*                 <th>Header</th>*/
/*                 <th>Header</th>*/
/*                 <th>Header</th>*/
/*                 <th>Header</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             <tr>*/
/*                 <td>1,001</td>*/
/*                 <td>Lorem</td>*/
/*                 <td>ipsum</td>*/
/*                 <td>dolor</td>*/
/*                 <td>sit</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>1,002</td>*/
/*                 <td>amet</td>*/
/*                 <td>consectetur</td>*/
/*                 <td>adipiscing</td>*/
/*                 <td>elit</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>1,003</td>*/
/*                 <td>Integer</td>*/
/*                 <td>nec</td>*/
/*                 <td>odio</td>*/
/*                 <td>Praesent</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>1,003</td>*/
/*                 <td>libero</td>*/
/*                 <td>Sed</td>*/
/*                 <td>cursus</td>*/
/*                 <td>ante</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>1,004</td>*/
/*                 <td>dapibus</td>*/
/*                 <td>diam</td>*/
/*                 <td>Sed</td>*/
/*                 <td>nisi</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>1,005</td>*/
/*                 <td>Nulla</td>*/
/*                 <td>quis</td>*/
/*                 <td>sem</td>*/
/*                 <td>at</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>1,006</td>*/
/*                 <td>nibh</td>*/
/*                 <td>elementum</td>*/
/*                 <td>imperdiet</td>*/
/*                 <td>Duis</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>1,007</td>*/
/*                 <td>sagittis</td>*/
/*                 <td>ipsum</td>*/
/*                 <td>Praesent</td>*/
/*                 <td>mauris</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>1,008</td>*/
/*                 <td>Fusce</td>*/
/*                 <td>nec</td>*/
/*                 <td>tellus</td>*/
/*                 <td>sed</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>1,009</td>*/
/*                 <td>augue</td>*/
/*                 <td>semper</td>*/
/*                 <td>porta</td>*/
/*                 <td>Mauris</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>1,010</td>*/
/*                 <td>massa</td>*/
/*                 <td>Vestibulum</td>*/
/*                 <td>lacinia</td>*/
/*                 <td>arcu</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>1,011</td>*/
/*                 <td>eget</td>*/
/*                 <td>nulla</td>*/
/*                 <td>Class</td>*/
/*                 <td>aptent</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>1,012</td>*/
/*                 <td>taciti</td>*/
/*                 <td>sociosqu</td>*/
/*                 <td>ad</td>*/
/*                 <td>litora</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>1,013</td>*/
/*                 <td>torquent</td>*/
/*                 <td>per</td>*/
/*                 <td>conubia</td>*/
/*                 <td>nostra</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>1,014</td>*/
/*                 <td>per</td>*/
/*                 <td>inceptos</td>*/
/*                 <td>himenaeos</td>*/
/*                 <td>Curabitur</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>1,015</td>*/
/*                 <td>sodales</td>*/
/*                 <td>ligula</td>*/
/*                 <td>in</td>*/
/*                 <td>libero</td>*/
/*             </tr>*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* {% endblock mainContent %}*/
