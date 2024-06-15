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
    echo ("No se pudo cancelar el cupo.");
}
else {
    header("Location: ver_clases_cliente.php");
}