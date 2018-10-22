<?php
use evflx\User;
require_once("../Clases/Usuario.php");
$user1 = new User();
session_start();
     if(isset($_SESSION['u_grado']) && !empty($_SESSION['u_grado']) && isset($_SESSION['u_nombre']) && isset($_SESSION['u_apellido'])){
         $cursos = $_SESSION['u_grado']; 
         $nombre = $_SESSION['u_nombre'];
         $apellido = $_SESSION['u_apellido'];
         $result = $user1->Evaluados($cursos);
     }
 $var =  count($result);
if($var >  0 ){ 
         $_SESSION['u_cursos'] = $result;  
         $_SESSION['l_grado'] = $cursos; 
         $_SESSION['l_nombre'] = $nombre;
         $_SESSION['l_apellido'] = $apellido;
        header('Location:../Vistas/Listados-Estud.php');
}
