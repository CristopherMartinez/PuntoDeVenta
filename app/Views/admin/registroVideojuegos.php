<head>
	<style>
		.nombre{
			color: black;
		}
/* 
		.material-symbols-outlined {
		font-variation-settings:
		'FILL' 0,
		'wght' 400,
		'GRAD' 0,
		'opsz' 48
		} */
		.modal-scroll {
			max-height: 400px;
			overflow-y: auto;
		}
		
	</style>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>


    
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<div class="container">
	<br>

		<?php if(session()->has('mensaje')){ ?>
							<script>
								Swal.fire({
									icon: 'error',
									title: 'Oops...',
									text: '<?php echo session('mensaje'); ?>'
								})
							</script>
		<?php } ?>										

		<!-- Modal1 -->
		<button type="button" class="btn btn-success" id="btnAbrirModal">Agregar videojuego</button>
		<div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="miModalLabel" aria-hidden="true" >
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="miModalLabel" style="color:black;">Agregar videojuego</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body modal-scroll">
					<div class="col-md-9 offset-md-2">

					<form method="POST" action="<?php echo base_url().'/guardar_juego'?>" enctype="multipart/form-data">
						<div class="form-group row">
							<label for="nombre" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Nombre</span></label>
							<div class="col-sm-8">
								<input type="text" value="<?=old('nombre')?>" class="form-control" id="nombre" name="nombre" required>
							</div>
						</div> 
						<!-- <?php 
						if(session('validacionNombre')){
						?>
						<div class="alert alert-danger" role="alert">
							<?php 
							echo session('validacionNombre');
							?>
						</div>
						<?php
						}
						?> -->

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
						<div class="form-group row">
							<label for="precio" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Precio</span></label>
							<div class="col-sm-8">
								<input type="number" value="<?=old('precio')?>" class="form-control" id="precio" name="precio" required>
							</div>
						</div> 

						<!--Cantidad de inventario-->
						<div class="form-group row">
							<label for="cantidadInventario" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Cantidad de inventario</span></label>
							<div class="col-sm-8">
								<input type="number" value="<?=old('cantidadInventario')?>" class="form-control" name="cantidadInventario" required>
							</div>
						</div>

						<!--Descripcion-->
						<div class="form-group row">
							<label for="descripcion" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Descripción</span></label>
							<div class="col-sm-8">
								<textarea class="form-control" id="descripcion" name="descripcion" rows="3" maxlength="350" required><?= old('descripcion') ?></textarea>
							</div>
						</div> 
						<!-- <?php 
						if(session('validacionDescripcion')){
						?>
						<div class="alert alert-danger" role="alert">
							<?php 
							echo session('validacionDescripcion');
							?>
						</div>
						<?php
						}
						?>    -->
						<div class="form-group row">
							<label for="imagen" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Imagen</span></label>
							<div class="col-sm-8">
								<!-- <input name="imagen"  id="imagen" type="file" class="form-control-file" required> -->
								<img id="imagen-preview" alt="videojuego" style="max-width: 180px; max-height: 180px;">
								<!-- <img id="imagen-preview" src="<?php echo base_url()?>/imagenes/logoWorld.png" alt="prueba" style="max-width: 180px; max-height: 180px;"> -->
								<!-- <img id="imagen-preview" src="{{ old('imagen') ? asset('../imagenes' . old('imagen')) : asset('imagenes/logoWorld.png') }}" alt="prueba" style="max-width: 180px; max-height: 180px;"> -->
								<input name="imagen" id="imagen" type="file" class="form-control-file" onchange="previewImage(this)" style="padding-top: 5px;">
							</div>
						</div>

						<div class="row mt-4">
							<div class="col">
								<button type="submit" class="btn btn-danger btn-block">
									Guardar
								</button>
							</div>
						</div>
					</form>

					</div>
				</div>
				<div class="modal-footer">
				</div>
				</div>
			</div>
		</div>
		

    </div>
</div>





<!--Correcto-->

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
									<td><b>id</b></td>		
									<td><b>Imagen</b></td>	
									<td><b>Nombre</b></td>
									<td><b>Descripción</b></td>
									<td><b>Precio</b></td>
									<td><b>Cantidad de inventario</b></td>
									<td><b>Consola</b></td>
									<td><b>Acciones</b></td>
									</tr>
								</thead>
								<tbody>
								<!-- <?php
								foreach($videojuegos as $v){
									echo "<tr class='bg-info'>";
									echo "<td>".$v['idVideojuego']."</td>";
									echo '<td><img src="'. base_url() . $v['imagen'] .'" class="img-fluid rounded-start" style="border-radius: 5px; max-width: 200px; max-height: 200px;" alt="..."></td>';
									echo "<td>".$v['nombre']."</td>";
									echo "<td>".$v['descripcion']."</td>"; 
									echo "<td>$".$v['precio']."</td>";
									echo "<td>".$v['cantidadInventario']." piezas</td>";
									echo "<td>".$v['consola']."</td>"; 
									echo "</tr>";
								}
								?> -->
								<?php foreach ($videojuegos as $v): ?>
									<tr class="bg-info">
										<td><?= $v['idVideojuego'] ?></td>
										<td><img src="<?= base_url() . $v['imagen'] ?>" class="img-fluid rounded-start" style="border-radius: 5px; width: 400px; height: 200px;" alt="..."></td>
										<td><?= $v['nombre'] ?></td>
										<td><?= $v['descripcion'] ?></td>
										<td><?= sprintf('$%s', $v['precio']) ?></td>
										<td><?= "{$v['cantidadInventario']} piezas" ?></td>
										<td><?= $v['consola'] ?></td>
										<!-- <td><a  href="<?=base_url('editar/'.$v['idVideojuego']);?>" onclick="abrirModal(<?php echo $v['idVideojuego'] ?>) class="btn btn-warning" type="button">Editar</a><a style="margin-top: 5px;" href="<?=base_url('borrar/'.$v['idVideojuego']);?>" class="btn btn-danger" type="button">Borrar</a></td> -->
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
										<!-- <td><a href="<?=base_url('editar/'.$v['idVideojuego']);?>" class="btn btn-warning" type="button" id="btnAbrirModal2" data-toggle="modal" data-target="#exampleModal">Editar</a><a style="margin-top: 5px;" href="<?=base_url('borrar/'.$v['idVideojuego']);?>" class="btn btn-danger" type="button">Borrar</a></td> -->

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
// 	function abrirModal(id) {
//     $('#miModal').modal('show');
//     $('#id').val(id);
//     $.ajax({
//         url: "<?php echo base_url('editar'); ?>",
//         type: "POST",
//         data: {id: id},
//         dataType: "JSON",
//         success: function(data) {
//             $('#nombre').val(data.nombre);
//             // $('#email').val(data.email);
//         }
//     });
// }
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
			</script>

			







