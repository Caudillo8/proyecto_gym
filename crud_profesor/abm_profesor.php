<?php
include ('../conexion.php');
//-------- PERMISO DE SESIÓN - Profesor
session_start();
if (!$_SESSION['ingresoProfesor']) {
    header('Location: login_profesor.php');
    exit();
}

$idIngresoProfesor = $_SESSION['idIngresoProfesor'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ver clases - Profesor</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-black">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="../index.html">
                    <img src="../images/logo.png" alt="Fit Fusion" style="width: 50px;">
                    Fit Fusion
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon navbar-dark"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../index_agenda.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar-week" viewBox="0 0 16 16">
                                    <path
                                        d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                </svg>
                                Agenda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../crud_admin.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                </svg>
                                Administración
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../contacto.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                </svg>
                                Contacto
                            </a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../login_profesor.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-file-person" viewBox="0 0 16 16">
                                        <path
                                            d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                        <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    </svg>
                                    Profesores
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../login_cliente.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-file-person" viewBox="0 0 16 16">
                                        <path
                                            d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                        <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    </svg>
                                    Clientes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../login_admin.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-file-person" viewBox="0 0 16 16">
                                        <path
                                            d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                        <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    </svg>
                                    Admin
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container py-5" style="min-height: 670px;">
        <div class="row">
            <div class="col">
                <h2>Tus datos:</h2>
                <?php
                $select = "SELECT p.id, p.apellido, p.nombre, p.telefono, p.dni, p.mail, p.sexo, p.fk_actividades, a.nombre FROM profesores p, actividades a WHERE p.fk_actividades = a.id AND p.id = $idIngresoProfesor;";
                $query = mysqli_query($conexion, $select);
                $rtdo = mysqli_fetch_array($query);
                ?>
                <p>Nombre completo: <?php echo $rtdo[1]; ?> <?php echo $rtdo[2]; ?></php>
                <p>Teléfono: <?php echo $rtdo[3]; ?></p>
                <p>DNI: <?php echo $rtdo[4]; ?></p>
                <p>Sexo: <?php echo $rtdo[6]; ?></p>
                <p>Actividad: <?php echo $rtdo[8]; ?></p>
                <hr class="border border-black border-1 opacity-30 mx-auto" />
            </div>
        </div>
        <div class="row">
            <div class="col-6 my-4">
                <form method="POST">
                    <?php
                    if (!isset($_POST['mesAnio'])) {
                        date_default_timezone_set('America/Argentina/Buenos_Aires');
                        $mesAnio = date('Y-m');
                    } else {
                        $mesAnio = $_POST['mesAnio'];
                    }
                    ?>
                    <label class="form-label">Buscar mis clases por mes:</label>
                    <input type="month" name="mesAnio" class="form-control w-50" value="<?= $mesAnio ?>">
                    <input type="submit" value="VER CLASES" class="my-1 btn btn-primary">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-responsive">
                    <tr>
                        <td scope="col">Fecha</td>
                        <td scope="col">Horario inicio</td>
                        <td scope="col">Horario final</td>
                        <td scope="col">Actividad</td>
                        <td scope="col">Comentario</td>
                        <td scope="col">Opciones</td>
                    </tr>
                    <?php
                    // establezco como default al mes actual, a menos que ya se haya seleccionado uno
                    if (!isset($_POST['mesAnio'])) {
                        date_default_timezone_set('America/Argentina/Buenos_Aires');
                        $mesAnio = date('Y-m');
                    } else {
                        $mesAnio = $_POST['mesAnio'];
                    }

                    // extraigo el mes y anio para filtrar la consulta
                    $timestamp = strtotime($mesAnio);
                    $mes = date('m', $timestamp);
                    $anio = date('Y', $timestamp);

                    // realizo la consulta y la imprimo en la tabla
                    $select = "SELECT c.id, c.fecha, c.inicio, c.fin, c.fk_actividades, a.nombre, c.cupos, c.comentarios AS nombre_actividad, c.cupos, c.comentarios FROM clases c JOIN actividades a ON c.fk_actividades = a.id JOIN profesores p ON p.fk_actividades = c.fk_actividades WHERE p.id = $idIngresoProfesor AND MONTH(c.fecha) = $mes AND YEAR(c.fecha) = $anio AND c.fecha >= CURDATE() ORDER BY c.fecha DESC;";
                    $query = mysqli_query($conexion, $select);
                    while ($resultado = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td scope="row"><?php echo $resultado['1'] ?></td>
                            <td scope="row"><?php echo $resultado['2'] ?></td>
                            <td scope="row"><?php echo $resultado['3'] ?></td>
                            <td scope="row"><?php echo $resultado['5'] ?></td>
                            <td scope="row"><?php echo $resultado['7'] ?></td>
                            <td scope="row">
                                <a class="btn btn-primary my-1"
                                    href="editarcomentario.php?idClase=<?php echo $resultado['0'] ?>&comentarios=<?php echo $resultado['7'] ?>">
                                    Editar comentario
                                </a>
                                <a class="btn btn-outline-primary my-1"
                                    href="alumnos_anotados.php?idClase=<?php echo $resultado['0'] ?>">
                                    Ver alumnos anotados
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <footer>
        <div class="bg-black p-1">
            <hr class="border border-white border-1 opacity-30 mx-auto w-50" />
            <h5 class="text-center text-white my-3">© Aplicación web creada por Grupo 2, Tecnicatura Universitaria en
                Programación, UTN FRH.</h5>
            <h5 class="text-center text-white mb-1">Integrantes del grupo:</h5>
            <h6 class="text-center text-white mb-1">Carossino Martín</h6>
            <h6 class="text-center text-white mb-1">Hernandez Matías</h6>
            <h6 class="text-center text-white mb-1">Sarnari Valentín</h6>
            <h6 class="text-center text-white mb-1">Yedro Fernando</h6>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>

<?php
mysqli_close($conexion);
