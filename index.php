<?php
  ini_set('display_errors','on');
  require_once 'twig/lib/Twig/Autoloader.php';
  require_once 'php/autoloader.class.php';
  $a = new Autoloader();

	/**
	 * Pripravi sablonovaci system Twig; udajne bez cachovani
	 * Cesta k slozce s template je relativni od umisteni index.php
	 */        
  Twig_Autoloader::register();
	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader); 
  
  $main = new Main();
	$template = $twig->loadTemplate($main->tpl);
	echo $template->render($main->render); 
