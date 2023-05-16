<head>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src=" <?php echo base_url()?>/js/scripts.js"></script>    

</head>



<body class="imgregister letraGeneral" style="color:whitesmoke">

<?php if (session()->getFlashdata('mensaje')) : ?>
    <script>
        // Mostrar SweetAlert
        Swal.fire({
            icon: 'success',
            title: '<?= session()->getFlashdata('mensaje') ?>',
            showConfirmButton: true,
            // timer: 1500
        });
    </script>
<?php endif; ?>

<?php if (session()->getFlashdata('doesntExist')) : ?>
    <script>
        // Mostrar SweetAlert
        Swal.fire({
            icon: 'error',
            title: '<?= session()->getFlashdata('doesntExist') ?>',
            showConfirmButton: true,
            // timer: 1500
        });
    </script>
<?php endif; ?>





        <div class="container">
    

            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                <h2 class="text-center mb-4" style="color:whitesmoke; font-weight:Bolder;">Actualizar de contraseña</h2>
                <form method="POST" action="<?php echo base_url().'/enviarCorreoRecuperacion'?>" onsubmit="return validarRecaptcha()">
                   
                    <div class="mb-3">
                        <label for="correo" class="form-label" style="color:whitesmoke; font-weight:bold;">Ingresa tu correo</label>
                            <input type="text" class="form-control" id="correo" name="correo" required >
                    </div>             

                    <div class="mb-3">
                        <div class="d-flex justify-content-center form-group">
                            <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="d-grid">
                    <button type="submit" class="tn btn-danger" style="border-radius: 10px;" onclick="guardarEnLocalStorage()">Enviar correo</button>
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

    function guardarEnLocalStorage(){
        var correo = document.getElementById("correo").value;
        localStorage.setItem("correo", correo); 
    }


</script>