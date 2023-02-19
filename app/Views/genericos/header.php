<html>
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>World Games</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>



    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />    
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" 
    crossorigin="anonymous" /> -->
    
   <!-- Incluimos los archivos de Bootstrap y reCAPTCHA -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->


     <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->



    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    -->

  <style>

  @import url('https://fonts.googleapis.com/css2?family=Tourney:ital,wght@1,800&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Tourney:wght@600&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@800&display=swap');


  .img1 {
            height: 280px;
        }
 


  @font-face {
    font-family: fuenteGame;
    src: url("../../fuentes/game_over.ttf") format('trueType');
  }


  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  
    /* font-family: fuenteGame"; */
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    /* background-image: url("<?php  echo base_url()?>/imagenes/fondo_1.jpg"); */
    background-color: black;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 0px 0px 0px 0px;
    height: 100%;
    font-family: 'Orbitron', sans-serif;
    color: purple;
    font-weight: bolder;
    font-size:20px;
  }

  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: none;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #150c43;
    z-index: 9999;
    border: 0;
    font-size: 11px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 2px;
    border-radius: 0;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }

  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }


  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }


  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }


  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
    /* .subtitleWorld{
      padding-left: 30px;
      padding-right: 10px;
    }

    .titleWorld{
        font-size: 19px;
      }

    .buttonWorld{
      
      margin-left: 150px;
      padding: 5px;
      border-radius:10px; 
      color:purple; 
      border-color:purple; 
      font-weight:bold; 
      width: 150px;
    } */




  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }



  }

  .imgGames{
    padding-top: 10px;
    width: 100px;
  }

  .card {
  background-color: #ffffff;
  border: 1px solid #333333;
  padding: 20px;
  text-align: center;
  align-content: center;
  margin: 2%;
  border-radius: 50px;
  color:purple; 
  box-shadow: 2px 2px 5px gray; 
  overflow: hidden;
}

.imgcard{
  margin: auto;
  width: 100;
  color:lightgray; 
  box-shadow: 2px 2px 5px gray; 
  border-radius: 10px; 
  overflow: hidden;
  
}

.logoWorld{
  width: 100px;
}

.carrusel{
  width: 100%;

}

.carruselTitulos{
  font-weight: bolder;
  font-size: 40px;
  color: #e80202;
}

.portfolioGames{
  color: purple;
    font-family: 'Orbitron', sans-serif;
}

.backgroundGames{
    background-image: url("<?php  echo base_url()?>/imagenes/fondo6.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    color: white;
    font-weight: bolder;
    height: 105%;
    
}

.carruselBackground{
    /*Cambiar fondo*/
    background-image: url("<?php  echo base_url()?>/imagenes/fondo3.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    color: black;
    font-weight: bolder;

}

.c{
  width: 250px;
}

.c1{
  width: 60%;
  border-radius: 30px;
  margin: auto;
}

.card-title {
  font-weight: bold;
}

.priceCard{
  font-weight: bold;
}

.containerMembership{
  border-radius: 40px;
}
.informacion{
  text-decoration: none;
  color: white;
}

.backgrounFooter{
    background-image: url("<?php  echo base_url()?>/imagenes/fondo6.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    color: white;
    font-family: 'Orbitron', sans-serif;
}

.backgroundCards{
   background-image: url("<?php  echo base_url()?>/imagenes/fondo6.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}

.letraNavbar{
  font-weight: bold;
  font-family: 'Orbitron', sans-serif;
}

.imgInicio{
  background-image: url("<?php  echo base_url()?>/imagenes/fondo_1.jpg");
  height: 60vh;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.content-container {
  /*Checar este que se desborda un poco*/ 
  background-color: none;
  padding-left: 8%;
  padding-right: 8%;
  font-family: 'Orbitron', sans-serif;
  color: purple;
  padding-top: 20px;
  font-weight: bolder;
  /* background-color: red; */
}

.subtitleWorld{
  padding-left: 70px;
  /* background-color: red; */
}

.titleWorld{
    font-size: 50px;
    margin-bottom: -20px;

    /* background-color: red; */
  }

.buttonWorld{
  /* background-color: #f4511e; */
  margin-left: 150px;
  margin-top: 25%;
  padding: 5px;
  border-radius:10px; 
  color:purple; 
  border-color:purple; 
  font-weight:bold; 
  width: 150px;
}

.titleFooter{
  font-family: 'Orbitron', sans-serif;
  font-size: 30px;
  color:#e60202;
}

.letraCarrusel{
  font-family: 'Orbitron', sans-serif;
  color: purple;
}
.letrapCarrusel{
  font-size: 20px;
  font-weight: 700;
  color: whitesmoke;
}
.letrapCarrusel1{
  font-size: 20px;
  font-weight: 700;
  color: whitesmoke;
}

.imgregister{
  background-image: url("<?php  echo base_url()?>/imagenes/fondo6.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}


.fondoCards{
  background-color: #d60202;
}

.letraContaco{
  font-family: 'Orbitron', sans-serif;
}

.letraGeneral{
  font-family: 'Orbitron', sans-serif;
}



  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">