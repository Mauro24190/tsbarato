<?php
    namespace Guanki\Lib\Core;

    /**
     * Clase para funciones utiles
     */
    class Helper {
        static function plantilla(string $ruta, array $parametros=[]){
            extract($parametros);
            include_once "App/View/base.php";
        }
    }

?>