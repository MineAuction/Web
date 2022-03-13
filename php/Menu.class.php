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
  public function loadMenuItems($userAdmin){
		$menu = array();
		
		# $where is not possible to bind PDO
		$where = ($userAdmin != 1) ? " m.is_private = '0' AND " : "";
		$sql = "
			SELECT * 
			FROM " . TABLE_MENU . " AS m 
			INNER JOIN " . TABLE_MENU_LANG . " AS l 
			ON m.idm = l.idm 
			WHERE " . $where . " l.lang = :lang AND m.idp = 0  
			ORDER BY m.idm
		";
		$bind = array(
			":lang" => $_SESSION['playerLang'], 
		);
		
		$res = DB::query($sql, $bind);
    while($item = DB::assoc($res)){
			# improve active item
      if($this->get == $item['url']){
        $item['active'] = "active";
        $this->active = $item['name'];
      }   
			
      # look for children
      $res2 = DB::query("
				SELECT * 
				FROM " . TABLE_MENU . " AS m 
				INNER JOIN " . TABLE_MENU_LANG . " AS l 
				ON m.idm = l.idm 
				WHERE idp = ? AND l.lang = ?
			", array($item['idm'], $_SESSION['playerLang']));
      while($sub = DB::assoc($res2)){
        $item['submenu'][] = $sub;      
        
        # if usection is active -> parent is active
        if($this->get == $sub['url']){
          $item['active'] = "active";
          $this->active = $item['name'];
        }        
      }
        			
      $menu[] = $item;   
    }
		
		/*
    $res = DB::query($sql, $bind);
    while($item = DB::assoc($res)){
      if($this->get == $item['url']){
        $item['active'] = "active";
        $this->active = $item['name'];
      }               
      $menu[] = $item;   
    }
		*/
    return $menu;
  }
  
  /**
   * Get the custom name of selected section
   */     
  public function getActiveName(){
    return $this -> active;
  }
}