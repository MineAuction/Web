<?php

/* header.tpl */
class __TwigTemplate_413da627aa3ba1949e3cc41517637b11dfa31918d4c6ceaeb093ea411811721f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "
  <div class=\"navbar navbar-fixed-top\">
    <div class=\"navbar-inner\"> 
      <div class=\"container\">  

        <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
          <span class=\"icon-bar\"></span><span class=\"icon-bar\"></span>  
          <span class=\"icon-bar\"></span>
        </a>
        <a class=\"brand\" href=\"?page=inventory\">
          <img src='/images/dia_small.png' alt='Diamond'>
          <span>";
        // line 13
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "pageTitle", array()), "html", null, true);
        echo "</span>   
        </a>   

        <div class=\"nav-collapse\"> 
          <ul class=\"nav pull-right\">                  
            ";
        // line 18
        if (isset($context["session"])) { $_session_ = $context["session"]; } else { $_session_ = null; }
        if (isset($context["pageURL"])) { $_pageURL_ = $context["pageURL"]; } else { $_pageURL_ = null; }
        if ($this->getAttribute($_session_, "playerID", array())) {
            // line 19
            echo "              <li>
                 <a class=\"dropdown-toggle\"><i class=\"icon-credit-card\"></i> ";
            // line 20
            if (isset($context["player_money"])) { $_player_money_ = $context["player_money"]; } else { $_player_money_ = null; }
            echo twig_escape_filter($this->env, $_player_money_, "html", null, true);
            echo " ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "currency", array()), "html", null, true);
            echo "</a>              
              </li>
              <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-user\"></i> ";
            // line 22
            if (isset($context["session"])) { $_session_ = $context["session"]; } else { $_session_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_session_, "playerName", array()), "html", null, true);
            echo "<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">  
                  <li><a href=\"index.php?page=settings\">Setttings</a></li>  
                  <li><a href=\"index.php?page=logout\">Logout</a></li>  
                </ul>   
              </li> 
            ";
        } elseif (($_pageURL_ != "faq")) {
            // line 29
            echo "              <li class=\"\">\t\t\t\t\t\t
  \t\t\t\t\t\t  <a href=\"index.php?page=faq\" class=\"\"><i class='icon-comment'></i> FAQ</a>
  \t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        } else {
            // line 33
            echo "\t\t\t\t\t\t\t<li class=\"\">\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"index.php?page=login\" class=\"\"><i class='icon-key'></i> Login</a>
\t\t\t\t\t\t\t</li>
            ";
        }
        // line 36
        echo " 
          </ul>  
        </div>  \t\t\t\t
        <!--/.nav-collapse --> 
      </div>
      <!-- /container -->   
    </div>  
    <!-- /navbar-inner -->   
  </div>
  <!-- /navbar --> 

";
    }

    public function getTemplateName()
    {
        return "header.tpl";
    }

    public function getDebugInfo()
    {
        return array (  87 => 36,  81 => 33,  75 => 29,  64 => 22,  55 => 20,  52 => 19,  48 => 18,  39 => 13,  26 => 2,  20 => 1,);
    }
}
