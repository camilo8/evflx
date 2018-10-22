<?php
namespace evflx;
require_once('Conexion.php');
class User{
/* atrivutos de login  */
  private $codigo;	
  private $grado;
  private $cone;
  private $id = NULL; 
  private $criterio1;
  private $criterio2;
  private $criterio3;
  private $criterio4;
  private $criterio5;
  private $criterio6;
  private $criterio7;
  private $criterio8;
  private $criterio9;
  private $DespcrionEstu;
  private $DespcrionPro;
  private $proceso;
  private $Estudiante_id;	
  private $Profesor_id; 
  public $curso;

/* funcion de Conexion */
public function __construct(){
	 $this->cone = new  Conexion();
}

/*funciones de login */
public function Iniciar($codigo){
	  $sql ="SELECT * FROM persona WHERE Codigo = :codigo";
	  $this->codigo = $codigo;
	  $query =$this->cone->prepare($sql);
	  $query->execute([
		  'codigo'=>$this->codigo
		  ]);
	  $result = $query->fetchALL(\PDO::FETCH_ASSOC); 
	  return $result;
}
/*funciones de Estudiantes  principal  */
 public function Consult_criterios($grado){
	$sql ="SELECT *  FROM criterios INNER JOIN grado ON criterios.Grado_id = grado.Id WHERE grado.Nombre  = :grado";
	 $this->grado = $grado;
	 $query = $this->cone->prepare($sql);
	 $query->execute([
		 'grado'=>$this->grado
	 ]);
	 $result = $query->fetchALL(\PDO::FETCH_ASSOC);
	 return $result; 
 }

 public function Consult_Proceso($codigo){
	$sql ="SELECT *  FROM evaluacion INNER JOIN persona ON evaluacion.Estudiante_id = persona.Id WHERE persona.Codigo  = :codigo";
	 $this->codigo = $codigo;
	 $query = $this->cone->prepare($sql);
	 $query->execute([
		 'codigo'=>$this->codigo
	 ]);
	 $result = $query->fetchALL(\PDO::FETCH_ASSOC);
	 return $result; 
 }
 
 public function Inserta_evaluacion($criterio1 , $criterio2 , $criterio3 , $criterio4 , $criterio5 , $criterio6 ,$criterio7 , $criterio8 , $criterio9 , $descripEstudi ,$descripProfe, $proceso , $estudiante , $profesor ){

		$this->criterio1 = $criterio1;
		$this->criterio2=  $criterio2;
		$this->criterio3=  $criterio3;
		$this->criterio4=  $criterio4;
		$this->criterio5=  $criterio5;
		$this->criterio6=  $criterio6;
		$this->criterio7=  $criterio7;
		$this->criterio8=  $criterio8;
		$this->criterio9=  $criterio9;
		$this->DespcrionEstu = $descripEstudi;
		$this->DespcrionPro = $descripProfe;
		$this->proceso = $proceso; 
		$this->Estudiante_id =$estudiante;
		$this->Profesor_id = $profesor;
		$result = $this->Guardar_evaluacion();
 }
 public function Guardar_evaluacion(){
	   $cone  = new Conexion();
	   $sql ="INSERT INTO evaluacion (id , criterio1 , criterio2 ,criterio3, criterio4 , criterio5 , criterio6 , criterio7 , criterio8 , criterio9  ,DespcrionEstu , DespcrionPro , proceso , Estudiante_id, Profesor_id) VALUES(:id , :criterio1 , :criterio2 , :criterio3 , :criterio4 , :criterio5 , :criterio6 , :criterio7, :criterio8 , :criterio9 , :DespcrionEstu , :DespcrionPro , :proceso , :Estudiante_id , :Profesor_id )";
	   $query = $cone->prepare($sql);
	   $result = $query->execute([
		   'id'=>$this->id,
		   'criterio1'=>$this->criterio1,
		   'criterio2'=>$this->criterio2,
		   'criterio3'=>$this->criterio3,
		   'criterio4'=>$this->criterio4,
		   'criterio5'=>$this->criterio5,
		   'criterio6'=>$this->criterio6,
		   'criterio7'=>$this->criterio7,
		   'criterio8'=>$this->criterio8,
		   'criterio9'=>$this->criterio9,
		   'DespcrionEstu'=>$this->DespcrionEstu,
		   'DespcrionPro'=>$this->DespcrionPro,
		   'proceso'=>$this->proceso,
		   'Estudiante_id'=>$this->Estudiante_id,
		   'Profesor_id'=>$this->Profesor_id
	   ]);
	   return $result ;
 }
 /*funciones de principla profesor */
 public function Consult_cantidad($codigo){
	$sql ="SELECT grado.Cantidad  FROM grado INNER JOIN persona ON grado.Id = persona.Grado_id WHERE persona.Codigo  = :codigo";
	 $this->codigo = $codigo;
	 $query = $this->cone->prepare($sql);
	 $query->execute([
		 'codigo'=>$this->codigo
	 ]);
	 $result = $query->fetchALL(\PDO::FETCH_ASSOC);
	 return $result; 
 }
 /*funciones de principla profesor */
 public function Consult_evaluados($codigo){
	$sql ="SELECT evaluacion.Proceso  FROM evaluacion INNER JOIN persona ON evaluacion.Profesor_id = persona.Id WHERE persona.Codigo  = :codigo";
	 $this->codigo = $codigo;
	 $query = $this->cone->prepare($sql);
	 $query->execute([
		 'codigo'=>$this->codigo
	 ]);
	 $result = $query->fetchALL(\PDO::FETCH_ASSOC);
	 return $result; 
 }
 public function Consult_catidadEvalucion($grado){
	$sql ="SELECT COUNT(evaluacion.Estudiante_id) FROM evaluacion INNER JOIN persona ON evaluacion.Estudiante_id = persona.Id WHERE persona.Grado_id =1 ";
	 $this->grado = $grado;
	 $query = $this->cone->prepare($sql);
	 $query->execute([
		 'grado'=>$this->grado
	 ]);
	 $result = $query->fetchALL(\PDO::FETCH_ASSOC);
	 return $result; 
 }
 /*funciones de listados estudiante */

public function Evaluados($curso){
	 $sql ="SELECT id, persona.Nombre , persona.Apellido FROM persona WHERE Rol_Id = 1 and  Grado_id = :curso";
	 $this->curso = $curso;
	 $query = $this->cone->prepare($sql);
	 $query->execute([
	    'curso'=>$this->curso 
	 ]); 
	 $result = $query->fetchAll(\PDO::FETCH_ASSOC);
	 return $result;
}
  
}
?>