<?php 
use evflx\Evaluacion;
require_once('../Clases/Consult.php');
if(isset($_GET) && !empty($_GET)){
	if(isset($_GET['DescripP']) && isset($_GET['id']) && isset($_GET['Grado'])){
		$update = new Evaluacion();
		 $Id = $_GET['id'];
		 $grado = $_GET['Grado'];
		 $Descripp = $_GET['DescripP'];
		 $proceso = "Ok";
		$result = $update->UpdateDescrip($Id,$Descripp,$proceso);
		 header('Location:../Controladores/controlador_evaluar.php?update=SI&Grado='.$grado.'&id='.$Id);
	}
}
?>