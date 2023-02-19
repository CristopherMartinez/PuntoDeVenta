<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<div class="container">
    <h4><?= $titulo_seccion;?></h4>
    <p><?= $descripcion;?></p>
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