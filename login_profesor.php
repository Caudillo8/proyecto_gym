<?php
include ('conexion.php');
session_start();
$_SESSION['ingreso'] = false;//que sea lo primero que se invoca!!!!!!!!!!!!!!
?>
<?php
if (isset($_POST['ingresar'])) {
    $clave = md5($_POST['clave']);
    $usuario = $_POST['usuario'];
    //--------------ADMINISTRADORES---------------------------------
    $query = "SELECT * FROM profesores
                WHERE  mail = '$usuario'
                AND pass = '$clave';";
    $resultado = mysqli_query($conexion, $query);
    $fila = mysqli_fetch_assoc($resultado);

    if ($fila) {
        $_SESSION['ingreso'] = true;
        header('Location:abm_profesor.php');
    } else {
        header('Location:login_profesor.php');
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PROFESOR</title>
</head>
<body>
    <form method="post">
        <label>INGRESE USUARIO</label><input type="text" name="usuario"><br><!--- es el mail--->
        <label>INGRESE CLAVE</label><input type="password" name="clave"><br>
        <input  type="submit" name="ingresar" value="Ingresar">
        </form>
</body>
</html>
<?php
mysqli_close($conexion);
?>