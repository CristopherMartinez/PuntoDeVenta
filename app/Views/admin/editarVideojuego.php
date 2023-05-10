<head>
	<style>
		.nombre{
			color: black;
		}

		.material-symbols-outlined {
		font-variation-settings:
		'FILL' 0,
		'wght' 400,
		'GRAD' 0,
		'opsz' 48
		}
		.modal-scroll {
			max-height: 400px;
			overflow-y: auto;
		}


	</style>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.11.5/pagination/simple_numbers_no_ellipses.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

			<?php if(session()->has('mensaje1')){ ?>
									<script>
										Swal.fire({
											icon: 'error',
											title: 'Oops...',
											text: '<?php echo session('mensaje1'); ?>'
										})
									</script>
			<?php } ?>	

			<div class="modal-dialog d-flex align-items-center justify-content-center" style="position: fixed; top: 0; right: 0; bottom: 0; left: 0; min-height: 100vh;">
				<div class="modal-content">

					<div class="modal-header">
						<h5 class="modal-title" id="miModalLabel" style="color:black;">Actualizar Videojuego</h5>
						<form method="POST" action="<?php echo base_url().'/cerrarModalEditar'?>">
							<button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</form>
					</div>

					<div class="modal-body modal-scroll">
						<div class="col-md-9 offset-md-2">
							<form id="myForm" method="POST" action="<?php echo base_url().'/actualizar'?>" enctype="multipart/form-data">
								<div class="form-group row" hidden>
									<label for="idVideojuego" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">IdVideojuego</span></label>
									<div class="col-sm-8">
										<input type="text" value="<?=$Videojuego['idVideojuego']?>" id="idVideojuego" name="idVideojuego">
									</div>
								</div>
								<div class="form-group row">
									<label for="nombre" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Nombre</span></label>
									<div class="col-sm-8">
										<input type="text" value="<?= isset($Videojuego['nombre']) ? $Videojuego['nombre'] : '' ?>" class="form-control" id="nombre" name="nombre" required>
									</div>
								</div>
								<?php 
								if(session('validacionNombre1')){
								?>
								<div class="alert alert-danger" role="alert">
									<?php 
									echo session('validacionNombre1');
									?>
								</div>
								<?php
								}
								?>
								
								<div class="form-group row">
									<label for="categoria" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Categoria</span></label>
									<div class="col-sm-8">
										<select class="form-control" id="categoria" name="categoria">
											<?php foreach($categorias as $cat) { ?>
												<option value="<?= $cat['nombre'] ?>" <?= ($cat['nombre'] == $Videojuego['nombreCategoria']) ? 'selected' : '' ?>><?= $cat['nombre'] ?></option>
											<?php } ?>
										</select>
									</div>
								</div> 
								
								<div class="form-group row">
									<label for="idProveedor" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Proveedor:</span></label>
									<div class="col-sm-8">
										<select class="form-control" id="idProveedor" name="idProveedor">
											<?php foreach($proveedores as $pro) { ?>
												<option value="<?= $pro['nombre'] ?>" <?= ($pro['nombre'] == $Videojuego['nombreProveedor']) ? 'selected' : '' ?>><?= $pro['nombre'] ?></option>
											<?php } ?>
										</select>
									</div>
								</div> 
								
								<div class="form-group row">
									<label for="consola" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Consola:</span></label>
									<div class="col-sm-8">
										<select class="form-control" id="consola" name="consola">
											<?php foreach($consolas as $con) { ?>
												<option value="<?= $con['nombre'] ?>" <?= ($con['nombre'] == $Videojuego['nombreConsola']) ? 'selected' : '' ?>><?= $con['nombre'] ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								
								<div class="form-group row">
									<label for="precio" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Precio</span></label>
									<div class="col-sm-8">
										<input type="number" value="<?=$Videojuego['precio']?>" class="form-control" id="precio" name="precio" required>
									</div>
								</div> 
								
								<div class="form-group row">
									<label for="cantidadInventario" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Cantidad de licencias</span></label>
									<div class="col-sm-8">
										<input type="number" value="<?=$Videojuego['cantidadInventario']?>"  class="form-control" name="cantidadInventario" required>
									</div>
								</div>
							
								<div class="form-group row">
									<label for="descripcion"class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Descripción</span></label>
									<div class="col-sm-8">
										<textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="<?=$Videojuego['descripcion']?>" maxlength="350"><?=$Videojuego['descripcion']?></textarea>
									</div>
								</div>   
								<?php 
								if(session('validacionDescripcion1')){
								?>
								<div class="alert alert-danger" role="alert">
									<?php 
									echo session('validacionDescripcion1');
									?>
								</div>
								<?php
								}
								?>  
								
								<div class="form-group row">
									<label for="imagen" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Imagen</span></label>
									<div class="col-sm-8">
					
										<input name="imagen" id="imagen" type="file" class="form-control-file" style="padding-top: 5px;">
										<span id="nombre-imagen"></span>



									</div>
								</div>
								<div class="row mt-4">
									<div class="col">
										<button type="submit" class="btn btn-primary btn-block">
											Actualizar
											
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

	// //Modal de editar
	// //Obtener el botón y el modal
	// var btnAbrirModalEditar = document.getElementById("btnAbrirModalEditar");
	// var editarModal = document.getElementById("editarModal");

	// // Agregar evento al botón para mostrar el modal
	// btnAbrirModalEditar.addEventListener("click", function() {
	// editarModal.classList.add("show");
	// editarModal.style.display = "block";
	// });

	// // Agregar evento al botón de cerrar para ocultar el modal
	// var btnCerrarModalEditar = editarModal.querySelector(".btn-close");
	// btnCerrarModalEditar.addEventListener("click", function() {
	// editarModal.classList.remove("show");
	// editarModal.style.display = "none";
	// });
	

</script>

<script>
	document.getElementById('imagen').addEventListener('change', function() {
		var nombreImagen = this.files[0].name;
		document.getElementById('nombre-imagen').textContent = nombreImagen;
	});
</script>

			
