<?php

/* logs.tpl */
class __TwigTemplate_c089f6eee39415221626b17b3149a474d696a1368efdf641246c07a7b79e5af9 extends Twig_Template
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
        echo "\t<h1 style=\"text-alig:center\">Log</h1>
  <table class=\"table table-bordered\" id='log'>
    <thead>
      <tr>
\t\t\t\t<th style='width: 100px;'>Time</th>
\t\t\t\t<th style='width: 50px;'>Komponenta</th>
\t\t\t\t<th>Text</th>
\t\t\t</tr>
    </thead>
    <tbody>
    
    ";
        // line 15
        if (isset($context["logs"])) { $_logs_ = $context["logs"]; } else { $_logs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_logs_);
        foreach ($context['_seq'] as $context["_key"] => $context["logs"]) {
            // line 16
            echo "      <tr class=\"";
            if (isset($context["logs"])) { $_logs_ = $context["logs"]; } else { $_logs_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_logs_, "level", array()), "html", null, true);
            echo "\">
        <td>";
            // line 17
            if (isset($context["logs"])) { $_logs_ = $context["logs"]; } else { $_logs_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_logs_, "time", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 18
            if (isset($context["logs"])) { $_logs_ = $context["logs"]; } else { $_logs_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_logs_, "component", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            if (isset($context["logs"])) { $_logs_ = $context["logs"]; } else { $_logs_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_logs_, "text", array()), "html", null, true);
            echo "</td> 
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    
    </tbody>
  </table>
";
    }

    public function getTemplateName()
    {
        return "logs.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  65 => 19,  60 => 18,  55 => 17,  49 => 16,  44 => 15,  31 => 4,  28 => 3,);
    }
}
