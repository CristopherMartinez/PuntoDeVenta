
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

<div class="pricing-wrapper clearfix" style="margin-bottom: 30px;">

  <div class="pricing-table">
    <h3 class="pricing-title">Premium</h3>
    <div class="price">$60<sup>/ mes</sup></div>
    <!-- Lista de Caracteristicas / Propiedades -->
    <ul class="table-list">
      <li>Temporadas <span>de videojuegos</span></li>
      <li>Acceso Ilimitado <span>por 3 meses</span></li>
      <li>Gratis 3 <span>videojuegos</span></li>
      <li>15 días <span> de demos espciales</span></li>
      <li>6 Meses <span>de acceso a juegos online</span></li>
    </ul>
    <!-- Contratar / Comprar -->
    <div class="table-buy">
      <a href="SingUp" class="pricing-action">Comprar</a>
    </div>
  </div>

  <div class="pricing-table gold">
    <h3 class="pricing-title">Gold</h3>
    <div class="price">$100<sup>/ mes</sup></div>
    <!-- Lista de Caracteristicas / Propiedades -->
    <ul class="table-list">
      <li>Acceso Ilimitado <span>por 12 meses</span></li>
      <li>Gratis 10 <span>videojuegos</span></li>
      <li>1 Meses <span>de demos especiales</span></li>
      <li>6 Meses <span> de acceso a juegos online</span></li>
      <li>Acceso a preventa especial</li>
    </ul>
    <!-- Contratar / Comprar -->
    <div class="table-buy">
      <a href="SingUp" class="pricing-action">Comprar</a>
    </div>
  </div>

  <div class="pricing-table diamond">
    <h3 class="pricing-title">Diamond</h3>
    <div class="price">$200<sup>/ mes</sup></div>
    <!-- Lista de Caracteristicas / Propiedades -->
    <ul class="table-list">
      <li>Acceso Ilimitado <span>por 15 meses</span></li>
      <li>Gratis 15 <span>videojuegos</span></li>
      <li>12 meses<span> de acceso a juegos online</span></li>
      <li>Soporte <span> personalizado</span></li>
      <li>Acceso a preventa especial</li>
    </ul>
    <!-- Contratar / Comprar -->
    <div class="table-buy">
      <a href="SingUp" class="pricing-action">Comprar</a>
    </div>
  </div>
</div>

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
    