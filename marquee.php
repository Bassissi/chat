<?php 
/*include 'config/config.php'; 
include 'annonce_class.php';*/
$chatTitres=Annonce::chatTitre(); 




  ?>
  <?php foreach($chatTitres as $key => $value):?>
  <?php 
		               
		              

			             if($value['sex']=='femelle' && $value['type']=='perdu') 
			             {
			             	$name='chatte perdue'; 
			             }

			             if($value['sex']=='male' && $value['type']=='perdu') 
			             {
			             	$name='chat perdu'; 
			             }
			             if($value['sex']=='femelle' && $value['type']=='trouve') 
			             {
			             	$name='chatte trouvée'; 
			             }	             
			             if($value['sex']=='male' && $value['type']=='trouve') 
			             {
			             	$name='chat trouvé'; 
			             }             
	                    $petiteD='<span>'.$value['name'].'</span>'.', '.$name.' le '.$value['datePT'].' au '.$value['arrondissement']; 
	?>
	<a  style ="margin-right:500px; " href="detail.php?idchat=<?=$value['idchat']?>&type=<?=$value['type']?>" ><?=$petiteD?></a>


<?php endforeach;?>