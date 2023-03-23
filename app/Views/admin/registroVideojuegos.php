
<!-- <div class="container mt-4">
	<h1>Registro de Videojuegos</h1>
	
	<form method="POST" action="<?php echo base_url().'/guardar_juego'?>" enctype="multipart/form-data" class="row g-3">

		<div class="col-md-6">
			<div class="form-group">
				<label for="idProveedor">Selecciona un proveedor:</label>
				<select class="form-control" id="idProveedor" name="idProveedor">
					<?php
					foreach($proveedores as $pro){
						echo "<option id='idProveedor'>".$pro['nombre']."</option>";
					}
					?>
				</select>
			</div>

			<div class="form-group">
				<label for="nombre">Nombre del Videojuego:</label>
				<input type="text" class="form-control" id="nombre" name="nombre" required>
			</div>

			<div class="form-group">
				<label for="descripcion">Descripción:</label>
				<input class="form-control" id="descripcion" name="descripcion" required></input>
			</div>

			<div class="form-group">
				<label for="consola">Selecciona la consola:</label>
				<select class="form-control" id="consola" name="consola">
					<?php
					foreach($consolas as $con){
						echo "<option id='consola'>".$con['nombre']."</option>";
					}
					?>
				</select>
			</div> 
			
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label for="precio">Precio:</label>
				<input type="number" class="form-control" id="precio" name="precio" required>
			</div>

			<div class="form-group">
				<label for="cantidadInventario">Cantidad de inventario: </label>
				<input type="number" class="form-control" id="cantidadInventario" name="cantidadInventario" required>
			</div>

			<div class="form-group">
				<label for="categoria">Selecciona un categoría:</label>
				<select class="form-control" id="categoria" name="categoria">
					<?php
					foreach($categorias as $cat){
						echo "<option id='categoria'>".$cat['nombre']."</option>";
					}
					?>
				</select>
			</div> 

			
			<div class="form-group">
				<label for="imagen">Imagen:</label>
				<input type="file" class="form-control" id="imagen" name="imagen" required>
			</div>
			
		</div>

		<div class="col-12">
			<button type="submit" name="btn-agregar" id="btn-agregar" class="btn btn-danger">Agregar Videojuego</button>
		</div>

	</form>
</div> -->



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
<h1>Registro de Videojuegos</h1>
    <div class="row">
        <div class="col-sm-12">
		
			<form method="POST" action="<?php echo base_url().'/guardar_juego'?>" enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-6">

						<div class="form-group">
							<label for="idProveedor">Selecciona un proveedor:</label>
							<select class="form-control" id="idProveedor" name="idProveedor">
								<?php
								foreach($proveedores as $pro){
									echo "<option id='idProveedor'>".$pro['nombre']."</option>";
								}
								?>
							</select>
						</div>

						<div class="form-group">
							<label for="nombre">Nombre del Videojuego:</label>
							<input type="text" class="form-control" id="nombre" name="nombre" required>
						</div>

						<div class="form-group">
							<label for="descripcion">Descripción:</label>
							<input class="form-control" id="descripcion" name="descripcion" required></input>
						</div>

						<div class="form-group">
							<label for="consola">Selecciona la consola:</label>
							<select class="form-control" id="consola" name="consola">
								<?php
								foreach($consolas as $con){
									echo "<option id='consola'>".$con['nombre']."</option>";
								}
								?>
							</select>
						</div> 
					</div>

					<div class="col-sm-6">
						<div class="form-group">
							<label for="precio">Precio:</label>
							<input type="number" class="form-control" id="precio" name="precio" required>
						</div>

						<div class="form-group">
							<label for="cantidadInventario">Cantidad de inventario: </label>
							<input type="number" class="form-control" id="cantidadInventario" name="cantidadInventario" required>
						</div>

						<div class="form-group">
							<label for="categoria">Selecciona un categoría:</label>
							<select class="form-control" id="categoria" name="categoria">
								<?php
								foreach($categorias as $cat){
									echo "<option id='categoria'>".$cat['nombre']."</option>";
								}
								?>
							</select>
						</div> 

						
						<div class="form-group">
							<label for="imagen">Imagen:</label>
							<input type="file" class="form-control" id="imagen" name="imagen" required>
						</div>				
						
					</div>
				</div>

				<button type="submit" class="btn btn-danger" name="btn-agregar" id="btn-agregar">Agregar Videojuego</button>

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
								<td><b>Nombre</b></td>
								<td><b>Descripción</b></td>
								<td><b>Precio</b></td>
								<td><b>Cantidad de inventario</b></td>
								</tr>
							</thead>
							<tbody>
							<?php
							foreach($videojuegos as $v){
								echo "<tr class='bg-info'>";
								echo "<td>".$v['nombre']."</td>";
								echo "<td>".$v['descripcion']."</td>"; 
								echo "<td>$".$v['precio']."</td>";
								echo "<td>".$v['cantidadInventario']." piezas</td>";
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







