<main class="container-lg">
    <h1 class="page-header" style="margin-bottom: 25px; margin-top: 25px;">Productos </h1>
    <nav class="navbar navbar-light bg-light">
        <div class="well well-sm text-right">
            <a class="btn btn-primary" href="?c=proveedor&a=Nuevo">Nuevo Proveedor</a>
            <a class="btn btn-primary" href="?c=producto&a=Nuevo">Nuevo Producto</a>
        </div>
    </nav><br><br>
    <div class="container-producto container-fluid">

        <?php foreach ($this->model->Listar() as $r): ?>
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
                            <div><i class="bi bi-currency-dollar"></i></div>
                            <div>
                                <p>
                                    <?php echo $r->pre_art; ?>
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="producto_item_pie">
                                <div class="producto_item_pie_titulo">

                                </div>
                                <div>
                                    <p>Vendido por: <br></p>
                                </div>
                                <div>
                                    <p>
                                        <i class="bi bi-tag-fill"></i>Tienda super barato
                                    </p>
                                </div>
                            </div>
                            <div class="producto_item_btn">
                                <div>
                                    <button><i class="bi bi-cart3"></i>AGREGAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    </table>
</main>