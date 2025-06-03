<?php
if (isset($_POST['email'])) {
    $to = "contacto@repa-app.com";
    $subject = "Nueva suscripción";
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $body = "Nuevo correo suscrito: $email";

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        mail($to, $subject, $body);
        echo "¡Te has suscrito correctamente!";
    } else {
        echo "Correo inválido.";
    }
}
?>
