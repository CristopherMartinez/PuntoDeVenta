<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css
    " rel="stylesheet">


    <style>
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
                        <a type="button" class="btnAddDeseo" prod="<?php echo $juego['idVideojuego'] ?>">
                        <span class="material-symbols-outlined" style="color: red; padding-left:85%; padding-bottom :10px;">
                        favorite
                        </span>
                        </a>
                        <img class="img1" src="<?php echo base_url()?>/images/<?php echo $juego['imagen']?>" alt="" class="card-img-top" style="padding-top:5px;">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <p style="font-size: 18px; color:#2e2a2a;"><?php echo $juego['nombre'] ?></p>
                                    <!--Id del videojuego oculto(no borrar)-->
                                    <p class="card-text"  style="color:black;" hidden><?php echo $juego['idVideojuego'] ?></p>
                                    <div>
                                    <span><button type="button" class="btn btn-outline-primary" disabled style="color:black; border-color:black; margin-top:10px; font-weight:bolder;">Precio: $<?php echo $juego['precio'] ?></button></span>
                                    
                                    <!-- <span style="padding-left: 5px;"><a type="button" class="btn btn-outline-success" style="margin-top:10px;" href="SingUp">Agregar al carrito</a></span>
                                     -->
                                     <span style="padding-left: 5px;">
                                      <button type="button" class="btn btn-outline-success" style="margin-top:10px;" onclick="agregarAlCarrito()">Agregar al carrito</button>
                                     </span>

<!-- 
                                    <span style="padding-left: 5px;">
                                      <a type="button" class="btn btn-outline-success" style="margin-top:10px;" href="carrito-de-compras">Agregar al carrito</a>
                                    </span> -->
                                    </div>
                                </div>
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