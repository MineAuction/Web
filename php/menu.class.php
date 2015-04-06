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
  public function loadMenuItems(){
    $menu = array();
    $res = DB::query("SELECT * FROM " . TABLE_MENU);
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