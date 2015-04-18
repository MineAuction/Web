<?php
class Settings{
	public static function getLanguagesList(){
		$langs = array();
		
		$sql = "
			SELECT * 
			FROM " . TABLE_LANGS . "
		";		
    $res = DB::query($sql);
    while($item = DB::assoc($res)){
      if($_SESSION['playerLang'] == $item['lang']){
        $item['selected'] = "selected";
      }               
      $langs[] = $item;   
    }
    return $langs;		
	}
}