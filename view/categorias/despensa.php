
<main class="container-lg">
    <h1 class="page-header text-center text-white" style="margin: 20px; padding: 20px; background: rgba(0, 108, 248, 0.603); border-radius: 20px; ">Despensa</h1>
    <div class="container-producto container-fluid">
        <?php foreach ($listaProductos as $r) : ?>
            <div class="popo">
                <div class="pipi">
                    <div class="producto_item">
                        <div>
                            <p class="nomproducto">
                                <?php echo $r->nom_art; ?>
                            </p>
                        </div>
                        <div class="producto_img">
                        <?php 
                            // Conexión a la base de datos (debes completar esta parte)
                            $conexion = mysqli_connect("localhost:1002", "root", "", "tsbarato");

                            // Obtener datos de la base de datos (debes completar esta parte)
                            $query = "SELECT * FROM articulo WHERE id_art = 1";
                            $result = mysqli_query($conexion, $query);
                            
                            while ($row = mysqli_fetch_assoc($result)) {
                            echo '<img src="' . $r->imagen . '" alt="' .'" width="150">'; }?>

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
                                    <button type="button"><i class="bi bi-cart3"></i>AGREGAR</button>
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