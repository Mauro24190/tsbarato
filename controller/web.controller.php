<?php

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
}