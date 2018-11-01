<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Evaluacion</title>
	<link rel="stylesheet" href="../CSS/Descrip-profe.css">
	<link rel="stylesheet" href="../CSS/bootstrap.min.css">
	<link rel="stylesheet" href="../fonts/style.css">
	<link rel="stylesheet" href="../css/Descrip-profe-print.css" media="print">
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
			   if(isset($_SESSION['u_eval']) && isset($_SESSION['u_cri'])){
					 $arrayEval = $_SESSION['u_eval'];
					 $arrayCrite = $_SESSION['u_cri'];
					 $id = $_SESSION['u_id'];
				   ?>
				   <a href="../Controladores/Controlador_cerrar.php?cerrar=si" class="icon-exit"> Cerrar Secion</a>
					 
					 <?php	   
				}else{
					 header('Location:../index.php');
				}
			   ?>
			</div>
		</div>
	</header>
	<nav class="container col-12" >
		<div class="row">
			<div class="informacion2 col-4">
			  <?php
			    foreach ($arrayEval as $key) {
					     $Grado =  $key['Grado_id'];
					?>
					<p> <?php echo $key['Nombre']." ".$key['Apellido'];  switch($key['Grado_id']){
						case 1:
						echo"-1A";
						break;
						
					}?> <span class="icon-book"></span></p>
					<?php 
				 } 
			   ?>
				 <span class="icon-printer" onclick="window.print()"></span>
			</div>
		</div>
	</nav>
	<section>
	  <div class="container" id="container">
	     <div class="row">
			  <div class="Eval col-8">
			  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th  colspan="3">Criterio</th>
    </tr>
  </thead>
  <tbody>
			<?php 
			    foreach ($arrayCrite as $val1) {
						?>
    <tr>
      <th scope="row"><?php echo$val1['Id']; ?></th>
				<td  colspan="3"><?php echo$val1['Descripcion']; ?></td>
						<?php  
					}
			?>
    </tr>
		<tr>
				<td  colspan="3">
				<div class="form-group">
							 <form action="../Controladores/Controlador_update.php" method="GET">
							 <label for="exampleFormControlTextarea1">Comentario Profesor</label>
							 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="DescripP"></textarea>
							 <input type="hidden" name="id" value="<?php echo $id;?>">
							 <input type="hidden" name="Grado" value="<?php echo $Grado;?>">
							 <br>
							 <button type="submit"  class="btn btn-primary">Guardar</button>
							</form>
  </div>
				</td>
				</tr>
  </tbody>
</table>
			  </div>
				<div class="tableValor col-4">
				<table class="table table-bordered">
  <thead>
    <tr>
		<th  colspan="2">#</th>
      <th  colspan="2">Valor</th>
    </tr>
  </thead>
  <tbody>
			<?php 
			    foreach ($arrayEval as $val2) {
						?>
    <tr>
				<td  colspan="3">1</td>
				<td  colspan="3"><?php echo$val2['Criterio1']; ?></td>
						<?php  
					}
			?>
    </tr>
		<?php 
			    foreach ($arrayEval as $val2) {
						?>
    <tr>
				<td  colspan="3">2</td>
				<td  colspan="3"><?php echo$val2['Criterio2']; ?></td>	
						<?php  
					}
			?>
    </tr>
		<?php 
			    foreach ($arrayEval as $val2) {
						?>
    <tr>
				<td  colspan="3">3</td> 	  
				<td  colspan="3"><?php echo$val2['Criterio3']; ?></td>	
						<?php  
					}
			?>
    </tr>
		<?php 
			    foreach ($arrayEval as $val2) {
						?>
    <tr>
				<td  colspan="3">4</td>
				<td  colspan="3"><?php echo$val2['Criterio4']; ?></td>
				
						<?php  
					}
			?>
    </tr>
		<?php 
			    foreach ($arrayEval as $val2) {
						?>
    <tr>
				<td  colspan="3">5</td>
				<td  colspan="3"><?php echo$val2['Criterio5']; ?></td>
				
						<?php  
					}
			?>
    </tr>
		<?php 
			    foreach ($arrayEval as $val2) {
						?>
    <tr>
				<td  colspan="3">6</td>
				<td  colspan="3"><?php echo$val2['Criterio6']; ?></td>
				
						<?php  
					}
			?>
    </tr>
		<?php 
			    foreach ($arrayEval as $val2) {
						?>
    <tr>
				<td  colspan="3">7</td>
				<td  colspan="3"><?php echo$val2['Criterio7']; ?></td>
				
						<?php  
					}
			?>
    </tr>
		<?php 
			    foreach ($arrayEval as $val2) {
						?>
    <tr>
				<td  colspan="3">
				  <h6>Comentario Estudiante</h6>
			  </td>
				<td  colspan="3">
				<?php echo$val2['DespcrionEstu']; ?>
			  </td>
    </tr>
		<td  colspan="3">
				  <h6>Comentario Profesor</h6>
			  </td>
				<td  colspan="3">
				<?php echo$val2['DespcrionPro']; ?>
			  </td>
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
<script src="../JS/jquery.js"></script>
<script src="../JS/bootstrap.min.js"></script>
<script language="JavaScript">
</script>
</body>
</html>