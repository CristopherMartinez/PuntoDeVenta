
 <div id="carouselExampleInterval" class="carousel slide carrusel letraCarrusel" data-bs-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1800">
    <img src="<?php  echo base_url()?>/imagenes/zelda.jpg" class="d-block w-100 h-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="carruselTitulos">The Legend of Zelda</h5>
        <p><span class="letrapCarrusel">Sumergete en mundo de aventuras y descubrimientos en Legend of Zelda</span></p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="1800">
    <img src="<?php  echo base_url()?>/imagenes/alice.jpg" class="d-block w-100 h-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="carruselTitulos">Alice Madness Returns</h5>
        <p><span class="letrapCarrusel1">Con su mente por los suelos e incapaz de resolver el miedo impulsado por sus extraños recuerdos.</span></p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="<?php  echo base_url()?>/imagenes/mariokart2.png" class="d-block w-100 h-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="carruselTitulos">Mario Kart 8 Deluxe</h5>
        <p><span class="letrapCarrusel1">Juega con nuevos personajes, podrás elegir una de las 48 pistas!!</span></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div> 

<!--Imagen-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <style>
    .image-container {
      position: relative;
  display: inline-block;
  width: 100%;
    }

    .image-container img {
      display: block;
  width: 100%;
  height:55%;
      
    }

    .image-overlay {
      position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-direction: row;
  padding: 2rem;
  box-sizing: border-box;
    }

    .text-container {
      width: 50%;
    }

    .text-container h2 {
      margin-top: 0;
      font-size: 3em;
    }

    .text-container p {
      font-size: 1.5em;
    }

    .image-overlay button {
      background-color: #008CBA;
      color: #fff;
      border: none;
      padding: 1em 2em;
      font-size: 1.5em;
      cursor: pointer;
      border-radius: 5px;
    }

    @media (max-width: 768px) {
      .text-container h2 {
        font-size: 2em;
      }

      .text-container p {
        font-size: 1em;
      }

      .image-overlay button {
        padding: 0.5em 1em;
        font-size: 1em;
      }

      .text-container {
        width: 50%;
      }

     

      .image-overlay button,
      .text-container {
        margin-top: 1em;
        margin-bottom: 1em;
        /* background-color: red; */
      }
    }

    @media (min-width: 769px) {
      .image-container {
        flex-wrap: nowrap;
      }

      .text-container {
        width: 50%;
       
        
       
      }

      

      .TituloWorld{
        font-size: 50px;
      
       
      }
      .letraWorld{
        font-size: 40px;
      }
    }
  </style>
</head>

<body>
  <div class="image-container">
      <img src="<?php echo base_url()?>/imagenes/promocio1.jpg" alt="Descripción de la imagen">
      <div class="image-overlay">

      </div>
    </div>
  </div>
