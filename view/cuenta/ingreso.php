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
                <a href="view/cuenta/reestablecercontra.php">¿Has olvidado tu contraseña?</a>
                    <p>
                        <a href="?c=web&a=registro">Registrar</a>
            </div>
        </div>
    </div>
</main>