<?php

    include("conexiones.php");

    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];
    $numero = $_POST['numero'];


    $consulta = "INSERT INTO alumnos(nombre, mensaje, numero) VALUES
    ('$nombre','$mensaje', '$numero')";

    if ($conexion ->query($consulta) === TRUE){
        header("Location: index.php");
    }else{
        echo "Error: " .$consulta . "<br>" . $conexion->error;
    }
    $conexion->close();

?>