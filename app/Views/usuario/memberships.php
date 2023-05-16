
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css">
    <script src="https://kit.fontawesome.com/9efa70fc0a.js" crossorigin="anonymous"></script>
  

</head>

<div class="pricing-wrapper clearfix" style="margin-bottom: 30px;">
    
    <?php foreach ($membresias as $membresia) { ?>
        <div>
            <?php echo $membresia['html']?>
        </div>
    <?php } ?>

    <!-- <div class="pricing-table">
        <h3 class="pricing-title">Premium</h3>
        <div class="price">$60<sup>/ mes</sup></div>
        <ul class="table-list">
            <li>Temporadas <span>de videojuegos</span></li>
            <li>Acceso Ilimitado <span>por 3 meses</span></li>
            <li>Gratis 3 <span>videojuegos</span></li>
            <li>15 días <span> de demos espciales</span></li>
            <li>6 Meses <span>de acceso a juegos online</span></li>
        </ul>
        <div class="table-buy">
            <div class="price" hidden>id</div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Comprar</button>
        </div>
    </div>
	
	
	<div class="pricing-table gold">
        <h3 class="pricing-title">Gold</h3>
        <div class="price">$100<sup>/ mes</sup></div>
        <ul class="table-list">
            <li>Acceso Ilimitado <span>por 12 meses</span></li>
            <li>Gratis 10 <span>videojuegos</span></li>
            <li>1 Meses <span>de demos especiales</span></li>
            <li>6 Meses <span> de acceso a juegos online</span></li>
            <li>Acceso a preventa especial</li>
        </ul>
        <div class="table-buy">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Comprar</button>
        </div>
    </div>
	
	
	<div class="pricing-table diamond">
        <h3 class="pricing-title">Diamond</h3>
        <div class="price">$200<sup>/ mes</sup></div>
        <ul class="table-list">
            <li>Acceso Ilimitado <span>por 15 meses</span></li>
            <li>Gratis 15 <span>videojuegos</span></li>
            <li>12 meses<span> de acceso a juegos online</span></li>
            <li>Soporte <span> personalizado</span></li>
            <li>Acceso a preventa especial</li>
        </ul>
        <div class="table-buy">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">Comprar</button>
        </div>
    </div>
</div> -->
</div>

<?php
    $opiniones = array(
        array(
            "titulo" => "Excelente pagina",
            "descripcion" => "La variedad de juegos disponibles en esta página es impresionante. Me encanta que siempre están actualizando su catálogo con las últimas novedades. Además, el proceso de compra es muy fácil y la atención al cliente es excelente. Recomendado al 100%.",
            "usuario" => "Lucia2343"
        ),
        array(
            "titulo" => "Muy buenos juegos",
            "descripcion" => "Desde que descubrí esta página, se ha convertido en mi lugar de referencia para comprar juegos en línea. Los precios son muy competitivos y la compra es siempre rápida y confiable. Además, me encanta la interfaz de usuario.",
            "usuario" => "Carlos3043"
        ),
        array(
            "titulo" => "Excelente presentación",
            "descripcion" => "Esta página es perfecta para los gamers que buscan una experiencia de compra rápida y segura. La variedad de juegos es impresionante y siempre hay ofertas interesantes. Además, el proceso de compra es muy sencillo.",
            "usuario" => "rodrigo8034"
        )
    );
?>



<div class="container">

    <?php $count = 0; ?>
    <?php foreach ($opiniones as $opinion) { ?>
        <?php if ($count % 3 == 0) { ?>
            <div class="row">
        <?php } ?>
        
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card mb-4">
                <div class="card-body" style="color:black;">
                    <h4 class="card-title"><?= $opinion['titulo']?></h4>
                    <p class="card-text"  style="font-size: 11px;"><?= $opinion['descripcion']?></p>
                    <p class="card-text" style="font-size: 18px;"><small class="text-muted">Usuario :<?= $opinion['usuario']?></small></p>
                    <div style="color:#426cf5;">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    
                </div>
            </div>
        </div>

        <?php $count++; ?>
        <?php if ($count % 3 == 0) { ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if ($count % 3 != 0) { ?>
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






            


