<?php 
namespace evflx;
require_once('Conexion.php');
class Evaluacion{
	/*atrivuto */
	private $cone;
	public $id;
	public $Estudiante_id;
	public $DespcrionPro;
	public $Proceso;

    public function  __construct(){
		$this->cone = new Conexion();
	}
	/*function de Descrip-profe*/
	public function Eval($id){
	   $sql= "SELECT evaluacion.Criterio1 , evaluacion.Criterio2 , evaluacion.Criterio3, evaluacion.Criterio4 , evaluacion.Criterio5 , evaluacion.Criterio6, evaluacion.Criterio7 , evaluacion.Criterio8, evaluacion.Criterio9, evaluacion.DespcrionEstu , evaluacion.DespcrionPro, persona.Nombre , persona.Apellido , persona.Grado_id FROM evaluacion INNER JOIN persona ON evaluacion.Estudiante_id = persona.id WHERE Estudiante_id= :id";
	$this->id = $id;
	$query=$this->cone->prepare($sql);
    $query->execute([
		 'id'=>$this->id 
	]);
	 $result = $query->fetchAll(\PDO::FETCH_ASSOC);
	 return $result;
	}
	public function Crite($id){
	   $sql="SELECT * FROM  Criterios WHERE Grado_id = :id";
	   $this->id = $id;
	   $query = $this->cone->prepare($sql);
	   $query->execute([
         'id'=>$this->id 
	   ]);
	   $result = $query->fetchAll(\PDO::FETCH_ASSOC);
	   return $result;
	   }
	public function UpdateDescrip($Estudiante_id , $DespcrionPro , $Proceso ){
		$cone = new Conexion();
		$sql="UPDATE evaluacion SET DespcrionPro =:DespcrionPro , Proceso = :Proceso WHERE Estudiante_id = :Estudiante_id";
		$this->Estudiante_id = $Estudiante_id;
		$this->DespcrionPro =$DespcrionPro;
		$this->Proceso = $Proceso;
		$query = $cone->prepare($sql);
		$result = $query->execute([
			'Estudiante_id'=>$this->Estudiante_id,
			'DespcrionPro'=>$this->DespcrionPro,
			'Proceso'=>$this->Proceso
		]);
		return $result;
	}
}
?>