<?php

class Inventory{
  public function sellItem($who, $id, $sub, $qty){
    $res = checkQty($who, $id, $sub, $qty);
    if($res == FALSE) return FALSE;
    
    // TODO: kontrola maximalni ceny
    
    
  }
  
  /**
   * Check if player have too much items then he sould like to sell
   */     
  private function checkQty($who, $id, $sub, $qty){
    $sql = "
      SELECT qty 
      FROM " . TABLE_ITEMS . " 
      WHERE 
        playerID = :playerID AND 
        itemID = :itemID AND 
        itemDamage = :itemDamage
    ";
    $where = array(
      ":playerID" => $playerID, 
      ":itemID" => $id, 
      ":itemDamage" => $sub, 
    );     
    $item = DB::assoc(DB::query($sql, $where));
    
    return ($item['qty'] >= $qty) ? TRUE : FALSE;
  }
}