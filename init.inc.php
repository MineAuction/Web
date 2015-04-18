<?php
	# set charset
	if(!headers_sent()) {		
		header('Content-Type: text/html; charset=utf-8');		
	}
	
	# session
	if(session_id() == ''){
		session_start();
	}
	
	# include important libraries in each section
	require_once 'config.inc.php';
	require_once 'php/lib/DB.class.php';
	require_once 'php/lib/DB2.class.php';
	require_once 'php/lib/Locale.class.php';  
	require_once 'php/int/IMain.interface.php';
	
	# connect to DBs (auction & economy plugin)
	DB::connect($db_ma);
	DB2::connect($db_economy);
	