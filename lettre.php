<?php
include 'config/config.php'; 
include 'annonce_class.php'; 
if (empty($_POST['id'])==false)
	{
		$lettre = substr($_POST['id'], 0,1); 
		$resultaPL=Annonce::chercherRPL($lettre); 


	}
?>

<?php if(isset($resultaPL)&& empty($resultaPL)==false):?>
    
 
	    <?php foreach ($resultaPL as $value):?>
			
		<option value="<?=$value['rue']?>"><?=$value['rue']?></option>
		
		<?php endforeach;?>	
	

<?php endif;?>	