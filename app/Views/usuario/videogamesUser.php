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
                        <h3 style="color:white;">Puntos acumulados: <?php echo $puntos[0]['puntos']?></h3>
                </div>

                <div class="row">
                        <?php
                        //Si esta vacio la lista de videogamesUser
                        if(empty($videogamesUser)){
                                echo"
                                <h2 style='color:white;'>No tienes videojuegos comprados hasta el momento</h2>
                                ";
                        }else{


                                foreach($videogamesUser as $value){
                                        echo "
                                        <div class='col-md-4 col-sm-6 col-xs-12'>
                                                <div class='card'>
                                                        
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
                                                                        <button type='button' class='btn btn-danger' onclick=\"openVideoGameModal('$value[nombreVideojuego]')\">Empezar a jugar</button>

                                                                </div>
                                                    
                                                </div>
                                        </div>";

                                
                                }
                                
                        }

                        ?>
                </div>
        </div>

</body>


<script>
        // function openVideo(){
        //         Swal.fire({
        //         html: '<iframe width="100%" height="315" src="https://www.youtube.com/embed/T9s0hLDUCu8?start=14&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        //         showCloseButton: true,
        //         showConfirmButton: false,
        //         focusConfirm: false,
        //         customClass: {
        //         container: 'swal-modal-container',
        //         popup: 'swal-modal-popup',
        //         content: 'swal-modal-content',
        //         closeButton: 'swal-modal-close-button'
        //         }
        //         });

        // }

        //Funcion que pasa como parametro el nombre del videojuego y busca de acuerdo al nombre un video relacionado 
        function openVideoGameModal(videoGameName) {
        // Obtener los videos relacionados con el nombre del videojuego
        fetch(`https://www.googleapis.com/youtube/v3/search?part=snippet&q=${videoGameName}%20demo&key=AIzaSyBNMMkshJUU6ZVexEcDLIFAS9-ZfN3udNE&type=video`)
        .then(response => response.json())
        .then(data => {
        // Obtener el primer video de la lista de resultados
        const videoId = data.items[0].id.videoId;
        // Abrir el modal con el video incrustado
        Swal.fire({
                html: `<iframe width="100%" height="315" src="https://www.youtube.com/embed/${videoId}?start=14&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`,
                showCloseButton: true,
                showConfirmButton: false,
                focusConfirm: false,
                customClass: {
                container: 'swal-modal-container',
                popup: 'swal-modal-popup',
                content: 'swal-modal-content',
                closeButton: 'swal-modal-close-button'
                }
        });
        })
        .catch(error => {
        console.error(error);
        // Mostrar un mensaje de error si ocurre un problema al buscar videos
        Swal.fire({
                icon: 'error',
                title: 'Error al buscar videos',
                text: 'Ha ocurrido un problema al buscar videos relacionados con el videojuego.'
        });
        });
        }

     

</script>
