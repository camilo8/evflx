<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Evaluacion</title>
	<link rel="stylesheet" href="../CSS/listados-Estud.css">
	<link rel="stylesheet" href="../CSS/bootstrap.css">
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
			    	  if(isset($_SESSION['u_cursos']) && isset($_SESSION['l_grado']) && isset($_SESSION['l_nombre']) && isset($_SESSION['l_apellido'])){
						  $evaluados = $_SESSION['u_cursos'];
						  $grado = $_SESSION['l_grado'];
						  $nombre = $_SESSION['l_nombre'];
						  $apellido = $_SESSION['l_apellido'];
						/*print_r($evaluados);*/
						 echo"<a href='../Controladores/Controlador_cerrar.php?cerrar=si' class='icon-exit'> Cerrar Secion</a>";
					  }else{
						 header("Location:../index.php");
					  }
					  	 ?>
			</div>
		</div>	
	</header>
	<section>
		 <div class="container">
		    <div class="row">
				<div class="tabla-student col-12">
					<table class="table">
					<p>Listado del  grado <?php switch($grado){
                         case  1:
						      echo "1A";
						  break;
					} 
					?></p>
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">EV</th>
    </tr>
  </thead>
  <tbody>
	<?php 
	  foreach ($evaluados as $val) {
	
		  ?>
    <tr>
		<th scope="row"><?php echo $val['id'] ;?></th>
		<td><?php echo $val['Nombre'];?></td>
		<td><?php echo $val['Apellido'];?></td>
		<td><a href="../controladores/controlador_evaluar.php?id=<?php echo $val['id']?>&Grado=<?php echo $grado ?>" class="icon-file-text"></a></td>
	</tr>
<?php 
}
?>
</tbody>
</table>
				  </div>
			 </div>
		 </div>
	</section>
	<footer class="container-fluid">
	<div class="row">
		<div class="titulo-footer">
			<h1>Cañaverales 2018</h1>
		</div>
	</div>
	</footer>
</body>
</html>