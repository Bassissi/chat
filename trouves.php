<?php
include 'config/config.php'; 
include 'annonce_class.php';
include 'publicite_class.php';
// pour la publicité
$publicite=new Publicite(2);
$publiciteDetail=$publicite->chercherUne();
session_start(); 

/* instanciation un  objet pour chercher les annonces de chats trouvés*/
$annonceT=new Annonce('trouve');
	if ($annonceT->chercherAnnonces()!==null)
			$annonceTs=$annonceT->chercherAnnonces();

// on compte combien de page qu'on a 
$resultatsT=count($annonceTs); 
if ($resultatsT>4)
	{
		$v=$resultatsT/4; 
		if($v>1 && $v<2)
			{$liens=[1,2];
			} 
		else
			{ 
				if(is_int($v))
				{
					for ($i=1; $i <$v+1; $i++)
					{ 
						$liens[]=$i; 
					}

				}
				else
				{
					for ($i=1; $i <=$v+1; $i++)
					{ 
						$liens[]=$i; 
					}
				}
			}
	}	

// le template
$template='trouves.phtml'; 
$templateTitle='chat trouvé'; 
$templateDescription='Vous pouvez publier des annonces chats trouvés marseille france'; 
$templateKeywords='chat, trouvé, Marseille, France';  
include 'layout.phtml'; 


?>