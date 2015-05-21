<?php

/* stats.tpl */
class __TwigTemplate_acca265547b3216da3af94cc7b4a5091cb3d1b665616778db6c9cc0360a3b832 extends Twig_Template
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
        echo "\t<h1>";
        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_lang_, "stats_h1", array()), "html", null, true);
        echo "</h1>

";
    }

    public function getTemplateName()
    {
        return "stats.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  28 => 5,);
    }
}
