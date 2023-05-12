
<head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  
</head>

<?php
$conn = mysqli_connect("localhost", "root", "", "tiendavideojuegos") or die("Database Error");

// obteniendo el mensaje del usuario a través de ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);



//comprobando la consulta del usuario a la consulta de la base de datos
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

// si la consulta del usuario coincide con la consulta de la base de datos, mostraremos la respuesta; de lo contrario, irá a otra declaración
if (mysqli_num_rows($run_query) > 0) {
    //recuperando la reproducción de la base de datos de acuerdo con la consulta del usuario
    $fetch_data = mysqli_fetch_assoc($run_query);
    //almacenando la respuesta a una variable que enviaremos a ajax
    $replay = $fetch_data['replies'];
    echo $replay;
} else {
    echo "¡Lo siento, no puedo ayudarte con este inconveniente! Favor comunícate con el administrador en el siguiente enlace:
    
    </br><a href='contacto@worldgames.com.mx '>Contacto</a>";
}

?>