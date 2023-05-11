<head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css">

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

        </style>
</head> 
<body> 
            <div class="col-12 m-auto backgrounFooter" style="padding-top: 15px;">
                <div class="owl-carousel owl-theme">
            
                  
                    <?php foreach ($videojuegos as $juego) { ?>
                    <div class="item mb-4">
                        <div class="card border-0 shadow">
                            <!-- <a type="button" class="btnAddDeseo" prod="<?php echo $juego['idVideojuego'] ?>">
                            <span class="material-symbols-outlined" style="color: red; padding-left:85%; padding-bottom :10px;">
                            favorite
                            </span>
                            </a> -->
                            <!-- <button type='submit' class='btn btn-link border-0 p-0'>
                                        <span class='material-symbols-outlined'>favorite</span>        
                            </button> -->
                            <div style="color: red; padding-left:85%; padding-bottom :10px; text-decoration:none;">
                                <button type='submit' class='btn btn-link border-0 p-0' onclick="mostrarMensaje()">
                                        <span class='material-symbols-outlined'>favorite</span>        
                                </button>
                            </div>  

                            <div class="image-container">        
                                <img class="img1" src="<?php echo base_url()?>/images/<?php echo $juego['imagen']?>" alt="" class="card-img-top" style="padding-top:5px; height:200px;">
                                <div class="image-description"><?php echo $juego['descripcion'] ?></div>
                            </div>    
                            <div class="card-body">
                                    <div class="card-title text-center">
                                        <p style="font-size: 20px; color:#2e2a2a;"><?php echo $juego['nombre'] ?></p>
                                        <!--Id del videojuego oculto(no borrar)-->
                                        <p class="card-text"  style="color:black;" hidden><?php echo $juego['idVideojuego'] ?></p>
                                        <p class="card-text"  style="color:black; font-size: 15px;"><?php echo $juego['nombreConsola'] ?></p>
                                        <input type="text" id="idVideojuego" name="idVideojuego" value="<?php echo $juego['idVideojuego'] ?>" hidden>
                                        <input type="text" id="nombre" name="nombre" value="<?php echo $juego['nombre'] ?>" hidden>
                                        <input type="text" id="precio" name="precio" value="<?php echo $juego['precio'] ?>" hidden>
                                        <input type="text" id="precio" name="nombreConsola" value="<?php echo $juego['nombreConsola'] ?>" hidden>
                                        <div>
                                        <span><button type="button" class="btn btn-outline-primary" disabled style="color:black; border-color:black; margin-top:10px; font-weight:bolder;">Precio: $<?php echo $juego['precio'] ?></button></span>
                                        <span style="padding-left: 5px;">
                                        <!-- <button  class="btn btn-success" style="margin-top:10px;">Agregar al carrito</button> -->
                                        <button  class="btn btn-success" style="margin-top:10px;" onclick="mostrarMensaje()">Agregar al carrito</button>
                                        </span>
                                        </div>
                                    </div>
                                   
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                
                    
                </div>            
</body>


<!-- <div class="pricing-wrapper clearfix" style="margin-bottom: 30px;">

  <div class="pricing-table">
    <h3 class="pricing-title">Premium</h3>
    <div class="price">$60<sup>/ mes</sup></div>
    <ul class="table-list">
      <li>Temporadas <span>de videojuegos</span></li>
      <li>Acceso Ilimitado <span>por 3 meses</span></li>
      <li>Gratis 3 <span>videojuegos</span></li>
      <li>15 días <span> de demos espciales</span></li>
      <li>6 Meses <span>de acceso a juegos online</span></li>
    </ul>
    <div class="table-buy">
      <a href="SingUp" class="pricing-action">Comprar</a>
    </div>
  </div>

  <div class="pricing-table gold">
    <h3 class="pricing-title">Gold</h3>
    <div class="price">$100<sup>/ mes</sup></div>
    <ul class="table-list">
      <li>Acceso Ilimitado <span>por 12 meses</span></li>
      <li>Gratis 10 <span>videojuegos</span></li>
      <li>1 Meses <span>de demos especiales</span></li>
      <li>6 Meses <span> de acceso a juegos online</span></li>
      <li>Acceso a preventa especial</li>
    </ul>
    <div class="table-buy">
      <a href="SingUp" class="pricing-action">Comprar</a>
    </div>
  </div>

  <div class="pricing-table diamond">
    <h3 class="pricing-title">Diamond</h3>
    <div class="price">$200<sup>/ mes</sup></div>
    <ul class="table-list">
      <li>Acceso Ilimitado <span>por 15 meses</span></li>
      <li>Gratis 15 <span>videojuegos</span></li>
      <li>12 meses<span> de acceso a juegos online</span></li>
      <li>Soporte <span> personalizado</span></li>
      <li>Acceso a preventa especial</li>
    </ul>
    <div class="table-buy">
      <a href="SingUp" class="pricing-action">Comprar</a>
    </div>
  </div>
</div> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
crossorigin="anonymous"></script>
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

<script>
  function agregarAlCarrito() {
  //Realizar la verificación de sesión en PHP
  <?php
  $this->session = \Config\Services::session();

  // Verificar si la sesión está iniciada
  if (!$this->session->get('logged_in')) {
      // return "window.location.href='/SingUp'";
     
  }
  ?>
  console.log("Presionando");
  //  print_r("Si esta esta iniciada");
  // Si la sesión está iniciada, realizar la acción de agregar al carrito
  // window.location.href='/carrito-de-compras';
  
}
</script>
<script src=" <?php echo base_url()?>/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>
<script>
    function mostrarMensaje(){
        Swal.fire({  
        icon: 'info',
        title: '¿Aun no estas registrado?',
        showConfirmButton:true,
        // html: '<button class="btn btn-primary">Registrate</button>'
        confirmButtonText: '<a href="SingUp" style="text-decoration:none; color:#454746; font-weight:700;">Registrate</a>',
        })   
    }
</script>