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
        session_start();


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombreUsuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];
            $usuario = $this->usuario->obtenerPorUsuario($nombreUsuario);

            if ($usuario && password_verify($contrasena, $usuario['pas_cli'])) {

                $cliente_id = $usuario['id_cli'];
                $_SESSION['cliente_id'] = $cliente_id;
                
                $_SESSION['nombreUsuario'] = $nombreUsuario;
             
                setcookie("notificacion", "Exito-Ingreso exitoso", time() + 5, "/");
                header("location: ?");
            } else {
                setcookie("notificacion", "Error-Nombre de usuario o Contraseña incorrectos", time() + 5, "/");
                header("location: ?c=web&a=ingreso");
            }
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
            $_REQUEST["user_cli"] == "" ||
            $_REQUEST["dir_cli"] == ""
        ) {
            redirect("?c=web&a=registro", "Error-Por favor llenar todos los campos");
        } else if (!filter_var($_REQUEST["cor_cli"], FILTER_VALIDATE_EMAIL)) {
            redirect("?c=web&a=registro", "Error-Correo Electronico Invalido");
        } else if (!is_numeric($_REQUEST["cel_cli"])) {
            redirect("?c=web&a=registro", "Error-El Número de Celular Solo Puede Contener Valores Numericos");
        } else if (strlen($_REQUEST["pas_cli"]) < 8 || !preg_match('`[A-Z]`', $_REQUEST["pas_cli"])) {
            redirect("?c=web&a=registro", "Error-Extensión de la Contraseña Minima de 8 Caracteres, Además Debe Contener Minino una Mayucusla");
        }else if(strtotime($_REQUEST["fch_cli"]) >= strtotime($today)){
            redirect("?c=web&a=registro", "Error-La fecha debe ser anterior a la de hoy");
        }
         else {
            $user->nom_cli = $_REQUEST["nom_cli"];
            $user->ape_cli = $_REQUEST["ape_cli"];
            $user->cor_cli = $_REQUEST["cor_cli"];
            $user->pas_cli = password_hash($_REQUEST["pas_cli"], PASSWORD_DEFAULT);
            $user->fch_cli = $_REQUEST["fch_cli"];
            $user->cel_cli = $_REQUEST["cel_cli"];
            $user->dir_cli = $_REQUEST["dir_cli"];
            $user->user_cli = $_REQUEST["user_cli"];

            $this->model->Registro($user);
            redirect("?", "Exito-Registro de usuario exitoso");
        }
    }


    function Cerrar(){
        session_destroy();
        redirect("?");
    }

    function mostrarVista() {

          function obtenerIdClienteActual()
    {



        if (isset($_SESSION['cliente_id'])) {
            return $_SESSION['cliente_id'];
        } else {
            return null;
        }
    }
        $cliente_id = obtenerIdClienteActual();
        $rol_id = $this->model->obtenerRolIdPorClienteId($cliente_id);

        foreach($rol_id as $val) {
            if ($val["rol_id"] === 2) {
                redirect("?c=web&a=crud");
                $_SESSION["rol_id"] == 2;
            }
        }

        redirect("?c=web&a=perfil");
        $_SESSION["rol_id"] == 1;
    }
    
}
