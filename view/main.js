(() =>{
    //INICIO FUNCION ABRIR VENTANA FLOTANTE CATEGORIAS
      var abrir = document.querySelector('#abrir');
      var ventana = document.getElementById('ventana');
      var cerrar = document.getElementById('cerrar');
    
    
        abrir.addEventListener('click', () => {
            ventana.classList.toggle ("show");
        });
      
    
      cerrar.addEventListener('click', () => {
        ventana.classList.remove ("show")
      });
      //FIN FUNCION ABRIR VENTANA FLOTANTE CATEGORIAS
      
      //INICIO FUNCION ABRIR VENTANA FLOTANTE AYUDA
      var abri1 = document.querySelector("#abri1");
      var ventana1 = document.querySelector(".notificacion-container");
      var cerrar1 = document.getElementById ("cerrar1");
      abri1.addEventListener("click", ()=>{
        ventana1.style.display = "block"
      })
    
      cerrar1.addEventListener("click", ()=>{
        ventana1.style.display ="none"
      })
    
      //FIN FUNCION ABRIR VENTANA FLOTANTE AYUDA
    
       //INICIO FUNCION ABRIR VENTANA FLOTANTE NOTIFICACIONES
       var abri3 = document.querySelector("#abrir3");
       var ventana3 = document.querySelector("#ventana3");
       var cerrar3 = document.getElementById ("cerrar3");
       abri3.addEventListener("click", ()=>{
         ventana3.style.display = "block"
       })
     
       cerrar3.addEventListener("click", ()=>{
         ventana3.style.display ="none"
       })
     
       //FIN FUNCION ABRIR VENTANA FLOTANTE NOTIFICACIONES
    
    })();
    