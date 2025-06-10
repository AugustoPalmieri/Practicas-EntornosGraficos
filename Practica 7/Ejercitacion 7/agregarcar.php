<?php
session_start();
require_once 'config.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$cantidad = isset($_POST['cantidad']) ? intval($_POST['cantidad']) : 1;

$stmt = $conn->prepare("SELECT * FROM catalogo WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($row) {
    $carro = isset($_SESSION['carro']) ? $_SESSION['carro'] : [];
    $key = md5($id);
    $carro[$key] = [
        'identificador' => $key,
        'cantidad' => $cantidad,
        'producto' => $row['producto'],
        'precio' => $row['precio'],
        'id' => $id
    ];
    $_SESSION['carro'] = $carro;
}

header("Location: catalogo.php");
exit;
