<?php
$mensaje = ''; // Inicializamos la variable $mensaje para almacenar los mensajes de error o éxito

if (isset($_POST['enviar'])) {
    // Verificar si todos los campos están completos
    if (!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['email'])) {
        $name = $_POST['name'];
        $asunto = $_POST['asunto'];
        $msg = $_POST['msg'];
        $email = $_POST['email'];

        $header = "From: noreply@example.com" . "\r\n";
        $header .= "Reply-To: noreply@example.com" . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();

        // Enviamos el correo
        $mail = mail($email, $asunto, $msg, $header);

        if ($mail) {
            $mensaje = "<h4>¡Mail enviado exitosamente!</h4>";
        } else {
            $mensaje = "<h4>Ocurrió un error al enviar el correo.</h4>";
        }
    } else {
        $mensaje = "<h4>Por favor, completa todos los campos del formulario.</h4>";
    }
}
?>

<!-- Lugar para mostrar el mensaje -->
<?php echo $mensaje; ?>