
<!-- <?php
//Para imprimir en formato JSON Test
print_r(json_encode($usuarios));
?> -->

<h2 style="text-align: center; margin-top:10px;">Usuarios</h2>

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


<div class="container">
<div id="contenido de la tabla" class="form-group row">
					<div class="col-sm-12">
						<br>
						<div class="table table-responsive">
							<table id="miTabla" class="table table-hover table-bordered">
								<thead>
									<tr class="bg-dark">
									<td><b>#</b></td>	
									<td><b>Membresía</b></td>	
									<td><b>Usuario</b></td>
									<td><b>Nombre</b></td>
									<td><b>Correo</b></td>
                                    <td><b>Dirección</b></td>
									<td><b>Teléfono</b></td>
                                    <td><b>Estado</b></td>
									</tr>
								</thead>
								<tbody>
								<?php

								$cont = 1;
								foreach ($usuarios as $usuario): ?>
									<tr class="bg-info" >
										<td style="color:black;">

											<?= $cont ?>

										</td>
                                        <td style="color:black;">
										<?php 
										
											if($usuario['idMembresia'] == "1"){
												echo "PREMIUM";
											} 
											elseif($usuario['idMembresia'] == "2"){
												echo "GOLD";
											}
											elseif($usuario['idMembresia'] == "3"){
												echo "DIAMONT";
											}
										?>
										</td>
                                        <td style="color:black;"><?= $usuario['usuario'] ?></td>
                                        <td style="color:black;"><?= $usuario['nombre'] ?> <?= $usuario['apellidos']?></td>
                                        <td style="color:black;"><?= $usuario['correo'] ?></td>
                                        <td style="color:black;"><?= $usuario['direccion'] ?></td>
                                        <td style="color:black;"><?= $usuario['telefono'] ?></td>
                                        <td style="color:black;"><?php 
										if($usuario['estado'] == 1){
											echo "Activo";
										}else{
											echo "Inactivo";
										}
										 ?></td>
									</tr>
								<?php 
								$cont++;
								endforeach; ?>

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
            "emptyTable": "<span style='color:white'>No hay datos disponibles en la tabla</span>",
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


			







