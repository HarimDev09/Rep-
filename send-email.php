<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = htmlspecialchars($_POST["text"] ?? '');
    $correo = htmlspecialchars($_POST["gmail"] ?? '');
    $telefono = htmlspecialchars($_POST["number"] ?? '');
    $mensaje = htmlspecialchars($_POST["massage"] ?? '');

    if (!$nombre || !$correo || !$telefono) {
        echo "Faltan campos obligatorios.";
        exit;
    }

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "Correo inválido.";
        exit;
    }

    $to = "contacto@repa-app.com";
    $subject = "Nuevo mensaje de contacto";
    $body = "Nombre: $nombre\nCorreo: $correo\nTeléfono: $telefono\nMensaje:\n$mensaje";
    $headers = "From: $correo\r\nReply-To: $correo\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "¡Tu mensaje ha sido enviado con éxito!";
    } else {
        echo "Error al enviar el mensaje. Intenta más tarde.";
    }
} else {
    echo "Método no permitido.";
}
?>
