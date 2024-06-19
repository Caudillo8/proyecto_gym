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
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$mail = $_POST['mail'];
$sexo = $_POST['sexo'];
$contrasena = $_POST['contrasena'];
$fk_actividades = $_POST['fk_actividades'];

$update = "UPDATE profesores SET nombre='$nombre', apellido='$apellido', dni='$dni', telefono='$telefono', sexo='$sexo', mail='$mail', pass=MD5('$contrasena'), fk_actividades='$fk_actividades' WHERE id = $id;";
$query = mysqli_query($conexion, $update);

if(!$query) {
    echo ("No se pudo modificar.");
}
else {
    header("Location: crud_admin_profesor.php");
}
