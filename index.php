<?php

include_once 'conexion.php'; //Para guardar la ruta de la conexión.

$leer = 'SELECT * FROM personas';
$gsent = $pdo->prepare($leer);//Para
$gsent->execute();

$resultado = $gsent->fetchAll();//Devuelve un arreglo.

var_dump($resultado);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <h1>Hola</h1>
    <div>
        
    </div>
</body>
</html>