<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cliente = htmlspecialchars($_POST['cliente']);
    $producto = htmlspecialchars($_POST['producto']);
    $cantidad = (int) $_POST['cantidad'];

    $stmt = $conn->prepare("INSERT INTO pedidos (cliente, producto, cantidad) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $cliente, $producto, $cantidad);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error al registrar el pedido: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
