<?php

include ('../conexion.php');
//-------- PERMISO DE SESIÓN - Admin
session_start();
if (!$_SESSION['ingreso']) {
    header('Location:../login_admin.php');
    exit();
}

$fecha = $_POST['fecha'];
$inicio = $_POST['inicio'];
$fin = $_POST['fin'];
$fk_actividad = $_POST['fk_actividad'];
$cupos = $_POST['cupos'];
$comentarios = $_POST['comentarios'];

$insert = "INSERT INTO clases(fecha, inicio, fin, fk_actividades, cupos, comentarios) VALUES ('$fecha','$inicio','$fin', '$fk_actividad', '$cupos', '$comentarios');";
$query = mysqli_query($conexion, $insert);

if(!$query) {
    echo ("No se pudo insertar.");
}
else {
    header("Location: crud_admin_clase.php");
}
