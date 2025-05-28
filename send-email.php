
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "contacto@repa-app.com";
    $subject = "Nuevo mensaje del formulario de contacto";
    $body = "Nombre: $name\nCorreo: $email\nTeléfono: $phone\nMensaje:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje. Inténtalo de nuevo.";
    }
} else {
    echo "Método no permitido.";
}
?>