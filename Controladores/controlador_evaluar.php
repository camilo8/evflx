<?php
use evflx\Evaluacion;
require_once('../clases/Consult.php');
$eval1 =  new Evaluacion();
$crite = new  Evaluacion();
 if(isset($_GET['id']) && isset($_GET['Grado'])){
	      $grado = $_GET['Grado'];
		 $id = $_GET['id'];
		 $result= $eval1->Eval($id);
		 $result1 = $crite->Crite($grado);
		
	}
	session_start();
   
if(count($result) > 0){
	$_SESSION['u_eval'] = $result;
	$_SESSION['u_cri'] = $result1;
	$_SESSION['u_id'] = $id;
	header('Location:../Vistas/Descrip-Profe.php');
}else{
	 header('Location:../Vistas/Listados-Estud.php');
}

	
?>