<?php
//Se incluye el modelo donde conectará el controlador.
class BodyController{
 private $model;
 //Creación del modelo

 //Llamado plantilla principal
 public function Index(){
 require_once 'view/header.php';
 require_once 'view/body.php';
 require_once 'view/footer.php';
 }
}
