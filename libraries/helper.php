<?php

function plantilla($ruta, $parametros=[]){
    extract($parametros);
    include_once "view/header.php";
    include_once "view/$ruta";
    include_once "view/footer.php";
}
function checksession(){
    return false;
}