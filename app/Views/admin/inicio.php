<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css">
</head>

<body class="backgrounFooter">

  <!--Mensaje para mostrar reingreso correcto-->
  <?php if (session()->has('reingresoCorrecto')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: '<?= session('reingresoCorrecto') ?>',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
  <?php endif; ?>

  <div class="container mt-4 ">
    <h2 style="color:whitesmoke;">Mi Perfil</h2>
    <div class="card-deck mt-4">
      <div class="card">
        <div class="card-body" style="color:black;">
          <h5 class="card-title"><b>Información Personal</b></h5>
          <p class="card-text">Administrador : <?= session('datosAdministrador')[0]['nombre']; ?></p>
          <p class="card-text">Correo Electrónico: <?= session('datosAdministrador')[0]['correoElectronico']; ?></p>
          <p class="card-text">Teléfono: <?= session('datosAdministrador')[0]['telefono']; ?></p>
        </div>
      </div>
    </div>
  </div>

</body>





