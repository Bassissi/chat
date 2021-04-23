<?php
include 'config/config.php'; 
include 'annonce_class.php';
include 'googlemape_class.php'; 
include 'publicite_class.php';
// pour la publicité
$publicite=new Publicite(2);
$publiciteDetail=$publicite->chercherUne();

$type=$_GET['type']; 
$idchat=$_GET['idchat']; 

/* instanciation un  objet  pour chercher  une annonce dont on a besoin */
$annonce=new Annonce($type);
$annonceDetail=$annonce->chercherUne($idchat); 


if($annonceDetail[0]['sex']=='femelle' && $type=='perdu')
	{        
			$sex='chatte';
			$typeA='perdue';  
			$messageContact='Vous avez trouvé cette chatte ? Contactez :'; 
			$messageS=' Est-ce que vous avez retrouvé votre chatte ?'; 
	}	

if($annonceDetail[0]['sex']=='male' && $type=='perdu')
	{
        
			$sex='chat';
			$typeA='perdu'; 
			$messageContact='Vous avez trouvé ce chat ? Contactez :';
			$messageS=' Est-ce que vous avez retrouvé votre chat ?'; 
	}
if($annonceDetail[0]['sex']=='femelle' && $type=='trouve')
	{
			$sex='chatte';
			$typeA='trouvée';  
			$messageContact='Vous êtes le propriétaire de cette chatte ? Contactez :';
			$messageS=' Est-ce que vous avez retrouvé la/le propriétaire de cette chatte ?'; 
	}	

if($annonceDetail[0]['sex']=='male' && $type=='trouve')
	{
			$sex='chat';
			$typeA='trouvé'; 
			$messageContact='Vous êtes le propriétaire de ce chat ? Contactez :';
			$messageS=' Est-ce que vous avez retrouvé la/le propriétaire de ce chat ?';

	}

 // ranger la forme de la date annonce
 $datePublie=date("d/m/Y", strtotime($annonceDetail[0]['dateAnnonce'])); 
// template
  	$templateTitle='www.chat-perdu-marseille.fr'; 
	$templateDescription="dans cette partie on peut imprimer l'annonce ".$sex.' '.$typeA;
	$templateKeywords='Imprimer, annonce, '.$sex.', '.$typeA;  
include 'imprimer.phtml';
  








?>