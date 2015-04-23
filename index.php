<?php
  require_once 'init.inc.php';
  require_once 'twig/lib/Twig/Autoloader.php';
  require_once 'php/lib/LoadClass.php';
	# require all files in directory php except file in sub-directories
  spl_autoload_register("LoadClass");

  # twig doc: http://twig.sensiolabs.org/doc/api.html 
  $options = array(
    'debug' => true, 
    'cache' => 'twig/cache',
  );
  Twig_Autoloader::register();  
	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader, $options); 
  
  $main = new Main($locale);
	$template = $twig->loadTemplate($main->tpl);
	echo $template->render($main->render); 
