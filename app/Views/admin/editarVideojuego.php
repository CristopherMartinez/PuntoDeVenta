<!-- <?php 
print_r($Videojuego)
?> -->
<!-- <?php 
print_r($videojuegos)
?> -->
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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

			<div class="modal-dialog" style="margin-bottom: 100px; margin-top: -600px;">
				<div class="modal-content" >
				<div class="modal-header">
					<h5 class="modal-title" id="miModalLabel" style="color:black;">Actualizar Videojuego</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body modal-scroll">
					<div class="col-md-9 offset-md-2">
					<form id="myForm" method="POST" action="<?php echo base_url().'/actualizar'?>" enctype="multipart/form-data">
						<!--Id de Videojuego oculto-->
						<div class="form-group row" hidden>
							<label for="idVideojuego" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">IdVideojuego</span></label>
							<div class="col-sm-8">
								<input type="text" value="<?=$Videojuego['idVideojuego']?>" id="idVideojuego" name="idVideojuego">
							</div>
						</div>
						<!--Nombre-->
                        <!-- <div class="form-group row">
                            <label for="nombre" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Nombre</span></label>
                            <div class="col-sm-8">
                                <input type="text" value="<?= isset($Videojuego['nombre']) ? $Videojuego['nombre'] : '' ?>" class="form-control" id="nombre" name="nombre" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" required>
                            </div>
							<div class="invalid-feedback">
								Por favor ingresa un nombre válido.
							</div>
                        </div> -->
						<div class="form-group row">
							<label for="nombre" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Nombre</span></label>
							<div class="col-sm-8">
								<input type="text" value="<?= isset($Videojuego['nombre']) ? $Videojuego['nombre'] : '' ?>" class="form-control" id="nombre" name="nombre" required>
								<!-- <div class="invalid-feedback">
									Por favor ingresa un nombre válido.
								</div> -->
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
						<!--Categoria-->
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
						<!--Proveedor-->
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
						<!--Consola-->
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
						<!--Precio-->
                        <div class="form-group row">
							<label for="precio" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Precio</span></label>
							<div class="col-sm-8">
								<input type="number" value="<?=$Videojuego['precio']?>" class="form-control" id="precio" name="precio" required>
							</div>
						</div> 
						<!--Cantidad de inventario-->
						<div class="form-group row">
							<label for="cantidadInventario" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Cantidad de inventario</span></label>
							<div class="col-sm-8">
								<input type="number" value="<?=$Videojuego['cantidadInventario']?>"  class="form-control" name="cantidadInventario" required>
							</div>
						</div>
						<!--Descripcion-->
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
						<!--Imagen-->
						<div class="form-group row">
							<label for="imagen" class="col-sm-4 col-form-label font-weight-bold"><span class="nombre">Imagen</span></label>
							<div class="col-sm-8">
								<!-- <img id="imagen-preview" src="<?php  echo base_url().$Videojuego['imagen']?>" alt="Imagen previa" style="max-width: 200px; max-height: 200px;"> -->
								<!-- <input name="imagen" id="imagen" type="file" class="form-control-file" onchange="previewImage(this)" style="padding-top: 5px;"> -->
								<input name="imagen" id="imagen" type="file" class="form-control-file" style="padding-top: 5px;">
								<span id="nombre-imagen"></span>



							</div>
						</div>
						<div class="row mt-4">
							<div class="col">
								<button type="submit" class="btn btn-primary btn-block">
									Actualizar
									<!-- <a  href="<?=base_url('actualizar/'.$Videojuego['idVideojuego']);?>"  class="btn btn-primary" type="button">Actualizar</a> -->
								</button>
							</div>
						</div>
					</form>

					</div>
				</div>
				<div class="modal-footer">
					<!-- <a href="<?php base_url('admin/registroVideojuegos');?>" class="btn btn-info">Cerrar</a> -->
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
			</script>

			<script>
									document.getElementById('imagen').addEventListener('change', function() {
										var nombreImagen = this.files[0].name;
										document.getElementById('nombre-imagen').textContent = nombreImagen;
									});
			</script>

			
