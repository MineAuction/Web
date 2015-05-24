<?php
/**
 * Class for managing private (in-app) sections
 * All class attributes is commented in Main.class.php
 * 
 * @author: Sekiphp
 * @created: 16.4.2015 
 */
class MainInner implements IMain{
	private $get; 
	private $tpl;
	private $locale;
	private $render = array();
	
	public function __construct($get, $locale){
		$this -> get = $get;
		$this -> locale = $locale;
		
		$this -> selectPage();
		
		# render in all private pages
		$menu = new Menu($this -> get);
		$money = new Money($GLOBALS['economy']);
		
    $this -> render['menu'] = $menu -> loadMenuItems($_SESSION['playerAdmin']);  
    $this -> render['title'] = $menu -> getActiveName(); 
		$this -> render['player_money'] = number_format($money->getMoney($_SESSION['playerUUID']), 2, '.', ' ');
		$this -> render['session'] = @$_SESSION; 
	}
	
  /**
   * Select the page according to $_GET['page'] (start others method)    
   */
	private function selectPage(){
		$parts = exPlode("-", $this->get); # if item is in pattern something-sub -> something is name of controller

		switch($parts[0]){
      case '' :
			case 'inventory': $this -> section_inventory();
				break;
			case 'offers': $this -> section_offer($parts[1]);
				break;
			case 'demand': $this -> section_demand();
				break;
			case 'stats': $this -> section_stats();
				break;
			case 'logs': $this -> section_logs();
				break;
			case 'admin': $this -> section_admin();
				break;	
			case 'items': $this -> section_items_list();
				break;				
			case 'settings': $this -> section_settings();
				break;
			case 'auction': $this -> section_auction();
				break;
      case 'logout': $this -> logOut();
				break;
			case 'faq': $this -> section_FAQ();
				break;
		} 	
	}
	

  private function section_inventory(){
    $this -> tpl = "inventory";
		$this -> get = "inventory"; // fix menu - inventory is default section
    
    $this->render['inv'] = Inventory::getInventory($_SESSION['playerID'], $this -> locale);
  }
  
	/**
	 * SubController for offers (this section has sub-section)
	 * 
	 * @param String $subSection
	 */
  private function section_offer($subSection){
		if($subSection == 'all'){
			$this-> tpl = "offers_all";		
			
			$this -> render['offers'] = Offers::getOffers("all", $_SESSION['playerID']);
		}
		elseif($subSection == 'your'){
			$this-> tpl = "offers_your";	

			$this -> render['myoffers'] = Offers::getOffers("my", $_SESSION['playerID']);			
		}
		else{
			$this-> tpl = "offers_buy";		
		}

		/*
		$this-> tpl = "offer";
			
    $this -> render['offers'] = Offers::getOffers("all", $_SESSION['playerID']);  
		$this -> render['myoffers'] = Offers::getOffers("my", $_SESSION['playerID']);  */
  }
	
  private function section_settings(){
    $this -> tpl = "settings";		
		
		if($_POST){
			Player::setLang($_SESSION['playerID'], $_POST);
		}
		
		$this -> render['settings_langs'] = Settings::getLanguagesList();
  }
  
  private function section_demand(){
    $this->tpl = "demand";
  }
	
	private function section_items_list(){
    $this->tpl = "items";
		$this->render['items'] = Items::getAll();
  }
  
  private function section_stats(){
    $this->tpl = "stats";
  }
	
  private function section_auction(){
    $this->tpl = "auction";
  }
  
  private function section_logs(){
    $this->tpl = "logs";
    $this->render['logs'] = Logger::log();
  }
  
  private function section_admin(){
		# permission
		if($_SESSION['playerAdmin'] == 0){
			$this->render['error'] = "error";		
			return;	
		}
		
    $this->tpl = "admin";
  }
	
	private function section_FAQ(){
    $this -> tpl = "faq";
		$this -> render['title'] = "FAQ";
  }
	
  private function logOut(){
		$this -> tpl = "login";
		$this -> render['error'] = "Úspěšně odhlášeno";
		Auth::logout();
  }
	
	
	
	public function getTemplate(){
		return $this -> tpl;
	}
	
	public function getRenderArray(){
		return $this -> render;
	}
}