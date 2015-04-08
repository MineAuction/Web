<?php    
/**
 * 
 * 
 * @author: LynSis
 * @created: 4.4.2015
 * @last_update: 8.4.2015  
 */ 

    //spl_autoload_register call function with class_name 
    //LoadClass include php file to project
        function LoadClass($class_name) {
      if(file_exists('php/'.$class_name.'.class.php')) {
          require_once('php/'.$class_name.'.class.php');
      }
    }
