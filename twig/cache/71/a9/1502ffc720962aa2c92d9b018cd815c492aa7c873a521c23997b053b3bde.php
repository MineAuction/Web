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
        echo "  <h1 style=\"text-alig:center\">Tvůj inventář</h1>
  <table class=\"table table-bordered\" id='table_inventory'>
    <thead>
      <tr>
\t\t\t\t<th>Předmět</th>
\t\t\t\t<th>Máš kusů</th>
\t\t\t\t<th>Max cena</th>
\t\t\t\t<th style='width: 350px;'>Prodat</th>
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
          <img src='../ikony/";
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
\t\t\t\t<td></td>
        <td class='to_right'>
          <span class=\"input-prepend input-append\">
            <span class=\"add-on\">ks</span>
            <input class=\"span2 input1 items_count\" type=\"text\" placeholder='Počet'>
          </span>                                         
          <span class=\"input-prepend input-append\">
            <span class=\"add-on\">\$</span>
            <input class=\"span2 input1 items_price\" id=\"appendedPrependedInput\" type=\"text\" placeholder='Cena/ks'>
          </span>
          <button class='btn btn-primary sell'>Prodat</button>
          <button class='btn btn-success' ";
            // line 39
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "getauction", array()), "html", null, true);
            echo ">Dražit</button>
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
        return array (  112 => 43,  101 => 39,  85 => 27,  73 => 25,  68 => 24,  63 => 23,  59 => 21,  54 => 20,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
