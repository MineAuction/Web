<?php
	if(!headers_sent()) {		
		header('Content-Type: text/html; charset=utf-8');		
	}
	date_default_timezone_set('Europe/Prague');
  
  require_once 'php/lib/DB.class.php';
	require_once 'php/lib/Locale.php';  

  DB::connect();
	$locale = new Locale("lang/");
	$locale->setLocale('cz');
	$GLOBALS['locale'] = $locale;
	

  //(session_status() == PHP_SESSION_NONE) //PHP >= 5.4.0
	if(session_id() == ''){
		session_start();
	}
	

	# name of all tables in database
	define("TABLE_ITEMS", "ma_items");
  define("TABLE_PLAYERS", "ma_players");
  define("TABLE_ITEMS_LIST", "items_list");
  define("TABLE_MENU", "menu_items");
  define("TABLE_OFFERS", "ma_offers");
  define("TABLE_LOGS", "ma_logs");
  

  # settings - $GLOBALS - global visibility in project
	# please don't change this array
  $settings = array();
  $settings['pageTitle'] = "MineAuction";
  $settings['authors'] = "Web: Sekiphp, DvnBthlo; Java: Sognus";
  $GLOBALS['settings'] = $settings;
