<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Perfil de Administrador - Tienda de Videojuegos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style>
  .backgrounFooter{
    background-image: url("<?php  echo base_url()?>/imagenes/fondo6.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    color: white;
    font-family: 'Orbitron', sans-serif;
}
</style>

<body class="backgrounFooter">
 
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
         
            <a class="navbar-brand" href="#">World Games</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="inicio">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="registroVideojuegos">Videojuegos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="registroAdmin">Administradores</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="listaPedidos">Pedidos</a>
                </li>
            </ul>
            </div>
        </nav>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

