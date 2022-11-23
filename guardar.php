<?php

    include("abre.php");

    $Nombre     = $_POST['Nombre'];
    $Apellidos  = $_POST['Apellidos'];
    $Calle      = $_POST['Calle'];
    $Telefono   = $_POST['Telefono'];
    $Correo     = $_POST['Correo'];
    $Sexo       = $_POST['Sexo'];


    $consulta = "INSERT INTO clientes(Nombre, Apellidos, Calle, Telefono, Correo, Sexo) VALUES
    ('$Nombre','$Apellidos','$Calle','$Telefono','$Correo','$Sexo')";


        if ($conexion->query($consulta) === TRUE){
            header('Location: index.php');
            }else{
                echo "Error: " . $consulta . "<br" . $conexion->error;
            }
    $conexion->close();

?>