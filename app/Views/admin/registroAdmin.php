<head>
	<!-- Agregar los enlaces de los archivos necesarios -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.11.5/pagination/simple_numbers_no_ellipses.js"></script>
	    
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />					
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

	<style>
		.nombre{
			color: black;
		}
		.modal-scroll {
			max-height: 400px;
			overflow-y: auto;
		}

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

	<!--Mensaje de registro exitoso del admin-->
	<?php if (session()->has('registroAdmin')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: '<?= session('registroAdmin') ?>',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php endif; ?>

	<!--Mensaje de borrado exitoso del admin-->
	<?php if (session()->has('borradoAdmin')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: '<?= session('borradoAdmin') ?>',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php endif; ?>

	<!--Mensaje de actualizado del admin-->
    <?php if (session()->has('actualizarAdmin')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: '<?= session('actualizarAdmin') ?>',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php endif; ?>

	


<div class="container" style="margin-top: 10px;">
	<h1>Registro de Administradores</h1>
	<div id="contenido de la tabla" class="form-group row">
		<div class="col-sm-12">
		<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal1">Registro Administrador</button>
			<!--Membresia Premium-->
			<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel" style="color:black; padding-top:20px;">Registrar de Administrador</h5>
									</div>
									<form method="POST" action="<?php echo base_url().'/guardar_admin'?>" enctype="multipart/form-data">
										<div class="modal-body" style="max-height: 60vh; overflow-y: auto; color:black;">
												<!--Nombre-->
												<div class="row mb-3">
													<div class="col">
														<label for="nombre" class="form-label colorLetrasForm">Nombre(s)</label>
														<input type="text" class="form-control" name="nombre" id="nombre" required>
													</div>
												</div>
												<!--Apellidos-->
												<div class="mb-3">
													<label for="apellidos" class="form-label colorLetrasForm">Apellidos</label>
													<input type="text"  name="apellidos" id="apellidos"  class="form-control" required>
												</div>
												<!--CorreoElectronico-->
												<div class="mb-3">
													<label for="correo" class="form-label colorLetrasForm">Correo Electrónico</label>
													<input type="text"  name="correo" id="correo"  class="form-control" required>
												</div>
												<!--telefono-->
												<div class="mb-3">
													<label for="telefono" class="form-label colorLetrasForm">Teléfono</label>
													<input type="text"  name="telefono" id="telefono"  class="form-control" required>
												</div>
												<!--direccion-->
												<div class="mb-3">
													<label for="direccion" class="form-label colorLetrasForm">Dirección</label>
													<input type="text"  name="direccion" id="direccion"  class="form-control" required>
												</div>
												<!--password-->
												<div class="mb-3">
													<label for="password" class="form-label colorLetrasForm">Password</label>
													<input type="password"  name="password" id="password"  class="form-control" required>
												</div>


												
											
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
											<button type="submit" class="btn btn-primary">Registrar</button>
										</div>
									</form>
								</div>
							</div>
			</div>
						<br>
						<div class="table table-responsive">
							<table id="miTabla" class="table table-hover table-bordered">
								<thead>
									<tr class="bg-dark" style="color:white;">
										<th><b>#</b></th>
										<th><b>Nombre</b></th>
										<th><b>Correo Electrónico</b></th>
										<th><b>Teléfono</b></th>
										<th><b>Dirección</b></th>
										<th><b>Acciones</b></th>
									</tr>
								</thead>
								<tbody >								
									<?php 					
									$cont = 1;			
									foreach ($administradores as $admin): ?>
									<tr class="bg-info" >
									<td style="color:black;"><?= $cont ?></td>
										<td style="color:black;"><?= $admin['nombre'] . ' ' . $admin['apellidos'] ?></td>
										<td style="color:black;"><?= $admin['correoElectronico'] ?></td>
										<td style="color:black;"><?= $admin['telefono'] ?></td>
										<td style="color:black;"><?= $admin['direccion'] ?></td>
										<td>
											<a  href="<?=base_url('editarAdministrador/'.$admin['idAdministrador']);?>"  class="btn btn-warning" type="button">
												<span class="material-symbols-outlined" style="display: inline-block; text-align: center;">
												edit
												</span>
											</a>
											<a style="margin-top: 5px;" href="<?=base_url('borrarAdministrador/'.$admin['idAdministrador']);?>" class="btn btn-danger" type="button">
												<span class="material-symbols-outlined" style="display: inline-block; text-align: center;">
													delete
												</span>
											</a>
										</td>
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

<script>
	//Modal de registrarVideojuego
	// Obtener el botón y el modal
	var btnAbrirModal = document.getElementById("btnAbrirModal");
	var miModal = document.getElementById("miModal");

	// Agregar evento al botón para mostrar el modal
	btnAbrirModal.addEventListener("click", function() {
	miModal.classList.add("show");
	miModal.style.display = "block";
	});

	// Agregar evento al botón de cerrar para ocultar el modal
	var btnCerrarModal = miModal.querySelector(".btn-close");
	btnCerrarModal.addEventListener("click", function() {
	miModal.classList.remove("show");
	miModal.style.display = "none";
	});

</script>

