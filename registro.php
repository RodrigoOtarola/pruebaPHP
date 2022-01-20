<?php

if(isset($_POST['grabar'])){
    if (strlen($_POST['rut']) >= 1 && strlen($_POST['nombre']) >= 1 && 
    strlen($_POST['a_paterno']) =>1 && strlen($_POST['a_materno']) >= 1){
        $rut = trim($_POST['rut']);
        $nombre = trim($_POST['nombre']);
        $a_paterno = trim($_POST['a_paterno']);
        $a_materno = trim($_POST['a_materno']);
        $consulta = "INSERT INTO personas(rut, nombre, a_paterno, a_materno) VALUES ('$rut','$nombre','$a_paterno', '$a_materno')";
        $resultado = myslqi_query($link,$consulta);
        if ($resultado){
            
        }
    }

}

?>