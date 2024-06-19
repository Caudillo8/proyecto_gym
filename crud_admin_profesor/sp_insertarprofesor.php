<?php

include ('../conexion.php');
//-------- PERMISO DE SESIÓN - Admin
session_start();
if (!$_SESSION['ingreso']) {
    header('Location:../login_admin.php');
    exit();
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$mail = $_POST['mail'];
$sexo = $_POST['sexo'];
$contrasena = $_POST['contrasena'];
$fk_actividades = $_POST['fk_actividades'];

$insert = "INSERT INTO profesores(apellido, nombre, dni, telefono, mail, sexo, pass, fk_actividades) VALUES ('$apellido','$nombre','$dni', '$telefono', '$mail', '$sexo', MD5('$contrasena'), '$fk_actividades');";
$query = mysqli_query($conexion, $insert);

if(!$query) {
    echo ("No se pudo insertar.");
}
else {
    header("Location: crud_admin_profesor.php");
}
