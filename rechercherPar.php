<?php
include 'config/config.php'; 
include 'annonce_class.php';
include 'publicite_class.php';
// pour la publicité
$publicite=new Publicite(3);
$publiciteDetail=$publicite->chercherUne();

$publicite1=new Publicite(2);
$publiciteDetail1=$publicite1->chercherUne();



        $template= 'rechercherPar.phtml'; 
	    include 'layout.phtml';  	 
	





?>