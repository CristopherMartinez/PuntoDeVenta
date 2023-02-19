<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script><br><br>

</head>
<body class="imgregister">




  <section class="vh-100 bg-image imgregister"
  <img src="<?php echo base_url()?>/imagenes/fondo6.jpg" class="d-block w-100" alt="...">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Crear Cuenta</h2>

              <form>

                <div class="form-outline mb-4">
                  <input type="text" id="nombre" placeholder="Nombre" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="apellido" placeholder="Apellido" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="correo" placeholder="Correo" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="password" placeholder="Contraseña" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="confirmar" placeholder="Confirmar contraseña"class="form-control form-control-lg" />
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    Acepta los <a href="#!" class="text-body"><u>Terminos y condiciones</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center form-group">
  <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
  <div class="help-block with-errors"></div>
</div>


                <div class="d-flex justify-content-center">
                  <button type="button"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" style="margin-top:10px;">Registrar</button> 
                </div>

                <p class="text-center text-muted mt-5 mb-0">¿Ya tienes cuenta? <a href="#!"class="fw-bold text-body"><u>Ingresar</u></a></p>
                    

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html> -->


<!DOCTYPE html>
<html>
  <head>
    <!-- <title>Formulario de inicio de sesión con Bootstrap 5 y captcha</title> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
     <body class="imgregister letraGeneral" style="color:whitesmoke">
        <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
            <h2 class="text-center mb-4" style="color:whitesmoke; font-weight:bolder;">REGISTRATE</h2>
            <form method="POST" action="#">
                <div class="mb-3">
                <label for="usuario" class="form-label" style="color:whitesmoke; font-weight:bold;">Nombre</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
                </div>
                <div class="mb-3">
                <label for="contrasena" class="form-label" style="color:whitesmoke; font-weight:bold;">Correo electrónico</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                </div>
                <div class="mb-3">
                <label for="contrasena" class="form-label" style="color:whitesmoke; font-weight:bold;">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                </div>
                <div class="mb-3">
                <label for="contrasena" class="form-label" style="color:whitesmoke; font-weight:bold;">Repite contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                </div>
                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g" style="color:whitesmoke; font-weight:bold;">
                    Estoy de acuerdo con los <a href="#!" class="text-body"><u style="color:blue; text-decoration:none;"> Términos y Condiciones</u></a> 
                    y <a href="#!" class="text-body"><u style="color:blue; text-decoration:none;">Política de privacidad</u></a>
                  </label>
                </div>
                <div class="mb-3">
                <div class="d-flex justify-content-center form-group">
                    <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                    <div class="help-block with-errors"></div>
                </div>
                </div>
                <div class="d-grid justify-content-center">
                <button type="submit" class="tn btn-danger" style="border-radius: 10px; width:400px;">Registrarse</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </body>
</html>

