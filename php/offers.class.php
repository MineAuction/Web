<?php
class Offers{
  public static function offer(){
		$where = array(":playerID" => /* $_SESSION['playerID'] */ 12);
		
		// TODO: databazovy view nefunguje z neznamych pricin
		$sql = "
			SELECT ip.id AS offerId, p.playerName, p.id AS playerID, il.name, il.img, ip.qty, ip.price, ip.qty*ip.price AS priceAll, ip.itemId, ip.itemDamage    
			FROM items_list AS il 
			INNER JOIN ma_offers AS ip 
			INNER JOIN ma_players AS p 
			ON ip.itemID = il.itemID AND ip.itemDamage = il.itemSubID AND p.id = ip.playerID 
			WHERE playerID != :playerID
    ";
		
		$items = DB::assocAll(DB::query($sql, $where));
		//print_r($items);
    return $items;
  }
  
  // Insert offer into ma_offers and update mount items or delete items from ma_items
  public static function offerIn($itemID, $itemDamage, $qty, $price){
    $off = array(":itemID" => $itemID, ":itemDamage" => $itemDamage, ":playerID" =>  $_SESSION['playerID']);
    $offers = DB::assoc(DB::query("SELECT * FROM " . TABLE_ITEMS . " WHERE itemID = :itemID AND itemDamage = :itemDamage AND playerID = :playerID ", $off));
  if($qty <= $offers['qty']){
    if($qty == $offers['qty']) {
      DB::query("DELETE FROM " . TABLE_ITEMS . ' WHERE itemID = :itemID AND itemDamage = :itemDamage AND playerID = :playerID' ,$off );
    }else{
      $vys =  $offers['qty'] - $qty;
      $upd =  array(":itemID" => $itemID, ":itemDamage" => $itemDamage, ":playerID" => $_SESSION['playerID'], ":qty" => $vys);
      DB::query("UPDATE " .  TABLE_ITEMS . ' SET qty = :qty WHERE itemID = :itemID AND itemDamage = :itemDamage AND playerID = :playerID', $upd);
      $where = array(":playerName" => $_SESSION['playerName'],":itemID" => $itemID, ":itemDamage" => $itemDamage,":qty" => $qty,":price" => $price,":priceAll" => $qty * $price);
      DB::query("INSERT INTO " . TABLE_OFFERS . " (playerName, itemID, itemDamage, priceAll, price, qty) VALUES (:playerName, :itemID, :itemDamage, :priceAll, :price, :qty)", $where);
    }
    }else{
    
    }
}
  
  public static function offerBuy($playerName, $itemID, $itemDamage, $qty, $price){
  // $sql = "SELECT ip.qty, ip.playerName, ip.qty, p.money  FROM " . TABLE_ITEMS . " AS il INNER JOIN " . TABLE_OFFERS . " AS ip  INNER JOIN " . TABLE_PLAYERS . " AS p  WHERE p.playerID = :playerID ";$off = array(":itemID" => $itemID, ":itemDamage" => $itemDamage, ":playerName" => $playerName);
    
    
     $play = array("playerName" => $playerName);
       $play = array("playerID" => $_SESSION['playerID'],":itemID" => $itemID, ":itemDamage" => $itemDamage);
    $offers = DB::assoc(DB::query("SELECT * FROM " . TABLE_OFFERS . " WHERE itemID = :itemID AND itemDamage = :itemDamage AND playerName = :playerName", $off));
    $player =   DB::assoc(DB::query("SELECT * FROM " . TABLE_PLAYERS . " WHERE playerName = :playerName", $play));
    $plaItemy=   DB::assoc(DB::query("SELECT * FROM " . TABLE_ITEMS . " WHERE playerID = :playerID AND itemID = :itemID AND itemDamage = :itemDamage", $play));
    if($_SESSION['playerMoney'] >= $qty * $price AND $qty <= $offers['qty'] ){
      if($qty == $offers['qty']){
        
          $where = array(":playerName" => $playerName ,":itemID" => $itemID, ":itemDamage" => $itemDamage);
          DB::query("DELETE FROM " . TABLE_OFFERS . ' WHERE itemID = :itemID AND itemDamage = :itemDamage AND playerName = :playerName' ,$where);
        
          $updplay = array(":playerName" => $offers['playerName'], ":money" => $qty * $price + $player['money']);
          DB::query("UPDATE " .  TABLE_PLAYERS . ' SET money = :money WHERE playerName = :playerName', $updplay);
          
              if(!$plaItemy){
              $off = array(":itemID" => $itemID,":qty" => $qty, ":itemDamage" => $itemDamage, ":playerID" => $_SESSION['playerID']);
               DB::query("INSERT INTO " . TABLE_ITEMS . "(itemID, itemDamage, qty, playerID) VALUES(:itemID, :itemDamage,:qty,:playerID)", $off);
              
                
              }else{
                       $off = array(":itemID" => $itemID,":qty" => $qty + $plaItemy['qty'], ":itemDamage" => $itemDamage, ":playerID" => $_SESSION['playerID']);
              DB::query("UPDATE " .  TABLE_ITEMS . ' SET qty = :qty WHERE playerID = :playerID AND itemID = :itemID AND itemDamage = :itemDamage', $off);
               }
               
               
          $updof = array(":playerName" => $_SESSION['playerName'], ":money" => $_SESSION['playerMoney'] - $qty * $price);
          DB::query("UPDATE " .  TABLE_PLAYERS . ' SET money = :money WHERE playerName = :playerName', $updof);     
         $_SESSION['playerMoney'] = $_SESSION['playerMoney'] - $qty * $price;                                                                                                                    //"
      }else{
        
          $updoff = array(":playerName" =>$offers['playerName'],":itemID" => $itemID, ":itemDamage" => $itemDamage,":qty" => $vys);
          DB::query("UPDATE " .  TABLE_OFFERS . ' SET qty = :qty WHERE itemID = :itemID AND itemDamage = :itemDamage AND playerName = :playerName', $updoff);
        
          $updplay = array(":playerName" =>$offers['playerName'], ":money" => $qty * $price + $player['money']);
          DB::query("UPDATE " .  TABLE_PLAYERS . ' SET money = :money WHERE playerName = :playerName', $updplay);
          
          $off = array(":itemID" => $itemID,":qty" => $qty, ":itemDamage" => $itemDamage, ":playerID" => $_SESSION['playerID']);
          DB::query("INSERT INTO" . TABLE_ITEMS . "(itemID, itemDamage, qty, playerID) VALUES(:itemID, :itemDamage,:qty,:playerID)", $item);
          
          $updof = array(":playerName" => $_SESSION['playerName'], ":money" => $_SESSION['playerMoney'] - $qty * $price);
          DB::query("UPDATE " .  TABLE_PLAYERS . ' SET money = :money WHERE playerName = :playerName', $updof); 
          $_SESSION['playerMoney'] = $_SESSION['playerMoney'] - $qty * $price;
      }
    }else{
      return 'Málo peněz nebo moc itemu';
    }  
  }   
}