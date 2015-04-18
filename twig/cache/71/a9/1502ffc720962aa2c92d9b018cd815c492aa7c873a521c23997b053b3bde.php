<?php

/* inventory.tpl */
class __TwigTemplate_71a91502ffc720962aa2c92d9b018cd815c492aa7c873a521c23997b053b3bde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.tpl");

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascript($context, array $blocks = array())
    {
        // line 4
        echo "\t<script src=\"/js/inventory.js\"></script>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
    
  <h1>";
        // line 10
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "inventory_h1", array()), "html", null, true);
        echo "</h1>
  <table class=\"table table-bordered\" id='table_inventory' class=\"tablesorter\">
    <thead>
      <tr>
\t\t\t\t<th>";
        // line 14
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "item", array()), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 15
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "have_pc", array()), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 16
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "max_price", array()), "html", null, true);
        echo "</th>
\t\t\t\t<th style='width: 350px;'>";
        // line 17
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "available_actions", array()), "html", null, true);
        echo "</th>
\t\t\t</tr>
    </thead>
    <tbody>
    
    ";
        // line 22
        if (isset($context["inv"])) { $_inv_ = $context["inv"]; } else { $_inv_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_inv_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "      <tr>
        <td>
          <input type='hidden' class='item_id' value='";
            // line 25
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "itemId", array()), "html", null, true);
            echo "'>
          <input type='hidden' class='item_subid' value='";
            // line 26
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "itemDamage", array()), "html", null, true);
            echo "'>
          <img src='../ikony/";
            // line 27
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "img", array()), "html", null, true);
            echo "' alt='";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name", array()), "html", null, true);
            echo "' class=\"img1\">";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name", array()), "html", null, true);
            echo "
        </td>
        <td class='click_max items_qty'>";
            // line 29
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "qty", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td></td>
        <td class='to_right'>
          <span class=\"input-prepend input-append\">
            <span class=\"add-on\">";
            // line 33
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "pieces", array()), "html", null, true);
            echo "</span>
            <input class=\"span2 input1 items_count\" type=\"text\" placeholder='";
            // line 34
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "qty", array()), "html", null, true);
            echo "'>
          </span>                                         
          <span class=\"input-prepend input-append\">
            <span class=\"add-on\">";
            // line 37
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "currency", array()), "html", null, true);
            echo "</span>
            <input class=\"span2 input1 items_price\" id=\"appendedPrependedInput\" type=\"text\" placeholder='";
            // line 38
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "price_pc", array()), "html", null, true);
            echo "'>
          </span>
          <button class='btn btn-primary sell'>";
            // line 40
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "sell", array()), "html", null, true);
            echo "</button>
          <button class='btn btn-success' ";
            // line 41
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "getauction", array()), "html", null, true);
            echo ">";
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "auction", array()), "html", null, true);
            echo "</button>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    
    </tbody>
  </table>
";
    }

    public function getTemplateName()
    {
        return "inventory.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 45,  143 => 41,  138 => 40,  132 => 38,  127 => 37,  120 => 34,  115 => 33,  107 => 29,  95 => 27,  90 => 26,  85 => 25,  81 => 23,  76 => 22,  67 => 17,  62 => 16,  57 => 15,  52 => 14,  44 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
