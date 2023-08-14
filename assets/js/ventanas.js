var abri1 = document.querySelector("#abri1");
var ventana1 = document.querySelector(".notificacion-container");
var cerrar1 = document.getElementById ("cerrar1");
var abri3 = document.querySelector("#abrir3");
var ventana3 = document.querySelector("#ventana3");
var cerrar3 = document.getElementById ("cerrar3");

abri1.addEventListener("click", ()=> toggleHeaderWindows(abri1.getAttribute("data-target")));
abri3.addEventListener("click", ()=> toggleHeaderWindows(abri3.getAttribute("data-target")));
cerrar1.addEventListener("click", ()=>toggleHeaderWindows());
cerrar3.addEventListener("click", ()=>toggleHeaderWindows());

function toggleHeaderWindows(element = null) {
  let ventana, isShow;
  if (element) {
    ventana = document.querySelector("#" + element);
    isShow = ventana.style.display == "block";
  }

  const containers = document.querySelectorAll("[data-ventana]");
  containers.forEach(e => { e.style.display = "none"; })
  if (!element) {
    return;
  }

  if (isShow) {
    ventana.style.display = "none";
  } else {
    ventana.style.display = "block";
  }
}