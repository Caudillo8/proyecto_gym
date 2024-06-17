<? 
include('conexion.php'); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calendario Web</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Moment.js -->
    <script src="js/moment.min.js"></script>
    <!-- Full Calendar CSS -->
    <link rel="stylesheet" href="css/fullcalendar.min.css">
    <!-- Full Calendar JavaScript -->
    <script src="js/fullcalendar.min.js"></script>
    <!-- Full Calendar idioma español -->
    <script src="js/es.js"></script>
    <!-- Popper.js para Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- Contenedor principal -->

    <div class="container">
        <div class="row">
            <div class="col"></div>
            <!-- Columna central -->
            <div class="col-7">
                <!-- Div para el Calendario -->
                <div id="CalendarioWeb"></div>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <!-- Script para inicializar FullCalendar -->

    <script>
        $(document).ready(function(){
            $('#CalendarioWeb').fullCalendar({
                // Configuración del header del calendario
                header:{
                      left:   'today, prev, next, Miboton', // Botones de navegación
                      center: 'title',                      // Título del calendario
                      right:  'month, basicWeek, basicDay, agendaWeek, agendaDay' // Vistas del calendario
                },
                // Definición de botón personalizado
                customButtons:{
                    Miboton:{
                        text:"Botón 1",
                        click:function(){
                            alert("Acción del botón ");
                        }
                    }
                },
                // Función para manejar el clic en un día del calendario
                dayClick: function(date, jsEvent, view) { 
                    $('#txtFecha').val(date.format());  // Establece la fecha seleccionada en el campo de texto
                    $("#ModalEventos").modal();        // Muestra el modal de eventos
                },
                // URL para obtener eventos del servidor
                events:'http://localhost/proyecto_gym/conexion.php',
                // Función para manejar el clic en un evento del calendario
                eventClick:function(calEvent, jsEvent, view){
                    $('#tituloEvento').html(calEvent.title);       // Muestra el título del evento en el modal
                    $('#descripcionEvento').html(calEvent.descripcion); // Muestra la descripción del evento en el modal
                    $("#exampleModal").modal(); // Muestra el modal de detalles de evento
                }
            });
        });
    </script>

    <!-- Modal para detalles de evento -->
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="tituloEvento"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="descripcionEvento"></div>
          </div>
          <div class="modal-footer">
            <!-- Botones para Agregar, Modificar, Borrar y Cancelar -->
            <button type="button" class="btn btn-success">Agregar</button>
            <button type="button" class="btn btn-success">Modificar</button>
            <button type="button" class="btn btn-danger">Borrar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal para Agregar, Modificar, Borrar -->
    <div class="modal fade" id="ModalEventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="tituloEvento"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="descripcionEvento"></div>
            <!-- Campos para ingresar detalles del evento -->
            Fecha: <input type="text" id="txtFecha" name="txtFecha" /><br/>
            Titulo: <input type="text" id="txtTitulo" ><br/>
            Hora: <input type="text" id="txtHora" value="10:30" /><br/>
            Descripcion: <textarea id="txtDescripcion" rows="3"></textarea> <br/>
            Color: <input type="color" value="#ff0000" id="txtColor"><br/>
          </div>
          <div class="modal-footer">
            <!-- Botones para Agregar, Modificar, Borrar y Cancelar -->
            <button type="button" id="boton_agregar" class="btn btn-success">Agregar</button>
            <button type="button" class="btn btn-success">Modificar</button>
            <button type="button" class="btn btn-danger">Borrar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Script para manejar la acción de agregar un nuevo evento -->

    <script>
        $('#boton_agregar').click(function(){
            var NuevoEvento= {
              title:$('#txtTitulo').val(),
              start:$('#txtFecha').val()+" "+$('#txtHora').val(),
              color:$('#txtColor').val(),
              descripcion:$('#txtDescripcion').val(),
              textColor:"#FFFFFF"

            };
            // Agrega el evento al calendario
            //$('#CalendarioWeb').fullCalendar('renderEvent',NuevoEvento );
            var mje = "<?php echo updateMensaje(); ?>";
            alert(mje);
            // Cierra el modal de eventos
            $("#ModalEventos").modal('toggle');
        });
    </script>

</body>
</html>