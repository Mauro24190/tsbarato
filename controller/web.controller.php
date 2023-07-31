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
    function aseo(){
        plantilla("categorias/aseo.php");
    }
    function despensa(){
        plantilla("categorias/despensa.php");
    }
    function frutasverduras(){
        plantilla("categorias/frutasverduras.php");
    }
    function carnicos(){
        plantilla("categorias/carnicos.php");
    }
    function lacteos(){
        plantilla("categorias/lacteos.php");
    }
    function bebidas(){
        plantilla("categorias/debidas.php");
    }
    function panaderia(){
        plantilla("categorias/panaderia.php");
    }
    function medicina(){
        plantilla("categorias/medicina.php");
    }


}