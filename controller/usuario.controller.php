<?php
require_once "model/usuario.php";
include_once "controller/usuario.controller.php";
include_once "libraries/Privilegios.php";



class UsuarioController
{



    private $model;
    private $usuario;

    public function __CONSTRUCT()
    {
        $this->model = new usuario();
        $this->usuario = new usuario();
    }


    public function traer()
    {
     $user = new usuario();
      if (isset($_REQUEST['id_cli'])) {
       $user = $this->model->almacenar($_REQUEST['id_cli']);
      }

      require_once 'view/header.php';
      require_once 'view/admin/editar.php';
      require_once 'view/footer.php';
    }

    function ingresar()
    {
       


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombreUsuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];
            $usuario = $this->usuario->obtenerPorUsuario($nombreUsuario);

            if ($usuario && password_verify($contrasena, $usuario['pas_cli'])) {

                $cliente_id = $usuario['id_cli'];
                $_SESSION['cliente_id'] = $cliente_id;

                $pri_cli = $usuario["pri_cli"];
                $_SESSION['pri_cli'] = $pri_cli;

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

        // $today = date("Y-m-d");

        // $user = new usuario();
        // if (
        //     $_REQUEST["nom_cli"] == "" ||
        //     $_REQUEST["ape_cli"] == "" ||
        //     $_REQUEST["cor_cli"] == "" ||
        //     $_REQUEST["pas_cli"] == "" ||
        //     $_REQUEST["fch_cli"] == "" ||
        //     $_REQUEST["cel_cli"] == "" ||
        //     $_REQUEST["user_cli"] == "" ||
        //     $_REQUEST["dir_cli"] == ""
        // ) {
        //     redirect("?c=web&a=registro", "Error-Por favor llenar todos los campos");
        // } else if (!filter_var($_REQUEST["cor_cli"], FILTER_VALIDATE_EMAIL)) {
        //     redirect("?c=web&a=registro", "Error-Correo Electronico Invalido");
        // } else if (!is_numeric($_REQUEST["cel_cli"])) {
        //     redirect("?c=web&a=registro", "Error-El Número de Celular Solo Puede Contener Valores Numericos");
        // } else if (strlen($_REQUEST["pas_cli"]) < 8 || !preg_match('`[A-Z]`', $_REQUEST["pas_cli"])) {
        //     redirect("?c=web&a=registro", "Error-Extensión de la Contraseña Minima de 8 Caracteres, Además Debe Contener Minino una Mayucusla");
        // } else if (strtotime($_REQUEST["fch_cli"]) >= strtotime($today)) {
        //     redirect("?c=web&a=registro", "Error-La fecha debe ser anterior a la de hoy");
        // }else {
        //     $user->nom_cli = $_REQUEST["nom_cli"];
        //     $user->ape_cli = $_REQUEST["ape_cli"];
        //     $user->cor_cli = $_REQUEST["cor_cli"];
        //     $user->pas_cli = password_hash($_REQUEST["pas_cli"], PASSWORD_DEFAULT);
        //     $user->fch_cli = $_REQUEST["fch_cli"];
        //     $user->cel_cli = $_REQUEST["cel_cli"];
        //     $user->dir_cli = $_REQUEST["dir_cli"];
        //     $user->user_cli = $_REQUEST["user_cli"];

        //     $this->model->Registro($user);
        //     redirect("?", "Exito-Registro de usuario exitoso");
        // }if ($this->model->existeUsuario($user->user_cli)) {
        //     redirect("?c=web&a=registro", "Error-Nombre de usuario ya existe");
        // } else {
        //     $this->model->Registro($user);
        //     redirect("?", "Exito-Registro de usuario exitoso");
        // }

        $today = date("Y-m-d");

        $user = new usuario();
        $user->nom_cli = $_REQUEST["nom_cli"];
        $user->ape_cli = $_REQUEST["ape_cli"];
        $user->cor_cli = $_REQUEST["cor_cli"];
        $user->pas_cli = password_hash($_REQUEST["pas_cli"], PASSWORD_DEFAULT);
        $user->fch_cli = $_REQUEST["fch_cli"];
        $user->cel_cli = $_REQUEST["cel_cli"];
        $user->dir_cli = $_REQUEST["dir_cli"];
        $user->user_cli = $_REQUEST["user_cli"];
    
     
        if ($this->model->existeUsuario($user->user_cli)) {
            redirect("?c=web&a=registro", "Error-Nombre de usuario ya existe");
        } else {
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
            } else if (strtotime($_REQUEST["fch_cli"]) >= strtotime($today)) {
                redirect("?c=web&a=registro", "Error-La fecha debe ser anterior a la de hoy");
            } else if( preg_match('/[0-9]/', $_REQUEST['nom_cli'])){
                redirect("?c=web&a=registro", "Error-Un Nombre No Puede Contener Números");
            } else if(preg_match('/[0-9]/', $_REQUEST['nom_cli'])){
                redirect("?c=web&a=registro", "Error-Un Apellido No Puede Contener Números");
            } else {
                $this->model->Registro($user);
                redirect("?", "Exito-Registro de usuario exitoso");
            }
        }
   
    }


    function Cerrar()
    {
        session_destroy();
        redirect("?", "Exito-Sesión cerrada");
    }

    
    
    function mostrarVista()
    {


        // $cliente_id = obtenerIdClienteActual();
        // $rol_id = $this->model->obtenerRolIdPorClienteId($cliente_id);

        // foreach ($rol_id as $val) {
        //     if ($val["rol_id"] === 2) {
        //         redirect("?c=web&a=crud");
        //         $_SESSION["rol_id"] == 2;
        //     }
        // }

        if(Privilegios::User->get() & $_SESSION["pri_cli"] == Privilegios::User->get()){
            redirect("?c=web&a=perfil");
        }

        
        redirect("?c=web&a=crud");
        // $_SESSION["rol_id"] == 1;
    }


    public function Editar()
    {
        $user = new usuario();
        $user->id_cli = $_REQUEST['id_cli'];
        $user->nom_cli = $_REQUEST['nom_cli'];
        $user->ape_cli = $_REQUEST['ape_cli'];
        $user->user_cli = $_REQUEST['user_cli'];
        $user->cor_cli = $_REQUEST['cor_cli'];
        $user->pri_cli = $_REQUEST['pri_cli'];
        $this->model->Actualizar($user);
        header('Location:?c=web&a=crud');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id_cli']);
        header('Location: ?c=web&a=crud');
    }

    public function perfil(){
        
    }

    public function getByUser() {
        $user = $_GET["user"];
        
        $users = $this->usuario->getByUser($user);
        $newArray = [];
        foreach($users as $value) {
            $privilegios = [];
            if ((Privilegios::Master->get() & $value->pri_cli) == Privilegios::Master->get()) {
                array_push($privilegios, "Maestro");
            }
            if ((Privilegios::Admin->get() & $value->pri_cli) == Privilegios::Admin->get()) {
                array_push($privilegios, "Administrador");
            }
            if ((Privilegios::User->get() & $value->pri_cli) == Privilegios::User->get()) {
                array_push($privilegios, "Usuario");
            }
            $value->pri_cli = $privilegios;
            unset($value->pas_cli);
            array_push($newArray, $value);
        }

        echo json_encode($newArray);
    }

    public function cambioContra(){
        $user = new usuario();
        $oldpass = $_REQUEST['oldpass'];
        $newpass1 = $_REQUEST['newpass'];
        $newpass2 = password_hash($_REQUEST['confirnNewpass'], PASSWORD_DEFAULT);
        
        if($oldpass === $this->model->existeContra()){
            redirect("?c=web&a=perfil", "Error-La Contraseña Antigua No Es Correcta");
        }
        elseif($newpass1 != $newpass2){
            redirect("?c=web&a=perfil", "Error-Las Contraseñas No Coinciden");
        }elseif (strlen($newpass2) < 8 || !preg_match('`[A-Z]`', $newpass2)) {
            redirect("?c=web&a=perfil", "Error-Extensión de la Contraseña Minima de 8 Caracteres, Además Debe Contener Minino una Mayucusla");
        }else{
            $this->model->cambioContra();
        redirect("?c=web&a=perfil");
        }
    }
   
}
