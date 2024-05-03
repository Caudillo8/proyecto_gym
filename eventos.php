<?php
header('Content-Type: application/json');
$pdo=new PDO("mysql:dbname= gimnasio ;host=127.0.0.1","root", "");

// Seleccionar los eventos del calendario
$sentenciaSQL= $pdo->prepare("SELECT * FROM clases");
$sentenciaSQL->execute();

$resultado= $sentenciaSQL->fetchALL(PDO::FETCH_ASSOC);
echo json_encode($resultado);
