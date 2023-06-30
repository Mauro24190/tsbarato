<?php
require_once 'model/producto.php';
class ProductoController{
 private $model;
 public function __CONSTRUCT(){
 $this->model = new articulo();
 }
 //Llamado plantilla principal
 public function Index(){
 require_once 'view/header.php';
 require_once 'view/producto/producto.php';
 require_once 'view/footer.php';
 }
 public function Crud(){
    $prod = new articulo();
    if(isset($_REQUEST['id_art'])){
    $prod = $this->model->Obtener($_REQUEST['id_art']);
    }
    require_once 'view/header.php';
    require_once 'view/producto/producto-editar.php';
    require_once 'view/footer.php';
}
    public function Nuevo(){
        $prod = new articulo();
        require_once 'view/header.php';
        require_once 'view/producto/producto-nuevo.php';
        require_once 'view/footer.php';
        }
public function Guardar(){
 $prod = new articulo();
 $prod->id_art = $_REQUEST['id_art'];
 $prod->nit = $_REQUEST['nit'];
 $prod->nom_art = $_REQUEST['nom_art'];
 $prod->pre_art = $_REQUEST['pre_art'];
 $prod->des_art = $_REQUEST['des_art'];
 $this->model->Registrar($prod);
 header('Location: index.php?c=producto');
 }

 public function Editar(){
    $prod = new articulo();
$prod->id_art = $_REQUEST['id_art'];
$prod->nit = $_REQUEST['nit'];
$prod->nom_art = $_REQUEST['nom_art'];
$prod->pre_art = $_REQUEST['pre_art'];
$prod->des_art = $_REQUEST['des_art'];
$this->model->Actualizar($prod);
header('Location: index.php?c=producto');
}

public function Eliminar(){
    $this->model->Eliminar($_REQUEST['id_art']);
    header('Location: index.php');
    }
   }//no eliminar esta llave ya que cierra el class. 
   
 