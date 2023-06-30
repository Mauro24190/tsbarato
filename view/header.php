<!DOCTYPE html>
<html lang="es">

<head>
    <title>Tienda Super Barato</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/diseño.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/demo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/footer-distributed.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="view/main.js" />
</head>
<body>
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
                    <button type="button" class="btn w-100"><a href="../Productos/ASEO/index.html">
                            <div style="display: flex;">
                                <div>
                                    <p>Aseo</p>
                                </div>
                                <dx|iv style="padding-left: 174px;">>
                            </div>
                            <button type="button" class="btn w-100"><a href="../Productos/BEBIDAS/index.html">
                                    <div style="display: flex;">
                                        <div>
                                            <p>Bebidas</p>
                                        </div>
                                        <div style="padding-left: 144px;">></div>
                                    </div>
                                </a></button>
                            <button type="button" class="btn w-100"><a href="../Productos/PANADERIA/index.html">
                                    <div style="display: flex;">
                                        <div>
                                            <p>Panaderia</p>
                                        </div>
                                        <div style="padding-left: 125px;">></div>
                                    </div>
                                </a></button>
                            <button type="button" class="btn w-100"><a href="../Productos/MEDICINA/index.html">
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
                <img src="logo proyecto.png" class="logoheader" style="">
            </a>
            <p style="color: white;">Tienda<br> Super Barato</p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-success me-md-3" type="submit"><i class="bi bi-search"></i></button>
                </form>
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item ">
                        <a class="nav-link active text-light me-md-3" aria-current="page" href="?c=producto">
                            <i class="bi bi-cart3"></i><br>Mi carrito
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active text-light me-md-3" aria-current="page" href="?c=producto">
                            <i class="bi bi-person-circle"></i><br>Mi cuenta
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active text-light me-md-3" aria-current="page" href="?c=producto">
                            <i class="bi bi-truck"></i><br>Envíos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light me-md-3" aria-current="page" href="?c=producto">
                            <i class="bi bi-bell"></i><br>Notificaciones
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light me-md-3" aria-current="page" href="?c=producto">
                            <i class="bi bi-question-circle"></i><br>Ayuda
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-sm"><br><br>
    <script src="view/main.js"></script>
</body>