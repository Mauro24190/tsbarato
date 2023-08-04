<?php

require_once "model/usuario.php";

class ErrorController {

    function test() {
        header("HTTP/1.1 200 OK");
        echo json_encode([(new usuario)->Tabla()]);
        exit;
    }

    function page() {
        $code = $_GET["code"];
        $codes = [
            "400" => "Solicitud incorrecta",
            "401" => "No autorizado",
            "402" => "Pago requerido",
            "403" => "Prohibido",
            "404" => "No encontrado",
            "405" => "Método no permitido",
            "406" => "No aceptable",
            "407" => "Autenticación de proxy requerida",
            "408" => "Tiempo de espera agotado",
            "409" => "Conflicto",
            "410" => "Desaparecido",
            "411" => "Longitud requerida",
            "412" => "Falló la precondición",
            "413" => "Carga demasiado grande",
            "414" => "URI demasiado larga",
            "415" => "Tipo de medio no soportado",
            "416" => "Rango no satisfactorio",
            "417" => "Falló la expectativa",
            "418" => "Soy una tetera",
            "421" => "Solicitud mal dirigida",
            "422" => "Entidad no procesable",
            "423" => "Bloqueo",
            "424" => "Fallo en la dependencia",
            "425" => "Colección no ordenada",
            "426" => "Actualización obligatoria",
            "428" => "Precondición requerida",
            "429" => "Demasiadas solicitudes",
            "431" => "Campos de encabezado demasiado grandes",
            "451" => "No disponible por razones legales",
            "500" => "Error interno del servidor",
            "501" => "No implementado",
            "502" => "Pasarela incorrecta",
            "503" => "Servicio no disponible",
            "504" => "Tiempo de espera de la puerta de enlace agotado",
            "505" => "Versión HTTP no compatible",
            "506" => "Variante también negocia",
            "507" => "Almacenamiento insuficiente",
            "508" => "Bucle detectado",
            "509" => "Límite de ancho de banda excedido",
            "510" => "No extendido",
            "511" => "Autenticación de red requerida",
        ];

        plantilla("error.php", [
            "code" => $code,
            "mensaje" => $codes[$code]
        ]);
    }
}