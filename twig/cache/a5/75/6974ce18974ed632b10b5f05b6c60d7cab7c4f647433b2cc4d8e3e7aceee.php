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
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        echo "\t\t

\t<h1>Nabídky</h1>

\t<div class=\"tabbable\">
\t\t<ul class=\"nav nav-tabs\">
      <li class=\"active\"><a href=\"#offer_buy\" data-toggle=\"tab\">Koupit</a></li>
\t\t\t<li><a href=\"#offer_your\" data-toggle=\"tab\">Tvoje</a></li>
\t\t\t<li><a href=\"#offer_all\" data-toggle=\"tab\">Všechny</a></li>
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
        // line 32
        if (isset($context["myoffers"])) { $_myoffers_ = $context["myoffers"]; } else { $_myoffers_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_myoffers_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "\t\t\t\t\t\t<tr><td   ><img  class=\"img1\" src='http://achievecraft.com/tools/avatar/32/";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "playerName", array()), "html", null, true);
            echo ".png' alt='";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "playerName", array()), "html", null, true);
            echo "'>";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "playerName", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><img class=\"img1\" src='../ikony/";
            // line 34
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
            // line 35
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "qty", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 36
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "price", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t<td>";
            // line 37
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "priceAll", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t<td class='to_right'>
\t\t\t\t\t\t\t\t<span class=\"input-prepend input-append\">
\t\t\t\t\t\t\t\t\t<span class=\"add-on\">ks</span>
\t\t\t\t\t\t\t\t\t<input class=\"span2 input1\" id=\"appendedPrependedInput\" type=\"text\" placeholder='Počet'>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<button class='btn btn-primary'>Koupit</button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"offer_all\" >
\t\t\t\t<table class=\"table table-bordered\"  id=\"offertable\"  class=\"tablesorter\" > 
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
        // line 63
        if (isset($context["offers"])) { $_offers_ = $context["offers"]; } else { $_offers_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_offers_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 64
            echo "\t\t\t\t\t\t<tr><td   ><img  class=\"img1\" src='http://achievecraft.com/tools/avatar/32/";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "playerName", array()), "html", null, true);
            echo ".png' alt='";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "playerName", array()), "html", null, true);
            echo "'>";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "playerName", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><img class=\"img1\" src='../ikony/";
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
\t\t\t\t\t\t\t<td>";
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
\t\t\t\t\t\t\t\t\t<span class=\"add-on\">ks</span>
\t\t\t\t\t\t\t\t\t<input class=\"span2 input1\" id=\"appendedPrependedInput\" type=\"text\" placeholder='Počet'>
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
\t\t\t<div class=\"tab-pane active\" id=\"offer_buy\">
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
        return array (  194 => 78,  177 => 68,  172 => 67,  167 => 66,  156 => 65,  144 => 64,  139 => 63,  121 => 47,  104 => 37,  99 => 36,  94 => 35,  83 => 34,  71 => 33,  66 => 32,  37 => 7,  32 => 4,  29 => 3,);
    }
}
