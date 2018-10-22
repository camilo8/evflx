 <?php 
  if(isset($_GET['exito']) == "si"){
		header('location:../Controladores/Controlador_cerrar.php?exito=si');
   }
      
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Evaluacion</title>
	<link rel="stylesheet" href="../CSS/style-principal-Estud.css">
	<link rel="stylesheet" href="../CSS/bootstrap.min.css">
	<link rel="stylesheet" href="../fonts/style.css">
</head>
<body style="background-color:;">
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
	<nav class="container col-12">
		<div class="row">
			<div class="informacion1 col-6">
				<h3>Bienvenid@</h3>
			</div>
			<div class="informacion2 col4">
			      <?php
					 if(isset($_SESSION['u_nombre'])){
						   echo "<p>".$_SESSION['u_nombre']." ".$_SESSION['u_apellido']."</p>";
				   ?>

			</div>
			<div class="informacion3 col-2">
                 <?php
				       switch($_SESSION['u_grado']){
						   case 1:
							echo "<p>1A <span class='icon-book'></span></p>";
						   break;
						   case 2:
						   echo "<p>1B <span class='icon-book'></span></p>";
						  break;
					   }
					 }
				  ?>
			</div>
		</div>
	</nav>
	<section class="container">
		 <div class="row">
		      <div class="intrucciones col-12">
							   <h3>Intrucciones</h3>
							 <ul class="list-group list-group-flush">
								<li class="list-group-item" ><span class="icon-profile"></span> .Leea detenidamente cada criterio y elija 
									en el cuadro de lista opción que mas represente su opinión</li>
								<li class="list-group-item"><span class="icon-bullhorn"></span> .En caso de tener algún atributo en rojo debe llenar la casilla de compromisos.</li>
								<li class="list-group-item" id="verifique-respuestas"><span class="icon-bubble2"></span> .Verifique que hayas dado una  opinion a cada criterio</li>
								<li class="list-group-item"id="verifique-texto"><span class="icon-pencil"></span>Antes de enviar la evaluacion asegurese de que hayas llenado el campo <b>DESCRIPCION ESTUDIANTE</b></li>
								<li class="list-group-item"><span class="icon-pushpin"></span> .Dar click en el boton <b>ENVIAR</b> para terminar el proceso </li>
							 </ul>
			  </div>
			  <?php 
				   if(isset($_SESSION['u_criterios'])){
					   $informacion = $_SESSION['u_criterios'];
					   $var=1;
					   $var1 =1;
					   $var2 =1;
					   $var3 =1;
					   $var4 =1;
					   $var5 =1;
					   foreach($informacion as $datos){?>
				 
				 <div class="<?php echo 'criterio'.$var++; ?> col-6">
					<form  action="../Controladores/Controlador-insertar.php" method="GET">
				  <h3><?php echo $datos['Titulo'] ;?> </h3>
				  <p><?php echo $datos['Descripcion'] ;?></p>
			  </div>
			  <div class="<?php echo 'seleccion'.$var1++; ?> col-3">

						 <div class="form-group">
							 <label for="exampleFormControlSelect1">Seleccione una opcion</label>
							 <select class="form-control" id="<?php echo 'respuesta'.$var3++; ?>" name="<?php echo 'respuesta'.$var2++; ?>">
							 	 <option value="">Seleccionar</option>								
							     <option value="Casi nunca">Casi nunca</option>
								 <option value="Algunas veces">Algunas veces</option>
								 <option value="Siempre">Siempre</option>
							 </select>
						 </div>
			  </div>
			   <div class="<?php echo 'calificar'.$var4++; ?> col-3" id="">
					   
			   </div>
			   <?php
				 }
				}
				?>
			  <div class="decripStudiante col-6">
					<div class="form-group">
						<label for="estudiante-Descripcion">Observacion Estudiante</label>
						<textarea class="form-control" id="estudiante-Descripcion" rows="3" name="descripcion1"></textarea>
					</div>
			  </div>
			  <div class="btn col-6">
				<div class="row">
					<div class="btn1">
					    <input type="hidden" name="id" value="<?php echo $_SESSION['u_id'];  ?>">
						<button type="submit" id="btn">ENVIAR</button>
						</form>
					</div>
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
<script src="../JS/jquery.js"></script>
<script src="../JS/bootstrap.min.js"></script>
<script src="../JS/validar-principal-estudiantes.js"></script>
</body>
</html>