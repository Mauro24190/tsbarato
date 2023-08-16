<style>
body {
  background-image:url("https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Y291bnRyeXNpZGV8ZW58MHx8MHx8fDA%3D&w=1000&q=80");
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<main>
    <div class="login-container ">
        <div class="container py-4">
            <div class="login">
                <img src="logoproyecto.png" alt="Logo Tienda" class="logo">
                <h1 class="ingre">Tienda Super Barato</h1>
                <form action="?c=usuario&a=ingresar" method="post">
                    <label for="username">Usuario</label>
                    <input type="text" name="usuario" placeholder="Escriba su usuario">
                    <label for="password">Contraseña</label>
                    <input type="password"  name="contrasena" placeholder="Escriba su contraseña">
                    <input type="submit" value="Ingresar">
                    
                </form>
                <a href="?c=web&a=restablecerContraseña">¿Has olvidado tu contraseña?</a>
                    <p>
                        <a href="?c=web&a=registro">Registrar</a>
            </div>
        </div>
    </div>
</main>