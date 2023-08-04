<div class="container py-4">
        <div>
            <div style="justify-content: center ;" class="d-flex">
                <h1>Editar Información del Usuario</h1>
            </div>
        </div>
        <div>
            <form  class="row mt-2" method="post" action="?c=usuario&a=Editar">
                <div>
                <input class="form_control"  type="hidden" name="id_cli" value="<?php echo $user->id_cli; ?>" />
                </div>
                <div class="col-6">
                    <label class="form-label" for="nom_cli">Nombres</label>
                    <input class="form-control" value="<?php echo $user->nom_cli; ?>" type="text" name="nom_cli">
                </div>
                <div class="col-6 mb-3">
                    <label class="form-label" for="ape_cli">Apellidos</label>
                    <input class="form-control" type="text" value="<?php echo $user->ape_cli; ?>"  name="ape_cli">
                </div>
                <div class="col-3" >
                    <label class="form-label" for="cor_cli">Nombre de usuario</label>
                    <input class="form-control" type="text" name="user_cli" value="<?php echo $user->user_cli; ?>" >
                </div>
                <div class="col-4" >
                    <label class="form-label" for="cor_cli">Correo Electrónico</label>
                    <input class="form-control" type="text" name="cor_cli" value="<?php echo $user->cor_cli; ?>">
                </div>
                <!-- <div class="col-5 mb-3">
                    <label class="form-label" for="pas_cli">Contraseña</label>
                    <input class="form-control" type="password" name="pas_cli">
                </div> -->
                <!-- <div class="col-4">
                    <label class="form-label" for="fch_cli">Fecha de nacimiento</label>
                    <input class="form-control" type="date" name="fch_cli">
                </div> -->
                <!-- <div class="col-4">
                    <label class="form-label" for="cel_cli">Número de Celular</label>
                    <input class="form-control" type="text" maxlength="10" name="cel_cli">
                </div> -->
                <!-- <div class="col-4 mb-3">
                    <label class="form-label" for="dir_cli">Dirección de Domicilio</label>
                    <input class="form-control" type="text" name="dir_cli">
                </div> -->
                <div class="col-4" >
                    <label class="form-label" for="pri_cli">Nivel</label>
                    <input class="form-control" type="text" value="<?php echo $user->pri_cli; ?>" name="pri_cli">
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <input class="btn btn-success" type="submit" value="Actualizar">
                </div>
            </form>
        </div>
    </div>