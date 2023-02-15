<div class="container">
    <form method="post" action="<?php echo base_url().'registrar'?>">
        <div class="form-group row col-12">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa tu nombre completo">
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingresa tu direccion">
        </div>
        <div class="form-control-group row">
            <div class="col-6">
                <label for="correo">Correo</label>
                <input type="email" name="correo" id="correo" class="form-control">
                <button class="btn btn-success">Registrar</button>
            </div>
        </div>
    </form>
    <div id="contenido de la tabla" class="row">
        <!--<?php //print_($datos)?>-->
        <div>
            <div class="col-sm-12">
                <div class="table table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <td>Nombre</td>
                            <td>Direccion</td>
                            <td>Correo</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>