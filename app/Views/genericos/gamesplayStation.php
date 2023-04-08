<style>
    .list:hover{
    background-color:#c3c3c3;
    list-style:none;
    padding-left: 10px;
    cursor: hand;
  }
  .backgroundGamesPlay{
    background-image: url("<?php  echo base_url()?>/imagenes/fondoPlay8.png");
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>

<div class="backgrounFooter">
    <div class="container " style="padding-top: 30px; padding-bottom:30px;">
    <div class="row" style="background-color: #a2aab8;">
        <div class="col-xl-3 col-sm-12" style="background-color:transparent;">
            <div class="row">
                <br>
                <div class="col-xl-12" style="background-color: transparent; margin-top:30px;">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit" style="padding-left: 5px;">Buscar</button>
                    </form>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Play Station 3
                            </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <li class="list"><a href="#" style="text-decoration:none; margin-top:0px; color: black;">Acción</a></li>
                                <li class="list"><a href="#" style="text-decoration:none; margin-top:0px; color: black;">Deportivos</a></li>
                                <li class="list"><a href="#" style="text-decoration:none; margin-top:0px; color: black;">Suspenso</a></li>
                                <li class="list"><a href="#" style="text-decoration:none; margin-top:0px; color: black;">Terror</a></li>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Play Station 4
                            </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <li class="list"><a href="#" style="text-decoration:none; margin-top:0px; color: black;">Acción</a></li>
                                    <li class="list"><a href="#" style="text-decoration:none; margin-top:0px; color: black;">Deportivos</a></li>
                                    <li class="list"><a href="#" style="text-decoration:none; margin-top:0px; color: black;">Suspenso</a></li>
                                    <li class="list"><a href="#" style="text-decoration:none; margin-top:0px; color: black;">Terror</a></li>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Play Station 5
                            </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <li class="list"><a href="#" style="text-decoration:none; margin-top:0px; color: black;">Acción</a></li>
                                    <li class="list"><a href="#" style="text-decoration:none; margin-top:0px; color: black;">Deportivos</a></li>
                                    <li class="list"><a href="#" style="text-decoration:none; margin-top:0px; color: black;">Suspenso</a></li>
                                    <li class="list"><a href="#" style="text-decoration:none; margin-top:0px; color: black;">Terror</a></li>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <div class="col-xl-9 col-sm-12"  style="background-color: transparent; ">
            <div class="row">
                <?php foreach ($videojuegos as $juego) { ?>
                    <div class="col-12" style="margin-top: 10px;">
                        <div class="card mb-3 backgroundGamesPlay" style="max-width: auto; border-radius:5px;">
                            <div class="row g-0">
                                <div class="col-md-4 align-self-center">
                                    <img src="<?php echo base_url()?>/imagenes/<?php echo $juego['imagen']?>" class="img-fluid rounded-start" style="border-radius: 5px;" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:whitesmoke;"><?php echo $juego['nombre'] ?></h5>
                                        <p class="card-text"  style="color:whitesmoke;"><?php echo $juego['descripcion'] ?></p>
                                        <p class="card-text">
                                           
                                            <span class="col-12 col-sm-12 col-xl-4"><button type="button" class="btn btn-outline-primary" disabled style="color:whitesmoke; border-color:whitesmoke; margin-top:10px; font-weight:bolder;">Precio: $<?php echo $juego['precio'] ?></button></span>
                                            <span class="col-6 col-sm-6 col-xl-4"><button type="button" class="btn btn-outline-primary" style="margin-top:10px; margin-left:5px; font-weight:bolder;">Comprar</button></span>
                                            <span class="col-6 col-sm-6 col-xl-4" style="padding-left: 5px;"><button type="button" class="btn btn-outline-success" style="margin-top:10px; font-weight:bolder;">Agregar al carrito</button></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>










