<?php

//author: qCazelles

class SqlElement {
	
	public $id; //ALL SqlElements have an id
	
	private static $db; //PDO Object
	
	private function getDb() {
		if (self::$db == null) {
			include('../config.php');
			self::$db = new PDO('mysql:host='.$dbHost.';dbname='.$dbName, $dbUser, $dbPassword);
		}
		return self::$db;
	}
	
	protected function execSQL($sql, $params = null) {
		$result = $this->getDb()->prepare($sql);
		$result->execute($params);
		return $result;
	}
	
	protected function save() {
		
	}
	
	
}