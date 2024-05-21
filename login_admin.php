<?php
include('conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos.css" type="text/css" rel="stylesheet" />
    <title>ADMINISTRADOR</title>
</head>
<body class="cuerpo_login_admin">
    <form  action = "" method= "post"  class="login_admin"   >
    <label>USUARIO   <label><input type="text" name="usuario"><br>
    <label>CLAVE    <label><br><input type="password" name="clave"><br>
    <input type="submit" name="ingresar" value="INGRESAR" ><br><br>
    <a href="cerrar_sesion.php">CERRAR SESIÓN</a><br>
    <br><a href="index.html">INICIO</><br>
</form>
</body>
</html>
<?php
    session_start(); 
    $_SESSION['ingreso'] = false ;
    if (isset ($_POST['ingresar'])){
        $clave = md5($_POST['clave']);
        $usuario = $_POST['usuario'];
//--------------ADMINISTRADORES---------------------------------
    $query = "SELECT * FROM administradores
                WHERE  usuario = '$usuario'
                AND pass = '$clave';" ;
    $resultado = mysqli_query ($conexion , $query);
    $fila = mysqli_fetch_assoc($resultado);
  
    if ($fila  ){
        $_SESSION['ingreso'] = true ;
        header('Location:abm_admin.php');
    }else{
        header('Location:index.html');
    }

}
?>

<?php
mysqli_close($conexion);
?>