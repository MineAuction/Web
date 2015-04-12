<?php
/**
 * Locale API
 *
 * @author Sekiphp
 */ 
class Locale{
	/** Lang to translate */
  private $lang = "";
	/** Path to lang packages */
  private $path = "";
	/** Default language package */
	private $defaltLang = "cz";
	/** Array with translations in selected language */
	private $dictionary;
  
	/**
	 * Inicialize Locale API
	 * 
	 * @param String Path to lang packages
	 */
  public function __construct($path){
		$this -> path = $path;
  }
  
	/**
	 * Set the language to logged player
	 */
  public function setLocale($lang){
    $this -> lang = $lang;
		$this -> existLang();
  }
	
	/**
	 * Check if language file exist and require selected lang
	 */
	private function existLang(){
		$fileName = $this->path . 'lang_' . $this->lang . '.php';
		if(file_exists($fileName)){
			require_once $fileName;
		}
		else{
			$this->lang = $this->defaultLang;
			require_once $this->path . 'lang_' . $this->defaltLang . '.php';
		}
		$this->dictionary = $dictionary;		
	}
	
	private function replaceArguments($translation){
    // Replace arguments
    if (false !== strpos($translation, '{a:')) {
			$replace = array();
			$args = func_get_args();
			for ($i = 1, $max = count($args); $i < $max; $i ++) {
				$replace['{a:' . $i . '}'] = $args[$i];
			}
			// interpolate replacement values into the messsage then return
			return strtr($translation, $replace);
    }			
			
		return translation;
	}
	
	public function translate($key){
		$translation = $this -> dictionary[$key];			
			
		// Replace arguments
    if (false !== strpos($translation, '{a:')) {
			$replace = array();
			$args = func_get_args();
			for ($i = 1, $max = count($args); $i < $max; $i ++) {
				$replace['{a:' . $i . '}'] = $args[$i];
			}

			return strtr($translation, $replace);
    }

		return $translation;
	}
	
	public static function getAvailableLangs(){
		$scan = scandir("/lang");	
		print_r($scan);
			
	}

}
?>