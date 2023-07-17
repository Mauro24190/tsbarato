<main class="container-sm">
    <h1 class="page-header" style="margin-bottom: 25px; margin-top: 25px;">
        Nuevo Proveedor
    </h1>
    <ol class="breadcrumb">
        <li><a href="?c=proveedor"><button type="button" class="btn btn-warning"> Ver Proveedores</button></a></li>
        <li class="active" style="margin-left: 50px; margin-top: auto; margin-bottom: auto;">Nuevo Registro</li>
    </ol>
    <form id="frm-proveedor" action="?c=proveedor&a=Guardar" method="post" enctype="multipart/
form-data">
        <div class="form-group">
            <label>NIT</label>
            <input type="text" style="margin-bottom:30px;" name="nit_pro" value="<?php echo $pvd->nit_pro; ?>"
                class="form-control" placeholder="Ingrese el Número de Identificación Tributario del Proveedor"
                data-validacion-tipo="requerido|min:20" />
        </div>
        <div class="form-group">
            <label>Razón Social</label>
            <input type="text" style="margin-bottom:30px;" name="rzs_pro" value="<?php echo $pvd->rzs_pro; ?>"
                class="form-control" placeholder="Ingrese Razón Social" data-validacion-tipo="requerido|min:100" />
        </div>
        <div class="form-group">
            <label>Correo Electronico</label>
            <input type="text" style="margin-bottom:30px;" name="cor_pro" value="<?php echo $pvd->cor_pro; ?>"
                class="form-control" placeholder="Corre Electronico del Proveedor"
                data-validacion-tipo="requerido|min:100" />
        </div>
        <div class="form-group">
            <label>Dirección</label>
            <input type="text" style="margin-bottom:30px;" name="dir_pro" value="<?php echo $pvd->dir_pro; ?>"
                class="form-control" placeholder="Ingrese dirección proveedor"
                data-validacion-tipo="requerido|min:100" />
        </div>
        <div class="form-group">
            <label>Teléfono</label>
            <input type="text" style="margin-bottom:30px;" name="cel_pro" value="<?php echo $pvd->cel_pro; ?>"
                class="form-control" placeholder="Ingrese númnero de contacto del proveedor"
                data-validacion-tipo="requerido|min:10" />
        </div>
        <hr />
        <div class="text-right">
            <button class="btn btn-success">Guardar</button>
        </div>
    </form>
    <script>
        $(document).ready(function () {
            $("#frm-proveedor").submit(function () {
                return $(this).validate();
            });
        })
    </script>
</main>