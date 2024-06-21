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
    echo '<script>alert("No se pudo modificar el comentario."); window.location.href = "abm_profesor.php";</script>';
} else {
    echo '<script>alert("Se modificó el comentario correctamente."); window.location.href = "abm_profesor.php";</script>';
}
