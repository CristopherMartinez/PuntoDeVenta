<?php
session_start();

$_SESSION['datosTest'] = $_POST['listaDeseo'];


print_r($_SESSION['datosTest']);

?>

