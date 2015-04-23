<!DOCTYPE html>
<html lang="en">
  <head>
    {% embed "html_head.tpl" %}{% endembed %} 
    <link href="/bootstrap/css/pages/faq.css" rel="stylesheet" type="text/css">
  </head>
<body>

	{% embed "header.tpl" %}{% endembed %}    

<div class="main">	
	<div class="main-inner">
	  <div class="container" style='margin-top: 26px;'>    
	    <div class="row">	      	
				<div class="span12">	      		
	      	<div class="widget">		
							
						<div class="widget-header">
							<i class="icon-pushpin"></i>
							<h3>FAQ</h3>
						</div> <!-- /widget-header -->
					
						<div class="widget-content">						
							<h3>Search</h3>						
							<br />		
								
							<ol class="faq-list">							
								<li>
									<h4>Kam jsem se to dostal?</h4>
									<p>Toto je webový obchod pro Minecraft server na němž můžeš kupovat a prodát itemy, jenž získáte v hře a zvyšovat tak stav vašeho herního peněžního účtu. </p>
                  <!--Stránka, na které právě nyní čteš tuto nápovědu je webový obchod, který je napojený na Minecraft server. Prostřednictvím této služby mohou mezi sebou obchodovat 
									i hráči, kteří jsou od sebe vzdáleni tisíce kilometrů ve velkém herním světě. Jednoduše na jedné straně vložíte předměty, prodáte a osoba, jenž je koupila si je vezme z 
									aukčního bodu poblíž místa svého bydliště. Je to opravdu jednoduché!-->										
								</li>
								
								<li>								
									<h4>Jak si vytvořit účet do MineAuction?</h4>
									<p>Účet vytvoříte příkazem přímo ve hře a to jednoduchým príkazem <strong>/ma pass tvojeheslo</strong>, kde nahradíš <strong>tvojeheslo</strong> svým heslem, které budeš používat pro příhlášení do aukce.. Přihlašovací jméno bude poté tvůj stávající nick ve hře.</p>										
								</li>
                <!-- /Heslo pro přihlašování k webovému rozhraní pluginu MineAuction můžeš získat ve hře. Stačí jenom napsat do chatu příkaz ve tvaru: <strong>/ma pass tvojeheslo</strong>, kde řetězec tvojeheslo nahradíš svým heslem.-->
								<li>								
									<h4>Jak tento plugin funguje?</h4>
									<p>Tento plugin je tvořen webovým rozhraním a minecraft pluginem. Webová část slouží ke kupování a prodávání itemů, jenž ve hře vložíš do tvého aukčního inventáře.  </p>										
								</li>		
                <!-- /Tento plugin sestává ze dvou částí. První částí je in-game, která běží na herním serveru společně s hrou Minecraft. Pomocí této části můžeš přistupovat k virtuálnímu inventáři, kam si můžeš vkládat předměty nebo je 
									posléze i vybírat. Druhou částí je webový klient (tato stránka), který umožňuje manipulaci s předměty, které máš ve svém virtuálním inventáři. Předměty můžeš prodávat nebo, pokud jsou dostatečně cenné nabízet v aukci. -->
								<li>								
									<h4>Co je to aukční bod a jak jej vytvořím?</h4>
									<p></p>										
								</li>	

								<li>								
									<h4>Co dělat v případě nalezení chyby v MineAuction?</h4>
									<p>Pokud nalezneš chybu ve webové nebo serverové části programu, prosím nahlaš ji autorům, aby ji mohli co nejdříve vyřešit. Pokud chybu nahlašuješ můžeš připojit i krátký popis, jaké akce vedly k vyvolání hlášené chyby. 
									Chybu můžeš nahlásit <a href='http://github.com/Sekiphp/MineAuction/issues'>ZDE <span class='icon-github'></span></a></p>										
								</li>									
							</ol>
							
						
						</div> <!-- /widget-content -->						
					</div> <!-- /widget -->					
		    </div> <!-- /spa12 -->
	    </div> <!-- /row -->	
	  </div> <!-- /container -->    
	</div> <!-- /main-inner -->	    
</div> <!-- /main -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/bootstrap/js/jquery-1.7.2.min.js"></script>
<script src="/bootstrap/js/bootstrap.js"></script>
<script src="/bootstrap/js/base.js"></script>
<script src="/bootstrap/js/faq.js"></script>
<script>
	$(function () {		
		$('.faq-list').goFaq ();
	});
</script>
</body>
</html>