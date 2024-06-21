<?php

include ('../conexion.php');
//-------- PERMISO DE SESIÓN - Cliente
session_start();
if (!$_SESSION['ingresoCliente']) {
    header('Location: ../login_cliente.php');
    exit();
}

// traigo las variables que necesito para cancelar
$idIngresoCliente = $_SESSION['idIngresoCliente'];
$idCancelarClase = $_GET['idCancelarClase'];

// cancelo el cupo
$delete = "DELETE FROM reservas WHERE fk_cliente = $idIngresoCliente AND fk_clase = $idCancelarClase;";
$query = mysqli_query($conexion, $delete);

if(!$query) {
    echo '<script>alert("No se pudo cancelar el cupo."); window.location.href = "ver_clases_cliente.php";</script>';
}
else {
    // ACTUALIZO CANT CUPO CLASE
    $_query = "UPDATE clases SET cupos = ( cupos + 1) WHERE id = $idCancelarClase;" ;
    $_rtdo = mysqli_query($conexion, $_query);
    echo '<script>alert("Cancelaste el cupo correctamente."); window.location.href = "ver_clases_cliente.php";</script>';
}