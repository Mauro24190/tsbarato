<?php
//Se incluye el modelo donde conectará el controlador.
require_once "model/proveedor.php";
class ProveedorController
{
  private $model;
  //Creación del modelo
  public function __CONSTRUCT()
  {
    $this->model = new proveedor();
  }
  //Llamado plantilla principal
  public function Index()
  {
    require_once 'view/header.php';
    require_once 'view/proveedor/proveedor.php';
    require_once 'view/footer.php';
  }
  //Llamado a la vista proveedor-editar
  public function Crud()
  {
    $pvd = new proveedor();
    //Se obtienen los datos del proveedor a editar.
    if (isset($_REQUEST['nit'])) {
      $pvd = $this->model->Obtener($_REQUEST['nit']);
    }
    //Llamado de las vistas.
    require_once 'view/header.php';
    require_once 'view/proveedor/proveedor-editar.php';
    require_once 'view/footer.php';
  }

  //Llamado a la vista proveedor-nuevo
  public function Nuevo()
  {
    $pvd = new proveedor();
    //Llamado de las vistas.
    require_once 'view/header.php';
    require_once 'view/proveedor/proveedor-nuevo.php';
    require_once 'view/footer.php';
  }
  //Método que registrar al modelo un nuevo proveedor.
  public function Guardar()
  {
   if (
     $_REQUEST['nit_pro'] == "" ||
     $_REQUEST['rzs_pro'] == "" ||
     $_REQUEST['cor_pro'] == "" ||
     $_REQUEST['dir_pro'] == "" ||
     $_REQUEST['cel_pro'] == "" 
     ) {
      redirect("?c=proveedor&a=Nuevo", "Error-Por favor llenar todos los campos");   
    }else if (!filter_var($_REQUEST["cor_pro"], FILTER_VALIDATE_EMAIL)) {
      redirect("?c=proveedor&a=Nuevo", "Error-Correo Electronico Invalido");
    }else if (!is_numeric($_REQUEST["cel_pro"])) {
      redirect("?c=proveedor&a=Nuevo", "Error-El Número de Celular Solo Puede Contener Valores Numericos");
    }else if (!is_numeric($_REQUEST["nit_pro"])) {
      redirect("?c=proveedor&a=Nuevo", "Error-Un NIT Solo Puede Contener Números");
    }elseif (strlen($_REQUEST["nit_pro"]) < 9 || strlen($_REQUEST["nit_pro"]) > 9 ) {
      redirect("?c=proveedor&a=Nuevo", "Error-Un NIT consta de 9 digitos númericos");
    }
    else {
    $pvd = new proveedor();
    
    $pvd->nit_pro = $_REQUEST['nit_pro'];
    $pvd->rzs_pro = $_REQUEST['rzs_pro'];
    $pvd->cor_pro = $_REQUEST['cor_pro'];
    $pvd->dir_pro = $_REQUEST['dir_pro'];
    $pvd->cel_pro = $_REQUEST['cel_pro'];
 
    $this->model->Registrar($pvd);

    redirect("?c=proveedor", "Exito-Nuevo Proveedor Registrado");
   }
  }
  
  public function Editar()
  {
    $pvd = new proveedor();
    $pvd->nit_pro = $_REQUEST['nit_pro'];
   if (!filter_var($_REQUEST["cor_pro"], FILTER_VALIDATE_EMAIL)) {
    redirect("?c=proveedor&a=Crud&nit=$pvd->nit_pro", "Error-Correo Electronico Invalido");
   }else if (!is_numeric($_REQUEST["cel_pro"])) {
    redirect("?c=proveedor&a=Crud&nit=$pvd->nit_pro", "Error-El Número de Celular Solo Puede Contener Valores Numericos");
  }else {
    $pvd = new proveedor();
    $pvd->nit_pro = $_REQUEST['nit_pro'];
    $pvd->rzs_pro = $_REQUEST['rzs_pro'];
    $pvd->dir_pro = $_REQUEST['dir_pro'];
    $pvd->cel_pro = $_REQUEST['cel_pro'];
    $this->model->Actualizar($pvd);
    redirect('?c=proveedor', "Exito-Proveedor Actulizado");
   }
   

  }
  public function Eliminar()
  {
    $this->model->Eliminar($_REQUEST['nit_pro']);
    redirect('?c=proveedor', "Exito-Proveedor Eliminado");
  }
} 
