<?php

/**
* 
*/
class FormaTimeF
{
	
  public static function afficheF($dateSql){
  

         // le numéro de jour dans une semaine
         $jourN= date("N",strtotime($dateSql));
         // le numéro de jour dans un mois
         $jourNM= date("d",strtotime($dateSql));
         // le numéro de mois dans une année 
        $moisN=date("n",strtotime($dateSql));

         // l'année 
        $annee=date("Y",strtotime($dateSql)); 
        // l'heure
        $heure=date("G",strtotime($dateSql));
         // la minute 
         $minute=date("i",strtotime($dateSql)); 


  	$jours=['vide','Landi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche' ]; 
  	$mois=['vide','Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre']; 

      return $jours[$jourN].' '.$jourNM.' '.$mois[$moisN].' '.$annee.' '.$heure.'h'.$minute; 



  }


  
}



?>