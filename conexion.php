<?php
    $host_db="localhost:3308";
    $user_db="root";
    $pass_db="diego12345";
    $db_name="UNI";
    $conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);
    if($conexion->connect_error){
        echo"<h1>No se pudo</h1>";
    }
?>