<style>

body{background: #f5f5f5}.rounded{border-radius: 1rem}.nav-pills .nav-link{color: #555}.nav-pills .nav-link.active{color: white}input[type="radio"]{margin-right: 5px}.bold{font-weight:bold}

</style>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i>Tarjeta de crédito</a> </li>
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form role="form" onsubmit="event.preventDefault()">
                                <div class="form-group"> <label for="username">
                                        <h6>Titular</h6>
                                    </label> <input type="text" name="username" placeholder="Nombre del propietario de la tarjeta" required class="form-control "> </div>
                                <div class="form-group"> <label for="cardNumber"><br>
                                        <h6>Número de tarjeta</h6>
                                    </label>
                                    <div class="input-group"> <input type="text" name="cardNumber" placeholder="Número de tarjeta válida" class="form-control " required>
                                        <div class="input-group-append"> <span class="input-group-text text-muted"><img src="assets/iconos/visa.png" style="width: 20px;height: 20px;"><img src="assets/iconos/tarjeta.png" style="width: 20px;height: 20px;"></span> </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>Fecha de caducidad</h6>
                                                </span></label>
                                            <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="AA" name="" class="form-control" required> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> <input type="text" required class="form-control"> </div>
                                    </div>
                                </div><br>
                                <div class="card-footer text-center"> <button type="button" class="subscribe btn btn-success btn-block shadow-sm">Confirmar pago</button>
                            </form>
                        </div>
                    </div> <!-- End -->
                </div>
            </div>
        </div>
    </div>

<script>
    $(function() {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>