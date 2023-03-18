<?php
$host = "localhost";
$usuario = "root";
$contrasenia = "";
$base = "tiendavideojuegos";
$mysqli = new mysqli($host,$usuario,$contrasenia,$base);
if($mysqli->connect_errno ){
    echo "No existe la base de datos seleccionada: (".$mysqli->connect_errno.")".$mysqli->connect_error;
}
return $mysqli;

?>