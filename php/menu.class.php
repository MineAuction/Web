<?php
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
		$sql = ($userAdmin == 0) ? "SELECT * FROM " . TABLE_MENU . " WHERE is_private = '0'" : "SELECT * FROM " . TABLE_MENU . "";
    $res = DB::query($sql);
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