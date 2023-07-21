<main class="container-sm">
    <h1 class="page-header" style="margin-bottom: 25px; margin-top: 25px;">
        <?php echo $prod->id_art != null ? $prod->nom_art : 'Nuevo Registro'; ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="?c=producto" class="btn btn-primary">Productos</a></li>
        <li class="active" style="margin-left: 50px; margin-top: auto; margin-bottom: auto;">
            <?php echo $prod->id_art != null ? $prod->nom_art : 'Nuevo Registro';
            ?>
        </li>
    </ol>
    <form id="frm-producto" action="?c=producto&a=Editar" method="post" enctype="multipart/
form-data">
        <input type="hidden" name="id_art" value="<?php echo $prod->id_art; ?>" />
        <div class="form-group">
            <label>Nombre Producto</label>
            <input type="text" style="margin-bottom:30px;" name="nom_art" value="<?php echo $prod->nom_art; ?>" class="-
form-control" placeholder="Ingrese nombre producto" data-validacion-tipo="requerido|min:100" />
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
            <button class="btn btn-success">Actualizar</button>
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