<?php
class Auth{
	/**
	 * Verify player and fill session variables
	 * 
	 * @param String $userName User login
	 * @param String $password User password
	 * @return boolean
	 */
  public static function login($userName, $password){
		$sql = "
			SELECT * 
			FROM " . TABLE_PLAYERS . " 
			WHERE 
				playerName = :playerName AND 
				password = :password		
		";
    $where = array(
      ":playerName" => $userName, 
      ":password" => sha1($password), 
    );   
    $user = DB::assoc(DB::query($sql, $where));
		
    if($user){
      $_SESSION['playerID'] = $user['id'];
      $_SESSION['playerUUID'] = $user['uuid'];
      $_SESSION['playerName'] = $user['playerName'];
			$_SESSION['playerAdmin'] = $user['admin'];
			$_SESSION['playerLang'] = $user['lang'];
			
      return TRUE;
    }
		
		return FALSE;
  }
  
  /**
   * Player logout; delete session
   */
  public static function logout(){
  	$_SESSION = array();
  	unSet($_SESSION);
  	session_unset();
  	session_destroy();
  }
}