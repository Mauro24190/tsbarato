<div class="container py-4">
        <div>
            <div style="justify-content: center ;" class="d-flex">
                <img style="width: 120px; height: 100px;" src="logo proyecto.png" alt="">
            </div>
        </div>
        <div>
            <form  class="row mt-2" method="post" action="?c=usuario&a=Registrar">
                <div class="col-6">
                    <label class="form-label" for="nom_cli">Nombres</label>
                    <input class="form-control" type="text" name="nom_cli">
                </div>
                <div class="col-6 mb-3">
                    <label class="form-label" for="ape_cli">Apellidos</label>
                    <input class="form-control" type="text" name="ape_cli">
                </div>
                <div class="col-6" >
                    <label class="form-label" for="cor_cli">Correo Electrónico</label>
                    <input class="form-control" type="text" name="cor_cli">
                </div>
                <div class="col-6 mb-3">
                    <label class="form-label" for="pas_cli">Contraseña</label>
                    <input class="form-control" type="password" name="pas_cli">
                </div>
                <div class="col-4">
                    <label class="form-label" for="fch_cli">Fecha de nacimiento</label>
                    <input class="form-control" type="date" name="fch_cli">
                </div>
                <div class="col-4">
                    <label class="form-label" for="cel_cli">Número de Celular</label>
                    <input class="form-control" type="text" maxlength="10" name="cel_cli">
                </div>
                <div class="col-4 mb-3">
                    <label class="form-label" for="dir_cli">Dirección de Domicilio</label>
                    <input class="form-control" type="text" name="dir_cli">
                </div>
                <div class="d-flex justify-content-center">
                    <input class="btn btn-success" type="submit" value="Registrarme">
                </div>
            </form>
        </div>
    </div>