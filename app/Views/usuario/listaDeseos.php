
<head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css">
        <script src="https://kit.fontawesome.com/9efa70fc0a.js" crossorigin="anonymous"></script>

        <style>
            .image-container {
            position: relative;
            display: inline-block;
            }

            .image-description {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            overflow: hidden;
            transition: height 0.5s;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            }

            .image-container:hover .image-description {
            height: 50px;
            
            }

            .image-description::before {
            content: "";
            position: absolute;
            top: -10px;
            left: 50%;
            margin-left: -10px;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            border-right: 10px solid rgba(0, 0, 0, 0.7);
            
            }

        </style>
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
                        echo "
                        <div class='col-md-4 col-sm-6 col-xs-12'>
                            <div class='card'>
                                <form action='".base_url()."/agregarAlCarritoDesdeDeseos' method='POST'>
                                    <div class='image-container'>
                                        <img src='".base_url()."/images/$value[imagen]' class='card-img-top' style='height:150px; border-radius:10px;'>
                                        <div class='image-description'>$value[descripcion]</div>
                                    </div>
                                    <div class='card-body'>
                                        <h5 class='card-title' style='color:black;'>$value[nombreDeseo]</h5>
                                        <p style='color:black;'>$value[nombreConsolaDeseo]</p>
                                        <input type='hidden' id='idVideojuego' name='idVideojuego' value='".$value['idVideojuegoDeseo']."'>
                                        <input type='hidden' id='nombre' name='nombre' value='".$value['nombreDeseo']."'>
                                        <input type='hidden' id='precio' name='precio' value='".$value['precioDeseo']."'>
                                        <input type='hidden' id='nombreConsola' name='nombreConsola' value='".$value['nombreConsolaDeseo']."'>
                                        <input type='hidden' id='imagen' name='imagen' value='".$value['imagen']."'>
                                       
                                        <div>
                                            <span>
                                                <button type='button' class='btn btn-outline-primary' disabled style='color:black; border-color:black; margin-top:10px; font-weight:bolder;'>Precio: $$value[precioDeseo]</button>
                                            </span>
                                            <span style='padding-left: 5px;'>
                                                <button type='submit' name='Add_To_Cart' class='btn btn-success' style='margin-top:10px;'>Agregar al carrito</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>";

                
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

    <br>
<!-- 
    <div class="image-container">
        <img src="<?php  echo base_url()?>/imagenes/logoWorld.png" alt="Imagen" />
        <div class="image-description">Breve descripción</div>
    </div> -->


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
    

