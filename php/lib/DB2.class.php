<?php
/**
 * I know that isn't ideal ;)
 * Methods with self have to be covered
 * PHP doc is in DB.class.php
 */
class DB2 extends DB {
		private static $connection;
		
		public static function connect($data) {
			$dsn = "mysql:dbname=" . $data['name'] . ";host=" . $data['server'] . ";port=3306";
			if (!isset(self::$connection)) {				
				DB2::$connection = new PDO($dsn, $data['user'], $data['pass'], self::$options);
			}
		}
		
		public static function query($sql, $where = NULL){
			$sth = self::$connection->prepare($sql);
			$sth->execute($where);		
			
			return $sth;
		}	
}