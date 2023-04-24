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
            
            </div>
        </div>

        

        <div class="col-xl-9 col-sm-12"  style="background-color: transparent; ">
            <div class="row">
                <?php foreach ($videojuegos as $juego) { ?>
                    <div class="col-12" style="margin-top: 10px;">
                        <div class="card mb-3 backgroundGamesPlay" style="max-width: auto; border-radius:5px;">
                            <div class="row g-0">
                                <div class="col-md-4 align-self-center">
                                    <img src="<?php echo base_url()?>/images/<?php echo $juego['imagen']?>" class="img-fluid rounded-start" style="border-radius: 5px;" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:whitesmoke;"><?php echo $juego['nombre'] ?></h5>
                                        <p class="card-text"  style="color:whitesmoke;"><?php echo $juego['descripcion'] ?></p>
                                        <p class="card-text">
                                           
                                            <span class="col-12 col-sm-12 col-xl-4"><button type="button" class="btn btn-outline-primary" disabled style="color:whitesmoke; border-color:whitesmoke; margin-top:10px; font-weight:bolder;">Precio: $<?php echo $juego['precio'] ?></button></span>
                                            <!-- <span class="col-6 col-sm-6 col-xl-4"><button type="button" class="btn btn-outline-primary" style="margin-top:10px; margin-left:5px; font-weight:bolder;">Comprar</button></span> -->
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










