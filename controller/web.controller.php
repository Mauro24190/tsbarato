<?php
  require_once "controller/producto.controller.php";

  require_once "model/producto.php";

  require_once "controller/usuario.controller.php";

  require_once "model/usuario.php";
class WebController{

    public articulo $productos;
    public usuario $user;

    public function __construct() {
        $this->productos = new articulo();
        $this->user = new usuario();
    }

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
        plantilla("categorias/aseo.php", [
            "listaProductos" => $this->productos->listarAseo()
        ]);
    }
    function bebidas(){
        plantilla("categorias/bebidas.php", [
            "listaProductos" => $this->productos->listarbebidas()
        ]);
    }
    function frutasverduras(){
        plantilla("categorias/frutasverduras.php", [
            "listaProductos" => $this->productos->listarfrutasverduras()
        ]);
    }
    function carnicos(){
        plantilla("categorias/carnicos.php", [
            "listaProductos" => $this->productos->listarcarnicos()
        ]);
    }
    function lacteos(){
        plantilla("categorias/lacteos.php", [
            "listaProductos" => $this->productos->listarlacteos()
        ]);
    }
    function despensa(){
        plantilla("categorias/despensa.php", [
            "listaProductos" => $this->productos->listardespensa()
        ]);
    }
    function panaderia(){
        plantilla("categorias/panaderia.php", [
            "listaProductos" => $this->productos->listarpanaderia()
        ]);
    }
    function medicina(){
        plantilla("categorias/medicina.php", [
            "listaProductos" => $this->productos->listarmedicina()
        ]);
    }










    function crud(){
        if (!checksession()) {
            redirect("?c=error&a=page&code=403");
        }

        if ((Privilegios::Admin->get() & $_SESSION["pri_cli"]) != Privilegios::Admin->get()) {
            redirect("?c=error&a=page&code=403");
        }

        plantilla("admin/usuarios.php",[
            "listaUser" => $this->user->Tabla()
        ]);
    }

    function crudEditar(){
        plantilla("admin/editar.php");
    }



}