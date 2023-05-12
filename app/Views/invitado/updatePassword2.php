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
                <h2 class="text-center mb-4" style="color:whitesmoke; font-weight:Bolder;">Actualizar Password</h2>
                <form method="POST" action="<?php echo base_url().'/updatePasswordTest'?>" onsubmit="return validarRecaptcha()">
                   
                    <div class="mb-3">
                        <label for="contrasenia1" class="form-label" style="color:whitesmoke; font-weight:bold;">Nueva contraseña</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="contrasenia1" name="contrasenia1" required  autocomplete="current-password">
                            <button class="btn btn-outline-secondary" type="button" id="ver-contrasenia1" onclick="verContraseniaLogin1()"><span class="material-symbols-outlined">visibility_off</span></button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="contrasenia" class="form-label" style="color:whitesmoke; font-weight:bold;">Repite la contraseña</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="contrasenia" name="contrasenia" required  autocomplete="current-password">
                            <button class="btn btn-outline-secondary" type="button" id="ver-contrasenia" onclick="verContraseniaLogin()"><span class="material-symbols-outlined">visibility_off</span></button>
                        </div>
                    </div>

                    <input type="text" class="form-control" id="correoRec" name="correoRec" hidden>

                    <div class="mb-3">
                        <div class="d-flex justify-content-center form-group">
                            <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="d-grid">
                    <button type="submit" class="tn btn-danger" style="border-radius: 10px;" onclick="borrarLocalStorage()">Actualizar password</button>
                    </div>


                </form>
                </div>
            </div>
        </div>

  
      
    </body>

<script>
     

     function verContraseniaLogin1() {
        const verContraseniaBtn1 = document.getElementById('ver-contrasenia1');
        const contraseniaInput1 = document.getElementById('contrasenia1');

        if (contraseniaInput1.getAttribute('type') === 'password') {
            contraseniaInput1.setAttribute('type', 'text');
            verContraseniaBtn1.innerHTML = '<span class="material-symbols-outlined">visibility</span>';
        } else {
            contraseniaInput1.setAttribute('type', 'password');
            verContraseniaBtn1.innerHTML = '<span class="material-symbols-outlined">visibility_off</span>';
        }
    }


    //Asignamos el correo guardado en localstorage
    var correoInput = document.getElementById("correoRec");
    // Get the correoGuardado value from local storage
    var correoGuardado = localStorage.getItem("correo");
    correoInput.value = correoGuardado;

    function borrarLocalStorage(){
        localStorage.removeItem("correo");

        showMessage();
    }

    function showMessage(){
        Swal.fire({
                icon: 'success',
                title: 'Actualización de contraseña',
                text:'Se ha actualizado con exito, inicie sesión nuevamente',
                showConfirmButton: false,
                 timer: 2000
            });
    }


</script>