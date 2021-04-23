<?php 
include 'config/config.php'; 
include 'commentaire_class.php'; 
include 'formaTimeF_class.php'; 

$commentaires=new Commentaire($_POST['id_chat']); 
$arrayC=$commentaires->chercherCommentaires(); 

 
?>
<span id="id_chat" style="display: none;"><?=$_POST['id_chat']?></span>
<?php if($arrayC!=null):?>
 	<?php foreach ($arrayC as $value): ?>
    <div class="row paddingCommentaire" >
      <div class="col-xs-12 col-md-4">
           <span class="glyphicon glyphicon-comment spanC"></span>
           <h3><?=$value['pseudo']?></h3>
           <h5><?=$value['mail']?></h5>
           <?php 
           $dateC=FormaTimeF::afficheF($value['dateC']);       
           ?>
           <h6><?=$dateC?></h6>
      </div> 
      <div class="col-xs-12 col-md-8 pCommentaire">    
           <p ><?=$value['commentaire']?></p>
      </div>     
       
           <button name="supprimerC" class="supprimerC btn btn-danger supprimerCommentairA" id="supprimerC"  data_id_s="<?=$value['id']?>">Supprimer
           </button>
    </div>       
 	<?php endforeach; ?>	
<?php endif;?>	
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
   </script>
   <script type="text/javascript">
   	 function supprimerC()
    {

    	if (confirm("Voulez-vous vraiment supprimer cet commentaire ?" ))
    	{
			$.ajax({

		     type: "POST",
		     url: "supprimerC.php",
		     data: 'id_commentaire='+$(this).attr('data_id_s')+'&id_chat='+$('#id_chat').html(),
		     error: function(errorData) {console.log('il y a une error sur supprimer commentaire!')},
		     success: function(data){
		     	console.log('success supprimer commentaire'); 
		     	$('#commentairesAdmin').html(data); 
		     }

			});   
		}	  	
    }
   
 $(document).ready(function(){
 	$('.supprimerC').on('click',supprimerC);
 });  



   </script>	