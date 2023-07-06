<?php

    require_once "model/usuario.php";

    

    class UsuarioController{
        function ingresar(){    
            $usuario = new usuario();
            $usuario= $usuario->obtenerxuser($_REQUEST["user_cli"]);
            
            if($usuario){
                setcookie("notificacion","Usuario no existe",time()+5,"/");
                header("location:?c=web&a=ingreso");

            }else{
                setcookie("notificacion","Usuario no existe",time()+5,"/");
                header("location:?c=web&a=ingreso");
            }
        }
    }