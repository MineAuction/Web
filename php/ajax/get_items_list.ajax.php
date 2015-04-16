<?php
	/**
	 * This page get all items like inputed string.
	 * Output is in JSON format.
	 */
	require_once '../../init.inc.php';
	
	$find = @$_GET['find'];
	if(strLen($find) < 3){
			die();
	}
	
  $str = exPlode(" ", $find);
  $find = "%" . imPlode("%", $str) . "%";
	
	$sql = "
		SELECT *, name AS label  
		FROM `" . TABLE_ITEMS_LIST . "` 
		WHERE `itemSubID` != -1
		AND name LIKE :find 
		LIMIT 15
	";
	$arr = DB::assocAll(DB::query($sql, array(":find" => $find)));
	
	echo json_encode($arr);
	exit();