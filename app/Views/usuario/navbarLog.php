
<nav class="navbar navbar-expand-lg navbar-dark bg-body-tertiary letraNavbar">
        <a class="navbar-brand" href="#" style="padding-left:5px;"><img src="<?php  echo base_url()?>/imagenes/logoWorld.png" class="logoWorld"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll" style="padding-left: 0px;">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="padding-left: 5px;">Nosotros</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="padding-left: 5px;">Membresias</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 5px;">
                    Videojuegos
                  </a>
                  <ul class="dropdown-menu navVideo" style="background-color: #d3d8e0; font-weight:bolder; opacity:.95;">
                    <li><a class="dropdown-item" href="gamesplayStation" style="padding-left: 5px;">PlayStation</a></li>
                    <!-- <li><hr class="dropdown-divider"></li> -->
                    <li><a class="dropdown-item" href="gamesXbox" style="padding-left: 5px;">Xbox</a></li>
                    <!-- <li><hr class="dropdown-divider"></li> -->
                    <li><a class="dropdown-item" href="#" style="padding-left: 5px;">PC</a></li>
                    <!-- <li><hr class="dropdown-divider"></li> -->
                    <li><a class="dropdown-item" href="#" style="padding-left: 5px;">Nintendo</a></li>
                    
                  </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true" style="padding-left: 5px;">Ofertas</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true" style="padding-left: 5px;">Lanzamientos</a>
                </li>  
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="padding-left: 5px;">
                    Mas
                  </a>
                  <ul class="dropdown-menu navVideo" style="background-color: #d3d8e0; font-weight:bolder; opacity:.95;">
                    <li><a class="dropdown-item" href="#" style="padding-left: 5px;">Saldo digital</a></li>
                    <li><a class="dropdown-item" href="#" style="padding-left: 5px;">Monedas virtuales</a></li>
                    <li><a class="dropdown-item" href="#" style="padding-left: 5px;">Regalos</a></li>
                  </ul>
                </li>   
                <a class="nav-link" href="ShoppingCar" style= padding-left:5px;><span class="material-symbols-outlined">
                shopping_cart </span></a>
              </li>           
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" style="padding-left: 5px;">Buscar</button>
            </form>
            <div style="margin-left: 10px;">
            <?php foreach ($datosUsuario as $dato) { ?>
              <div>Usuario: <?php echo $dato['usuario'] ?></div>
              <div>Membresía : <?php echo $dato['nombre'] ?></div>           
                <?php } ?>
            </div>
            <a class="navbar-brand" href="inicio" style="padding-left:5px;"><img src="<?php  echo base_url()?>/imagenes/icons/profileb.png" style="width:40px;"></a>
            
            </div>
</nav>
