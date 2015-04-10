<?php
class Player{
    public static function inv($playerID){
      $sql = "
        SELECT 
          il.name, il.img, ip.qty, ip.itemId, ip.itemDamage,  
          CASE  
          WHEN ip.lore != '' OR ip.enchantments != '{}' THEN ''           
          ELSE 'disabled'         
          END AS getauction           
        FROM " . TABLE_ITEMS_LIST . " AS il 
        INNER JOIN " . TABLE_ITEMS . " AS ip 
        ON 
          ip.itemID = il.itemID AND 
          ip.itemDamage = il.itemSubID 
        WHERE ip.playerID = :playerID  ORDER BY qty DESC
      ";
      
      $res = DB::query($sql, array(":playerID" => $playerID));
      //print_r(DB::assocAll($res));
      return DB::assocAll($res);
    }
       
    public static function inOffer($playerID){
        $where = array(":playerID" => $playerID );
      $items = DB::assocAll(DB::query('SELECT * FROM ' . TABLE_OFFERS . ' WHERE playerID = :playerID', $where));
      return $items;
    }
}