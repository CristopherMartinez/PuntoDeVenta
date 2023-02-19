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
