<h1 class="page-header" style="margin-bottom: 25px; margin-top: 25px;">
    <!-- <?php echo $pvd->nit != null ? $pvd->rzs_pro : 'Nuevo Registro'; ?> -->
</h1> <?php
   
?>
<ol class="breadcrumb">
    <li><a href="?c=proveedor" class="btn btn-primary">Proveedores</a></li>
    <li class="active" style="margin-left: 50px; margin-top: auto; margin-bottom: auto;">
        <?php echo $pvd->nit_pro != null ? "Editar los datos de: ". $pvd->rzs_pro : ''; ?>
    </li>
</ol>
<form id="frm-proveedor" action="?c=proveedor&a=Editar" method="post" enctype="multipart/
form-data">
    <input type="hidden" name="nit_pro" value="<?php echo $pvd->nit_pro; ?>" />
    <div class="form-group">
        <label>Razón Social</label>
        <input type="text" style="margin-bottom:30px;" name="rzs_pro" value="<?php echo $pvd->rzs_pro; ?>"
            class="form-control" data-validacion-tipo="requerido|min:100" />
    </div>
    <div class="form-group">
        <label>Dirección</label>
        <input type="text" style="margin-bottom:30px;" name="dir_pro" value="<?php echo $pvd->dir_pro; ?>"
            class="form-control" place- holder="Ingrese dirección proveedor" data-validacion-tipo="requerido|min:100" />
    </div>
    <div class="form-group">
        <label>Teléfono</label>
        <input type="text" style="margin-bottom:30px;" name="cel_pro" value="<?php echo $pvd->cel_pro; ?>"
            class="form-control" place- holder="Ingrese teléfono proveedor" data-validacion-tipo="requerido|min:10" />
    </div>
    <hr />
    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>
<script>
    $(document).ready(function () {
        $("#frm-proveedor").submit(function () {
            return $(this).validate();
        });
    })
</script>