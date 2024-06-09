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

$update = "UPDATE clientes SET nombre='$nombre', apellido='$apellido', dni='$dni', telefono='$telefono', sexo='$sexo', mail='$mail', pass='$contrasena' WHERE id = $id;";
$query = mysqli_query($conexion, $update);

if(!$query) {
    echo ("No se pudo modificar.");
}
else {
    header("Location: crud_admin_cliente.php");
}
