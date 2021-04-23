<?php

include 'config/config.php'; 
include 'annonce_class.php';
include 'publicite_class.php';
// pour la publicité
$publicite=new Publicite(4);
$publiciteDetail=$publicite->chercherUne();

$idchat=$_GET['idchat']; 
$type=$_GET['type']; 
$location='Location:modifierPT.php?idchat='.$idchat.'&type='.$type; 

/* instanciation un  objet  pour  supprimer cette annonce */
$annonce0=new Annonce($type);

	if(isset($_POST['modifier']))
	{
		 
		$dateNaissance=date("d/m/Y", strtotime($_POST['dateNaissance']));	

		$existe=$annonce0->verifierIdDateNaissance($idchat,$dateNaissance); 

        if($existe)
        	header($location); 
        else 
        {
	         $messageE='Vérifiez de votre date de naissance !';
	         $template='modifier.phtml';
	         include 'layout.phtml';
        }

    }
    else
    {
	    	 $template='modifier.phtml';
	    	 $typeM=$type;
	    	 if($typeM=='trouve')
    			$typeM='trouvé'; 
    		$templateTitle='modifier une annonce chat '.$typeM; 
	    	$templateDescription='dans cette partie on peut modifier une annonce chat '.$typeM." facilement par la date de naissance de l'utilisateur";
	    	$templateKeywords='modifier, annonce, chat, '.$typeM; 
	         include 'layout.phtml';    	
    }


?>