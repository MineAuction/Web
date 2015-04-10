<?php

/* offer.tpl */
class __TwigTemplate_a5756974ce18974ed632b10b5f05b6c60d7cab7c4f647433b2cc4d8e3e7aceee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.tpl");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo " <h1 style=\"text-alig:center\">Nabídky ke koupi</h1>
  <table class=\"table table-bordered\">
    <thead>
      <tr>
\t\t\t\t<th>Prodejce</th>
\t\t\t\t<th>Item</th>
\t\t\t\t<th>Počet</th>
\t\t\t\t<th>Cena 1 itemu</th>
\t\t\t\t<th>Cena celkem</th>
\t\t\t\t<th>Koupit</th>
\t\t\t</tr>
    </thead>
    <tbody>
      ";
        // line 17
        if (isset($context["offers"])) { $_offers_ = $context["offers"]; } else { $_offers_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_offers_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "        <tr><td   ><img  class=\"img1\" src='http://achievecraft.com/tools/avatar/32/";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "playerName", array()), "html", null, true);
            echo ".png' alt='";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "playerName", array()), "html", null, true);
            echo "'>";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "playerName", array()), "html", null, true);
            echo "</td>
        <td><img class=\"img1\" src='../ikony/";
            // line 19
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "img", array()), "html", null, true);
            echo "' alt='";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name", array()), "html", null, true);
            echo "'>";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 20
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "qty", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "price", array()), "html", null, true);
            echo " </td>
        <td>";
            // line 22
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "priceAll", array()), "html", null, true);
            echo " </td>
        <td class='to_right'>
        <span class=\"input-prepend input-append\">
         <span class=\"add-on\">ks</span>
            <input class=\"span2 input1\" id=\"appendedPrependedInput\" type=\"text\" placeholder='Počet'>
          </span>
          <button class='btn btn-primary'>Koupit</button>
        </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </tbody>
  </table>
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
        return array (  101 => 32,  84 => 22,  79 => 21,  74 => 20,  63 => 19,  51 => 18,  46 => 17,  31 => 4,  28 => 3,);
    }
}
