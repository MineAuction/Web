<?php

/* login.tpl */
class __TwigTemplate_7bb6f5d0208c92341bbc6acd452684c5ee1b8b3ead9f76ebbeec3f799fe15776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    ";
        // line 4
        $this->env->loadTemplate("login.tpl", "1610518685")->display($context);
        echo " 
    <link href=\"/bootstrap/css/pages/signin.css\" rel=\"stylesheet\" type=\"text/css\">
  </head>
<body>
\t";
        // line 8
        $this->env->loadTemplate("login.tpl", "1830521273")->display($context);
        echo " 

\t";
        // line 10
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if ((!(null === $_error_))) {
            // line 11
            echo "\t\t<div class=\"alert alert-info\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t<strong>Upozornění:</strong> ";
            // line 13
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo $_error_;
            echo "
\t\t</div>   
\t";
        }
        // line 15
        echo " 

<div class=\"account-container\">\t
\t<div class=\"content clearfix\">\t\t
\t\t<form action=\"#\" method=\"post\">\t\t
\t\t\t<h1>";
        // line 20
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "login_h1", array()), "html", null, true);
        echo "</h1>\t\t\t
\t\t\t<div class=\"login-fields\">\t\t\t\t
\t\t\t\t<p>";
        // line 22
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "login_h2", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<label for=\"username\">Username</label>
\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"username\" value=\"\" placeholder=\"Minecraft username\" class=\"login username-field\" required />
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<label for=\"password\">Password:</label>
\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"password\" value=\"\" placeholder=\"Password\" class=\"login password-field\" required />
\t\t\t\t</div> 
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"login-actions\">\t\t\t\t\t\t\t\t
\t\t\t\t<button class=\"button btn btn-success btn-large\">";
        // line 37
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "login_butt", array()), "html", null, true);
        echo "</button>\t\t\t\t
\t\t\t</div> <!-- .actions -->
\t\t</form>
\t\t
\t</div> <!-- /content -->
\t
</div> <!-- /account-container -->
<div class=\"footer\">
  <div class=\"footer-inner\">
    <div class=\"container\">
      <div>
        <div class=\"span6\">&copy; 2015 by Sekiphp, Sognus, DvnBthlo</div>
\t\t\t\t<div class=\"span6 to_right\"><a href='http://github.com/Sekiphp/MineAuction'>MineAuction GitHub <span class='icon-github'></span></a></div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /footer-inner -->
</div>
<!-- /footer --> 



<script src=\"/bootstrap/js/jquery-1.7.2.min.js\"></script>
<script src=\"/bootstrap/js/bootstrap.js\"></script>
<script src=\"/bootstrap/js/signin.js\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "login.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 37,  63 => 22,  57 => 20,  50 => 15,  43 => 13,  39 => 11,  36 => 10,  31 => 8,  24 => 4,  19 => 1,);
    }
}


/* login.tpl */
class __TwigTemplate_7bb6f5d0208c92341bbc6acd452684c5ee1b8b3ead9f76ebbeec3f799fe15776_1610518685 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("html_head.tpl");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "html_head.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "login.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 37,  63 => 22,  57 => 20,  50 => 15,  43 => 13,  39 => 11,  36 => 10,  31 => 8,  24 => 4,  19 => 1,);
    }
}


/* login.tpl */
class __TwigTemplate_7bb6f5d0208c92341bbc6acd452684c5ee1b8b3ead9f76ebbeec3f799fe15776_1830521273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("header.tpl");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "header.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "login.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 37,  63 => 22,  57 => 20,  50 => 15,  43 => 13,  39 => 11,  36 => 10,  31 => 8,  24 => 4,  19 => 1,);
    }
}
