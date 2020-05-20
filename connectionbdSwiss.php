<?php
/*error_reporting(E_ALL | E_STRIC);*/

class ConnectionbdSwiss {
    static function connect(){

    try
    {
	    $db = new PDO('mysql:host=127.0.0.1;dbname=swissbourdin', 'root', '1234',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	
	    /*$db = new PDO("mysql:host=$hostname;dbname=".$dbname, $username, $password);*/
        return $db;
    }
    catch( Exception $e)
	{
		die('Connexion impossible : ' . $e->getMessage());
		return null;
	}
	
   }
 }

?>
