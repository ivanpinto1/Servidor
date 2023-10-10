<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fichero = fopen("agenda.csv", "w");
        $contacto1 = "Pepe, Perez, 688978456\n";
        fwrite($fichero, $contacto1);
        $contacto2 = "Ana, Gonzalez, 622325447\n";
        fwrite($fichero, $contacto2);
        echo"añade un contacto";
    ?>
    <br>
    <form method="post" action="agendaa.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" placeholder="Apellido">
        <label for="telefono">Telefono:</label>
        <input type="number" name="telefono" id="telefono" placeholder="Telefono">
        <br>
        <input type="submit">
    </form>
</body>
</html>