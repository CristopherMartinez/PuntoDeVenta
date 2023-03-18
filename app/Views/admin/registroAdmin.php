
<head>
	<!-- Agregar los enlaces de los archivos necesarios -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.11.5/pagination/simple_numbers_no_ellipses.js"></script>

	<style>
		table.dataTable tbody td {
			color: white;
		}
	</style>
	
</head>


<div class="container" style="margin-top: 10px;">
<h1>Registro de Administradores</h1>
    <div class="row">
        <div class="col-sm-12">
		
			<form method="POST" action="<?php echo base_url().'/guardar_admin'?>" enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="nombre">Nombre:</label>
							<input type="text" class="form-control" id="nombre" name="nombre" required>
						</div>

						<div class="form-group">
							<label for="telefono">Teléfono:</label>
							<input type="text" class="form-control" id="telefono" name="telefono" required>
						</div>
						

						<div class="form-group">
							<label for="correoElectronico">Correo Electrónico:</label>
							<input type="text" class="form-control" id="correoElectronico" name="correoElectronico" required>
						</div>
					</div>

					<div class="col-sm-6">

						<div class="form-group">
							<label for="apellidos">Apellidos:</label>
							<input class="form-control" id="apellidos" name="apellidos" required></input>
						</div>

						<div class="form-group">
							<label for="direccion">Dirección:</label>
							<input type="text" class="form-control" id="direccion" name="direccion" required>
						</div>

						<div class="form-group">
							<label for="contrasenia">Contraseña:</label>
							<input type="password" class="form-control" id="contrasenia" name="contrasenia" required>
						</div>
					</div>
				</div>

				<!-- <br> -->

				<button type="submit" class="btn btn-danger">Agregar Administrador</button>

			</form>
        </div>
        <div class="col-sm-12">
			<div id="contenido de la tabla" class="form-group row">
				<div class="col-sm-12">
					<br>
					<div class="table table-responsive">
						<table id="miTabla" class="table table-hover table-bordered">
							<thead>
								<tr class="bg-dark">
									<th><b>Nombre</b></th>
									<th><b>Correo Electrónico</b></th>
									<th><b>Teléfono</b></th>
									<th><b>Dirección</b></th>
									<th><b>Contraseña</b></th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach($administradores as $admin){
									echo "<tr class='bg-info'>";
									echo "<td>".$admin['nombre']." ".$admin['apellidos']."</td>";
									echo "<td>".$admin['correoElectronico']."</td>";
									echo "<td>".$admin['telefono']."</td>";
									echo "<td>".$admin['direccion']."</td>";
									echo "<td>".$admin['contrasenia']."</td>";
									echo "</tr>";
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
        </div>
		
    </div>
</div>


<script type="text/javascript">
	$(document).ready(function() {
		$('#miTabla').DataTable({
			"pagingType": "simple_numbers_no_ellipses",
			"language": {
				"emptyTable": "<span style='color:white'>No hay datos disponibles en la tabla</span>",
				"info": "<span style='color:white'>Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros</span>",
				"infoEmpty": "<span style='color:white'>Mostrando 0 registros</span>",
				"infoFiltered": "(filtrado de un total de _MAX_ registros)",
				"infoPostFix": "",
				"thousands": ",",
				"lengthMenu": "<span style='color:white'>Mostrar _MENU_ registros</span>",
				"loadingRecords": "Cargando...",
				"processing": "Procesando...",
				"search": "<span style='color:white'>Buscar:</span>",
				"zeroRecords": "<span style='color:white'>No se encontraron resultados</span>",
				"paginate": {
					"first": "Primero",
					"last": "Último",
					"next": "<span style='color:white'>Siguiente</span>",
					"previous": "<span style='color:white'>Anterior</span>"
				}
			},
			"paging": true,
			"lengthMenu": [5, 10, 25, 50],
			"pageLength": 5,
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


