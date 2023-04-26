<!-- 
<?php
print_r(json_encode($ventas));
?> -->

<head>
	<!-- Agregar los enlaces de los archivos necesarios -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.11.5/pagination/simple_numbers_no_ellipses.js"></script>
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />					
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
                    <tr class="bg-dark">
                        <td>id Orden</td>
                        <td><b>Folio de compra</b></td>
                        <td><b>Usuario</b></td>
                        <td><b>Nombre</b></td>
                        <!-- <td> 
                            <div class="row">                              
                                <div class="col">
                                    <b>Videojuegos vendidos</b>
                                </div>              
                            </div>
                            <div class="row">
                                        <div class="col-4">Nombre</div>
                                        <div class="col-4">Consola</div>
                                        <div class="col-4">Precio</div>
                            </div>
                        </td> -->
                        <td><b>Total de venta</b></td>
                        <td><b>Fecha de venta</b></td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ventas as $venta): ?>
                        <tr class="bg-info">
                            <td><?= $venta['idOrden'] ?></td>
                            <td><?= $venta['folio'] ?></td>
                            <td><?= $venta['usuario'] ?></td>
                            <td><?= $venta['nombre'] ?> <?= $venta['apellidos'] ?></td>
                            <!-- <td>
                                <?php foreach ($videojuegos as $videojuego): ?>
                                    <div class="row">
                                        <div class="col-4"><?= $videojuego['nombreVideojuego'] ?></div>
                                        <div class="col-4"><?= $videojuego['consola'] ?></div>
                                        <div class="col-4">$<?= $videojuego['precio'] ?></div>
                                    </div>
                                <?php endforeach; ?>
                            </td>
                            <td>
                             $<?php echo $total?>
                            </td> -->
                            <td><?= $venta['fechaVenta'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
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




			
