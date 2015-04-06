<?php
  $itemID = intVal($_POST['item_id']);
  $itemSID = intVal($_POST['item_subid']);
  $qty = intVal($_POST['qty']);
  
  $inventory = new Inventory();
  $inventory -> sellItem($_SESSION['playerId'], $itemID, $itemSID, $qty);