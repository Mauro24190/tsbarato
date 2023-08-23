    <section class=" d-flex align-items-center" style="background-color: #f4f5f7;">
        <div class="container py-3">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">

                            <div class="col-md-4 gradient-custom text-center text-black" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <img src="https://w0.peakpx.com/wallpaper/568/84/HD-wallpaper-gatitos-gato-gatos-thumbnail.jpg" class="img-fluid my-5" style="width: 80px;" />
                                <h5><?php
                                    foreach ($userProfile as $u) :
                                        echo $u->nom_cli;
                                    endforeach ?></h5>
                                <p><?= $u->ape_cli; ?></p>
                                <i class="far fa-edit mb-5"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Tus datos personales</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3 ">
                                            <h6>Correo Electronico</h6>
                                            <p class="text-muted"><?= $u->cor_cli; ?></p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Número de contacto</h6>
                                            <p class="text-muted"><?= $u->cel_cli; ?></p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Fecha de Nacimiento</h6>
                                            <p class="text-muted"><?= $u->fch_cli; ?></p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Dirección</h6>
                                            <p class="text-muted"><?= $u->dir_cli; ?></p>
                                        </div>
                                    </div>
                                    <!-- <h6>Projects</h6>
                                    <hr class="mt-0 mb-4"> -->
                                    <div class="row pt-1">

                                        <div class="col-6 mb-3">
                                            <h6>Nombre de usuario</h6>
                                            <p class="text-muted"><?= $u->user_cli; ?></p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Contraseña</h6>
                                            <p class="text-muted">******** <a id="openChange" href="#">editar</a> </p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                        <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                        <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div id="passChange" class="container" style="align-items: center; display: none; position: absolute; width: 500px; height: 300px;  z-index: 2; background-color: gray;">
                                <h4>Cambio de Contraseña</h4>
                                <h4 id="closeChange" style="cursor: pointer;">X</h4>
                                <form class="d-flex row" style="flex-direction: column;" action="?c=usuario&a=cambioContra" method="post">
                                    <input name="oldpass" placeholder="Ingrese su Contraseña Actual" type="password">
                                    <input class="mt-2" placeholder="Ingrese Contraseña Nueva" name="newpass" type="password">
                                    <input class="mt-2" placeholder="Repita la Contraseña Nueva" name="confirnNewpass" type="password">
                                    <input class="btn btn-success mt-2" type="submit" value="Guardar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        var open = document.querySelector("#openChange");
        var div = document.querySelector("#passChange");
        var close = document.querySelector("#closeChange");

        open.addEventListener("click", function() {
            div.style.display = "block"
        })

        close.addEventListener("click", function() {
            div.style.display = "none"
        })
    </script>