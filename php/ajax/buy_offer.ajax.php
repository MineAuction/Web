<?php
	require_once '../../init.inc.php';
	require_once '../Offers.class.php';
	
	// read $_GET
  $rowID = intVal(@$_GET['row_id']);
  $qty = intVal(@$_GET['qty']);
	
	$out = Offers::buyOffer($rowID, $qty);
	
	// return back to template
	echo json_encode(array(
		'response' => $locale->translate($out), 
		'result' => $out, 
	));	
	exit();
	