<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();

if (isset($_POST['iniciar'])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contraseña'];

    // Ruta al archivo CSV
    $archivo_csv = 'datos.csv';

    // Leer el archivo CSV y buscar las credenciales
    $archivo = fopen($archivo_csv, 'r');

    if ($archivo) {
        $credenciales_validas = false;

        while (($datos = fgetcsv($archivo)) !== false) {
            $usuario_csv = $datos[0];
            $contrasena_csv = $datos[1];

            if ($usuario == $usuario_csv && $contrasena == $contrasena_csv) {
                $credenciales_validas = true;
                break;
            }
        }
    }
        fclose($archivo);
    if ($credenciales_validas) {
        $_SESSION['usuario'] = $usuario;
        header('Location: chat.php'); // Cambia "otra_pagina.php" por la URL de la página que desees
        exit;
    } else {
        $_SESSION['guardar'] = "Contraseña o usuario incorrectos. Inténtalo de nuevo.";
        header('Location: login.php'); // Redirige de nuevo a la página de inicio de sesión si las credenciales son incorrectas
        exit;
    }
}
?>

</body>
</html>