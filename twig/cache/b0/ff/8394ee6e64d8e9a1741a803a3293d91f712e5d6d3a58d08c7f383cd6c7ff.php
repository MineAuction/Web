<?php

/* html_head.tpl */
class __TwigTemplate_b0ff8394ee6e64d8e9a1741a803a3293d91f712e5d6d3a58d08c7f383cd6c7ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_head' => array($this, 'block_html_head'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('html_head', $context, $blocks);
    }

    public function block_html_head($context, array $blocks = array())
    {
        // line 2
        echo "  <title>";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "pageTitle", array()), "html", null, true);
        echo " - ";
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
  <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
  <meta name='author' content='Sekiphp, Sognus, LynSis' /> 
  <link href=\"/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"/bootstrap/css/bootstrap-responsive.min.css\" rel=\"stylesheet\">
  <link href=\"/bootstrap/css/font-awesome.css\" rel=\"stylesheet\">
  <link href=\"/bootstrap/css/style.css\" rel=\"stylesheet\">
  <link href=\"/bootstrap/css/pages/dashboard.css\" rel=\"stylesheet\">
  <link href=\"/css/style.css\" rel=\"stylesheet\">
  <link href=\"/images/dia_small.png\" rel=\"icon\" type=\"image/png\" />
  <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600\" rel=\"stylesheet\">
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
  <![endif]-->
";
    }

    public function getTemplateName()
    {
        return "html_head.tpl";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }
}
