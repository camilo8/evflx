<?php
if(isset($_GET['exito']) == "si"){
	session_start();
	session_destroy();
	header("Location:../index.php?exito=si");
}

if(isset($_GET['cerrar']) == "si"){
	session_start();
	session_destroy();
	header("Location:../index.php");
}
?>