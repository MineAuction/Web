<?php
	# name of all tables in database
	define("TABLE_ITEMS", "ma_items");
  define("TABLE_PLAYERS", "ma_players");
  define("TABLE_ITEMS_LIST", "ma_items_list");
  define("TABLE_MENU", "ma_menu_items");
	define("TABLE_MENU_LANG", "ma_menu_locale");
  define("TABLE_OFFERS", "ma_offers");
  define("TABLE_LOGS", "ma_logs");
  

  # settings - $GLOBALS - global visibility in project
	# please don't change this array
  $settings = array();
	$settings['currency'] = "£"; # £, $, €
	$settings['maxPrice'] = "140"; // 140 = 140%
  $settings['pageTitle'] = "MineAuction";
	$settings['default_lang'] = "en";
  $GLOBALS['settings'] = $settings;
	
	
	# DB config MineAuction
	$db_ma = array(
		"server" => "", 
		"name" => "", 
		"user" => "", 
		"pass" => "", 	
	);
	
	# DB config economy plugin
	# MineAuction need to get data from another plugin
	$db_economy = array(
		"server" => "", 
		"name" => "", 
		"user" => "", 
		"pass" => "", 	
	);	
	$db_economy_addons = array(
		"table" => "aukce_ajconomy", 
		"money" => "monej", 
		"uuid" => "uuajdy", 	
	);
	$GLOBALS['economy'] = $db_economy_addons;
