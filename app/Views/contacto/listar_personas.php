<div id="contenido de la tabla" class="form-group row">
    <div class="col-sm-12">
        <br>
        <h2>Catalogo de personas</h2>
        <div class="table table-responsive">
            <table class="table table-hover table-bordered">
                <tr>
                    <td><b>Nombre</b></td>
                    <td><b>Dirección</b></td>
                    <td><b>Correo Electrónico</b></td>
                </tr>
                <?php
                foreach($personas as $per){
                    echo "<tr>";
                    echo "<td>".$per['nombre']."</td>";
                    echo "<td>".$per['direccion']."</td>";
                    echo "<td>".$per['correo']."</td>";
                    //echo "<td><button type='button' onclick=''>Prueba</button></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    function carga_modal(id){
        alert(id);
    }
</script>