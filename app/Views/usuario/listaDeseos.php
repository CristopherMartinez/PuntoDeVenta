
<head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css">
        <script src="https://kit.fontawesome.com/9efa70fc0a.js" crossorigin="anonymous"></script>
</head>

<body class="backgrounFooter">
    <div class="container">
        <br>
        <div class="alert alert-primary" role="alert">
            <h3 style="color:black;">Lista de deseos </h3>
        </div>
        
        <div class="row">
        <?php
            if(isset($_SESSION['deseos'])){
                
                foreach($_SESSION['deseos'] as $value){
                    echo"
                    <div class='col-12 col-md-3 col-sm-6'>
                    <div class='card'>
                    <img src='" . base_url() . "/images/$value[imagen]' class='card-img-top'>
                    <div class='card-body'>
                            <h5 class='card-title' style='color:black;'>$value[nombreDeseo]</h5>
                            <p style='color:black;'>$value[nombreConsolaDeseo]</p>
                            <p style='color:black;'>$$value[precioDeseo]</p>
                          
                           
                            </div>
                        </div>
                    </div>
                    ";
                   
                }
            }else{
                echo"
                <h2 style='color:white;'>No hay Deseos en tu lista de deseos</h2>
                ";
            }          
            ?>
            
        </div>

         
    <br>

    <form method="POST" action="<?php echo base_url().'/eliminarDeseos'?>" enctype="multipart/form-data">
        <button type="submit" class="btn btn-danger">Eliminar Deseos</button>
    </form>
            

    </div>
   
</body>

  <!--Mensaje para eliminar Deseos-->        
  <?php if (session()->has('EliminarDeseos')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: '<?= session('EliminarDeseos') ?>',
                showConfirmButton: false,
                timer: 1800
            });
        </script>
    <?php endif; ?>


  <!--Mensaje para mostrar que no hay deseos para eliminar-->        
  <?php if (session()->has('sinDeseos')): ?>
        <script>
            Swal.fire({
                icon: 'info',
                title: '<?= session('sinDeseos') ?>',
                showConfirmButton: false,
                timer: 1800
            });
        </script>
    <?php endif; ?>
    

