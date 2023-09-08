(() => {
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
          newCookie.push(e);
        });
        if (isNew) {
          newCookie.push(data);
        }
      }

      saveCookie("carrito", newCookie);
    });
  });


  var cardShopping = document.querySelectorAll("#cardShopping");

  cardShopping.forEach((e) => {
    var btnDelete = e.querySelector("#btnDelete");
  
    btnDelete.addEventListener("click", () => {
      // Obtén el identificador del producto a eliminar
      var productId = btnDelete.getAttribute("data-product-id");
  
      // Llama a una función para eliminar el producto específico del carrito
      eliminarProducto(productId);
  
      // Elimina el elemento del carrito visualmente si es necesario
      e.remove();
    });
  });
  
  // Función para eliminar un producto específico del carrito
  function eliminarProducto(productId) {
    let cookie = getCookie("carrito");
    if (cookie) {
      cookie = JSON.parse(cookie.trim());
      // Filtra los productos que no tengan el ID que se desea eliminar
      cookie = cookie.filter((producto) => producto.id !== productId);
      // Guardar la información actualizada en la cookie
      saveCookie("carrito", cookie);
      // Puedes realizar otras acciones, como actualizar el total del carrito, aquí.
    }
  }
  function carritoEstaVacio() {
    let cookie = getCookie("carrito");
    return !cookie || JSON.parse(cookie.trim()).length === 0;
  }
  function eliminarCarrito() {
    document.cookie = "carrito=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  }
  if (carritoEstaVacio()) {
    eliminarCarrito();
  }
})();
