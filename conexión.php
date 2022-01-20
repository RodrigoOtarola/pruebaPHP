<?php
$link = 'mysql:host=localhost;dbname=personal';
$usuario = 'root';
$pass = 'root';

try{

    $mdb = new PDO($link,$usuario,$pass);
    echo 'Estamos llegando';

}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>