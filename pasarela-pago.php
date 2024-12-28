<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago</title>
</head>

<body>

    <h1>Realizar Pago</h1>
    <form action="procesar-pago.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required><br><br>
        <label for="monto">Monto:</label>
        <input type="number" id="monto" name="monto" step="0.01" required><br><br>
        <button type="submit">Pagar</button>
    </form>

</body>

</html>
