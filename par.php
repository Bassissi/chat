<?php if($_POST['id']=='rue'):?>


	<div class="chercher container-fluid textCenter rechercherDiv" >

	    <div class="row">
	    	<h2>Rechercher par rue</h2>
	    </div>
	    	
			<form action="rechercherR.php" method="POST">
			   <div class="row"> 
                <div class="col-xs-12 textCenter">
					<label for="rue">
						<strong style="color: #660000;">
						Ecrivez le nom de la rue
						</strong> 
					</label>
				</div>
				<div class="col-md-4"></div>
				<div class="col-xs-12 col-md-4 textCenter">	
				<!-- on suveille l'input de la rue par ajax -->	
                <input type="text" name="rue"  id="rue" size="50" minlength="4"  maxlength="50" list="RPL" required class="form-control">
                <!-- On met le resutat d'ajax ici pour proposer au client les noms des rues-->
                <datalist id="RPL"></datalist>
				</div>
				<div class="col-md-4"></div>
				</div>
				<div class="row divControl">

				<a id="retournerR" class="btn btn-warning"  >Retourner </a>
				<input type="submit" name="chercherR"  value="Rechercher" class="btn btn-primary">
			   </div>
		   </form>
		
	</div>

<?php else:?>

	<div class="chercher container-fluid textCenter rechercherDiv" >
	    <div class="row">
	    	<h2>Rechercher par arrondissement</h2>
	    </div>	
			<form action="rechercher.php" method="POST">
		<div class="row">
		      <div class="col-xs-12">	    
				<label for="arrondissement">
					<strong style="color: #660000;">
						 Choisissez votre arrondissement
					</strong>	 
				</label>
			  </div>
			  <div class="col-md-4"></div>
			  <div class="col-xs-12 col-md-4">	
				<select name="arrondissement" class="form-control">
					<?php for($i=13001;$i<13017;$i++):?>
						<option value=<?=$i?>>
							<?=$i?>
						</option>
					<?php endfor;?>	
				</select>
			  </div>
			  <div class="col-md-4"></div>	
		</div>
		<div class="row divControl">
				<a id="retournerA" class="btn btn-warning"  >Retourner </a>
				<input type="submit" name="chercher" value="Rechercher" class="btn btn-primary">		
		</div>			
		   </form>
	</div>
<?php endif;?>
<script type="text/javascript">
	function retournerR()
	{
		$.ajax({
          
         type: "POST",
         url: "retourner.php",
         data: 'id='+'rue',
         error : function(errorData){},
         success : function (data){
                       $('#traitementR').html(data); 
                    
         }
		}); 
		
	}
	$('#retournerR').on('click',retournerR);


		function retournerA()
	{
		$.ajax({
          
         type: "POST",
         url: "retourner.php",
         data: 'id='+'arrondissement',
         error : function(errorData){},
         success : function (data){
                       $('#traitementR').html(data); 
                    
         }
		}); 
		
	}
	$('#retournerA').on('click',retournerA);  




	function chercherL() {
		$.ajax({

			
			type: "POST",
			url : "lettre.php",
			data:'id='+$('#rue').val() ,
		
	        error : function  (errorData)  { console.log('il y a une erreur !!!');    },
	        success : function (data){
	        	  $('#RPL').html(data); 
	        	  console.log('success'); 
	   
	        }        

		  }); 	
	}
	$('#rue').on('keyup',chercherL);
</script>






