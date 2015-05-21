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
        echo "  <h1>";
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "inventory_h1", array()), "html", null, true);
        echo "</h1>
  <table class=\"table table-bordered\" id='table_inventory' class=\"tablesorter\">
    <thead>
      <tr>
\t\t\t\t<th>";
        // line 12
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "item", array()), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 13
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "have_pc", array()), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 14
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "max_price", array()), "html", null, true);
        echo "</th>
\t\t\t\t<th style='width: 350px;'>";
        // line 15
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "available_actions", array()), "html", null, true);
        echo "</th>
\t\t\t</tr>
    </thead>
    <tbody>
    
    ";
        // line 20
        if (isset($context["inv"])) { $_inv_ = $context["inv"]; } else { $_inv_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_inv_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "      <tr>
        <td>
          <input type='hidden' class='item_id' value='";
            // line 23
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "itemId", array()), "html", null, true);
            echo "'>
          <input type='hidden' class='item_subid' value='";
            // line 24
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "itemDamage", array()), "html", null, true);
            echo "'>
          <img src='../items_icons/";
            // line 25
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
            // line 27
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "qty", array()), "html", null, true);
            echo "</td>
\t\t<td></td>
        <td class='to_right'>
          <span class=\"input-prepend input-append\">
            <span class=\"add-on\">";
            // line 31
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "pieces", array()), "html", null, true);
            echo "</span>
            <input class=\"span2 input1 items_count\" type=\"text\" placeholder='";
            // line 32
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "qty", array()), "html", null, true);
            echo "' required>
          </span>                                         
          <span class=\"input-prepend input-append\">
            <span class=\"add-on\">";
            // line 35
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "currency", array()), "html", null, true);
            echo "</span>
            <input class=\"span2 input1 items_price\" id=\"appendedPrependedInput\" type=\"text\" placeholder='";
            // line 36
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "price_pc", array()), "html", null, true);
            echo "' required>
          </span>
          <button class='btn btn-primary sell'>";
            // line 38
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "sell", array()), "html", null, true);
            echo "</button>
          <button class='btn btn-success' ";
            // line 39
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
        // line 43
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
        return array (  154 => 43,  140 => 39,  135 => 38,  129 => 36,  124 => 35,  117 => 32,  112 => 31,  104 => 27,  92 => 25,  87 => 24,  82 => 23,  78 => 21,  73 => 20,  64 => 15,  59 => 14,  54 => 13,  49 => 12,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
