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
    <h2>¿Querés hacer una reserva en una clase? Elegí una fecha:</h2>
    <form method="post">
        <input type="date" name="almanaque"> <input type="submit" name="btn_ver_fecha" value="VER FECHA">
        <h2>MIS CLASES:</h2><input type="submit" value="VER Mis clases"><br>
        <input name="btn_ver_clases"type="submit"value="VER TODAS LAS CLASES"><p>todas las clases ->este es solo para testear</p>
    </form>   
</body>
</html><!----------------- HTML --------->
<?php
    if(isset($_POST['btn_ver_fecha'])){
        $fecha = $_POST['almanaque']  ;
        $query = "SELECT * FROM clases WHERE fecha = '$fecha' ";
        $rtdo = mysqli_query($conexion,$query);
        $fila = mysqli_fetch_assoc($rtdo);
        echo"Fecha ".$fila['fecha']."<br>";
        echo"Horario de inicio: " .$fila['inicio']."<br>";
        echo"Horario de fin: " .$fila['fin']."<br>";
        //Busco nombre de actividad en su tabla
        $id_actividad=intval($fila['fk_actividad']);
        $query_1= "SELECT nombre FROM actividades WHERE id = '$id_actividad';";
        $rtdo_1= mysqli_query($conexion,$query_1);
        $fila_1 = mysqli_fetch_assoc($rtdo_1);
        echo"Actividad: " .$fila_1['nombre']."<br>";
        echo"<input type='radio' name='clase_selected' >";
        echo"<input type='submit' name='btn_clase_anotar' value='QUIERO ANOTARME A ESTA CLASE!'>";
        echo"<br>***************************************<br>";
    }
?>
<?php
    if(isset($_POST['btn_ver_clases'])){
        $fecha = $_POST['almanaque'] ;
        $query = "SELECT * FROM clases WHERE 1;";
        $rtdo = mysqli_query($conexion,$query);
        while($fila = mysqli_fetch_assoc($rtdo)){
            echo "FECHA: ".$fila['fecha']."<br>";
            echo "INICIO: ".$fila['inicio']."<br>";
            echo "FIN: ".$fila['fin']."<br>";
            echo"-------------------------------------<br>";
        }
        
    }

?>



<!---------cierre conexión -------->
<?PHP
mysqli_close($conexion);

