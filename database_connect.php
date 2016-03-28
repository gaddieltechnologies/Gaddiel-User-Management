<?php
class Database
	{
		private static $dbName = 'jpb_ws' ;
		private static $dbHost = 'gaddieltech.fatcowmysql.com' ;
		private static $dbUsername = 'jpb_ws_gaddiel_2';
		private static $dbUserPassword = '2_g@ddiel_DB';
		 
		private static $cont  = null;
		 
		public function __construct() 
		{
			die('Init function is not allowed');
		}
		 
		public static function connect()
		{
		   // One connection through whole application
		   if ( null == self::$cont )
		   {     
			try
			{
			  self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
			}
			catch(PDOException $e)
			{
			  die($e->getMessage()); 
			}
		   }
		   return self::$cont;
		}
		 
		public static function disconnect()
		{
			self::$cont = null;
		}
	}
?>