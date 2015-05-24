<?php
class Player{
	
	public static function setLang($playerID, $data){	
		$sql = "
			UPDATE " . TABLE_PLAYERS . " 
			SET 
				lang = :lang
			WHERE 
				id = :player
		";
		$params = array(
			":lang" => $data['lang'], 
			":player" => $playerID, 
		);
		
		$_SESSION['playerLang'] = $data['lang'];
		DB::query($sql, $params);		
	}
	
	public static function getLang($playerID){
		
	}
	
	public static function setMoney($playerID){
			
	}
	
	public static function getMoney($playerID){
			
	}
	
	// TODO
	public static function getSelectedLanguage(){
						
	}

}