<section class="h-100" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <?php

        if (isset($_COOKIE["carrito"])) { ?>
          <h1 style="margin-left: 6rem;" class="fw-normal mb-0 text-black">Carrito de compras</h1> <?php
                                                                                                  } else { ?>
          <h1 style="margin-left: 6rem;" class="fw-normal mb-0 text-black">Aun no agregas productos <br> ¡te invitamos a que lo hagas!</h1> <?php
                                                                                                                                          }

                                                                                                                                            ?>


      </div>
      <div class="col-10">


        <?php
        if (isset($_COOKIE["carrito"])) {

          foreach (json_decode($_COOKIE["carrito"]) as $value) {
        ?>
            <div id="cardShopping" class="card rounded-3 mb-4">
              <div class="card-body p-4">
                <div class="row d-flex justify-content-between align-items-center">
                  <div class="col-md-2 col-lg-2 col-xl-2">
                    <img src="<?= $value->img ?>" class="img-fluid rounded-3" alt="<?= $value->nombre ?>">
                  </div>
                  <div class="col-md-3 col-lg-3 col-xl-3">
                    <p class="lead fw-normal mb-2"><?= $value->nombre ?></p>
                    <p><span class="text-muted"><?= $value->descripcion ?></span></p>
                  </div>
                  <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    <button class="btn btn-link px-2" onclick="decrementQuantity(this)">
                      <i class="bi bi-dash"></i>
                    </button>
                    <input id="cantidad" min="0" name="quantity" value="1" type="number" class="form-control form-control-sm" data-precio="<?= $value->precio ?>" onchange="updatePrice(this)" />
                    <button class="btn btn-link px-2" onclick="incrementQuantity(this)">
                      <i class="bi bi-plus"></i>
                    </button>
                  </div>
                  <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                    <h5 class="mb-0" id="precio">$<?= $value->precio ?></h5>
                  </div>
                  <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                    <a href="#!" id="btnDelete" class="text-danger" data-product-id="<?= $value->id ?>"><i class="fas fa-trash fa-lg"></i>Eliminar</a>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
          ?>

          <div class="card">
            <div class="card-body">
              <a href="?c=web&a=metododepago"><button type="button" class="btn btn-success btn-block btn-lg container-sm">Proceder al pago</button></a>
            </div>
            <div class="card-body">
              <button type="button" id="btnDeleteAll"  class="btn btn-danger btn-block btn-lg container-sm">Borrar todo</button>
            </div>
          <?php
        }
          ?>


          </div>
      </div>
    </div>
  </div>
</section>
<script src="assets/js/carrito.js"></script>
<script>
  function decrementQuantity(button) {
    const input = button.parentNode.querySelector('input[type="number"]');
    if (input.value > 0) {
      input.value--;
      updatePrice(input);
    }
  }

  function incrementQuantity(button) {
    const input = button.parentNode.querySelector('input[type="number"]');
    input.value++;
    updatePrice(input);
  }

  function updatePrice(input) {
    const precioElement = input.closest('.row').querySelector('#precio');
    const precioOriginal = parseFloat(input.getAttribute('data-precio'));
    const cantidad = parseInt(input.value);
    const nuevoPrecio = cantidad * precioOriginal;
    precioElement.textContent = '$' + nuevoPrecio;

  }

  function eliminarCarrito() {
  document.cookie = "carrito=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}
var btnDeleteAll = document.querySelector("#btnDeleteAll")
btnDeleteAll.addEventListener("click", function() {
  var cardShopping = document.querySelectorAll("#cardShopping");

  cardShopping.forEach((e) => {
    e.classList.add("eliminar-animacion");
    e.addEventListener("animationend", function() {
      e.remove();
      
        eliminarCarrito();
        location.reload();
    });
  });
});
   

</script>