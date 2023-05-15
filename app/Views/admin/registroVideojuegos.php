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

		.is-invalid {
			border-color: #dc3545;
			background-color: #f8d7da;
		}
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

		<?php if(session()->has('validacionCorrecta')){ ?>
							<script>
								Swal.fire({
									icon: 'success',
									title: 'Registro exitoso',
									text: '<?php echo session('validacionCorrecta'); ?>'
								})
							</script>
		<?php } ?>	

		<?php if(session()->has('validacionFallo')){ ?>
							<script>
								Swal.fire({
									icon: 'error',
									title: 'Verificar nombre',
									text: '<?php echo session('validacionFallo'); ?>'
								})
							</script>
		<?php } ?>	
		
		<?php if(session()->has('mensaje')){ ?>
							<script>
								Swal.fire({
									icon: 'error',
									title: 'Verificar',
									text: '<?php echo session('mensaje'); ?>'
								})
							</script>
		<?php } ?>	
									

<div class="container">
		<h1>Registro de Videojuegos</h1>
		<!-- Modal de registro de videojuego -->
		<button type="button" class="btn btn-success" id="btnAbrirModal">Agregar videojuego</button>
		<div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="miModalLabel" aria-hidden="true" >
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="miModalLabel" style="color:black;">Agregar videojuego</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form method="POST" action="<?php echo base_url().'/guardar_juego'?>" enctype="multipart/form-data">				
					<div class="modal-body modal-scroll">
						<div class="col-md-9 offset-md-2">

							<div class="form-group row">
								<label for="nombre" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Nombre</span></label>
								<div class="col-sm-8">
									<input type="text" value="<?=old('nombre')?>" class="form-control" id="nombre" name="nombre" maxlength="15" required>
									<div id="nombreError" class="invalid-feedback">El nombre debe tener al menos 10 caracteres.</div>
								</div>
							</div> 
							<!--Categoria-->
							<div class="form-group row">
								<label for="categoria" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Categoria</span></label>
								<div class="col-sm-8">
									<select class="form-control" id="categoria" name="categoria" required>
									<?php foreach($categorias as $cat): ?>
										<?php $selected = old('categoria') == $cat['nombre'] ? 'selected' : ''; ?>
										<option <?= $selected ?>><?= $cat['nombre'] ?></option>
									<?php endforeach; ?>
									</select>
								</div>
							</div>
							<!--Proveedor-->
							<div class="form-group row">
								<label for="idProveedor" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Proveedor:</span></label>
								<div class="col-sm-8">
									<select class="form-control" id="idProveedor" name="idProveedor" required>
										<?php foreach($proveedores as $pro) { ?>
											<!-- <?php $selected = old('idProveedor') == $pro['nombre'] ? 'selected' : ''; ?> -->
											<option><?= $pro['nombre'] ?></option>
										<?php } ?>
									</select>
								</div>
							</div> 
							<!--Consola-->
							<div class="form-group row">
								<label for="consola" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Consola:</span></label>
								<div class="col-sm-8">
									<select class="form-control" id="consola" name="consola" required>
										<?php foreach($consolas as $con): ?>
										<?php $selected = old('consola') == $con['nombre'] ? 'selected' : ''; ?>
										<option <?= $selected ?>><?= $con['nombre'] ?></option>
									<?php endforeach; ?>
									</select>
								</div>
							</div>
							<!--Precio-->
							<!-- <div class="form-group row">
								<label for="precio" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Precio</span></label>
								<div class="col-sm-8">
									<input type="number" value="<?=old('precio')?>" class="form-control" id="precio" name="precio" required>
								</div>
								
							</div>  -->
							<div class="form-group row">
								<label for="precio" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Precio</span></label>
								<div class="col-sm-8">
									<input type="number" value="<?=old('precio')?>" class="form-control" id="precio" name="precio" required>
									<div class="invalid-feedback">El precio debe ser mayor que 800 y menor que 2500</div>
								</div>
							</div>


							<!--Cantidad de inventario-->
							<div class="form-group row">
								<label for="cantidadInventario" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Cantidad de licencias</span></label>
								<div class="col-sm-8">
									<input type="number" value="<?=old('cantidadInventario')?>" class="form-control" name="cantidadInventario" required>
								</div>
							</div>
							<!--Descripcion-->
							<div class="form-group row">
								<label for="descripcion" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Descripción</span></label>
								<div class="col-sm-8">
									<textarea class="form-control" id="descripcion" name="descripcion" rows="3" maxlength="350" required><?= old('descripcion') ?></textarea>
									<div id="descripcionError" class="invalid-feedback">La descripción debe tener al menos 15 caracteres.</div>
								</div>
							</div>


							<div class="form-group row">
								<label for="imagen" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Imagen</span></label>
								<div class="col-sm-8">
									<!-- <input name="imagen"  id="imagen" type="file" class="form-control-file" required> -->
																		<!-- <img id="imagen-preview" src="<?php echo base_url()?>/imagenes/logoWorld.png" alt="prueba" style="max-width: 180px; max-height: 180px;"> -->
									<!-- <img id="imagen-preview" src="{{ old('imagen') ? asset('../imagenes' . old('imagen')) : asset('imagenes/logoWorld.png') }}" alt="prueba" style="max-width: 180px; max-height: 180px;"> -->
									<img id="imagen-preview" alt="videojuego" style="max-width: 180px; max-height: 180px;">
									<input name="imagen" id="imagen" type="file" class="form-control-file" onchange="previewImage(this)" style="padding-top: 5px;" required>
								</div>
							</div>
						</div>
					</div>

					<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</form>
				</div>
			</div>
		</div>

				<div id="contenido de la tabla" class="form-group row">
					<div class="col-sm-12">
						<br>
						<div class="table table-responsive">
							<table id="miTabla" class="table table-hover table-bordered">
								<thead style="color:whitesmoke;">
									<tr class="bg-dark">
									<td><b>id</b></td>		
									<td><b>Imagen</b></td>	
									<td><b>Nombre</b></td>
									<td><b>Descripción</b></td>
									<td><b>Precio</b></td>
									<td><b>Cantidad de Licencias</b></td>
									<td><b>Consola</b></td>
									<td><b>Acciones</b></td>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($videojuegos as $v): ?>
									<tr class="bg-info" >
										<td style="color:black;"><?= $v['idVideojuego'] ?></td>
										<td style="color:black;"><img src="<?= base_url() . $v['imagen'] ?>" class="img-fluid rounded-start" style="border-radius: 5px; width: 400px; height: 200px;" alt="..."></td>
										<td style="color:black;"><?= $v['nombre'] ?></td>
										<td style="color:black;"><?= $v['descripcion'] ?></td>
										<td style="color:black;"><?= sprintf('$%s', $v['precio']) ?></td>
										<td style="color:black;"><?= "{$v['cantidadInventario']} licencias" ?></td>
										<td style="color:black;"><?= $v['consola'] ?></td>
										<td>
											
										<a  href="<?=base_url('editar/'.$v['idVideojuego']);?>"  class="btn btn-warning" type="button">
											<span class="material-symbols-outlined" style="display: inline-block; text-align: center;">
											edit
											</span>
										</a>
										<a style="margin-top: 5px;" href="<?=base_url('borrar/'.$v['idVideojuego']);?>" class="btn btn-danger" type="button">
											<span class="material-symbols-outlined" style="display: inline-block; text-align: center;">
												delete
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


<script>
						function previewImage(input) {
							if (input.files && input.files[0]) {
								var reader = new FileReader();
								reader.onload = function(e) {
									$('#imagen-preview').attr('src', e.target.result);
								}
								reader.readAsDataURL(input.files[0]);
							}
						}


  //Validar la longitud de descripcion
  const descripcion = document.getElementById('descripcion');
  const descripcionError = document.getElementById('descripcionError');
  const minLength = 15;

  descripcion.addEventListener('input', () => {
    if (descripcion.value.length < minLength) {
      descripcionError.style.display = 'block';
      descripcion.setCustomValidity('La descripción debe tener al menos 15 caracteres.');
    } else {
      descripcionError.style.display = 'none';
      descripcion.setCustomValidity('');
    }
  });


   //Validar la longitud de nombre
   const nombre = document.getElementById('nombre');
  const nombreError = document.getElementById('nombreError');
  const minLengthnombre = 10;

  nombre.addEventListener('input', () => {
    if (nombre.value.length < minLengthnombre) {
		nombreError.style.display = 'block';
      nombre.setCustomValidity('El nombre debe tener al menos 10 caracteres.');
    } else {
		nombreError.style.display = 'none';
		nombre.setCustomValidity('');
    }
  });


    //Validar precio
    const precioInput = document.getElementById('precio');
	const precioErrorMsg = document.createElement('div');
	precioInput.parentElement.appendChild(precioErrorMsg);

	precioInput.addEventListener('input', () => {
	const precio = parseInt(precioInput.value);
	if (precio < 800 || precio > 2500) {
		precioInput.classList.add('is-invalid');
		precioErrorMsg.innerText = 'El precio debe ser mayor a 800 y menor a 2500.';
	} else {
		precioInput.classList.remove('is-invalid');
		precioErrorMsg.innerText = '';
	}
	});


</script>

			







