<head>
        <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
 -->

  <style>
      /* #ver-repite-contrasenia span.material-symbols-outlined {
      color: white;
    }
    #ver-contrasenia span.material-symbols-outlined {
      color: white;
    } */
  </style>
</head>


<body class="imgregister letraGeneral" style="color:whitesmoke">
      <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
            <h2 class="text-center mb-4" style="color:whitesmoke; font-weight:bolder;">REGISTRATE</h2>
            <form id="miFormulario" class="needs-validation" novalidate name="registro" method="POST" action="<?php echo base_url().'/guardar_persona'?>"><!--onsubmit="return validarFormulario()"-->

                <div class="mb-3">
                    <label for="nombre" class="form-label" style="color:whitesmoke; font-weight:bold;">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa tu nombre" 
                          pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" required>
                    <div class="invalid-feedback">
                        Por favor ingresa un nombre válido.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="apellidos" class="form-label" style="color:whitesmoke; font-weight:bold;">Apellidos</label>
                    <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Ingresa tus apellidos" 
                          pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" required>
                    <div class="invalid-feedback">
                        Por favor ingresa apellidos válidos.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="correo" class="form-label" style="color:whitesmoke; font-weight:bold;">Correo electrónico</label>
                    <input type="email" id="correo" name="correo" class="form-control" placeholder="Ingresa tu correo electrónico" required>
                    <div class="invalid-feedback">
                        Por favor ingresa un correo electrónico válido.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="direccion" class="form-label" style="color:whitesmoke; font-weight:bold;">Dirección</label>
                    <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Ingresa tu dirección" 
                          pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s\.\-\#]+" required>
                    <div class="invalid-feedback">
                        Por favor ingresa una dirección válida.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label" style="color:whitesmoke; font-weight:bold;">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Ingresa tu teléfono" 
                          pattern="[0-9]{10}" required>
                    <div class="invalid-feedback">
                        Por favor ingresa un número de teléfono válido de 10 dígitos.
                    </div>
                </div>

                <div class="mb-3">
                  <label for="contrasenia" class="form-label" style="color:whitesmoke; font-weight:bold;">Contraseña</label>
                  <div class="input-group">
                  <input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="********" required>
                  <button type="button" class="btn btn-secondary" id="ver-contrasenia" onclick="togglePasswordVisibility('contrasenia', 'ver-contrasenia')"><span class="material-symbols-outlined">visibility_off</span></button>
                </div>
                    <div class="invalid-feedback">
                        La contraseña debe tener al menos 8 caracteres, incluyendo al menos una letra mayúscula, una letra minúscula y un número.
                    </div>
                </div>

                <div class="mb-3">
                  <label for="contrasenia2" class="form-label" style="color:whitesmoke; font-weight:bold;">Repetir contraseña</label>
                  <div class="input-group">
                  <input type="password" class="form-control" id="contrasenia2" name="contrasenia2" placeholder="********" required>
                <button type="button" class="btn btn-secondary" id="ver-repite-contrasenia" onclick="togglePasswordVisibility('contrasenia2', 'ver-repite-contrasenia')"><span class="material-symbols-outlined">visibility_off</span></button>
                  </div>
                  <div class="invalid-feedback">
                        Las contraseñas no coinciden.
                    </div>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="checkTelefono" name="checkTelefono" required>
                    <label class="form-check-label" for="form2Example3g" style="color:whitesmoke; font-weight:bold;">
                    Estoy de acuerdo con los <a href="#!" class="text-body"><u style="color:blue; text-decoration:none;"> Términos y Condiciones</u></a> 
                    y <a href="#!" class="text-body"><u style="color:blue; text-decoration:none;">Política de privacidad</u></a>
                    <div class="invalid-feedback">
                        Por favor confirma los terminos y condiciones
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-center form-group">
                        <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                        <div class="help-block with-errors"></div>
                </div>

                <div class="d-grid justify-content-center" style="margin-top:10px;">
                <button type="submit" class="tn btn-danger" style="border-radius: 10px; width:400px;" onclick="return validarRecaptcha()">Registrarse</button>
                </div>
            </form>
            </div>
        </div>
      </div>
</body>




<script>
   document.getElementById('miFormulario').addEventListener('submit', function(event) {
        if (!this.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            this.classList.add('was-validated');
        }
    }, false);

    var contrasenia = document.getElementById("contrasenia");
    var confirmarContrasenia = document.getElementById("confirmar-contrasenia");

    function validarContrasenia() {
        if (contrasenia.value != confirmarContrasenia.value) {
            confirmarContrasenia.setCustomValidity("Las contraseñas no coinciden.");
        } else {
            confirmarContrasenia.setCustomValidity("");
        }
    }

    contrasenia.addEventListener("change", validarContrasenia);
    confirmarContrasenia.addEventListener("change", validarContrasenia);

    function validarRecaptcha() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                // El usuario no ha completado el reCAPTCHA
                Swal.fire({
                text: 'Porfavor verifíca el Recaptcha',        
                })
                return false;
            } else {
                // El usuario ha completado el reCAPTCHA
                return true;
            }
            }
            function togglePasswordVisibility(inputId, buttonId) {
      const inputField = document.getElementById(inputId);
      const verContraseniaBtn = document.getElementById(buttonId);

      if (inputField.type === "password") {
        inputField.type = "text";
        verContraseniaBtn.innerHTML = '<span class="material-symbols-outlined">visibility</span>';
      } else {
        inputField.type = "password";
        verContraseniaBtn.innerHTML = '<span class="material-symbols-outlined">visibility_off</span>';
      }
    }

</script>
