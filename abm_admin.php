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
        <input type="submit" name="boton_datos_clientes" value="VER"><br>
        <label><strong>Buscar por apellido</strong></label>
        <input type="text" name="txt_buscar_cliente_nombre" placeholder="ingrese apellido">
        <input type="submit" name="btn_buscar_apellido_cliente"value="BUSCAR">
        <br><label><strong> Modificar correo del cliente seleccionado.</strong></label><BR>
        <label>Ingrese nuevo mail</label>
        <input type="text" name="cliente_nuevo_mail"><br>
        <input type="submit" name="boton_modificar_mail_cliente" value="MODIFICAR">
        <br><label><strong>Eliminar un cliente. </strong></label><BR>
        <input type="text" name="txt_eliminar_cliente_nombre" placeholder="ingrese ID">
        <input type="submit" name="btn_eliminar_apellido_cliente"value="DELETE">
        <br><label><strong>CREAR un cliente. </strong></label><BR>
        <input type="text" name="txt_crear_cliente_apellido" placeholder="ingrese APELLIDO">
        <input type="text" name="txt_crear_cliente_nombre" placeholder="ingrese NOMBRE">
        <input type="text" name="txt_crear_cliente_dni" placeholder="ingrese DNI"><br>
        <input type="text" name="txt_crear_cliente_telefono" placeholder="ingrese TELEFONO">
        <input type="text" name="txt_crear_cliente_mail" placeholder="ingrese MAIL">
        <input type="text" name="txt_crear_cliente_sexo" placeholder="ingrese SEXO"><br>
        <input type="password" name="txt_crear_cliente_pass" placeholder="ingrese PASSWORD">
        <input type="submit" name="btn_crear_cliente"value="Alta Cliente">
    </form><!--------------------------- form --------------------------------------------------->
</body>
</html>
<!-------------------------- P  H   P  --------------------------------------------->
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
//-------------------------- BOTON BUSCAR X APELLIDO CLIENTE---------------------------------------------//
    if(isset($_POST['btn_buscar_apellido_cliente'])){
        $apellido_cliente = $_POST['txt_buscar_cliente_nombre'];
        $query_buscar_apellido_cliente = "SELECT * FROM clientes WHERE apellido = '$apellido_cliente';";
        $rtdo_buscar_apellido_cliente = mysqli_query($conexion,$query_buscar_apellido_cliente);
        if(! $rtdo_buscar_apellido_cliente){
            echo"APELLIDO INEXISTENTE";
            exit;
        }
        $datos_apellido_clientes = mysqli_fetch_assoc($rtdo_buscar_apellido_cliente);
        echo '<br>Número de socio :'.$datos_apellido_clientes['id'];
        echo"<br>Apellido:\t".strtoupper($datos_apellido_clientes['apellido']);
        echo"<br>Nombre :\t".strtoupper($datos_apellido_clientes['nombre']);
        echo"<br> DNI :\t".strtoupper($datos_apellido_clientes['dni']);
        echo"<br> Mail :\t".strtoupper($datos_apellido_clientes['mail']);
        echo"<br> Teléfono :\t".strtoupper($datos_apellido_clientes['telefono']);
        echo"<br> Sexo :\t".strtoupper($datos_apellido_clientes['sexo']);
    }
//-------------------------- BOTON ELIMINAR CLIENTE X ID ---------------------------------------------//
    if(isset($_POST['btn_eliminar_apellido_cliente'])){
        $id_cliente_eliminar = intval($_POST['txt_eliminar_cliente_nombre']);
        $query_id_cliente_eliminar = "DELETE FROM clientes WHERE id = '$id_cliente_eliminar';";
        $rtdo_eliminar_cliente = mysqli_query($conexion, $query_id_cliente_eliminar);
        if(! $rtdo_eliminar_cliente){
            echo"ERROR DELETE CLIENTE";
            exit;
        }
    }
//-------------------------- BOTON CREATE DATOS CLIENTE---------------------------------------------
    if(isset($_POST['btn_crear_cliente'])){
        $apellido=$_POST['txt_crear_cliente_apellido'];
        $nombre=$_POST['txt_crear_cliente_nombre'];
        $dni=$_POST['txt_crear_cliente_dni'];
        $mail=$_POST['txt_crear_cliente_mail'];
        $telefono=$_POST['txt_crear_cliente_telefono'];
        $sexo=$_POST['txt_crear_cliente_sexo'];
        $pass=$_POST['txt_crear_cliente_pass'];

        $query="INSERT INTO clientes(  apellido , nombre , dni , telefono , mail , sexo , pass) VALUES 
        ('$apellido','$nombre','$dni','$telefono','$mail','$sexo', '$pass');";

        $rtdo= mysqli_query($conexion, $query);
        var_dump($query);
        var_dump($rtdo);
        if(! $rtdo){
            echo"FALSE CREATE"; exit;
        }

    }
?><!-----------------------------------------------------------------------------------------------------------------php?--->
<!-------------------------- CIERRE CONEXION --------------------------------------------->
<?php
mysqli_close($conexion) ;
?>