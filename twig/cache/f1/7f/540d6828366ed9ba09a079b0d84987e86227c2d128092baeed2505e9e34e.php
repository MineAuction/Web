<?php

/* error.tpl */
class __TwigTemplate_f17f540d6828366ed9ba09a079b0d84987e86227c2d128092baeed2505e9e34e extends Twig_Template
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

    <meta charset=\"utf-8\">

    <title>404 - Bootstrap Admin Template</title>



\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">

    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"> 

\t    

\t<link href=\"/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />

\t<link href=\"/bootstrap/css/css/bootstrap-responsive.min.css\" rel=\"stylesheet\" type=\"text/css\" />

\t

\t<link href=\"/bootstrap/css/font-awesome.css\" rel=\"stylesheet\">

\t    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600\" rel=\"stylesheet\">

\t    

\t<link href=\"/bootstrap/css/style.css\" rel=\"stylesheet\" type=\"text/css\" />



</head>



<body>

\t

\t<div class=\"navbar navbar-fixed-top\">

\t

\t<div class=\"navbar-inner\">

\t\t

\t\t<div class=\"container\">

\t\t\t

\t\t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">

\t\t\t\t<span class=\"icon-bar\"></span>

\t\t\t\t<span class=\"icon-bar\"></span>

\t\t\t\t<span class=\"icon-bar\"></span>

\t\t\t</a>

\t\t\t

\t\t\t<a class=\"brand\" href=\"index.html\">

\t\t\t\tBootstrap Admin Template\t\t\t\t

\t\t\t</a>\t\t

\t\t\t

\t\t\t<div class=\"nav-collapse\">

\t\t\t\t<ul class=\"nav pull-right\">

\t\t\t\t\t

\t\t\t\t\t<li class=\"\">\t\t\t\t\t\t

\t\t\t\t\t\t<a href=\"index.html\" class=\"\">

\t\t\t\t\t\t\t<i class=\"icon-chevron-left\"></i>

\t\t\t\t\t\t\tBack to Dashboard

\t\t\t\t\t\t</a>

\t\t\t\t\t\t

\t\t\t\t\t</li>

\t\t\t\t</ul>

\t\t\t\t

\t\t\t</div><!--/.nav-collapse -->\t

\t

\t\t</div> <!-- /container -->

\t\t

\t</div> <!-- /navbar-inner -->

\t

</div> <!-- /navbar -->







<div class=\"container\">

\t

\t<div class=\"row\">

\t\t

\t\t<div class=\"span12\">

\t\t\t

\t\t\t<div class=\"error-container\">

\t\t\t\t<h1>";
        // line 135
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        echo twig_escape_filter($this->env, $_error_, "html", null, true);
        echo "</h1>

\t\t\t\t

\t\t\t\t<h2>Who! bad trip man. No more pixesl for you.</h2>

\t\t\t\t

\t\t\t\t<div class=\"error-details\">

\t\t\t\t\tSorry, an error has occured! Why not try going back to the <a href=\"index.html\">home page</a> or perhaps try following!

\t\t\t\t\t

\t\t\t\t</div> <!-- /error-details -->

\t\t\t\t

\t\t\t\t<div class=\"error-actions\">

\t\t\t\t\t<a href=\"index.html\" class=\"btn btn-large btn-primary\">

\t\t\t\t\t\t<i class=\"icon-chevron-left\"></i>

\t\t\t\t\t\t&nbsp;

\t\t\t\t\t\tBack to Dashboard\t\t\t\t\t\t

\t\t\t\t\t</a>

\t\t\t\t\t

\t\t\t\t\t

\t\t\t\t\t

\t\t\t\t</div> <!-- /error-actions -->

\t\t\t\t\t\t\t

\t\t\t</div> <!-- /error-container -->\t\t\t

\t\t\t

\t\t</div> <!-- /span12 -->

\t\t

\t</div> <!-- /row -->

\t

</div> <!-- /container -->





<script src=\"js/jquery-1.7.2.min.js\"></script>

<script src=\"js/bootstrap.js\"></script>



</body>



</html>

";
    }

    public function getTemplateName()
    {
        return "error.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 135,  19 => 1,);
    }
}
