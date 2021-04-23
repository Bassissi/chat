<?php
include 'config/config.php'; 
include 'annonce_class.php';
include 'publicite_class.php';

 //$numPage = isset($_GET['numPage']) ? $_GET['numPage'] : 1;

/* instanciation un  objet pour chercher les annonces perdues*/
$annonceP=new Annonce('perdu');
	if ($annonceP->chercherAnnonces()!==null)
			$annoncePs=$annonceP->chercherAnnonces();
 

 if ($_GET['n']=='undefined')
     foreach ($annoncePs as $key => $value) {
           if($key<4)
           	$perduPage[]=$value; 
      }	
     /*
      echo '<pre>'; 
      var_dump($perduPage); 
      echo '</pre>'; 
     */ 

else
	{
		     
		$n=$_GET['n'];
		
	
		if ($n >=2)
			{
			
				$k=$n-1; 
				 
		      foreach ($annoncePs as $key => $value) {
		          if($key>=$k*4 && $key<$n*4 )
		          {
		          	$perduPage[]=$value;
		          	

		          }
		           	
		      }
			}
		
		if($n==1)
		    {
		    	foreach ($annoncePs as $key => $value) {
           if($key<4)
           	$perduPage[]=$value; 
    												  }
		    }	
	}		
?>

<?php foreach($perduPage as $key =>$annonce): ?>
                    
                         <div class="container-fluid perduBox">
							<div class="row perdu textCenter divPA" data_id="<?=$key?>" id="divPA<?=$key?>"  style="margin-right: 10%; margin-left: 10%;">
								<?php 
									if($annonce['sex']=='femelle')
									{
										$sex='chatte';
										$type='perdue';  
									}
									else
									{
										$sex='chat';
										$type='perdu'; 
									}
								?>

								<div class="col-xs-12 col-md-3"><img src=<?=$annonce['url']?>  style=" width:150px; height: 140px; "  class="img-rounded" title='<?=$annonce['name'].', '.$sex.' '.$type.' le ' .$annonce['datePT'] ?>'></div>


								<div class="col-xs-12 col-md-6 perduText">
									<p><?='<span>'.'<strong>'.$annonce['name'].'</strong>'.'</span>'.', '.$sex.' <span style="color:red">'.$type.'</span> le '.$annonce['datePT']?></p>
									<p><?='<strong>Lieu :</strong>'.$annonce['rue'].' '.$annonce['arrondissement'].' Marseille'?></p>
								</div>
								
								<div class="col-xs-12 col-md-3 perduLien">
								   
									<a href='detail.php?idchat=<?=$annonce['idchat']?>&type=perdu' class="btn btn-danger subPA" data_id="<?=$key?>">Voir cette annonce </a>
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
		$('#divPA'+$(this).attr('data_id')).css('opacity','0.5');
		
	}
	function changerOpacity1()
	{
		$('#divPA'+$(this).attr('data_id')).css('opacity','1');
	}
	$('.subPA').on('mouseover',changerOpacity0);
	$('.subPA').on('mouseout',changerOpacity1);

	 </script>

 </body>
 </html>


