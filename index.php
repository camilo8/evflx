<?php
 if(isset($_GET['error']) == "si"){
	echo"<script>
		alert('Usuario no existe');  
	</script>";
 }
 if(isset($_GET['proceso']) == "no"){
	 echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
	 <strong>Proceso no finaliazado!</strong>Podras revisar tu evaluacion con se haya finalisado el proceso
	 <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	   <span aria-hidden='true'>&times;</span>
	 </button>
   </div>";
 }
 if(isset($_GET['exito']) == "si"){
	echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
	<strong>Evaluacion enviada con exito!</strong>Podras revisar tu evaluacion cuando haya finalisado el proceso
	<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	  <span aria-hidden='true'>&times;</span>
	</button>
  </div>";
 }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Evaluacion</title>
	<link rel="stylesheet" href="CSS/style.css">
	<link rel="stylesheet" href="CSS/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/style.css">
</head>
<body  style="background-color:#004080;">
	<section class="container">
		<div class="row">
			<div class="logo" class="col-12">
				<img src="IMG/logo.jpg" alt="" >
			</div>
		    <div class="titulo-login col-12">
				<p>MEMBER LOGIN</p>
			</div>
			<div class="login col-12">
			   <form action="controladores/controlador_login.php" method="POST" >
			   <div class="col-auto">
						<label class="sr-only" for="inlineFormInputGroup">Codigo</label>
					<div class="input-group mb-2">
						<div class="input-group-prepend">
						<div class="input-group-text"><span class="icon-user"></span></div>
					</div>
						<input type="password" class="form-control 
						   <?php 
						     	if($_GET['error'] == 'si'){
                                     echo 'is-invalid';
								 }
						   ?>		
						" id="inlineFormInputGroup" placeholder="Codigo" name="codigo">
						<div class="invalid-feedback">
							<?php 
							  if(isset($_GET['error']) == 'si'){
                                   echo'Codigo no existe porfavor dejite un codigo valido';
							  }else{
								   ?>
								    Porfavor digite un codigo 
								   <?php
							  }
							?>
						</div>
						<select class="form-control form-control 
						<?php 
						     	if($_GET['error'] == 'si'){
                                     echo 'is-invalid';
								 }
						   ?>
						" name="grado" id="grado">
							<option value="0">Curso</option>
							<option value="1A">1A</option>
							<option value="2B">1B</option>
						</select>
						<div class="invalid-feedback">
							<?php 
							  if(isset($_GET['error']) == 'si'){
                                   echo'Estudiante no existe en este grado';
							  }else{
								   ?>
								    Porfavor seleccione un grado 
								   <?php
							  }
							?>
						</div>
				</div>
			</div>
			<div class="btn-login col-12">
				<input type="submit" id="btn-evaluacion" value="INICIAR EVALUACION">
			</div>
			   </form>
		</div>
	</section>
<script src="JS/jquery.js"></script>
<script src="JS/bootstrap.min.js"></script>
<script src="JS/validar.js"></script>
</body>
</html>