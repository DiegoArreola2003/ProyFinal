<?php
    $host_db="localhost:3308";
    $user_db="root";
    $pass_db="1234";
    $db_name="UNI";
    $conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);
    if($conexion->connect_error){
        echo"<h1>Hay un error</h1>";
    }
?>