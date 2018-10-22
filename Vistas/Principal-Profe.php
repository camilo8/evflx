<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Evaluacion</title>
	<link rel="stylesheet" href="../CSS/style-principal-Profe.css">
	<link rel="stylesheet" href="../CSS/bootstrap.min.css">
	<link rel="stylesheet" href="../fonts/style.css">
</head>
<body>
<header class="container-fluid">
		<div class="row">
			<div class="logo-principal col-4">
				<img src="../IMG/logo.jpg" alt="">
			</div>
			<div class="titulo-principal col-6">
				 <h2>Evaluacion Reflexiva</h2>
			</div>
			<div class="cerrar col-2">
			<?php
					session_start();
				  if(isset($_SESSION['u_nombre'])){
					 echo "<a href='../Controladores/Controlador_cerrar.php?cerrar=si' class='icon-exit'> Cerrar Secion</a>";
				  }else{
						header("location:../index.php"); 
				}
				?>
			</div>
		</div>	
	</header>
	<footer class="container-fluid">
	<div class="row">
		<div class="titulo-footer">
			<h1>Cañaverales 2018</h1>
		</div>
	</div>
	</footer>
</body>
</html>