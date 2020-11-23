<?php 
require_once("class/estudiante.class.php");
/*function  __autoload ( $ classname ) {
require_once ( "../classes/" . $ classname . ".class.php" );
}*/
$estudiante = new Estudiante("Elias","Munguía","02-jun-1999","5°");
echo "EL NOMBRE ES : ".$estudiante->mostrarData();

 ?>