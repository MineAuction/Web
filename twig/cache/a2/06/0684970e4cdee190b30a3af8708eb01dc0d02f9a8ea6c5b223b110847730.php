<?php

/* items.tpl */
class __TwigTemplate_a2060684970e4cdee190b30a3af8708eb01dc0d02f9a8ea6c5b223b110847730 extends Twig_Template
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
        echo "  <h1><h1>";
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "items_h1", array()), "html", null, true);
        echo "</h1></h1>
  <table class=\"table table-bordered\">
    <thead>
      <tr>
\t\t\t\t<th>";
        // line 8
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "item", array()), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 9
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "offers_count", array()), "html", null, true);
        echo "</th>
\t\t\t\t<th>item ID</th>
\t\t\t\t<th>sub ID</th>
\t\t\t</tr>
    </thead>
    <tbody>
    
\t\t";
        // line 16
        $context["count"] = 0;
        // line 17
        echo "    ";
        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_items_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "      <tr>
        <td>
          <img src='../ikony/";
            // line 20
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
\t\t\t\t<td>";
            // line 22
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "count", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "itemID", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 24
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "itemSubID", array()), "html", null, true);
            echo "</td>
      </tr>
\t\t\t";
            // line 26
            if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
            $context["count"] = ($_count_ + 1);
            // line 27
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t<p>Zobrazuji ";
        if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
        echo twig_escape_filter($this->env, $_count_, "html", null, true);
        echo " předmětů.</p>
    
    </tbody>
  </table>
";
    }

    public function getTemplateName()
    {
        return "items.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 28,  99 => 27,  96 => 26,  90 => 24,  85 => 23,  80 => 22,  68 => 20,  64 => 18,  58 => 17,  56 => 16,  45 => 9,  40 => 8,  31 => 4,  28 => 3,);
    }
}
