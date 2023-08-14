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
    
    })();
    