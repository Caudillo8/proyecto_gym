<?php
include ('../conexion.php');
//-------- PERMISO DE SESIÓN - Profesor
session_start();
if (!$_SESSION['ingresoProfesor']) {
    header('Location: login_profesor.php');
    exit();
}

$idClase = $_POST['idClase'];
$comentarios = $_POST['comentarios'];

$update = "UPDATE clases SET comentarios = '$comentarios' WHERE id = $idClase;";
$query = mysqli_query($conexion, $update);

if (!$query) {
    echo ("No se pudo modificar el comentario.");
} else {
    header("Location: abm_profesor.php");
}
