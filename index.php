<?php
require 'conexion.php';

$result = $conn->query("SELECT * FROM pedidos ORDER BY fecha DESC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Pedidos</title>
</head>
<body>
    <h1>Gestión de Pedidos</h1>

    <form method="POST" action="procesar.php">
        <label for="cliente">Nombre del Cliente:</label>
        <input type="text" id="cliente" name="cliente" required><br><br>
        <label for="producto">Producto:</label>
        <input type="text" id="producto" name="producto" required><br><br>
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" required><br><br>
        <input type="submit" value="Registrar Pedido">
    </form>

    <hr>

    <h2>Pedidos Registrados</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['cliente']; ?></td>
                    <td><?php echo $row['producto']; ?></td>
                    <td><?php echo $row['cantidad']; ?></td>
                    <td><?php echo $row['fecha']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
