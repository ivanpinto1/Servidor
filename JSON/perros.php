<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Perro Aleatorio</h1>
    
    <?php
    // Hacer una solicitud a la API
    $url = 'https://dog.ceo/api/breeds/image/random';
    $json_data = file_get_contents($url);
    $data = json_decode($json_data, true);
    
    // Comprobar si la solicitud fue exitosa
    if ($data && $data['status'] === 'success') {
        $imageUrl = $data['message'];
        echo "<img src='$imageUrl' alt='Perro Aleatorio'>";
    } else {
        echo "No se pudo obtener la imagen del perro aleatorio.";
    }
    ?>
</body>
</html>