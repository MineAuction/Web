<?php

class Money{
  private $column_uuid = "uuajdy";
  private $column_money = "monej";
  private $table_name = "aukce_ajconomy";
  private $database_name = "c2eshop";
  private $server = "lukas.jinonice.cz";

  public function __construct(){
    DB::connect("mysql:dbname=$this->database_name;host=$this->server;port=3306", 'c2lukas', 'belina');
  }
  
  public function getMoney($playerUUID){
    $sql = "
      SELECT $this->column_money 
      FROM $this->table_name 
      WHERE $this->column_uuid = :player_uuid
    ";
    $where = array(
      ":player_uuid" => $playerUUID,   
    );
    
    $ret = DB::assoc(DB::query($sql, $where));
    
    DB::connect('mysql:dbname=c2auction;host=lukas.jinonice.cz;port=3306', 'c2lukas', 'belina');
    return $ret[$this->column_money];
  }
}