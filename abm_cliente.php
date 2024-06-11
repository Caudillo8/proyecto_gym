<?PHP
include('conexion.php');
//-------- PERMISO DE SESIÓN - Cliente
session_start();
if (!$_SESSION['ingresoCliente']) {
    header('Location: login_cliente.php');
    exit();
}

?>
<!DOCTYPE html><!----------------- HTML --------->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM CLIENTE</title>
</head>
<body>
    
</body>
</html><!----------------- HTML --------->
<?PHP
mysqli_close($conexion);//---------cierre conexión ---------
 ?>