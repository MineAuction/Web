<?php

/* faq.tpl */
class __TwigTemplate_4eed6bcf1333bc4788f6953357ab1b7211d49a59c0e42324dd47f84ddf4c3635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    ";
        // line 4
        $this->env->loadTemplate("faq.tpl", "432226365")->display($context);
        echo " 
    <link href=\"/bootstrap/css/pages/faq.css\" rel=\"stylesheet\" type=\"text/css\">
  </head>
<body>

\t";
        // line 9
        $this->env->loadTemplate("faq.tpl", "579734694")->display($context);
        echo "    

<div class=\"main\">\t
\t<div class=\"main-inner\">
\t  <div class=\"container\" style='margin-top: 26px;'>    
\t    <div class=\"row\">\t      \t
\t\t\t\t<div class=\"span12\">\t      \t\t
\t      \t<div class=\"widget\">\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t\t\t<i class=\"icon-pushpin\"></i>
\t\t\t\t\t\t\t<h3>FAQ</h3>
\t\t\t\t\t\t</div> <!-- /widget-header -->
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"widget-content\">\t\t\t\t\t\t
\t\t\t\t\t\t\t<h3>Search</h3>\t\t\t\t\t\t
\t\t\t\t\t\t\t<br />\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<ol class=\"faq-list\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<h4>Kam jsem se to dostal?</h4>
\t\t\t\t\t\t\t\t\t<p>Toto je webový obchod pro Minecraft server na němž můžeš kupovat a prodát itemy, jenž získáte v hře a zvyšovat tak stav vašeho herního peněžního účtu. </p>
                  <!--Stránka, na které právě nyní čteš tuto nápovědu je webový obchod, který je napojený na Minecraft server. Prostřednictvím této služby mohou mezi sebou obchodovat 
\t\t\t\t\t\t\t\t\ti hráči, kteří jsou od sebe vzdáleni tisíce kilometrů ve velkém herním světě. Jednoduše na jedné straně vložíte předměty, prodáte a osoba, jenž je koupila si je vezme z 
\t\t\t\t\t\t\t\t\taukčního bodu poblíž místa svého bydliště. Je to opravdu jednoduché!-->\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<h4>Jak si vytvořit účet do MineAuction?</h4>
\t\t\t\t\t\t\t\t\t<p>Účet vytvoříte příkazem přímo ve hře a to jednoduchým príkazem <strong>/ma pass tvojeheslo</strong>, kde nahradíš <strong>tvojeheslo</strong> svým heslem, které budeš používat pro příhlášení do aukce.. Přihlašovací jméno bude poté tvůj stávající nick ve hře.</p>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
                <!-- /Heslo pro přihlašování k webovému rozhraní pluginu MineAuction můžeš získat ve hře. Stačí jenom napsat do chatu příkaz ve tvaru: <strong>/ma pass tvojeheslo</strong>, kde řetězec tvojeheslo nahradíš svým heslem.-->
\t\t\t\t\t\t\t\t<li>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<h4>Jak tento plugin funguje?</h4>
\t\t\t\t\t\t\t\t\t<p>Tento plugin je tvořen webovým rozhraním a minecraft pluginem. Webová část slouží ke kupování a prodávání itemů, jenž ve hře vložíš do tvého aukčního inventáře.  </p>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>\t\t
                <!-- /Tento plugin sestává ze dvou částí. První částí je in-game, která běží na herním serveru společně s hrou Minecraft. Pomocí této části můžeš přistupovat k virtuálnímu inventáři, kam si můžeš vkládat předměty nebo je 
\t\t\t\t\t\t\t\t\tposléze i vybírat. Druhou částí je webový klient (tato stránka), který umožňuje manipulaci s předměty, které máš ve svém virtuálním inventáři. Předměty můžeš prodávat nebo, pokud jsou dostatečně cenné nabízet v aukci. -->
\t\t\t\t\t\t\t\t<li>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<h4>Co je to aukční bod a jak jej vytvořím?</h4>
\t\t\t\t\t\t\t\t\t<p></p>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>\t

\t\t\t\t\t\t\t\t<li>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<h4>Co dělat v případě nalezení chyby v MineAuction?</h4>
\t\t\t\t\t\t\t\t\t<p>Pokud nalezneš chybu ve webové nebo serverové části programu, prosím nahlaš ji autorům, aby ji mohli co nejdříve vyřešit. Pokud chybu nahlašuješ můžeš připojit i krátký popis, jaké akce vedly k vyvolání hlášené chyby. 
\t\t\t\t\t\t\t\t\tChybu můžeš nahlásit <a href='http://github.com/Sekiphp/MineAuction/issues'>ZDE <span class='icon-github'></span></a></p>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</div> <!-- /widget-content -->\t\t\t\t\t\t
\t\t\t\t\t</div> <!-- /widget -->\t\t\t\t\t
\t\t    </div> <!-- /spa12 -->
\t    </div> <!-- /row -->\t
\t  </div> <!-- /container -->    
\t</div> <!-- /main-inner -->\t    
</div> <!-- /main -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"/bootstrap/js/jquery-1.7.2.min.js\"></script>
<script src=\"/bootstrap/js/bootstrap.js\"></script>
<script src=\"/bootstrap/js/base.js\"></script>
<script src=\"/bootstrap/js/faq.js\"></script>
<script>
\t\$(function () {\t\t
\t\t\$('.faq-list').goFaq ();
\t});
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "faq.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  24 => 4,  19 => 1,);
    }
}


/* faq.tpl */
class __TwigTemplate_4eed6bcf1333bc4788f6953357ab1b7211d49a59c0e42324dd47f84ddf4c3635_432226365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("html_head.tpl");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "html_head.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "faq.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  24 => 4,  19 => 1,);
    }
}


/* faq.tpl */
class __TwigTemplate_4eed6bcf1333bc4788f6953357ab1b7211d49a59c0e42324dd47f84ddf4c3635_579734694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("header.tpl");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "header.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "faq.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  24 => 4,  19 => 1,);
    }
}
