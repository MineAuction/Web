<?php
/**
 * @author: Sekiphp
 */
class Menu{
  private $get;
  private $active;
  
  public function __construct($get){
    $this->get = $get;  
  }
  
  /**
   * Load all menu items from database
   */     
  public function loadMenuItems($userAdmin, $userLang){
		$menu = array();
		$userLang = "cz";
		$userAdmin = 0;
		
		# $where is not possible to bind PDO
		$where = ($userAdmin != 0) ? " WHERE m.is_private = '0' AND " : "";
		$sql = "
			SELECT * 
			FROM " . TABLE_MENU . " AS m 
			INNER JOIN " . TABLE_MENU_LANG . " AS l 
			ON m.idm = l.idm 
			WHERE " . $where . " l.lang = :lang  
			ORDER BY m.idm
		";
		$bind = array(
			":lang" => $userLang, 
		);
		
    $res = DB::query($sql, $bind);
    while($item = DB::assoc($res)){
      if($this->get == $item['url']){
        $item['active'] = "active";
        $this->active = $item['name'];
      }               
      $menu[] = $item;   
    }
    return $menu;
  }
  
  /**
   * Get the custom name of selected section
   */     
  public function getActiveName(){
    return $this->active;
  }
}