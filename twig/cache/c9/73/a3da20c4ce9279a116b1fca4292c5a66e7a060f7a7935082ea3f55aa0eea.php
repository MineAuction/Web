<?php

/* index.tpl */
class __TwigTemplate_c973a3da20c4ce9279a116b1fca4292c5a66e7a060f7a7935082ea3f55aa0eea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
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
        $this->env->loadTemplate("index.tpl", "917086013")->display($context);
        echo " 
  </head>
<body>

  ";
        // line 8
        $this->env->loadTemplate("index.tpl", "2002851060")->display($context);
        echo " 
  ";
        // line 9
        $this->env->loadTemplate("index.tpl", "504690615")->display($context);
        echo " 

<div class=\"main\">
  <div class=\"main-inner\">
    <div class=\"container\">
\t\t
\t\t";
        // line 15
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if ((!(null === $_error_))) {
            // line 16
            echo "

\t\t    
\t\t";
        }
        // line 20
        echo "\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "    </div>
    <!-- /container -->
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->

<!-- Placed at the end of the document so the pages load faster -->
<script src=\"/bootstrap/js/jquery-1.7.2.min.js\"></script>
<script src=\"/bootstrap/js/excanvas.min.js\"></script> 
<script src=\"/bootstrap/js/chart.min.js\" type=\"text/javascript\"></script>
<script src=\"/bootstrap/js/bootstrap.js\"></script>
<script language=\"javascript\" type=\"text/javascript\" src=\"/bootstrap/js/full-calendar/fullcalendar.min.js\"></script>
<script src=\"/js/jquery_ui/jquery-ui.js\"></script>
<link href=\"/js/jquery_ui/jquery-ui.css\" rel=\"stylesheet\">

";
        // line 37
        $this->displayBlock('javascript', $context, $blocks);
        // line 38
        echo "

<div id=\"dialog-message\" title=\"Zpráva o prodeji\" style='display: none;'>
  <p>
    <span class=\"ui-icon ui-icon-closethick\" style=\"float:left; margin:0 7px 50px 0;\"></span>
    <span id='window_message'></span>
  </p>
</div>

<script src=\"/bootstrap/js/base.js\"></script> 

</body>
</html>";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
    }

    // line 37
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  94 => 20,  78 => 38,  76 => 37,  58 => 21,  55 => 20,  49 => 16,  46 => 15,  37 => 9,  33 => 8,  26 => 4,  21 => 1,);
    }
}


/* index.tpl */
class __TwigTemplate_c973a3da20c4ce9279a116b1fca4292c5a66e7a060f7a7935082ea3f55aa0eea_917086013 extends Twig_Template
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
        return "index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  94 => 20,  78 => 38,  76 => 37,  58 => 21,  55 => 20,  49 => 16,  46 => 15,  37 => 9,  33 => 8,  26 => 4,  21 => 1,);
    }
}


/* index.tpl */
class __TwigTemplate_c973a3da20c4ce9279a116b1fca4292c5a66e7a060f7a7935082ea3f55aa0eea_2002851060 extends Twig_Template
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
        return "index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  94 => 20,  78 => 38,  76 => 37,  58 => 21,  55 => 20,  49 => 16,  46 => 15,  37 => 9,  33 => 8,  26 => 4,  21 => 1,);
    }
}


/* index.tpl */
class __TwigTemplate_c973a3da20c4ce9279a116b1fca4292c5a66e7a060f7a7935082ea3f55aa0eea_504690615 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("menu.tpl");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "menu.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  94 => 20,  78 => 38,  76 => 37,  58 => 21,  55 => 20,  49 => 16,  46 => 15,  37 => 9,  33 => 8,  26 => 4,  21 => 1,);
    }
}
