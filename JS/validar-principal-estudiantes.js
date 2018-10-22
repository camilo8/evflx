/*1*/
$('#respuesta1').change(function(){
	if($('#respuesta1').val() === "Siempre"){
		$('.calificar1').css("background","#009933");
	  }
	  if($('#respuesta1').val() === "Casi nunca"){
		$('.calificar1').css("background","red");
	  }
	  if($('#respuesta1').val() === "Algunas veces"){
		$('.calificar1').css("background","#ffcc00");
		}
		if($('#respuesta1').val() === ""){
			$('.calificar1').css("background","#fff");
			}
			
});	
/*2*/
$('#respuesta2').change(function(){
	if($('#respuesta2').val() === "Siempre"){
		$('.calificar2').css("background","#009933");
	  }
	  if($('#respuesta2').val() === "Casi nunca"){
		$('.calificar2').css("background","red");
	  }
	  if($('#respuesta2').val() === "Algunas veces"){
		$('.calificar2').css("background","#ffcc00");
		}
		if($('#respuesta2').val() === ""){
			$('.calificar2').css("background","#fff");
			}
});	
/*3*/
$('#respuesta3').change(function(){
	if($('#respuesta3').val() === "Siempre"){
		$('.calificar3').css("background","#009933");
	  }
	  if($('#respuesta3').val() === "Casi nunca"){
		$('.calificar3').css("background","red");
	  }
	  if($('#respuesta3').val() === "Algunas veces"){
		$('.calificar3').css("background","#ffcc00");
		}
		if($('#respuesta3').val() === ""){
			$('.calificar3').css("background","#fff");
			}
});	
/*4*/
$('#respuesta4').change(function(){
	if($('#respuesta4').val() === "Siempre"){
		$('.calificar4').css("background","#009933");
	  }
	  if($('#respuesta4').val() === "Casi nunca"){
		$('.calificar4').css("background","red");
	  }
	  if($('#respuesta4').val() === "Algunas veces"){
		$('.calificar4').css("background","#ffcc00");
		}
		if($('#respuesta4').val() === ""){
			$('.calificar4').css("background","#fff");
			}
});	
/*5*/
$('#respuesta5').change(function(){
	if($('#respuesta5').val() === "Siempre"){
		$('.calificar5').css("background","#009933");
	  }
	  if($('#respuesta5').val() === "Casi nunca"){
		$('.calificar5').css("background","red");
	  }
	  if($('#respuesta5').val() === "Algunas veces"){
		$('.calificar5').css("background","#ffcc00");
		}
		if($('#respuesta5').val() === ""){
			$('.calificar5').css("background","#fff");
			}
});	
/*6*/
$('#respuesta6').change(function(){
	if($('#respuesta6').val() === "Siempre"){
		$('.calificar6').css("background","#009933");
	  }
	  if($('#respuesta6').val() === "Casi nunca"){
		$('.calificar6').css("background","red");
	  }
	  if($('#respuesta6').val() === "Algunas veces"){
		$('.calificar6').css("background","#ffcc00");
		}
		if($('#respuesta6').val() === ""){
			$('.calificar6').css("background","#fff");
			}
});	
/*7*/
$('#respuesta7').change(function(){
	if($('#respuesta7').val() === "Siempre"){
		$('.calificar7').css("background","#009933");
	  }
	  if($('#respuesta7').val() === "Casi nunca"){
		$('.calificar7').css("background","red");
	  }
	  if($('#respuesta7').val() === "Algunas veces"){
		$('.calificar7').css("background","#ffcc00");
		}
		if($('#respuesta7').val() === ""){
			$('.calificar7').css("background","#fff");
			}
});	
/*8*/
$('#respuesta8').change(function(){
	if($('#respuesta8').val() === "Siempre"){
		$('.calificar8').css("background","#009933");
	  }
	  if($('#respuesta8').val() === "Casi nunca"){
		$('.calificar8').css("background","red");
	  }
	  if($('#respuesta8').val() === "Algunas veces"){
		$('.calificar8').css("background","#ffcc00");
		}
		if($('#respuesta8').val() === ""){
			$('.calificar8').css("background","#fff");
			}
});	
/*9*/
$('#respuesta9').change(function(){
	if($('#respuesta9').val() === "Siempre"){
		$('.calificar9').css("background","#009933");
	  }
	  if($('#respuesta9').val() === "Casi nunca"){
		$('.calificar9').css("background","red");
	  }
	  if($('#respuesta9').val() === "Algunas veces"){
		$('.calificar9').css("background","#ffcc00");
		}
		if($('#respuesta9').val() === ""){
			$('.calificar9').css("background","#fff");
			}
});	

/*valido formulario de envio de evalucion  */
$('#btn').click(function(e){
	var n = $("select").length;
	var x = 0 ; 
	for( var i  = 1 ; i <= n ; i++){
		if($('#respuesta'+i ).val() === ""){
			x = 1; 
			break;
		}
	}
				if(x == 1 ){
				/*	alert("Porfavor llene todas las respuestas");*/
					/*valido por intrucciones*/
				$('#verifique-respuestas').css("background"," #ff8080");
					/*  modifico scrol principla estudinates */
					$("html, body").animate({
						scrollTop: 0
				},1000);
				 /*  no dejo enviar datos */
					e.preventDefault();
				}else{	
					$('#verifique-respuestas').css("background"," #fff");
				}
	/*valido campo descripcion estudiante*/
		if($('#estudiante-Descripcion').val() === ""){
			/* valido por instruccion */
			$('#verifique-texto').css("background"," #ff8080");
			/*  modifico scrol principla estudinates */
			$("html, body").animate({
				scrollTop: 0
				}, 1500);
				/*no dejo envair  datos*/
				e.preventDefault();
			}
		});
