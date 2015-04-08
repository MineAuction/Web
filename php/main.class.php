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
	
	/**
	 * Main application method
	 * !!! No edit !!!
	 */
  public function __construct() {
    $this->get = @$_GET['page'];   
    $this->selectPage();
		$this->addFileExtension();
    $m = new Menu($this->get);
    
    // variables to twig template
	  $this->render['session'] = @$_SESSION;  
    $this->render['settings'] = $GLOBALS['settings'];
    $this->render['menu'] = $m->loadMenuItems($_SESSION['playerAdmin']);  
    $this->render['title'] = $m->getActiveName();    
	}   
 
  
  /**
   * Select the page according to $_GET['page'] (start others method)    
   */     
  private function selectPage(){
    // if player is not logged
    if(!isSet($_SESSION['playerId'])){
      $this->get = "login";
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
      case 'login': $this->login();
				break;
      case 'logout': $this->logout();
				break;
			default: $this->errorPage(404);
		} 	
  }
	
	private function addFileExtension(){
    $this->tpl .= ".tpl";  						
	}

  
  private function inventory(){
    $this->tpl = "inventory";
    
    $money = new Money();
    $this->render['player_money'] = $money->getMoney($_SESSION['playerUUID']);
    $this->render['inv'] = Player::inv($_SESSION['playerId']);
  }
  
  private function offer(){
    $this->render['offers'] = Offers::offer();  
    $this->tpl = "offer";
  }
  
  private function demand(){
    $this->tpl = "demand";
  }
  
  private function stats(){
    $this->tpl = "stats";
  }
  
  private function logs(){
    $this->tpl = "logs";
    $this->render['logs'] = Logger::log();
  }
  
  private function admin(){
		if($_SESSION['playerAdmin'] == 0){
			$this->errorPage(404);		
			return;	
		}
		
    $this->tpl = "admin";
  }

  private function login(){
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
  private function logout(){
      $this->tpl = "login";
      $this->render['error'] = "Úspěšně odhlášeno";
      Auth::logout();
  }

  
  private function errorPage($error){
    $this->tpl = "error";
    $this->render['error'] = $error;
  }

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
	
	/**
	 * Prihlaseni do systemu
	 */
	private function prihlaseni(){
		$this->tpl = "login";
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$ucet = new Ucet($this->db);
			$res = $ucet->logIn($_POST['jmeno'], $_POST['heslo']);
			
			if ($res != FALSE) {
				header("Location: index.php?page=index");
				$this->tpl = "index";
			} else {
				$this->render['error'] = "Přihlášení do systému bylo neúspěšné";
			}
		}
	}
	
	/**
	 * Odhlaseni ze systemu
	 */
	private function odhlaseni() {
		$this->tpl = "odhlasit";
		$this->render['error'] = "Odhlášení proběhlo úspěšně <a href='index.php?page=login'>Přihlásit se</a>";
		Ucet::logOut();
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