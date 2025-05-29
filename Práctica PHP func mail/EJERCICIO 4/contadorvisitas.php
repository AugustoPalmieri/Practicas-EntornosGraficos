<?php
session_start();


if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 1;
} else {
    $_SESSION['visitas']++;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de Visitas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin-top: 50px;
        }
        .counter {
            background-color: #fff;
            padding: 30px;
            display: inline-block;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="counter">
        <h1>Contador de visitas</h1>
        <p>Has visitado esta página <strong><?= $_SESSION['visitas'] ?></strong> veces en esta sesión.</p>
        <p><a href="contadorvisitas.php">Recargar página</a></p>  
    </div>
</body>
</html>
