<?php

    require_once "model/usuario.php";

    

    class UsuarioController{

        public function __CONSTRUCT()
  {
    $this->model = new usuario();
  }

        private $model;

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

        function Registrar(){

            $user = new usuario();

            $user->nom_cli=$_REQUEST["nom_cli"];
            $user->ape_cli=$_REQUEST["ape_cli"];
            $user->cor_cli=$_REQUEST["cor_cli"];
            $user->pas_cli=$_REQUEST["pas_cli"];
            $user->fch_cli=$_REQUEST["fch_cli"];
            $user->cel_cli=$_REQUEST["cel_cli"];
            $user->dir_cli=$_REQUEST["dir_cli"];

            $this->model->registro($user);
            header("location: ?");
        }
    }