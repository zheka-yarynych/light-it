<?php 
/* 
	Author - Yarynych Evgeniy
	Class Core
	Created for connect to Database and standart operations
*/
class Core
{	
	public static $pdo;
	
	public static function dbConnect() //start using database
	{
		self::$pdo = new PDO('mysql:host=localhost;dbname=weather;charset=UTF8', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	}

	public static function dbClose(){ //end using database
		self::$pdo = null;
	}

	public function weatherFromDb($date='', $city='') //get weather from db if we have it
	{
		if(!empty($date) && !empty($city)){
			$q = self::$pdo->query("select * from `history` where `date` = '".$date."' and upper(`city`) = upper('".$_POST['city']."')");
	    	$q = $q->fetch();
	    	if (!empty($q)) {
	    		return $q;
	    	}
	    	else return null;
		}
		else return null;
	}
}
?>