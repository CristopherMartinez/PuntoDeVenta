<head>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src=" <?php echo base_url()?>/js/scripts.js"></script>    

</head>

    <body class="imgregister letraGeneral" style="color:whitesmoke">
        <div class="container">
    

            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                <h2 class="text-center mb-4" style="color:whitesmoke; font-weight:Bolder;">Inicio de sesión</h2>
                <form method="POST" action="<?php echo base_url().'/verificar_login'?>" onsubmit="return validarRecaptcha()">
                    <div class="mb-3">
                    <label for="correo" class="form-label" style="color:whitesmoke; font-weight:bold;">Correo electrónico</label>
                    <input type="text" class="form-control" id="correo" name="correo" required>
                    </div>
                    <div class="mb-3">
                    <label for="contrasenia" class="form-label" style="color:whitesmoke; font-weight:bold;">Contraseña</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="contrasenia" name="contrasenia" required  autocomplete="current-password">
                        <button class="btn btn-outline-secondary" type="button" id="ver-contrasenia" onclick="verContraseniaLogin()"><span class="material-symbols-outlined">visibility_off</span></button>
                    </div>
                    </div>
                    <div class="form-check d-flex justify-content-center mb-3">
                    <label class="form-check-label" for="form2Example3g" style="color:whitesmoke; font-weight:bold;">
                        ¿Olvidaste tu contraseña? <a href="#!" class="text-body"><u style="color:blue; text-decoration:none;">Restablecer contraseña</u></a> 
                    </label>
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

  
        <!--Mensaje de ingreso fallido-->
        <?php if (session()->has('ingresoFallido')): ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: '<?= session('ingresoFallido') ?>',
                    showConfirmButton: true,
                    // timer: 1500
                });
            </script>
        <?php endif; ?>

        <!--Mensaje de ingreso correcto-->
        <?php if (session()->has('userNoEncontrado')): ?>
            <script>
                Swal.fire({
                    icon: 'info',
                    title: '<?= session('userNoEncontrado') ?>',
                    showConfirmButton: true,
                    // timer: 1500
                });
            </script>
        <?php endif; ?>


    </body>

