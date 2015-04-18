<?php
/**
 * Class for managing public sections
 * All class attributes is commented in Main.class.php
 * 
 * @author: Sekiphp
 * @created: 16.4.2015 
 */
class MainOuter implements IMain{
	private $get; 
	private $tpl;
	private $locale;
	private $render;
	
	public function __construct($get, $locale){
		$this -> get = $get;
		$this -> locale = $locale;
		
		$this -> selectPage();
	}

  /**
   * Select the page according to $_GET['page'] (start others method)    
   */
	private function selectPage(){
		switch($this -> get){
			case "faq": self::section_FAQ();
				break;
			default: $this -> section_index();
		}	
	}
	
	private function section_FAQ(){
    $this -> tpl = "faq";
		$this -> render['title'] = "FAQ";
  }
	
	private function section_index(){
		$this -> tpl = "login";
		$this -> render['title'] = "přihlášení";
		
		# log in
		if($_POST){
      if(Auth::login($_POST['username'], $_POST['password'])){
				Logger::info("Login", "User " .  $_POST['username'] . " was successfully logged." );
        header("location: ?page=inventory");
        
        $this->tpl = "inventory";
      }
      else{
        $this->render['error'] = "error";
      }
    }
	}
	
	public function getTemplate(){
		return $this -> tpl;
	}
	
	public function getRenderArray(){
		return $this -> render;
	}
}