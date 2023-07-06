<main>
    <h1>Pagina de ingreso</h1>
    <?php
    foreach ($listado as $e) {
        echo "<p>" . $e["nombre"] . "</p>";
    }
    ?>
</main>