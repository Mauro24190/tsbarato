<style>
    a {
        text-decoration: none !important;
    }
</style>

<main class="container py-3">
    <div>
        <div class="mb-3">
            <form id="cosito" action="#" class="d-flex">
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
                        <th scope="col">Nivel</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="8">Cargado datos...</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const table = document.querySelector("table");
        const cosito = document.querySelector("#cosito");

        async function getData(texto = "") {
            let response = await fetch("?c=usuario&a=getByUser&user=" + texto);
            let data = await response.json();

            if (data.length == 0) {
                table.querySelector("tbody").innerHTML = "<tr><td colspan='8'>No hay datos</td></tr>";
                return;
            }

            table.querySelector("tbody").innerHTML = "";
            data.forEach(e => {
                table.querySelector("tbody").innerHTML += `
                    <tr>
                        <td>${e.id_cli}</td>
                        <td>${e.nom_cli}</td>
                        <td>${e.ape_cli}</td>
                        <td>${e.user_cli}</td>
                        <td>${e.cor_cli}</td>
                        <td>${e.dir_cli}</td>
                        <td><p>${(e.pri_cli.map(e => e).join(", "))}</p></td>            
                        <td>
                            <a href="?c=usuario&a=traer&id_cli=${e.id_cli}" style="color: orange;"><i style="cursor: pointer;" class="bi bi-pencil"></i></a>
                            <a href="?c=usuario&a=Eliminar&id_cli=${e.id_cli}" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" style="color: red;"><i class="bi bi-trash ms-4"></i></a>
                        </td>
                    </tr>
                `;
            })
        }

        cosito.addEventListener("submit", (e) => {
            e.preventDefault();
            e.stopPropagation();

            getData(cosito.querySelector("input").value);
        });

        (() => getData())();
    </script>
</main>