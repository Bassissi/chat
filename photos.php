<?php
include 'config/config.php'; 
include 'annonce_class.php';
include 'publicite_class.php';
/* instanciation deux objets pour afficher les photos chats perdues trouvées */

$compteTous=Annonce:: compteTous(); 
$chatsPT=Annonce::chatPT(); 

 
// pour la publicité
$publicite=new Publicite(2);
$publiciteDetail=$publicite->chercherUne(); 

	


	
 

$template='photos.phtml'; 
$templateTitle='photos des chats perdus ou trouvés à Marseille en France'; 
$templateDescription='Vous pouvez regarder les photos des chats perdus ou trouvés marseille france'; 
$templateKeywords='photos,chats, perdus,trouvés, Marseille, France'; 
include 'layout.phtml'; 

?>