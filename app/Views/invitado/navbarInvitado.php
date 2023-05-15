
<!--Navbar invitado-->
<nav class="navbar navbar-expand-lg navbar-dark bg-body-tertiary letraNavbar">
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
                    <li><a class="dropdown-item" href="gamesplayStation" style="padding-left: 5px;">PlayStation</a></li>
                    <!-- <li><hr class="dropdown-divider"></li> -->
                    <li><a class="dropdown-item" href="gamesXbox" style="padding-left: 5px;">Xbox</a></li>
                    <!-- <li><hr class="dropdown-divider"></li> -->
                    <!-- <li><a class="dropdown-item" href="#" style="padding-left: 5px;">PC</a></li> -->
                    <!-- <li><hr class="dropdown-divider"></li> -->
                    <li><a class="dropdown-item" href="gamesNintendo" style="padding-left: 5px;">Nintendo</a></li>
                    
                  </ul>
                </li>
                <!-- <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true" style="padding-left: 5px;">Ofertas</a>
                </li> -->
                <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true" style="padding-left: 5px;">Lanzamientos</a>
                </li>  
                <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="padding-left: 5px;">
                    Mas
                  </a>
                  <ul class="dropdown-menu navVideo" style="background-color: transparent; font-weight:bolder; opacity:.95;">
                    <li><a class="dropdown-item" href="#" style="padding-left: 5px;">Ofertas</a></li>
                    <li><a class="dropdown-item" href="#" style="padding-left: 5px;">Saldo digital</a></li>
                    
                  </ul>
                </li>               -->
            </ul>
            <!-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" style="padding-left: 5px;">Buscar</button>
            </form> -->
            <ul class="navbar-nav ms-auto me-5 my-2 my-lg-0 navbar-nav-scroll letraNavbar" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url()?>/SingUp" style="font-size:smaller; padding-left:5px;"><span> </span><span>Registrate</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login" style="font-size:smaller; padding-left:5px;"><span><!--<img src="<?php echo base_url()?>/imagenes/icons/inicioSesion.png" style="width:25px;">--> </span><span>Iniciar Sesión</span></a>
                </li>
            </ul>   

            </div>

        
</nav>
