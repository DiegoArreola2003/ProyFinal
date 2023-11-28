<?php
    require "conexion.php";
    mysqli_set_charset($conexion,'utf8');
    $Nombre = $_POST['Nombre'];
    $Primer_apellido = $_POST['Primer_apellido'];
    $Segundo_apellido = $_POST['Segundo_apellido'];
    $Email = $_POST['Email'];
    $Edad = $_POST['Edad'];
    $Ciudad = $_POST['Ciudad'];
    $Contrasena = $_POST['Contrasena'];
    $query = "INSERT INTO UNI (Nombre, Primer_apellido, Segundo_apellido, Email, Edad, Ciudad, Contrasena)
        VALUES ('$Nombre', '$Primer_apellido', '$Segundo_apellido', '$Email', '$Edad', '$Ciudad', $Contrasena)";
    mysqli_query($conexion, $query);
    mysqli_close($conexion);
    header("location: /ProyFinal/Completo.html");
?>