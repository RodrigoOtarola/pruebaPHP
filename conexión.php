<?php
$link = 'mysql:host=localhost;dbname=prueba';
$usuario = 'root'
$password = 'root'

try{

    $mdb = new PDO($link,$usuario,$password);
    echo 'Estamos llegando';

}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>