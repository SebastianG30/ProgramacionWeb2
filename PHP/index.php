<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    
    // Imprime los datos
    echo "Nombre: " . $nombre . "<br>";
    echo "Correo Electrónico: " . $email;
}
?>