<?php

include ('../conexion.php');
//-------- PERMISO DE SESIÓN - Admin
session_start();
if (!$_SESSION['ingreso']) {
    header('Location:../login_admin.php');
    exit();
}

$id = $_POST['id'];
$nombre = $_POST['nombre'];

$update = "UPDATE actividades SET nombre = '$nombre' WHERE id = $id;";
$query = mysqli_query($conexion, $update);

if(!$query) {
    echo ("No se pudo editar.");
}
else {
    header("Location: crud_admin_actividad.php");
}
