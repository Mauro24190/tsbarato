
</main>
<footer id="footer">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-sm">
            <div class="footer-column">
                <div><img src="logo proyecto.png" class="logofooter" style=""></div>
            </div>
            <div class="footer-column piepagina">
                <i class="bi bi-shop"></i>
                <p>Sobre Nosotros<br>
                    NIT: 00000-0</p>
            </div>
            <div class="footer-column piepagina">
                <i class="bi bi-envelope"></i>
                <p>Email<br>
                    tsbarato@gmail.com</p>
            </div>
            <div class="footer-column piepagina">
                <i class="bi bi-telephone"></i>
                <p>Venta telefónica<br>
                    Servicio al cliente: 3117505835</p>
            </div>
        </div>                 
    </nav>
    <!--<div class="bg-dark">
    <div class="container-sm">
            <p class="text-light footer-column" >Metodos de pago aceptados</p>
                <div class="img_footer1">
                    <div class="footer-column"><img src="assets/img_footer/mastercard.png" class="img-fluid img_footer" alt="..."></div>
                    <div class="footer-column"><img src="assets/img_footer/VisaLogo.png" class="img-fluid img_footer" alt="..."></div>
                    <div class="footer-column"><img src="assets/img_footer/Bancolombia.png" class="img-fluid img_footer" alt="..."></div>
                    <div class="footer-column"><img src="assets/img_footer/pse.png" class="img-fluid img_footer" alt="..."></div>
                    <div class="footer-column"><img src="assets/img_footer/Efecty.png" class="img-fluid img_footer" alt="..."></div>
                    <div class="footer-column"><img src="assets/img_footer/davivienda.png" class="img-fluid img_footer" alt="..."></div>
                    <div class="footer-column"><img src="assets/img_footer/Banco-de-Bogota.png" class="img-fluid img_footer" alt="..."></div>
                </div>
            </div>
    </div>-->
</footer>
<?php

include_once "view/toast/toast.php"

?>
<script>

(async () => {
    function mainresize() {
        var main = document.querySelector("#main");
        var header = document.querySelector("#header");
        var footer = document.querySelector("#footer");
        var size = header.clientHeight + footer.clientHeight;
        main.classList.add("hola");
        main.style.setProperty("min-height", "calc(100vh - " + size + "px)")
    }
    mainresize();
    window.addEventListener("resize", () => mainresize)
})();

</script>
<script src="assets/js/cookies.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll("[data-bs-toggle='tooltip']"));
    var tooltipList =tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
<script src="assets/js/global.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</body>

</html>