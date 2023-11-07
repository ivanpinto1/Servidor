<?php
session_start();

if (isset($_POST['cerrar'])) {
    // Destruye la sesión
    session_destroy();

    // Redirige al usuario a la página de inicio de sesión
    header('Location: login.php');
    exit;
}
?>
