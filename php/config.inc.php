<?php
  //error_reporting(E_ALL);
	date_default_timezone_set('Europe/Prague');
  DB::connect('mysql:dbname=c2auction;host=lukas.jinonice.cz;port=3306', 'c2lukas', 'belina');
	
	if(!headers_sent()) {
		header('Content-Type: text/html; charset=utf-8');
	}
	
  //(session_status() == PHP_SESSION_NONE) PHP >= 5.4.0
	if(session_id() == ''){;
		session_start();
	}
	
	# definice nazvu tabulek
	define("TABLE_ITEMS", "ma_items");
  define("TABLE_PLAYERS", "ma_players");
  define("TABLE_ITEMS_LIST", "items_list");
  define("TABLE_MENU", "menu_items");
  define("TABLE_BAN", "ma_bans");
   define("TABLE_OFFERS", "ma_offers");
   define("TABLE_LOGS", "ma_logs");
  # settings - GLOBALS je prasarna, prosim neinspirovat se!!!
  $settings = array();
  $settings['pageTitle'] = "MineAuction";
  $settings['authors'] = "Web: Sekiphp, DvnBthlo; Java: Sognus";
  $GLOBALS['settings'] = $settings;
                                              