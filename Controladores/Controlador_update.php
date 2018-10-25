<?php 
use evflx\Evaluacion;
require_once('../Clases/Consult.php');
if(isset($_GET) && !empty($_GET)){
	if(isset($_GET['DescripP']) && isset($_GET['id'])){
		$update = new Evaluacion();
		 $Id = $_GET['id'];
		 $Descripp = $_GET['DescripP'];
		 $proceso = "Ok";
		$result = $update->UpdateDescrip($Id,$Descripp,$proceso);
		 header('Location:../Vistas/Descrip-Profe.php');
	}
}
?>