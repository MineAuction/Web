<?php
    global $db_ma, $db_economy;

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
	require_once 'php/lib/LocaleTranslation.class.php';
	require_once 'php/lib/ItemMeta.class.php';
	require_once 'php/int/IMain.interface.php';

	# connect to DBs (auction & economy plugin)
	DB::connect($db_ma);
	DB2::connect($db_economy);

	# language
    $lang = $_SESSION['playerLang'] ?? 'cz';
	$locale = new LocaleTranslation();
	$locale -> setDefaultLang($GLOBALS['settings']['default_lang']);
	$locale -> setLocale($lang);
	//print_r($locale->getTable());