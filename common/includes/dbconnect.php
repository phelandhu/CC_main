<?php
/*
	class dbconnect 
	{	
		private $dbconn = 'localhost';
		private $dblogin = 'ccpbtest';
		private $dbpass = 'Dodger36';
		private $dbname = 'ccpbtest';
		// singleton instance 
		private static $instance; 
		
		// private constructor function 
		// to prevent external instantiation 
		private __construct() { } 
		
		// getInstance method 
		public static function getInstance() { 
			if(!self::$instance) { 
				self::$instance = new self(); 
			} 
			return self::$instance; 
		}
		 
		public function showInfo() {
			return self::dbconn;
		}
	
	}
	*/
	class dbconnect
	{

		private $dbconn = 'localhost';
		private $dblogin = 'ccpbtest';
		private $dbpass = 'Dodger36';
		private $dbname = 'ccpbtest';

		public function __construct() 
		{
			$mysqli = new mysqli($this.dbconn, $this.dblogin, $this.dbpass, $this.dbname);
			return $mysqli;
		}
		
	}
?>
