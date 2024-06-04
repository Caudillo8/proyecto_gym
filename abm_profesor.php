<?PHP
include('conexion.php');
//-------- session--------//
session_start();
if (!$_SESSION['ingreso']){
    header( 'Location:login_profesor.php');
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