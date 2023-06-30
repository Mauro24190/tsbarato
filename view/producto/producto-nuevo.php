<h1 class="page-header" style="margin-bottom: 25px; margin-top: 25px;">
    Nuevo Producto
</h1>
<ol class="breadcrumb">
    <li><a href="?c=producto"><button type="button" class="btn btn-warning">Productos</button></a></a></li>
    <li class="active" style="margin-left: 50px; margin-top: auto; margin-bottom: auto;">Nuevo Registro</li>
</ol>
<form id="frm-producto" action="?c=producto&a=Guardar" method="post" enctype="multipart/
form-data">
    <div class="form-group">
        <label>Código Producto</label>
        <input type="text" style="margin-bottom:30px;" name="idProducto" value="<?php echo $prod->idProducto; ?>" class="-
form-control" placeholder="Ingrese Código Producto" data-validacion-tipo="requerido|min:20" />
    </div>
    <div class="form-group">
        <label>Nit Proveedor</label>
        <input type="text" style="margin-bottom:30px;" name="nit" value="<?php echo $prod->nit; ?>" class="form-control"
            place- holder="Ingrese NIT Proveedor" data-validacion-tipo="requerido|min:20" />
    </div>
    <div class="form-group">
        <label>Nombre Producto</label>
        <input type="text" style="margin-bottom:30px;" name="nomprod" value="<?php echo $prod->nomprod; ?>" class="-
form-control" placeholder="Ingrese nombre producto" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Imagen del Producto </label>


        <input type="file" style="margin-bottom:30px;" name="imagen" class="form-control" />
    </div>
    <div class="form-group">
        <label>Precio Unitario</label>
        <input type="text" style="margin-bottom:30px;" name="precioU" value="<?php echo $prod->precioU; ?>" class="-
form-control" placeholder="Ingrese precio unitario" data-validacion-tipo="requerido|min:20" />
    </div>
    <div class="form-group">
        <label>Descripción del Producto</label>
        <input type="text" style="margin-bottom:30px;" name="descrip" value="<?php echo $prod->descrip; ?>" class="-
form-control" placeholder="Ingrese descripción producto" data-validacion-tipo="requerido|min:240" />
    </div>
    <hr />
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>
<script>
    $(document).ready(function () {
        $("#frm-producto").submit(function () {
            return $(this).validate();
        });
    })
</script>