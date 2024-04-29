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
        

    ?>



    </form><!------------------------------------------------------------------------------>
    
</body>
</html>