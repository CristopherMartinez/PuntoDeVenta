<head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css">
        <script src="https://kit.fontawesome.com/9efa70fc0a.js" crossorigin="anonymous"></script>

</head>

<body class="backgrounFooter">
        <div class="container">
                <br>
                <div class="alert alert-primary" role="alert">
                <h3 style="color:black;">Mis videojuegos</h3>
                </div>
                <br>
                <div>
                        <h3 style="color:white;">Puntos acumulados: 20</h3>
                </div>

                <div class="row">
                        <?php
                        //Si esta vacio la lista de videogamesUser
                        if(empty($videogamesUser)){
                                echo"
                                <h2 style='color:white;'>No tienes videojuegos comprados hasta el momento</h2>
                                ";
                        }else{

                                
                                // print_r(json_encode($videogamesUser));
                              
                                foreach($videogamesUser as $value){
                                        echo "
                                        <div class='col-md-4 col-sm-6 col-xs-12'>
                                                <div class='card'>
                                                        <form action='".base_url()."/jugar' method='POST'>
                                                                <div class='image-container'>
                                                                        <img src='".base_url()."/images/$value[imagen]' class='card-img-top' style='height:150px; border-radius:10px;'>
                                                                        
                                                                </div>
                                                                <div class='card-body'>
                                                                        <h5 class='card-title' style='color:black;'>$value[nombreVideojuego]</h5>
                                                                        <p style='color:black;'>$value[consola]</p>
                                                                        <input type='hidden' id='idVideojuego' name='idVideojuego' value='".$value['idVideojuego']."'>
                                                                        <input type='hidden' id='nombre' name='nombre' value='".$value['nombreVideojuego']."'>
                                                                        <input type='hidden' id='precio' name='precio' value='".$value['precio']."'>
                                                                        <input type='hidden' id='nombreConsola' name='nombreConsola' value='".$value['consola']."'>
                                                                        <button type='submit' class='btn btn-danger'>Empezar a jugar</button>
                                                                        
                                                                </div>
                                                        </form>
                                                </div>
                                        </div>";

                                
                                }
                        }

                        ?>
                </div>
        </div>
</body>
