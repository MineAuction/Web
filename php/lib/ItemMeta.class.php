<?php
class ItemMeta {
	private $meta;
	private $itemID;
	private $enchants;
	
	public function __construct($meta, $enchants, $itemID){
		$this -> meta = $meta;
		$this -> itemID = $itemID;
		$this -> enchants = $enchants;
	}
	
	public function parseItemName(){
		foreach(preg_split("/((\r?\n)|(\r\n?))/", $this->meta) as $line){
			if(strPos($line, "display-name:") !== FALSE){
				$parts = explode(":", $line);
				
				return " - " . $parts[1];
			}
		} 
	}
	
	/**
	 * http://minecraft.gamepedia.com/Item_durability
	 */
	public function parseDamage($locale){
		foreach(preg_split("/((\r?\n)|(\r\n?))/", $this->meta) as $line){
			if(strPos($line, "damage:") !== FALSE){
				$parts = explode(":", $line);
				
				$durability = $this -> findItemDurability($this -> itemID);
				if($durability != 0)
					return $this -> calculateDamage(trim($parts[1]), $durability) . "% " . $locale -> translate("damaged");
			}
		} 
	}
	
	/**
	 * Parse item enchantments - can be in columns ItemMeta and in Enchantments
	 */
	public function parseEnchants(){
		$ret2 = $this -> parseEnchantsFromMeta();
		$ret1 = $this -> parseEnchantsFromEnchantments();
		
		$ret = array_merge($ret1, $ret2);
		if(count($ret) != 0)
			return "(" . imPlode(", ", $ret) . ")";
	}
	
	//https://docs.oc.tc/reference/enchantments
	public function parseEnchantsFromEnchantments(){
		$ret = array();
		
		if($this -> enchants == "{}")
			return $ret;
		
		// clear String
		$delete = array("{", "}", "\"");
		$this -> enchants = str_replace($delete, "", $this -> enchants);
		
		// loop
		$parts = exPlode(",", $this -> enchants);
		foreach($parts as $value){
			$split = exPlode(":", $value);
			$ret[] = $this -> findItemEnchant($split[0]) . " " . $split[1];
		}
		
		return $ret;
	}
	
	private function parseEnchantsFromMeta(){
		$ret = array();
		$enchants = FALSE;
		foreach(preg_split("/((\r?\n)|(\r\n?))/", $this->meta) as $line){
			if(strPos($line, "stored-enchants:") !== FALSE){
				$enchants = TRUE;
			}
			
			$line = trim($line);
			if($enchants && $line != "stored-enchants:" && $line != ""){
				$split = exPlode(":", $line);
				$ret[] = $this -> findItemEnchant($split[0]) . " " . $split[1];
			}
		}

		return $ret;
	}
	
	private function findItemEnchant($eConstant){
		$enchants = array(
			// armor
			"PROTECTION_ENVIRONMENTAL" => "Protection",
			"PROTECTION_FIRE" => "Fire Protection",
			"PROTECTION_FALL" => "Feather Falling",
			"PROTECTION_EXPLOSIONS" => "Blast Protection",
			"PROTECTION_PROJECTILE" => "Projectile Protection",
			"OXYGEN" => "Respiration",
			"WATER_WORKER" => "Aqua Affinity",
			"THORNS" => "Thorns",
			"DEPTH_STRIDER" => "Depth Strider",
			
			// tools
			"DAMAGE_ALL" => "Sharpness",
			"DAMAGE_UNDEAD" => "Smite",		
			"DAMAGE_ARTHROPODS" => "Bane of Arthropods",
			"KNOCKBACK" => "Knockback",					
			"FIRE_ASPECT" => "Fire Aspect",		
			"LOOT_BONUS_MOBS" => "Looting",
			"DIG_SPEED" => "Efficiency",		
			"SILK_TOUCH" => "Silk Touch",
			"DURABILITY" => "Unbreaking",		
			"LOOT_BONUS_BLOCKS" => "Fortune",
			
			// bow
			"ARROW_DAMAGE" => "Power",		
			"ARROW_KNOCKBACK" => "Punch",
			"ARROW_FIRE" => "Flame",		
			"ARROW_INFINITE" => "Infinity",
			
			// fishing
			"LUCK" => "Luck of the Sea",		
			"LURE" => "Lure",			
		);
		 
		return $enchants[$eConstant];
	}
	
	/**
	 * Get item durability from table like Mojang
	 */
	private function findItemDurability($itemID){
		# itemID => his durability
		$durability = array(
			// gold: 33
			283 => 33, 
			284 => 33, 
			285 => 33, 
			286 => 33, 
			294 => 33, 
			314 => 78, 
			315 => 113, 
			316 => 106, 
			317 => 92, 
			
			// wood: 60
			268 => 60, 
			269 => 60, 
			270 => 60, 
			271 => 60, 
			290 => 60, 
			
			// stone: 132 
			272 => 132, 
			273 => 132, 
			274 => 132, 
			275 => 132, 
			291 => 132, 			
			
			// iron: 251
			256 => 251, 
			257 => 251,
			258 => 251,
			267 => 251,
			292 => 251,
			306 => 166,
			307 => 241,
			308 => 226,
			309 => 196,			
			
			// diamond: 1562 
			276 => 1562, 
			277 => 1562, 
			278 => 1562, 
			279 => 1562, 
			293 => 1562, 
			310 => 364, 
			311 => 529, 
			312 => 496, 
			313	=> 430, 		
			
			// fishing rods: 65 
			346 => 65, 
			
			// flint and steel: 65 
			259 => 65, 
			
			// carrot on a stick: 26 
			398 => 26, 
			
			// bow: 385 
			261 => 285, 
			
			// leather 
			298 => 56, 
			299 => 81, 
			300 => 76, 
			301 => 66, 
			
			// chainmal
			302 => 166, 
			303 => 241, 
			304 => 226, 
			305 => 196, 
			
		);

		return $durability[$itemID];
	}
	
	private function calculateDamage($actualDamage, $maxDamage){
		return round($actualDamage / (($maxDamage - 1) / 100), 2); // mojang count from 0 
	}

	
}