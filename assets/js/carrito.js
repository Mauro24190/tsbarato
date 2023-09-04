var productoItem = document.querySelectorAll(".producto_item");
productoItem.forEach((e) => {
  var id = e.getAttribute("data-id");
  var btn = e.querySelector(".button");
  var prize = e.querySelector(".prize");
  var descripcion = e.querySelector(".descripcion");
  var nombre = e.querySelector(".nombre");
  var img = e.querySelector(".img");

  btn.addEventListener("click", () => {
    let data = {
      id: id,
      nombre: nombre.innerHTML,
      precio: prize.innerHTML,
      descripcion: descripcion.innerHTML,
      img: img.getAttribute("src"),
    };

    let cookie = getCookie("carrito");
    let newCookie = [];
    if (!cookie) {
      newCookie.push(data);
    } else {
      let isNew = true;
      cookie = JSON.parse(cookie.trim());
      cookie.forEach((e) => {
         if (e.id == data.id) {
            isNew = false;
         }
         newCookie.push(e)
      });
      if (isNew) {
         newCookie.push(data);
      }
    }

    saveCookie("carrito", newCookie);
  });
});
