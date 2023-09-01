<style>
  .ventana {
    width: 400px;
    height: 450px;
    background-color: #ffffff70;
    border: 1px solid #ffffff00;
    padding: 20px;
    margin: 50px auto;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    border-radius: 20px;
  }

  .img-noti {
    width: 50px;
    height: 50px;
    padding-left: 10px;
    padding-top: 10px;
  }

  .flex {
    display: flex;
    margin: 0%;
    width: 50%;
  }

  .btn {
    width: 100px;
    height: 50px;

  }

  .botones {
    text-align: center;
  }

  .calito {
    background-image: url(https://s2.glbimg.com/7-hknclnun_oevh51dxuplLsLdg=/e.glbimg.com/og/ed/f/original/2015/09/28/supermercado.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>

<body class="calito">
  <div class="ventana">
    <div class="text-center">
      <h2>Cambiar Contraseña</h2>
    </div><br>

    <form action="?c=usuario&a=recuperarPass" method="post">

      <div class="form-floating mb-3">
        <input type="email" name="userEmail" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Correo electronico</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" name="newPass"  class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Nueva contraseña</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" name="confirPass" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Verificar Contraseña</label>
      </div>
      <div class="botones">
        <input  value="Atras" class="btn btn-danger"></input>
        <input type="submit" class="btn btn-success"></input>
      </div>
      </form>
      </div>
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>|
</body>

</html>