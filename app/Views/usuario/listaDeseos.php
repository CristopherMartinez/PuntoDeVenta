<!-- 

<?php
print_r(session_status());
print_r($_SESSION);
?> -->

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>




<a type="button" onclick="mostrarDeseos()" href="<?php echo base_url().'/js/recibirDatos.php'?>">Prueba</a>
<!-- <button type="button" onclick="mostrarDeseos()">Lista de deseos</button> -->
<!-- 
<div class="container">
    <div class="alert alert-success" role="alert" style="margin-top: 10px;">
    Lista de Deseos
    </div>
    <div id="contenido de la tabla" class="form-group row">
					<div class="col-sm-12">
						<br>
						<div class="table table-responsive" id="tableListaDeseo">
							<table id="miTabla" class="table table-hover table-bordered">
								<thead>
									<tr class="bg-dark" style="color:whitesmoke;">
                                        <td><b>Imagen</b></td>		
                                        <td><b>Videojuego</b></td>	
                                        <td><b>Descripcion</b></td>
                                        <td><b>Precio</b></td>
                                        <td><b>Acciones</b></td>
									</tr>
								</thead>
								<tbody>
								

								</tbody>
							</table>
						</div>
					</div>
				</div>
</div> -->

<div id="miDiv">

</div>




<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
     -->
    <!-- <script type="text/javascript">
    const prueba = "hola";
    $('#send').click( function() {
    alert('Enviando!');
        $.ajax(
                {
                    url: "<?php echo base_url('js/scripts.js') ?>?var="+prueba,
                    success: function( prueba ) {
                        alert( 'El servidor devolvio "' + prueba + '"' );
                    }
                }
            )
        }
    );
    </script> -->


<script src=" <?php echo base_url()?>/js/scripts.js"></script>



