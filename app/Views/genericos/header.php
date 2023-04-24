<html>
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>World Games</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <!-- cards Inicio -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    




    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>





    <script src='https://www.google.com/recaptcha/api.js'></script>

  <style>

  @import url('https://fonts.googleapis.com/css2?family=Tourney:ital,wght@1,800&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Tourney:wght@600&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@800&display=swap');

  .colorLetrasForm{
            color:black;
            font-size: 14px;
        }

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


/*Cards Inicio */
* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  }

  body {
  background: #2e2a2a;
  color: #FFF;
  font-size: 62.5%;
  font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;
  }

  ul {
  list-style-type: none;
  }

  a {
  color: #e95846;
  text-decoration: none;
  }

  .pricing-table-title {
  text-transform: uppercase;
  font-weight: 700;
  font-size: 2.6em;
  color: #FFF;
  margin-top: 15px;
  text-align: left;
  margin-bottom: 25px;
  text-shadow: 0 1px 1px rgba(0,0,0,0.4);
  }

  .pricing-table-title a {
  font-size: 0.6em;
  }

  .clearfix:after {
  content: '';
  display: block;
  height: 0;
  width: 0;
  clear: both;
  }
  /** ========================
  * Contenedor
  ============================*/
  .pricing-wrapper {
  width: 960px;
  margin: 40px auto 0;
  }

  .pricing-table {
  margin: 0 10px;
  text-align: center;
  width: 300px;
  float: left;
  -webkit-box-shadow: 0 0 15px rgba(0,0,0,0.4);
  box-shadow: 0 0 15px rgba(0,0,0,0.4);
  -webkit-transition: all 0.25s ease;
  -o-transition: all 0.25s ease;
  transition: all 0.25s ease;
  }

  .pricing-table:hover {
  -webkit-transform: scale(1.06);
  -ms-transform: scale(1.06);
  -o-transform: scale(1.06);
  transform: scale(1.06);
  }

  .pricing-title {
  color: #FFF;
  background: #e95846;
  padding: 20px 0;
  font-size: 2em;
  text-transform: uppercase;
  text-shadow: 0 1px 1px rgba(0,0,0,0.4);
  }

  .pricing-table.gold .pricing-title {
  background: #efb810;
  }

  .pricing-table.recommended .pricing-action {
  background: #2db3cb;
  }

  .pricing-table.diamond .pricing-title {
  background: #55afc2;
  }

  .pricing-table .price {
  background: #403e3d;
  font-size: 3.4em;
  font-weight: 700;
  padding: 20px 0;
  text-shadow: 0 1px 1px rgba(0,0,0,0.4);
  }

  .pricing-table .price sup {
  font-size: 0.4em;
  position: relative;
  left: 5px;
  }

  .table-list {
  background: #FFF;
  color: #403d3a;
  }

  .table-list li {
  font-size: 1.4em;
  font-weight: 700;
  padding: 12px 8px;
  }


  .table-list li span {
  font-weight: 400;
  }

  .table-list li:nth-child(2n) {
  background: #F0F0F0;
  }

  .table-buy p {
  float: left;
  color: #37353a;
  font-weight: 700;
  font-size: 2.4em;
  }

  .table-buy p sup {
  font-size: 0.5em;
  position: relative;
  left: 5px;
  }

  .table-buy .pricing-action {
  color: #FFF;
  background: #744A41;
  padding: 10px 16px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
  font-weight: 700;
  font-size: 1.4em;
  text-shadow: 0 1px 1px rgba(0,0,0,0.4);
  -webkit-transition: all 0.25s ease;
  -o-transition: all 0.25s ease;
  transition: all 0.25s ease;
  }

  .table-buy .pricing-action:hover {
  background: #cf4f3e;
  }

  .recommended .table-buy .pricing-action:hover {
  background: #228799;  
  }

  /** ================
  * Responsive
  ===================*/
  @media only screen and (min-width: 768px) and (max-width: 959px) {
  .pricing-wrapper {
  width: 768px;
  }

  .pricing-table {
  width: 236px;
  }

  .table-list li {
  font-size: 1.3em;
  }

  }

  @media only screen and (max-width: 767px) {
  .pricing-wrapper {
  width: 420px;
  }

  .pricing-table {
  display: block;
  float: none;
  margin: 0 0 20px 0;
  width: 100%;
  }
  }

  @media only screen and (max-width: 479px) {
  .pricing-wrapper {
  width: 300px;
  }
  } 

  .img1 {
            height: 280px;
            border-radius: 30px;
        }
   

        /*jumbotron*/
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


    /**/
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
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">