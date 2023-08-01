<main class="container py-3">
    <div>
        <div class="mb-3">
            <form action="#" class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar Usuario" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar Usuario</button>
            </form>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Nombre de Usuario</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Rol</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach ($listaUser as $r) : ?>
                        <td><?php echo $r->id_cli; ?></td>
                        <td><?php echo $r->nom_cli; ?></td>
                        <td><?php echo $r->ape_cli; ?></td>
                        <td><?php echo $r->user_cli; ?></td>
                        <td><?php echo $r->cor_cli; ?></td>
                        <td><?php echo $r->dir_cli; ?></td>
                        <td><?php echo "aqui ira el rol"; ?>
                    </td>

                    </tr>
                </tbody>
                <?php endforeach  ?>
            </table>
        </div>
    </div>
</main>