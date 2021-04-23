<?php
include 'config/config.php'; 
include 'annonce_class.php';
include 'publicite_class.php';
// pour la publicité
$publicite=new Publicite(3);
$publiciteDetail=$publicite->chercherUne();

$publicite1=new Publicite(2);
$publiciteDetail1=$publicite1->chercherUne();

$templateTitle='rechercher votre chat Marseille par le nom de la rue'; 
$templateDescription="vous pouvez facilement rechercher votre chat à Marseille en écrivant le nom de la rue";
$templateKeywords="rechercher, chat, rue, marseille, france";  
if(isset($_POST['chercherR'])&& empty($_POST['rue'])==false && preg_match('#<#', $_POST['rue'])==false)
	{
	        
			/*	
				$chercherRue=Annonce::chercherParRue($_POST['rue']);
				if(empty($chercherRue)!=false)
					{
						$arayCherche=explode(" ", $_POST['rue']);
						foreach ($arayCherche as  $value) {
							if(empty($chercherRue))
						 	$chercherRue=Annonce::chercherParRue($value);
						 } 
					} 




					$template='resultatRue.phtml';
               if(empty($chercherRue))
	    		{
	    			$messageR='Aucun résultat,vous pouvez lanser dans un autre rue';
	    			$template='rechercherR.phtml';

	    		}

	         
          


	    include 'layout.phtml';  

	    */

         // chercher les annonces de chat perdu

				$annoncePs=Annonce::chercherParRueP($_POST['rue']);
				if(empty($annoncePs)!=false)
					{
						$arayCherche=explode(" ", $_POST['rue']);
						
						foreach ($arayCherche as  $value) {

								if($value!= ''&&$value!= 'rue'&&$value!= 'boulevard' &&$value!= 'bd.'&&$value!= 'de' &&$value!= 'bd'&&$value!= 'avenue' &&strlen($value)>=3  )
								
						 	   	
						 	   		$annoncePs=Annonce::chercherParRueP($value);
						 	   		
						 	   

						 } 
					} 

        // chercher les annonces de chat trouvé
				$annonceTs=Annonce::chercherParRueT($_POST['rue']);
				if(empty($annonceTs)!=false)
					{
						$arayCherche=explode(" ", $_POST['rue']);
						foreach ($arayCherche as  $value) {
							if($value!= ''&&$value!= 'rue'&&$value!= 'boulevard' &&$value!= 'bd.'&&$value!= 'de' &&$value!= 'bd'&&$value!= 'avenue' &&strlen($value)>=3  )
						 	$annonceTs=Annonce::chercherParRueT($value);
						 } 
					}                
       // chercher les annonces de chat retrouvé

				$annonceRTs=Annonce::chercherParRueRT($_POST['rue']);
				if(empty($annonceRTs)!=false)
					{
						$arayCherche=explode(" ", $_POST['rue']);
						foreach ($arayCherche as  $value) {
							if($value!= ''&&$value!= 'rue'&&$value!= 'boulevard' &&$value!= 'bd.'&&$value!= 'de' &&$value!= 'bd'&&$value!= 'avenue' &&strlen($value)>=3  )
						 	$annonceRTs=Annonce::chercherParRueRT($value);
						 } 
					} 	


			$template='resultatRue.phtml';
               if(empty($annoncePs)&&empty($annonceTs)&&empty($annonceRTs)  )
	    		{
	    			$messageR='Aucun résultat,vous pouvez lanser dans un autre rue';
	    			$template='rechercherR.phtml';

	    		}

	         
          


	    include 'layout.phtml';  


	}

else
	{
	
	if(isset($_POST['rue']))
		if(preg_match('#<#', $_POST['rue']))
			$messageR='Vérifiez de votre saisie!'; 
		$template='rechercherR.phtml'; 
		include 'layout.phtml'; 

	}	

?>