<?php

/* settings.tpl */
class __TwigTemplate_b8707cd533069c8870eaa04e448d847ac5c961127d9f3d97724165680ad671d1 extends Twig_Template
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t<img src=\"https://minotar.net/body/";
        // line 7
        if (isset($context["session"])) { $_session_ = $context["session"]; } else { $_session_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_session_, "playerName", array()), "html", null, true);
        echo "/100.png\" alt='";
        if (isset($context["session"])) { $_session_ = $context["session"]; } else { $_session_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_session_, "playerName", array()), "html", null, true);
        echo "' class='player_img'>
\t";
        // line 8
        if (isset($context["session"])) { $_session_ = $context["session"]; } else { $_session_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_session_, "playerLang", array()), "html", null, true);
        echo "
  <div class=\"span6\">
    <div class=\"widget\">
      <div class=\"widget-header\"> <i class=\"icon-cogs\"></i>
        <h3>";
        // line 12
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "settings_h1", array()), "html", null, true);
        echo "</h3>
      </div>
      
      <div class=\"widget-content\">
\t\t\t\t<form method='post'>
\t\t\t\t\t<table>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>";
        // line 19
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "default_lang", array()), "html", null, true);
        echo ":</th>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<select name='lang'>
\t\t\t\t\t\t\t\t\t";
        // line 22
        if (isset($context["settings_langs"])) { $_settings_langs_ = $context["settings_langs"]; } else { $_settings_langs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_settings_langs_);
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 23
            echo "\t\t\t\t\t\t\t\t\t\t<option value='";
            if (isset($context["row"])) { $_row_ = $context["row"]; } else { $_row_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_row_, "lang", array()), "html", null, true);
            echo "' ";
            if (isset($context["row"])) { $_row_ = $context["row"]; } else { $_row_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_row_, "selected", array()), "html", null, true);
            echo ">";
            if (isset($context["row"])) { $_row_ = $context["row"]; } else { $_row_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_row_, "description", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan='2' class='center'><button class='btn btn-primary btn-large' type='submit'>";
        // line 29
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "set", array()), "html", null, true);
        echo "</button></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t </form>
      </div>
    </div>
  </div>    
";
    }

    public function getTemplateName()
    {
        return "settings.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 29,  89 => 25,  73 => 23,  68 => 22,  61 => 19,  50 => 12,  42 => 8,  34 => 7,  31 => 6,  28 => 5,);
    }
}
