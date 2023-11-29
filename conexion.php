<?php
    $conexion = new mysqli("localhost:3306","root","diego12345","uni");
    if($conexion->connect_error){
        echo"<h1>No se pudo</h1>";
    }
?>
