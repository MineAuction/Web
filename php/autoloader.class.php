<?php

class Autoloader{

  /** Directory with php files to load */  

  private $path = "php";



  /**

   * Require all files in directory $path

   */     

  public function __construct(){

    if ($handle = openDir($this->path)){

      while (FALSE !== ($entry = readDir($handle))) {

        if(strLen($entry) < 3) continue;

        if($entry == "ajax") continue;   // TODO: oh shit! Kokotovina :)

        

        require_once $entry;

      }

    } 

  }

}

