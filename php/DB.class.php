<?php
class DB{
	private static $connection;
  /*
	private static $dsn = 'mysql:dbname=###;host=####.#####;port=3306';
	private static $user = '####';
	private static $password = '####';
  */
  
	private static $options = array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
		PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_PERSISTENT => true, 
	);

	public static function connect($dsn, $user, $password) {
		//if (!isset(self::$connection)) {
      //echo $dsn;
			$dbcon = self::$connection = new PDO($dsn, $user, $password, DB::$options);
		//}
	}
  
	/**
	 * Alias pro starou funkci mysql_query()
	 *
	 * @param String $sql SQL kod prikazu
	 * @param array $where pole parametru pokud ma $sql WHERE klauzuli
	 */
	public static function query($sql, $where = NULL){
		$sth = self::$connection->prepare($sql);
		$sth->execute($where);
		
		return $sth;
	}
	
	/**
	 * Alias pro starou funkci mysql_fetch_assoc()
	 *
	 * @param $res Vysledek z metody DB::query()
	 * @return mixed
	 */
	public static function assoc($res){
		$result = $res->fetch(PDO::FETCH_ASSOC);
		
		return $result;
	}
  
	public static function assocAll($res){
		$result = $res->fetchAll(PDO::FETCH_ASSOC);
		
		return $result;
	}
	
	/**
	 * Vrati ID posledniho vlozeneho radku do databaze
	 *
	 * @return ID posledniho zaznamu
	 */
	public static function lastInsertId(){
		return self::$connection->lastInsertId();
	}

  /*
	private static function executeStatement($params) {
		$query = array_shift($params);
		$statement = self::$connection->prepare($query);
		$statement->execute($params);
		return $statement;
	}

	public static function query($query) {
		$statement = self::executeStatement(func_get_args());
		return $statement->rowCount();
	}
  */
  
  
	private static function checkIdentifiers($identifiers) {
		foreach ($identifiers as $identifier) {
			if (!preg_match('/^[a-zA-Z0-9\_\-]+$/u', $identifier))
				throw new Exception('Dangerous identifier in SQL query');
				/* Detekce pokusu o SQL-Injection */
		}
	}

}

