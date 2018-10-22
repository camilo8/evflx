<?php 
header("Content-Type: text/html;charset=utf-8");
 use evflx\User; 
 require_once('../Clases/Usuario.php');
 $user1 =new User();
 $user2 = new User();
 $user3 = new User();
 $user4 = new User();
 $user5 = new User();
 if(isset($_POST)&& !empty($_POST)){
		$codigo = $_POST['codigo'];
		$grado = $_POST['grado'];
		 if(!empty($codigo)){	
			 $result = $user1->Iniciar($codigo); 
			 $result1 = $user2->Consult_criterios($grado);
			 $result2 = $user3->Consult_Proceso($codigo);
			 $result3 =$user4->Consult_cantidad($codigo);
			 $result4 = $user5->Consult_catidadEvalucion($grado);
		 }
 }
  /*Inicio session*/
session_start();
/* informacion de login  */
foreach($result as $datos){
	   $id = $datos['Id'];
	   $nombre = $datos['Nombre'];
	   $apellido = $datos['Apellido'];
	   $rol = $datos['Rol_Id'];-+
	   $grado = $datos['Grado_id'];
}
/* informacion de login si su proceso finaliso */
 foreach($result2 as $datos){
	   $proceso = $datos['Proceso']; 
 }
/* informacion de login cantidad de estudiantes */
foreach($result3 as $datos){
	$cantidad = $datos['Cantidad']; 
}
/* informacion de login cantidad de estuiantes evaluados*/
foreach($result4 as $datos){
       $evaluados =  $datos['COUNT(evaluacion.Estudiante_id)'];
}
/* cuento los resultados  */
$var = count($result);
$var1 =count($result2);
if($var == 1 ){
	switch($rol){
		case 1:
		/*informacion de principal Estudiantes */
		     $_SESSION['u_criterios'] = $result1;
			 $_SESSION['u_nombre'] = $nombre;
			 $_SESSION['u_apellido'] = $apellido;
			 $_SESSION['u_grado'] = $grado;
			 $_SESSION['u_id'] = $id;
			 if($proceso || $var1 == 0){
				 header('Location:../Vistas/Principal-Estud.php');
			 }else{
				header('Location:../index.php?proceso=no');
			 }
		 break;
		 case 2:
		 	/*informacion de principal Profesores */
		 $_SESSION['u_nombre'] = $nombre;
		 $_SESSION['u_apellido'] = $apellido;
		 $_SESSION['u_grado'] = $grado;
		 $_SESSION['u_id'] = $id;
		 $_SESSION['u_cantidad'] = $cantidad;
		 $_SESSION['u_evaluados']= $evaluados; 
		 	header('Location:../Controladores/Controlador_Listados.php');
		 break;
		 case 3:
			 header('Location:../Vistas/Crear-criterios.php');
		 break;
	}
}else{
	header('Location:../index.php?error=si');
}
?>