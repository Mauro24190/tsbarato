<!-- <button style="padding: 0; width: 100px; height: 50px; margin: 5rem auto; background-color: black; position: relative; border: 0" id="boton-corredizo">
  <div style="transition: 1s linear; width: 0%; height: 100%; background-color: whitesmoke; margin: 0; position: absolute; top: 0; left: 0; z-index: 0; overflow: hidden; display: flex; align-items:center">
    <p style="text-align: left; margin: 14px 23px">BOTON</p>
  </div>
  <p style="margin: 14px 23px; z-index: 1; color: white; text-align: left;">BOTON</p>
</button>
<script>
  const boton = document.querySelector("#boton-corredizo");
  const div = boton.children[0];
  const texto = boton.children[1];

  let mouseIsPressed = false;
  let interval;

  window.addEventListener("mousedown", (e) => {
    if (e.target == boton || e.target == div || e.target == texto) {
      mouseIsPressed = true

      let time = 0
      interval = setInterval(() => {
        time++
        if (time >= 12) {
          location.href = "?c=web&a=carrito"
        }
        div.style.setProperty("width", `${time}0%`);
      }, 500)
    }
  });

  window.addEventListener("mouseup", (e) => {
    clearInterval(interval);
    div.style.setProperty("width", `0%`);
    mouseIsPressed = false
  });
</script> -->

<?php



// if ($this->model->obtenerRolIdPorClienteId($cliente_id) === 2) {
//   echo "ci";
// }else{
//   echo "no";
// }

?>


<div class="container">
  <link rel="stylesheet" href="diseño.css">
  <div><br>
    <img src="assets/img_contenido/hero.png" class="img-fluid oferta" alt="...">
  </div>
  <div class="carru">
    <div id="carouselExampleFade" class="carousel slide carousel-fade carrusel" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img_contenido/carrusel-1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img_contenido/carrusel-2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img_contenido/carrusel-3.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img_contenido/carrusel-4.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
    <img src="assets/img_contenido/Oferta.png" class="img-fluid carrulado" alt="...">
  </div>
  <div class="categoriainicio">
    <div>
      <img src="assets/img_categorias/despensa.png" class="img-fluid imgcategoria">
      <p class="textcategoria">Despensa</p>
    </div>
    <div>
      <img src="assets/img_categorias/frutasverduras.png" class="img-fluid imgcategoria">
      <p class="textcategoria">Frutas y verdudras</p>
    </div>
    <div>
      <img src="assets/img_categorias/farmaciaa.png" class="img-fluid imgcategoria">
      <p class="textcategoria">Farmacia</p>
    </div>
    <div>
      <img src="assets/img_categorias/lacteo.png" class="img-fluid imgcategoria">
      <p class="textcategoria">Lacteos</p>
    </div>
  </div>
  <div class="categoriainicio">
    <div>
      <img src="assets/img_categorias/carnicos.png" class="img-fluid imgcategoria">
      <p class="textcategoria">Carnicos</p>
    </div>
    <div>
      <img src="assets/img_categorias/aseoo.png" class="img-fluid imgcategoria">
      <p class="textcategoria">Aseo</p>
    </div>
    <div>
      <img src="assets/img_categorias/bebidas.png" class="img-fluid imgcategoria">
      <p class="textcategoria">Bebidas</p>
    </div>
  </div>


  <li><a href="?c=web&a=aseo"><button type="button" class="btn btn-warning"> Ver Proveedores</button></a></li>
</div>