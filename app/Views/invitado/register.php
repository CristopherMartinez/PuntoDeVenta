
<head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <script>
    function validarFormulario() {
      // Validar número de teléfono
      var telefono = document.forms["registro"]["telefono"].value;
      if (!telefono.match(/^\d{10}$/)) {
        document.getElementById("mensaje-telefono").innerHTML = "Ingrese un número de teléfono válido (10 dígitos)";
        return false;
      }
      
      // Validar contraseña
      var contrasena = document.forms["registro"]["contrasenia"].value;
      if (!contrasena.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/)) {
        document.getElementById("mensaje-contrasena").innerHTML = "La contraseña debe tener al menos 8 caracteres, incluyendo al menos un número, una letra minúscula y una letra mayúscula";
        return false;
      }

      var contraseniarep = document.forms["registro"]["contrasenia2"].value;
      if (contraseniarep !== contrasena) {
        document.getElementById("mensaje-repetir-contrasena").innerHTML = "Las contraseñas no coinciden";
        return false;
      }

      //Validacion correo me falta
      var correo = document.forms["registro"]["correo"].value;
      if (!correo.match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/)) {
        document.getElementById("mensaje-correo").innerHTML = "Ingrese un correo electrónico válido";
        return false;
      }
      var response = grecaptcha.getResponse();
      if (response.length == 0) {
        // El usuario no ha completado el reCAPTCHA
        Swal.fire({
        text: 'Porfavor verifíca el Recaptcha',        
        })
        return false;
      }
      
      var checkbox = document.getElementById("checkbox");
      if (!checkbox.checked) {
        Swal.fire({
        text: 'Debes aceptar los Términos y Condiciones y la Política de privacidad para continuar.',        
        })
        return false;
      }
      return true;

      
    }
  </script>
  <style>
      #ver-repite-contrasenia span.material-symbols-outlined {
      color: white;
    }
    #ver-contrasenia span.material-symbols-outlined {
      color: white;
    }
  </style>

</head>
<body class="imgregister letraGeneral" style="color:whitesmoke">
      <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
            <h2 class="text-center mb-4" style="color:whitesmoke; font-weight:bolder;">REGISTRATE</h2>
            <form name="registro" method="POST" action="<?php echo base_url().'/guardar_persona'?>" onsubmit="return validarFormulario()">

                <div class="mb-3">
                <label for="nombre" class="form-label" style="color:whitesmoke; font-weight:bold;">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa tu nombre" required>
                </div>
                <div class="mb-3">
                <label for="apellidos" class="form-label" style="color:whitesmoke; font-weight:bold;">Apellidos</label>
                <input type="text" id="nombre" name="apellidos" class="form-control" placeholder="Ingresa tus apellidos" required>
                </div>

                <div class="mb-3">
                  <label for="correo" class="form-label" style="color:whitesmoke; font-weight:bold;">Correo electrónico</label>
                  <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo electronico" required>
                  <div id="mensaje-correo" style="color: red;"></div>
                </div>

                <div class="mb-3">
                  <label for="direccion" class="form-label" style="color:whitesmoke; font-weight:bold;">Dirección</label>
                  <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingresa tu dirección" required>
                </div>

                <div class="mb-3">
                  <label for="telefono" class="form-label" style="color:whitesmoke; font-weight:bold;">Número de telefono</label>
                  <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Número de telefono" required>
                  <div id="mensaje-telefono" style="color: red;"></div>
                </div>

                <div class="mb-3">
                  <label for="contrasenia" class="form-label" style="color:whitesmoke; font-weight:bold;">Contraseña</label>
                  <input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="***********" required>
                  <div id="mensaje-contrasena" style="color: red;"></div>
                </div>
 
                <div class="mb-3">
                <label for="repite-contrasenia" class="form-label" style="color:whitesmoke; font-weight:bold;">Repite contraseña</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="repite-contrasenia" name="repite-contrasenia" placeholder="***********" required>
                  <button class="btn btn-outline-secondary" type="button" id="ver-repite-contrasenia"><span class="material-symbols-outlined">
              visibility
              </span></button>
                </div>
              </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="checkbox" name="checkbox"/>
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





 <!-- <!DOCTYPE html>
<html lang="en" class="h-100">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Registro de usuario</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="assets/user/login/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Crear una cuenta</h4>
                                    <form action="<?php echo base_url().'/Registrar'?>" method="post">
                                        <div class="form-group">
                                            <label><strong>Nombre completo</strong></label>
                                            <input type="text" class="form-control"  maxlength="25" onkeypress="return isNumberKey(event)" id="nombre" placeholder="Enter fullname" name="nombre" required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Correo electrónico</strong></label>
                                            <input type="email" class="form-control" maxlength="30" onkeypress="return isNumberKey(event)"  id="correo" placeholder="Enter email" name="correo" required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" maxlength="25" onkeypress="return isNumberKey(event)" id="password" placeholder="Enter password" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Dirección</strong></label>
                                            <input type="text" class="form-control" maxlength="100" onkeypress="return isNumberKey(event)" id="direccion" placeholder="Enter address" name="direccion" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>¿Ya tienes cuenta? <a class="text-primary" href="login">Login</a></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
 
   
</body>

</html> -->

