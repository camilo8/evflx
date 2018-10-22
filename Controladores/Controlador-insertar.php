<?php
 use evflx\User;
 if(isset($_GET) && !empty($_GET)){
	 require_once('../Clases/Usuario.php');
	 if(isset($_GET['respuesta1']))
	 $criterio1 = $_GET['respuesta1'];
	 $criterio2 = $_GET['respuesta2'];
	 $criterio3 = $_GET['respuesta3'];
	 $criterio4 = $_GET['respuesta4'];
	 $criterio5 = $_GET['respuesta5'];
	 $criterio6 = $_GET['respuesta6'];
	 $criterio7 = $_GET['respuesta7'];
	 $criterio8 = $_GET['respuesta8'];
	 $criterio9 = $_GET['respuesta9'];
	 $descripEstudi = $_GET['descripcion1'];
	 $descripProfe = "";
	 $proceso = "";
	 $estudiante = $_GET['id'];
	 $profesor = "123";
	 $user3 = new User();
	 $user3->Inserta_evaluacion($criterio1 , $criterio2 , $criterio3 , $criterio4 , $criterio5 , $criterio6 ,$criterio7 , $criterio8 , $criterio9 , $descripEstudi ,$descripProfe, $proceso , $estudiante , $profesor);
	 echo "<script>
		     alert('su evaluacion fue enviada con exito');
		</script>";
	 header('Location:Controlador_cerrar.php?exito=si');
	 }else{
		 
	 }
	
	  
	
   
 
?>