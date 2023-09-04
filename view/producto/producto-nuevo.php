<main class="container-sm">
    <h1 class="page-header" style="margin-bottom: 25px; margin-top: 25px;">
        Nuevo Producto
    </h1>
    <ol class="breadcrumb">
        <li><a href="?c=producto"><button type="button" class="btn btn-warning">Productos</button></a></a></li>
        <li class="active" style="margin-left: 50px; margin-top: auto; margin-bottom: auto;">Nuevo Registro</li>
    </ol>
    <form id="frm-producto" action="?c=producto&a=Guardar" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Código Producto</label>
            <input type="text" style="margin-bottom:30px;" name="cod_art" value="" class="-
form-control" placeholder="Ingrese Código Producto" data-validacion-tipo="requerido|min:20" />
        </div>
        <div class="form-group mb-3">
            <label>Razón Social Proveedor</label>
            <!-- <input type="text" style="margin-bottom:15px;" name="nit" value="<?php echo $prod->nit; ?>" class="form-control" place- holder="Ingrese NIT Proveedor" data-validacion-tipo="requerido|min:20" />}
     -->
            <select class="form-select" name="id_pro">
                <option selected value="0">Seleccione el proveedor</option>
                <?php foreach ($proveedor as $p) {
                    ?>
                    <option value="<?= $p->id_pro ?>"><?= $p->rzs_pro ?></option>
                    <?php
                } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="cat">Categoria</label>
            <select class="form-select" aria-label="Default select example" name="cat_id">
                <option selected value="0">Seleccione la categoria</option>
                <?php foreach ($categoria as $p) {
                    ?>
                    <option value="<?= $p->id_cat ?>"><?= $p->nom_cat ?></option>
                    <?php
                } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Nombre Producto</label>
            <input type="text" style="margin-bottom:30px;" name="nom_art" value="<?php echo $prod->nom_art; ?>" class="-
form-control" placeholder="Ingrese nombre producto" data-validacion-tipo="requerido|min:100" />
        </div>




        <div class="form-group">
            <label for="imagen">Imagen del Producto </label>
            <input type="file" style="margin-bottom:30px;" name="imagen" class="form-control" />
        </div>




        <div class="form-group">
            <label>Precio Unitario</label>
            <input type="text" style="margin-bottom:30px;" name="pre_art" value="<?php echo $prod->pre_art; ?>" class="-
form-control" placeholder="Ingrese precio unitario" data-validacion-tipo="requerido|min:20" />
        </div>
        <div class="form-group">
            <label>Descripción del Producto</label>
            <input type="text" style="margin-bottom:30px;" name="des_art" value="<?php echo $prod->des_art; ?>" class="-
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
</main>