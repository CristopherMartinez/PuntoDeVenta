<div class="container">
    <div id="contenido de la tabla" class="form-group row">
        <div class="col-sm-12">
            <br>
            <h2>Administradores</h2>
            <div class="table table-responsive">
                <table class="table table-hover table-bordered">
                    <tr class="bg-dark">
                        <td><b>Nombre</b></td>
                        <td><b>Correo Electrónico</b></td>
                        <td><b>Telefono</b></td>
                        <td><b>Dirección</b></td>
                        <td><b>Contraseña</b></td>
                    </tr>
                    <?php
                    foreach($administradores as $admin){
                        echo "<tr class='bg-info'>";
                        echo "<td>".$admin['nombre']." ".$admin['apellidos']."</td>";
                        echo "<td>".$admin['correoElectronico']."</td>";
                        echo "<td>".$admin['telefono']."</td>";
                        echo "<td>".$admin['direccion']."</td>";
                        echo "<td>".$admin['contrasenia']."</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
