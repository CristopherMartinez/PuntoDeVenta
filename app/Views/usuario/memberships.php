<div class="pricing-wrapper clearfix" style="margin-bottom: 30px;">
    
    <?php foreach ($membresias as $membresia) { ?>
        <div>
            <?php echo $membresia['html']?>
        </div>
    <?php } ?>
</div>


<!--Membresia Premium-->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="color:black; padding-top:20px;">Comprar membresia Premium</h5>
                        </div>
                        <form method="POST" action="<?php echo base_url().'/comprarMembresia'?>" enctype="multipart/form-data">
                            <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
                                
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="nombre" class="form-label colorLetrasForm">Nombre(s)</label>
                                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                                        </div>
                                        <div class="col">
                                            <label for="apellidos" class="form-label colorLetrasForm">Apellidos</label>
                                            <input type="text" class="form-control" name="apellidos" id="apellidos" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tarjeta" class="form-label colorLetrasForm">Número de tarjeta</label>
                                        <input type="int" placeholder="XXXX XXXX XXXX XXXX" name="tarjeta" maxlength="19" class="form-control" id="tarjeta" onkeyup="detectarTipoTarjeta()" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="direccion" class="form-label colorLetrasForm">Dirección de tarjeta</label>
                                        <input type="text" class="form-control" name="direccion" id="direccion" maxlength="150" required>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="fechaVencimiento" class="form-label colorLetrasForm">Fecha de vencimiento</label>
                                            <input type="date" class="form-control" name="fechaVencimiento" id="fechaVencimiento" required>
                                        </div>
                                        <div class="col">
                                            <label for="cvv" class="form-label colorLetrasForm">CVV</label>
                                            <input type="password" placeholder="267" class="form-control" name="cvv" id="cvv" maxlength="3" required>
                                        </div>
                                    </div>
                                    <div class="mb-3" hidden>
                                        <label for="idMembresia" class="form-label colorLetrasForm">idMembresia</label>
                                        <input type="text" class="form-control" name="idMembresia" id="idMembresia" value="1">
                                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Comprar</button>
                            </div>
                        </form>
                    </div>
                </div>
</div>
<!--Membresia Gold-->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="color:black; padding-top:20px;">Comprar membresia</h5>
                        </div>
                        <form method="POST" action="<?php echo base_url().'/comprarMembresia'?>" enctype="multipart/form-data">
                            <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
                                
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="nombre" class="form-label colorLetrasForm">Nombre(s)</label>
                                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                                        </div>
                                        <div class="col">
                                            <label for="apellidos" class="form-label colorLetrasForm">Apellidos</label>
                                            <input type="text" class="form-control" name="apellidos" id="apellidos" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tarjeta" class="form-label colorLetrasForm">Número de tarjeta</label>
                                        <input type="int" placeholder="XXXX XXXX XXXX XXXX" name="tarjeta" maxlength="19" class="form-control" id="tarjeta" onkeyup="detectarTipoTarjeta()" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="direccion" class="form-label colorLetrasForm">Dirección de tarjeta</label>
                                        <input type="text" class="form-control" name="direccion" id="direccion" maxlength="150" required>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="fechaVencimiento" class="form-label colorLetrasForm">Fecha de vencimiento</label>
                                            <input type="date" class="form-control" name="fechaVencimiento" id="fechaVencimiento" required>
                                        </div>
                                        <div class="col">
                                            <label for="cvv" class="form-label colorLetrasForm">CVV</label>
                                            <input type="password" placeholder="267" class="form-control" name="cvv" id="cvv" maxlength="3" required>
                                        </div>
                                    </div>
                                    <div class="mb-3" hidden>
                                        <label for="idMembresia" class="form-label colorLetrasForm">idMembresia</label>
                                        <input type="text" class="form-control" name="idMembresia" id="idMembresia" value="2">
                                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Comprar</button>
                            </div>
                        </form>
                    </div>
                </div>
</div>

<!--Membresia Diamont-->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="color:black; padding-top:20px;">Comprar membresia</h5>
                        </div>
                        <form method="POST" action="<?php echo base_url().'/comprarMembresia'?>" enctype="multipart/form-data">
                            <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
                                
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="nombre" class="form-label colorLetrasForm">Nombre(s)</label>
                                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                                        </div>
                                        <div class="col">
                                            <label for="apellidos" class="form-label colorLetrasForm">Apellidos</label>
                                            <input type="text" class="form-control" name="apellidos" id="apellidos" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tarjeta" class="form-label colorLetrasForm">Número de tarjeta</label>
                                        <input type="int" placeholder="XXXX XXXX XXXX XXXX" name="tarjeta" maxlength="19" class="form-control" id="tarjeta" onkeyup="detectarTipoTarjeta()" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="direccion" class="form-label colorLetrasForm">Dirección de tarjeta</label>
                                        <input type="text" class="form-control" name="direccion" id="direccion" maxlength="150" required>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="fechaVencimiento" class="form-label colorLetrasForm">Fecha de vencimiento</label>
                                            <input type="date" class="form-control" name="fechaVencimiento" id="fechaVencimiento" required>
                                        </div>
                                        <div class="col">
                                            <label for="cvv" class="form-label colorLetrasForm">CVV</label>
                                            <input type="password" placeholder="267" class="form-control" name="cvv" id="cvv" maxlength="3" required>
                                        </div>
                                    </div>
                                    <div class="mb-3" hidden>
                                        <label for="idMembresia" class="form-label colorLetrasForm">idMembresia</label>
                                        <input type="text" class="form-control" name="idMembresia" id="idMembresia" value="3">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Comprar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            


