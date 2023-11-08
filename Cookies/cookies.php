<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Ropa</title>
</head>
<style>
    body{
        text-align: center;
    }
    table{
        margin-top:3%;
        margin-left: 45%;
        border-color: green;
    }
    th{
        background-color: lightgreen;
    }
</style>
<body>
    <?php
    $seleccionPrev = isset($_COOKIE['seleccion']) ? $_COOKIE['seleccion'] : '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $seleccion = $_POST['seleccion'];
        setcookie('seleccion', $seleccion, time() + 30);
        $seleccionPrev = $seleccion;
    }
    ?>
        <form method="POST">
            Selecciona una categoría:
            <select name="seleccion">
                <option value="camisetas">Camisetas</option>
                <option value="pantalones">Pantalones</option>
            </select>
            <input type="submit" value="Seleccionar">
        </form>
    <?php
    if (!empty($seleccionPrev)) {
        $csvFile = 'articulos.csv';
        if (($handle = fopen($csvFile, 'r')) != false) {
            echo '<table border="1"><tr><th>Categoría</th><th>Color</th></tr>';
            while (($data = fgetcsv($handle)) != false) {
                if ($data[0] == $seleccionPrev) {
                    echo '<tr>';
                    echo '<td>' . $data[0] . '</td>';
                    echo '<td>' . $data[1] . '</td>';
                    echo '</tr>';
                }
            }
            echo '</table>';
            fclose($handle);
        }
    }
    ?>
</body>
</html>
