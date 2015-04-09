<?php    
	/**
	 * Require all files in directory php like ???.class.php
	 * spl_autoload_register call function with class_name 
	 * 
	 * @author: LynSis
	 * @created: 4.4.2015
	 * @last_update: 8.4.2015  
	 */ 
	function LoadClass($class_name){
		$path = 'php/'.$class_name.'.class.php';
    if(file_exists($path)) {
			require_once $path;
    }
  }
