<?php

$conexion = new mysqli("localhost", "root", "", "uacj");
    if($conexion){
        echo "La gestion fue exitosa !!";
    } else {
        echo "Fallo la gestion";
    }
?>