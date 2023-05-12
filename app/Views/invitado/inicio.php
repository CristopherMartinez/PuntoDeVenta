<head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css">

</head>


 <!--Mensaje de sugerencias-->
 <?php if (session()->has('sugerenciaEnviada')): ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: '<?= session('sugerenciaEnviada') ?>',
                    showConfirmButton: false,
                    timer: 1800
                });
            </script>
    <?php endif; ?>