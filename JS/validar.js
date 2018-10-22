$('#btn-evaluacion').click(function(e){
	var campo1 =  $("#inlineFormInputGroup").val();
	 if(campo1 === ""){
	   e.preventDefault();
	   $("#inlineFormInputGroup").addClass("is-invalid");	
	 }
	 if($('#grado').val() == 0){
		$("#grado").addClass("is-invalid");	
		e.preventDefault();
	 }
});

$('#inlineFormInputGroup').click(function(){
	$('#inlineFormInputGroup').removeClass("is-invalid");
});
$('#grado').click(function(){
	$('#grado').removeClass("is-invalid");
});