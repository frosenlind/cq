<?php

/* user/index.twig */
class __TwigTemplate_0235be84f5664c0b0f508e67358737483ed70fbecc29c8c621605ba66f50a788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/layout.twig", "user/index.twig", 1);
        $this->blocks = array(
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

    // line 4
    public function block_mainContent($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <h2>Dina uppgifter i matrikeln</h2>
            <p>Användarnmn, namn, adress mm.</p>
        </div>
        <div class=\"col-md-6\">
            <h2>Inloggningsuppgifter</h2>
            <p>
                Användarnamn: ";
        // line 13
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["activeUser"]) ? $context["activeUser"] : null), "username", array())), "html", null, true);
        echo "<br />
                E-postadress: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activeUser"]) ? $context["activeUser"] : null), "email", array()), "html", null, true);
        echo "<br />
            </p>
            <hr>

            <form action=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "mypage\" method=\"post\">
                ";
        // line 19
        echo (isset($context["validation_errors"]) ? $context["validation_errors"] : null);
        echo "
                <div class=\"form-group\">
                    <label for=\"pass\">Nytt lösenord</label>
                    <input type=\"password\" name=\"pass\" class=\"form-control\" id=\"pass\" placeholder=\"Nytt lösenord\">
                </div>
                <div class=\"form-group\">
                    <label for=\"pass2\">Repetera nytt lösenord</label>
                    <input type=\"password\" name=\"pass2\" class=\"form-control\" id=\"pass2\" placeholder=\"Repetera nytt lösenord\">
                </div>
                <input type=\"submit\" class=\"btn btn-default\" value=\"Spara\" />
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "user/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 19,  52 => 18,  45 => 14,  41 => 13,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "templates/layout.twig" %}*/
/* */
/* */
/* {% block mainContent %}*/
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             <h2>Dina uppgifter i matrikeln</h2>*/
/*             <p>Användarnmn, namn, adress mm.</p>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <h2>Inloggningsuppgifter</h2>*/
/*             <p>*/
/*                 Användarnamn: {{ activeUser.username|capitalize  }}<br />*/
/*                 E-postadress: {{ activeUser.email }}<br />*/
/*             </p>*/
/*             <hr>*/
/* */
/*             <form action="{{ siteUrl }}mypage" method="post">*/
/*                 {{ validation_errors|raw }}*/
/*                 <div class="form-group">*/
/*                     <label for="pass">Nytt lösenord</label>*/
/*                     <input type="password" name="pass" class="form-control" id="pass" placeholder="Nytt lösenord">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="pass2">Repetera nytt lösenord</label>*/
/*                     <input type="password" name="pass2" class="form-control" id="pass2" placeholder="Repetera nytt lösenord">*/
/*                 </div>*/
/*                 <input type="submit" class="btn btn-default" value="Spara" />*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
