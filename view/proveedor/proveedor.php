<main>

    <h1 class="page-header" style="margin-bottom: 25px; margin-top: 25px;">Proveedores</h1>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <div class="">
                <a class="btn btn-primary" href="?c=proveedor&a=Nuevo">Nuevo Proveedor</a>
                <a class="btn btn-primary" href="?c=producto&a=Nuevo">Nuevo Producto</a>
            </div>
        </div>
    </nav>
    <table class=" table table-striped">
        <thead class="table-dark">
            <tr>
                <th style="width:180px;">NIT</th>
                <th style="width:180px;">Razón Social</th>
                <th style="width:180px;">Dirección</th>
                <th style="width:180px;">Correo Electronico</th>
                <th style="width:180px;">Teléfono</th>
                <th style="width:180px;">Editar</th>
                <th style="width:180px;">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->model->Listar() as $r): ?>
                <tr>
                    <td>
                        <?php echo $r->nit_pro; ?>
                    </td>
                    <td>
                        <?php echo $r->rzs_pro; ?>
                    </td>
                    <td>
                        <?php echo $r->dir_pro; ?>
                    </td>
                    <td>
                        <?php echo $r->cor_pro; ?>
                    </td>
                    <td>
                        <?php echo $r->cel_pro; ?>
                    </td>
                    <td>
                        <a href="?c=proveedor&a=Crud&nit=<?php echo $r->nit_pro; ?>"><button type="button"
                                class="btn btn-success"><i class="bi bi-pencil-fill"></i></button></a>
                    </td>
                    <td>
                        <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');"
                            href="?c=proveedor&a=Eliminar&nit=<?php echo $r->nit_pro; ?>"><button type="button"
                                class="btn btn-danger"><i class="bi bi-trash-fill"></i></button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</main>