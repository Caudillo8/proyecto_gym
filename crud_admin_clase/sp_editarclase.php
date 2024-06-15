<?php

include ('../conexion.php');
//-------- PERMISO DE SESIÓN - Admin
session_start();
if (!$_SESSION['ingreso']) {
    header('Location:../login_admin.php');
    exit();
}

$id = $_POST['id'];
$fecha = $_POST['fecha'];
$inicio = $_POST['inicio'];
$fin = $_POST['fin'];
$fk_actividad = $_POST['fk_actividad'];
$cupos = $_POST['cupos'];
$comentarios = $_POST['comentarios'];

$update = "UPDATE clases SET id='$id', fecha='$fecha', inicio='$inicio', fin='$fin', fk_actividad='$fk_actividad', cupos='$cupos', comentarios='$comentarios' WHERE id = $id;";
$query = mysqli_query($conexion, $update);

if (!$query) {
    echo ("No se pudo modificar.");
} else {
    header("Location: crud_admin_clase.php");
}
