<main class="container-lg">
    <h1 class="page-header text-center text-white" style="margin: 20px; padding: 20px; background: rgba(0, 108, 248, 0.603); border-radius: 20px; ">Aseo</h1>
    <div class="container-producto container-fluid">
        <?php foreach ($listaProductos as $r) : ?>
            <div class="popo">
                <div class="pipi">
                    <div class="producto_item">
                        <div>
                            <p class="nomproducto">
                                <span class="nombre" ><?php echo $r->nom_art; ?></span>
                            </p>
                        </div>
                        <div class="producto_img">
                            <img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5ZNXtajd7HdBZh9UAdv_WXUpFsTz4celhSg7jP4PRthlBZVZDh2lf2XKMxMTcCEXfa_w&usqp=CAU" alt="">

                        </div>
                        <div class="producto_precio">
                            <div>
                                <p><i class="bi bi-currency-dollar"></i><span class="prize"><?php echo $r->pre_art; ?></span></p>
                            </div>
                        </div>
                        <div>
                            <p class="descripcion_arti"><span class="descripcion"><?php echo $r->des_art; ?></span></p>
                        </div>
                        <div>
                            <div class="producto_item_pie">
                                <div>
                                    <p><i class="bi bi-tag-fill"></i>Tienda super barato</p>
                                </div>
                            </div>
                            <div class="producto_item_btn">
                                <div>
                                    <button class="button" type="button"><i class="bi bi-cart3"></i>AGREGAR</button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <?php
                            if (checksession()) {
                                if (Privilegios::User->get() & $_SESSION["pri_cli"] == Privilegios::User->get()) {
                                    echo "";
                                } else {
                            ?>
                                    <td>
                                        <a href="?c=producto&a=Crud&id_art=<?php echo $r->id_art; ?>"><button type="button" class="btn btn-success"><i class="bi bi-pencil-fill"></i></button></a>
                                    </td>
                                    <td>
                                        <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=producto&a=Eliminar&id_art=<?php echo $r->id_art; ?>"><button type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button></a>
                                    </td>

                            <?php
                                }
                            }
                            ?>
                        </div><br>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div><br>

    </table>
</main>
<script src="assets/js/carrito.js"></script>