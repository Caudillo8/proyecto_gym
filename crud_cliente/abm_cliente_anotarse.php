<?php

include ('../conexion.php');
//-------- PERMISO DE SESIÓN - Cliente
session_start();
if (!$_SESSION['ingresoCliente']) {
    header('Location: ../login_cliente.php');
    exit();
}

// traigo las variables que necesito para anotar
$idIngresoCliente = $_SESSION['idIngresoCliente'];
$idAnotacionAClase = $_GET['idAnotacionAClase'];
$cantidadCupos = $_GET['cantidadCupos'];

// cuento cuantos clientes se anotaron a la clase
/*$select = "SELECT COUNT(*) AS alumnosAnotados FROM reservas WHERE fk_clase = $idAnotacionAClase";
$result = mysqli_query($conexion, $select);
$cuenta = mysqli_fetch_assoc($result);*/

// reviso si el cliente ya se anotó a esta clase
$select = "SELECT * FROM reservas WHERE fk_clase = $idAnotacionAClase AND fk_cliente = $idIngresoCliente";
$result = mysqli_query($conexion, $select);
$repetido = mysqli_fetch_assoc($result);

/*if($cuenta['alumnosAnotados'] >= 0) {
    // si no hay mas cupos para la clase, no lo anoto
    echo ("No hay mas cupos para esta clase.");*/
if($cantidadCupos == 0){
    echo '<script>alert("No hay mas cupos para esta clase."); window.location.href = "abm_cliente.php";</script>';
} elseif($repetido != false) {
    // si ya se anotó a la clase, no lo anoto
    echo '<script>alert("Ya está anotado en esta clase."); window.location.href = "abm_cliente.php";</script>';
} else {
    // si está todo bien, lo anoto
    $insert = "INSERT INTO reservas (fk_cliente, fk_clase) VALUES($idIngresoCliente, $idAnotacionAClase)";
    $query = mysqli_query($conexion, $insert);
    // ACTUALIZAR CUPO DE LA CLASE
    $_query= "UPDATE clases SET cupos = (cupos - 1) where id = $idAnotacionAClase;";
    $_rtdo = mysqli_query($conexion,$_query);


    if(!$query) {
        echo '<script>alert("No se pudo anotar."); window.location.href = "abm_cliente.php";</script>';
    }
    else {
        echo '<script>alert("Te anotaste a la clase correctamente."); window.location.href = "abm_cliente.php";</script>';
    }

}

// cierro conexion
mysqli_close($conexion);