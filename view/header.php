<!DOCTYPE html>
<html lang="es">
<head>
    <title>Tienda Super Barato</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/diseño.css" type="text/css">
    <link rel="stylesheet" href="assets/css/carrito.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
    <!-- <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->
    <link rel="stylesheet" href="assets/css/ventanas.css">
    <link rel="stylesheet" href="assets/css/ingreso.css">
    <!-- <link rel="stylesheet" href="assets/css/demo.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/footer-distributed.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="view/main.js" />
    <link rel="stylesheet" href="assets/css/carrito.css">
    <link rel="icon" href="logo proyecto.png" type="image/x-icon">
    <script src="assets/carrito.js"></script>
</head>

<body>
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark d-flex justify-content-center">
            <div class="container-sm">
                <a class="navbar-brand" href="#">
                    <i id="abrir" class="bi bi-list navlist"></i>
                    <div class="container_index">
                        <!--  INICIO VENTANA FLOTANTE CATEGORIAS -->
                        <div id="ventana" class="trans">
                            <div class="ventana_header" style="background-color: #FF8119; height: 75px; display: flex; align-items: center; ">
                                <div style="margin-left: 1.5rem;">
                                    <img style="width: 80px;" src="img_logos/logoproyecto.png" alt="">
                                </div>
                                <div style="padding-left: 2rem; color: aliceblue; font-size: 15pt;">
                                    <div style="margin-top: 20px;">
                                        <p style="font-family: 'Open Sans', sans-serif; ;">Tienda </p>
                                    </div>
                                    <div style="margin-top: -27px;">
                                        <p style="font-family: 'Open Sans', sans-serif; ;">Super Barato</p>
                                    </div>
                                </div>
                                <div>
                                    <p style="cursor: pointer; color: aliceblue; margin-left: 90px; font-size: 25pt  ; margin-top: 1rem; font-family: 'Open Sans', sans-serif; ;  " id="cerrar">X</p>
                                </div>
                            </div>
                            <!-- LINKS VENTANA FLOTANTE CATEGORIAS -->
                            <div class="ventana_cuerpo">
                                <button type="button" class="btn w-100"><a href="index.php?c=web&a=frutasverduras">
                                        <div style="display: flex;">
                                            <div>
                                                <p>Frutas y verduras</p>
                                            </div>
                                            <div style="padding-left: 51px;"><i class="bi bi-caret-right-fill"></i>
                                            </div>
                                        </div>
                                    </a></button>
                                <button type="button" class="btn w-100"><a href="index.php?c=web&a=carnicos">
                                        <div style="display: flex;">
                                            <div>
                                                <p>Carnicos</p>
                                            </div>
                                            <div style="padding-left: 139px;"><i class="bi bi-caret-right-fill"></i>
                                            </div>
                                        </div>
                                    </a></button>
                                <button type="button" class="btn w-100"><a href="index.php?c=web&a=lacteos">
                                        <div style="display: flex;">
                                            <div>
                                                <p>Lacteos</p>
                                            </div>
                                            <div style="padding-left: 146px;"><i class="bi bi-caret-right-fill"></i>
                                            </div>
                                        </div>
                                    </a></button>
                                <button type="button" class="btn w-100"><a href="index.php?c=web&a=despensa">
                                        <div style="display: flex;">
                                            <div>
                                                <p>Despensa y Snacks</p>
                                            </div>
                                            <div style="padding-left: 49px;"><i class="bi bi-caret-right-fill"></i>
                                            </div>
                                        </div>
                                    </a></button>
                                <button type="button" class="btn w-100"><a href="index.php?c=web&a=aseo">
                                        <div style="display: flex;">
                                            <div>
                                                <p>Aseo</p>
                                            </div>
                                            <dx|iv style="padding-left: 174px;"><i class="bi bi-caret-right-fill"></i>
                                        </div>
                                    </a></button>
                                <button type="button" class="btn w-100"><a href="index.php?c=web&a=bebidas">
                                        <div style="display: flex;">
                                            <div>
                                                <p>Bebidas</p>
                                            </div>
                                            <div style="padding-left: 144px;"><i class="bi bi-caret-right-fill"></i>
                                            </div>
                                        </div>
                                    </a></button>
                                <button type="button" class="btn w-100"><a href="index.php?c=web&a=panaderia">
                                        <div style="display: flex;">
                                            <div>
                                                <p>Panaderia</p>
                                            </div>
                                            <div style="padding-left: 125px;"><i class="bi bi-caret-right-fill"></i>
                                            </div>
                                        </div>
                                    </a></button>
                                <button type="button" class="btn w-100"><a href="index.php?c=web&a=medicina">
                                        <div style="display: flex;">
                                            <div>
                                                <p>Medicina</p>
                                            </div>
                                            <div style="padding-left: 135px;"><i class="bi bi-caret-right-fill"></i>
                                            </div>
                                        </div>
                                    </a></button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="d-flex align-items-center" href="?">
                            <img src="logo proyecto.png" class="logoheader">
                            <p class="ms-3" style="color: white;">Tienda<br> Super Barato</p>
                        </a>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <form class="d-flex my-2 my-lg-0" method="get" id="search" action="?c=producto&a=buscar">
                        <input class="form-control me-2" name="articulo" type="search" placeholder="Buscar productos" aria-label="Buscar">
                        <button class="btn btn-success me-md-3" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                    <script>
                        const form = document.querySelector("#navbarSupportedContent").children[0];
                        form.addEventListener("submit", (e) => {
                            e.preventDefault();
                            e.stopPropagation();

                            const input = form.querySelector("input");
                            location.href = "?c=producto&a=buscar&articulo=" + input.value
                        })
                    </script>
                    <ul class="navbar-nav ml-lg-auto">

                        <?php

                        if (checksession()) {
                            if (Privilegios::User->get() & $_SESSION["pri_cli"] == Privilegios::User->get()) {
                                echo "";
                            } else {
                                echo ' <li class="nav-item ">


                                <a class="nav-link active text-light me-md-3" aria-current="page" href="?c=producto">
                                    <i class="bi bi-house-gear-fill"></i><br>Administrador
                                </a>
                            </li>';
                            }
                        } else {
                            echo "";
                        }

                        ?>
                        <?php

                        if (checksession()) {
                            if (Privilegios::User->get() & $_SESSION["pri_cli"] == Privilegios::User->get()) {
                        ?>
                                <li class="nav-item ">
                                    <a class="nav-link active text-light me-md-3" aria-current="page" href="?c=web&a=carrito">
                                        <i class="bi bi-cart3"></i><br>Mi carrito
                                    </a>
                                </li>
                            <?php
                            }
                        } else {
                            ?>
                            <li class="nav-item ">
                                <a class="nav-link active text-light me-md-3" aria-current="page" href="?c=web&a=carrito">
                                    <i class="bi bi-cart3"></i><br>Mi carrito
                                </a>
                            </li>
                        <?php
                        }

                        ?>

                        <li class="nav-item ">
                            <a class="nav-link active text-light me-md-3" aria-current="page" href="<?= isset($_SESSION['nombreUsuario']) ? "?c=usuario&a=mostrarVista" : "?c=web&a=ingreso" ?>">
                                <i class="bi bi-person-circle"></i><br>
                                <p>
                                    <?php

                                    if (checksession()) {
                                        if (Privilegios::User->get() & $_SESSION["pri_cli"] == Privilegios::User->get()) {
                                            print($_SESSION['nombreUsuario']);
                                        } else {
                                            echo "Lista de usuarios";
                                        }
                                    } else {
                                        echo "Mi cuenta";
                                    }

                                    ?>
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item ">
                        <a class="nav-link active text-light me-md-3" aria-current="page" href="?c=producto">
                            <i class="bi bi-truck"></i><br>Envíos
                        </a>
                    </li> -->
                        <?php

                        if (checksession()) {
                            if (Privilegios::User->get() & $_SESSION["pri_cli"] == Privilegios::User->get()) {


                        ?>
                                <li class="nav-item">
                                    <span id="abrir3" data-target="ventana3" style="cursor: pointer;" class="nav-link active text-light me-md-3" aria-current="page" href="?c=producto">
                                        <i class="bi bi-bell"></i><br>Notificaciones
                                    </span>
                                </li>
                            <?php
                            }
                        } else {
                            ?>
                            <li class="nav-item">
                                <span id="abrir3" data-target="ventana3"  style="cursor: pointer;" class="nav-link active text-light me-md-3" aria-current="page" href="?c=producto">
                                    <i class="bi bi-bell"></i><br>Notificaciones
                                </span>
                            </li>
                        <?php
                        }
                        ?>

                        <!-- INICIIO VENTANA DE NOTIFICACIONES -->
                        <div id="ventana3" data-ventana class="notificaciones-container">
                            <div class="notificacion-header">
                            <i class="bi bi-caret-right-fill campana" id="cerrar3" class="close-btn"></i><h3>Notificaciones</h3>
                            </div>
                            <div class="contenedor">
                                <div class="filas_noti">
                                    <div><img src="assets/img_categorias/farmaciaa.png" alt=""></div>
                                    <div>
                                        <p>Lleva tus productos de toda la linea farmaceutica con un 40% de descuenro en
                                            las
                                            marcas
                                            seleccionadas pagando con la tarjeta Visa, Mastercard o Bancolombia</p>
                                    </div>
                                </div>
                                <div class="filas_noti">
                                    <div><img src="assets/img_categorias/carnicos.png" alt=""></div>
                                    <div>
                                        <p>Aprovecha las super ofertas que tenemos en carnicos para ti!
                                            Obten un 20% de descuento en carbes llevando mas de 6kg.</p>
                                    </div>
                                </div>
                                <div class="filas_noti">
                                    <div>
                                        <img src="assets/img_categorias/aseoo.png" alt="">
                                    </div>
                                    <div>
                                        <p>¡Que esperas para aprovechar estos productos de limpieza y tener tu hogar
                                            impecable! Lleva
                                            productos de aseo</p>
                                    </div>
                                </div>
                                <div class="filas_noti">
                                    <div><img src="assets/img_categorias/bebidas.png" alt=""></div>
                                    <div>
                                        <p>¡Grandes descuentos en bebidas y refrescantes! Obten un 50% de descuento en
                                            las
                                            referencias
                                            seleccionadas de bebidas por compras mayor a $100.000 en cualquier producto
                                            de
                                            la tienda.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FIN VENTANA FLOTANTE NOTIFICACIONES -->


                        <?php 
                            if(checksession()){
                                if (Privilegios::User->get() & $_SESSION["pri_cli"] == Privilegios::User->get()) {
                                    ?>
                                    <li class="nav-item">
                            <span id="abri1" data-target="ventana1" style="cursor:  pointer;" class="nav-link active text-light me-md-3" aria-current="page">
                                <i class="bi bi-question-circle"></i><br>Ayuda
                            </span>
                        </li>
                        <?php
                                }
                            }else{
                                ?>
                                   <li class="nav-item">
                            <span id="abri1" data-target="ventana1" style="cursor:  pointer;" class="nav-link active text-light me-md-3" aria-current="page">
                                <i class="bi bi-question-circle"></i><br>Ayuda
                            </span>
                        </li>
                        <?php
                            }
                        ?>
                        



                        <!-- INICIO VENTANA FLOTANTE AYUDA -->
                        <div id="ventana1" data-ventana class="notificacion-container">
                            <svg id="cerrar1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-lg close" viewBox="0 0 16 16">
                                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                            </svg>

                            <div class="fila-noti">
                                <IMG class="img_noti" SRC="logo proyecto.png"></div>
                                <main>
                                    <div ><h2>Centro de Ayuda</h2><br>
                                    </div>
                                    <div class="boton1">
                                    <button class="border-0 btn form-floating mb-3"><a href="?c=web&a=preguntasfrecuentes">
                                        <h5>Preguntas frecuentes</h5><br></button>
                                    </div>
                                    <div class="boton2">
                                    <button class="border-0 btn form-floating mb-3"><a href="?c=web&a=contacto">
                                            <h5>Contacto</h5><br></button>
                                </div></a>
                                <div class="boton4">
                                    <button class="border-0 btn form-floating mb-3"><a href="?c=web&a=escribenos">
                                        <h5>Escribenos</h5><br></button>
                                    </div></a>
                                    <div class="boton5">
                                    <button class="border-0 btn form-floating mb-3"><a href="?c=web&a=gestionpedido">
                                        <h5>¿Como gestionar mi pedido?</h5><br></button>
                                    </div></a>
                                </main>
                            </div>
                        <!-- FIN VENTANA FLOTANTE AYUDA -->
                        <li class="nav-item ">
                            <?php
                            if (isset($_SESSION["nombreUsuario"])) {
                                ?>
                                <a id="cerrar-sesion" class="nav-link active text-light me-md-3" aria-current="page" href="?c=usuario&a=Cerrar">
                                    <i class="bi bi-box-arrow-right"></i><br>Cerrar Sesion
                                </a>

                                <script>
                                    const cerrarSession =document.querySelector("#cerrar-sesion");

                                    cerrarSession.addEventListener("click", (e) => {
                                        e.preventDefault();
                                        e.stopPropagation();

                                        if (!confirm("Estas seguro que deseas cerrar sesión?")) {
                                            return;
                                        }

                                        location.href =cerrarSession.href;
                                    })  
                                </script>

                                <?php
                            }
                            ?>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="d-grid" id="main">
        <script src="view/main.js"></script>
        <script src="assets/js/ventanas.js"></script>