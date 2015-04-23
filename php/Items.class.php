<?php
/**
 * @author: Sekiphp
 * @created: 12.4.2015 
 */
class Items{
	/**
	 * Get all available items
	 */
	public static function getAll(){
		$sql = "
			SELECT il.*, (SELECT COUNT(*) FROM ma_offers WHERE il.itemID = itemID AND il.itemSubID = itemDamage) AS count 
			FROM " . TABLE_ITEMS_LIST . " AS il 
			WHERE 
				il.itemSubID != -1 AND 
				il.itemID != -1 
			ORDER BY il.itemID, il.itemSubID ASC
		";	
echo $sql;
		return DB::assocAll(DB::query($sql));
	}
		
}