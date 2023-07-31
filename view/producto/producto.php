<main class="container-lg">
    <link rel="stylesheet" href="">
    <center>
        <h1 class="page-header" style="margin-bottom: 25px; margin-top: 25px;">ADMINISTRADOR </h1>
    </center>
    <div class="mb-5">
        <div class="d-flex">
            <div class="card me-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">PROVEEDORES</h5>
                    <p class="card-text">Espacio para ver y editar los proveedores registrados. Además de poder agregar proveedores nuevos.</p>
                    <a class="btn btn-primary" href="?c=proveedor">Ver Proveedores</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">PRODUCTOS</h5>
                        <p class="card-text">Espacio para agregar productos nuevos.</p>
                        <a class="btn btn-primary" href="?c=producto&a=Nuevo">Nuevo Producto</a>
                    </div>
                </div>
        </div>
    </div>
    </div>
    <div class="container-producto container-fluid">
        <?php foreach ($this->model->Listar() as $r) : ?>
            <div class="popo">
                <div class="pipi">
                    <div class="producto_item">
                        <div>
                            <p class="nomproducto">
                                <?php echo $r->nom_art; ?>
                            </p>
                        </div>
                        <div class="producto_img">
                            <img src="" alt="">

                        </div>
                        <div class="producto_precio">
                            <div>
                                <p><i class="bi bi-currency-dollar"></i><?php echo $r->pre_art; ?></p>
                            </div>
                        </div>
                        <div>
                            <p class="descripcion_arti"><?php echo $r->des_art; ?></p>
                        </div>
                        <div>
                            <div class="producto_item_pie">
                                <div>
                                    <p><i class="bi bi-tag-fill"></i>Tienda super barato</p>
                                </div>
                            </div>
                            <div class="producto_item_btn">
                                <div>
                                    <button><i class="bi bi-cart3"></i>AGREGAR</button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <td>
                                <a href="?c=producto&a=Crud&id_art=<?php echo $r->id_art; ?>"><button type="button" class="btn btn-success"><i class="bi bi-pencil-fill"></i></button></a>
                            </td>
                            <td>
                                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=producto&a=Eliminar&id_art=<?php echo $r->id_art; ?>"><button type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button></a>
                            </td>
                        </div><br>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div><br>

    </table>
</main>