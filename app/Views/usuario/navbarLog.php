
<?php
session_start();

?>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<!-- 
<script src=" <?php echo base_url()?>/js/scripts.js"></script> -->

<style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}


</style>
</head>
<!-- <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Mi sitio web</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-dark bg-body-tertiary letraNavbar ">
        <a class="navbar-brand" href="inicio" style="padding-left:5px;"><img src="<?php  echo base_url()?>/imagenes/logoWorld.png" class="logoWorld"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll" style="padding-left: 0px;">
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#" style="padding-left: 5px;">Nosotros</a>
                  </li>
                  <!-- <li class="nav-item">
                  <a class="nav-link" href="#" style="padding-left: 5px;">Membresias</a>
                  </li> -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 5px;">
                      Videojuegos
                    </a>
                    <ul class="dropdown-menu navVideo" style="background-color: transparent; font-weight:bolder; opacity:.95;">
                      <li><a class="dropdown-item" href="gamesPlayStation" style="padding-left: 5px;">PlayStation</a></li>
                      <!-- <li><hr class="dropdown-divider"></li> -->
                      <li><a class="dropdown-item" href="gamesXbox" style="padding-left: 5px;">Xbox</a></li>
                      <!-- <li><hr class="dropdown-divider"></li> -->
                      <!-- <li><hr class="dropdown-divider"></li> -->
                      <li><a class="dropdown-item" href="#" style="padding-left: 5px;">Nintendo</a></li>
                      
                    </ul>
                  </li>
                  <!-- <li class="nav-item">
                  <a class="nav-link" href="#" tabindex="-1" aria-disabled="true" style="padding-left: 5px;">Ofertas</a>
                  </li> -->
                  <li class="nav-item">
                  <a class="nav-link" href="#" tabindex="-1" aria-disabled="true" style="padding-left: 5px;">Lanzamientos</a>
                  </li>  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="padding-left: 5px;">
                      Mas
                    </a>
                    <ul class="dropdown-menu navVideo" style="background-color: transparent; font-weight:bolder; opacity:.95;">
                      <li><a class="dropdown-item" href="#" style="padding-left: 5px;">Saldo digital</a></li>
                      <li><a class="dropdown-item" href="#" style="padding-left: 5px;">Ofertas</a></li>
                      <li><a class="dropdown-item" href="#" style="padding-left: 5px;">Mis juegos</a></li>
                    </ul>
                  </li>   
                </li>           
              </ul>
           
                  
              <a class="nav-link" href="listaCarrito" style="padding-left: 5px;">  
                  <?php
                      $count = 0;
                      if(isset($_SESSION['cart'])){
                        $count = count($_SESSION['cart']);
                      }
                  ?>
                  <span class="material-symbols-outlined">
                      shopping_cart 
                  </span>
                  <span><?php echo $count;?></span> 
              </a>


                <a class="nav-link" href="listaDeseos" style="position: relative; padding-left: 5px;" type="button">
                        <span class="material-symbols-outlined">
                          favorite
                          <span id="btnCantidadDeseo" style="font-size:13px; position: absolute; top: -5px; right: -5px; background-color: transparent; color: white; border-radius: 50%; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center;">
                            0
                          </span>
                        </span>
                </a>
             
            
                 
            
                 <!-- <a class="navbar-brand" href="inicio" style="padding-left:0px; margin-left:0px;"><img src="<?php  echo base_url()?>/imagenes/icons/profileb.png" style="width:40px;"></a> -->
                 <!-- Agregar este botón a la vista -->
                 <span style="color: white; padding-left:10px;">Membresía: <?= session('datosUsuario')[0]['nombre']; ?></span>
                 <a  class="nav-link active" aria-current="page" style="padding-left:10px; margin-left:0px;">
                 <!--Validamos dependiendo del nombre mostrar la img de membresia-->
                 <?php
                  if(session('datosUsuario')[0]['nombre'] == 'PREMIUM'){
                    echo "<img src='".base_url()."/imagenes/icons/membresiaPremium.png' style='width:40px;'>";
                  }
                  elseif(session('datosUsuario')[0]['nombre'] == 'GOLD'){
                    echo "<img src='".base_url()."/imagenes/icons/membresiaGold.png' style='width:40px;'>";
                  }
                  elseif(session('datosUsuario')[0]['nombre'] == 'DIAMONT'){
                    echo "<img src='".base_url()."/imagenes/icons/membresiaDiamont.png' style='width:40px;'>";
                  }
                 ?>
                </a>
                 
                 <span style="color: white; font-size: 12px; margin-right: 2px; padding-left:6px;">
                    <?= session('datosUsuario')[0]['usuario']; ?>
                  </span>
                  <span class="material-symbols-outlined">
                    person
                  </span>       
                  <a href="<?php echo base_url().'/cerrarSesion'?>" class="btn btn-primary" style="display: flex; align-items: center; margin-left:4px; margin-right:3px;">
                  Cerrar Sesión
                  </a>
                  
              
                


          </div>
</nav>


