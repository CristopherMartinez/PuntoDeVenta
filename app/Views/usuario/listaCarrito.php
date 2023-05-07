
<head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css">
        <script src="https://kit.fontawesome.com/9efa70fc0a.js" crossorigin="anonymous"></script>
</head>

 <!-- <?php       
    print_r($tarjetas);
 ?> -->
<br>
<body class="backgrounFooter">
<div class="container ">
    <div class="alert alert-success" role="alert">
        <h3>Carrito de compras</h3>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table">
            <thead style="color:whitesmoke;">
                <tr>
                <th>#</th>
                <!-- <th>idVideojuego</th> -->
                <th>Nombre</th>
                <th>Consola</th>
                <th>Precio</th>
                <!-- <th>Total</th> -->
                <th>Accion</th>
                </tr>
            </thead>
            <tbody style="color:whitesmoke;">
            <?php
            if(isset($_SESSION['cart'])){
                $key = 1; // Inicializar el contador en 1
                foreach($_SESSION['cart'] as $value){
                    echo"
                    <tr>
                        <td>$key</td>
                        <td hidden>$value[idVideojuego]</td>
                        <td>$value[nombre]</td>
                        <td>$value[NombreConsola]</td>
                        <td>$$value[precio]<input type='hidden' class='iprice' value='$value[precio]'></td>
                        <td hidden>
                        <input class='text-center iquantity' onchange='subTotal()'  type='number' value='$value[Cantidad]' min='1' max='1' hidden>
                        </td>
                        <td class='itotal' hidden></td>
                        <td>
                            <form action='".base_url()."/eliminarIndividualDelCarrito' method='POST'>
                                <input type='hidden' name='nombre' value='$value[nombre]'>
                                <button name='Remove_Item' class='btn btn-danger  rounded-circle'>
                                    <i class='fas fa-times' ></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    ";
                    $key++; // Aumentar el contador en 1
                }
            }          
            ?>

            </tbody>
        </table>
    </div>
   
    <br>

<div >
        <!--Precio Total-->
         <div class="d-flex justify-content-top">
            <h2 class="me-2" style="color:whitesmoke;">Total:</h2>
            <h2 style="color: whitesmoke;">$</h2><h2 class="text-end" id="gtotal" style="color:whitesmoke;"></h2>
        </div>

    
    <form method="POST" action="<?php echo base_url().'/vaciarCarrito'?>" enctype="multipart/form-data">
        <input hidden name="prueba" id="prueba" >
        <button type="submit" class="btn btn-danger">Vaciar Carrito</button>
    </form>
 
    <br>
    <!-- <button type="submit" class="btn btn-danger">Vaciar Carrito</button> -->

    <!-- Botón para abrir el modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar Tarjeta</button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color:black; padding-top:40px;">Agregar Tarjeta</h3>
                </div>
                <form method="POST" action="<?php echo base_url().'/guardarTarjeta'?>" enctype="multipart/form-data">
                    <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
                        
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="nombre1" class="form-label colorLetrasForm">Nombre(s)</label>
                                    <input type="text" class="form-control" name="nombre1" id="nombre1" required>
                                </div>
                                <div class="col">
                                    <label for="apellidos1" class="form-label colorLetrasForm">Apellidos</label>
                                    <input type="text" class="form-control" name="apellidos1" id="apellidos1" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="tarjeta1" class="form-label colorLetrasForm">Número de tarjeta</label>
                                <input type="int" placeholder="XXXX XXXX XXXX XXXX" name="tarjeta1" maxlength="19" class="form-control" id="tarjeta1" required>
                            </div>
                            <div class="mb-3">
                                <label for="direccion1" class="form-label colorLetrasForm">Dirección de tarjeta</label>
                                <input type="text" class="form-control" name="direccion1" id="direccion1" maxlength="150" required>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="fechaVencimiento1" class="form-label colorLetrasForm">Fecha de vencimiento</label>
                                    <!-- <input type="text" class="form-control" id="fechaVencimiento" placeholder="MM/AA" required> -->
                                    <input type="date" class="form-control" name="fechaVencimiento1" id="fechaVencimiento1" required>
                                </div>
                                <div class="col">
                                    <label for="cvv1" class="form-label colorLetrasForm">CVV</label>
                                    <input type="password" placeholder="267" class="form-control" name="cvv1" id="cvv1" maxlength="3" required>
                                </div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar Tarjeta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>      
    
    <?php if (session()->has('seEliminoIndividual')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: '<?= session('seEliminoIndividual') ?>',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php endif; ?>

    <!--Para mostrar diferentes tipos de mensajes como Guardado de tarjeta-->
    <?php if (session()->has('success')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: '<?= session('success') ?>',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php endif; ?>

    <!--Mensaje para mostrar cuando se completa la compra-->
    <?php if (session()->has('compraExitosa')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: '<?= session('compraExitosa') ?>',
                showConfirmButton: true,
                // timer: 1500
            });
        </script>
    <?php endif; ?>

     <!--Mensaje para mostrar que fallo el envio de correo-->
     <?php if (session()->has('falloEnvioCorreo')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: '<?= session('falloEnvioCorreo') ?>',
                showConfirmButton: true,
                // timer: 1500
            });
        </script>
    <?php endif; ?>

    <!--Mensaje para mostrar ya esta agregado al carrito-->
    <?php if (session()->has('error')): ?>
        <script>
            Swal.fire({
                icon: 'warning',
                title: '<?= session('error') ?>',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php endif; ?>

     <!--Mensaje para mostrar cuando no hay compras en el carrito-->        
    <?php if (session()->has('SinCompras')): ?>
        <script>
            Swal.fire({
                icon: 'info',
                title: '<?= session('SinCompras') ?>',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php endif; ?>

     <!--Mensaje para mostrar cuando se hara compra con tarjeta y los datos cv y fecha son incorrectos-->        
     <?php if (session()->has('datosDeTarjetaError')): ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: '<?= session('datosDeTarjetaError') ?>',
                showConfirmButton: false,
                timer: 1800
            });
        </script>
    <?php endif; ?>

     <!--Mensaje para vaciar carrito-->        
     <?php if (session()->has('vaciarCarrito')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: '<?= session('vaciarCarrito') ?>',
                showConfirmButton: false,
                timer: 1800
            });
        </script>
    <?php endif; ?>

    <!--Si el array de tarjetas esta vacio abrimos el modalCompra si no esta vacio abrimos el modalTarjetas-->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" 
    data-bs-target="
    <?php 
    if(empty($tarjetas)){
        echo "#modalCompra";
    }
    else
    {
        echo "#modalTarjetas";
    }?>" onclick="temporizador()">
    Realizar Compra
    </button>
    <!--Modal para realizar compra directa-->
    <div class="modal fade" id="modalCompra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel" style="color:black; padding-top:40px;">Realizar Compra</h3>
                </div>
                <form method="POST" action="<?php echo base_url().'/comprar'?>" enctype="multipart/form-data">
                    <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
                            <!--Tarjetas registradas (En caso de haber)-->
                            <!--Si ya se cuenta con tarjetas registradas solo mostrar las tarjetas -->
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
                            <div class="row mb-3" >
                                <div class="col">
                                    <label for="fechaVencimiento" class="form-label colorLetrasForm">Fecha de vencimiento</label>
                                    <input type="date" class="form-control" name="fechaVencimiento" id="fechaVencimiento" required>
                                </div>
                                <div class="col">
                                    <label for="cvv" class="form-label colorLetrasForm">CVV</label>
                                    <input type="password" placeholder="267" class="form-control" name="cvv" id="cvv" maxlength="3" required>
                                </div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" >Comprar</button>   
                    </div>
                </form>
            </div>
        </div>
    </div>
     <!--Modal para realizar compra directa con tarjeta guardada-->
    <div class="modal fade" id="modalTarjetas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <span><h3 class="modal-title" id="exampleModalLabel" style="color:black; padding-top:50px;">Realizar Compra</h3></span>
                    <span>
                        <h3 style="color:black; padding-top:50px;" id="gtotalModal"></h3>
                    </span>
                </div>
                <form method="POST" action="<?php echo base_url().'/comprarConTarjetaGuardada'?>" enctype="multipart/form-data">
                    <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
                            <!--Tarjetas registradas (En caso de haber)-->
                            <?php
                            if(isset($tarjetas)){
                               
                                
                                foreach($tarjetas as $tarjeta){
                                    echo
                                    "
                                    <div class='container'>
                                        <div class='col'>
                                            <div class='card'>
                                                <div class='card-body'>
                                                    <h5 class='card-title' style='color:black;'>Tarjeta de debito</h5>
                                                    <div class='mb-3'>
                                                    <span>  
                                                        <input type='radio' name='tarjeta_seleccionada' id='tarjeta_seleccionada' value='$tarjeta[numeroTarjeta]'/>
                                                        <label style='color: black; padding-left:5px; font-size:16px;'>$tarjeta[numeroTarjeta]</label>
                                                    </span>
                                                    <span><i class='fa-brands fa-cc-visa fa-2xl' style='color: #1c10c6;'></i></span>
                                                    <br>
                                                    <a href='#' style='text-decoration:none; color:black; font-weight:bold; font-size:15px;' id='detalle-link'>Ver detalle</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    ";    
                                }
                            }
                            
                            ?>

                            
                            <!--Si ya se cuenta con tarjetas registradas solo mostrar las tarjetas -->    
                            <div class="row mb-3" >
                                <div class="col">
                                    <label for="fechaVencimientomodalTarjetas" class="form-label colorLetrasForm">Fecha de vencimiento</label>
                                    <input type="date" class="form-control" name="fechaVencimientomodalTarjetas" id="fechaVencimientomodalTarjetas" required>
                                </div>
                                <div class="col">
                                    <label for="cvvmodalTarjetas" class="form-label colorLetrasForm">CVV</label>
                                    <input type="password" placeholder="267" class="form-control" name="cvvmodalTarjetas" id="cvvmodalTarjetas" maxlength="3" required>
                                </div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <div class="progress" style="width: 100%; height: 20px; margin-bottom: 10px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;"></div>
                        </div>
                        <button type="button" class="btn btn-secondary" id="botonCerrar" data-bs-dismiss="modal" onclick="pararTemporizador()">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Comprar</button>   
                    </div>

                </form>
            </div>
        </div>
    </div>

</div> 






</body>

<script>

  
    var gt = 0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');
    var gTotalModal = document.getElementById('gtotalModal');



    function subTotal(){
        gt = 0;
        for(i=0; i<iprice.length; i++)
        {

            itotal[i].innerText = '$'+(iprice[i].value)*(iquantity[i].value);
            gt = gt + (iprice[i].value)*(iquantity[i].value);

        }
        gtotal.innerText = gt;
        gTotalModal.innerText = 'Total de compra: $' + gt;
    }

    subTotal();

    // function verDetalle(){
    //     var link = document.getElementById('detalle-link');
    //     var detalles = document.getElementById('detalles');

    //     if (link.innerHTML === 'Ver detalle') {
    //         link.innerHTML = 'Ocultar detalle';
    //         detalles.style.display = 'block';
    //     } else {
    //         link.innerHTML = 'Ver detalle';
    //         detalles.style.display = 'none';
    //     }
    // }

    var timerInterval; 

    function temporizador() {
        var time = 60; // tiempo en segundos
        var progressBar = document.querySelector('.progress-bar');
        progressBar.classList.add('bg-success'); // añadir clase de color verde
        var width = 0;
        progressBar.style.width = width + '%';
        progressBar.setAttribute('aria-valuenow', width);
        timerInterval = setInterval(function() {
            if (width >= 100) {
                //seleccionamos mediante el id el elemento del boton y ejecutamos la funcion de click para que se cierre el 
                //modal y se ejecute la funcion parar temporizador
                var botonCerrar = document.getElementById('botonCerrar');
                botonCerrar.click();
                //Mostramos mensaje de que se acabo tu tiempo
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se acabó tu tiempo!!',
                })


                // alert('Tiempo finalizado');
            } else {
                width += (100 / time);
                progressBar.style.width = width + '%';
                progressBar.setAttribute('aria-valuenow', width);
                if (time - parseInt(width * (time / 100)) <= 40) {
                    progressBar.classList.remove('bg-success');
                    progressBar.classList.add('bg-danger'); // cambiar a color rojo
                }
            }
        }, 1000); // intervalo de 1 segundo
    }

    //Función para parar el temporizador
    function pararTemporizador() {
        clearInterval(timerInterval);
    }






</script>


<!-- 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

 -->
