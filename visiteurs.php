<?php
session_start(); 
include 'config/config.php'; 
include 'Admin_class.php';

 
if($_SESSION['connected']==true)
	{	


		$cVisiteur=Admin::chercherVisiteur();
		// le template
		$template='visiteurs.phtml'; 
		include 'admin.phtml'; 
		 

	}
	else
	{
	
       header("location:login.php"); 
	}

?>