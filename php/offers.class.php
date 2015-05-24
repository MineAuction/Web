<?php
class Offers{	
	/**
	 * Get array contains offers list
	 * 
	 * @param String $type - all || myOffer (all = all, but except mine)
	 * $param int $playerID
	 */ 
	public static function getOffers($type, $playerID){
		$sql = "
			SELECT ip.id AS offerId, p.playerName, p.id AS playerID, il.name, il.img, ip.qty, ip.price, ip.qty*ip.price AS priceAll, ip.itemId, ip.itemDamage, ip.itemMeta     
			FROM " . TABLE_ITEMS_LIST . " AS il 
			INNER JOIN " . TABLE_OFFERS . " AS ip 
			INNER JOIN " . TABLE_PLAYERS . " AS p 
			ON 
				ip.itemID = il.itemID AND 
				ip.itemDamage = il.itemSubID AND 
				p.id = ip.playerID 
    ";
		$sql .= ($type != "all") ? "WHERE playerID = :playerID" : "WHERE playerID != :playerID";	
		$where = array(":playerID" => $playerID);
		
		return DB::assocAll(DB::query($sql, $where));
	}
	
	/**
	 * Delete offer and returns item into inventory
	 * 
	 * @param int $offerID
	 * @param int $playerID
	 */
	public static function cancelOffer($offerID, $playerID){
		// check permissions and offer exist
		$sql = "
			SELECT * 
			FROM " . TABLE_OFFERS . " 
			WHERE 
				id = :offerID AND 
				playerID = :playerID 
		";
		$params = array(
			":playerID" => $playerID, 
			":offerID" => $offerID, 
		);
		$data = DB::assoc(DB::query($sql, $params));
		
		if(!$data){
			return "offer_cheat";
		}
		
		// tranfser to inventory
		// check for similar rows in inventory
		$sql = "
			SELECT * 
			FROM " . TABLE_ITEMS . " 
			WHERE 
				itemID = :itemID AND 
				itemDamage = :itemDamage AND 
				itemMeta = :itemMeta
		";
		$params = array(
			":itemID" => $data['itemID'], 
			":itemDamage" => $data['itemDamage'], 
			":itemMeta" => $data['itemMeta'], 
		);
		$inventory = DB::assoc(DB::query($sql, $params));
		
		if(!$inventory){
			// insert	to inventory
			$sql = "
				INSERT INTO " . TABLE_ITEMS . "
					SELECT 
						'' AS id, playerID, itemID, itemDamage, qty, itemMeta, enchantments, lore 
					FROM " . TABLE_OFFERS . " 
					WHERE 
						id = ?
			";
			$params = array($offerID);
		}
		else{
			// update inventory
			$sql = "
				UPDATE " . TABLE_ITEMS . " 
				SET 
					qty = :qty 
				WHERE id = :row_id
			";
			$params = array(
				":qty" => $data['qty'] + $inventory['qty'], 
				":row_id" => $inventory['id'], 
			);
		}
		DB::query($sql, $params);

		// delete offer
		$params = array($offerID);
		DB::query("DELETE FROM " . TABLE_OFFERS . " WHERE id = ?", $params);	

		return "offer_canceled";
	}
	


  public static function buyOffer($rowID, $qty){
		$data = self::getOfferRow($rowID);
		
    if($data['qty'] < $qty)
			return "bad_qty";
		
		require 'Money.class.php'; // dirty
		$money = new Money($GLOBALS['economy']);
		if(($qty * $data['price']) > $money->getMoney($_SESSION['playerUUID']))
			return "no_money";
		
		self::updateOffer($rowID, $qty);
		self::updateInventory($data, $qty);
		
		//$money -> newTransaction($_SESSION['playerUUID'], -$data['price']*$qty);
		//$money -> newTransaction($data['uuid'], $data['price']*$qty);
		
		return "buy_ok";
  }   
	
	private static function getOfferRow($rowID){
		$sql = "
			SELECT o.*, p.uuid  
			FROM " . TABLE_OFFERS . " AS o 
			INNER JOIN " . TABLE_PLAYERS . " AS p 
			ON p.id = o.playerID 
			WHERE o.id = ?
		";
		
		$params = array($rowID);
		
		return DB::assoc(DB::query($sql, $params));		
	}
	
	private static function updateOffer($rowID, $qty){
		// update inventory
		$sql = "
			UPDATE " .  TABLE_OFFERS. " 
			SET qty = (qty - $qty) 
			WHERE id = ?
		";
		$params = array($rowID);
		DB::query($sql, $params);
		
		// delete rows where is zero pieces
		$sql = "DELETE FROM " . TABLE_OFFERS . " WHERE qty = 0";  
		DB::query($sql);		
	}
	
	private static function updateInventory($offerData, $qty){
		# look for similar row in ma_items
		$sql = "
			SELECT * FROM " . TABLE_ITEMS . " 
			WHERE 
				itemID = :itemID AND 
				itemDamage = :itemDamage AND 
				itemMeta = :itemMeta
		";
		$params = array(
			":itemID" => $offerData['itemID'],
			":itemDamage" => $offerData['itemDamage'],
			":itemMeta" => $offerData['itemMeta'],			
		);
		$invData = DB::assoc(DB::query($sql, $params));
		
		if(!$invData){
			# new row	
			$sql = "
				INSERT INTO " . TABLE_ITEMS . "
					SELECT '' AS id, playerID, itemID, itemDamage, :qty AS qty, itemMeta, enchantments, lore  
					FROM " . TABLE_OFFERS . " 
					WHERE id = :row_id
			";
			$params2 = array(
				":qty" => $qty,
				":row_id" => $offerData['id'], 
			);
			
			DB::query($sql, $params2);
		}
		else{
			# update existing row
			$sql = "
				UPDATE " . TABLE_ITEMS . " 
				SET qty = qty + $qty 
				WHERE 
					itemID = :itemID AND 
					itemDamage = :itemDamage AND 
					itemMeta = :itemMeta AND 
					playerID = :playerID
			";
			$params[':playerID'] = $_SESSION['playerID'];
			
			DB::query($sql, $params);
		}
	}
	
	
	
	
	
	
}