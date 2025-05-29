<?php

$mensaje = "";
$alerta = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = htmlspecialchars(trim($_POST["nombre_usuario"] ?? ''));
    $correo_amigo = filter_var(trim($_POST["correo_amigo"] ?? ''), FILTER_VALIDATE_EMAIL);

    if (!empty($nombre) && $correo_amigo) {

        $sitio_nombre = "DescubríWeb";
        $sitio_url = "https://www.descubriweb.com";

        $asunto = "$nombre te recomienda que conozcas $sitio_nombre";
        $mensaje_html = "
        <html>
        <body>
            <h2>¡Te llegó una recomendación!</h2>
            <p>Tu amigo <strong>$nombre</strong> quiere compartirte el sitio <strong>$sitio_nombre</strong>.</p>
            <p>Podés acceder desde este enlace: <a href='$sitio_url'>$sitio_url</a></p>
            <p>¡Esperamos que lo disfrutes!</p>
        </body>
        </html>";

        $headers  = "From: invitaciones@descubriweb.com\r\n";
        $headers .= "Reply-To: no-responder@descubriweb.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        if (mail($correo_amigo, $asunto, $mensaje_html, $headers)) {
            $mensaje = "La invitación fue enviada correctamente.";
            $alerta = "success";
        } else {
            $mensaje = "No fue posible enviar el correo. Intentalo en unos minutos.";
            $alerta = "danger";
        }
    } else {
        $mensaje = "Por favor completá todos los campos correctamente.";
        $alerta = "warning";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del envío</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <?php if (!empty($mensaje)): ?>
            <div class="alert alert-<?= $alerta ?> text-center">
                <?= $mensaje ?>
            </div>
            <div class="text-center mt-3">
                <a href="form.html" class="btn btn-outline-primary">Volver al formulario</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
