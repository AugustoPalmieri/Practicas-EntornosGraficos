<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $nombre = trim($_POST['nombre'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $mensaje = trim($_POST['mensaje'] ?? '');

    $nombre = htmlspecialchars($nombre);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $mensaje = htmlspecialchars($mensaje);

    
    if (!$nombre || !$email || !$mensaje || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Por favor completá todos los campos correctamente.";
        echo "<br><a href='formulariocontacto.html'>Volver</a>";
        exit;
    }

    $destinatario = "augustopalmieri20@gmail.com";
    $asunto = "Formulario de contacto recibido";
    $contenido = " Datos del formulario:\n";
    $contenido .= "Nombre: $nombre\n";
    $contenido .= "Correo: $email\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    $cabeceras = "From: $email\r\n";
    $cabeceras .= "Reply-To: $email\r\n";

    if (mail($destinatario, $asunto, $contenido, $cabeceras)) {
        echo "¡Gracias por tu mensaje, $nombre! Te responderemos pronto.";
    } else {
        echo "Hubo un error al enviar el formulario. Por favor intentá nuevamente.";
    }
} else {
    header("Location: formulariocontacto.html");
    exit;
}
?>
