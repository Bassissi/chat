 
<!--
 <!DOCTYPE html>
<html>
<body>

<h1>My First Google Map</h1>

<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

</body>
</html> 
-->
<?php
include 'config/config.php'; 
include 'googlemape_class.php'; 
include 'annonce_class.php'; 
include 'Admin_class.php'; 
//echo $_SERVER['SCRIPT_NAME'];
//echo $_SERVER['HTTP_HOST']; 
/*
$rVisiteur=Admin::chercherVisiteur(); 
echo $rVisiteur.'<br>'; 
Admin::changerVVisiteur($rVisiteur+1); 
$rVisiteur=Admin::chercherVisiteur(); 
echo $rVisiteur.'<br>'; 
*/
//Admin::changerVVisiteur(100);
/*
// Un tableau qui va contenir toutes tes images.
var images = new Array();
images[] = "image1.png";
images[] = "image2.gif";
images[] = "lipsum.jpg";
 
var pointeur = 0;
 
function ChangerImage(){
document.getElementById("masuperimage").src = images[pointeur];
 
if(pointeur < images.length - 1){
pointeur++;
}
else{
pointeur = 0;
}
 
window.setInterval("ChangerImage()", 20000)
}
 
// Charge la fonction
window.onload = function(){
ChangerImage();
}
*/
/*
$chercherP= Annonce::chercherParRueP(' traverse de la Seigneurie');

var_dump($chercherP);


$chercherT= Annonce::chercherParRueT(' traverse de la Seigneurie');

var_dump($chercherT);  

$chercherRT= Annonce::chercherParRueRT(' traverse de la Seigneurie');

var_dump($chercherRT);
*/

?>
