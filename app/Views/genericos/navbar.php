<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <a class="navbar-brand" href="#" style="padding-left:10px;"><img src="<?php  echo base_url()?>/imagenes/logoWorld.png" class="logoWorld"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"> <img src="<?php  echo base_url()?>/imagenes/icons/menu3.png" style="width:30px"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll letraNavbar" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Membresias</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Videojuegos
          </a>
          <ul class="dropdown-menu navVideo" style="background-color: transparent; font-weight:500">
            <li><a class="dropdown-item" href="#">PlayStation</a></li>
            <li><a class="dropdown-item" href="#">Xbox</a></li>
            <li><a class="dropdown-item" href="#">PC</a></li>
            <li><a class="dropdown-item" href="#">Nintendo</a></li>
            <!-- <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ofertas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Lanzamientos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mas
          </a>
          <ul class="dropdown-menu navVideo" style="background-color: transparent; font-weight:500">
            <li><a class="dropdown-item" href="#">Saldo digital</a></li>
            <li><a class="dropdown-item" href="#">Monedas virtuales</a></li>
            <li><a class="dropdown-item" href="#">Regalos</a></li>
            <li><a class="dropdown-item" href="#">etc</a></li>
            <!-- <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="BUSCAR" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll letraNavbar" style="--bs-scroll-height: 100px;">
       <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="font-size:smaller;">Registrarte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="font-size:smaller;">Inicia Sesión</a>
        </li>
      </ul>
      <!-- <div style="margin-left: 15px; color:blanchedalmond"><a href="#" style="text-decoration: none; color:aliceblue">Registrarse</a></div>
      <div style="margin-left: 15px; color:blanchedalmond"><a href="#" style="text-decoration: none; color:aliceblue">Iniciar Sesion</a></div> -->

    </div>
</nav>
