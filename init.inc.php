<?php
	# set charset
	if(!headers_sent()) {		
		header('Content-Type: text/html; charset=utf-8');		
	}
	
	# session
	if(session_id() == ''){
		session_start();
	}
	
	# include libraries
	require_once 'config.inc.php';
	require_once 'php/lib/DB.class.php';
	require_once 'php/lib/DB2.class.php';
	require_once 'php/lib/Locale.class.php';  
	require_once 'php/lib/ItemMeta.class.php';  
	require_once 'php/int/IMain.interface.php';
	
	# connect to DBs (auction & economy plugin)
	DB::connect($db_ma);
	DB2::connect($db_economy);
	
	# language
	$locale = new Locale();
	$locale -> setDefaultLang($GLOBALS['settings']['default_lang']);	
	$locale -> setLocale($_SESSION['playerLang']);
	//print_r($locale->getTable());