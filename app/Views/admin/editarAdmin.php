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

    


<div class="modal-dialog d-flex align-items-center justify-content-center" style="position: fixed; top: 0; right: 0; bottom: 0; left: 0; min-height: 100vh;">
				<div class="modal-content">

					<div class="modal-header">
                        <h5 class="modal-title" id="miModalLabel" style="color:black;">Actualizar Videojuego</h5>
						<form method="POST" action="<?php echo base_url().'/cerrarModalEditarAdmin'?>">
							<button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</form>                    
					</div>

                     <form action="<?php echo base_url().'/actualizarAdmin'?>" method="POST" enctype="multipart/form-data">
                        <div class="modal-body" style="max-height: 60vh; overflow-y: auto; color:black;">
												<!--Nombre-->
												<div class="row mb-3">
													<div class="col">
														<label for="nombre" class="form-label colorLetrasForm">Nombre(s)</label>
														<input type="text" class="form-control" name="nombre" id="nombre" value="<?= $administrador['nombre']?>" required>
													</div>
												</div>
												<!--Apellidos-->
												<div class="mb-3">
													<label for="apellidos" class="form-label colorLetrasForm">Apellidos</label>
													<input type="text"  name="apellidos" id="apellidos"  class="form-control" value="<?= $administrador['apellidos']?>" required>
												</div>
												<!--CorreoElectronico-->
												<div class="mb-3">
													<label for="correo" class="form-label colorLetrasForm">Correo Electrónico</label>
													<input type="text"  name="correo" id="correo"  class="form-control" value="<?= $administrador['correoElectronico']?>"  required>
												</div>
												<!--telefono-->
												<div class="mb-3">
													<label for="telefono" class="form-label colorLetrasForm">Teléfono</label>
													<input type="text"  name="telefono" id="telefono"  class="form-control"  value="<?= $administrador['telefono']?>" required>
												</div>
												<!--direccion-->
												<div class="mb-3">
													<label for="direccion" class="form-label colorLetrasForm">Dirección</label>
													<input type="text"  name="direccion" id="direccion"  class="form-control" value="<?= $administrador['direccion']?>" required>
												</div>
                                                <input type="text" name="idAdministrador" id="idAdministrador" value="<?= $administrador['idAdministrador']?>" hidden>
						
                        </div>
                        
                        <div class="modal-footer">
                            <span>
                                    <button type="submit" class="btn btn-primary">Actualizar</button>                          
                            </span>
                        </div>
                    </form> 
					

				</div>
</div>