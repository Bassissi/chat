<?php if($_POST['id']=='rue'):?>

<div class="container-fluid">
	<div class=row>
    <!-- on va utiliser ajax ici le renvenu de ajax dans div traitementC  -->
		<div class="chercher col-xs-12 container-fluid textCenter rechercherDiv" id="traitementR">
		       <div class="row">
		    		<h2>Rechercher </h2>
			   </div>
			   <div class="row textCenter">
			   	    <div class="col-md-4 "></div>
				   	<div class="col-xs-12 col-md-2  motR">		    
						<label for="par">
							<strong>
								 Veuillez chercher par
							</strong>	 
						</label>
	                </div>
					<!-- l'ajax surveille de select par --> 
					<div class="col-xs-12 col-md-2  selectR">
		                <select id="par" name="par" class="form-control">
		                	<option value="rue">Rue</option>
		                	<option value="arrondissement">Arrondissement</option>                	
		                </select>
	            	</div>
	            	<div class="col-md-4"></div>
			    </div>
					<!-- on applique l'ajax par ce input suivantC-->
				<div >	
					<input type="submit" id="suivantR" value="Suivant" class="btn btn-primary">	
				</div>			
			   
		

		</div>
</div>		

<?php else:?>
<div class="container-fluid">
	<div class=row>
    <!-- on va utiliser ajax ici le renvenu de ajax dans div traitementC  -->
		<div class="chercher col-xs-12 container-fluid textCenter rechercherDiv" id="traitementR">
		       <div class="row">
		    		<h2>Rechercher </h2>
			   </div>
			   <div class="row textCenter">
			   	    <div class="col-md-4 "></div>
				   	<div class="col-xs-12 col-md-2  motR">		    
						<label for="par">
							<strong>
								 Veuillez chercher par
							</strong>	 
						</label>
	                </div>
					<!-- l'ajax surveille de select par --> 
					<div class="col-xs-12 col-md-2  selectR">
		                <select id="par" name="par" class="form-control">
		                	<option value="rue">Rue</option>
		                	<option value="arrondissement" selected>Arrondissement</option>                	
		                </select>
	            	</div>
	            	<div class="col-md-4"></div>
			    </div>
					<!-- on applique l'ajax par ce input suivantC-->
				<div >	
					<input type="submit" id="suivantR" value="Suivant" class="btn btn-primary">	
				</div>			
			   
			</div>
</div>
<?php endif;?>	
<script type="text/javascript" src="javascript/javascript.js"></script>

