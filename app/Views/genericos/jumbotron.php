<!-- <div class="jumbotron text-center">

  <div class="titleWorld">WORLD GAMES</div> 
  <div>Un nuevo mundo de juegos espera por ti!!</div> 
  <button style="margin-top: 70px; border-radius:10px; color:purple; border-color:purple; font-weight:700;">Your Turn</button>
</div> -->

<!-- <div class="imgInicio">
    <div class="content-container row">
      <div class="col titleWorld">WORLD GAMES</div>
      <div class="w-100"></div>
      <div class="col subtitleWorld">Un nuevo mundo de juegos espera por ti!!</div>
      <div class="w-100"></div>
      <a class="nav-link" href="register" style="font-size:smaller;"><button class="buttonWorld" style="font-weight: bolder; font-size:20px;">Your Turn</button></a>
    </div>
</div> -->


<!-- <div class=" imgInicio">
<div class="titleWorld">WORLD GAMES</div>
</div> -->

<!-- <html>
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
  height: auto;
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
  background-color: rgba(0,0,0,0.5);
  color: #fff;
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
    width: 100%;
  }
  
  .image-overlay {
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
    background-color: #fff;
    color: #000;
    padding: 1rem;
  }
  
  .image-overlay button, .text-container {
    margin-top: 1em;
    margin-bottom: 1em;
  }
  
}
</style>
</head>
<div class="image-container">
  <img src="<?php  echo base_url()?>/imagenes/fondoInicio1.jpeg" alt="Descripción de la imagen">
  <div class="image-overlay">
  <div class="text-container">
    <h2>World Games</h2>
    <p>¡¡¡¡Juegos desde un 50% de descuento en tu primera compra para PC,<br>
         Nintendo, Xbox, PS3 y más soló en World Games<br>
        Regístrate aquí, esta es tu oportunidad!!!!
    </p>

    <button type="button">Your turn</button>
  </div>
</div>
</div> -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <style>
    .image-container {
      position: relative;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      width: 100%;
    }

    .image-container img {
      display: block;
      max-width: 100%;
      height: 50%;
      
    }

    .image-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      padding: 2rem;
      box-sizing: border-box;
      background-color: rgba(0, 0, 0, 0.5);
      color: #fff;
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
        width: 100%;
      }

      .image-overlay {
        position: static;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        background-repeat: none;
        background-size: cover;
        /* background-color: #fff; */
        /* color: #000; */
        /* padding: 1rem; */
        background-image: url("<?php  echo base_url()?>/imagenes/fondo11.jpeg");
       
        
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
        color: whitesmoke;
        
       
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
        background-color: rgba(0, 0, 0, 0.5);
        /* background-color: red; */
        
        color: #fff;
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
    <img src="<?php echo base_url()?>/imagenes/ds.png" alt="Descripción de la imagen">
    <div class="image-overlay">
      <div class="text-container letraGeneral">
        <div class="TituloWorld">World Games</div>
        <p class="letraWorld">¡¡¡¡Juegos desde un 50% de descuento en tu primera compra para PC,<br>
        Nintendo, Xbox, PS3 y más soló en World <br>
        Regístrate aquí, esta es tu oportunidad!!!!</p>
        <button type="button">Your turn</button>
  </div>
  </div>
  </div>