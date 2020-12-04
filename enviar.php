<?php

    $destino = "beltransanchezjuandedios@gmail.com";
    $nombre = $_POST["Nombre"];
    $apellido = $_POST["Apellido"];
    $nombreCompleto = $nombre . " " . $apellido;
    $correo = $_POST["Correo"];
    $asunto = $_POST["Asunto"];
    $mensaje = $_POST["Mensaje"];

    $titulo = "Sitio web: " . $nombreCompleto . " te quiere hablar sobre " . $asunto;

    $contenido = "Nombre: " . $nombreCompleto . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;

    mail($destino, $titulo, $contenido);
    header("Location:gracias.html");

?>