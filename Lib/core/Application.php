<?php

namespace Guanki\Lib\Core;

use Guanki\App\Controller\WebController;
use Guanki\Lib\Core\Helper;

class Application{
    function start() {
        $controlador = $_REQUEST["c"]?? "web";
        $accion = $_REQUEST["a"]?? "index";
        $nomControlador =  "Guanki\App\Controller\\".ucfirst($controlador)."Controller";

        call_user_func_array([new $nomControlador, $accion], []);
        
    }
}

?>