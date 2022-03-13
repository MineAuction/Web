<?php
/**
 * Locale API
 *
 * @author Sekiphp
 */ 
class LocaleTranslation {
	/** Lang to translate */
  public $lang;
	/** Path to lang packages */
  private $path = "lang/";
	/** Default language package */
	private $defaultLang;
	/** Array with translations in selected language */
	private $dictionary;
  
	/**
	 * Set the language to logged player
	 */
  public function setLocale($lang){
    $this -> lang = $lang;
		$this -> existLang();
  }
	
	/**
	 * Set default language
	 */
	public function setDefaultLang($lang){
		$this -> defaultLang = $lang;
	}
	
	/**
	 * Check if language file exist and require selected lang
	 */
	private function existLang(){
		$fileName = $this->path . 'lang_' . $this->lang . '.php';

		if(file_exists(__DIR__ . "/" . $fileName)){
			require_once $fileName;
		}
		else{
			$this->lang = $this->defaultLang;
			require_once $this->path . 'lang_' . $this->lang . '.php';
		}
		$this->dictionary = $dictionary; // variable from required file
	}
	
  /**
   * Classical translate - appropriate for usage in php
   */
	public function translate($key){
		$translation = $this -> dictionary[$key];			
			
		// Replace arguments
    if (false !== strPos($translation, '{a:')) {
			$replace = array();
			$args = func_get_args();
			for ($i = 1, $max = count($args); $i < $max; $i ++) {
				$replace['{a:' . $i . '}'] = $args[$i];
			}

			return strtr($translation, $replace);
    }

		return $translation;
	}
  
  /**
   * Get translation table - appropriate to give twig
   */
  public function getTable(){
    return $this->dictionary;
  }
	
	/*
	public static function getAvailableLangs(){
		$scan = scandir("php/lib/lang/", 1);	
		print_r($scan);
	}
	*/

}
?>