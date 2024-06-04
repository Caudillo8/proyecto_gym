<?php
 include('conexion.php');
//--------PERMISO DE SESIÓN-----administrador------------------
     session_start();    
     if (!$_SESSION['ingreso']){
         header( 'Location:login_admin.php');
         exit();
     }
?>
<!---------H  T  M  L  ***********************************************************---------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>abm admin</title>
</head>
<body>
    <h2>CLIENTES</h2>
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
        <!--- VER DATOS--->
        <input type="submit" name="boton_datos_clientes" value="VER"><br>
        <!--- BUSCAR CLIENTE APELLIDO --->
        <label><strong>Buscar por apellido</strong></label>
        <input type="text" name="txt_buscar_cliente_nombre" placeholder="ingrese apellido">
        <input type="submit" name="btn_buscar_apellido_cliente"value="BUSCAR">
        <!--- UPDATE MAIL --->
        <br><label><strong> Modificar correo del cliente seleccionado.</strong></label><BR>
        <input type="text" name="cliente_nuevo_mail" placeholder="miCorreo@mail.com">
        <input type="submit" name="boton_modificar_mail_cliente" value="MODIFICAR MAIL"><br>
        <!--- UPDATE TELÉFONO --->
        <br><label><strong> Modificar teléfono del cliente seleccionado.</strong></label><BR>
        <input type="text" name="cliente_nuevo_telefono" placeholder="nuevo Teléfono">
        <input type="submit" name="boton_modificar_telefono_cliente" value="MODIFICAR TELÉFONO"><br>
        <!--- DELETE CLIENTE --->
        <br><label><strong>Eliminar un cliente. </strong></label><BR>
        <input type="text" name="txt_eliminar_cliente_nombre" placeholder="ingrese ID">
        <input type="submit" name="btn_eliminar_apellido_cliente"value="DELETE">
        <!--- CREATE CLIENTE --->
        <br><label><strong>CREAR un cliente. </strong></label><BR>
        <input type="text" name="txt_crear_cliente_apellido" placeholder="ingrese APELLIDO">
        <input type="text" name="txt_crear_cliente_nombre" placeholder="ingrese NOMBRE">
        <input type="text" name="txt_crear_cliente_dni" placeholder="ingrese DNI"><br>
        <input type="text" name="txt_crear_cliente_telefono" placeholder="ingrese TELEFONO">
        <input type="text" name="txt_crear_cliente_mail" placeholder="ingrese MAIL">
        <input type="text" name="txt_crear_cliente_sexo" placeholder="ingrese SEXO"><br>
        <label><strong>Seleccione actividad ( o PASE LIBRE)</strong></label>
        <!---poder elegir 2 actvs pero si selecc pase libre que se bloqueen las otras--->
        <select name="select_clientes_actividades">
            <?php
                $query = "SELECT * FROM actividades WHERE 1 ;" ;//traigo todas las actividades
                $resultado = mysqli_query ($conexion , $query);
                if (! $resultado){
                    echo "ERROR CONSULTA select actividades";
                    exit;
                }
            ?>
            <?php while ($fila_actividades = mysqli_fetch_assoc($resultado) ){?> 
            <option name="option_actividades_1" method="post"    value="<?= $fila_actividades['id'] ?>">
                <?= ucfirst($fila_actividades['nombre']) ?>   
            </option>
            <?php } ?>
        </select>

        <br><input type="password" name="txt_crear_cliente_pass" placeholder="ingrese PASSWORD">
        <input type="submit" name="btn_crear_cliente"value="Alta Cliente">
    </form><!--------------------------- form --------------------------------------------------->
    <!---******************************* PROFESORES -------------------->
    <hr>
    <h2>PROFESORES.</h2>
    <form method="post" action="">
        <!-----------------VER DATOS PROFESOR --------------------------------->
        <label><strong>Listado de profesores:</strong></label>
        <select name="select_profesores">
            <?php
                $query = "SELECT * FROM profesores WHERE 1;" ;// me traigo los profesores
                $rtdo = mysqli_query($conexion , $query) ;
                if (!$rtdo){
                    echo "ERROR LÍNEA 90"; exit;
                } 
            ?>    
            <?php while ( $dato_profesor = mysqli_fetch_assoc($rtdo)  ){ ?> <!-- { --->
            <option name="option_profesor" method = "post " value=" <?= $dato_profesor['id'] ?> ">
              <?= ucfirst($dato_profesor['apellido']) ?> <?= ucfirst($dato_profesor['nombre']) ?>
            </option>
            <?php } ?> <!--- {}  cierre ---> 
        </select>
        <input type="submit" value="SELECCIONAR PROFESOR" name="btn_ver_profesor"><!--btn ver datos-->
        <!--- ELIMINAR UN PROFESOR  ------------------------------------------------------->
        <br><label><strong>Eliminar un profesor:</strong></label>
        <input type="text" name="id_profesor_eliminar" placeholder="ID PROFESOR ELIMINAR">
        <input type="submit" name="btn_profesor_eliminar" value="DELETE PROFESOR">
        <!---PROFESOR UPDATE TELEFONO ---------------------------------------->
        <br><label><strong>Actualizar teléfono:</strong></label>
        <input type="text" name="txt_profesor_nuevo_telefono" placeholder="ingresa nuevo teléfono">
        <input type="submit" name="btn_profesor_update_telefono" value="UPDATE TELEFONO">
        <!---PROFESOR UPDATE CORREO ---------------------------------------->
        <br><label><strong>Actualizar correo electrónico:</strong></label>
        <input type="text" name="txt_profesor_nuevo_mail" placeholder="ingresa nuevo correo">
        <input type="submit" name="btn_profesor_update_mail" value="UPDATE MAIL">
        <!--- CREATE PROFESOR -------------->
        <br><BR><label><strong><U>INGRESAR NUEVO PROFESOR.</U></strong></label>
        <br><label><strong>INGRESAR APELLIDO.</strong></label>
        <input type="text" name="txt_nuevo_apellido" placeholder="apellido">
        <br><label><strong>INGRESAR NOMBRE.</strong></label>
        <input type="text" name="txt_nuevo_nombre" placeholder="nombre">
        <br><label><strong>INGRESAR DNI.</strong></label>
        <input type="text" name="txt_nuevo_dni" placeholder="dni">
        <br><label><strong>INGRESAR SEXO.</strong></label>
        <input type="text" name="txt_nuevo_sexo" placeholder="sexo">
        <br><label><strong>INGRESAR TELÉFONO.</strong></label>
        <input type="text" name="txt_nuevo_telefono" placeholder="teléfono">
        <br><label><strong>INGRESAR MAIL.</strong></label>
        <input type="text" name="txt_nuevo_mail" placeholder="correo">
        <br><label><strong>Seleccione ACTIVIDAD QUE DICTA.</strong></label>
        <select  name="select_actv_profesor">
            <?php
            $query = "SELECT * FROM actividades WHERE 1;" ;
            $rtdo = mysqli_query($conexion , $query);
            ?>
            <?php while ($fila = mysqli_fetch_assoc($rtdo) ){  ?>
            <option method="post" action="" value="<?=$fila['id']?>">
                <?= $fila['nombre']?>
            </option>
            <?php  }?>
        </select>
        <br><label><strong>INGRESAR CLAVE.</strong></label>
        <input type="pass" name="txt_nuevo_pass" placeholder="contraseña">
        <br><input type="submit" name="btn_create_profesor" value="CREATE PROFESOR"><!--BTN CREATE PROFESOR--->
        
    </form><!---  form PROFESORES ----------------------------------------------------------------->
    <hr>
    <h2><U>ACTIVIDADES/DISCIPLINAS.</U></h2><!--------------------ACTIVIDADES **************************-->
    <form method="post" action="" >
        <input type="submit" value="MOSTRAR ACTIVIDADES" name="btn_mostrar_actividades">
        <h3>Editar/Eliminar una actividad.</h3>
        <label><strong>Seleccione actividad.</strong></label>
        <select name="select_actividades">
            <?php
                $query= "SELECT * FROM actividades WHERE 1;";
                $rtdo = mysqli_query($conexion, $query);
            ?>
            <?php while ($fila = mysqli_fetch_assoc($rtdo)){?>
            <option name="optn_actv" method="post" value="<?=$fila['id']?>">
                <?= $fila['id']?> : <?= $fila['nombre']?>
            </option>
            <?php }?>
        </select><br>
        <input type="text" name="txt_update_actividad" placeholder="nuevo nombre">
        <input type="submit" name="btn_update_actividad" value="EDITAR"><br>
        <input type="submit" name="btn_delete_actividad" value="ELIMINAR"><br>
        <h3>AGREGAR una actividad.</h3>
        <input type="text" name="txt_create_actividad" placeholder="nombre NUEVA actividad">
        <input type="submit" name="btn_create_actividad" value="AGREGAR"><br>
    </form>


    <HR><!---los echo de php salen acá abajo...--->
    <strong>OUTPUT</strong><br>
</body>
</html><!------       HTML          -------->
<!-------------------------- P  H   P  --------------------------------------------->
<!---BTN MOSTRAR ACTIVIDADES--------------------------------------------------------- ACTIVIDADES ---------------->
<?php
    if(isset($_POST['btn_mostrar_actividades'])){
        $id_selected = intval($_POST['select_actividades']);//REFERENCIA
        $query ="SELECT * from actividades where 1;";
        $rtdo = mysqli_query($conexion, $query);
        while( $fila=mysqli_fetch_assoc($rtdo) ){
            echo"<id>".$fila['id'];
            echo" : ";
            echo"<nombre>".$fila['nombre'];
            echo"<br>";
        }        
    }
?>
<!-----------------------BTN DELETE ACTIVIDADES --------------------------------------->
<?php
    if(isset($_POST['btn_delete_actividad'])){
        $id_selected = intval($_POST['select_actividades']);
        $query = "DELETE FROM actividades WHERE id = '$id_selected';" ;
        $rtdo = mysqli_query($conexion,$query);
        if(!$rtdo){
            echo"FALSE DELETE ACTIVIDADES";exit;
        }
    }
?>
<!-----------------------BTN ACTV CREATE --------------------------------------->
<?php
    if(isset($_POST['btn_create_actividad'])){
        $nuevo = $_POST['txt_create_actividad'];
        $query = "INSERT INTO actividades (nombre) VALUES ('$nuevo');" ;
        $rtdo = mysqli_query($conexion, $query);
        if(!$rtdo){
            echo"FALSE CREATE ACTV."; EXIT;
        }
    }
?>
<!-----------------------BTN ACTV MODIFICAR NOMBRE --------------------------------------->
<?php
    if(isset($_POST['btn_update_actividad'])){
        $id_selected = intval($_POST['select_actividades']);
        $cambio = $_POST['txt_update_actividad'];
        $query="UPDATE actividades SET nombre = '$cambio' WHERE id = '$id_selected';";
        $rtdo = mysqli_query($conexion, $query);
        if(! $rtdo){
            echo"FALSE UPDATE ACTIVIDAD"; EXIT;
        }
    }
?>
<!------------------------- BTN UPDATE PROFESOR MAIL --------------------------------------------->
<?php
    if(isset($_POST['btn_profesor_update_mail'])){
        $id_selected = intval($_POST['select_profesores']);
        $nuevo =$_POST['txt_profesor_nuevo_mail'];
        $update =  "UPDATE profesores SET mail = '$nuevo' WHERE id = '$id_selected';";
        $rtdo = mysqli_query($conexion , $update);
        if(!$rtdo){
            echo"ERROR UPDATE PROFE mail"; exit;
        }      
    }
?>
<!-------------------------- BTN UPDATE PROFESOR TELEFONO --------------------------------------------->
<?php
    if(isset($_POST['btn_profesor_update_telefono'])){
        $id_selected = intval($_POST['select_profesores']) ;
        $nuevo =$_POST['txt_profesor_nuevo_telefono'];
        $update ="UPDATE profesores SET telefono = '$nuevo' WHERE id = '$id_selected';";
        $rtdo =mysqli_query($conexion , $update);
        if(!$rtdo){
            echo"ERROR UPDATE PROFE tel"; exit;
        }  
    }
?>
<!-------------------------- BTN DELETE PROFESOR  --------------------------------------------->
<?php
    if(isset($_POST['btn_profesor_eliminar'])){
        $id_selected = intval($_POST['id_profesor_eliminar']);

        $delete = "DELETE FROM profesores WHERE id = '$id_selected'";
        $rtdo = mysqli_query($conexion, $delete);
        if(!$rtdo){
            echo"ERROR DELETE PROFE"; exit;
        }  
    }
?>
<!-------------------------- BTN CREATE PROFESOR  --------------------------------------------->
<?php
    if (isset($_POST['btn_create_profesor']) ){
        $apellido=$_POST['txt_nuevo_apellido'] ;
        $nombre = $_POST['txt_nuevo_nombre'];
        $sexo =$_POST['txt_nuevo_sexo'] ;
        $dni =$_POST['txt_nuevo_dni'] ;
        $mail = $_POST['txt_nuevo_mail'];
        $telefono =$_POST['txt_nuevo_telefono'] ;
        $actividad =$_POST['select_actv_profesor'] ;
        $pass = $_POST['txt_nuevo_pass'];

        $insert = "INSERT INTO profesores( apellido, nombre, dni, 
        telefono, mail, sexo, fk_actividades, pass) 
        VALUES ('$apellido' , '$nombre' , '$sexo' , '$dni' ,
            '$mail' , '$telefono' , '$actividad', md5('$pass')
        );";
        //var_dump($insert);
        $rtdo = mysqli_query($conexion , $insert);
        if(! $rtdo){
            echo"FALSE CREATE profesor"; exit;
        }

     }
?>
<!-------------------------- BTN VER DATOS PROFESOR  --------------------------------------------->
<?PHP
    if(isset($_POST['btn_ver_profesor'])){
        $id_selected = $_POST['select_profesores'];
        $query = "SELECT * FROM profesores WHERE id = '$id_selected';" ;
        $rtdo = mysqli_query($conexion , $query);
        $fila = mysqli_fetch_assoc($rtdo);       
        //---------- voy a tabla actividades ---------------
        $query_actv = "SELECT nombre FROM actividades WHERE id = '$fila[fk_actividades]';" ;
        $rtdo_actv = mysqli_query($conexion , $query_actv);
        $nombre_actv = mysqli_fetch_assoc($rtdo_actv);
        //------------  impresión en pantalla -----------------
        echo"<br>ID : \t".$fila['id'];
        echo"<br>APELLIDO :\t".strtoupper($fila['apellido']);
        echo"<br>NOMBRE :\t".strtoupper($fila['nombre']);
        echo"<br>DNI :\t".strtoupper($fila['dni']);
        echo"<br>TELÉFONO :\t".strtoupper($fila['telefono']);
        echo"<br>MAIL :\t".strtoupper($fila['mail']);
        echo"<br>SEXO :\t".strtoupper($fila['sexo']);
        echo"<br>ACTIVIDAD/ES QUE DICTA :\t".strtoupper($nombre_actv['nombre']);
    }
?>
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
        // ----  BUSCAR NOMBRE DE LA ACTIVIDAD EN LA TABLA ACTIVIDAD---//
        $id_actv_1= $dato_select_clientes['fk_actv_1'];
        $query_actv_1 = "SELECT * FROM actividades WHERE id = '$id_actv_1'; ";
        $rtdo_actv_1 = mysqli_query($conexion , $query_actv_1) ;
        $dato_actv_1 = mysqli_fetch_assoc($rtdo_actv_1);
        echo"<br> Actividad 1 :\t".strtoupper( $dato_actv_1['nombre']);
    }        
//-------------------------- BOTON MODIFICAR MAIL CLIENTE---------------------------------------------//
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
//-------------------------- BOTON MODIFICAR TELÉFONO CLIENTE---------------------------------------------//
if(isset($_POST['boton_modificar_telefono_cliente'])){
    $id_clientes= $_POST['select_clientes'];
    $nuevo_telefono_cliente = $_POST['cliente_nuevo_telefono'];
    $query_modificar_telefono_cliente = "UPDATE clientes SET telefono = '$nuevo_telefono_cliente' WHERE id = '$id_clientes';";
    $resultado_modificar_telefono_cliente = mysqli_query($conexion, $query_modificar_telefono_cliente);
    if($resultado_modificar_telefono_cliente){
        echo"MODIFICA TELÉFONO OK!";
    }else{
        echo"ERROR MODIFICAR TELÉFONO CLIENTE";
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
        $actv1=$_POST['select_clientes_actividades'];
        $pass=$_POST['txt_crear_cliente_pass'];

        $query="INSERT INTO clientes(  apellido , nombre , dni , telefono , mail , sexo , pass, fk_actv_1 , fk_actv_2) 
        VALUES 
        ('$apellido','$nombre','$dni','$telefono','$mail','$sexo', md5('$pass') , '$actv1' , NULL );";//----MD5 encript

        $rtdo= mysqli_query($conexion, $query);
        if(! $rtdo){
            echo"FALSE CREATE"; exit;
        }

    }
?><!-----------------------------------------------------------------------------------------------------------------php?--->
<!-------------------------- CIERRE CONEXION --------------------------------------------->
<?php
mysqli_close($conexion) ;
?>