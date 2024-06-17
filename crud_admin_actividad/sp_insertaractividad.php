<?php

include ('../conexion.php');
//-------- PERMISO DE SESIÓN - Admin
session_start();
if (!$_SESSION['ingreso']) {
    header('Location:../login_admin.php');
    exit();
}

$nombre = $_POST['nombre'];

$insert = "INSERT INTO actividades(nombre) VALUES ('$nombre');";
$query = mysqli_query($conexion, $insert);

if(!$query) {
    echo ("No se pudo insertar.");
}
else {
    header("Location: crud_admin_actividad.php");
}
