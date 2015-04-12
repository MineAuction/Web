<?php
	require_once '../../init.inc.php';
	
	$find = @$_GET['find'];
	//echo $find;
	
	$sql = "
		SELECT *, name AS label  
		FROM `items_list` 
		WHERE `itemSubID` != -1
		AND name LIKE '%".$find."%'
	";
	//echo $sql;
	$arr = DB::assocAll(DB::query($sql));
	
	echo json_encode($arr);

//http://pastebin.com/1xPjXah1
//http://jqueryui.com/autocomplete/#custom-data
//http://stackoverflow.com/questions/6070142/jquery-ui-formatting-the-autocomplete-results-add-image-possible