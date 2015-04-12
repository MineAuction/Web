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
			SELECT * 
			FROM " . TABLE_ITEMS_LIST . " 
			WHERE 
				itemSubID != -1 AND 
				itemID != -1 
			ORDER BY itemID, itemSubID ASC
		";	

		return DB::assocAll(DB::query($sql));
	}
		
}