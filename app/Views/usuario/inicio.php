
    <?php if (session()->has('success')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: '<?= session('success') ?>',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php endif; ?>
            
    <?php if (session()->has('error')): ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: '<?= session('error') ?>',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php endif; ?>

    <!--Mensaje para mostrar que ya se cuenta con membresia-->
    <?php if (session()->has('CuentasConMembresia')): ?>
        <script>
            Swal.fire({
                icon: 'info',
                title: '<?= session('CuentasConMembresia') ?>',
                showConfirmButton: false,
                timer: 1800
            });
        </script>
    <?php endif; ?>

    <!--Mensaje para mostrar que ya se actualizo la membresia-->
    <?php if (session()->has('MembresiaActualizada')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: '<?= session('MembresiaActualizada') ?>',
                showConfirmButton: false,
                 timer: 2000
                // timer : false,
                
            });
        </script>
    <?php endif; ?>

    <!--Mensaje para mostrar que el usuario se registro exitosamente-->
    <?php if (session()->has('registroExitoso')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: '<?= session('registroExitoso') ?>',
                showConfirmButton: true,
                // timer: 1500
            });
        </script>
    <?php endif; ?>

    <!--Mensaje para mostrar que fallo el envio de correo-->
    <?php if (session()->has('falloEnvioCorreo')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: '<?= session('falloEnvioCorreo') ?>',
                showConfirmButton: true,
                // timer: 1500
            });
        </script>
    <?php endif; ?>

     <!--Mensaje para mostrar que se agrego a lista de deseos-->
     <?php if (session()->has('agregadoDeseos')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: '<?= session('agregadoDeseos') ?>',
                showConfirmButton: false,
                timer: 1800
            });
        </script>
    <?php endif; ?>

    <!--Mensaje para mostrar que ya esta en la lista de Deseos-->
    <?php if (session()->has('yaEstaEnListaDeseos')): ?>
        <script>
            Swal.fire({
                icon: 'info',
                title: '<?= session('yaEstaEnListaDeseos') ?>',
                showConfirmButton: false,
                timer: 1800
            });
        </script>
    <?php endif; ?>

    <!--Mensaje de ingreso correcto-->
    <?php if (session()->has('ingresoCorrecto')): ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: '<?= session('ingresoCorrecto') ?>',
                    showConfirmButton: false,
                    timer: 1800
                });
            </script>
    <?php endif; ?>







    

    

