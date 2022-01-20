<?php

include_once 'conexion.php' //Para guardar la ruta de la conexión.

$leer = 'SELECT * FROM personas';
$gsent = $pdo->prepare($leer);//Para
$gsent->execute();

$resultado = $gsent->fetchAll();//Devuelve un arreglo.

var_dump($resultado);

?>