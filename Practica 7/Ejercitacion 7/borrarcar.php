<?php
session_start();

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$key = md5($id);

if (isset($_SESSION['carro'][$key])) {
    unset($_SESSION['carro'][$key]);
}

header("Location: catalogo.php");
exit;
