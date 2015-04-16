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
\t
  <div class=\"span6\">
    <div class=\"widget\">
      <div class=\"widget-header\"> <i class=\"icon-cogs\"></i>
        <h3>Nastavení</h3>
      </div>
      
      <div class=\"widget-content\">
        <table>
          <tr>
            <th>Výchozí jazyk:</th>
            <td>
\t\t\t\t\t\t\t<select name='lang'>
\t\t\t\t\t\t\t\t<option value='cz'>Czech (Česky)</option>
\t\t\t\t\t\t\t\t<option value='en'>English (English)</option>
\t\t\t\t\t\t\t</select>
            </td>
          </tr>
          <tr>
            <td colspan='2' class='center'><button class='btn btn-primary btn-large'>Nastavit</button></td>
          </tr>
        </table>
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
        return array (  34 => 7,  31 => 6,  28 => 5,);
    }
}
