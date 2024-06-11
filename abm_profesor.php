<?PHP
include('conexion.php');
//-------- PERMISO DE SESIÓN - Profesor
session_start();
if (!$_SESSION['ingresoProfesor']) {
    header('Location: login_profesor.php');
    exit();
}

?>
<!DOCTYPE html><!----------------- HTML --------->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM PROFESOR</title>
</head>
<body>
    
</body>
</html><!----------------- HTML --------->
<?PHP
mysqli_close($conexion);//---------cierre conexión ---------
 ?>