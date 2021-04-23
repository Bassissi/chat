function resultatP()
{
	$.ajax({

        type: "GET",
        url: "resultatP.php?n="+$(this).attr('data-id'),
        data: 'val=',
        error: function (errorData){},
        success : function(data)
	        { 
	        	


	        	$('#tableP').html(data); 
	        	
	        }

	}); 
}

function resultatT()
{


$.ajax({
 
	 type: 'GET',
	 url : "resultatT.php?n="+$(this).attr('data-id'), 
	 data: 'val=', 
	 error: function(errorData){},
	 success: function(data)
	 {
	 		$('#tableT').html(data); 
	 }


}); 

}

function par()
{
	$.ajax({
 
	 type: 'POST',
	 url : "par.php", 
	 data: 'id='+$('#par').val(), 
	 error: function(errorData){console.log('il y a une erreur')},
	 success: function(data)
	 {
	 		$('#traitementR').html(data); 
	 }


}); 
 
}

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

function commentaires()
{
	$.ajax({

     type: "POST",
     url: "commentaires.php",
     data: 'id_chat='+$('#id_chat').html(), 
     error: function(errorData) {console.log($('#id_chat').html())},
     success: function(data){
     	console.log('success des commentaires'); 
     	$('#commentairesDiv').html(data); 
     }

	}); 
}

function commentaireA()
{
	$.ajax({

     type: "POST",
     url: "commentaireA.php",
     data: 'id_chat='+$('#id_chat').html()+'&pseudo='+$('#pseudo').val()+'&mail='+$('#mail').val()+'&commentaire='+$('#commentaire').val(), 
     error: function(errorData) {console.log('il y a une error sur commentaire ajouter')},
     success: function(data){

     	console.log('success ajouter commentaire'); 
     	$('#commentairesDiv').html(data);
     	$('#commentaireF').html('<form >'+'<div class="row">'+'<h3 id="hfCommentaire">Publiez un message</h3>'+
     			'</div>'+'<div class="row paddingFCommentaire">'+'<div class="col-xs-12 col-md-4 textRightF">'+'<label for="pseudo">Pseudo* :</label>'+
     			'</div>'+'<div class="col-xs-12 col-md-4">'+'<input type="text" name="pseudo" id="pseudo" size="25" maxlength="25" minlength="3"  required class="form-control" >'+'</div>'+'<div class="col-md-4"></div>'+
     			'</div>'+'<div class="row paddingFCommentaire">'+'<div class="col-xs-12 col-md-4 textRightF">'+'<label for="mail">E-mail* :</label>'+'</div>'+
     			'<div class="col-xs-12 col-md-4">'+'<input type="email" name="mail" id="mail" size="40" maxlength="40" required class="form-control">'+'</div>'+'<div class="col-md-4"></div>'+'</div>'+'<div class="row paddingFCommentaire">'+
     			'<div class="col-xs-12 col-md-4 textRightF">'+'<label for="commentaire">Votre commentaire* :</label>'+' </div>'+'<div class="col-xs-12 col-md-4">'+'<textarea size="250" maxlength="250" required="" id="commentaire" class="form-control " style="height: 160px;"></textarea>'+'</div>'+'<div class="col-md-4"></div>'+'</div>'+
     			'<div class="row">'+'<div class="col-xs-6"></div>'+'<div class="col-xs-4">'+'<a href="#commentairesDiv" name="publier" id="publier" class="btn btn-primary">Publier</a> '+'</div>'+'<div class="col-xs-4">'+'</div>'+
	       '</form>'); 
     	 $('#publier').on('click',verifierF);
         $('#publier').on('click',commentaireA);

     }

	}); 



}


function verifierF(){
	if($('#pseudo').val()==false)
	{  
	   alert('Veuillez remplir le formulaire.'); 
		 
		$('#publier').attr('href', '#commentaireF');  
	}
	else
	{
		$('#publier').attr('href', '#commentairesDiv');
	}	
    
    if($('#mail').val()==false)
    {
	    alert('Veuillez remplir le formulaire.');
		$('#publier').attr('href', '#commentaireF');  
    }
   else
	{
		$('#publier').attr('href', '#commentairesDiv');
	}   
	if($('#commentaire').val()==false)
	{
		alert('Veuillez remplir le formulaire.');
		$('#publier').attr('href', '#commentaireF');
	}
	else
	{
		$('#publier').attr('href', '#commentairesDiv');
	}

}

function changerBCp1(){
		$(".p1").css("background-color", '#8EA734');
	var color=['#0000CD','#9E444B','#8EA734'];
	console.log(color['0']);
	var i=0;
	function changerBcolor()
	{
		
		    
			$(".p1").css("background-color", color[i]);
			console.log(color[i]);
		   if(i<color.length-1){
		   	i++;
		   }
		   else
		   {
		   	i=0;
		   }
		window.setInterval(changerBcolor(),10000);	   
	}
changerBcolor();

}

/* function pour supprimer le message après 10 secondes*/

function supprimerMessage()
{
	setTimeout(function(){$('.message').css("display","none")}, 20000);
}


/* function pour changerOpacity de Rue*/
	function changerOpacityR0()
	{
		   
		$('#divRR').css('opacity','0.5'); 

	}
	function changerOpacityR1()
	{
		
		$('#divRR').css('opacity','1');

	}
/* function pour changerOpacity de publier Perdu*/
	function changerOpacityP0()
	{
		   
		$('.divPer').css('opacity','0.5'); 

	}
	function changerOpacityP1()
	{
		
		$('.divPer').css('opacity','1');

	}	
/* function pour changerOpacity de publier Perdu*/
	function changerOpacityTT0()
	{
		   
		$('.divTro').css('opacity','0.5'); 

	}
	function changerOpacityTT1()
	{
		
		$('.divTro').css('opacity','1');

	}	

//****************************************************************

/* function pour changerOpacity de div perdu*/
function changerOpacity0()
{
	$('#divP'+$(this).attr('data_id')).css('opacity','0.5');
	
}
function changerOpacity1()
{
	$('#divP'+$(this).attr('data_id')).css('opacity','1');
}
//****************************************************************
/* function pour changerOpacity de div trouvé*/
function changerOpacityT0()
{
	$('#divT'+$(this).attr('data_id')).css('opacity','0.5');
}
function changerOpacityT1()
{
	$('#divT'+$(this).attr('data_id')).css('opacity','1');
}

//****************************************************************


// function pour afficher la liste de nave sur les éléphones portables 
function liste(){
	if($('.navbar').css("display")=="none")
		{
			$('.navbar').css("display","block");	
		} 
   else
  		{
   		$('.navbar').css("display","none");
  		}

}



// changer color un element et derrière element qui le contien
function changerColorBS()
{
	 
	var colorE=$(this).css('color');
	var backE= $('.supprimerD').css('background-color'); 
	 
	
	$(this).css('color',$('.supprimerD').css('background-color'));

	$('.supprimerD').css('background-color',colorE); 
	console.log( $('.supprimerD').css('border','1px solid #800000')); 
	// $(this).css('color',elementD.css('background-color'));
	// elementD.css('background-color',colorE); 
}


function changerColorBM()
{
	 
	var colorE=$(this).css('color');
	var backE= $('.modifierD').css('background-color'); 
	 
	
	$(this).css('color',$('.modifierD').css('background-color'));

	$('.modifierD').css('background-color',colorE); 
	console.log( $('.modifierD').css('border','1px solid #428BCA')); 
	// $(this).css('color',elementD.css('background-color'));
	// elementD.css('background-color',colorE); 
}
function changerColorBI()
{
	 
	var colorE=$(this).css('color');
	var backE= $('.imprimerD').css('background-color'); 
	 
	
	$(this).css('color',$('.imprimerD').css('background-color'));

	$('.imprimerD').css('background-color',colorE); 
	console.log( $('.imprimerD').css('border','1px solid #4A3631')); 
	// $(this).css('color',elementD.css('background-color'));
	// elementD.css('background-color',colorE); 
}


function blockGoogle()
	{
		if($('#googleMap').css('display')=='block')
		{
			$('#googleAffiche').css('display','block'); 
		}
		else
		{
			$('#googleAffiche').css('display','none');
		}	
	}



function afficherT(id, temps)
{
	setTimeout(function(){

		$(id).css("display", 'block'); 
		
	}, temps); 
}
function afficherNone(id,temps)
{
	setTimeout(function(){

		$(id).css("display", 'none'); 
		
	}, temps); 
}




$(document).ready(function(){

	afficherT('#phraseV',2000); 
	afficherNone('#phraseV',3000); 
	afficherT('#infosV',4000); 

     $(blockGoogle); 	
	 $('#supprimerVA').on('mouseover',changerColorBS);
	 $('#supprimerVA').on('mouseout',changerColorBS);
	 $('#modifierVA').on('mouseover',changerColorBM);
	 $('#modifierVA').on('mouseout',changerColorBM);
	 $('#imprimerVA').on('mouseover',changerColorBI);
	 $('#imprimerVA').on('mouseout',changerColorBI);

	$('#logoListe').on('click',liste);

	$('.subT').on('mouseover',changerOpacityT0);
	$('.subT').on('mouseout',changerOpacityT1);	
	$('.subP').on('mouseover',changerOpacity0);
	$('.subP').on('mouseout',changerOpacity1);
  
    $('#subPubT').on('mouseover',changerOpacityTT0);
	$('#subPubT').on('mouseout',changerOpacityTT1);
	$('#subPubP').on('mouseover',changerOpacityP0);
	$('#subPubP').on('mouseout',changerOpacityP1);	   
	$('#subR').on('mouseover',changerOpacityR0);
	$('#subR').on('mouseout',changerOpacityR1);
	$(supprimerMessage);
    $(resultatP);
    $(resultatT); 
    $(chercherL); 
    $(commentaires); 
    $('#publier').on('click',verifierF);
    $('#publier').on('click',commentaireA);    
    $('#rue').on('keyup',chercherL); 
    $('#suivantR').on('click',par); 
    $('.nT').on('click', resultatT); 
	$('.nP').on('click',resultatP); 
}); 