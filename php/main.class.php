<?php
/**
 * Main application class, manage the whole program
 * 
 * @author: Sekiphp
 * @created: 30.3.2015 
 */ 
class Main {
	/** $_GET['page'] from URL */
	private $get;
	/** Name of template to show */
	public $tpl;
	/** Array of values to templates */
	public $render = array();
	/** User language */
	private $locale;
	
	/**
	 * Main application method
	 * !!! No edit !!!
	 */
  public function __construct() {
    $this -> get = @$_GET['page'];   
		$this -> setLang($GLOBALS['locale']);
		
		$this -> setRenderParams();
    $this -> selectPage();
		$this -> addFileExtension();
	}  
	
	/**
	 * Set language to logged player
	 */
	public function setLang($locale){
		$this->locale = $locale;
    $this->render['lang'] = $locale->getTable(); 
	} 
	
	/**
	 * Bind variables to twig template
	 */
	private function setRenderParams(){
		$menu = new Menu($this->get);
		$money = new Money($GLOBALS['economy']);
			
	  $this -> render['session'] = @$_SESSION;  
    $this -> render['settings'] = $GLOBALS['settings'];
    $this -> render['menu'] = $menu->loadMenuItems($_SESSION['playerAdmin'], $this->locale->lang);  
    $this -> render['title'] = $menu->getActiveName(); 
		$this -> render['pageURL'] = $this->get;
		$this -> render['player_money'] = number_format($money->getMoney($_SESSION['playerUUID']), 2, '.', ' ');
	}
  
  /**
   * Select the page according to $_GET['page'] (start others method)    
   */     
  private function selectPage(){
    // if player is not logged
    if(!isSet($_SESSION['playerID'])){
			$this->get = ($this->get == "faq") ? "faq" : "login";
    }
    
		// all pages
		switch($this->get){
      case '' :
			case 'inventory': $this->inventory();
				break;
			case 'offer': $this->offer();
				break;
			case 'demand': $this->demand();
				break;
			case 'stats': $this->stats();
				break;
			case 'logs': $this->logs();
				break;
			case 'admin': $this->admin();
				break;	
			case 'items': $this->items_list();
				break;				
      case 'login': $this->logIn();
				break;
			case 'settings': $this->settings();
				break;
			case 'auction': $this->auction();
				break;
      case 'logout': $this->logOut();
				break;
       case 'faq': $this->faq();
				break;
			default: $this->errorPage();
		} 	
  }
	
	/**
	 * Add .tpl extension to actually rendering file
	 */
	private function addFileExtension(){
    $this->tpl .= ".tpl";  						
	}

  
  private function inventory(){
    $this->tpl = "inventory";
    
    $this->render['inv'] = Player::getInventory($_SESSION['playerID']);
  }
  
  private function offer(){
    $this->render['offers'] = Offers::offer();  
     $this->render['myoffers'] = Offers::myoffer();  
    $this->tpl = "offer";
  }
  private function settings(){
    $this->tpl = "settings";
		//Locale::getAvailableLangs();
		
		if($_POST){
			Player::setSettings($_SESSION['playerID']);
		}
  }
  
  private function demand(){
    $this->tpl = "demand";
  }
	
	private function faq(){
    $this -> tpl = "faq";
		$this -> render['title'] = "FAQ";
  }
	
	private function items_list(){
    $this->tpl = "items";
		$this->render['items'] = Items::getAll();
  }
  
  private function stats(){
    $this->tpl = "stats";
  }
	
  private function auction(){
    $this->tpl = "auction";
  }
  
  private function logs(){
    $this->tpl = "logs";
    $this->render['logs'] = Logger::log();
  }
  
  private function admin(){
		# permission
		if($_SESSION['playerAdmin'] == 0){
			$this->errorPage();		
			return;	
		}
		
    $this->tpl = "admin";
  }

  private function logIn(){
    $this->tpl = "login";
		$this -> render['title'] = "";
    
    if($_POST){
      if(Auth::login($_POST['username'], $_POST['password'])){
				Logger::info("Login", "Uzivatel " .  $_POST['username'] . " uspěšně přihlášen." );
        header("location: ?page=inventory");
        
        $this->tpl = "inventory";
      }
      else{
        $this->render['error'] = "chyba";
      }
    }
  }
  private function logOut(){
      $this->tpl = "login";
      $this->render['error'] = "Úspěšně odhlášeno";
      Auth::logout();
  }

  
  private function errorPage($error = 404){
    $this->tpl = "error";
    $this->render['error'] = $error;
  }
}