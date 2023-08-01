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
            "listaProductos" => $this->productos->Listar()
        ]);
    }
    function crud(){
        plantilla("admin/usuarios.php",[
            "listaUser" => $this->user->Tabla()
        ]);
    }

}