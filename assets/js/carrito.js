
var productoItem = document.querySelectorAll(".producto_item");


productoItem.forEach((e)=>{
   var btn = e.querySelector(".button");
   var prize = e.querySelector(".prize");
   var descripcion = e.querySelector(".descripcion");
   var nombre = e.querySelector(".nombre");
   var img = e.querySelector(".img");

   btn.addEventListener("click", ()=>{
    document.cookie = " Precio = " + prize.innerHTML + "; path=/"
    document.cookie = " Nombre = " + nombre.innerHTML + "; path=/"
    document.cookie = " Descripción = " + descripcion.innerHTML + "; path=/"
    document.cookie = " img = " + img.innerHTML + "; path=/"
   })
   
} )


