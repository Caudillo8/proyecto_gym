<?php
if (isset($_POST['enviar'])) {
    if (!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['email'])) {
        $name = $_POST['name'];
        $asunto = $_POST['asunto'];
        $msg = $_POST['msg'];
        $email = $_POST['email']; // Asegúrate de tener esta línea para obtener el correo electrónico del formulario

        $header = "From: noreply@example.com" . "\r\n";
        $header .= "Reply-To: noreply@example.com" . "\r\n"; // Corregido el error de sintaxis aquí
        $header .= "X-Mailer: PHP/" . phpversion();

        $mail = mail($email, $asunto, $msg, $header);

        if ($mail) {
            echo "<h4>¡Mail enviado exitosamente!</h4>";
        }
    }
}
?>
