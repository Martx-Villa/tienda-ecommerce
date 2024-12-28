<?php

// Aqui se reemplazan las creedenciales a utilizar.

$api_key = 'tu_clave_secreta_o_credenciales';
$monto = $_POST['monto'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

// Confirmación de envio de datos.

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        
        $respuesta = [
            'status' => 'success',
            'mensaje' => 'Pago realizado con éxito.',
        ];

        echo json_encode($respuesta);
    } catch (Exception $e) {
        
        // Manejo de errores.

        $error = [
            'status' => 'error',
            'mensaje' => $e->getMessage(),
        ];

        echo json_encode($error);
    }
} else {
    echo "Método no permitido.";
}

?>
