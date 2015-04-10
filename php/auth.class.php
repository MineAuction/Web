<?php
class Auth{
  /**
   * verify player and fill session variables
   */
  public static function login($player, $password){
    $where = array(
      ":playerName" => $player, 
      ":password" => sha1($password), 
    );
   
    $user = DB::assoc(DB::query("
      SELECT * 
      FROM " . TABLE_PLAYERS . " 
      WHERE 
      playerName = :playerName AND 
      password = :password"
    , $where));
    if(!$user){
      return FALSE;
    }
    else{
      $_SESSION['playerID'] = $user['id'];
      $_SESSION['playerUUID'] = $user['uuid'];
      $_SESSION['playerName'] = $user['playerName'];
      $_SESSION['playerMoney'] = $user['money'];
			$_SESSION['playerAdmin'] = $user['admin'];
      return TRUE;
    }
  }
  
  /**
   * Logout from system; delete session
   */
  public static function logout(){
  	$_SESSION = array();
  	unSet($_SESSION);
  	session_unset();
  	session_destroy();
  }
}
