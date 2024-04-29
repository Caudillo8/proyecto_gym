<?php
 include('conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abm admin</title>
</head>
<body>
    <label><strong>LISTADO CLIENTES</strong></label>
    <form method="post" action="">
        <select name="select_clientes">
            <?php
                $query = "SELECT * FROM clientes WHERE 1 ;" ;
                $resultado = mysqli_query ($conexion , $query);
                if (! $resultado){
                    echo "ERROR CONSULTA select clientes";
                    exit;
                }
            ?>
            <?php while ($fila_clientes = mysqli_fetch_assoc($resultado) ){?> 
            <option name="option_clientes" method="post"    value="<?= $fila_clientes['id'] ?>">
                <?= ucfirst($fila_clientes['apellido']) ?>   <?= ucfirst($fila_clientes['nombre']) ?> 
            </option>
            <?php } ?>
        </select>
        <input type="submit" name="boton_datos_clientes" value="VER">
        <br>
    <br><label><strong> MODIFICAR EL CORREO</strong></label><BR>
    <label>Ingrese nuevo mail</label>
        <input type="text" name="cliente_nuevo_mail"><br>
        <input type="submit" name="boton_modificar_mail_cliente" value="MODIFICAR">
    </form><!--------------------------- form --------------------------------------------------->
</body>
</html>
<!-------------------------- BOTON MOSTRAR DATOS CLIENTE--------------------------------------------->
<?php
    if(isset($_POST['boton_datos_clientes'])){
        $id_clientes= $_POST['select_clientes'];  

        $query_datos_clientes = "SELECT * from clientes WHERE id = '$id_clientes';";
        $resultado_select_clientes = mysqli_query($conexion, $query_datos_clientes);
        $dato_select_clientes = mysqli_fetch_assoc($resultado_select_clientes);
        echo '<br>Número de socio :'.$id_clientes;
        echo"<br>Apellido:\t".strtoupper($dato_select_clientes['apellido']);
        echo"<br>Nombre :\t".strtoupper($dato_select_clientes['nombre']);
        echo"<br> DNI :\t".strtoupper($dato_select_clientes['dni']);
        echo"<br> Mail :\t".strtoupper($dato_select_clientes['mail']);
        echo"<br> Teléfono :\t".strtoupper($dato_select_clientes['telefono']);
        echo"<br> Sexo :\t".strtoupper($dato_select_clientes['sexo']);
    }        
//-------------------------- BOTON MODIFICAR CLIENTE---------------------------------------------//

    if(isset($_POST['boton_modificar_mail_cliente'])){
        $id_clientes= $_POST['select_clientes'];
        $nuevo_mail_cliente = $_POST['cliente_nuevo_mail'];
        $query_modificar_mail_cliente = "UPDATE clientes SET mail = '$nuevo_mail_cliente' WHERE id = '$id_clientes';";
        $resultado_modificar_mail_cliente = mysqli_query($conexion, $query_modificar_mail_cliente);
        if($resultado_modificar_mail_cliente){
            echo"MODIFICA MAIL OK!";
        }else{
            echo"ERROR MODIFICAR MAIL CLIENTE";
            exit;
            }
    }
?>
<!-------------------------- CIERRE CONEXION --------------------------------------------->
<?php
mysqli_close($conexion) ;
?>