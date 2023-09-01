<section class="h-100" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">Carrito de compras</h3>
        </div>

        <?php
        foreach (json_decode($_COOKIE["carrito"]) as $value) {
        ?>
          <div class="card rounded-3 mb-4">
            <div class="card-body p-4">
              <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-2 col-lg-2 col-xl-2">
                  <img src="<?= $value->img ?>" class="img-fluid rounded-3" alt="<?= $value->nombre ?>">
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                  <p class="lead fw-normal mb-2"><?= $value->nombre ?></p>
                  <p><span class="text-muted"><?= $value->descripcion ?></p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                  <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="bi bi-dash"></i>
                  </button>

                  <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" />

                  <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="bi bi-plus"></i>
                  </button>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                  <h5 class="mb-0" id="precio" >$<?= $value->precio ?></h5>
                </div>
                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                  <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i>Eliminar</a>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>

        <div class="card">
          <div class="card-body">
            <button type="button" class="btn btn-warning btn-block btn-lg container-sm">Proceder al pago</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>

    cantidad = document.querySelector("#form1").value;
    precio = document.querySelector("#precio");

  console.log(precio)


</script>