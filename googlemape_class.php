<?php

/**
* classe pour ajouter latitude et longitude 
et les chercher après pour afficher google map
*/
class Googlemape
	{
		
		/**1
		*  charcher fonction pour chercher une googlemape.
		* @param int id_chat
		*@return array 

		*/
		public static function chercher($idChat)
		{
			$pdo= new PDO(SGBD.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);

	  	$requette=$pdo->prepare("SELECT * FROM `googlemape` WHERE id_chat='$idChat' ");
	  	$requette->execute(array()); 

	  	$resultat=$requette->FetchAll(PDO::FETCH_ASSOC); 
	  	return $resultat; 
		}
		/**2
		*  ajouter fonction pour ajouter une googlemape.
		* @param int id_chat int latitude int longitude 
		*@return void

		*/
		public static function ajouter($idChat,$latitude,$longitude)
		{
			$pdo= new PDO(SGBD.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
			 	$requette=$pdo->prepare('INSERT INTO `googlemape` (`id`, `id_chat`, `latitude`, `longitude`) VALUES (NULL,?,?,?);');
	  	//$moment=NOW(); 
	  	$requette->execute(array($idChat, $latitude, $longitude)); 

	
		}
		

	}


?>