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
     
      var productId = btnDelete.getAttribute("data-product-id");

      e.classList.add("eliminar-animacion");
      e.addEventListener("animationend", function() {

        e.remove();
    
        eliminarProducto(productId);
    
        if (carritoEstaVacio()) {
          eliminarCookie();
          location.reload();
        }
      });
    });
  });
  
  function eliminarProducto(productId) {
    let cookie = getCookie("carrito");
    if (cookie) {
      cookie = JSON.parse(cookie.trim());
      cookie = cookie.filter((producto) => producto.id !== productId);
      saveCookie("carrito", cookie);
    }
  }

  function eliminarCookie() {
    document.cookie = "carrito=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  }

  function carritoEstaVacio() {
    let cookie = getCookie("carrito");
    return !cookie || JSON.parse(cookie.trim()).length === 0;
  }
 
  
})();
