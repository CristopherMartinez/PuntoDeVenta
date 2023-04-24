
<head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css">
</head>


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
                <th>idVideojuego</th>
                <th>Nombre</th>
                <th>Consola</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Accion</th>
                </tr>
            </thead>
            <tbody style="color:whitesmoke;">
                <?php
                // $total = 0;
                if(isset($_SESSION['cart'])){
                    foreach($_SESSION['cart'] as $key => $value){
                        // print_r($value);
                        // $total = $total+$value['precio'];
                        echo"
                        <tr>
                            <td>$value[idVideojuego]</td>
                            <td>$value[nombre]</td>
                            <td>$$value[precio]<input type='hidden' class='iprice' value='$value[precio]'></td>
                            <td>
                            <input class='text-center iquantity' onchange='subTotal()'  type='number' value='$value[Cantidad]' min='1' max='10'>
                            </td>
                            <td class='itotal'></td>
                            <td>
                                <form action='inicio' method='POST'>
                                    <input type='hidden' name='nombre' value='$value[nombre]'>
                                    <button name='Remove_Item' class='btn btn-danger'>Eliminar</button>
                                
                                </form>
                            </td>
                            
                        </tr>
                        ";
                    


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

    <!-- Botón para abrir el modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar Tarjeta</button>
   
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

    <?php if (session()->has('error')): ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: '<?= session('error') ?>',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php endif; ?>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:black; padding-top:20px;">Agregar Tarjeta</h5>
                </div>
                <form method="POST" action="<?php echo base_url().'/guardarTarjeta'?>" enctype="multipart/form-data">
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
                                <input type="int" placeholder="XXXX XXXX XXXX XXXX" name="tarjeta" maxlength="19" class="form-control" id="tarjeta" required>
                            </div>
                            <div class="mb-3">
                                <label for="direccion" class="form-label colorLetrasForm">Dirección de tarjeta</label>
                                <input type="text" class="form-control" name="direccion" id="direccion" maxlength="150" required>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="fechaVencimiento" class="form-label colorLetrasForm">Fecha de vencimiento</label>
                                    <!-- <input type="text" class="form-control" id="fechaVencimiento" placeholder="MM/AA" required> -->
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
                        <button type="submit" class="btn btn-primary">Guardar Tarjeta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Realizar Compra</button>
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:black; padding-top:20px;">Realizar Compra</h5>
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

</div> 



</body>

<script>
    var gt = 0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');



    function subTotal(){
        gt = 0;
        for(i=0; i<iprice.length; i++)
        {

            itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);
            gt = gt + (iprice[i].value)*(iquantity[i].value);

        }
        gtotal.innerText = gt;
    }

    subTotal();




</script>


<!-- 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

 -->
