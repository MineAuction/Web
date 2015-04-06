<?php
class Logger {
	private $errors = array();

	public static function error($component,$value) {
		$errors[] = $value.' ('.$component.')';
		self::doLog($component,'danger',$value);
	}

	public static function crit_error($component,$value) {
		$errors[] = $value.' ('.$component.')';
		self::doLog($component,'danger',$value);
	}

	public static function warning($component,$value) {
		self::doLog($component,'warning',$value);
	}
	
	public static function info($component,$value) {
		Logger::doLog($component,'info',$value);
	}

	public static function success($component,$value) {
		self::doLog($component,'success',$value);
	}
  public static function doLog($component,$level,$value) {
   $where = array(":component" => $component,":level" => $level, ":text" => $value);
		 DB::query("INSERT INTO " . TABLE_LOGS . " (component, level, text, time) VALUES (:component, :level, :text, NOW())", $where);
	 }
   public static function log(){
      $logs = DB::assocAll(DB::query('SELECT * FROM ' . TABLE_LOGS ));
      return $logs;
   
   }
}