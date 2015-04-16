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
    ";
        // line 4
        $this->env->loadTemplate("error.tpl", "2011757397")->display($context);
        echo " 
  </head>
<body>

";
        // line 8
        $this->env->loadTemplate("error.tpl", "1680679676")->display($context);
        echo " 







<div class=\"container\">

\t

\t<div class=\"row\">

\t\t

\t\t<div class=\"span12\">

\t\t\t

\t\t\t<div class=\"error-container\">

\t\t\t\t<h1>";
        // line 30
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
\t\t\t</div> <!-- /error-container -->\t\t\t
\t\t</div> <!-- /span12 -->
\t</div> <!-- /row -->
</div> <!-- /container -->





<script src=\"js/jquery-1.7.2.min.js\"></script>
<script src=\"js/bootstrap.js\"></script>



</body>
</html>";
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
        return array (  56 => 30,  31 => 8,  24 => 4,  19 => 1,);
    }
}


/* error.tpl */
class __TwigTemplate_f17f540d6828366ed9ba09a079b0d84987e86227c2d128092baeed2505e9e34e_2011757397 extends Twig_Template
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
        return "error.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 30,  31 => 8,  24 => 4,  19 => 1,);
    }
}


/* error.tpl */
class __TwigTemplate_f17f540d6828366ed9ba09a079b0d84987e86227c2d128092baeed2505e9e34e_1680679676 extends Twig_Template
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
        return "error.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 30,  31 => 8,  24 => 4,  19 => 1,);
    }
}
