

<div class="pricing-wrapper clearfix" style="margin-bottom: 30px;">
    <!--Membresia-->
    <div class="pricing-table">
        
        <h3 class="pricing-title">Premium</h3>
        <div class="price">$60<sup>/ mes</sup></div>
        <!-- Lista de Caracteristicas / Propiedades -->
        <ul class="table-list">
            <li>Temporadas <span>de videojuegos</span></li>
            <li>Acceso Ilimitado <span>por 3 meses</span></li>
            <li>Gratis 3 <span>videojuegos</span></li>
            <li>15 días <span> de demos espciales</span></li>
            <li>6 Meses <span>de acceso a juegos online</span></li>
        </ul>
        <!-- Contratar / Comprar -->
        <div class="table-buy">
            <div class="price" hidden>id</div>
            <!-- <a href="#" class="pricing-action">Comprar</a> -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Comprar</button>
        </div>
    </div>

    <div class="pricing-table gold">
        <h3 class="pricing-title">Gold</h3>
        <div class="price">$100<sup>/ mes</sup></div>
        <!-- Lista de Caracteristicas / Propiedades -->
        <ul class="table-list">
            <li>Acceso Ilimitado <span>por 12 meses</span></li>
            <li>Gratis 10 <span>videojuegos</span></li>
            <li>1 Meses <span>de demos especiales</span></li>
            <li>6 Meses <span> de acceso a juegos online</span></li>
            <li>Acceso a preventa especial</li>
        </ul>
        <!-- Contratar / Comprar -->
        <div class="table-buy">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Comprar</button>
        </div>
    </div>

    <div class="pricing-table diamond">
        <h3 class="pricing-title">Diamond</h3>
        <div class="price">$200<sup>/ mes</sup></div>
        <!-- Lista de Caracteristicas / Propiedades -->
        <ul class="table-list">
            <li>Acceso Ilimitado <span>por 15 meses</span></li>
            <li>Gratis 15 <span>videojuegos</span></li>
            <li>12 meses<span> de acceso a juegos online</span></li>
            <li>Soporte <span> personalizado</span></li>
            <li>Acceso a preventa especial</li>
        </ul>
        <!-- Contratar / Comprar -->
        <div class="table-buy">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">Comprar</button>
        </div>
    </div>
    
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="color:black; padding-top:20px;">Actualizar membresia</h5>
                        </div>
                        <form method="POST" action="<?php echo base_url().'/comprar'?>" enctype="multipart/form-data">
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
                                            <input type="password" placeholder="123" class="form-control" name="cvv" id="cvv" maxlength="3" required>
                                        </div>
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
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="color:black; padding-top:20px;">Actualizar membresia</h5>
                        </div>
                        <form method="POST" action="<?php echo base_url().'/comprar'?>" enctype="multipart/form-data">
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
                                            <input type="password" placeholder="123" class="form-control" name="cvv" id="cvv" maxlength="3" required>
                                        </div>
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
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="color:black; padding-top:20px;">Actualizar membresia</h5>
                        </div>
                        <form method="POST" action="<?php echo base_url().'/comprar'?>" enctype="multipart/form-data">
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
                                            <input type="password" placeholder="123" class="form-control" name="cvv" id="cvv" maxlength="3" required>
                                        </div>
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



            


