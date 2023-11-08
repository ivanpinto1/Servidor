<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$contactos = [
    ['nombre' => 'Messi', 'email' => 'Messi@goat.com', 'telefono' => '103019881'],
    ['nombre' => 'CR7', 'email' => 'CR7@siuuu.com', 'telefono' => '777777777'],
    ['nombre' => 'FernandoAlonso', 'email' => 'FA14@nano.com', 'telefono' => '141414141']
];

function generarArchivoCSV($data, $filename) {
    $file = fopen($filename, 'w');
    if ($file) {
        foreach ($data as $row) {
            fputcsv($file, $row);
        }

        fclose($file);
        return true;
    } else {
        return false;
    }
}

$csvFilename = 'agenda.csv';

if (generarArchivoCSV($contactos, $csvFilename)) {
    echo $json = json_encode($contactos);
    
} else {
    echo "No se pudo generar el archivo CSV.";
}
?>

</body>
</html>