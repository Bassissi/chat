<?php

class Commentaire
{
    // propriété 
	protected $id_chat; 

  /**
  * 
  * constructeur 
  * @param string $id-chat
  * @return void
  */
	public function __construct($id_chat)
	{
		$this->id_chat=$id_chat; 
	}

  /********************Mes méthodes*****************************/  
  /**-1-
  * 
  * chercherCommentaires 
  * @param  void
  * @return  string array 
  */
  	public function chercherCommentaires()
	  {
	  	$pdo= new PDO(SGBD.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);

	  	$requette=$pdo->prepare("SELECT * FROM `commentaire` WHERE id_chat='$this->id_chat' order by dateC desc");
	  	$requette->execute(array()); 

	  	$resultat=$requette->FetchAll(PDO::FETCH_ASSOC); 
	  	return $resultat; 
	  }

  

  /**-2-
  * 
  * ecrire : écrire une commentaire dans notre tableau sql 
  * @param  tous les paramètres 
  * @return  void
  */
  	public function ecrireAnnonce($pseudo,$mail,$commentaire)
	  {
	  	$pdo= new PDO(SGBD.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);

	  	$requette=$pdo->prepare('INSERT INTO `commentaire` (`id`, `id_chat`, `pseudo`, `mail`,`commentaire`, `dateC`) VALUES (NULL,?,?,?,?,NOW());');
	  	//$moment=NOW(); 
	  	$requette->execute(array($this->id_chat, $pseudo, $mail, $commentaire )); 

	  }  



  /**-3-
  * 
  * supprimer une commentaire 
  * @param  int $id  id de la commentaire 
  * @return  void 
  */
  	public function supprimerCommentaire($id)
	  {
	  	$pdo= new PDO(SGBD.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);

	  	$requette=$pdo->prepare("DELETE FROM `commentaire` WHERE `commentaire`.`id` ='$id'  ");
	  	$resultat=$requette->execute(array());    
      
	  }  



}

?>