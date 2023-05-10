
<head>
	<style>
	
	</style>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>


<div class="modal-dialog d-flex align-items-center justify-content-center" style="position: fixed; top: 0; right: 0; bottom: 0; left: 0; min-height: 100vh;">
	<div class="modal-content">

					<div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color:black;">Detalles de Compra</h5>                 
					</div>

                    <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><b>#</b></th>
                                        <th><b>Videojuego</b></th>
                                        <th><b>Consola</b></th>
                                        <th><b>Precio</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if(isset($videojuegos)){
                                        $cont = 1;
                                        $totalPrecio = 0;
                                        foreach ($videojuegos as $videojuego): 
                                        $totalPrecio += $videojuego['precio'];
                                    ?>
                                        <tr class="bg-info">
                                            <td><?= $cont ?></td>
                                            <td><?= $videojuego['nombre'] ?></td>
                                            <td><?= $videojuego['consola'] ?></td>
                                            <td>$<?= $videojuego['precio'] ?></td>
                                        </tr>
                                    <?php 
                                        $cont++; 
                                        endforeach; 
                                    ?>
                                        <tr class="bg-info">
                                            <td colspan="3" style="text-align: center; padding-left:70px; font-weight:bold;" >Total:</td>
                                            <td>$<?= $totalPrecio ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
					
					<div class="modal-footer">
                        <span>
                            <form method="POST" action="<?php echo base_url().'/cerrarModalDetalle'?>">
                                <button type="submit" class="btn btn-danger">Cerrar</button>
                            </form>                       
                        </span>
					</div>
	</div>
</div>



