<?php 
include 'config/config.php'; 
include 'commentaire_class.php'; 
include 'formaTimeF_class.php'; 

 $commentaire=new Commentaire($_POST['id_chat']);


 if($_POST['id_chat']!=null && $_POST['pseudo']!=null && $_POST['mail']!=null && $_POST['commentaire']!=null )
       {	
       	   

		    if(preg_match('#<#',$_POST['pseudo'])==false&&preg_match('#<#',$_POST['mail'])==false&&
          preg_match('#@#',$_POST['mail'])==true&&
          preg_match('#<#',$_POST['commentaire'])==false)
		    {
		          
		          $commentaireA=$commentaire->ecrireAnnonce($_POST['pseudo'],$_POST['mail'],$_POST['commentaire']); 

		    }
	    }
   $arrayC=$commentaire->chercherCommentaires(); 

?>
<?php if($arrayC!=null):?>
 	<?php foreach ($arrayC as $value): ?>
     <div class="row paddingCommentaire" >
            <div class="col-xs-12 col-md-4">
                   <span class="glyphicon glyphicon-comment spanC"></span>
                   <h3 class="pseudoC"><?=$value['pseudo']?></h3>
                   
                   <h5 class="mailC" ><?=$value['mail']?></h5>
                  
                   <?php 
                   $dateC=FormaTimeF::afficheF($value['dateC']);       
                   ?>
                   <h6><?=$dateC?></h6>
            </div> 
            <div class="col-xs-12 col-md-8 pCommentaire">
                        <p><?=$value['commentaire']?></p>
            </div> 
    </div> 
  <?php endforeach;?>  
<?php endif;?>



