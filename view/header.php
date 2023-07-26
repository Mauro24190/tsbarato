<!DOCTYPE html>
<html lang="es">

<head>
    <title>Tienda Super Barato</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/diseño.css" type="text/css">
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
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark d-flex justify-content-center">
            <div class="container-sm">
                <a class="navbar-brand" href="#">
                    <i id="abrir" class="bi bi-list navlist"></i>
                    <div class="container_index">
                        <!--  INICIO VENTANA FLOTANTE CATEGORIAS -->
                        <div id="ventana" class="trans">
                            <div class="ventana_header"
                                style="background-color: #FF8119; height: 75px; display: flex; align-items: center; ">
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
                                    <p style="cursor: pointer; color: aliceblue; margin-left: 90px; font-size: 25pt  ; margin-top: 1rem; font-family: 'Open Sans', sans-serif; ;  "
                                        id="cerrar">X</p>
                                </div>
                            </div>
                            <!-- LINKS VENTANA FLOTANTE CATEGORIAS -->
                            <div class="ventana_cuerpo">
                                <button type="button" class="btn w-100"><a href="../Productos/VEGETALES/index.html">
                                        <div style="display: flex;">
                                            <div>
                                                <p>Frutas y verduras</p>
                                            </div>
                                            <div style="padding-left: 51px;">></div>
                                        </div>
                                    </a></button>
                                <button type="button" class="btn w-100"><a href="../Productos/CARNICOS/index.html">
                                        <div style="display: flex;">
                                            <div>
                                                <p>Carnicos</p>
                                            </div>
                                            <div style="padding-left: 139px;">></div>
                                        </div>
                                    </a></button>
                                <button type="button" class="btn w-100"><a href="../Productos/LACTEOS/index.html">
                                        <div style="display: flex;">
                                            <div>
                                                <p>Lacteos</p>
                                            </div>
                                            <div style="padding-left: 146px;">></div>
                                        </div>
                                    </a></button>
                                <button type="button" class="btn w-100"><a href="../Productos/DESPENSA/index.html">
                                        <div style="display: flex;">
                                            <div>
                                                <p>Despensa y Snacks</p>
                                            </div>
                                            <div style="padding-left: 49px;">></div>
                                        </div>
                                    </a></button>
                                <button type="button" class="btn w-100"><a href="index.php?c=producto&a=aseo#">
                                        <div style="display: flex;">
                                            <div>
                                                <p>Aseo</p>
                                            </div>
                                            <dx|iv style="padding-left: 174px;">>
                                        </div></a></button>
                                        <button type="button" class="btn w-100"><a href="../Productos/BEBIDAS/index.html">
                                                <div style="display: flex;">
                                                    <div>
                                                        <p>Bebidas</p>
                                                    </div>
                                                    <div style="padding-left: 144px;">></div>
                                                </div>
                                            </a></button>
                                        <button type="button" class="btn w-100"><a
                                                href="../Productos/PANADERIA/index.html">
                                                <div style="display: flex;">
                                                    <div>
                                                        <p>Panaderia</p>
                                                    </div>
                                                    <div style="padding-left: 125px;">></div>
                                                </div>
                                            </a></button>
                                        <button type="button" class="btn w-100"><a
                                                href="../Productos/MEDICINA/index.html">
                                                <div style="display: flex;">
                                                    <div>
                                                        <p>Medicina</p>
                                                    </div>
                                                    <div style="padding-left: 135px;">></div>
                                                </div>
                                            </a></button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="d-flex align-items-center" href="?">
                            <img src="logo proyecto.png" class="logoheader" style="">
                            <p class="ms-3" style="color: white;">Tienda<br> Super Barato</p>
                        </a>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <form class="d-flex my-2 my-lg-0">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn btn-success me-md-3" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item ">
                            <?php
                                if(isset($_SESSION))
                            ?>
                        
                        <a class="nav-link active text-light me-md-3" aria-current="page" href="?c=producto">
                                <i class="bi bi-house-gear-fill"></i><br>Administrador
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active text-light me-md-3" aria-current="page" href="?c=usuario&a=mostrarVista">
                                <i class="bi bi-cart3"></i><br>Mi carrito
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active text-light me-md-3" aria-current="page"
                                href="<?= isset($_SESSION['nombreUsuario']) ? "?c=web&a=perfil" : "?c=web&a=ingreso" ?>">
                                <i class="bi bi-person-circle"></i><br><p><?= isset($_SESSION['nombreUsuario']) ? $_SESSION['nombreUsuario'] : "Mi Cuenta" ?></p>
                            </a>
                        </li>
                        <!-- <li class="nav-item ">
                        <a class="nav-link active text-light me-md-3" aria-current="page" href="?c=producto">
                            <i class="bi bi-truck"></i><br>Envíos
                        </a>
                    </li> -->
                        <li class="nav-item">
                            <span id="abrir3" style="cursor: pointer;" class="nav-link active text-light me-md-3"
                                aria-current="page" href="?c=producto">
                                <i class="bi bi-bell"></i><br>Notificaciones
                            </span>
                        </li>

                        <!-- INICIIO VENTANA DE NOTIFICACIONES -->
                        <div id="ventana3" class="notificaciones-container">
                            <div class="notificacion-header">
                                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="30" fill="currentColor"
                                    class="bi bi-bell-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                                </svg>
                                <h1>NOTIFICACIONES</h1>
                                <button id="cerrar3" class="close-btn">&times;</button>
                            </div>
                            <div class="contenedor">
                                <div class="filas_noti">
                                    <div><img src="IMG/MEDICINA.png" alt=""></div>
                                    <div>
                                        <p>Lleva tus productos de toda la linea farmaceutica con un 40% de descuenro en
                                            las
                                            marcas
                                            seleccionadas pagando con la tarjeta Visa, Mastercard o Bancolombia</p>
                                    </div>
                                </div>
                                <div class="filas_noti">
                                    <div><img src="IMG/CARNICOS.png" alt=""></div>
                                    <div>
                                        <p>Aprovecha las super ofertas que tenemos en carnicos para ti!
                                            Obten un 20% de descuento en carbes llevando mas de 6kg.</p>
                                    </div>
                                </div>
                                <div class="filas_noti">
                                    <div>
                                        <img src="IMG/ASEO.png" alt="">
                                    </div>
                                    <div>
                                        <p>¡Que esperas para aprovechar estos productos de limpieza y tener tu hogar
                                            impecable! Lleva
                                            productos de aseo</p>
                                    </div>
                                </div>
                                <div class="filas_noti">
                                    <div><img src="IMG/GASEOSA.png" alt=""></div>
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

                        <li class="nav-item">
                            <span id="abri1" style="cursor:  pointer;" class="nav-link active text-light me-md-3"
                                aria-current="page">
                                <i class="bi bi-question-circle"></i><br>Ayuda
                            </span>
                        </li>


                        <!-- INICIO VENTANA FLOTANTE AYUDA -->
                        <div class="notificacion-container">
                            <svg id="cerrar1" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                fill="currentColor" class="bi bi-x-lg close" viewBox="0 0 16 16">
                                <path
                                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                            </svg>

                            <div class="fila-noti">
                                <IMG class="img_noti" SRC="IMG/logo proyecto.png" ALIGN=RIGHT WIDTH=75 HEIGHT=50>
                                <main>
                                    <h1>Centro de Ayuda</h1>
                                    <p>Preguntas Frecuentes</p>
                                    <p>Politicas de cambios y devoluciones</p>
                                    <p>Solicitu de Garantia</p>
                                    <p>Contacto</p>
                                    <p>Cambia tu producto facil</p>
                                    <p>Almacenes</p>
                                    <p>Escribenos</p>
                                    <p>¿Como gestionar mi pedido?</p>
                                    <p>Actualizar mis datos</p>
                                </main>
                            </div>
                        </div>
                        <!-- FIN VENTANA FLOTANTE AYUDA -->
                        <li class="nav-item ">
                            <?php
                                   if (isset($_SESSION["nombreUsuario"])){
                                    echo ' <a class="nav-link active text-light me-md-3" aria-current="page" href="?c=usuario&a=Cerrar">
                                    <i class="bi bi-box-arrow-right"></i><br>Cerrar Sesion
                                </a>';
                                   }else{
                                    echo "no";
                                   }
                            ?>
                           
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="d-grid">
        <script src="assets/js/ventanas.js"></script>
        <script src="view/main.js"></script>