<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = htmlspecialchars(trim($_POST['nombre'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $mensaje = htmlspecialchars(trim($_POST['texto'] ?? ''));

    if ($nombre && $email && $mensaje && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $correoDestino = "augustopalmieri20@gmail.com"; 
        $asunto = "Nuevo mensaje desde el formulario de contacto";

        $contenido = "
        <html>
        <head><meta charset='UTF-8'><title>Formulario de Contacto</title></head>
        <body>
            <h2>Nuevo mensaje recibido</h2>
            <p><strong>Nombre:</strong> {$nombre}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Mensaje:</strong><br>" . nl2br($mensaje) . "</p>
        </body>
        </html>";

        $cabeceras  = "MIME-Version: 1.0\r\n";
        $cabeceras .= "Content-Type: text/html; charset=UTF-8\r\n";
        $cabeceras .= "From: {$nombre} <{$email}>\r\n";

        if (mail($correoDestino, $asunto, $contenido, $cabeceras)) {
            echo "<p>Gracias por tu mensaje, {$nombre}. Lo hemos recibido correctamente.</p>";
        } else {
            echo "<p>Ocurrió un problema al intentar enviar el mensaje.</p>";
        }
    } else {
        echo "<p>Los datos proporcionados no son válidos. Revisá e intentá de nuevo.</p>";
    }
} else {
    echo "<p>Acceso no permitido.</p>";
}
?>
