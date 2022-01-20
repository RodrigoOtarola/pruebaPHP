<?php
$link = 'mysql:host=localhost;dbname=personal';
$usuario = 'root';
$pass = 'root';

try{

    $pdo = new PDO($link,$usuario,$pass);

    /*echo 'Estamos llegando'

    foreach($pdo->query('SELECT * from personas') as $fila) {
        print_r($fila);
    }

}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>