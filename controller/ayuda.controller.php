<?php
//Se incluye el modelo donde conectará el controlador.
class AyudaController{
 private $model;
 //Creación del modelo

 //Llamado plantilla principal
 public function Index(){
 require_once 'view/header.php';
 require_once 'view/ayuda/preguntasf.html';
 require_once 'view/footer.php';
 }
}
?>