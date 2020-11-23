<?php 
require_once("person.class.php");
class Estudiante extends Person
{
	public $ultimogrado;
	function __construct($nombre, $apellido,$fechaNacimiento,$ultimogrado )
	{
		parent::__construct($nombre, $apellido,$fechaNacimiento); 
  		$this->ultimogrado=$ultimogrado; 
	}
	public function mostrarGrado(){
		return $this->ultimogrado;	
	}
	public function mostrarData()
	{
		return parent::fullName(); 
	}
}
 ?>