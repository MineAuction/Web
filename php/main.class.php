<?php
/**
 * Main application class, manage the whole program
 * 
 * @author: Sekiphp
 * @created: 30.3.2015 
 */ 
class Main {
	/** $_GET['page'] from URL */
	private $get = NULL;
	/** Name of template to show */
	public $tpl = NULL;
	/** Array of values to templates */
	public $render = array();
	
	private $locale;
	
	/**
	 * Main application method
	 * !!! No edit !!!
	 */
  public function __construct() {
    $this->get = @$_GET['page'];   
		$this->setLang($GLOBALS['locale']);
    $this->selectPage();
		$this->addFileExtension();
    $m = new Menu($this->get);
    
    // variables to twig template
	  $this->render['session'] = @$_SESSION;  
    $this->render['settings'] = $GLOBALS['settings'];
    $this->render['menu'] = $m->loadMenuItems($_SESSION['playerAdmin']);  
    $this->render['title'] = $m->getActiveName(); 
		$this->render['pageURL'] = $this->get;
    
    $money = new Money();
    $this->render['player_money'] = number_format($money->getMoney($_SESSION['playerUUID']), 2, '.', ' ');
	}  

	public function setLang($locale){
		$this->locale = $locale;
	}
 
  
  /**
   * Select the page according to $_GET['page'] (start others method)    
   */     
  private function selectPage(){
    // if player is not logged
    if(!isSet($_SESSION['playerID'])){
      if($this->get == "faq"){
        $this->get = "faq";
      }else{
        $this->get = "login";
      }
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
      case 'login': $this->logIn();
				break;
        case 'settings': $this->settings();
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
    
    $this->render['inv'] = Player::inv($_SESSION['playerID']);
  }
  
  private function offer(){
    $this->render['offers'] = Offers::offer();  
    $this->tpl = "offer";
  }
  private function settings(){
    $this->tpl = "settings";
  }
  
  private function demand(){
    $this->tpl = "demand";
  }
   private function faq(){
    $this->tpl = "faq";
  }
  
  private function stats(){
    $this->tpl = "stats";
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

  
  
  
  
  
  
  
  

	
	
	/**
	 * Logika pro domovskou uvodni stranku po prihlaseni
	 */
	private function domovskaStranka(){
		$this->tpl = "index";
		
		if(!$_SESSION){
			die("Nejste přihlášen do systému! <a href='index.php?page=login'>Přihlaš se!</a>");
		}

	}
	
}