<?php
/**
 * Main application class, manage the whole program
 * 
 * @author: Sekiphp
 * @created: 30.3.2015 
 * @changed: 17.4.2015
 */ 
class Main{
	/** $_GET['page'] from URL */
	private $get;
	/** Name of template to show */
	public $tpl;
	/** Array of values to templates */
	public $render;
	/** User language Object (API) */
	private $locale;

	
	/**
	 * Main application method
	 * !!! No edit !!!
	 */
  public function __construct($locale){
    $this -> get = @$_GET['page'];   
		$this -> locale = $locale;
		
		# others
		$this -> setBasicRenderParams();
    $this -> selectPage();
		$this -> addFileExtension();
		$this -> checkPage();
	} 
	
	/**
	 * Bind variables to twig template
	 */
	private function setBasicRenderParams(){
    $this -> render['settings'] = $GLOBALS['settings'];
		$this -> render['pageURL'] = $this -> get;
	}
	
	/**
	 * Specify access
	 */
	private function selectPage(){
		if(!isSet($_SESSION['playerID'])){		
			$main = new MainOuter($this -> get, $this -> locale);
		}
		else{			
			$main = new MainInner($this -> get, $this -> locale);				
		}
		
		# get data from sub class
		$this -> render += $main -> getRenderArray();
		$this -> tpl = $main -> getTemplate();
		
		$this -> render['lang'] = $this -> locale -> getTable();
	}
	
	/**
	 * Check if page in $this->tpl exists in templates dir
	 */
	private function checkPage(){
		if(!file_exists("templates/" . $this -> tpl)){
			# render error page
			$this -> errorPage(404);
			$this -> addFileExtension();
		}			
	}

	/**
	 * Add .tpl extension to actually rendering file
	 */
	private function addFileExtension(){
    $this -> tpl .= ".tpl";  						
	}	
	
	/**
	 * Render error page
	 * 
	 * @param int Error code
	 */
	private function errorPage($error = 404){
    $this->tpl = "error";
    $this->render['error'] = $error;
  }
}