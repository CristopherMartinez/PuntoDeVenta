
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
                    <div class='col-md-4 col-sm-6 col-xs-12'>
                        <div class='card'>
                            <img src='" . base_url() . "/images/$value[imagen]' class='card-img-top' style='height:150px; border-radius: 10px;'>
                            <div class='card-body'>
                                <h5 class='card-title' style='color:black;'>$value[nombreDeseo]</h5>
                                <p style='color:black;'>$value[nombreConsolaDeseo]</p>
                                <div>
                                            
                                            <span><button type='button' class='btn btn-outline-primary' disabled style='color:black; border-color:black; margin-top:10px; font-weight:bolder; '>Precio: $$value[precioDeseo]</button></span>
                                            <span style='padding-left: 5px;'>
                                            <button type='submit' name='Add_To_Cart' class='btn btn-success' style='margin-top:10px; '>Agregar al carrito</button>
                                            </span>
                                         
                                </div>
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
