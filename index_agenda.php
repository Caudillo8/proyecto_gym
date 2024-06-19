<?php

include('conexion.php');

session_start();

if($_SESSION['ingresoCliente'])
    header('Location: crud_cliente/abm_cliente.php');
elseif($_SESSION['ingresoProfesor'])
    header('Location: crud_profesor/abm_profesor.php');
else
    header('Location: login_cliente.php');