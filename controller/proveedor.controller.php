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
    $pvd = new proveedor();
    //Captura de los datos del formulario (vista)
    $pvd->nit_pro = $_REQUEST['nit_pro'];
    $pvd->rzs_pro = $_REQUEST['rzs_pro'];
    $pvd->cor_pro = $_REQUEST['cor_pro'];
    $pvd->dir_pro = $_REQUEST['dir_pro'];
    $pvd->cel_pro = $_REQUEST['cel_pro'];
    //Registro al modelo proveedor.
    $this->model->Registrar($pvd);
    //header() es usado para enviar encabezados HTTP sin formato.
    //”Location:” No solamente envía el encabezado al navegador, sino que 
    //también devuelve el código de status (302) REDIRECT al 
    //navegador
    header('Location: index.php');
  }
  //Método que modifica el modelo de un proveedor.
  public function Editar()
  {
    $pvd = new proveedor();
    $pvd->nit_pro = $_REQUEST['nit_pro'];
    $pvd->rzs_pro = $_REQUEST['rzs_pro'];
    $pvd->dir_pro = $_REQUEST['dir_pro'];
    $pvd->cel_pro = $_REQUEST['cel_pro'];
    $this->model->Actualizar($pvd);
    header('Location: index.php');
  }
  //Método que elimina la tupla proveedor con el NIT_nit_pro dado.
  public function Eliminar()
  {
    $this->model->Eliminar($_REQUEST['nit_pro']);
    header('Location: index.php');
  }
} //no borrar ya que es la llave que cierra el class.
