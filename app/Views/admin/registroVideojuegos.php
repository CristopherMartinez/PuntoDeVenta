	<div class="container mt-4">
		<h1>Registro de Videojuegos</h1>
		<form method="POST" action="<?php echo base_url().'/guardar_juego'?>"" enctype="multipart/form-data">

			<div class="form-group">
				<label for="idProveedor">Selecciona un proveedor:</label>
				<select class="form-control" id="idProveedor" name="idProveedor">
					<?php
					foreach($proveedores as $pro){
					echo"<option id='idProveedor'>".$pro['nombre']."</option>";
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
				<textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
			</div>

			<div class="form-group">
				<label for="imagen">Imagen:</label>
				<input type="file" class="form-control" id="imagen" name="imagen" required>
			</div>

			<div class="form-group">
				<label for="precio">Precio:</label>
				<input type="number" class="form-control" id="precio" name="precio" required>
			</div>

			<div class="form-group">
				<label for="cantidadInventario">Cantidad de inventario: </label>
				<input type="number" class="form-control" id="cantidadInventario" name="cantidadInventario" required>
			</div>

			<!-- <div class="form-group">
				<label for="consola">Consola:</label>
				<input type="number" class="form-control" id="idConsola" name="consola" required>
			</div>  -->

			<div class="form-group">
				<label for="categoria">Selecciona un categoría:</label>
				<select class="form-control" id="categoria" name="categoria">
					<?php
					foreach($categorias as $cat){
					echo"<option id='categoria'>".$cat['nombre']."</option>";
					}
					?>
				</select>
			</div> 

			<div class="form-group">
				<label for="consola">Selecciona la consola:</label>
				<select class="form-control" id="consola" name="consola">
					<?php
					foreach($consolas as $con){
					echo"<option id='consola'>".$con['nombre']."</option>";
					}
					?>
				</select>
			</div> 
			

			<button type="submit" name="btn-agregar" id="btn-agregar" class="btn btn-danger">Agregar Videojuego</button>

		</form>
	</div>

