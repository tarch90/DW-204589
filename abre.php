<?php

$conexion=new mysqli("localhost", "id17365725_alumno", "XPl&w|]Z&W1qHQ@g", "id17365725_escuela");
    if($conexion){
        echo "La gestion fue exitosa!!! ";
        /*header('Location: contact.php');*/
}else{
    echo "Fallo la gestion";
}
?>