<?php
include 'config/config.php'; 
include 'annonce_class.php'; 

/* instanciation un  objet pour chercher les annonces de chats trouvés*/
$annonceT=new Annonce('trouve');
	if ($annonceT->chercherAnnonces()!==null)
			$annonceTs=$annonceT->chercherAnnonces();


 if ($_GET['n']=='undefined')
     foreach ($annonceTs as $key => $value) {
           if($key<4)
           	$trouvePage[]=$value; 
      }	
     /*
      echo '<pre>'; 
      var_dump($trouvePage); 
      echo '</pre>'; 
     */ 
else
	{
		     
		$n=$_GET['n'];
		
	
		if ($n >=2)
			{
			
				$k=$n-1; 
				 
		      foreach ($annonceTs as $key => $value) {
		          if($key>=$k*4 && $key<$n*4 )
		          {
		          	$trouvePage[]=$value;
		          	

		          }
		           	
		      }
			}
		
		if($n==1)
		    {
		    	foreach ($annonceTs as $key => $value) {
           if($key<4)
           	$trouvePage[]=$value; 
    												  }
		    }	
	}		
?>




<?php foreach($trouvePage as $key =>$annonce): ?>

					<div class="container-fluid trouveBox">
							<div class="row trouve textCenter " id="divTA<?=$key?>"  data_id="<?=$key?>" style="margin-left: 10%; margin-right: 10%;">
								<?php 
									if($annonce['sex']=='femelle')
									{
										$sex='chatte';
										$type='trouvée';
									} 
									else
									{
										$sex='chat';
										$type='trouvé'; 
									}
								?>

								<div class="col-xs-12 col-md-3"><img src=<?=$annonce['url']?> style=" width:150px; height: 140px; "  class="img-rounded" title='<?=$annonce['name'].', '.$sex.' '. $type.' le '.$annonce['datePT'] ?>'></div>


								<div class="col-xs-12 col-md-6 trouveText">
									<p><?= '<span>'.'<strong>'.$annonce['name'].'</strong>'.'</span>'.', '.$sex.' <span style="color:green;"> '.$type.'</span> le '.$annonce['datePT']?></p>
									<p><?='<strong>Lieu :</strong>  '.$annonce['rue'].' '.$annonce['arrondissement'].' Marseille'?></p>
								</div>
								
								<div class="col-xs-12 col-md-3 trouveLien">
									<a href="detail.php?idchat=<?=$annonce['idchat']?>&type=trouve" class="btn btn-success subTA " data_id="<?=$key?>">
										 Voir cette annonce
									</a>
								</div>
							</div>
						</div>	
<?php  endforeach;?>
 <html>

 <body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script type="text/javascript">
	/* function pour changerOpacity de div perdu*/
	function changerOpacity0()
	{
		$('#divTA'+$(this).attr('data_id')).css('opacity','0.5');
		
	}
	function changerOpacity1()
	{
		$('#divTA'+$(this).attr('data_id')).css('opacity','1');
	}
	$('.subTA').on('mouseover',changerOpacity0);
	$('.subTA').on('mouseout',changerOpacity1);

	 </script>

 </body>
 </html>