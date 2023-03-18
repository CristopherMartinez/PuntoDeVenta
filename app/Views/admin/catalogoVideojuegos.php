<div class="container">
    <div id="contenido de la tabla" class="form-group row">
        <div class="col-sm-12">
            <br>
            <h2>Catálogo de videojuegos</h2>
            <div class="table table-responsive">
                <table class="table table-hover table-bordered">
                    <tr class="bg-dark">
                        <td><b>Nombre</b></td>
                        <td><b>Descripción</b></td>
                        <td><b>Precio</b></td>
                        <td><b>Cantidad de inventario</b></td>
                    </tr>
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
                </table>
            </div>
        </div>
    </div>
</div>
