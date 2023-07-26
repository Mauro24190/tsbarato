<?php
  require_once "controller/producto.controller.php";
class WebController{

    function carrito(){
        plantilla("carrito.php");
    }
    function ingreso(){
        plantilla("cuenta/ingreso.php");
    }
    function registro(){
        plantilla("cuenta/registro.php");
    }
    function perfil(){
        plantilla("cuenta/perfil.php");
    }
    function categorias(){
        plantilla("categorias/aseo.php");
    }

}