<?php

require_once "model/usuario.php";



class UsuarioController
{



    private $model;
    private $usuario;

    public function __CONSTRUCT()
    {
        $this->model = new usuario();
        $this->usuario = new usuario();
    }

    function ingresar()
    {
        //     $usuario = new usuario();
        //     $usuario= $usuario->obtenerxuser($_REQUEST["user_cli"]);
        //     $password = $_REQUEST["pas_cli"];

        //     if($usuario){
        //         if (password_verify($_REQUEST["pas_cli"], $usuario->pas_cli)) {
        //             setcookie("notificacion", "Ingreso exitoso", time() + 5, "/");
        //             header("location: ?");
        //         // setcookie("notificacion","Usuario sí existe",time()+5,"/");
        //         // header("location:?c=web&a=ingreso");

        //     }else{
        //         setcookie("notificacion","Usuario no existe",time()+5,"/");
        //         header("location:?c=web&a=ingreso");
        //     }
        // // }
        // if($_SERVER['REQUEST_METHOD']  === 'POST'){
        //     $user_cli = $_POST['user_cli'];
        //     $pas_cli = $_POST['pas_cli'];


        //     $usuario = $this->usuario->obtenerxuser($user_cli);
        //     if ($usuario && password_verify($pas_cli, $usuario['pas_cli'])) {
        //         // Iniciar sesión o redirigir a la página de inicio
        //         echo 'Inicio de sesión exitoso';
        //         return;
        //     } else {
        //         $error="fallo";
        //     }
        // }

        // $usuario = new usuario();
        // $usuario = $usuario->obtenerxuser($_REQUEST["user_cli"]);

        // if ($usuario) {
        //     if (password_verify($_REQUEST["pas_cli"], $usuario->pas_cli)) {
        //         setcookie("notificacion", "Ingreso exitoso", time() + 5, "/");
        //         header("location: ?");
        //     } else {
        //         setcookie("notificacion", "Contraseña incorrecta", time() + 5, "/");
        //         header("location:?c=web&a=ingreso");
        //     }
        // } else {
        //     setcookie("notificacion", "Usuario no existe", time() + 5, "/");
        //     header("location:?c=web&a=ingreso");
        // }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombreUsuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];

            // Obtener el usuario por el nombre de usuario
            $usuario = $this->usuario->obtenerPorUsuario($nombreUsuario);

            if ($usuario && password_verify($contrasena, $usuario['pas_cli'])) {
                // Inicio de sesión exitoso
                echo 'Inicio de sesión exitoso';
                return;
            } else {
                // Nombre de usuario o contraseña incorrectos
                echo 'Nombre de usuario o contraseña incorrectos';
                return;
            }
        }
    }

    public function ci()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombreUsuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];

            // Guardar el usuario en la base de datos
            $this->usuario->guardarUsuario($nombreUsuario, $contrasena);

            // Redirigir a la página de inicio de sesión
            header("Location: ?c=web&a=ingreso");
            return;
        }
    }



    function Registrar()
    {

        $today = date ("Y-m-d");
        
        $user = new usuario();
        if (
            $_REQUEST["nom_cli"] == "" ||
            $_REQUEST["ape_cli"] == "" ||
            $_REQUEST["cor_cli"] == "" ||
            $_REQUEST["pas_cli"] == "" ||
            $_REQUEST["fch_cli"] == "" ||
            $_REQUEST["cel_cli"] == "" ||
            $_REQUEST["dir_cli"] == ""
        ) {
            setcookie("notificacion", "Por favor llenar todos los campos", time() + 5, "/");
            header("location: ?c=web&a=registro");
        } else if (!filter_var($_REQUEST["cor_cli"], FILTER_VALIDATE_EMAIL)) {
            setcookie("notificacion", "Correo Electronico Invalido", time() + 5, "/");
            header("location: ?c=web&a=registro");
        } else if (!is_numeric($_REQUEST["cel_cli"])) {
            setcookie("notificacion", "El Número de Celular Solo Puede Contener Valores Numericos", time() + 5, "/");
            header("location: ?c=web&a=registro");
        } else if (strlen($_REQUEST["pas_cli"]) < 8 || !preg_match('`[A-Z]`', $_REQUEST["pas_cli"])) {
            setcookie("notificacion", "Extensión de la Contraseña Minima de 8 Caracteres, Además Debe Contener Minino una Mayucusla", time() + 5, "/");
            header("location: ?c=web&a=registro");
        }else if(strtotime($_REQUEST["fch_cli"]) >= strtotime($today)){
            setcookie("notificacion", "La fecha debe ser anterior a la de hoy", time() + 5, "/");
            header("location: ?c=web&a=registro");
        }
         else {
            $user->nom_cli = $_REQUEST["nom_cli"];
            $user->ape_cli = $_REQUEST["ape_cli"];
            $user->cor_cli = $_REQUEST["cor_cli"];
            $user->pas_cli = $_REQUEST["pas_cli"];
            $user->fch_cli = $_REQUEST["fch_cli"];
            $user->cel_cli = $_REQUEST["cel_cli"];
            $user->dir_cli = $_REQUEST["dir_cli"];

            $this->model->Registro($user);
            header("location: ?c=usuario&a=Nuevo");
        }
    }

    function Nuevo()
    {
        plantilla("cuenta/exito.php");
    }
}
