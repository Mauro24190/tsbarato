<?php
require_once 'model/producto.php';
require_once 'model/proveedor.php';
require_once 'model/categorias.php';
class ProductoController
{
    private $model;
    private $plantilla;
    public function __CONSTRUCT()
    {
        $this->model = new articulo();
        // $this->plantilla = new articulo();
    }
    //Llamado plantilla principal
    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/producto/producto.php';
        require_once 'view/footer.php';
    }
    public function Crud()
    {
        $prod = new articulo();
        if (isset($_REQUEST['id_art'])) {
            $prod = $this->model->Obtener($_REQUEST['id_art']);
        }
        require_once 'view/header.php';
        require_once 'view/producto/producto-editar.php';
        require_once 'view/footer.php';
    }
    public function Nuevo()
    {
        $categoria = (new categoria())->Listar();
        $prod = new articulo();
        $proveedor = (new proveedor())->Listar();
        require_once 'view/header.php';
        require_once 'view/producto/producto-nuevo.php';
        require_once 'view/footer.php';
    }
    public function Guardar()
    {
        if (
            $_REQUEST['id_pro'] == "0" ||
            $_REQUEST['cat_id'] == "0" ||
            $_REQUEST['nom_art'] == "" ||
            $_REQUEST['pre_art'] == "" ||
            $_REQUEST['des_art'] == "" ||
            $_REQUEST['cod_art'] == ""
        ) {
            setcookie("notificacion", "Error-Todos los campos deben ser llenados", time() + 5, "/");
            header("location:?c=producto&a=Nuevo");
        }
        else if (strlen($_REQUEST['des_art']) > 120) {
            setcookie("notificacion", "Error-Descripcion maxima de 120 caracteres", time() + 5, "/");
            header("location:?c=producto&a=Nuevo");
        } else if ($_REQUEST['pre_art'] <= 0){
            redirect("?c=producto&a=Nuevo", "Error-Precio no Valido");
        } else if (!is_numeric($_REQUEST['cod_art'])){
            redirect("?c=producto&a=Nuevo", "Error-El Codigo Solo Puede Tener Números");
        } 
        else {
            
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $prod = new articulo();
            $prod->nit = $_REQUEST['id_pro'];
            $prod->cat_id = $_REQUEST['cat_id'];
            $prod->nom_art = $_REQUEST['nom_art'];
            $prod->pre_art = $_REQUEST['pre_art'];
            $prod->des_art = $_REQUEST['des_art'];
            $prod->cod_art = $_REQUEST['cod_art'];
            
           
            // setcookie("notificación", "Exito-Exito al guardar", time() + 5, "/");
            // header('Location:?c=producto&a=Nuevo');

            $imagenNombre = $_FILES["imagen"]["name"];
            $imagenTemp = $_FILES["imagen"]["tmp_name"];
            $imagenDestino = "imagenes/" . $imagenNombre;

           
            //tipo de extension de la imagen
            $extension = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);

            if ($extension != "jpg" && $extension != "png") {
                redirect("?c=producto&a=Nuevo", "Error-Extensión no válida");
            }

            $prod->imagen = $imagenDestino;
        
            if (move_uploaded_file($imagenTemp, $imagenDestino)) {
                if (!$this->model->Registrar($prod)) {
                    redirect("?c=producto&a=Nuevo", "Error-No se registro el producto"); 
                    unlink($imagenDestino);
                }
                redirect("?c=producto&a=Nuevo", "Exito-Producto agregado"); 
                exit();
            } else {
                redirect("?c=producto&a=Nuevo", "Error-No se subio el producto"); 
            }
        }

    }

    public function Editar()
    {
        $prod = new articulo();
        $prod->id_art = $_REQUEST['id_art'];
        $prod->nit = $_REQUEST['nit'];
        $prod->nom_art = $_REQUEST['nom_art'];
        $prod->pre_art = $_REQUEST['pre_art'];
        $prod->des_art = $_REQUEST['des_art'];
        $this->model->Actualizar($prod);
        header('Location: index.php?c=producto');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id_art']);
        header('Location: index.php?c=producto');
    }


    public function buscar(){
        $articuloBuscado = $_GET["articulo"];

        $articulos = $this->model->buscarArticulo($articuloBuscado);
       
        if (!$this->model->existeArticulo($articuloBuscado)) {
            redirect("?", "Error-Producto no Existe");
        }elseif($articuloBuscado == ""){
            redirect("?", "Error-Campo Vacio");
        }

        plantilla("producto/producto-buscar.php", [
            "articuloBuscado" => $this->model->buscarArticulo($articuloBuscado)
        ]);
        
       
    }
}
