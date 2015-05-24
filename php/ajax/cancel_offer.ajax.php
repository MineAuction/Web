<?php
  require_once '../../init.inc.php';
  require_once '../Offers.class.php';
  require_once '../Logger.class.php';
  
	// read $_GET
  $rowID = intVal(@$_GET['row_id']);

  // cancel
  $out = Offers::cancelOffer($rowID, $_SESSION['playerID']);
	
	// return back to template
	echo json_encode(array(
		'response' => $locale->translate($out), 
		'result' => $out, 
	));	
	exit();