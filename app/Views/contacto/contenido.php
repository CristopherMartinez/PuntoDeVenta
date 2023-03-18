<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<!-- <div class="container">
    <h4><?= $titulo_seccion;?></h4>
    <p><?= $descripcion;?></p>
    <form method="post" action="<?php echo base_url().'/guardar_persona'?>">
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
                <br>
                <button class="btn btn-success" type="submit" value="Registrar">Registrar</button>
            </div>
        </div>
    </form>
</div> -->



<div class="container my-4">
    <h4><?= $titulo_seccion;?></h4>
    <p><?= $descripcion;?></p>
    <form method="post" action="<?php echo base_url().'/guardar_persona'?>">
      <div class="mb-3">
        <label for="nombre" class="form-label"><b>Nombre</b></label>
        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa tu nombre completo">
      </div>
      <div class="mb-3">
        <label for="direccion" class="form-label"><b>Dirección</b></label>
        <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingresa tu dirección">
      </div>
      <div class="mb-3">
        <label for="correo" class="form-label"><b>Correo electrónico</b></label>
        <input  type="email" name="correo" id="correo" class="form-control" placeholder="Ingresa tu correo electrónico">
      </div>
      <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
  </div>

  <!-- Bootstrap JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
</body>







