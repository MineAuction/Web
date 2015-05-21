<?php

/* menu.tpl */
class __TwigTemplate_520e9f925661efd1c1439e38140dcfbd4eb68048e487156e5cd5edc0ddb5fd97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('menu', $context, $blocks);
    }

    public function block_menu($context, array $blocks = array())
    {
        // line 2
        echo "
  <div class=\"subnavbar\">
    <div class=\"subnavbar-inner\"> 
      <div class=\"container\">
        <ul class=\"mainnav\">          
          ";
        // line 7
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_menu_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "\t\t\t\t\t\t";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (twig_test_iterable($this->getAttribute($_item_, "submenu", array()))) {
                // line 9
                echo "\t\t\t\t\t\t\t<li class=\"dropdown ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "active", array()), "html", null, true);
                echo "\"><a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> <i class=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "ico", array()), "html", null, true);
                echo "\"></i><span>";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name", array()), "html", null, true);
                echo "</span> <b class=\"caret\"></b></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t";
                // line 11
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_item_, "submenu", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 12
                    echo "\t\t\t\t\t\t\t\t\t<li><a href=\"?page=";
                    if (isset($context["subitem"])) { $_subitem_ = $context["subitem"]; } else { $_subitem_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_subitem_, "url", array()), "html", null, true);
                    echo "\">";
                    if (isset($context["subitem"])) { $_subitem_ = $context["subitem"]; } else { $_subitem_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_subitem_, "name", array()), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "            
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            } else {
                // line 16
                echo "\t\t\t\t\t\t\t<li class=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "active", array()), "html", null, true);
                echo "\"><a href=\"?page=";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "url", array()), "html", null, true);
                echo "\"><i class=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "ico", array()), "html", null, true);
                echo "\"></i><span>";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name", array()), "html", null, true);
                echo "</span> </a></li> 
\t\t\t\t\t\t";
            }
            // line 18
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </ul>
      </div> 
      <!-- /container -->  
    </div>           
    <!-- /subnavbar-inner --> 
  </div>

";
    }

    public function getTemplateName()
    {
        return "menu.tpl";
    }

    public function getDebugInfo()
    {
        return array (  100 => 19,  94 => 18,  78 => 16,  73 => 13,  60 => 12,  55 => 11,  42 => 9,  38 => 8,  33 => 7,  26 => 2,  20 => 1,);
    }
}
