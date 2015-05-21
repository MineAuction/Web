<?php

/* offer.tpl */
class __TwigTemplate_a5756974ce18974ed632b10b5f05b6c60d7cab7c4f647433b2cc4d8e3e7aceee extends Twig_Template
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
        echo "\t<script src=\"/js/findItem.jquery.js\"></script>
\t<script src=\"/js/offers.js\"></script>
\t<script>
\t//window.location.replace(\"ofre\");
\t</script>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        echo "\t\t

\t<h1><h1>";
        // line 13
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "offers_h1", array()), "html", null, true);
        echo "</h1></h1>

\t<div class=\"tabbable\">
\t\t<ul class=\"nav nav-tabs\">
      <li class=\"active\"><a href=\"#offer_buy\" data-toggle=\"tab\" class='tab'>Koupit</a></li>
\t\t\t<li><a href=\"#offer_your\" data-toggle=\"tab\" class='tab'>Tvoje</a></li>
\t\t\t<li><a href=\"#offer_all\" data-toggle=\"tab\" class='tab'>Všechny</a></li>
\t\t</ul>

\t\t<div class=\"tab-content\">
\t\t\t<div class=\"tab-pane\" id=\"offer_your\">
\t\t\t<table class=\"table table-bordered\"  id=\"offertable\"  class=\"tablesorter\" > 
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Prodejce</th>
\t\t\t\t\t\t\t<th>Item</th>
\t\t\t\t\t\t\t<th>Počet</th>
\t\t\t\t\t\t\t<th>Cena za kus</th>
\t\t\t\t\t\t\t<th>Cena celkem</th>
\t\t\t\t\t\t\t<th>Koupit</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 36
        if (isset($context["myoffers"])) { $_myoffers_ = $context["myoffers"]; } else { $_myoffers_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_myoffers_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 37
            echo "\t\t\t\t\t\t<tr>
              <td><img class=\"img1\" src='https://minotar.net/avatar/";
            // line 38
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "playerName", array()), "html", null, true);
            echo "/32' alt='";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "playerName", array()), "html", null, true);
            echo "'>";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "playerName", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><img class=\"img1\" src='../items_icons/";
            // line 39
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "img", array()), "html", null, true);
            echo "' alt='";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name", array()), "html", null, true);
            echo "'>";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 40
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "qty", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 41
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "price", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t<td>";
            // line 42
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "priceAll", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t<td class='to_right'><button class='btn btn-primary'>Zrušit</button></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"offer_all\" >
\t\t\t\t<table class=\"table table-bordered\" id=\"offertable\" class=\"tablesorter\"> 
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Prodejce</th>
\t\t\t\t\t\t\t<th>Item</th>
\t\t\t\t\t\t\t<th>Počet</th>
\t\t\t\t\t\t\t<th>Cena za kus</th>
\t\t\t\t\t\t\t<th>Cena celkem</th>
\t\t\t\t\t\t\t<th>Koupit</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 62
        if (isset($context["offers"])) { $_offers_ = $context["offers"]; } else { $_offers_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_offers_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 63
            echo "\t\t\t\t\t\t<tr>
              <td><img class=\"img1\" src='https://minotar.net/avatar/";
            // line 64
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "playerName", array()), "html", null, true);
            echo "/32' alt='";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "playerName", array()), "html", null, true);
            echo "'>";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "playerName", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><img class=\"img1\" src='../items_icons/";
            // line 65
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "img", array()), "html", null, true);
            echo "' alt='";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name", array()), "html", null, true);
            echo "'>";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td class='click_max'>";
            // line 66
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "qty", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 67
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "price", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t<td>";
            // line 68
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "priceAll", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t<td class='to_right'>
\t\t\t\t\t\t\t\t<span class=\"input-prepend input-append\">
\t\t\t\t\t\t\t\t\t<span class=\"add-on\">";
            // line 71
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "pieces", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<input class=\"span2 input1 items_count\" id=\"appendedPrependedInput\" type=\"text\" placeholder='Počet' required>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<button class='btn btn-primary'>Koupit</button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t<div class=\"tab-pane active\" id=\"offer_buy\">
        <div class=\"span6\">
          <div class=\"widget\">
            <div class=\"widget-header\"> <i class=\"icon-bookmark\"></i>
              <h3>Nakoupit předměty</h3>
            </div>
            
            <div class=\"widget-content\">
              <table>
                <tr>
                  <th>Vyber předmět:</th>
                  <td>
                    <span class=\"input-prepend input-append\">
                      <span class=\"add-on icon-search\"></span>
                      <input class=\"span2 input1\" name='buy_item' id=\"buy_item\" type=\"text\" placeholder='Zadejte název předmětu'>
                    </span>
                    <input type='hidden' id='buy_item_id' name='buy_item_id'>
                    <input type='hidden' id='buy_item_sid' name='buy_item_sid'>
                  </td>
                </tr>
                <tr>
                  <th>Počet:</th>
                  <td>
                    <span class=\"input-prepend input-append\">
                      <span class=\"add-on\">ks</span>
                      <input class=\"span2 input1\" name='buy_qty' id=\"buy_qty\" type=\"text\" placeholder='Kolik si přeješ koupit?'>
                    </span>
                  </td>
                </tr>
                <tr>
                  <th>Maximální cena:</th>
                  <td>
                    <span class=\"input-prepend input-append\">
                      <span class=\"add-on\">\$</span>
                      <input class=\"span2 input1\" name='buy_price' id=\"buy_price\" type=\"text\" placeholder='Cena/ks'>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td colspan='2' class='center'><button class='btn btn-primary btn-large'>Koupit</button></td>
                </tr>
              </table>
            </div>
          </div>
        </div>    
\t\t\t</div>
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "offer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 78,  190 => 71,  183 => 68,  178 => 67,  173 => 66,  162 => 65,  151 => 64,  148 => 63,  143 => 62,  125 => 46,  114 => 42,  109 => 41,  104 => 40,  93 => 39,  82 => 38,  79 => 37,  74 => 36,  47 => 13,  41 => 11,  32 => 4,  29 => 3,);
    }
}
