<?php

/**
* 
*/
include 'Admin_class.php';
class Visitors
	{
		
		public static function verifier($ip)
		{
			$pdo= new PDO(SGBD.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);

		  	$requette=$pdo->prepare("SELECT ip FROM `visitors` WHERE ip='$ip' ");
		  	$requette->execute(); 

		  	$resultat=$requette->fetch(); 
		  	
	        if(empty($resultat[0]))
	        {
	        	$requette1=$pdo->prepare("INSERT INTO `visitors` (`id`, `ip`, `time`) VALUES(NULL,'$ip',NOW())");
	        	$requette1->execute(); 
	        		$rVisiteur=Admin::chercherVisiteur();  
  				    Admin::changerVVisiteur($rVisiteur+1);

	        }
	        else
	        {	
	        	return false; 
			}
		}

	}



?>