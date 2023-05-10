

<head>
	<!-- Agregar los enlaces de los archivos necesarios -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.11.5/pagination/simple_numbers_no_ellipses.js"></script>
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />					
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
	<style>
		table.dataTable tbody td {
			color: white;
		}
		.dataTables_filter input[type="search"] {
			background-color: white;
		}
		select {
		color: white;
		}
		.dataTables_paginate .paginate_button {
			color: white !important;
		}
		.dataTables_wrapper .paginate_button {
		color: white !important;
		}

        .letraTable{
            color:black;
        }
	</style>
</head>

<br>
<div class="container">
    <h2>VENTAS</h2>
    <div id="contenido de la tabla" class="form-group row">
    <div class="col-sm-12">
        <br>
        <div class="table table-responsive">
            <table id="miTabla" class="table table-hover table-bordered">
                <thead>
                    <tr class="bg-dark" style="color: white;">
                        <td>id Orden</td>
                        <td><b>Folio de compra</b></td>
                        <td><b>Usuario</b></td>
                        <td><b>Nombre</b></td>
                        <td><b>Fecha de venta</b></td>
                        <td><b>Detalle</b></td>
                    </tr>
                </thead>
                <tbody >
                    <?php foreach ($ventas as $venta): ?>
                        <tr class="bg-info">
                                <td style="color:black;"><?= $venta['idOrden'] ?></td>
                                <td style="color:black;"><?= $venta['folio'] ?></td>
                                <td style="color:black;"><?= $venta['usuario'] ?></td>
                                <td style="color:black;"><?= $venta['nombre'] ?> <?= $venta['apellidos'] ?></td>        
                                <td style="color:black;"><?= $venta['fechaVenta'] ?></td>
                                <td>
                                    <a href="<?=base_url('detalleVenta/'.$venta['idOrden']);?>" class="btn btn-warning" type="button">
                                            <span class="material-symbols-outlined" style="display: inline-block; text-align: center;">
                                                search
                                            </span>
                                    </a>
                                </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
                 
    <!--Modal de detalles de venta-->
    <div class="modal fade" id="modalCompra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <span><h3 class="modal-title" id="exampleModalLabel" style="color:black;">Detalles de Compra</h3></span>
                    <span>
                        <h3 style="color:black;">Orden de compra</h3>
                    </span>
                </div>
                    <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><b>Videojuego</b></th>
                                        <th><b>Consola</b></th>
                                        <th><b>Precio</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if(isset($videojuegos)){
                                    foreach ($videojuegos as $videojuego): ?>
                                        <tr class="bg-info">
                                            <td><?= $videojuego['nombre'] ?></td>
                                            <td><?= $videojuego['consola'] ?></td>
                                            <td><?= $videojuego['precio'] ?></td>
                                        </tr>
                                    <?php endforeach;} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="botonCerrar" data-bs-dismiss="modal">Cerrar</button> 
                    </div>
            </div>
        </div>
    </div> 

<script>
    $(document).ready(function() {
        $('#miTabla').DataTable({
            "pagingType": "simple_numbers_no_ellipses",
            "language": {
                "emptyTable": "<span style='color:black;'><b>No hay datos disponibles en la tabla</b></span>",
                "info": "<span style='color:white'>Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros</span>",
                "infoEmpty": "<span style='color:white'>Mostrando 0 registros</span>",
                "infoFiltered": "<span style='color:white'>(filtrado de un total de _MAX_ registros)</span>",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "<span style='color:white'>Mostrar _MENU_ registros</span>",
                "loadingRecords": "<span style='color:white'>Cargando...</span>",
                "processing": "<span style='color:white'>Procesando...</span>",
                "search": "<span style='color:white'>Buscar:</span>",
                "zeroRecords": "<span style='color:black; font-weight:bold;' >No existen registros similares</span>",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "<span style='color:white'>Siguiente</span>",
                    "previous": "<span style='color:white'>Anterior</span>"
                }
            },
            "paging": true,
            "lengthMenu": [3, 10, 25, 50],
            "pageLength": 3,
            "ordering": true,
            "info": true,
            "searching": true,
            "autoWidth": false,
            "columnDefs": [
                {"className": "dt-center", "targets": "_all"},
                {"orderable": false, "targets": 4}
            ]
        });
    });

</script>




			
