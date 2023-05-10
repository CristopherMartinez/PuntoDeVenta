<head>
    <style>
        /* .blue .material-symbols-outlined {
            color: blue;
        } */
 
        .blue .material-symbols-outlined {
        font-variation-settings:
        'FILL' 100,
        'wght' 400,
        'GRAD' 0,
        'opsz' 48
        }

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
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
            }

            .image-container:hover .image-description {
            height: 60px;
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


        

        .img1 {
            height: 280px;
            border-radius: 30px;
        }
        * {
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        }

        body {
        background: #2e2a2a;
        color: #FFF;
        font-size: 62.5%;
        font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;
        }

        ul {
        list-style-type: none;
        }

        a {
        color: #e95846;
        text-decoration: none;
        }

        .pricing-table-title {
        text-transform: uppercase;
        font-weight: 700;
        font-size: 2.6em;
        color: #FFF;
        margin-top: 15px;
        text-align: left;
        margin-bottom: 25px;
        text-shadow: 0 1px 1px rgba(0,0,0,0.4);
        }

        .pricing-table-title a {
        font-size: 0.6em;
        }

        .clearfix:after {
        content: '';
        display: block;
        height: 0;
        width: 0;
        clear: both;
        }
        /** ========================
        * Contenedor
        ============================*/
        .pricing-wrapper {
        width: 960px;
        margin: 40px auto 0;
        }

        .pricing-table {
        margin: 0 10px;
        text-align: center;
        width: 300px;
        float: left;
        -webkit-box-shadow: 0 0 15px rgba(0,0,0,0.4);
        box-shadow: 0 0 15px rgba(0,0,0,0.4);
        -webkit-transition: all 0.25s ease;
        -o-transition: all 0.25s ease;
        transition: all 0.25s ease;
        }

        .pricing-table:hover {
        -webkit-transform: scale(1.06);
        -ms-transform: scale(1.06);
        -o-transform: scale(1.06);
        transform: scale(1.06);
        }

        .pricing-title {
        color: #FFF;
        background: #e95846;
        padding: 20px 0;
        font-size: 2em;
        text-transform: uppercase;
        text-shadow: 0 1px 1px rgba(0,0,0,0.4);
        }

        .pricing-table.gold .pricing-title {
        background: #efb810;
        }

        .pricing-table.recommended .pricing-action {
        background: #2db3cb;
        }

        .pricing-table.diamond .pricing-title {
        background: #55afc2;
        }

        .pricing-table .price {
        background: #403e3d;
        font-size: 3.4em;
        font-weight: 700;
        padding: 20px 0;
        text-shadow: 0 1px 1px rgba(0,0,0,0.4);
        }

        .pricing-table .price sup {
        font-size: 0.4em;
        position: relative;
        left: 5px;
        }

        .table-list {
        background: #FFF;
        color: #403d3a;
        }

        .table-list li {
        font-size: 1.4em;
        font-weight: 700;
        padding: 12px 8px;
        }


        .table-list li span {
        font-weight: 400;
        }

        .table-list li:nth-child(2n) {
        background: #F0F0F0;
        }

        .table-buy p {
        float: left;
        color: #37353a;
        font-weight: 700;
        font-size: 2.4em;
        }

        .table-buy p sup {
        font-size: 0.5em;
        position: relative;
        left: 5px;
        }

        .table-buy .pricing-action {
        color: #FFF;
        background: #744A41;
        padding: 10px 16px;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
        font-weight: 700;
        font-size: 1.4em;
        text-shadow: 0 1px 1px rgba(0,0,0,0.4);
        -webkit-transition: all 0.25s ease;
        -o-transition: all 0.25s ease;
        transition: all 0.25s ease;
        }

        .table-buy .pricing-action:hover {
        background: #cf4f3e;
        }

        .recommended .table-buy .pricing-action:hover {
        background: #228799;  
        }

        /** ================
        * Responsive
        ===================*/
        @media only screen and (min-width: 768px) and (max-width: 959px) {
        .pricing-wrapper {
        width: 768px;
        }

        .pricing-table {
        width: 236px;
        }

        .table-list li {
        font-size: 1.3em;
        }

        }

        @media only screen and (max-width: 767px) {
        .pricing-wrapper {
        width: 420px;
        }

        .pricing-table {
        display: block;
        float: none;
        margin: 0 0 20px 0;
        width: 100%;
        }
        }

        @media only screen and (max-width: 479px) {
        .pricing-wrapper {
        width: 300px;
        }
        }


   
        
    </style>
</head>
<body> 
            <div class="col-12 m-auto backgrounFooter" style="padding-top: 15px;">
                <div class="owl-carousel owl-theme">
                           
                    <?php foreach ($videojuegos as $juego) { ?>
                    <div class="item mb-4">
                        <div class="card border-0 shadow">
                            <!--Guardar deseo-->   
                            <form action="<?php echo base_url().'/agregarDeseo'?>" method="POST" style="color: red; padding-left:85%; padding-bottom :10px; text-decoration:none;">
                                <input type="text" id="idVideojuegoDeseo" name="idVideojuegoDeseo" value="<?php echo $juego['idVideojuego'] ?>" hidden>
                                <input type="text" id="nombreDeseo" name="nombreDeseo" value="<?php echo $juego['nombre'] ?>" hidden>
                                <input type="text" id="precioDeseo" name="precioDeseo" value="<?php echo $juego['precio'] ?>" hidden>
                                <input type="text" id="nombreConsolaDeseo" name="nombreConsolaDeseo" value="<?php echo $juego['nombreConsola'] ?>" hidden>    
                                <input type="text" id="imagenDeseo" name="imagenDeseo" value="<?php echo $juego['imagen'] ?>" hidden>    
                                <input type="text" id="descripcionDeseo" name="descripcionDeseo" value="<?php echo $juego['descripcion'] ?>" hidden>    
                                <input type="text" id="imagenDeseo" name="imagenDeseo" value="<?php echo $juego['imagen'] ?>" hidden>    

                                <button type='submit' class='btn btn-link border-0 p-0'>
                                        <span class='material-symbols-outlined'>favorite</span>        
                                </button>


                                <!-- //Checamos que exista en la sesion deseos, si existe checamos dentro del array
                                //si existe el deseo, si existe pintamos el corazon de azul -->
                                <!-- <?php
                                if(isset($_SESSION['deseos'])){

                                        if (array_search($juego['idVideojuego'], $_SESSION['deseos']) !== false) {
                                            echo "true";
                                        }
                                }

                                ?> -->

                            </form>  
   
                            <div class="image-container">        
                                <img class="img1" src="<?php echo base_url()?>/images/<?php echo $juego['imagen']?>" alt="" class="card-img-top" style="padding-top:5px; height:200px;">
                                <div class="image-description"><?php echo $juego['descripcion'] ?></div>
                            </div>       
                            <div class="card-body">
                                <form action="<?php echo base_url().'/agregarAlCarrito'?>" method="POST">
                                    <div class="card-title text-center">
                                        <p style="font-size: 20px; color:#2e2a2a;"><?php echo $juego['nombre'] ?></p>
                                        <!--Id del videojuego oculto(no borrar)-->
                                        <p class="card-text"  style="color:black;" hidden><?php echo $juego['idVideojuego'] ?></p>
                                        <p class="card-text"  style="color:black; font-size: 15px;"><?php echo $juego['nombreConsola'] ?></p>
                                        <input type="text" id="idVideojuego" name="idVideojuego" value="<?php echo $juego['idVideojuego'] ?>" hidden>
                                        <input type="text" id="nombre" name="nombre" value="<?php echo $juego['nombre'] ?>" hidden>
                                        <input type="text" id="precio" name="precio" value="<?php echo $juego['precio'] ?>" hidden>
                                        <input type="text" id="precio" name="nombreConsola" value="<?php echo $juego['nombreConsola'] ?>" hidden>
                                        <input type="text" id="imagen" name="imagen" value="<?php echo $juego['imagen'] ?>" hidden>
                                        <div>
                                            <span><button type="button" class="btn btn-outline-primary" disabled style="color:black; border-color:black; margin-top:10px; font-weight:bolder;">Precio: $<?php echo $juego['precio'] ?></button></span>
                                            <span style="padding-left: 5px;">
                                            <button type="submit" name="Add_To_Cart" class="btn btn-success" style="margin-top:10px;">Agregar al carrito</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>    
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                
                    
                </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
crossorigin="anonymous">
</script>
<script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js
    "></script>
<script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })



        
</script>
<script src=" <?php echo base_url()?>/js/scripts.js"></script>