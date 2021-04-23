<?php
include 'config/config.php'; 
include 'annonce_class.php';
include 'publicite_class.php';
include 'visitors_class.php';
/* instanciation trois objets pour chercher les annonces perdues,les annonces trouvées et les annonces retrouvées*/
$annonceP=new Annonce('perdu');
$annonceT=new Annonce('trouve');
$annonceRT=new Annonce('retrouve'); 

// on compte combien on a de visiteurs par rapport Ip Adresse de client. 
	Visitors::verifier($_SERVER['REMOTE_ADDR']);


// pour la publicité
$publicite=new Publicite(1);
$publiciteDetail=$publicite->chercherUne(); 

	if ($annonceP->chercherAnnonces()!==null)
			$annoncePs=$annonceP->chercherAnnonces();

	if ($annonceP->chercherAnnonces()!==null)
			$annonceTs=$annonceT->chercherAnnonces();
	
	if ($annonceP->chercherAnnonces()!==null)
      	$annonceRTs=Annonce::chercherAnnoncesRe();  

$template='index.phtml'; 
$templateTitle='chat perdu ou trouvé Marseille'; 
$templateDescription='Vous pouvez publier des annonces chats perdus ou trouvés marseille france'; 
$templateKeywords='chat, perdu,trouvé, Marseille, France'; 
include 'layout.phtml'; 

?>