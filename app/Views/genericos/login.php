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
            <h2 class="text-center mb-4" style="color:whitesmoke; font-weight:Bolder;">Inicio de sesión</h2>
            <form method="POST" action="#">
                <div class="mb-3">
                <label for="usuario" class="form-label" style="color:whitesmoke; font-weight:bold;">Nombre de usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
                </div>
                <div class="mb-3">
                <label for="contrasena" class="form-label" style="color:whitesmoke; font-weight:bold;">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                </div>
                <div class="mb-3">
                <div class="d-flex justify-content-center form-group">
                    <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                    <div class="help-block with-errors"></div>
                </div>
                </div>
                <div class="d-grid">
                <button type="submit" class="tn btn-danger" style="border-radius: 10px;">Iniciar sesión</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </body>
</html>

