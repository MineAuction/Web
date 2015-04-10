<?php
class Money{
  private $column_uuid = "uuajdy";
  private $column_money = "monej";
  private $table_name = "";
  private $database_name = "";
  private $server = "";

  public function __construct(){
    DB::connect();
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
    DB::connect();
    return $ret[$this->column_money];
  }
}